<?php

namespace AdminModule;

use Nette;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends \CommonBasePresenter {

    public function startup() {
        parent::startup();

        //check permission
        if (!$this->user->isLoggedIn()) {
            $backlink = $this->application->storeRequest();
            $this->redirect(':Front:Login:', array('backlink' => $backlink));
        }

        //admin things
        \Casopisy\CasopisModel::$showUnpublished = true;

    }

}
