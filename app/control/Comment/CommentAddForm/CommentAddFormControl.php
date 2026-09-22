<?php

use Nette\Application\UI\Form;

class CommentAddFormControl extends BaseControl {

    const CommentCharMaxCount = 255;
    
    /** @var CommentModel */
    protected $model;         
    protected $cislo;
    protected $pageId;



    public function __construct(\Nette\ComponentModel\IContainer $parent = NULL, $name = NULL) {
        parent::__construct($parent, $name);
        $this->templateFolders = array(__DIR__);
        $this->setTemplateFile('/default.latte');
        $this->model = new CommentModel($this->context);                
        $this->cislo = $this->presenter->getParameter('id');
    }
        
    public function setPageId($pageId){
        $this->pageId = $pageId;
    }    
    
    public function render() {        
        $template = $this->template;
        $template->setFile($this->templateFile);
        $template->isAjax = $this->isAjax();        
        $template->commentMaxCount = self::CommentCharMaxCount; 
        $this['addForm']->setValues(array('cislo_id'=>$this->cislo,'strana'=>$this->pageId,'user_id'=>  $this->user->id));
        $template->render();
    }

    public function createComponentAddForm($name) {

        $form = new Form($this, $name);
        $form->getElementPrototype()->class('ajax');        
        $form->addHidden('cislo_id');
        $form->addHidden('strana');
        $form->addHidden('user_id');
        $form->addTextArea('message', 'Zpráva')
                ->setRequired('Povinné pole')
                ->addRule(Form::MIN_LENGTH, 'Příspěvek musí mít alespoň 3 znaky', 3)
                ->getControlPrototype()->placeholder[] = 'Přidat vlastní zkušenost či doplnění...';
        $form->addSubmit('save', '')->getControlPrototype()->class[] = 'btn icon-comment';                                
        $form->onSuccess[] = callback($this, 'add');

        return $form;
    }

    public function add(Form $form) {        
        $values = $form->getValues(TRUE);                
        try {        			            
            $this->model->addComment($values);               
        } catch (InvalidArgumentException $e) {
            $this->presenter->flashMessage('Zprávu se nepodařilo přidat','error');
        }

        if (!$form->hasErrors()) {
            $this->presenter->flashMessage('Komentář přidán. Děkujeme!', 'success');            
        }
        if ($this->isAjax()) {            
            $form->setValues(array(),true);
            $this->presenter->invalidateControl('flashes');                                    
            $this->invalidateControl('addForm');
        } else {
            $this->presenter->redirect('this');
        }
        
    }

}
