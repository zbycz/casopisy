<?php

if (!class_exists("User")) {
/**
 * UserDetailOutput
 */
class User {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsActive;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsEnabled;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsDebug;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UserName;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DatePasswordChange;
	/**
	 * @access public
	 * @var sint
	 */
	public $IncorrectPasswordCount;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $PasswordRequest;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $PasswordRequestTimeout;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $SecurityCode;

        private $userRoles = NULL;

        /**
         * Vraci seznam vsech roli daneho uzivatele
         * @return arrayOfUserRole
         */

        public function getRoles($refresh = false){
            if($refresh){$this->userRoles = NULL;$this->actualRole=null;}
            if($this->userRoles==NULL){
                $this->userRoles = SkautIS::getInstance()->loginHelper->getRoles($this->ID);
                foreach($this->userRoles as $role){

                    if($role->ID == $_SESSION[ROLE]){
                        $role->isActual = true;
                        $this->actualRole = $role;
                    }else{
                        $role->isActual = false;
                    }
                }
            }
            //$this->userRoles->isActual = true;
            return $this->userRoles;
        }

        private static $roleType = array(
            "18" => "vedouci_oddilu",
            "44" => "vedouci_druziny"
        );

        /**
         *
         * @var UserRole
         */
        private $actualRole = NULL;
        public function getActualRole(){
            if($this->actualRole == NULL){
                $roles = @$this->getRoles();
                foreach($roles as $role){
                    if($role->isActual){
                        $this->actualRole = @$role;
                        $this->actualRole->roleType = self::$roleType[$this->actualRole->ID_Role];
                        return $this->actualRole;
                    }
                }
            }else{
                $this->actualRole->roleType = self::$roleType[$this->actualRole->ID_Role];
                return $this->actualRole;
            }
        }
}}
?>
