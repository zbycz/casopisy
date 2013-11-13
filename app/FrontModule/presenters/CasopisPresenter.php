<?php

namespace FrontModule;

use Casopisy\CasopisModel;
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

        if($t = $this->getParameter("id") AND isset($this->tagy[$t])){
            $this->template->tag = $this->tagy[$t];
	        LogModel::add(0, 0, 'stitek', CasopisModel::config($this->casopis)->url, $t);
        }
	    else {
		    LogModel::add(0, 0, 'casopis', CasopisModel::config($this->casopis)->url);
	    }
    }

    public function actionDefault() {}
}
