<?php
require_once 'OrganizationUnit.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnonymServiceHelper
 *
 * @author pridaros
 */
class AnonymServiceHelper {
    
    
    /**
     *
     * @var SkautIS
     */
    private $skautIS;
   
    
    /**
     *
     * @param SkautIS $skautIS 
     */
    public function __construct($skautIS) {
        $this->skautIS = $skautIS;
    }
    /**
     * @return array[int]Unit Funkce vraci vzdy pole. I v pripade, ze nebylo nic 
     * nalezeno
     * 
     * @param array[string]string $params klic pole je nazev pole, ve kterem se hleda hodnota
     * je pak vyhledavana hodnota. Pripustne hodnoty: DisplayName, IC, 
     * RegistrationNumber, Location, ParentDisplayName, ParentRegistrationNumber,
     * isValid
     */
    public function searchUnit($params){
        $unitAllRegistry = new UnitAllRegistry();
        $unitAllRegistryInput = new UnitAllRegistryInput();
        foreach ($params as $key => $value){
//            if(!key_exists($key, CodeLists::$possibleSearchParams)){
//                throw new Exception("Spatny vyhledavaci parametr: '$key'. Mozne pouziti: ".join(", ", array_keys($this->possibleSearchParams)));
//            }
            eval("\$unitAllRegistryInput->$key = \"$value\";");
        } 
        $unitAllRegistryInput->ID_Application = appId;
        $unitAllRegistry->unitAllRegistryInput = $unitAllRegistryInput;
        $result = $this->skautIS->organizationUnit->UnitAllRegistry($unitAllRegistry)->UnitAllRegistryResult;
        if(!isset($result->UnitAllRegistryOutput) && !is_array($result)){
            return array();
        }
        $result = $result->UnitAllRegistryOutput;
        if(!is_array($result)){
            return array($result);
        }
        return $result;
    }
    
    /**
     * @return Unit
     * @param id $id 
     */
    public function getUnit($id){
        $unitDetailRegistry = new UnitDetailRegistry();
        $unitDetailRegistryInput = new UnitDetailRegistryInput();
        $unitDetailRegistryInput->ID = $id;
        $unitDetailRegistryInput->ID_Application = appId;
        $unitDetailRegistryInput->ID_Login = null;
        $unitDetailRegistry->unitDetailRegistryInput = $unitDetailRegistryInput;
        $unitDetailRegistryResult = $this->skautIS->organizationUnit->UnitDetailRegistry($unitDetailRegistry)->UnitDetailRegistryResult;
        return $unitDetailRegistryResult;
    }
    
    /**
     * Misto teto funkce radeji pouzivat funkci getMamgersCount, ktera se 
     * nachazi v tride Unit
     *
     * @param int $id
     * @return MemberCount 
     */
    
    public function getMembersCount($id){
        $unitDetailMembersRegistry = new UnitDetailMembersRegistry();
        $unitDetailMembersRegistryInput = new UnitDetailMembersRegistryInput();
        $unitDetailMembersRegistryInput->ID_Application = appId;
        $unitDetailMembersRegistryInput->ID = $id;
        $unitDetailMembersRegistry->unitDetailMembersRegistryInput = $unitDetailMembersRegistryInput;
        return $this->skautIS->organizationUnit->UnitDetailMembersRegistry($unitDetailMembersRegistry)->UnitDetailMembersRegistryResult;
    }
    
    
    /**
     * Misto teto funkce radeji pouzivat funkci ve tride Unit
     * 
     * @param int $id
     * @param string $type
     * @return string  
     */
     public function getFunctions($id, $type) {
        $functionAllRegistry = new FunctionAllRegistry();
        $functionAllRegistryInput = new FunctionAllRegistryInput();
        $functionAllRegistryInput->ID_Application = appId;
        $functionAllRegistryInput->ID_Unit = $id;
        if($type == "Statutory"){//Unit::$possibleFunctions[0]){
            $functionAllRegistryInput->ReturnStatutory = true;
        }
        if($type == "Assistant"){//Unit::$possibleFunctions[1]){
            $functionAllRegistryInput->ReturnAssistant = true;
        }
        if($type == "Contact"){//Unit::$possibleFunctions[2]){
            $functionAllRegistryInput->ReturnContact = true;
        }
        $functionAllRegistry->functionAllRegistryInput = $functionAllRegistryInput;
        $result = $this->skautIS->organizationUnit->FunctionAllRegistry($functionAllRegistry)->FunctionAllRegistryResult;
        if(isset ($result->FunctionAllRegistryOutput->Person)){
            return $result->FunctionAllRegistryOutput->Person;
        }else{
            return "";
        }
    }
    
    /**
     *
     * @param int $id
     * @return array[int]Accounts
     */
     public function getAccounts($id){
            $accountAll = new AccountAll();
            $accountAllInput = new AccountAllInput();
            $accountAllInput->ID_Application = appId;
            $accountAllInput->ID_Unit = $id;
            $accountAll->accountAllInput = $accountAllInput;
            $result = $this->skautIS->organizationUnit->AccountAll($accountAll)->AccountAllResult;
            if(isset($result->AccountAllOutput)){
                return $result->AccountAllOutput;
            }else{
                return array();
            }
        }
        
        
        /**
         *
         * @param int $id
         * @param string $type
         * @return array[string]UnitContact
         */
        public function getUnitContact($id, $type = NULL){
            if($type != NULL && !key_exists($type, CodeLists::$contact_types)){
               throw new Exception("Spatny typ parametru: '$type'. Mozne pouziti: ".join(", ", array_keys(CodeLists::$contact_types))); 
            }
            $unitContactAll = new UnitContactAll();
            $unitContactAllInput = new UnitContactAllInput();
            $unitContactAllInput->ID_Application = appId;
            $unitContactAllInput->ID_Unit = $id;
            if($type!=NULL){
                $unitContactAllInput->ID_ContactType = $type;
            }
            $unitContactAll->unitContactAllInput = $unitContactAllInput;
            $result = $this->skautIS->organizationUnit->UnitContactAll($unitContactAll)->UnitContactAllResult;
            if(isset($result->UnitContactAllOutput)){
                if(is_array($result->UnitContactAllOutput)){
                    $res = array();
                    foreach ($result->UnitContactAllOutput as $u){
                        $res[$u->ID_ContactType] = $u;
                    }
                    return $res;
                }else{
                    return array($result->UnitContactAllOutput->ID_ContactType => $result->UnitContactAllOutput);
                }
            }else{
                return array();
            }
        }


    /**
     * @return AdvertisingSummaryOutput
     * @param id $id
     */
    public function getAdvertisingSummary($id){
        $input = new AdvertisingSummaryInput();
        $input->ID_Application = appId;
        $input->ID_Login = null;
				$input->ID_Unit = $id;

        $req = new AdvertisingSummary();
        $req->advertisingSummaryInput = $input;
        $result = $this->skautIS->organizationUnit->AdvertisingSummary($req)->AdvertisingSummaryResult;
        if(isset($result->AdvertisingSummaryOutput)){
            return $result->AdvertisingSummaryOutput;
        }else{
            return array();
        }        
        
    }

		
    /** Nic zajímavého - jen jiné vyhledávací parametry
     * @return AdvertisingCategoryAllOutput
     * @param id $id
     */
    public function getAdvertisingCategoryAll($id){
        $input = new AdvertisingCategoryAllInput();
        $input->ID_Application = appId;
        $input->ID_Login = null;
				$input->ID_Unit = $id;

        $req = new AdvertisingCategoryAll();
        $req->advertisingCategoryAllInput = $input;
        return $this->skautIS->organizationUnit->AdvertisingCategoryAll($req)->AdvertisingCategoryAllResult;
    }

}

?>
