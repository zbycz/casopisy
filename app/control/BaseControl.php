<?php

/**
 * Base control for non-modules controls.
 *
 * @copyright Copyright (c) 2013 Webwings s.r.o.
 * @author Jiří Dorazil juradee@gmail.com
 * @property-read BasePresenter $presenter
 */
use Nette\DI\Container,
    Nette\Application\UI\Control;

abstract class BaseControl extends Control {
    
   
    /** @var Nette\DI\Container */
    public $context;
    
    /** @var SettingModel */
    //public $settings;
    
    /** @var \Nette\Security\User user object instance */
    protected $user;
    
    /** @var Nette\Http\Session session container*/
    protected $session;
    
    protected $perPage = 20;
    
    protected $templateFile;
    protected $templateFolders = array();    
    
    public function __construct(\Nette\ComponentModel\IContainer $parent = NULL, $name = NULL) {
        parent::__construct($parent, $name);
        $this->setContext($this->presenter->context);
        $this->setSession($this->presenter->session);
        $this->setUser($this->presenter->user);
        //$this->settings = $this->context->settings;        
    }
    
    public function templatePrepareFilters($template) {
        $this->context->helperFactory->templatePrepareFilters($template);
        return $this;
    }    
    
    public function setContext(Container $context) {
        $this->context = $context;
        return $this;
    }
    
    /**
     * Sets user.
     *
     * @param Nette\Security\User $user
     * @return self
     */
    public function setUser(Nette\Security\User $user) {
        $this->user = $user;

        return $this;
    }

    /**
     * Sets session.
     *
     * @param Nette\Http\Session $session
     * @return self
     */
    public function setSession(Nette\Http\Session $session) {
        $this->session = $session;

        return $this;
    }
    
    public function isAjax() {
        return $this->presenter->isAjax();
    }    
    
    public function getModel($name){
        return $this->presenter->getModel($name);
    }
    
    /**
     * Sets folders in which will template lookup search.
     * @param array $folders
     * @return self
     */
    public function setTemplateFolders(array $folders) {
        $this->templateFolders = $folders;

        return $this;
    }
    
    public function setTemplateFile($relativePath) {
        $this->templateFile = $this->selectTemplate($relativePath, true);

        return $this;
    }    
    
    protected function selectTemplate($relativePath, $need = false) {
        if (!$relativePath) {
            return null;
        } elseif (!$this->templateFolders) {
            throw new \InvalidArgumentException('Folders for template file search not set.');
        }

        $checkedPaths = array();
        foreach ($this->templateFolders as $folder) {
            $checkedPaths[] = $fullPath = Webwings\Utils\FileSystem::makeNicePath($folder . '/' . $relativePath);
            if (file_exists($fullPath)) {
                return $fullPath;
            }
        }

        if ($need) {
            $msg = 'No template found! (Looking at: "' . implode('", "', $checkedPaths) . '")';
            throw new \InvalidArgumentException($msg);
        }

        return null;
    }    
    
}
