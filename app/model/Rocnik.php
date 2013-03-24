<?php

namespace Casopisy;

use Nette;
use \dibi;

class Rocnik extends Entity {

    function getCisla() {
        $cisla = dibi::query("
            SELECT * FROM cislo
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
    
    function getRoky(){
        return $this->od . ($this->od != $this->do ? "-$this->do" : "");
    }
}
