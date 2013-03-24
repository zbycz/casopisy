<?php

namespace AdminModule;

use Casopisy\CasopisModel,
    Casopisy\CisloModel,
    Casopisy\ObsahModel;
use Nette;

/**
 */
class CisloPresenter extends BasePresenter {

    /**
     * @var Cislo
     */
    private $cislo;

	/**
	 * @persistent
	 */
	public $velikost = 200;

	public function handleVelikost($px){
		$this->velikost = (int)$px;
	}

    public function actionDefault($id) {
        $this->cislo = $this->template->cislo = CisloModel::getById($id);
        if (!$this->cislo)
			throw new \Nette\Application\BadRequestException("Cislo '$id' neexistuje");
    }

    public function actionEdit($id) {
        $this->actionDefault($id);
        if (!$this['editForm']->submitted)
            $this['editForm']->setValues($this->cislo);
    }

    protected function createComponentAddForm() {
        $form = new Nette\Application\UI\Form;
        $form->addUpload("file", "Časopis PDF");
        $form->addSubmit('submit1', 'Nahrát');
        $form->onSuccess[] = $this->addFormSubmitted;
        return $form;
    }

    public function addFormSubmitted(Nette\Application\UI\Form $form) {
        $id = CisloModel::upload($this->casopis, $form['file']->value);
        $this->flashMessage('Číslo úspěšně nahráno.');
        $this->redirect('edit', $id);
    }
    function handleBulkInsert(){
        $this->template->bulklog = CisloModel::bulkInsert($this->casopis);
        $this->flashMessage('Úspěšně vloženo');
        $this->redirect('add');
    }

    protected function createComponentEditForm() {
        $form = new Nette\Application\UI\Form;
        $form->addSelect('casopis_id', 'Časopis', CasopisModel::getCasopisy());
        $form->addText('rocnik', 'Ročník')->controlPrototype->class("input-mini");
        $form->addText('cislo', 'Číslo')->controlPrototype->class("input-mini");
        $form->addSelect('mesic', 'Měsíc', CasopisModel::$months)
                ->setPrompt("-vyberte-");
        $form->addText('rok', 'Rok')->controlPrototype->class("input-mini");
        $form->addText('popis', 'Popis');
        $form->addCheckbox('verejne', 'Zveřejněno');
        $form->addCheckbox('priloha', 'Příloha k časopisu (přiřazuje se dle ročníku a čísla)');
        $form->addText('poznamka', 'Vnitřní poznámka')->controlPrototype->class("input-xxlarge");;
        $form->addSubmit('submit1', 'Uložit úpravy')->controlPrototype->class("btn btn-primary");
        $form->addSubmit('gonext', 'Uložit & přejít +1')->controlPrototype->class("btn");
        $form->onSuccess[] = $this->editFormSubmitted;
        return $form;
    }

    public function editFormSubmitted(Nette\Application\UI\Form $form) {
        $values = $form->values;
        unset($values['submit1']);
        unset($values['gonext']);
        $this->cislo->save($values);
        $this->flashMessage('Číslo časopisu upraveno.');

        if($form['gonext']->isSubmittedBy())
            $this->redirect('edit', $this->cislo->id+1);
        else
            $this->redirect('default', $this->cislo->id);
    }

    public function handleStrankyForm() {
        $id = $this->getParam("id");
        $post = $this->request->post;
        $preskocit = false; //tato strana se nebude zpracovávat
        $pagejump = false;

        foreach ($this->cislo->getObsah() as $obsah) {
            $p = $obsah->strana;
            if($p == $preskocit) continue;

            $data = array();
            if (isset($post["nazev"][$p]) AND $post["nazev"][$p] != $obsah->nazev)
                $data["nazev"] = $post["nazev"][$p];
            if (isset($post["popis"][$p]) AND $post["popis"][$p] != $obsah->popis)
                $data["popis"] = $post["popis"][$p];
            if (isset($post["sloucit_$p"])) {
                $data["strany_navic"] = $obsah->strany_navic + 1;
                $preskocit = $p + $obsah->strany_navic + 1;
                $this->cislo->deleteObsah($preskocit);
                $pagejump = $p;
            }
            if (isset($post["odloucit_$p"])){
                $data["strany_navic"] = $obsah->strany_navic - 1;
                $pagejump = $p;
            }

            if (count($data))
                $obsah->save($data);

            if (isset($post["tags"][$p]))
                $obsah->saveTags(explode(",", $post["tags"][$p]));
        }

        $this->flashMessage("Podrobnosti uloženy");
        $this->redirect('default'.($pagejump?"#p$pagejump":""), $this->cislo->id);
    }

    function handleAutocomplete() {
        $tags = $this->cislo->getTagsStarting($this->getParam('term'), $this->getParam('limit'));
        $response = new Nette\Application\Responses\TextResponse(implode("\n", $tags));
        $this->sendResponse($response);
    }

}
