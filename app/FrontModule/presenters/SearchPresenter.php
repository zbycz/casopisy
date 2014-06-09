<?php

namespace FrontModule;

use Casopisy\CasopisModel;
use Casopisy\LogModel;
use Casopisy\SearchModel;
use Nette;

/**
 */
class SearchPresenter extends Nette\Application\UI\Presenter {

    public function actionDefault($vyraz="", $casopis=NULL)
    {
	    $this->template->vyraz = $vyraz;
	    LogModel::add(0, 0, 'fulltext', $vyraz);

	    $vysledky = SearchModel::search($vyraz, $casopis);
	    $this->template->vysledky = $vysledky;
	    $this->template->search_casopis = $casopis;

	    $pocetByCasopis = array();
	    foreach($vysledky as $r) @$pocetByCasopis[$r->casopis_id]++;
	    arsort($pocetByCasopis);
	    $this->template->pocetByCasopis = $pocetByCasopis;

		//TODO:
	    //přímo názvy speciálních čísel / publikací

    }

	public function actionCount($vyraz)
	{
		echo count(SearchModel::search($vyraz));
		$this->terminate();
	}
}
