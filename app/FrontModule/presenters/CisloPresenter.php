<?php

namespace FrontModule;

use Casopisy\CisloModel;
use Nette\Application\Responses\FileResponse;
use \Nette\Application\Responses\TextResponse;

/**
 */
class CisloPresenter extends BasePresenter {

    /**
     * @var \Casopisy\Cislo
     */
    private $cislo;

    public function actionDefault($id, $zoom=200) {
        $this->cislo = CisloModel::getById($id);
		$this->cislo->getObsah(); // cache

		if (!$this->cislo)
			throw new \Nette\Application\BadRequestException("Cislo '$id' neexistuje");
		if (!$this->cislo->verejne AND !$this->user->isInRole('admin'))
			throw new \Nette\Application\ForbiddenRequestException("Číslo '$id' není veřejné");

		$this->template->zoom = ($zoom % 100 == 0 AND $zoom <= 1000) ? intval($zoom) : 200;
		$this->template->cislo = $this->cislo;
    }

	public function actionDownload($id)
	{
        $cislo = CisloModel::getById($id);

		//allow only logged in user
		if (!($this->user->isInRole('admin') OR ($this->user->loggedIn AND $cislo->verejne == 1))) //TODO opravdu == ?
			throw new \Nette\Application\ForbiddenRequestException("Číslo $id není veřejné");

		if (!file_exists($cislo->getPdfPath()))
			throw new \Nette\Application\BadRequestException("PDF $id nenalezeno");

		$response = new FileResponse($cislo->getPdfPath(), $cislo->getPdfFilename(), 'application/pdf');
		$this->sendResponse($response);
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

	public function handleAddComment()
	{
		
	}
}
