<?php

class CommentsControl extends BaseControl {
        
    protected $pageId;
    protected $comments = null;


    public function __construct(\Nette\ComponentModel\IContainer $parent = NULL, $name = NULL) {
        parent::__construct($parent, $name);
        $this->templateFolders = array(__DIR__);
        $this->setTemplateFile('/default.latte');            
    }
    
    public function setPageId($pageId){
        $this->pageId = $pageId;
    }
    
    public function setComments($comments){
        $this->comments = $comments;
    }

    public function render() {             
        if ($this->isAjax()){
            $this->invalidateControl('post');                        
        }        
        
        $template = $this->template;
        $template->setFile($this->templateFile);
        $template->isAjax = $this->isAjax();                             
        $template->render();        
    }

    public function createComponentAddForm($name) {
        $control = new CommentAddFormControl($this,$name);                
        $control->setPageId($this->pageId);
        return $control;
    }    
    
    public function createComponentPost($name) {        
        $control = new CommentPostControl($this,$name);
        $control->setPageId($this->pageId);
        $control->setComments($this->comments);
        return $control;        
    }          

}
