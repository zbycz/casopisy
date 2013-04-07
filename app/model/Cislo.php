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

    /**
     * @return Obsah[]
     */
    function getObsah() {
        $result = array();
        $stranky = dibi::query("SELECT * FROM obsah WHERE cislo_id=%i", $this->id)->fetchAssoc('strana');

        for ($pagenum = 1; $pagenum <= $this->pocet_stran; $pagenum++) {
            if (isset($stranky[$pagenum]))
                $obsah = new Obsah($stranky[$pagenum]);
            else
                $obsah = new Obsah(array("cislo_id" => $this->id, "strana" => $pagenum));

            $result[] = $obsah;
            $pagenum += $obsah->strany_navic;
        }

        return $result;
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

    /** WARNING: NOT FILLED FROM DATABASE (only for linking purposes)
     * @return \Casopisy\Obsah
     */
    function getPage($strana = 1) {
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

    function getPdfSize(){
        $size = @filesize($this->getPdfPath());
        if($size)
            return round($size / 1024 / 1024, $size>10e7 ? 0 : 1) . " MB";
        return false;
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

    function save($newdata = false) {
        //(is_array or arrayHash)
        if ($newdata) {
            foreach ($newdata as $k => $v) //merge changes to orig data array
                $this[$k] = $v;
        }
        return dibi::query("UPDATE cislo SET ", $this->getData(), " WHERE id=%i", $this->id);
    }

    // admin only
    function getTagsStarting($q, $limit = false) {
        return dibi::query("
            SELECT DISTINCT tag
            FROM tag t
            LEFT JOIN cislo c ON t.cislo_id = c.id
            WHERE tag LIKE %s", $q . "%", "
              AND casopis_id=%i", $this->casopis_id, "
            %if",$limit," LIMIT %i", $limit)->fetchAssoc("[]=tag");
    }

}
