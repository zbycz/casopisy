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

	static function getAll()
	{
		$log = dibi::query("
			SELECT l.*, u.*, c.*, o.strany_navic
			FROM log l
			LEFT JOIN user u ON u.id = l.user_id
			LEFT JOIN cislo c ON c.id = l.cislo_id
			LEFT JOIN obsah o ON o.cislo_id = l.cislo_id AND o.strana = l.strana
			ORDER BY time ASC
		");

		$result = array();
		foreach ($log->fetchAssoc('cislo_id,strana,#') as $cislo_id => $stranyLog){
			$result[] = $c = new Cislo(current(current($stranyLog)));
			$c->stranyLog = $stranyLog;
		}

		return $result;
	}

	/** @return ArrayHash */
	static function add($cid, $p, $typ, $nova, $puvodni = NULL)
	{
		$data = array(
			'user_id' => Nette\Environment::getContext()->user->id,
			'cislo_id' => $cid,
			'strana' => $p,
			'typ' => $typ,
			'nova' => $nova,
			);
		if ($puvodni != NULL)
			$data['puvodni'] = $puvodni;

		dibi::query("INSERT INTO log", $data);
	}

}
