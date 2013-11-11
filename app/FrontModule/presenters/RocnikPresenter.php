<?php

namespace FrontModule;

use Casopisy\CasopisModel,
    Casopisy\CisloModel,
    Casopisy\ObsahModel;
use Casopisy\LogModel;

/**
 */
class RocnikPresenter extends BasePresenter {

    /**
     * @var Rocnik
     */
    private $rocnik;

    public function startup() {
        parent::startup();
        $this->rocnik = $this->template->rocnik = CasopisModel::getRocnik($id = $this->getParameter('id'));
        if(!$this->rocnik)
			throw new \Nette\Application\BadRequestException("Rocnik '$id' neexistuje");

	    LogModel::add(0, 0, 'rocnik', $id);
    }

    public function actionDefault($id) {}
}
