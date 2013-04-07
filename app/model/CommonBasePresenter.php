<?php

use \Casopisy\CasopisModel;

/**
 * Base presenter for all application presenters.
 */
abstract class CommonBasePresenter extends Nette\Application\UI\Presenter {

    /**
     * @persistent
     * @var int
     */
    public $casopis;

    function startup() {
        parent::startup();

        if (!CasopisModel::getCasopisById($this->casopis))
            throw new \Nette\Application\BadRequestException("Časopis nenalzen");

        CasopisModel::$casopis_id = $this->casopis;
		$this->template->casopis = \Casopisy\CasopisModel::getCasopis();
		$this->template->casopisLong = \Casopisy\CasopisModel::getCasopisLong();
    }

}
