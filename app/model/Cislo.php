<?php

namespace Casopisy;

use Nette,
    Nette\Environment;
use \dibi;

/**
  CREATE TABLE `cislo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `casopis_id` tinyint(2) NOT NULL,
  `rocnik` tinyint(2) NOT NULL,
  `cislo` tinyint(2) NOT NULL,
  `rok` smallint(4) NOT NULL,
  `mesic` tinyint(2) NOT NULL,
  `verejne` tinyint(1) NOT NULL,
  `priloha` tinyint(1) NOT NULL,
  `poznamka` text COLLATE utf8_czech_ci NOT NULL,
  `popis` text COLLATE utf8_czech_ci NOT NULL,
  `pocet_stran` int(11) NOT NULL,
  PRIMARY KEY (`id`) */
class Cislo extends Entity {

	private $obsah = array();

    /**
     * @return Obsah[]
     */
    function getObsah() {
		if (count($this->obsah))
			return $this->obsah;

        $stranky = dibi::query("SELECT * FROM obsah WHERE cislo_id=%i", $this->id)->fetchAssoc('strana');
		$this->setObsah($stranky);
        return $this->obsah;
    }

	function setObsah($stranky) {
        for ($pagenum = 1; $pagenum <= $this->pocet_stran; $pagenum++) {
            if (isset($stranky[$pagenum]))
                $obsah = new Obsah($stranky[$pagenum]);
            else
                $obsah = new Obsah(array("cislo_id" => $this->id, "strana" => $pagenum));

			$this->obsah[$pagenum] = $obsah;
            $pagenum += $obsah->strany_navic;
        }
	}

	function getPrilohy() {
        $prilohy = dibi::query("
            SELECT *
            FROM cislo
            WHERE casopis_id=%i", $this->casopis_id, "
                AND rocnik=%i", $this->rocnik, "
                AND cislo=%i", $this->cislo, "
                AND priloha=1
                %if", !CasopisModel::$showUnpublished, " AND verejne = 1 %end
          ");
        $result = array();
        foreach ($prilohy as $r)
            $result[] = new Cislo($r);

        return $result;
    }

    /** WARNING: NOT FILLED FROM DATABASE BEFORE getObsah() CALLED
     * @return \Casopisy\Obsah
     */
    function getPage($strana = 1) {
		if (isset($this->obsah[$strana]))
			return $this->obsah[$strana];
        return new Obsah(array("cislo_id" => $this->id, "strana" => $strana));
    }

    function getCoverLink($size = "") {
        return $this->getPage()->getLink(1, $size);
    }

    function deleteObsah($strana) {
        dibi::query("DELETE FROM obsah WHERE cislo_id=%i", $this->id, " AND strana=%i", $strana);
        dibi::query("DELETE FROM [tag] WHERE cislo_id=%i", $this->id, " AND strana=%i", $strana);
    }

    function getLogFile() {
        return Environment::getVariable("dataDir") . "/pdf/$this->id.log";
    }

    function getPdfPath() {
        return Environment::getVariable("dataDir") . "/pdf/$this->id.pdf";
    }

    function getPdfLink() {
        return Environment::getHttpRequest()->getUrl()->getBasePath()
                . "data/pdf/$this->id.pdf";
    }

	function getPdfFilename() { //Roverský kmen 2004-05.pdf
		return "$this->casopis $this->rok-$this->mesic.pdf";
	}

    function getPdfSize(){
        $size = @filesize($this->getPdfPath());
        return round($size / 1024 / 1024, $size>10e7 ? 0 : 1) . " MB";
    }

    function getCasopis() {
        return CasopisModel::getCasopisLongById($this->casopis_id);
    }

    function getMesicTxt() {
        if (!$this->mesic)
            return "N/A";
        return CasopisModel::$months[$this->mesic];
    }

    function getMesicrok() {
        return "$this->mesicTxt $this->rok";
    }

	function getPercentDone() {
		$hotovo = $this->pocet_tagu + $this->pocet_nazvu;
		$obsahu = 2*$this->pocet_obsahu -3; // 3 tolerujeme chybějící za Titulku a reklamu
		return $hotovo >= $obsahu ? 100 : round($hotovo / $obsahu *100);
	}

    function save($newdata = false) {
        //(is_array or arrayHash)
        if ($newdata) {
            foreach ($newdata as $k => $v) //merge changes to orig data array
                $this[$k] = $v;
        }
        return dibi::query("UPDATE cislo SET ", $this->getData(), " WHERE id=%i", $this->id);
    }

	public function addKomentar($strana, $user, $text) {
		dibi::query("INSERT komentare",array(
			"cislo_id" => $this->id,
			"strana" => $strana,
			"user_id" => $user,
			"time%sql" => "now()",
			"text" => $text,
		));
	}

	private $komentCache = false;
	public function getKomentare($p) {
		if (!$this->komentCache) {
			$this->komentCache = dibi::query("
				SELECT k.*, u.name
				FROM komentare k
				LEFT JOIN user u ON user_id = u.id
				WHERE k.cislo_id = %i",$this->id," AND del=0
				ORDER BY time
				")->fetchAssoc('strana[]');
		}
		return isset($this->komentCache[$p]) ? $this->komentCache[$p] : array();
	}

	public function deleteKomentar($id)	{
		dibi::query("UPDATE komentare SET del=1 WHERE id = %i",$id);
	}

}
