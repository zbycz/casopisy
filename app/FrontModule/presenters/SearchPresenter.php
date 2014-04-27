<?php

namespace FrontModule;

use Casopisy\CasopisModel;
use Casopisy\LogModel;
use Casopisy\SearchModel;
use Nette;

/**
 */
class SearchPresenter extends Nette\Application\UI\Presenter {

    public function actionDefault($vyraz, $casopis=NULL)
    {
	    $this->template->vyraz = $vyraz;

	    $vysledky = SearchModel::search($vyraz, $casopis);
	    $this->template->vysledky = $vysledky;
	    $this->template->search_casopis = $casopis;

	    $pocetByCasopis = array();
	    foreach($vysledky as $r) @$pocetByCasopis[$r->casopis_id]++;
	    arsort($pocetByCasopis);
	    $this->template->pocetByCasopis = $pocetByCasopis;


	    //přímo tagy
	    //přímo speciální čísla / descriptiony

    }
}
