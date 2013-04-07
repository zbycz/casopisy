<?php
if (!class_exists("Person")) {
/**
 * Person
 */
class Person {
    
    /**
     *
     * @param MembershipAllOutput $personOutput 
     */
    public function __construct($personOutput) {
        $this->ID = $personOutput->ID_Person;
        $this->DisplayName = $personOutput->Person;
        $this->IdentificationCode = $personOutput->IdentificationCode;
        $this->membershipId = $personOutput->ID;
    }
    
        public $membershipId;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DegreeInFrontOf;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DegreeBehind;
	/**
	 * @access public
	 * @var sstring
	 */
	public $SecurityCode;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IdentificationCode;
	/**
	 * @access public
	 * @var sstring
	 */
	public $FirstName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $LastName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $NickName;
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
	 * @var sstring
	 */
	public $Note;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Sex;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Sex;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $Birthday;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsForeign;
	/**
	 * @access public
	 * @var sint
	 */
	public $YearFrom;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_User;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $GenerateSecurityCode;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $OnlyValidate;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PhotoExtension;
	/**
	 * @access public
	 * @var sbase64Binary
	 */
	public $PhotoContent;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MaidenName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_PersonType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PersonType;
}}

?>
