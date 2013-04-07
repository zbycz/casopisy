<?php

namespace Casopisy;

use Nette;
use \dibi;

class CasopisModel {

    private static $casopisy;
    private static $casopisyLong;
    public static $showUnpublished = false;
    public static $casopis_id;

    static function getCasopisy() {
        if (!self::$casopisy){
            self::$casopisy = \Nette\Environment::getVariable("casopisy");
            self::$casopisyLong = \Nette\Environment::getVariable("casopisyLong");
		}
        return self::$casopisy;
    }

    static function getCasopisyURL() {
        $arr = array();
        foreach (self::getCasopisy() as $id => $txt)
            $arr[Nette\Utils\Strings::webalize($txt)] = $id;
        return $arr;
    }

    static function getCasopisById($id) {
        if (!self::$casopisy)
            self::getCasopisy();
        if (isset(self::$casopisy[$id]))
            return self::$casopisy[$id];
        return false;
    }

    static function getCasopisLongById($id) {
        if (!self::$casopisy)
            self::getCasopisy();
        if (isset(self::$casopisyLong[$id]))
            return self::$casopisyLong[$id];
        return false;
    }


    static function getCasopis(){
        return self::getCasopisById(self::$casopis_id);
    }

    static function getCasopisLong(){
        return self::$casopisyLong[self::$casopis_id];
    }

    static function getRocnik($rocnik) {
        $rocnik = dibi::fetch("
            SELECT rocnik, casopis_id, min(rok) od, max(rok) do, count(1) pocet
            FROM cislo
            WHERE casopis_id=%i", self::$casopis_id, "
                AND rocnik = %i", $rocnik, "
                AND priloha=0
                %if", !self::$showUnpublished, " AND verejne = 1 %end
            GROUP BY rocnik
            ORDER BY rocnik DESC
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
                %if", !self::$showUnpublished, " AND verejne = 1 %end
            GROUP BY rocnik
            ORDER BY rocnik DESC
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

}

?>
