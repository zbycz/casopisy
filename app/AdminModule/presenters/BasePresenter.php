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
        if (!$this->user->isInRole('admin')) {
            $this->flashMessage('Nemáte dostatečná práva');
            $this->redirect(':Front:Homepage:');
        }
    }

}
