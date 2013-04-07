<?php
require_once 'UserManagement.php';
require_once 'OrganizationUnit.php';

/**
 * Trida ktera umoznuje snadny pristup k logovacim funkcnim pomoci nichz se da 
 * snadno prihlasit do skautisu
 */

class LoginHelper{
    
    /**
     *
     * @var SkautIS
     */
    private $skautIS;
    
    /**
     *
     * @var bool
     */
    private $isLogged = null;
    public function changeRole($id_role) {
        $loginUpdate = new LoginUpdate();
        $loginUpdateInput = new LoginUpdateInput();
        $loginUpdateInput->ID = $this->getLoginId();
        $loginUpdateInput->ID_UserRole = $id_role;
        $loginUpdate->loginUpdateInput = $loginUpdateInput;
        $result = $this->skautIS->userManagement->LoginUpdate($loginUpdate);
        $_SESSION[ROLE] = $id_role;
        $_SESSION[IDUNIT] = $result->LoginUpdateResult->ID_Unit;
        $this->getLoggedUser()->getRoles(true);
    }
    
     public function getAllRoles(){
        $roleAll = new RoleAll();
        $roleAllInput = new RoleAllInput();
        $roleAllInput->ID_Login = $this->getLoginId();
        //$roleAllInput->
        $roleAll->roleAllInput = $roleAllInput;
        return $this->skautIS->userManagement->RoleAll($roleAll)->RoleAllResult->RoleAllOutput;
    }
    
    public function getRoles($id) {
        $userRole = new UserRoleAll();
        $userRoleInsert = new UserRoleAllInput();
        $userRoleInsert->ID_Login = $this->getLoginId();
        $userRoleInsert->ID_User = $this->getLoggedUser()->ID;
        $userRole->userRoleAllInput = $userRoleInsert;
        $result = $this->skautIS->userManagement->UserRoleAll($userRole)->UserRoleAllResult;
        if(!isset ($result->UserRoleAllOutput)){
            return array();
        }else{
            $result = $result->UserRoleAllOutput;
        }
        if(!is_array($result)){
            return array($result);
        }else{
            return $result;
        }        
    }
    
    /**
     * Konstruktor nepouzivat, je daleko tento objekt je nainstancovan v objektu
     * skautis, pouzivejte tento objekt, sami si jej neinstancujte
     * 
     * @param SkautIS $skautIS
     */
    public function __construct($skautIS) {
        $this->skautIS = $skautIS;
    }
    
    /**
     * Interni metoda pro nacteni prihlaseneho uzivatele (nikoli osoby)
     * 
     * @return boolean
     */
    private function loadLoggedUser(){
         if(!$this->isLogged()){
            return false;
        }
        if(!empty($_SESSION[TOKEN])){
            try{
                $userDetailInput = new UserDetailInput();
                $userDetailInput->ID_Login = $this->getLoginId();
                $userDetail = new UserDetail();
                $userDetail->userDetailInput = $userDetailInput;
                $user = $this->skautIS->userManagement->UserDetail($userDetail)->UserDetailResult;
                $user->unit = $_SESSION[IDUNIT];
                $_SESSION[LOGGED_USER] = $user;
                return true;
            }  catch (Exception $e){
                Logger::log("Nepodařilo se zjistit informace o přihlášeném uživateli:"+$e->__toString(), EERR);
                return false;
            }
        }else{
            return false;
        }
    }
    
    
    /**
     * Metoda vraci objekt nalogovaneho uzivatele (ne osoby), ktery si defaultne
     * uklada v session (kvuli vykonu aplikace)
     *
     * @return User
     */
    public function getLoggedUser(){
         if(!$this->isLogged()){
            return null;
        }
        return $_SESSION[LOGGED_USER];
    }

    /**
     * Metoda vraci objekt osoby nalogovaneho uzivatele, ktery si defaultne
     * uklada v session (kvuli vykonu aplikace)
     *
     * @return Person
     */
    public function getLoggedPerson(){
         if(!$this->isLogged()){
            return null;
        }
        return $_SESSION[LOGGED_PERSON];
    }

    
    /**
     * Metoda je pro interni pouziti. Pouzivejte jiz naprogramovane obsluzne
     * metody.
     * 
     * Metoda vraci tzv. token, ktery je potreba pro autentifikaci pri kazdem 
     * volani WSDL. Tento token se uklada do $_SESSION. V pripade nezalogovaneho
     * uzivatele vraci null. Tato metoda nekontroluje zda je uzivatel prihlasen 
     * na serveru (neposila pozadavek na server).
     *
     * @return String
     */
    public function getLoginId(){
         /*if(!$this->isLogged()){
            return null;
        }*/
        if(key_exists(TOKEN, $_SESSION) && !empty($_SESSION[TOKEN])){
            return $_SESSION[TOKEN];
        }else{
            return null;
        }
    }

    /**
     * Interni metoda pro nacteni osoby prihlaseneho uzivatele
     * 
     * @return boolean
     */
    private function loadLoggedPerson(){
        if(!$this->isLogged()){
            return false;
        }
        if(key_exists(TOKEN, $_SESSION) && !empty($_SESSION[TOKEN])){
            $person = $this->skautIS->unitHelper->getPerson($this->getLoggedUser()->ID_Person);
            if($person!=null){
                $_SESSION[LOGGED_PERSON] = $person;
            }
            return true;
        }else{
            return false;
        }
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
        //var_dump($this->isLoggedT);
        if($this->isLogged==null){
            $this->isLogged = $this->isLoggedInternal();
        }
        return $this->isLogged;
    }
    
    /**
     * Interni metoda, ktera zjistuje zda je uzivatel nalogovany. Overuje (a tim i
     * prodluzuje platnost tokenu) platnost tokenu na serveru. 
     * 
     * @return bool
     */
    
    private function isLoggedInternal(){
        if(key_exists(TOKEN, $_SESSION) && !empty($_SESSION[TOKEN])){
            try{
                $loginUpdateRefresh = new LoginUpdateRefresh();
                $loginUpdateRefreshInput = new LoginUpdateRefreshInput();
                $loginUpdateRefreshInput->ID = $this->getLoginId();
                $loginUpdateRefresh->loginUpdateRefreshInput = $loginUpdateRefreshInput;
                $this->skautIS->userManagement->LoginUpdateRefresh($loginUpdateRefresh);
                return true;
            }catch(Exception $e){
                return false;
            }
        }else{
            return false;
        }
    }
    /**
     * Interni metoda, ktera zajistuje prihlaseni uzivatele. Tato metoda je
     * volana ze scriptu login.php, ktery obsluhuje prihlaseni. Metoda 
     * zpracovava parametry, ktere prijdou ze serveru (do sessiony uklada pouze 
     * token). Zaroven take nacita prihlaseneho uzivatele a osobu, ktera se na
     * tohoto uzivatele vaze. Proto role a unitid neni potreba ukladat.
     * 
     * TODO: otestovat jak je to s uzivatelem, ktery nema osobu     * 
     * 
     * @return boolean
     */
    public function doLogin(){
        $result = true;
        //var_dump($_POST);
        if(key_exists(TOKEN, $_POST)&&  key_exists(ROLE, $_POST) && key_exists(IDUNIT, $_POST)){
            $_SESSION[TOKEN] = $_POST[TOKEN];
            $_SESSION[ROLE] = $_POST[ROLE];
            $_SESSION[IDUNIT] = $_POST[IDUNIT];
            $result = $this->loadLoggedUser();
            if(!$result) return false;
            $result = $this->loadLoggedPerson();
            return $result;
        }else{
            Logger::log("Neregistruji očekávané hodnoty ze strany serveru", EERR);
            return false;
        }   
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
       return "<iframe ".
                "src=\"".loginFormAddres."\" ".
                "width=\"".$width."px\"  height=\"".$height."px\" marginwidth=\"0\"  marginheight=\"0\" frameborder=\"0\" scrolling=\"yes\" id=\"loginForm\"></iframe>";
    }
    
    
    /**
     * Interni metoda pro odhlaseni. Vola ji script logout.php.
     */
    public function logout(){
        $loginUpdateLogout = new LoginUpdateLogout();
        $logoutInput = new LoginUpdateLogoutInput();
        $logoutInput->ID = $this->getLoginId();
        //var_dump($this->getLoginId());
        unset ($_SESSION[TOKEN]);
        unset ($_SESSION[LOGGED_PERSON]);
        unset ($_SESSION[LOGGED_USER]);
        unset ($_SESSION[IDUNIT]);
        unset ($_SESSION[ROLE]);
    }    
}
   
    
?>
