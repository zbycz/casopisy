<?php

namespace FrontModule;

use Casopisy\CasopisModel,
    Casopisy\CisloModel,
    Casopisy\ObsahModel;

/**
 */
class CisloPresenter extends BasePresenter {

    /**
     * @var \Casopisy\Cislo
     */
    private $cislo;

    public function actionDefault($id) {
        $this->cislo = $this->template->cislo = CisloModel::getById($id);
		$this->cislo->getObsah();
        if (!$this->cislo)
			throw new \Nette\Application\BadRequestException("Cislo '$id' neexistuje");
    }


	public function handleRozdvojit($p)
	{

	}

	public function handlePribrat($p)
	{
		$obsah = $this->cislo->getPage($p);
		$obsah->strany_navic += 1;
		$obsah->save();

		$dalsi = $p + $obsah->strany_navic;

		$dalsiObsah = $this->cislo->getPage($dalsi);
		if ($dalsiObsah->strany_navic > 0) {
			$this->redirect('this');
		}

		$this->cislo->deleteObsah($dalsi);
	}

	public function handleOdebrat($p)
	{
            if (isset($post["odloucit_$p"])){
                $data["strany_navic"] = $obsah->strany_navic - 1;
                $pagejump = $p;
            }

	}
}
