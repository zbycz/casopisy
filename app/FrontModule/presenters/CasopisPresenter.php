<?php

namespace FrontModule;

use Casopisy\CasopisModel,
    Casopisy\CisloModel,
    Casopisy\ObsahModel;

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
    }

    public function actionDefault() {}
}
