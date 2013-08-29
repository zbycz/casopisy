<?php

namespace FrontModule;

use Casopisy\CasopisModel,
    Casopisy\CisloModel,
    Casopisy\ObsahModel;

/**
 */
class CisloPresenter extends BasePresenter {

    /**
     * @var \Casopisy\Cislo
     */
    private $cislo;

    public function actionDefault($id) {
        $this->cislo = $this->template->cislo = CisloModel::getById($id);
		$this->cislo->getObsah(); // cache
        if (!$this->cislo)
			throw new \Nette\Application\BadRequestException("Cislo '$id' neexistuje");
    }

	public function handlePribrat($p)
	{
		$obsah = $this->cislo->getPage($p);
		$dalsi = $this->cislo->getPage($p + $obsah->strany_navic + 1);

		// umoznit přibrání další ?
		if (!$dalsi->nazev AND !$dalsi->popis AND !$dalsi->strany_navic AND !count($dalsi->getTags())) {
			$obsah->strany_navic += 1;
			$obsah->save();
			$this->payload->result = 'ok';
			$this->flashMessage('Stránka přidána.');
		}
		else {
			$this->payload->result = 'error';
			$this->flashMessage('CHYBA: Nelze přibrat další stránku, dokud nemá vše prázdné.');
		}
		$this->invalidateControl('flashes');
	}

	public function handleOdebrat($p)
	{
		$obsah = $this->cislo->getPage($p);
		if ($obsah->strany_navic > 1) {
			$obsah->strany_navic -= 1;
			$obsah->save();
			$this->flashMessage('Stránka odpojit.');
		}
		else {
			$this->flashMessage('CHYBA: Nelze odebrat stránku, již je jen jedna.');
		}
	}
}
