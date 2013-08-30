<?php

namespace FrontModule;

use Casopisy\CisloModel;

class AjaxPresenter extends \Nette\Application\UI\Presenter
{
	public function startup()
	{
		if (!$this->user->loggedIn) {
			throw new \Nette\Application\ForbiddenRequestException("Nepřihlášený uživatel");
		}
		parent::startup();
	}

    public function actionEditField($cid, $p, $field, $value)
	{
		$cislo = CisloModel::getById($cid);
		$cislo->getObsah(); // cache
		$obsah = $cislo->getPage($p);
		if ($field == 'nazev')
			$obsah->nazev = $value;
		else
			$obsah->popis = $value;
		$obsah->save();
		$this->terminate();
	}

    public function actionAddTag($cid, $p, $tag)
	{
		$cislo = CisloModel::getById($cid);
		$cislo->getObsah(); // cache
		$obsah = $cislo->getPage($p);
		$obsah->addTag($tag);
		$this->terminate();
	}

    public function actionRemoveTag($cid, $p, $tag)
	{
		$cislo = CisloModel::getById($cid);
		$cislo->getObsah(); // cache
		$obsah = $cislo->getPage($p);
		$obsah->removeTag($tag);
		$this->terminate();
	}

    /*function actionAutocomplete() {
        $tags = $this->cislo->getTagsStarting($this->getParam('term'), $this->getParam('limit'));
        $response = new Nette\Application\Responses\TextResponse(implode("\n", $tags));
        $this->sendResponse($response);
    }*/
}
