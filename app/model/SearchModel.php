<?php

namespace Casopisy;

use \dibi;


class SearchModel {


	static function search($query, $casopis=NULL)
	{
		if($query == "")
			return array();

		$casopis_where = "AND verejne >= 1";
		if(isset($casopis))
			$casopis_where .= " AND casopis_id = ".intval($casopis);

		$result = array();

		//like - tagy
		$stranky = dibi::query("
            SELECT t.cislo_id, t.strana,
            	o.strany_navic, o.nazev, o.popis, c.casopis_id
            FROM tag t
            LEFT JOIN obsah o USING(cislo_id, strana)  -- může být NULL (neexistuje obsah, existuje tag)
            LEFT JOIN cislo c ON t.cislo_id = c.id
            WHERE tag LIKE %s","%$query%","
              $casopis_where
            ORDER BY rocnik DESC, cislo");
		foreach($stranky as $r){
			$index = $r['cislo_id'] . "-" . $r['strana'];
			$result[$index] = new Obsah($r);
		}

		//like - nadpis/popis
		$stranky = dibi::query("
            SELECT o.cislo_id, o.strana,
            	o.strany_navic, o.nazev, o.popis, c.casopis_id
            FROM obsah o
            LEFT JOIN cislo c ON o.cislo_id = c.id
            WHERE (
            	o.nazev LIKE %s","%$query%","
            	OR o.popis LIKE %s","%$query%","
              )
              $casopis_where
            ORDER BY rocnik DESC, cislo");
		foreach($stranky as $r){
			$index = $r['cislo_id'] . "-" . $r['strana'];
			if(!isset($result[$index]))
				$result[$index] = new Obsah($r);
		}

		// texty
		$stranky = dibi::query("
			SELECT f.cislo_id, IFNULL(o.strana,f.strana) strana, f.text,
				o.strany_navic, o.nazev, o.popis, c.casopis_id
			FROM `fulltext` f
			LEFT JOIN `obsah` o ON o.cislo_id = f.cislo_id  -- nemusi existovat
				AND f.strana >= o.strana
				AND f.strana <= o.strana+o.strany_navic
			LEFT JOIN `cislo` c ON c.id = f.cislo_id
		    WHERE MATCH(text) AGAINST (%s",$query," IN BOOLEAN MODE)
		      $casopis_where
		    ORDER BY MATCH(text) AGAINST (%s",$query,") DESC
	    ");
		foreach($stranky as $r){
			$index = $r['cislo_id'] . "-" . $r['strana'];

			if(!isset($result[$index]))
				$result[$index] = new Obsah($r);

			// přidat text (ze stránky) ikdyž se matchnul nadpis/popis (ze článku)
			else
				$result[$index]->text = $r['text'] . (isset($result[$index]->text) ? $result[$index]->text : '');
		}


		return $result;
	}


}

