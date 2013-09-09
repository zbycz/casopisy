<?php

namespace Casopisy;

use Nette;
use \dibi;

class Rocnik extends Entity {

    function getCisla() {
        $cisla = dibi::query("
            SELECT c.*,
					IFNULL((SELECT SUM(o.nazev!='') FROM obsah o WHERE o.cislo_id = c.id),0) AS pocet_nazvu,
					(SELECT COUNT(DISTINCT strana) FROM tag t WHERE t.cislo_id = c.id) AS pocet_tagu,
					pocet_stran - IFNULL((SELECT SUM(o.strany_navic) FROM obsah o WHERE o.cislo_id = c.id),0) AS pocet_obsahu
			FROM cislo c
            WHERE casopis_id=%i", $this->casopis_id, "
                AND rocnik=%i", $this->rocnik, "
                AND priloha=0
                %if",!CasopisModel::$showUnpublished," AND verejne = 1 %end
            ORDER BY cislo");
        $result = array();
        foreach ($cisla as $r)
            $result[] = new Cislo($r);

        return $result;
    }

    function getCasopis() {
        return CasopisModel::getCasopisById($this->casopis_id);
    }

	function getCasopisLong(){
        return CasopisModel::getCasopisLongById($this->casopis_id);
	}

    function getRoky(){
        return $this->od . ($this->od != $this->do ? "-$this->do" : "");
    }
}
