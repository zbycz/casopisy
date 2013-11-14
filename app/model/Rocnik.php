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
                AND rocnik=%s", $this->rocnik, "
                AND priloha=0
                %if",!CasopisModel::$showUnpublished," AND verejne != 0 %end
            ORDER BY cislo, nazev");
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

	/** @see Cislo::getRocnikTxt() */
	function getRocnikTxt(){
		if (CasopisModel::config($this->casopis_id)->knihovna)
			return ucfirst($this->rocnik);
		return (strlen($this->rocnik) < 4) ? "$this->rocnik. ročník" : "ročník $this->rocnik";
	}
}
