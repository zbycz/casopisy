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

	// přidání čísla a bulkinsert
    protected function createComponentAddForm() {
        $form = new Nette\Application\UI\Form;
        $form->addUpload("file", "Časopis PDF");
        $form->addSubmit('submit1', 'Nahrát');
        $form->onSuccess[] = $this->addFormSubmitted;
        return $form;
    }

    public function addFormSubmitted(Nette\Application\UI\Form $form) {
		if(!$this->user->identity->admin)
			throw new \Nette\Application\ForbiddenRequestException("Only admin can add");

		$id = CisloModel::upload($this->casopis, $form['file']->value);
        $this->flashMessage('Číslo úspěšně nahráno.');
        $this->redirect('edit', $id);
    }
    function handleBulkInsert(){
		if(!$this->user->identity->admin)
			throw new \Nette\Application\ForbiddenRequestException("Only admin can add");

		$this->template->bulklog = CisloModel::bulkInsert($this->casopis);
        $this->flashMessage('Úspěšně vloženo');
        $this->redirect('add');
    }

	// zobrazení čísla a formuláře
    public function actionDefault($id) {
        $this->cislo = $this->template->cislo = CisloModel::getById($id);
        if (!$this->cislo)
			throw new \Nette\Application\BadRequestException("Cislo '$id' neexistuje");
        if (!$this['editForm']->submitted)
            $this['editForm']->setValues($this->cislo);
    }

    protected function createComponentEditForm() {
        $form = new Nette\Application\UI\Form;
        $form->addSelect('casopis_id', 'Časopis', CasopisModel::getCasopisy());
        $form->addText('rocnik', 'Ročník')->controlPrototype->class("input-mini");
        $form->addText('cislo', 'Číslo')->controlPrototype->class("input-mini");
        $form->addSelect('mesic', '_Měsíc', CasopisModel::$months)
                ->setPrompt("-vyberte-")->controlPrototype->accesskey('m');
        $form->addText('rok', 'Rok')->controlPrototype->class("input-mini");
        $form->addText('popis', 'Popis');
        $form->addRadioList('verejne', 'Zveřejněno', array('Skryté', 'Veřejné', 'Jen náhled'));
        $form->addCheckbox('priloha', 'Příloha k časopisu (přiřazuje se dle ročníku a čísla)');
        $form->addCheckbox('hotovo', 'Štítkování HOTOVO (nenabízet editorům)');
        $form->addText('poznamka', 'Vnitřní poznámka')->controlPrototype->class("input-xxlarge");
        $form->addSubmit('submit1', 'Uložit úpravy')->controlPrototype->class("btn btn-primary");
        $form->addSubmit('gonext', '_Uložit & přejít +1')->controlPrototype->class("btn")->accesskey('u');
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
}
