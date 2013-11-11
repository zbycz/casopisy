<?php

namespace FrontModule;

use Casopisy\CasopisModel;
use Casopisy\CisloModel;
use Casopisy\ObsahModel;
use Casopisy\LogModel;

/**
 */
class CasopisPresenter extends BasePresenter {

    /**
     * @var Tag[]
     */
    private $tagy;

    public function startup() {
        parent::startup();
        $this->tagy = CasopisModel::getAllTags();
        unset($this->tagy['reklama']);
        $this->template->tagy = $this->tagy;

        if($t = $this->getParam("id")){
            $this->template->tag = $this->tagy[$t];
        }

	    LogModel::add(0, 0, 'casopis', $this->casopis);
    }

    public function actionDefault() {}
}
