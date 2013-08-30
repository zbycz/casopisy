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
		if (!$this->cislo->verejne AND !$this->user->isInRole('admin'))
			throw new \Nette\Application\ForbiddenRequestException("Číslo '$id' není veřejné");
    }

	public function handlePribrat($p)
	{
		if (!$this->user->loggedIn)
			throw new \Nette\Application\ForbiddenRequestException("Nepřihlášený uživatel");

		$obsah = $this->cislo->getPage($p);
		$dalsi = $this->cislo->getPage($p + $obsah->strany_navic + 1);

		// umoznit přibrání další ?
		if (!$dalsi->nazev AND !$dalsi->popis AND !$dalsi->strany_navic AND !count($dalsi->getTags())) {
			$puvodni = $obsah->strany_navic;
			$obsah->strany_navic += 1;
			$obsah->save();
			$this->payload->result = 'ok';
			$this->flashMessage('Stránka přidána.');
			\Casopisy\LogModel::add($this->cislo->id, $p, "pribrat", $obsah->strany_navic, $puvodni);
		}
		else {
			$this->payload->result = 'error';
			$this->flashMessage('CHYBA: Nelze přibrat další stránku, dokud nemá vše prázdné.');
		}
		$this->invalidateControl('flashes');

		if (!$this->isAjax())
			$this->redirect("this#p$p");
	}

	public function handleOdebrat($p)
	{
		if (!$this->user->loggedIn)
			throw new \Nette\Application\ForbiddenRequestException("Nepřihlášený uživatel");

		$obsah = $this->cislo->getPage($p);
		$puvodni = $obsah->strany_navic;
		if ($obsah->strany_navic >= 1) {
			$obsah->strany_navic -= 1;
			$obsah->save();
			$this->flashMessage('Stránka odpojena.');
			\Casopisy\LogModel::add($this->cislo->id, $p, "odebrat", $obsah->strany_navic, $puvodni);
		}
		else {
			$this->flashMessage('CHYBA: Nelze odebrat stránku, již je jen jedna.');
		}
		$this->redirect("this#p$p");
	}
}
