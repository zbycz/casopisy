<?php

use \Casopisy\CasopisModel;

/**
 * Base presenter for all application presenters.
 */
abstract class CommonBasePresenter extends Nette\Application\UI\Presenter {

    /**
     * @persistent
     * @var object(id,url,odkaz,nazev)
     */
    public $casopis;

    function startup() {
        parent::startup();

		if (!CasopisModel::getCasopisById($this->casopis))
            throw new \Nette\Application\BadRequestException("Časopis nenalezen");

        CasopisModel::$casopis_id = $this->casopis;
	    $this->template->casopis = \Casopisy\CasopisModel::config($this->casopis);

		// admin vidí i nepublikované
		if ($this->user->isInRole('admin')) {
	        CasopisModel::$showUnpublished = true;
		}
    }
}
