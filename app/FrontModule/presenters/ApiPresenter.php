<?php

namespace FrontModule;

use Casopisy\CasopisModel;
use Casopisy\SearchModel;
use Nette;

class ApiPresenter extends Nette\Application\UI\Presenter
{

	public function actionDefault()
	{
		$this->redirectUrl("https://docs.google.com/document/d/1loyA6WttcFn0pRBZ02mJaGjvrRvuRyPuU-iBktWQvrw/edit?usp=sharing");
	}


	public function actionCisla($mesic = NULL)
	{
		if (preg_match('~^([0-9]{4})([0-9]{2})$~', $mesic, $m)) {
			$cisla = CasopisModel::getCislaMesice($m[1], $m[2]);
		}
		else {
			$cisla = CasopisModel::getPosledniCisla();
		}

		$basePath = rtrim($this->getHttpRequest()->getUrl()->getBaseUrl(), '/');
		$payload = array();

		foreach ($cisla as $cislo) {
			$payload[] = array(
				'casopis' => CasopisModel::getCasopisLongById($cislo->casopis_id),
				'casopis_id' => $cislo->casopis_id,
				'rocnik' => $cislo->rocnik,
				'cislo' => $cislo->cislo,
				'rok' => $cislo->rok,
				'mesic' => $cislo->mesic,
				'obalka' => $basePath . $cislo->getCoverLink(200),
				'link' => $this->link('//Cislo:default', array('id'=>$cislo->id, 'casopis'=>$cislo->casopis_id)),
			);
		}

		$presun = array_splice($payload, 10, 1); //benjamina
		array_splice($payload, 5, 0, $presun); //za skautsky svet (id4)
		$this->sendResponse(new Nette\Application\Responses\JsonResponse($payload), 'application/json');
	}

    public function actionPosledniCisla($casopis, $pocet = 3)
    {
        $stubToId = CasopisModel::getCasopisyURL();
        if(!isset($stubToId[$casopis])) {
            $this->sendResponse(new Nette\Application\Responses\JsonResponse(array("error"=>"Zadany casopis neexistuje. napr. ?casopis=skaut")), 'application/json');
        }
        $cisla = CasopisModel::getPosledniCislaCasopisu($stubToId[$casopis], $pocet);

        $basePath = rtrim($this->getHttpRequest()->getUrl()->getBaseUrl(), '/');
        $payload = array();

        foreach ($cisla as $cislo) {
            $payload[] = array(
                'casopis' => CasopisModel::getCasopisLongById($cislo->casopis_id),
                'casopis_id' => $cislo->casopis_id,
                'rocnik' => $cislo->rocnik,
                'cislo' => $cislo->cislo,
                'rok' => $cislo->rok,
                'mesic' => $cislo->mesic,
                'obalka' => $basePath . $cislo->getCoverLink(200),
                'link' => $this->link('//Cislo:default', array('id'=>$cislo->id, 'casopis'=>$cislo->casopis_id)),
            );
        }

        $this->sendResponse(new Nette\Application\Responses\JsonResponse($payload), 'application/json');
    }

	public function actionSearch($vyraz, $casopis = NULL)
	{
		$vysledky = SearchModel::search($vyraz, $casopis); //returns Casopisy\Obsah[]

		$basePath = rtrim($this->getHttpRequest()->getUrl()->getBaseUrl(), '/');
		$payload = array();

		foreach ($vysledky as $r) {
			$cislo = $r->getCislo();

			$payload[] = array(
				'casopis_id' => $cislo->casopis_id,                       //id časopisu/knihovny dle číselníku
				'celynazev' => $cislo->celynazev,                       //název čísla časopisu popř název publikace
				'nadpis' => $r->nazev?$r->nazev:"strana $r->stranaOdDo", //nadpis článku, popř číslo strany
				'popis' => "$r->popis",                                 //doplňkový popis od uživatele
				'tagy' => implode(',', $r->getTags()),                  //tagy od uživatele
				'text' => $r->getSearchedText($vyraz),                 //text z PDFka
				'stranka' => $basePath . $r->getLink($r->strana, 200), //link na první stránku článku (PNG 200px)
				'link' => $this->link('//Cislo:#p'.$r->strana, array('id'=>$cislo->id, 'casopis'=>$cislo->casopis_id)),
			);
		}
		$this->sendResponse(new Nette\Application\Responses\JsonResponse($payload), 'application/json');
	}

	public function actionVersions()
    {
        $payload = array(
            'gs --version' => exec('gs --version'),
            'convert -version' => exec('convert -version | head -n 1'),
        );
		$this->sendResponse(new Nette\Application\Responses\JsonResponse($payload), 'application/json');
    }
}
