<?php

/**
 * Trida ktera umoznuje snadny pristup k funkcnim pomoci nichz se da delat 
 * agenda okolo jednotek i osob
 * 
 * @author pridaros
 */
class OrganizationUnitHelper {
    /**
     *
     * @var SkautIS
     */
    private $skautIS;  
    
    public function createNewUnit($parentUnitId, $unitName, $unitType, $regNum, $place, $note){
        $parentUnit = $this->getUnit($parentUnitId);
        $unitInsertUnit = new UnitInsertUnit();
        $unit = new Unit();
        $unit->ID_Login = $this->skautIS->loginHelper->getLoginId();
        $unit->ID_Unit = $parentUnitId;
        $unit->Unit_EnterRegistrationNumber = $parentUnit->RegistrationNumber.".".$regNum;
        $unit->ID_UnitParent = $parentUnitId;
        $unit->DisplayName = $unitName;
        $unit->ID_UnitType = $unitType;
        $unit->Note = $note;
        $unit->Location = $place;
        $unitInsertUnit->unit = $unit;
        var_dump($unitInsertUnit);
        $result = $this->skautIS->organizationUnit->UnitInsertUnit($unitInsertUnit);
        return $result->UnitInsertUnitResult->ID;
    }
    
    public function changeUnit($destinationUnitId, $personId, $membershipId){
        //var_dump($this->getMembershipDetail($membershipId));
        $membershipDetail = $this->getMembershipDetail($membershipId);
        //var_dump($membershipDetail);
        $membershipInsert = new MembershipInsert();
        $membership = new Membership();
        $membership->ID_Login = $this->skautIS->loginHelper->getLoginId();
        $membership->ID = $membershipDetail->ID;
        $membership->ID_Unit = $destinationUnitId;
        //$membership->ValidFrom
        foreach(array("ID_Person", "ID_MembershipCategory", "ValidFrom", "ID_MembershipType") as $value){
            $membership->$value = $membershipDetail->$value;
        }
        $membershipInsert->membership = $membership;
        try{
            $this->skautIS->organizationUnit->MembershipInsert($membershipInsert);
            return true;
        }catch(Exception $e){
            return false;
        }
    }
    
    
    private function getMembershipDetail($membershipId){
        $membershipDetail = new MembershipDetail();
        $membershipDetailInput = new MembershipDetailInput();
        $membershipDetailInput->ID_Login = $this->skautIS->loginHelper->getLoginId();
        $membershipDetailInput->ID = $membershipId;
        $membershipDetail->membershipDetailInput = $membershipDetailInput;
        return $this->skautIS->organizationUnit->MembershipDetail($membershipDetail)->MembershipDetailResult;
    }
    
    /**
     *
     * @param int $unitId
     * @return arrayofPerson 
     */
    public function getPersonsFromUnit($unitId) {
        $result = $this->findMembership(array("ID_Unit"=>$unitId, "OnlyDirectMember" => true, "IsValid"=>true));
        $res = array();
        //var_dump($result);
        foreach($result as $personOut){
            $res[] = new Person($personOut);
        }
        return $res;
    }
    
    /**
     *
     * @param type $array
     * @return arrayofPerson
     */
    private function findMembership($array){
        $membershipAll = new MembershipAll();
        $membershipAllInput = new MembershipAllInput();
        $membershipAllInput->ID_Login = $this->skautIS->loginHelper->getLoginId();
        //$membershipAllInput->IsValid = true;
        foreach ($array as $key => $value) {
            $membershipAllInput->$key = $value;
        }
        //$membershipAllInput->ID_Unit = $unitId;
        //$membershipAllInput->IsValid = true;
        //$membershipAllInput->OnlyDirectMember = true;
        $membershipAll->membershipAllInput = $membershipAllInput;
        $result = $this->skautIS->organizationUnit->MembershipAll($membershipAll)->MembershipAllResult;        
        if(isset($result->MembershipAllOutput)){
            if(is_array($result->MembershipAllOutput)){
                return $result->MembershipAllOutput;
            }else{
                return array($result->MembershipAllOutput);
            }
        }else{
            return array();
        }
    }
    
    public function getUnitDetailResult($unitId){
        //return $this->skautIS->anonymServiceHelper->getUnit($unitId);
        $unitDetail = new UnitDetail();
        $unitDetailInput = new UnitDetailInput();
        $unitDetailInput->ID_Application = appId;
        $unitDetailInput->ID_Login = $this->skautIS->loginHelper->getLoginId();
        $unitDetailInput->ID = $unitId;
        $unitDetail->unitDetailInput = $unitDetailInput;
        return $this->skautIS->organizationUnit->UnitDetail($unitDetail)->UnitDetailResult;
    }
    
    public function getUnit($unitId){
        return new Unit($this->getUnitDetailResult($unitId));
    }
    
    public function getSlavesUnits($idUnit, $valid = true) {
        $unitTreeAll = new UnitTreeAll();
        $unitTreeAllInput = new UnitTreeAllInput();
        $unitTreeAllInput->ID_Application = appId;
        $unitTreeAllInput->ID_Login = $this->skautIS->loginHelper->getLoginId();
        $unitTreeAllInput->ID_UnitParent = $idUnit;
        $unitTreeAllInput->IsValid = $valid;
        $unitTreeAll->unitTreeAllInput = $unitTreeAllInput;
        $result = $this->skautIS->organizationUnit->UnitTreeAll($unitTreeAll)->UnitTreeAllResult;
        //var_dump($result);
        if(isset($result->UnitTreeAllOutput)){
            $res = array();
            foreach ($result->UnitTreeAllOutput as $unit) {
                $res[] = new Unit($unit);
            }
            return $res;
        }else{
            return array();
        }
       
    }
    
    /**
     * Konstruktor nepouzivat, je daleko tento objekt je nainstancovan v objektu
     * skautis, pouzivejte jej
     * 
     * @param SkautIS $skautIS 
     */
    
    public function __construct($skautIS) {
        $this->skautIS = $skautIS;
    }


    /** 
     * Metoda umoznuje nacist osobu u ktere zname ID. Metoda vraci objekt typu 
     * Person
     * 
     * @param int
     * @return Person
     */
    public function getPerson($id){
            try{
                $personDetailInput = new PersonDetailInput();
                $personDetailInput->ID_Login = $this->skautIS->loginHelper->getLoginId();
                $personDetailInput->ID = $id;
                $personDetail = new PersonDetail();
                $personDetail->personDetailInput = $personDetailInput;
                $person = $this->skautIS->organizationUnit->PersonDetail($personDetail)->PersonDetailResult;
                return $person;
            }  catch (Exception $e){
                Logger::log("Nepodařilo se zjistit informace o přihlášené osobě:"+$e->__toString(), EERR);
                return null;
            }
    }
}

?>
