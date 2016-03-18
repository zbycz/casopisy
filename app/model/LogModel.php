<?php

namespace Casopisy;

use Nette;
use \dibi;

/**
 */
class LogModel
{

	/** @return ArrayHash|FALSE */
	static function getById($id)
	{
		$log = dibi::fetch("SELECT * FROM log WHERE id=%i", $id);
		if ($log)
			return Nette\ArrayHash::from($log);
		return FALSE;
	}

	static function getAll($od)
	{
		$log = dibi::query("
			SELECT l.*, u.*, c.*, o.strany_navic
			FROM log l
			LEFT JOIN user u ON u.id = l.user_id
			LEFT JOIN cislo c ON c.id = l.cislo_id
			LEFT JOIN obsah o ON o.cislo_id = l.cislo_id AND o.strana = l.strana
			WHERE [time] >= %s",$od,"
				AND typ LIKE 'edit-%'
			ORDER BY time ASC
			LIMIT 100
		");

		$result = array();
		foreach ($log->fetchAssoc('cislo_id,strana,#') as $cislo_id => $stranyLog){
			$result[] = $c = new Cislo(current(current($stranyLog)));
			$c->stranyLog = $stranyLog;
		}

		return $result;
	}

	/** @return ArrayHash */
	static function add($cid, $p, $typ, $nova = "", $puvodni = NULL)
	{
		$user = Nette\Environment::getContext()->user;
		$data = array(
			'user_id' => $user ? $user->id : 0,
			'cislo_id' => $cid,
			'strana' => $p,
			'typ' => $typ,
			'nova' => $nova,
			);
		if ($puvodni != NULL)
			$data['puvodni'] = $puvodni;

		dibi::query("INSERT INTO log", $data);
	}

	static function getZebricek($month = NULL)
	{
		return dibi::query("
			SELECT name, sum(typ != 'removeTag' AND typ != 'pribrat') cnt
			FROM log l
			LEFT JOIN user u ON u.id = l.user_id
			WHERE typ LIKE 'edit-%'
				%if",$month," AND YEAR(time)=YEAR(%d",$month,") AND MONTH(time)=MONTH(%d",$month,")   %end
			GROUP BY user_id
			ORDER BY cnt DESC
			");
	}
}
