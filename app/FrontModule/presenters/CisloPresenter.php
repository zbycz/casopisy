<?php

namespace FrontModule;

use Casopisy\CasopisModel,
    Casopisy\CisloModel,
    Casopisy\ObsahModel;

/**
 */
class CisloPresenter extends BasePresenter {

    /**
     * @var Cislo
     */
    private $cislo;

    public function actionDefault($id) {
        $this->cislo = $this->template->cislo = CisloModel::getById($id);
        if (!$this->cislo)
			throw new \Nette\Application\BadRequestException("Cislo '$id' neexistuje");
    }

}
