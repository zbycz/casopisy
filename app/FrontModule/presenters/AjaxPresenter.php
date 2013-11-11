<?php

namespace FrontModule;

use Casopisy\CisloModel;
use Casopisy\LogModel;

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
		if ($field == 'nazev') {
			$puvodni = $obsah->nazev;
			$obsah->nazev = $value;
			$obsah->save();
		}
		else {
			$puvodni = $obsah->popis;
			$obsah->popis = $value;
			$obsah->save();
		}

		LogModel::add($cid, $p, "edit-$field", $value, $puvodni);
		$this->terminate();
	}

    public function actionAddTag($cid, $p, $tag)
	{
		$cislo = CisloModel::getById($cid);
		$cislo->getObsah(); // cache
		$obsah = $cislo->getPage($p);
		$obsah->addTag($tag);

		LogModel::add($cid, $p, 'edit-addTag', $tag);
		$this->terminate();
	}

    public function actionRemoveTag($cid, $p, $tag)
	{
		$cislo = CisloModel::getById($cid);
		$cislo->getObsah(); // cache
		$obsah = $cislo->getPage($p);
		$obsah->removeTag($tag);

		LogModel::add($cid, $p, 'edit-removeTag', $tag);
		$this->terminate();
	}

    /*function actionAutocomplete() {
        $tags = $this->cislo->getTagsStarting($this->getParam('term'), $this->getParam('limit'));
        $response = new Nette\Application\Responses\TextResponse(implode("\n", $tags));
        $this->sendResponse($response);
    }*/
}
