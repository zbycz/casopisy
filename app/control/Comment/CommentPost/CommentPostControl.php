<?php

class CommentPostControl extends BaseControl {
       
    /** @var CommentModel */
    protected $model;    
    protected $pageId;
    protected $cislo;
    protected $comments;



    public function __construct(\Nette\ComponentModel\IContainer $parent = NULL, $name = NULL) {
        parent::__construct($parent, $name);
        $this->templateFolders = array(__DIR__);
        $this->setTemplateFile('/default.latte');
        $this->model = new \CommentModel($this->context);
        $this->cislo = $this->presenter->getParameter('id');
        
        
    }
    
    public function setPageId($pageId){
        $this->pageId = $pageId;
    }
    
    public function setComments($comments){
        $this->comments = $comments;
    }    
    

    public function render() {       
                
        //$visualPaginator = $this['paginator'];
        //$paginator = $visualPaginator->getPaginator();
        //$paginator->itemsPerPage = $this->perPage;
        //$paginator->setPage($this['paginator']->getParameter('page')); 
        //$paginator->page = $this['paginator']->getParam('page');
        $template = $this->template;
        $template->setFile($this->templateFile);
        $template->isAjax = $this->isAjax();        
        $template->id = $this->pageId;        
        //$paginator->itemCount = $this->model->getCommentsNoSpamCount($this->gameId); 
        if ($this->isAjax()){
            $comments = $this->model->getComments($this->cislo,$this->pageId);                       
        } else {
            if ($this->comments === null){
                $comments = $this->model->getComments($this->cislo,$this->pageId);                       
            } else {
                $comments = $this->comments;
            }
        }
        
        $template->comments = $comments;
        
        //$template->paginator = $visualPaginator;               
        //$paginator->getPage(), $this->perPage
        $template->render();
        
    }       
    

    
    public function createComponentPaginator($name) {        
        $paginator = new \NasExt\Controls\VisualPaginator();
        
        $paginator->setAjaxRequest();                
        $paginator->onShowPage[] = function($component, $page){
          if($this->isAjax()){
              //$this->invalidateControl();
              }              
        };
        
        return $paginator;
    }     
    
    public function handleDelete($id){
		if (!$this->user->isInRole('admin') || $this->model->isOwner($id, $this->user->id)) {
			throw new ForbiddenRequestException("Mazat komenty mohou jen admini, nebo vlastník komentáře");
		}
		$this->model->delete($id);
		$this->flashMessage('Komentář je skrytý.');
		$this->invalidateControl("comments");
		$this->presenter->invalidateControl("flashes");
		if (!$this->isAjax()){
			$this->redirect("this");
        }         
    }
       
}
