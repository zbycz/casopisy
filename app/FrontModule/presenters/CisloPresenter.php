<?php

namespace FrontModule;

use Casopisy\CisloModel;
use Casopisy\LogModel;
use Nette\Application\BadRequestException;
use Nette\Application\ForbiddenRequestException;
use Nette\Application\Responses\FileResponse;

/**
 */
class CisloPresenter extends BasePresenter {

    /**
     * @var \Casopisy\Cislo
     */
    private $cislo;

    public function actionDefault($id, $zoom=200) {
        $this->cislo = CisloModel::getById($id);

		if (!$this->cislo)
			throw new BadRequestException("Cislo '$id' neexistuje");
		if (!$this->cislo->verejne AND !$this->user->isInRole('admin'))
			throw new ForbiddenRequestException("Číslo '$id' není veřejné");

		//kanonická url - po action se volá $autoCanonicalize
		$this->casopis = $this->cislo->casopis_id;

	    LogModel::add($this->cislo->id, 0, 'zobrazeni', '');

	    $this->template->zoom = ($zoom % 100 == 0 AND $zoom <= 1000) ? intval($zoom) : 200;
		$this->template->cislo = $this->cislo;
	    $this->cislo->getObsah(); // cache
    }

	public function actionDownload($id)
	{
        $cislo = CisloModel::getById($id);

		if (!file_exists($cislo->getPdfPath())){
			$this->template->chyba = "Omlouváme se, příslušné PDF je chybně nahrané. Prosím kontaktujte správce.";
			$this->setView('error');
			return;
		}

		if (!$this->user->loggedIn){
			$this->template->chyba = "PDF lze stahovat až po přihlášení přes SkautIS - přihlašte se tlačítkem vpravo nahoře.";
			$this->setView('error');
			return;
		}

		if ($cislo->verejne != 1 AND !$this->user->isInRole('admin')) //verejne=0 OR verejne=2
			throw new ForbiddenRequestException("Číslo $id není veřejné");

		LogModel::add($id, 0, 'download', '');

		$response = new FileResponse($cislo->getPdfPath(), $cislo->getPdfFilename(), 'application/pdf');
		$this->sendResponse($response);
	}

	public function handlePribrat($p)
	{
		if (!$this->user->loggedIn)
			throw new ForbiddenRequestException("Nepřihlášený uživatel");

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
			throw new ForbiddenRequestException("Nepřihlášený uživatel");

		$obsah = $this->cislo->getPage($p);
		$puvodni = $obsah->strany_navic;
		if ($obsah->strany_navic >= 1) {
			$obsah->strany_navic -= 1;
			$obsah->save();
			$this->flashMessage('Stránka odpojena.');
			LogModel::add($this->cislo->id, $p, "odebrat", $obsah->strany_navic, $puvodni);
		}
		else {
			$this->flashMessage('CHYBA: Nelze odebrat stránku, již je jen jedna.');
		}
		$this->redirect("this#p$p");
	}

	public function handleAddComment()
	{
		if (!$this->user->loggedIn) {
			throw new ForbiddenRequestException("Komentovat mohou přihlášení");
		}

		$p = $this->request->post['strana'];
		$text = $this->request->post['text'];
		if($text) {
			$this->cislo->addKomentar($p, $this->user->id, trim($text));
			$this->flashMessage('Komentář úspěšně přidán.');
		}

		$this->invalidateControl("komentare");
		$this->invalidateControl("flashes");

		if (!$this->isAjax())
			$this->redirect("this#p$p");
	}

	public function handleDeleteComment($kid)
	{
		if (!$this->user->isInRole('admin')) {
			throw new ForbiddenRequestException("Mazat komenty mohou jen admini");
		}
		$this->cislo->deleteKomentar($kid);
		$this->flashMessage('Komentář je skrytý.');
		$this->invalidateControl("komentare");
		$this->invalidateControl("flashes");
		if (!$this->isAjax())
			$this->redirect("this");
	}
}
