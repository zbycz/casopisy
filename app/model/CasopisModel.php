<?php

namespace Casopisy;

use Nette;
use \dibi;

class CasopisModel {

    private static $casopisy;
    public static $showUnpublished = false;
    public static $casopis_id;

	/** Get anonymous entities (or one)
	 * @param int [$id]
	 * @return array of $idx => object(id, url, odkaz, long)
	 */
	static function config($id = NULL) {
		if (!self::$casopisy){
			self::$casopisy = array();
			foreach (\Nette\Environment::getVariable("casopisy") as $idx => $row) {
				self::$casopisy[$idx] = (object) array(
					'id' => $idx,
					'url' => $row[0],
					'odkaz' => $row[1],
					'nazev' => isset($row[2]) ? $row[2] : $row[1],
					'knihovna' => ($row[0] == 'knihovna'),
				);
			}
		}
		if (isset($id)){
			if (isset(self::$casopisy[$id]))
				return self::$casopisy[$id];
			return false;
		}
		return self::$casopisy;
	}

    /** @return array of idx => odkaz */
    static function getCasopisy() {
	    $result = array();
	    foreach (self::config() as $idx => $r) {
		    $result[$idx] = $r->odkaz;
	    }
        return $result;
    }

	/** @return array of url => idx */
    static function getCasopisyURL() {
	    $result = array();
	    foreach (self::config() as $idx => $r) {
		    $result[$r->url] = $idx;
	    }
	    return $result;
    }

	/** @return string odkaz */
    static function getCasopisById($id) {
        self::config();
        if (isset(self::$casopisy[$id]))
            return self::$casopisy[$id]->odkaz;
        return false;
    }

	/** @return string plný-název */
    static function getCasopisLongById($id) {
	    self::config();
        if (isset(self::$casopisy[$id]))
            return self::$casopisy[$id]->nazev;
        return false;
    }


	// -----------------   stavové metody --------------------


	/** @return string odkaz */
    static function getCasopis(){
        return self::getCasopisById(self::$casopis_id);
    }

	/** @return string plný-název */
    static function getCasopisLong(){
        return self::getCasopisLongById(self::$casopis_id);
    }

	// --------------   databázové metody -----------------


	/** @return Cislo[] index: $id casopisu*/
	static function getPosledniCisla(){
		$cisla = array();
		foreach (self::getCasopisy() as $idx => $txt) {
			//if ($idx >= 6) break;
			$data = dibi::fetch("
				SELECT *
				FROM cislo
				WHERE casopis_id = %i",$idx," AND verejne=1 AND priloha=0
				ORDER BY rok DESC, mesic DESC
				LIMIT 1");
			if ($data)
				$cisla[] = new Cislo($data);
		}
		return $cisla;
	}

	/** @return Cislo[] index: $id casopisu*/
	static function getCislaMesice($rok, $mesic){
		$query = dibi::query("
				SELECT *
				FROM cislo
				WHERE rok = %i",$rok," AND mesic = %i",$mesic," AND verejne=1 AND priloha=0
					AND casopis_id <= 4 -- Skautsky svet
				ORDER BY casopis_id");
		$cisla = array();
		foreach ($query as $r) {
			$cisla[] = new Cislo($r);
		}
		return $cisla;
	}

    /** @return Cislo[] index: $id casopisu*/
    static function getPosledniCislaCasopisu($casopis_id, $pocet){
        $query = dibi::query("
				SELECT *
				FROM cislo
				WHERE casopis_id = %i",$casopis_id," AND verejne=1 AND priloha=0
				ORDER BY rok DESC, mesic DESC
				LIMIT %i", $pocet);
        $cisla = array();
        foreach ($query as $r) {
            $cisla[] = new Cislo($r);
        }
        return $cisla;
    }

	static function getCislaTodo()
	{
		$query = dibi::query("
				SELECT c.*,
					IFNULL((SELECT SUM(o.nazev!='') FROM obsah o WHERE o.cislo_id = c.id),0) AS pocet_nazvu,
					(SELECT COUNT(DISTINCT strana) FROM tag t WHERE t.cislo_id = c.id) AS pocet_tagu,
					pocet_stran - IFNULL((SELECT SUM(o.strany_navic) FROM obsah o WHERE o.cislo_id = c.id),0) AS pocet_obsahu
				FROM cislo c
				WHERE casopis_id = %i",self::$casopis_id," AND verejne=1 AND priloha=0 AND hotovo=0
				ORDER BY (pocet_nazvu + pocet_tagu)/2/pocet_obsahu DESC, c.rok DESC, c.mesic DESC
			");
		$cisla = array();
		foreach ($query as $r) {
			$c = new Cislo($r);
			if ($c->percentDone <= 99)
				$cisla[] = $c;
		}
		return $cisla;
	}

    static function getRocnik($rocnik) {
        $rocnik = dibi::fetch("
            SELECT rocnik, casopis_id, min(rok) od, max(rok) do, count(1) pocet
            FROM cislo
            WHERE casopis_id=%i", self::$casopis_id, "
                AND rocnik = %s", $rocnik, "
                AND priloha=0
                %if", !self::$showUnpublished, " AND verejne = 1 %end
            GROUP BY rocnik
            ORDER BY CAST(rocnik AS unsigned) DESC
          ");
        if($rocnik)
            return new Rocnik($rocnik);
        return false;
    }

    static function getRocniky() {
        $rocniky = dibi::query("
            SELECT rocnik, casopis_id, min(rok) od, max(rok) do, count(1) pocet
            FROM cislo
            WHERE casopis_id=%i", self::$casopis_id, "
                AND priloha=0
                %if", !self::$showUnpublished, " AND verejne != 0 %end
            GROUP BY rocnik
            ORDER BY CAST(rocnik AS unsigned) DESC
          ");
        $result = array();
        foreach ($rocniky as $r)
            $result[] = new Rocnik($r);

        return $result;
    }

    static function getAllTags() {
        $tagy = dibi::query("
            SELECT DISTINCT tag, casopis_id, count(1) AS pocet
            FROM tag t
            LEFT JOIN cislo c ON t.cislo_id = c.id
            WHERE casopis_id=%i", self::$casopis_id,"
              %if",!CasopisModel::$showUnpublished," AND verejne = 1 %end
            GROUP BY tag
            ORDER BY tag
            ");
        $result = array();
        foreach ($tagy as $r)
            $result[$r["tag"]] = new Tag($r);

        return $result;
    }


    public static $months = array(
        1 => 'leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen', 'listopad', 'prosinec'
    );

    // admin only
    function getTagsStarting($q, $limit = false) {
        return dibi::query("
            SELECT DISTINCT tag
            FROM tag t
            LEFT JOIN cislo c ON t.cislo_id = c.id
            WHERE tag LIKE %s", $q . "%", "
              AND casopis_id=%i", self::$casopis_id, "
            %if",$limit," LIMIT %i", $limit)->fetchAssoc("[]=tag");
    }
}
