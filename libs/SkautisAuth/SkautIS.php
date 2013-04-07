<?php


require_once __DIR__.'/Conf.php';
//require_once 'classes/CodeLists.php';
require_once __DIR__.'/classes/OrganizationUnit.php';
require_once __DIR__.'/classes/UserManagement.php';
require_once __DIR__.'/classes/OrganizationUnitHelper.php';
require_once __DIR__.'/classes/AnonymServiceHelper.php';
require_once __DIR__.'/classes/LoginHelper.php';
require_once __DIR__.'/classes/Logger.php';
require_once __DIR__.'/constants.php';
//session_start();


/**
 * Trida ktera zapouzdruje vsechnu funkcionalitu pro praci se skautisem. Je to
 * jedina trida, kterou musite instacovat ve svych scriptech. O zbytek se jiz
 * postara
 *
 * @author pridaros
 */
class SkautIS {



    /**
     *
     * @var AnonymServiceHelper
     */
    public $anonymServiceHelper;

    /**
     * Tento objekt slouzi k zakladni obsluze vzdalenych sluzeb. Nepouzivejte ji
     * jedna se o generovanou tridu. Pouzivejte objekt unitHelper. Objekt je
     * public kvuli internimu volani
     *
     * @var OrganizationUnit
     */
    public $organizationUnit;
    /**
     * Tento objekt slouzi k zakladni obsluze vzdalenych sluzeb. Nepouzivejte ji
     * jedna se o generovanou tridu. Pouzivejte objekt loginHelper. Objekt je
     * public kvuli internimu volani
     *
     * @var UserManagement
     */
    public $userManagement;

    /**
     * Objekt ke sprave jednotek a osob
     *
     * @var OrganizationUnitHelper
     */
    public $unitHelper;

    /**
     * Objekt ke spravne logovani do skautisu
     *
     * @var LoginHelper
     */
    public $loginHelper;

    private static $__instance;


    /**
     *
     * @return SkautIS
     */
    public static function getInstance(){
        if(self::$__instance == NULL) self::$__instance = new SkautIS;
        return self::$__instance;
    }

    private function __construct() {
        $this->organizationUnit = new OrganizationUnit();
        $this->userManagement = new UserManagement();
        $this->unitHelper = new OrganizationUnitHelper($this);
        $this->loginHelper = new LoginHelper($this);
        $this->anonymServiceHelper = new AnonymServiceHelper($this);
    }

    /**
     * Metoda vraci iframe s login iframe. Jako parametry jsou vyska a sirka v
     * pixelech
     *
     * @param int $width
     * @param int $height
     * @return string
     */
    public function getLoginForm($width = 500, $height = 400){
        return $this->loginHelper->getLoginForm($width, $height);
    }

     public function getLoginUrl(){
        return loginFormAddres;
    }

    /**
     * Metoda, ktera zjistuje zda je uzivatel nalogovany. Overuje (a tim i
     * prodluzuje platnost tokenu) platnost tokenu na serveru. V ramci instance
     * se na webove sluzby pta pouze jednou (cachuje vysledek pri opakovanem
     * volani)
     *
     * @return bool
     */
    public function isLogged(){
        return $this->loginHelper->isLogged();
    }

    /**
     * Metoda vraci objekt osoby nalogovaneho uzivatele, ktery si defaultne
     * uklada v session (kvuli vykonu aplikace)
     *
     * @return Person
     */
    public function getLoggedPerson(){
        return $this->loginHelper->getLoggedPerson();
    }

     /**
     * Metoda vraci objekt nalogovaneho uzivatele (ne osoby), ktery si defaultne
     * uklada v session (kvuli vykonu aplikace)
     *
     * @return User
     */
    public function getLoggedUser(){
        return $this->loginHelper->getLoggedUser();
    }
    /**
     * Metoda meni roli uzivatele
     *
     * @param int $id_role id role
     */
    public function changeRole($id_role){
        $this->loginHelper->changeRole($id_role);
    }

    /**
     * Metoda vraci objekt aktualni jednotky, ke ktere se vztahuje aktualni role
     * @return Unit
     */
    public function getActualUnit(){
        //return $this->anonymServiceHelper->getUnit($_SESSION[IDUNIT]);
        return new Unit($this->unitHelper->getUnitDetailResult($_SESSION[IDUNIT]));
    }
}

?>
