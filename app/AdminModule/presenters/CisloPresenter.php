<?php

namespace AdminModule;

use Casopisy;
use Casopisy\CasopisModel;
use Casopisy\CisloModel;
use Casopisy\ObsahModel;
use Nette;

/**
 */
class CisloPresenter extends BasePresenter {

    /**
     * @var Casopisy\Cislo
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
		$id = CisloModel::upload($this->casopis, $form['file']->value);
        $this->flashMessage('Číslo úspěšně nahráno.');
        $this->redirect('default', $id);
    }
    function handleBulkInsert(){
		$this->template->bulklog = CisloModel::bulkInsert($this->casopis);
        $this->flashMessage('Úspěšně vloženo');
        $this->redirect('add');
    }

	// zobrazení čísla a formuláře
    public function actionDefault($id) {
        $this->cislo = $this->template->cislo = CisloModel::getById($id);

	    if (!$this->cislo) {
			throw new Nette\Application\BadRequestException("Cislo '$id' neexistuje");
	    }

	    if (!$this['editForm']->submitted) {
            $this['editForm']->setValues($this->cislo);
	    }

	    $this->template->bookmarks = $this->cislo->getBookmarks();
    }

	public function handlePurgeImgCache() {
		$cnt = $this->cislo->execPurgeImgCache();
		$this->flashMessage("Smazáno $cnt kešovaných náhledů");
	}

	public function handleRegenerateImgs() {
		$cnt = $this->cislo->execRegenerateImgs();
		$this->flashMessage("Smazáno $cnt obrázků a spuštěno vytváření nových (cca do 5 min). Nutno potom smazat keš.");
	}



	public function handleWriteBookmarks() {
		foreach($this->cislo->getBookmarks() as $bm){
			if (!$bm->obsah->nazev) {
				$bm->obsah->nazev = $bm->title;
				$bm->obsah->save();
			}
		}
		$this->flashMessage("Bookmarks zapsány.");
		$this->redirect('this');
	}

    protected function createComponentEditForm() {
        $form = new Nette\Application\UI\Form;
        $form->addSelect('casopis_id', 'Časopis', CasopisModel::getCasopisy());
        $form->addText('rocnik', 'Ročník')->controlPrototype->class("input-mini");
        $form->addText('cislo', 'Číslo')->controlPrototype->class("input-mini");
        $form->addSelect('mesic', '_Měsíc', CasopisModel::$months)
                ->setPrompt("-vyberte-")->controlPrototype->accesskey('m');
        $form->addText('rok', 'Rok')->controlPrototype->class("input-mini");
        $form->addText('nazev', 'Název');
        $form->addTextArea('popis', 'Popis')->controlPrototype->style("height:5em;width:300px");
        $form->addRadioList('verejne', 'Zveřejněno', array('Skryté', 'Veřejné', 'Jen malé náhledy stránek - uživatelé nemohou číst'));
        $form->addCheckbox('priloha', 'Příloha k časopisu (přiřazuje se dle ročníku a čísla) [TODO zatím není nikde vidět]');
        $form->addCheckbox('hotovo', 'Štítkování HOTOVO (nenabízet "ke štítkování")');
        $form->addText('poznamka', 'Vnitřní poznámka')->controlPrototype->class("input-xlarge");
        $form->addSubmit('submit1', 'Uložit úpravy')->controlPrototype->class("btn btn-primary");
        $form->addSubmit('gonext', '_Uložit & přejít +1')->controlPrototype->class("btn")->accesskey('u')->title('Alt+u');
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
            $this->redirect('default', $this->cislo->id+1);
        else
            $this->redirect('default', $this->cislo->id);
    }
}
