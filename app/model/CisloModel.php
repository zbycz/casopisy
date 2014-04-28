<?php

namespace Casopisy;

use Nette;
use \dibi;

/**
 */
class CisloModel
{

	/**
	 * @return \Casopisy\Cislo|boolean
	 */
	static function getById($id)
	{
		$cislo = dibi::fetch("SELECT * FROM cislo WHERE id=%i", $id);
		if ($cislo) {
			return new Cislo($cislo);
		}
		return false;
	}

	static function upload($casopis_id, $file)
	{
		dibi::query("INSERT INTO cislo", array('casopis_id' => $casopis_id, 'poznamka' => $file->name));
		$id = dibi::insertId();
		$cislo = CisloModel::getById($id);
		$file->move($cislo->getPdfPath());

		$pdf = escapeshellarg($cislo->getPdfPath());
		$img = escapeshellarg($cislo->getPage()->getPath(false));
		$log = escapeshellarg($cislo->getLogFile());
		$bm = escapeshellarg($cislo->getBookmarksFile());

		//find out number of pages
		$pages = exec("pdfinfo $pdf  | awk '/Pages/ {print \$2}'");
		if (!is_numeric($pages))
			throw new \Exception("pdfinfo returned '$pages' on $pdf (maybe apt-get install poppler-utils?)");
		else
			$cislo->save(array("pocet_stran" => $pages));

		//convert images - asynchronous
		exec("nohup nice -n19 ionice -c3 convert -trim -scene 1 -verbose -density 100 $pdf $img >$log 2>&1 &");

		//get bookmarks - asynchronous
		exec("nohup pdftk $pdf dump_data >$bm 2>&1 &");

		//index fulltext
		$cislo->indexFulltext();

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

			//find out number of pages
			$pdf = escapeshellarg($cislo->getPdfPath());
			$pages = exec("pdfinfo $pdf  | awk '/Pages/ {print \$2}'");
			if (!is_numeric($pages))
				$log[] = "$file - pdf not readable - zero pages";
			else
				$cislo->save(array("pocet_stran" => $pages));

			$cislo->indexFulltext();
		}
		return $log;
	}

}
