<?php

namespace FrontModule;

use Casopisy\CasopisModel,
    Casopisy\CisloModel,
    Casopisy\ObsahModel;

class AjaxPresenter extends \Nette\Application\UI\Presenter {


    public function actionEditField() {
		$this->terminate();
	}

    public function actionRemoveTag() {
		$this->terminate();
	}
    public function actionAddTag() {
		$this->terminate();
	}

}
