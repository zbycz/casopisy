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
        $this->tagy = $this->template->tagy = CasopisModel::getAllTags();

        if($t = $this->getParam("id")){
            $this->template->tag = $this->tagy[$t];
        }
    }

    public function actionDefault() {}
}
