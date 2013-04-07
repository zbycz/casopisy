<?php

if(!class_exists("Unit")){
/**
 * Unit
 */
class Unit {
    

    
    private static $unitTreeAllOutputTranslate = array(
        "ValidFrom"=>"DateFrom",
        "ValidTo"=>"DateTo",
        "ID_Unit"=>"ID",
        "ID_UnitParent"=>"ID_UnitParent",
        "UnitParent"=>"UnitParent",
        "Unit"=>"DisplayName",
        "SortName"=>"SortName",
        "RegistrationNumber"=>"RegistrationNumber",
        //"ID_UnitMerge"=>"ID_UnitMerge",
        "CanRenew"=> "CanRenew",
        "IsUnitCancel"=>"IsUnitCancel"
    );

    
    private function fillObject($obj, $translateArr = null){
        if($translateArr!=null){
            $arr = $translateArr;
            foreach($arr as $key=>$newKey){
                if(isset($obj->$key)){
                    $this->$newKey = $obj->$key;
                }
            }
        }else{
            $arr = array_keys(get_class_vars(get_class($this)));
            foreach($arr as $key){                
                if(isset($obj->$key)){
                    $this->$key = $obj->$key;
                }
            }
        }
    }
  
    /**
     *
     * @param UnitTreeAllOutput $arr 
     */
    public function __construct($arr = null, $class = null) {
        if($arr instanceof UnitTreeAllOutput){
            $this->fillObject($arr, self::$unitTreeAllOutputTranslate);
            $this->loadDetails();
        }elseif($arr!=null){
            $this->fillObject($arr);
        }
    }
    
        public $Note;
        
        public $Location;
        
        public $ShortRegistrationNumber;
    
        public $UnitType;
    
        public $ID_UnitType;
        /**
         *
         * @var sbool
         */
        public $CanRenew;

	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
        
        /**
         *
         * @var sstring
         */
        public $SortName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IC;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Street;
	/**
	 * @access public
	 * @var sstring
	 */
	public $City;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Postcode;
	/**
	 * @access public
	 * @var sstring
	 */
	public $State;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PostalFirstLine;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PostalStreet;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PostalCity;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PostalPostcode;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PostalState;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitParent;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UnitParent;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ParentRegistrationNumber;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateTo;
        
        /**
         *
         * @var MembersCount
         */
        private $membersCount = NULL;
        
        
        /**
         * Funkce slouzi k zjisteni poctu clenu v jednotce
         * 
         * @return MembersCount 
         */
        public function getMembersCount(){
            if($this->membersCount==NULL){
                $this->membersCount = SkautIS::getInstance()->anonymServiceHelper->getMembersCount($this->ID);
            }
            return $this->membersCount;
        }
        
        /**
         *
         * @var array[string]string
         */
        private $functions = NULL;
        
        /**
         * Funkce zjistuje aktualni obsazeni funcci v dane jednotce, pres
         * anonymni funcke
         * 
         * @param string mozne hodnoty: "Statutory", "Assistant", "Contact"
         * @return string pokud se vrati prazdny retezec, pak je dana funkce 
         * neobsazena
         */
        public function getFunctionsAnonym($type){
//            if(!key_exists($type, CodeLists::$possibleFunctions)){
//                throw new Exception("Spatny typ parametru: '$type'. Mozne pouziti: ".join(", ", array_keys(CodeLists::$possibleFunctions)));
//            }
            if(!isset($this->functions[$type])){
                $this->functions[$type] = SkautIS::getInstance()->anonymServiceHelper->getFunctions($this->ID, $type);
            }
            return $this->functions[$type];
        }
        
        /**
         *
         * @var array[int]Account
         */
        private $accounts = NULL;
        /**
         * Metoda vraci pole bankovnich uctu POZOR i neaktualnich!!! Platny BU
         * se pozna podle toho, ze ma hodnotu valid to mensi nez aktualni den
         *
         * @return array[int]Account
         */
        public function getAccounts(){
            if($this->accounts==NULL){
                $this->accounts = SkautIS::getInstance()->anonymServiceHelper->getAccounts($this->ID);
            }
            return $this->accounts;
        }
        /**
         *
         * @var array[string]UnitContact
         */
        private $contacts = NULL;
        
        /**
         * Metoda vraci seznam kontaktu, ktery je jiz rozparsovan do 
          asociativniho pole kde klic je typ hodnoty. Ciselnik hodnot je 
         * asociativni pole CodeLists::$contact_types
         * 
         * @see CodeList
         * @return array[string]UnitContact
         */
        public function getContactsAnonym(){
           if($this->contacts == NULL){
               $this->contacts = SkautIS::getInstance()->anonymServiceHelper->getUnitContact($this->ID);
           }
           return $this->contacts;
        }
        
        private $slaves = NULL;
        
        /**
         * return arrayOfUnit
         */
        public function getSlavesUnits(){
            if($this->slaves==null){
                $this->slaves = SkautIS::getInstance()->unitHelper->getSlavesUnits($this->ID);
            }
            foreach($this->slaves as $unit){
                $unit->loadDetails();
            }
            return $this->slaves;
        }
        
        public function loadDetails(){
            //$result = SkautIS::getInstance()->anonymServiceHelper->getUnit($this->ID);
            $result = SkautIS::getInstance()->unitHelper->getUnitDetailResult($this->ID);
            $this->fillObject($result);
        }
        
        private $persons = null;
        /**
         * return arrayOfPerson
         */
        public function getPersons(){
            if($this->persons==null){
                $this->persons = SkautIS::getInstance()->unitHelper->getPersonsFromUnit($this->ID);
            }
            return $this->persons;
        }


        private $advertisingSummary = null;
        /**
				 * @return AdvertisingSummaryOutput
         */
        public function getAdvertisingSummary(){
            if($this->advertisingSummary==null){
                $this->advertisingSummary = SkautIS::getInstance()->anonymServiceHelper->getAdvertisingSummary($this->ID);
            }
            return $this->advertisingSummary;
        }
    }
}

class UnitExt extends Unit{
    
}
?>
