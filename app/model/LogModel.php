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
