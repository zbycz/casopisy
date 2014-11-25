<?php

namespace Casopisy;

use Nette;
use \dibi;

/**
 */
class CisloModel
{

	static private $cisloCache = array();

	/**
	 * @return \Casopisy\Cislo|boolean
	 */
	static function getById($id)
	{
		if (!isset(self::$cisloCache[$id])) {
			$cislo = dibi::fetch("SELECT * FROM cislo WHERE id=%i", $id);
			self::$cisloCache[$id] = $cislo ? new Cislo($cislo) : false;
		}

		return self::$cisloCache[$id];
	}

	static function upload($casopis_id, $file)
	{
		dibi::query("INSERT INTO cislo", array('casopis_id' => $casopis_id, 'poznamka' => $file->name));
		$id = dibi::insertId();
		$cislo = CisloModel::getById($id);
		$file->move($cislo->getPdfPath());

		$cislo->execNumberOfPages();
		$cislo->execConvertImages();
		$cislo->execBookmarks();
		$cislo->execIndexFulltext();

		return $id;
	}

	static function bulkFilesDir()
	{
		return Nette\Environment::getVariable("wwwDir") . '/bulkinsert';
	}

	static function bulkFiles()
	{
		$list = array();
		$dir = self::bulkFilesDir();
		if (file_exists($dir)) {
			foreach (\Nette\Utils\Finder::findFiles("*.pdf")->from($dir) as $file => $info) {
				$list[] = $file;
			}
			sort($list);
		}
		return $list;
	}

	static function bulkInsert($casopis_id)
	{
		$log = array();
		foreach (self::bulkFiles() as $file) {
			dibi::query("INSERT INTO cislo", array('casopis_id' => $casopis_id, 'poznamka' => str_replace(self::bulkFilesDir(), "", $file)));
			$id = dibi::insertId();
			$cislo = CisloModel::getById($id);
			rename($file, $cislo->getPdfPath());

			try {
				$cislo->execNumberOfPages();
				$cislo->execIndexFulltext();

			} catch (\Exception $e) {
				$log[] = $e->getMessage();
			}

		}
		return $log;
	}

}
