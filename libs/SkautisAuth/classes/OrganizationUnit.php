<?php

require_once 'dataObjects/Unit.php';
require_once 'dataObjects/Person.php';
require_once 'dataObjects/MembersCount.php';
//require_once 'dataObjects/Account.php';
//require_once 'dataObjects/UnitContact.php';
//require_once 'dataObjects/UserRole.php';


define("organizationUnitWsdlAdress", wsdlAdress."/OrganizationUnit.asmx?WSDL");

/**
 * Tento script obsahuje tridy, ktere obsluhuji sluzbu OrganizationUnit. Tyto
 * tridy pokud mozno nepouzivat, jelikoz obsahuji nestastne obalovani objektu
 * jinymi objekty. Tyto tridy byly automaticky generovany pomoci classGeneratoru
 */

if (!class_exists("RequestStateAll")) {
/**
 * RequestStateAll
 */
class RequestStateAll {
	/**
	 * @access public
	 * @var RequestStateAllInput
	 */
	public $requestStateAllInput;
}}

if (!class_exists("RequestStateAllInput")) {
/**
 * RequestStateAllInput
 */
class RequestStateAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("RequestStateAllResponse")) {
/**
 * RequestStateAllResponse
 */
class RequestStateAllResponse {
	/**
	 * @access public
	 * @var ArrayOfRequestStateAllOutput
	 */
	public $RequestStateAllResult;
}}

if (!class_exists("RequestStateAllOutput")) {
/**
 * RequestStateAllOutput
 */
class RequestStateAllOutput {
	/**
	 * @access public
	 * @var sstring
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
	public $Note;
}}

if (!class_exists("RequestInsert")) {
/**
 * RequestInsert
 */
class RequestInsert {
	/**
	 * @access public
	 * @var Request
	 */
	public $request;
}}

if (!class_exists("Request")) {
/**
 * Request
 */
class Request {
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
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IdentificationCode;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Reason;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipCategory;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UserCreate;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_PersonCreate;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PersonCreate;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateCreate;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_RequestState;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RequestState;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UserDecision;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_PersonDecision;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PersonDecision;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateDecision;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Decision;
}}

if (!class_exists("RequestInsertResponse")) {
/**
 * RequestInsertResponse
 */
class RequestInsertResponse {
	/**
	 * @access public
	 * @var RequestInsertOutput
	 */
	public $RequestInsertResult;
}}

if (!class_exists("RequestInsertOutput")) {
/**
 * RequestInsertOutput
 */
class RequestInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("RequestDetail")) {
/**
 * RequestDetail
 */
class RequestDetail {
	/**
	 * @access public
	 * @var RequestDetailInput
	 */
	public $requestDetailInput;
}}

if (!class_exists("RequestDetailInput")) {
/**
 * RequestDetailInput
 */
class RequestDetailInput {
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
}}

if (!class_exists("RequestDetailResponse")) {
/**
 * RequestDetailResponse
 */
class RequestDetailResponse {
	/**
	 * @access public
	 * @var Request
	 */
	public $RequestDetailResult;
}}

if (!class_exists("UnitCancelAll")) {
/**
 * UnitCancelAll
 */
class UnitCancelAll {
	/**
	 * @access public
	 * @var UnitCancelAllInput
	 */
	public $unitCancelAllInput;
}}

if (!class_exists("UnitCancelAllInput")) {
/**
 * UnitCancelAllInput
 */
class UnitCancelAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitCancelType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
}}

if (!class_exists("UnitCancelAllResponse")) {
/**
 * UnitCancelAllResponse
 */
class UnitCancelAllResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitCancelAllOutput
	 */
	public $UnitCancelAllResult;
}}

if (!class_exists("UnitCancelAllOutput")) {
/**
 * UnitCancelAllOutput
 */
class UnitCancelAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitCancelType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UnitCancelType;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateDecision;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Description;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
}}

if (!class_exists("MeetingDateDelete")) {
/**
 * MeetingDateDelete
 */
class MeetingDateDelete {
	/**
	 * @access public
	 * @var MeetingDateDeleteInput
	 */
	public $meetingDateDeleteInput;
}}

if (!class_exists("MeetingDateDeleteInput")) {
/**
 * MeetingDateDeleteInput
 */
class MeetingDateDeleteInput {
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
}}

if (!class_exists("MeetingDateDeleteResponse")) {
/**
 * MeetingDateDeleteResponse
 */
class MeetingDateDeleteResponse {
}}

if (!class_exists("EducatationSeminaryUpdate")) {
/**
 * EducatationSeminaryUpdate
 */
class EducatationSeminaryUpdate {
	/**
	 * @access public
	 * @var EducatationSeminary
	 */
	public $educatationSeminary;
}}

if (!class_exists("EducatationSeminary")) {
/**
 * EducatationSeminary
 */
class EducatationSeminary {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
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
	 * @var sint
	 */
	public $YearFrom;
}}

if (!class_exists("EducatationSeminaryUpdateResponse")) {
/**
 * EducatationSeminaryUpdateResponse
 */
class EducatationSeminaryUpdateResponse {
}}

if (!class_exists("AlignmentUpdate")) {
/**
 * AlignmentUpdate
 */
class AlignmentUpdate {
	/**
	 * @access public
	 * @var Alignment
	 */
	public $alignment;
}}

if (!class_exists("Alignment")) {
/**
 * Alignment
 */
class Alignment {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_AlignmentType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $AlignmentType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ColorMargin;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ColorCenter;
}}

if (!class_exists("AlignmentUpdateResponse")) {
/**
 * AlignmentUpdateResponse
 */
class AlignmentUpdateResponse {
}}

if (!class_exists("QualificationTypeAll")) {
/**
 * QualificationTypeAll
 */
class QualificationTypeAll {
	/**
	 * @access public
	 * @var QualificationTypeAllInput
	 */
	public $qualificationTypeAllInput;
}}

if (!class_exists("QualificationTypeAllInput")) {
/**
 * QualificationTypeAllInput
 */
class QualificationTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("QualificationTypeAllResponse")) {
/**
 * QualificationTypeAllResponse
 */
class QualificationTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfQualificationTypeAllOutput
	 */
	public $QualificationTypeAllResult;
}}

if (!class_exists("QualificationTypeAllOutput")) {
/**
 * QualificationTypeAllOutput
 */
class QualificationTypeAllOutput {
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
	 * @var sboolean
	 */
	public $RequiresAuthorization;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("PersonContactAll")) {
/**
 * PersonContactAll
 */
class PersonContactAll {
	/**
	 * @access public
	 * @var PersonContactAllInput
	 */
	public $personContactAllInput;
}}

if (!class_exists("PersonContactAllInput")) {
/**
 * PersonContactAllInput
 */
class PersonContactAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_ContactType;
}}

if (!class_exists("PersonContactAllResponse")) {
/**
 * PersonContactAllResponse
 */
class PersonContactAllResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonContactAllOutput
	 */
	public $PersonContactAllResult;
}}

if (!class_exists("PersonContactAllOutput")) {
/**
 * PersonContactAllOutput
 */
class PersonContactAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_ContactType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ContactType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsMain;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Value;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsSts;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsUsed;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayValue;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayIcon;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Icon;
}}

if (!class_exists("FunctionTypeInsert")) {
/**
 * FunctionTypeInsert
 */
class FunctionTypeInsert {
	/**
	 * @access public
	 * @var FunctionType
	 */
	public $functionType;
}}

if (!class_exists("FunctionType")) {
/**
 * FunctionType
 */
class FunctionType {
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
	public $Code;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitType;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Role;
	/**
	 * @access public
	 * @var sint
	 */
	public $MinCount;
	/**
	 * @access public
	 * @var sint
	 */
	public $MaxCount;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsStatutory;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAssistant;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAudit;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsOficial;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsElective;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsNotCongress;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsSpecification;
}}

if (!class_exists("FunctionTypeInsertResponse")) {
/**
 * FunctionTypeInsertResponse
 */
class FunctionTypeInsertResponse {
	/**
	 * @access public
	 * @var FunctionTypeInsertOutput
	 */
	public $FunctionTypeInsertResult;
}}

if (!class_exists("FunctionTypeInsertOutput")) {
/**
 * FunctionTypeInsertOutput
 */
class FunctionTypeInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("FunctionTypeDetail")) {
/**
 * FunctionTypeDetail
 */
class FunctionTypeDetail {
	/**
	 * @access public
	 * @var FunctionTypeDetailInput
	 */
	public $functionTypeDetailInput;
}}

if (!class_exists("FunctionTypeDetailInput")) {
/**
 * FunctionTypeDetailInput
 */
class FunctionTypeDetailInput {
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
}}

if (!class_exists("FunctionTypeDetailResponse")) {
/**
 * FunctionTypeDetailResponse
 */
class FunctionTypeDetailResponse {
	/**
	 * @access public
	 * @var FunctionType
	 */
	public $FunctionTypeDetailResult;
}}

if (!class_exists("EducationInsert")) {
/**
 * EducationInsert
 */
class EducationInsert {
	/**
	 * @access public
	 * @var Education
	 */
	public $education;
}}

if (!class_exists("Education")) {
/**
 * Education
 */
class Education {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_EducationType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("EducationInsertResponse")) {
/**
 * EducationInsertResponse
 */
class EducationInsertResponse {
	/**
	 * @access public
	 * @var EducationInsertOutput
	 */
	public $EducationInsertResult;
}}

if (!class_exists("EducationInsertOutput")) {
/**
 * EducationInsertOutput
 */
class EducationInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("DegreeTypeAll")) {
/**
 * DegreeTypeAll
 */
class DegreeTypeAll {
	/**
	 * @access public
	 * @var DegreeTypeAllInput
	 */
	public $degreeTypeAllInput;
}}

if (!class_exists("DegreeTypeAllInput")) {
/**
 * DegreeTypeAllInput
 */
class DegreeTypeAllInput {
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
}}

if (!class_exists("DegreeTypeAllResponse")) {
/**
 * DegreeTypeAllResponse
 */
class DegreeTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfDegreeTypeAllOutput
	 */
	public $DegreeTypeAllResult;
}}

if (!class_exists("DegreeTypeAllOutput")) {
/**
 * DegreeTypeAllOutput
 */
class DegreeTypeAllOutput {
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
	 * @var sboolean
	 */
	public $IsInFrontOf;
	/**
	 * @access public
	 * @var sint
	 */
	public $Order;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("UnitRegistrationAllChild")) {
/**
 * UnitRegistrationAllChild
 */
class UnitRegistrationAllChild {
	/**
	 * @access public
	 * @var UnitRegistrationAllChildInput
	 */
	public $unitRegistrationAllChildInput;
}}

if (!class_exists("UnitRegistrationAllChildInput")) {
/**
 * UnitRegistrationAllChildInput
 */
class UnitRegistrationAllChildInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitRegistration;
}}

if (!class_exists("UnitRegistrationAllChildResponse")) {
/**
 * UnitRegistrationAllChildResponse
 */
class UnitRegistrationAllChildResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitRegistrationAllChildOutput
	 */
	public $UnitRegistrationAllChildResult;
}}

if (!class_exists("UnitRegistrationAllChildOutput")) {
/**
 * UnitRegistrationAllChildOutput
 */
class UnitRegistrationAllChildOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateConfirmed;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsDelivered;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAccepted;
}}

if (!class_exists("EducatationSeminaryInsert")) {
/**
 * EducatationSeminaryInsert
 */
class EducatationSeminaryInsert {
	/**
	 * @access public
	 * @var EducatationSeminary
	 */
	public $educatationSeminary;
}}

if (!class_exists("EducatationSeminaryInsertResponse")) {
/**
 * EducatationSeminaryInsertResponse
 */
class EducatationSeminaryInsertResponse {
	/**
	 * @access public
	 * @var EducatationSeminaryInsertOutput
	 */
	public $EducatationSeminaryInsertResult;
}}

if (!class_exists("EducatationSeminaryInsertOutput")) {
/**
 * EducatationSeminaryInsertOutput
 */
class EducatationSeminaryInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("AccountDelete")) {
/**
 * AccountDelete
 */
class AccountDelete {
	/**
	 * @access public
	 * @var AccountDeleteInput
	 */
	public $accountDeleteInput;
}}

if (!class_exists("AccountDeleteInput")) {
/**
 * AccountDeleteInput
 */
class AccountDeleteInput {
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
}}

if (!class_exists("AccountDeleteResponse")) {
/**
 * AccountDeleteResponse
 */
class AccountDeleteResponse {
}}

if (!class_exists("AccountAll")) {
/**
 * AccountAll
 */
class AccountAll {
	/**
	 * @access public
	 * @var AccountAllInput
	 */
	public $accountAllInput;
}}

if (!class_exists("AccountAllInput")) {
/**
 * AccountAllInput
 */
class AccountAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Bank;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
}}

if (!class_exists("AccountAllResponse")) {
/**
 * AccountAllResponse
 */
class AccountAllResponse {
	/**
	 * @access public
	 * @var ArrayOfAccount
	 */
	public $AccountAllResult;
}}



if (!class_exists("PersonAllPublic")) {
/**
 * PersonAllPublic
 */
class PersonAllPublic {
	/**
	 * @access public
	 * @var PersonAllPublicInput
	 */
	public $personAllPublicInput;
}}

if (!class_exists("PersonAllPublicInput")) {
/**
 * PersonAllPublicInput
 */
class PersonAllPublicInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
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
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("PersonAllPublicResponse")) {
/**
 * PersonAllPublicResponse
 */
class PersonAllPublicResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonAllPublicOutput
	 */
	public $PersonAllPublicResult;
}}

if (!class_exists("PersonAllPublicOutput")) {
/**
 * PersonAllPublicOutput
 */
class PersonAllPublicOutput {
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
	 * @var sint
	 */
	public $BirthYear;
}}

if (!class_exists("PersonUpdateUser")) {
/**
 * PersonUpdateUser
 */
class PersonUpdateUser {
	/**
	 * @access public
	 * @var PersonUpdateUserInput
	 */
	public $personUpdateUserInput;
}}

if (!class_exists("PersonUpdateUserInput")) {
/**
 * PersonUpdateUserInput
 */
class PersonUpdateUserInput {
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
	public $UserName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $SecurityCode;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Overwrite;
}}

if (!class_exists("PersonUpdateUserResponse")) {
/**
 * PersonUpdateUserResponse
 */
class PersonUpdateUserResponse {
}}

if (!class_exists("UnitRegistrationCheck")) {
/**
 * UnitRegistrationCheck
 */
class UnitRegistrationCheck {
	/**
	 * @access public
	 * @var UnitRegistrationCheckInput
	 */
	public $unitRegistrationCheckInput;
}}

if (!class_exists("UnitRegistrationCheckInput")) {
/**
 * UnitRegistrationCheckInput
 */
class UnitRegistrationCheckInput {
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
}}

if (!class_exists("UnitRegistrationCheckResponse")) {
/**
 * UnitRegistrationCheckResponse
 */
class UnitRegistrationCheckResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitRegistrationCheckOutput
	 */
	public $UnitRegistrationCheckResult;
}}

if (!class_exists("UnitRegistrationCheckOutput")) {
/**
 * UnitRegistrationCheckOutput
 */
class UnitRegistrationCheckOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Mistake;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Mistake;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsUnit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ObjectId;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MistakeType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MistakeType;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Report;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Report;
}}

if (!class_exists("TroopArtAll")) {
/**
 * TroopArtAll
 */
class TroopArtAll {
	/**
	 * @access public
	 * @var TroopArtAllInput
	 */
	public $troopArtAllInput;
}}

if (!class_exists("TroopArtAllInput")) {
/**
 * TroopArtAllInput
 */
class TroopArtAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("TroopArtAllResponse")) {
/**
 * TroopArtAllResponse
 */
class TroopArtAllResponse {
	/**
	 * @access public
	 * @var ArrayOfTroopArtAllOutput
	 */
	public $TroopArtAllResult;
}}

if (!class_exists("TroopArtAllOutput")) {
/**
 * TroopArtAllOutput
 */
class TroopArtAllOutput {
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
	public $Note;
}}

if (!class_exists("StatementTypeAll")) {
/**
 * StatementTypeAll
 */
class StatementTypeAll {
	/**
	 * @access public
	 * @var StatementTypeAllInput
	 */
	public $statementTypeAllInput;
}}

if (!class_exists("StatementTypeAllInput")) {
/**
 * StatementTypeAllInput
 */
class StatementTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("StatementTypeAllResponse")) {
/**
 * StatementTypeAllResponse
 */
class StatementTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfStatementTypeAllOutput
	 */
	public $StatementTypeAllResult;
}}

if (!class_exists("StatementTypeAllOutput")) {
/**
 * StatementTypeAllOutput
 */
class StatementTypeAllOutput {
	/**
	 * @access public
	 * @var sstring
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
	public $Note;
}}

if (!class_exists("RegistrationCategoryAll")) {
/**
 * RegistrationCategoryAll
 */
class RegistrationCategoryAll {
	/**
	 * @access public
	 * @var RegistrationCategoryAllInput
	 */
	public $registrationCategoryAllInput;
}}

if (!class_exists("RegistrationCategoryAllInput")) {
/**
 * RegistrationCategoryAllInput
 */
class RegistrationCategoryAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitRegistration;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_RegistrationCategoryParent;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $ShowParentUnit;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $ShowUsable;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAfterDeadline;
}}

if (!class_exists("RegistrationCategoryAllResponse")) {
/**
 * RegistrationCategoryAllResponse
 */
class RegistrationCategoryAllResponse {
	/**
	 * @access public
	 * @var ArrayOfRegistrationCategoryAllOutput
	 */
	public $RegistrationCategoryAllResult;
}}

if (!class_exists("RegistrationCategoryAllOutput")) {
/**
 * RegistrationCategoryAllOutput
 */
class RegistrationCategoryAllOutput {
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
	 * @var sint
	 */
	public $ID_UnitRegistration;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_RegistrationCategoryParent;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAfterDeadline;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsJournal;
	/**
	 * @access public
	 * @var sdecimal
	 */
	public $Amount;
	/**
	 * @access public
	 * @var sdecimal
	 */
	public $AmountTotal;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsUsed;
}}

if (!class_exists("RealtyAll")) {
/**
 * RealtyAll
 */
class RealtyAll {
	/**
	 * @access public
	 * @var RealtyAllInput
	 */
	public $realtyAllInput;
}}

if (!class_exists("RealtyAllInput")) {
/**
 * RealtyAllInput
 */
class RealtyAllInput {
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
	 * @var sint
	 */
	public $ID_RealtyType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $City;
}}

if (!class_exists("RealtyAllResponse")) {
/**
 * RealtyAllResponse
 */
class RealtyAllResponse {
	/**
	 * @access public
	 * @var ArrayOfRealtyAllOutput
	 */
	public $RealtyAllResult;
}}

if (!class_exists("RealtyAllOutput")) {
/**
 * RealtyAllOutput
 */
class RealtyAllOutput {
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
	 * @var sint
	 */
	public $ID_RealtyType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RealtyType;
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
	 * @var sdouble
	 */
	public $GpsLatitude;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $GpsLongitude;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Description;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("OccupationAll")) {
/**
 * OccupationAll
 */
class OccupationAll {
	/**
	 * @access public
	 * @var OccupationAllInput
	 */
	public $occupationAllInput;
}}

if (!class_exists("OccupationAllInput")) {
/**
 * OccupationAllInput
 */
class OccupationAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IncludeChildUnits;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Realty;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Publish;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_RealtyType;
	/**
	 * @access public
	 * @var sint
	 */
	public $Distance;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $GpsLatitude;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $GpsLongitude;
}}

if (!class_exists("OccupationAllResponse")) {
/**
 * OccupationAllResponse
 */
class OccupationAllResponse {
	/**
	 * @access public
	 * @var ArrayOfOccupationAllOutput
	 */
	public $OccupationAllResult;
}}

if (!class_exists("OccupationAllOutput")) {
/**
 * OccupationAllOutput
 */
class OccupationAllOutput {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Realty;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Publish;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Address;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Description;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_RealtyType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RealtyType;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $GpsLatitude;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $GpsLongitude;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsUsed;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_RealtyTypeOccupation;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RealtyTypeOccupation;
}}

if (!class_exists("BankDetail")) {
/**
 * BankDetail
 */
class BankDetail {
	/**
	 * @access public
	 * @var BankDetailInput
	 */
	public $bankDetailInput;
}}

if (!class_exists("BankDetailInput")) {
/**
 * BankDetailInput
 */
class BankDetailInput {
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
}}

if (!class_exists("BankDetailResponse")) {
/**
 * BankDetailResponse
 */
class BankDetailResponse {
	/**
	 * @access public
	 * @var BankDetailOutput
	 */
	public $BankDetailResult;
}}

if (!class_exists("BankDetailOutput")) {
/**
 * BankDetailOutput
 */
class BankDetailOutput {
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
	public $Code;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("BankAll")) {
/**
 * BankAll
 */
class BankAll {
	/**
	 * @access public
	 * @var BankAllInput
	 */
	public $bankAllInput;
}}

if (!class_exists("BankAllInput")) {
/**
 * BankAllInput
 */
class BankAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("BankAllResponse")) {
/**
 * BankAllResponse
 */
class BankAllResponse {
	/**
	 * @access public
	 * @var ArrayOfBankAllOutput
	 */
	public $BankAllResult;
}}

if (!class_exists("BankAllOutput")) {
/**
 * BankAllOutput
 */
class BankAllOutput {
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
	public $Code;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("AlignmentInsert")) {
/**
 * AlignmentInsert
 */
class AlignmentInsert {
	/**
	 * @access public
	 * @var Alignment
	 */
	public $alignment;
}}

if (!class_exists("AlignmentInsertResponse")) {
/**
 * AlignmentInsertResponse
 */
class AlignmentInsertResponse {
	/**
	 * @access public
	 * @var AlignmentInsertOutput
	 */
	public $AlignmentInsertResult;
}}

if (!class_exists("AlignmentInsertOutput")) {
/**
 * AlignmentInsertOutput
 */
class AlignmentInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("AlignmentDetail")) {
/**
 * AlignmentDetail
 */
class AlignmentDetail {
	/**
	 * @access public
	 * @var AlignmentDetailInput
	 */
	public $alignmentDetailInput;
}}

if (!class_exists("AlignmentDetailInput")) {
/**
 * AlignmentDetailInput
 */
class AlignmentDetailInput {
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
}}

if (!class_exists("AlignmentDetailResponse")) {
/**
 * AlignmentDetailResponse
 */
class AlignmentDetailResponse {
	/**
	 * @access public
	 * @var Alignment
	 */
	public $AlignmentDetailResult;
}}

if (!class_exists("OfferTypeAll")) {
/**
 * OfferTypeAll
 */
class OfferTypeAll {
	/**
	 * @access public
	 * @var OfferTypeAllInput
	 */
	public $offerTypeAllInput;
}}

if (!class_exists("OfferTypeAllInput")) {
/**
 * OfferTypeAllInput
 */
class OfferTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("OfferTypeAllResponse")) {
/**
 * OfferTypeAllResponse
 */
class OfferTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfOfferTypeAllOutput
	 */
	public $OfferTypeAllResult;
}}

if (!class_exists("OfferTypeAllOutput")) {
/**
 * OfferTypeAllOutput
 */
class OfferTypeAllOutput {
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
	public $Note;
}}

if (!class_exists("OfferAll")) {
/**
 * OfferAll
 */
class OfferAll {
	/**
	 * @access public
	 * @var OfferAllInput
	 */
	public $offerAllInput;
}}

if (!class_exists("OfferAllInput")) {
/**
 * OfferAllInput
 */
class OfferAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_OfferType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsActive;
}}

if (!class_exists("OfferAllResponse")) {
/**
 * OfferAllResponse
 */
class OfferAllResponse {
	/**
	 * @access public
	 * @var ArrayOfOfferAllOutput
	 */
	public $OfferAllResult;
}}

if (!class_exists("OfferAllOutput")) {
/**
 * OfferAllOutput
 */
class OfferAllOutput {
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
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_OfferType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $OfferType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("MembershipCategoryAll")) {
/**
 * MembershipCategoryAll
 */
class MembershipCategoryAll {
	/**
	 * @access public
	 * @var MembershipCategoryAllInput
	 */
	public $membershipCategoryAllInput;
}}

if (!class_exists("MembershipCategoryAllInput")) {
/**
 * MembershipCategoryAllInput
 */
class MembershipCategoryAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Sex;
}}

if (!class_exists("MembershipCategoryAllResponse")) {
/**
 * MembershipCategoryAllResponse
 */
class MembershipCategoryAllResponse {
	/**
	 * @access public
	 * @var ArrayOfMembershipCategoryAllOutput
	 */
	public $MembershipCategoryAllResult;
}}

if (!class_exists("MembershipCategoryAllOutput")) {
/**
 * MembershipCategoryAllOutput
 */
class MembershipCategoryAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $MinAge;
	/**
	 * @access public
	 * @var sint
	 */
	public $MaxAge;
	/**
	 * @access public
	 * @var sstring
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
	public $ID_Sex;
}}

if (!class_exists("EducationTypeAll")) {
/**
 * EducationTypeAll
 */
class EducationTypeAll {
	/**
	 * @access public
	 * @var EducationTypeAllInput
	 */
	public $educationTypeAllInput;
}}

if (!class_exists("EducationTypeAllInput")) {
/**
 * EducationTypeAllInput
 */
class EducationTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("EducationTypeAllResponse")) {
/**
 * EducationTypeAllResponse
 */
class EducationTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfEducationTypeAllOutput
	 */
	public $EducationTypeAllResult;
}}

if (!class_exists("EducationTypeAllOutput")) {
/**
 * EducationTypeAllOutput
 */
class EducationTypeAllOutput {
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
	public $Note;
}}

if (!class_exists("PersonAllRegistrationCategory")) {
/**
 * PersonAllRegistrationCategory
 */
class PersonAllRegistrationCategory {
	/**
	 * @access public
	 * @var PersonAllRegistrationCategoryInput
	 */
	public $personAllRegistrationCategoryInput;
}}

if (!class_exists("PersonAllRegistrationCategoryInput")) {
/**
 * PersonAllRegistrationCategoryInput
 */
class PersonAllRegistrationCategoryInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_RegistrationCategory;
}}

if (!class_exists("PersonAllRegistrationCategoryResponse")) {
/**
 * PersonAllRegistrationCategoryResponse
 */
class PersonAllRegistrationCategoryResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonAllRegistrationCategoryOutput
	 */
	public $PersonAllRegistrationCategoryResult;
}}

if (!class_exists("PersonAllRegistrationCategoryOutput")) {
/**
 * PersonAllRegistrationCategoryOutput
 */
class PersonAllRegistrationCategoryOutput {
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
	 * @var sint
	 */
	public $ID_Membership;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $CanUse;
}}

if (!class_exists("QualificationDeleteHistory")) {
/**
 * QualificationDeleteHistory
 */
class QualificationDeleteHistory {
	/**
	 * @access public
	 * @var QualificationDeleteHistoryInput
	 */
	public $qualificationDeleteHistoryInput;
}}

if (!class_exists("QualificationDeleteHistoryInput")) {
/**
 * QualificationDeleteHistoryInput
 */
class QualificationDeleteHistoryInput {
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
}}

if (!class_exists("QualificationDeleteHistoryResponse")) {
/**
 * QualificationDeleteHistoryResponse
 */
class QualificationDeleteHistoryResponse {
}}

if (!class_exists("FunctionInsertHistory")) {
/**
 * FunctionInsertHistory
 */
class FunctionInsertHistory {
	/**
	 * @access public
	 * @var Function
	 */
	public $function;
}}

if (!class_exists("FFunction")) {
/**
 * Function
 */
class FFunction{
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
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_FunctionType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_FunctionReason;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Role;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsDeleteRole;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Specification;
}}

if (!class_exists("FunctionInsertHistoryResponse")) {
/**
 * FunctionInsertHistoryResponse
 */
class FunctionInsertHistoryResponse {
	/**
	 * @access public
	 * @var FunctionInsertHistoryOutput
	 */
	public $FunctionInsertHistoryResult;
}}

if (!class_exists("FunctionInsertHistoryOutput")) {
/**
 * FunctionInsertHistoryOutput
 */
class FunctionInsertHistoryOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("AlignmentTypeAll")) {
/**
 * AlignmentTypeAll
 */
class AlignmentTypeAll {
	/**
	 * @access public
	 * @var AlignmentTypeAllInput
	 */
	public $alignmentTypeAllInput;
}}

if (!class_exists("AlignmentTypeAllInput")) {
/**
 * AlignmentTypeAllInput
 */
class AlignmentTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("AlignmentTypeAllResponse")) {
/**
 * AlignmentTypeAllResponse
 */
class AlignmentTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfAlignmentTypeAllOutput
	 */
	public $AlignmentTypeAllResult;
}}

if (!class_exists("AlignmentTypeAllOutput")) {
/**
 * AlignmentTypeAllOutput
 */
class AlignmentTypeAllOutput {
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
	public $Note;
}}

if (!class_exists("UnitRegistrationAll")) {
/**
 * UnitRegistrationAll
 */
class UnitRegistrationAll {
	/**
	 * @access public
	 * @var UnitRegistrationAllInput
	 */
	public $unitRegistrationAllInput;
}}

if (!class_exists("UnitRegistrationAllInput")) {
/**
 * UnitRegistrationAllInput
 */
class UnitRegistrationAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $Year;
}}

if (!class_exists("UnitRegistrationAllResponse")) {
/**
 * UnitRegistrationAllResponse
 */
class UnitRegistrationAllResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitRegistrationAllOutput
	 */
	public $UnitRegistrationAllResult;
}}

if (!class_exists("UnitRegistrationAllOutput")) {
/**
 * UnitRegistrationAllOutput
 */
class UnitRegistrationAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $Year;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateConfirmed;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsDelivered;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAccepted;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("RegistrationCategoryDelete")) {
/**
 * RegistrationCategoryDelete
 */
class RegistrationCategoryDelete {
	/**
	 * @access public
	 * @var RegistrationCategoryDeleteInput
	 */
	public $registrationCategoryDeleteInput;
}}

if (!class_exists("RegistrationCategoryDeleteInput")) {
/**
 * RegistrationCategoryDeleteInput
 */
class RegistrationCategoryDeleteInput {
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
}}

if (!class_exists("RegistrationCategoryDeleteResponse")) {
/**
 * RegistrationCategoryDeleteResponse
 */
class RegistrationCategoryDeleteResponse {
}}

if (!class_exists("PersonContactDelete")) {
/**
 * PersonContactDelete
 */
class PersonContactDelete {
	/**
	 * @access public
	 * @var PersonContactDeleteInput
	 */
	public $personContactDeleteInput;
}}

if (!class_exists("PersonContactDeleteInput")) {
/**
 * PersonContactDeleteInput
 */
class PersonContactDeleteInput {
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
}}

if (!class_exists("PersonContactDeleteResponse")) {
/**
 * PersonContactDeleteResponse
 */
class PersonContactDeleteResponse {
}}

if (!class_exists("OfferDelete")) {
/**
 * OfferDelete
 */
class OfferDelete {
	/**
	 * @access public
	 * @var OfferDeleteInput
	 */
	public $offerDeleteInput;
}}

if (!class_exists("OfferDeleteInput")) {
/**
 * OfferDeleteInput
 */
class OfferDeleteInput {
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
}}

if (!class_exists("OfferDeleteResponse")) {
/**
 * OfferDeleteResponse
 */
class OfferDeleteResponse {
}}

if (!class_exists("FunctionTypeAll")) {
/**
 * FunctionTypeAll
 */
class FunctionTypeAll {
	/**
	 * @access public
	 * @var FunctionTypeAllInput
	 */
	public $functionTypeAllInput;
}}

if (!class_exists("FunctionTypeAllInput")) {
/**
 * FunctionTypeAllInput
 */
class FunctionTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitType;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Role;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsElective;
}}

if (!class_exists("FunctionTypeAllResponse")) {
/**
 * FunctionTypeAllResponse
 */
class FunctionTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfFunctionTypeAllOutput
	 */
	public $FunctionTypeAllResult;
}}

if (!class_exists("FunctionTypeAllOutput")) {
/**
 * FunctionTypeAllOutput
 */
class FunctionTypeAllOutput {
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
	public $Code;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UnitType;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Role;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Role;
	/**
	 * @access public
	 * @var sint
	 */
	public $MinCount;
	/**
	 * @access public
	 * @var sint
	 */
	public $MaxCount;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsStatutory;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAssistant;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAudit;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsOficial;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsElective;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsNotCongress;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsSpecification;
}}

if (!class_exists("FunctionReasonAll")) {
/**
 * FunctionReasonAll
 */
class FunctionReasonAll {
	/**
	 * @access public
	 * @var FunctionReasonAllInput
	 */
	public $functionReasonAllInput;
}}

if (!class_exists("FunctionReasonAllInput")) {
/**
 * FunctionReasonAllInput
 */
class FunctionReasonAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("FunctionReasonAllResponse")) {
/**
 * FunctionReasonAllResponse
 */
class FunctionReasonAllResponse {
	/**
	 * @access public
	 * @var ArrayOfFunctionReasonAllOutput
	 */
	public $FunctionReasonAllResult;
}}

if (!class_exists("FunctionReasonAllOutput")) {
/**
 * FunctionReasonAllOutput
 */
class FunctionReasonAllOutput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("DegreeUpdate")) {
/**
 * DegreeUpdate
 */
class DegreeUpdate {
	/**
	 * @access public
	 * @var Degree
	 */
	public $degree;
}}

if (!class_exists("Degree")) {
/**
 * Degree
 */
class Degree {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_DegreeType;
}}

if (!class_exists("DegreeUpdateResponse")) {
/**
 * DegreeUpdateResponse
 */
class DegreeUpdateResponse {
}}

if (!class_exists("MembershipAllPerson")) {
/**
 * MembershipAllPerson
 */
class MembershipAllPerson {
	/**
	 * @access public
	 * @var MembershipAllPersonInput
	 */
	public $membershipAllPersonInput;
}}

if (!class_exists("MembershipAllPersonInput")) {
/**
 * MembershipAllPersonInput
 */
class MembershipAllPersonInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
}}

if (!class_exists("MembershipAllPersonResponse")) {
/**
 * MembershipAllPersonResponse
 */
class MembershipAllPersonResponse {
	/**
	 * @access public
	 * @var ArrayOfMembershipAllOutput
	 */
	public $MembershipAllPersonResult;
}}

if (!class_exists("MembershipAllOutput")) {
/**
 * MembershipAllOutput
 */
class MembershipAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IdentificationCode;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipCategory;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $CanRenew;
}}

if (!class_exists("PersonRegistrationAllPerson")) {
/**
 * PersonRegistrationAllPerson
 */
class PersonRegistrationAllPerson {
	/**
	 * @access public
	 * @var PersonRegistrationAllPersonInput
	 */
	public $personRegistrationAllPersonInput;
}}

if (!class_exists("PersonRegistrationAllPersonInput")) {
/**
 * PersonRegistrationAllPersonInput
 */
class PersonRegistrationAllPersonInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $Year;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsLastRegistration;
}}

if (!class_exists("PersonRegistrationAllPersonResponse")) {
/**
 * PersonRegistrationAllPersonResponse
 */
class PersonRegistrationAllPersonResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonRegistrationAllOutput
	 */
	public $PersonRegistrationAllPersonResult;
}}

if (!class_exists("PersonRegistrationAllOutput")) {
/**
 * PersonRegistrationAllOutput
 */
class PersonRegistrationAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitRegistration;
	/**
	 * @access public
	 * @var sint
	 */
	public $Year;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsDelivered;
	/**
	 * @access public
	 * @var sdecimal
	 */
	public $AmountTotal;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_RegistrationCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAfterDeadline;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsJournal;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $HasPermission;
}}

if (!class_exists("PersonDetailSecurityCode")) {
/**
 * PersonDetailSecurityCode
 */
class PersonDetailSecurityCode {
	/**
	 * @access public
	 * @var PersonDetailSecurityCodeInput
	 */
	public $personDetailSecurityCodeInput;
}}

if (!class_exists("PersonDetailSecurityCodeInput")) {
/**
 * PersonDetailSecurityCodeInput
 */
class PersonDetailSecurityCodeInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UserName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $SecurityCode;
}}

if (!class_exists("PersonDetailSecurityCodeResponse")) {
/**
 * PersonDetailSecurityCodeResponse
 */
class PersonDetailSecurityCodeResponse {
	/**
	 * @access public
	 * @var PersonDetailSecurityCodeOutput
	 */
	public $PersonDetailSecurityCodeResult;
}}

if (!class_exists("PersonDetailSecurityCodeOutput")) {
/**
 * PersonDetailSecurityCodeOutput
 */
class PersonDetailSecurityCodeOutput {
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
	public $Email;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsBlank;
}}

if (!class_exists("StatementEntryAllTotals")) {
/**
 * StatementEntryAllTotals
 */
class StatementEntryAllTotals {
	/**
	 * @access public
	 * @var StatementEntryAllTotalsInput
	 */
	public $statementEntryAllTotalsInput;
}}

if (!class_exists("StatementEntryAllTotalsInput")) {
/**
 * StatementEntryAllTotalsInput
 */
class StatementEntryAllTotalsInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Statement;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_StatementEntryType;
}}

if (!class_exists("StatementEntryAllTotalsResponse")) {
/**
 * StatementEntryAllTotalsResponse
 */
class StatementEntryAllTotalsResponse {
	/**
	 * @access public
	 * @var ArrayOfStatementEntryAllTotalsOutput
	 */
	public $StatementEntryAllTotalsResult;
}}

if (!class_exists("StatementEntryAllTotalsOutput")) {
/**
 * StatementEntryAllTotalsOutput
 */
class StatementEntryAllTotalsOutput {
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsThousands;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $StatementEntryType;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_StatementCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $StatementCategory;
	/**
	 * @access public
	 * @var sdecimal
	 */
	public $Amount;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsTotal;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IncludeInTotal;
}}

if (!class_exists("UnitAllRegistry")) {
/**
 * UnitAllRegistry
 */
class UnitAllRegistry {
	/**
	 * @access public
	 * @var UnitAllRegistryInput
	 */
	public $unitAllRegistryInput;
}}

if (!class_exists("UnitAllRegistryInput")) {
/**
 * UnitAllRegistryInput
 */
class UnitAllRegistryInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IC;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Location;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ParentDisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ParentRegistrationNumber;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
}}

if (!class_exists("UnitAllRegistryResponse")) {
/**
 * UnitAllRegistryResponse
 */
class UnitAllRegistryResponse {
	/**
	 * @access public
	 * @var ArrayOfUnit
	 */
	public $UnitAllRegistryResult;
}}

if (!class_exists("MeetingDateAll")) {
/**
 * MeetingDateAll
 */
class MeetingDateAll {
	/**
	 * @access public
	 * @var MeetingDateAllInput
	 */
	public $meetingDateAllInput;
}}

if (!class_exists("MeetingDateAllInput")) {
/**
 * MeetingDateAllInput
 */
class MeetingDateAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Occupation;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_WeekDay;
}}

if (!class_exists("MeetingDateAllResponse")) {
/**
 * MeetingDateAllResponse
 */
class MeetingDateAllResponse {
	/**
	 * @access public
	 * @var ArrayOfMeetingDateAllOutput
	 */
	public $MeetingDateAllResult;
}}

if (!class_exists("MeetingDateAllOutput")) {
/**
 * MeetingDateAllOutput
 */
class MeetingDateAllOutput {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_WeekDay;
	/**
	 * @access public
	 * @var sstring
	 */
	public $WeekDay;
	/**
	 * @access public
	 * @var sduration
	 */
	public $TimeFrom;
	/**
	 * @access public
	 * @var sduration
	 */
	public $TimeTo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Periodicity;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Occupation;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Occupation;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsUsed;
}}

if (!class_exists("UnitUpdate")) {
/**
 * UnitUpdate
 */
class UnitUpdate {
	/**
	 * @access public
	 * @var UnitUpdateUnit
	 */
	public $unit;
}}

if (!class_exists("UnitUpdateUnit")) {
/**
 * Unit
 */
class UnitUpdateUnit {
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
	 * @var sint
	 */
	public $ID_Group;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UnitType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $ContainsMembers;
	/**
	 * @access public
	 * @var sint
	 */
	public $CommissionDeadline;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $SortName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ShortRegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Location;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IC;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DIC;
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
	 * @var sint
	 */
	public $ID_TroopArt;
	/**
	 * @access public
	 * @var sstring
	 */
	public $TroopArt;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $CanUpdateRegistrationNumber;
	/**
	 * @access public
	 * @var sbase64Binary
	 */
	public $LogoContent;
	/**
	 * @access public
	 * @var sstring
	 */
	public $LogoExtension;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsUnitCancel;
}}

if (!class_exists("UnitUpdateResponse")) {
/**
 * UnitUpdateResponse
 */
class UnitUpdateResponse {
}}

if (!class_exists("QualificationUpdate")) {
/**
 * QualificationUpdate
 */
class QualificationUpdate {
	/**
	 * @access public
	 * @var Qualification
	 */
	public $qualification;
}}

if (!class_exists("Qualification")) {
/**
 * Qualification
 */
class Qualification {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_QualificationType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $QualificationType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $RequiresAuthorization;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsConfirmed;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAuthorized;
	/**
	 * @access public
	 * @var sstring
	 */
	public $LetterNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsUsed;
}}

if (!class_exists("QualificationUpdateResponse")) {
/**
 * QualificationUpdateResponse
 */
class QualificationUpdateResponse {
}}

if (!class_exists("PersonRegistrationDelete")) {
/**
 * PersonRegistrationDelete
 */
class PersonRegistrationDelete {
	/**
	 * @access public
	 * @var PersonRegistrationDeleteInput
	 */
	public $personRegistrationDeleteInput;
}}

if (!class_exists("PersonRegistrationDeleteInput")) {
/**
 * PersonRegistrationDeleteInput
 */
class PersonRegistrationDeleteInput {
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
}}

if (!class_exists("PersonRegistrationDeleteResponse")) {
/**
 * PersonRegistrationDeleteResponse
 */
class PersonRegistrationDeleteResponse {
}}

if (!class_exists("PersonAllExport")) {
/**
 * PersonAllExport
 */
class PersonAllExport {
	/**
	 * @access public
	 * @var PersonAllExportInput
	 */
	public $personAllExportInput;
}}

if (!class_exists("PersonAllExportInput")) {
/**
 * PersonAllExportInput
 */
class PersonAllExportInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
}}

if (!class_exists("PersonAllExportResponse")) {
/**
 * PersonAllExportResponse
 */
class PersonAllExportResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonAllExportOutput
	 */
	public $PersonAllExportResult;
}}

if (!class_exists("PersonAllExportOutput")) {
/**
 * PersonAllExportOutput
 */
class PersonAllExportOutput {
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
	 * @var sdateTime
	 */
	public $Birthday;
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
	public $Note;
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
	public $ID_Sex;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Sex;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Email;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Phone;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Journal;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Qualification;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Function;
}}

if (!class_exists("FunctionAllRegistry")) {
/**
 * FunctionAllRegistry
 */
class FunctionAllRegistry {
	/**
	 * @access public
	 * @var FunctionAllRegistryInput
	 */
	public $functionAllRegistryInput;
}}

if (!class_exists("FunctionAllRegistryInput")) {
/**
 * FunctionAllRegistryInput
 */
class FunctionAllRegistryInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $ReturnStatutory;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $ReturnAssistant;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $ReturnContact;
}}

if (!class_exists("FunctionAllRegistryResponse")) {
/**
 * FunctionAllRegistryResponse
 */
class FunctionAllRegistryResponse {
	/**
	 * @access public
	 * @var ArrayOfFunctionAllRegistryOutput
	 */
	public $FunctionAllRegistryResult;
}}

if (!class_exists("FunctionAllRegistryOutput")) {
/**
 * FunctionAllRegistryOutput
 */
class FunctionAllRegistryOutput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
}}

if (!class_exists("AdvertisingCategoryDelete")) {
/**
 * AdvertisingCategoryDelete
 */
class AdvertisingCategoryDelete {
	/**
	 * @access public
	 * @var AdvertisingCategoryDeleteInput
	 */
	public $advertisingCategoryDeleteInput;
}}

if (!class_exists("AdvertisingCategoryDeleteInput")) {
/**
 * AdvertisingCategoryDeleteInput
 */
class AdvertisingCategoryDeleteInput {
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
}}

if (!class_exists("AdvertisingCategoryDeleteResponse")) {
/**
 * AdvertisingCategoryDeleteResponse
 */
class AdvertisingCategoryDeleteResponse {
}}

if (!class_exists("PersonAllUstredi")) {
/**
 * PersonAllUstredi
 */
class PersonAllUstredi {
	/**
	 * @access public
	 * @var PersonAllUstrediInput
	 */
	public $personAllUstrediInput;
}}

if (!class_exists("PersonAllUstrediInput")) {
/**
 * PersonAllUstrediInput
 */
class PersonAllUstrediInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_EventCongress;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("PersonAllUstrediResponse")) {
/**
 * PersonAllUstrediResponse
 */
class PersonAllUstrediResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonAllUstrediOutput
	 */
	public $PersonAllUstrediResult;
}}

if (!class_exists("PersonAllUstrediOutput")) {
/**
 * PersonAllUstrediOutput
 */
class PersonAllUstrediOutput {
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
}}

if (!class_exists("UnitMistakeReportDelete")) {
/**
 * UnitMistakeReportDelete
 */
class UnitMistakeReportDelete {
	/**
	 * @access public
	 * @var UnitMistakeReportDeleteInput
	 */
	public $unitMistakeReportDeleteInput;
}}

if (!class_exists("UnitMistakeReportDeleteInput")) {
/**
 * UnitMistakeReportDeleteInput
 */
class UnitMistakeReportDeleteInput {
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
}}

if (!class_exists("UnitMistakeReportDeleteResponse")) {
/**
 * UnitMistakeReportDeleteResponse
 */
class UnitMistakeReportDeleteResponse {
}}

if (!class_exists("UnitContactDelete")) {
/**
 * UnitContactDelete
 */
class UnitContactDelete {
	/**
	 * @access public
	 * @var UnitContactDeleteInput
	 */
	public $unitContactDeleteInput;
}}

if (!class_exists("UnitContactDeleteInput")) {
/**
 * UnitContactDeleteInput
 */
class UnitContactDeleteInput {
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
}}

if (!class_exists("UnitContactDeleteResponse")) {
/**
 * UnitContactDeleteResponse
 */
class UnitContactDeleteResponse {
}}

if (!class_exists("StatementDelete")) {
/**
 * StatementDelete
 */
class StatementDelete {
	/**
	 * @access public
	 * @var StatementDeleteInput
	 */
	public $statementDeleteInput;
}}

if (!class_exists("StatementDeleteInput")) {
/**
 * StatementDeleteInput
 */
class StatementDeleteInput {
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
}}

if (!class_exists("StatementDeleteResponse")) {
/**
 * StatementDeleteResponse
 */
class StatementDeleteResponse {
}}

if (!class_exists("OccupationDelete")) {
/**
 * OccupationDelete
 */
class OccupationDelete {
	/**
	 * @access public
	 * @var OccupationDeleteInput
	 */
	public $occupationDeleteInput;
}}

if (!class_exists("OccupationDeleteInput")) {
/**
 * OccupationDeleteInput
 */
class OccupationDeleteInput {
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
}}

if (!class_exists("OccupationDeleteResponse")) {
/**
 * OccupationDeleteResponse
 */
class OccupationDeleteResponse {
}}

if (!class_exists("FunctionAll")) {
/**
 * FunctionAll
 */
class FunctionAll {
	/**
	 * @access public
	 * @var FunctionAllInput
	 */
	public $functionAllInput;
}}

if (!class_exists("FunctionAllInput")) {
/**
 * FunctionAllInput
 */
class FunctionAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_FunctionType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_FunctionReason;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
}}

if (!class_exists("FunctionAllResponse")) {
/**
 * FunctionAllResponse
 */
class FunctionAllResponse {
	/**
	 * @access public
	 * @var ArrayOfFunctionAllOutput
	 */
	public $FunctionAllResult;
}}

if (!class_exists("FunctionAllOutput")) {
/**
 * FunctionAllOutput
 */
class FunctionAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_FunctionType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $FunctionType;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_FunctionReason;
	/**
	 * @access public
	 * @var sstring
	 */
	public $FunctionReason;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $PermissionRUM;
}}

if (!class_exists("DegreeInsert")) {
/**
 * DegreeInsert
 */
class DegreeInsert {
	/**
	 * @access public
	 * @var Degree
	 */
	public $degree;
}}

if (!class_exists("DegreeInsertResponse")) {
/**
 * DegreeInsertResponse
 */
class DegreeInsertResponse {
	/**
	 * @access public
	 * @var DegreeInsertOutput
	 */
	public $DegreeInsertResult;
}}

if (!class_exists("DegreeInsertOutput")) {
/**
 * DegreeInsertOutput
 */
class DegreeInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("PersonMistakeReportInsert")) {
/**
 * PersonMistakeReportInsert
 */
class PersonMistakeReportInsert {
	/**
	 * @access public
	 * @var PersonMistakeReport
	 */
	public $personMistakeReport;
}}

if (!class_exists("PersonMistakeReport")) {
/**
 * PersonMistakeReport
 */
class PersonMistakeReport {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Mistake;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("PersonMistakeReportInsertResponse")) {
/**
 * PersonMistakeReportInsertResponse
 */
class PersonMistakeReportInsertResponse {
	/**
	 * @access public
	 * @var PersonMistakeReportInsertOutput
	 */
	public $PersonMistakeReportInsertResult;
}}

if (!class_exists("PersonMistakeReportInsertOutput")) {
/**
 * PersonMistakeReportInsertOutput
 */
class PersonMistakeReportInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("UnitAllUnit")) {
/**
 * UnitAllUnit
 */
class UnitAllUnit {
	/**
	 * @access public
	 * @var UnitAllUnitInput
	 */
	public $unitAllUnitInput;
}}

if (!class_exists("UnitAllUnitInput")) {
/**
 * UnitAllUnitInput
 */
class UnitAllUnitInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
}}

if (!class_exists("UnitAllUnitResponse")) {
/**
 * UnitAllUnitResponse
 */
class UnitAllUnitResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitAllUnitOutput
	 */
	public $UnitAllUnitResult;
}}

if (!class_exists("UnitAllUnitOutput")) {
/**
 * UnitAllUnitOutput
 */
class UnitAllUnitOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $SortName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
}}

if (!class_exists("AlignmentAll")) {
/**
 * AlignmentAll
 */
class AlignmentAll {
	/**
	 * @access public
	 * @var AlignmentAllInput
	 */
	public $alignmentAllInput;
}}

if (!class_exists("AlignmentAllInput")) {
/**
 * AlignmentAllInput
 */
class AlignmentAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_AlignmentType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
}}

if (!class_exists("AlignmentAllResponse")) {
/**
 * AlignmentAllResponse
 */
class AlignmentAllResponse {
	/**
	 * @access public
	 * @var ArrayOfAlignmentAllOutput
	 */
	public $AlignmentAllResult;
}}

if (!class_exists("AlignmentAllOutput")) {
/**
 * AlignmentAllOutput
 */
class AlignmentAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_AlignmentType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $AlignmentType;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ColorMargin;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ColorCenter;
}}

if (!class_exists("PersonAllEventCampMulti")) {
/**
 * PersonAllEventCampMulti
 */
class PersonAllEventCampMulti {
	/**
	 * @access public
	 * @var PersonAllEventCampMultiInput
	 */
	public $personAllEventCampMultiInput;
}}

if (!class_exists("PersonAllEventCampMultiInput")) {
/**
 * PersonAllEventCampMultiInput
 */
class PersonAllEventCampMultiInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_EventCamp;
}}

if (!class_exists("PersonAllEventCampMultiResponse")) {
/**
 * PersonAllEventCampMultiResponse
 */
class PersonAllEventCampMultiResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonAllEventCampMultiOutput
	 */
	public $PersonAllEventCampMultiResult;
}}

if (!class_exists("PersonAllEventCampMultiOutput")) {
/**
 * PersonAllEventCampMultiOutput
 */
class PersonAllEventCampMultiOutput {
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
	 * @var sdateTime
	 */
	public $BirthDay;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipCategory;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsParticipant;
}}

if (!class_exists("UnitDetail")) {
/**
 * UnitDetail
 */
class UnitDetail {
	/**
	 * @access public
	 * @var UnitDetailInput
	 */
	public $unitDetailInput;
}}

if (!class_exists("UnitDetailInput")) {
/**
 * UnitDetailInput
 */
class UnitDetailInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $FindStredisko;
}}

if (!class_exists("UnitDetailResponse")) {
/**
 * UnitDetailResponse
 */
class UnitDetailResponse {
	/**
	 * @access public
	 * @var Unit
	 */
	public $UnitDetailResult;
}}

if (!class_exists("RealtyUpdate")) {
/**
 * RealtyUpdate
 */
class RealtyUpdate {
	/**
	 * @access public
	 * @var Realty
	 */
	public $realty;
}}

if (!class_exists("Realty")) {
/**
 * Realty
 */
class Realty {
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
	 * @var sint
	 */
	public $ID_RealtyType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RealtyType;
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
	 * @var sdouble
	 */
	public $GpsLatitude;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $GpsLongitude;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Description;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("RealtyUpdateResponse")) {
/**
 * RealtyUpdateResponse
 */
class RealtyUpdateResponse {
}}

if (!class_exists("QualificationInsert")) {
/**
 * QualificationInsert
 */
class QualificationInsert {
	/**
	 * @access public
	 * @var Qualification
	 */
	public $qualification;
}}

if (!class_exists("QualificationInsertResponse")) {
/**
 * QualificationInsertResponse
 */
class QualificationInsertResponse {
	/**
	 * @access public
	 * @var QualificationInsertOutput
	 */
	public $QualificationInsertResult;
}}

if (!class_exists("QualificationInsertOutput")) {
/**
 * QualificationInsertOutput
 */
class QualificationInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("QualificationDetail")) {
/**
 * QualificationDetail
 */
class QualificationDetail {
	/**
	 * @access public
	 * @var QualificationDetailInput
	 */
	public $qualificationDetailInput;
}}

if (!class_exists("QualificationDetailInput")) {
/**
 * QualificationDetailInput
 */
class QualificationDetailInput {
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
}}

if (!class_exists("QualificationDetailResponse")) {
/**
 * QualificationDetailResponse
 */
class QualificationDetailResponse {
	/**
	 * @access public
	 * @var Qualification
	 */
	public $QualificationDetailResult;
}}

if (!class_exists("EducationAll")) {
/**
 * EducationAll
 */
class EducationAll {
	/**
	 * @access public
	 * @var EducationAllInput
	 */
	public $educationAllInput;
}}

if (!class_exists("EducationAllInput")) {
/**
 * EducationAllInput
 */
class EducationAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_EducationType;
}}

if (!class_exists("EducationAllResponse")) {
/**
 * EducationAllResponse
 */
class EducationAllResponse {
	/**
	 * @access public
	 * @var ArrayOfEducationAllOutput
	 */
	public $EducationAllResult;
}}

if (!class_exists("EducationAllOutput")) {
/**
 * EducationAllOutput
 */
class EducationAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_EducationType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $EducationType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("FunctionUpdateHistory")) {
/**
 * FunctionUpdateHistory
 */
class FunctionUpdateHistory {
	/**
	 * @access public
	 * @var Function
	 */
	public $function;
}}

if (!class_exists("FunctionUpdateHistoryResponse")) {
/**
 * FunctionUpdateHistoryResponse
 */
class FunctionUpdateHistoryResponse {
}}

if (!class_exists("PersonAllHelpdesk")) {
/**
 * PersonAllHelpdesk
 */
class PersonAllHelpdesk {
	/**
	 * @access public
	 * @var PersonAllHelpdeskInput
	 */
	public $personAllHelpdeskInput;
}}

if (!class_exists("PersonAllHelpdeskInput")) {
/**
 * PersonAllHelpdeskInput
 */
class PersonAllHelpdeskInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
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
	public $IdentificationCode;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
}}

if (!class_exists("PersonAllHelpdeskResponse")) {
/**
 * PersonAllHelpdeskResponse
 */
class PersonAllHelpdeskResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonAllHelpdeskOutput
	 */
	public $PersonAllHelpdeskResult;
}}

if (!class_exists("PersonAllHelpdeskOutput")) {
/**
 * PersonAllHelpdeskOutput
 */
class PersonAllHelpdeskOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Group;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $Birthday;
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
	public $Note;
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
	public $ID_Sex;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Sex;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipType;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
}}

if (!class_exists("MeetingDateUpdate")) {
/**
 * MeetingDateUpdate
 */
class MeetingDateUpdate {
	/**
	 * @access public
	 * @var MeetingDate
	 */
	public $meetingDate;
}}

if (!class_exists("MeetingDate")) {
/**
 * MeetingDate
 */
class MeetingDate {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_WeekDay;
	/**
	 * @access public
	 * @var sstring
	 */
	public $WeekDay;
	/**
	 * @access public
	 * @var sduration
	 */
	public $TimeFrom;
	/**
	 * @access public
	 * @var sduration
	 */
	public $TimeTo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Periodicity;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Occupation;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Occupation;
}}

if (!class_exists("MeetingDateUpdateResponse")) {
/**
 * MeetingDateUpdateResponse
 */
class MeetingDateUpdateResponse {
}}

if (!class_exists("UnitTypeAll")) {
/**
 * UnitTypeAll
 */
class UnitTypeAll {
	/**
	 * @access public
	 * @var UnitTypeAllInput
	 */
	public $unitTypeAllInput;
}}

if (!class_exists("UnitTypeAllInput")) {
/**
 * UnitTypeAllInput
 */
class UnitTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitTypeCreate;
}}

if (!class_exists("UnitTypeAllResponse")) {
/**
 * UnitTypeAllResponse
 */
class UnitTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitTypeAllOutput
	 */
	public $UnitTypeAllResult;
}}

if (!class_exists("UnitTypeAllOutput")) {
/**
 * UnitTypeAllOutput
 */
class UnitTypeAllOutput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("PersonUpdate")) {
/**
 * PersonUpdate
 */
class PersonUpdate {
	/**
	 * @access public
	 * @var Person
	 */
	public $person;
}}

if (!class_exists("PersonUpdateResponse")) {
/**
 * PersonUpdateResponse
 */
class PersonUpdateResponse {
}}

if (!class_exists("DegreeAll")) {
/**
 * DegreeAll
 */
class DegreeAll {
	/**
	 * @access public
	 * @var DegreeAllInput
	 */
	public $degreeAllInput;
}}

if (!class_exists("DegreeAllInput")) {
/**
 * DegreeAllInput
 */
class DegreeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_DegreeType;
}}

if (!class_exists("DegreeAllResponse")) {
/**
 * DegreeAllResponse
 */
class DegreeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfDegreeAllOutput
	 */
	public $DegreeAllResult;
}}

if (!class_exists("DegreeAllOutput")) {
/**
 * DegreeAllOutput
 */
class DegreeAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_DegreeType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DegreeType;
}}

if (!class_exists("UnitDetailRegistry")) {
/**
 * UnitDetailRegistry
 */
class UnitDetailRegistry {
	/**
	 * @access public
	 * @var UnitDetailRegistryInput
	 */
	public $unitDetailRegistryInput;
}}

if (!class_exists("UnitDetailRegistryInput")) {
/**
 * UnitDetailRegistryInput
 */
class UnitDetailRegistryInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("UnitDetailRegistryResponse")) {
/**
 * UnitDetailRegistryResponse
 */
class UnitDetailRegistryResponse {
	/**
	 * @access public
	 * @var Unit
	 */
	public $UnitDetailRegistryResult;
}}



if (!class_exists("PersonPhoto")) {
/**
 * PersonPhoto
 */
class PersonPhoto {
	/**
	 * @access public
	 * @var PersonPhotoInput
	 */
	public $personPhotoInput;
}}

if (!class_exists("PersonPhotoInput")) {
/**
 * PersonPhotoInput
 */
class PersonPhotoInput {
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
	public $Size;
}}

if (!class_exists("PersonPhotoResponse")) {
/**
 * PersonPhotoResponse
 */
class PersonPhotoResponse {
	/**
	 * @access public
	 * @var PersonPhotoOutput
	 */
	public $PersonPhotoResult;
}}

if (!class_exists("PersonPhotoOutput")) {
/**
 * PersonPhotoOutput
 */
class PersonPhotoOutput {
	/**
	 * @access public
	 * @var sbase64Binary
	 */
	public $PhotoContent;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PhotoExtension;
}}

if (!class_exists("AdvertisingUpdate")) {
/**
 * AdvertisingUpdate
 */
class AdvertisingUpdate {
	/**
	 * @access public
	 * @var Advertising
	 */
	public $advertising;
}}

if (!class_exists("Advertising")) {
/**
 * Advertising
 */
class Advertising {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("AdvertisingUpdateResponse")) {
/**
 * AdvertisingUpdateResponse
 */
class AdvertisingUpdateResponse {
}}

if (!class_exists("AdvertisingCategoryAll")) {
/**
 * AdvertisingCategoryAll
 */
class AdvertisingCategoryAll {
	/**
	 * @access public
	 * @var AdvertisingCategoryAllInput
	 */
	public $advertisingCategoryAllInput;
}}

if (!class_exists("AdvertisingCategoryAllInput")) {
/**
 * AdvertisingCategoryAllInput
 */
class AdvertisingCategoryAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_MeetingDate;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Sex;
}}

if (!class_exists("AdvertisingCategoryAllResponse")) {
/**
 * AdvertisingCategoryAllResponse
 */
class AdvertisingCategoryAllResponse {
	/**
	 * @access public
	 * @var ArrayOfAdvertisingCategoryAllOutput
	 */
	public $AdvertisingCategoryAllResult;
}}

if (!class_exists("AdvertisingCategoryAllOutput")) {
/**
 * AdvertisingCategoryAllOutput
 */
class AdvertisingCategoryAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $AgeFrom;
	/**
	 * @access public
	 * @var sint
	 */
	public $AgeTo;
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
	 * @var sint
	 */
	public $ID_MeetingDate;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MeetingDate;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("AccountUpdate")) {
/**
 * AccountUpdate
 */
class AccountUpdate {
	/**
	 * @access public
	 * @var Account
	 */
	public $account;
}}

if (!class_exists("Account")) {
/**
 * Account
 */
class Account {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Bank;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Bank;
	/**
	 * @access public
	 * @var sstring
	 */
	public $AccountPrefix;
	/**
	 * @access public
	 * @var sstring
	 */
	public $AccountNumber;
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
	public $Note;
}}

if (!class_exists("AccountUpdateResponse")) {
/**
 * AccountUpdateResponse
 */
class AccountUpdateResponse {
}}

if (!class_exists("StatementEntryUpdate")) {
/**
 * StatementEntryUpdate
 */
class StatementEntryUpdate {
	/**
	 * @access public
	 * @var StatementEntry
	 */
	public $statementEntry;
}}

if (!class_exists("StatementEntry")) {
/**
 * StatementEntry
 */
class StatementEntry {
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
	 * @var sint
	 */
	public $ID_Statement;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_StatementEntryType;
	/**
	 * @access public
	 * @var sdecimal
	 */
	public $Amount;
}}

if (!class_exists("StatementEntryUpdateResponse")) {
/**
 * StatementEntryUpdateResponse
 */
class StatementEntryUpdateResponse {
}}

if (!class_exists("StatementAll")) {
/**
 * StatementAll
 */
class StatementAll {
	/**
	 * @access public
	 * @var StatementAllInput
	 */
	public $statementAllInput;
}}

if (!class_exists("StatementAllInput")) {
/**
 * StatementAllInput
 */
class StatementAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_StatementType;
}}

if (!class_exists("StatementAllResponse")) {
/**
 * StatementAllResponse
 */
class StatementAllResponse {
	/**
	 * @access public
	 * @var ArrayOfStatementAllOutput
	 */
	public $StatementAllResult;
}}

if (!class_exists("StatementAllOutput")) {
/**
 * StatementAllOutput
 */
class StatementAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $Year;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_StatementType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $StatementType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsError;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsDelivered;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateDelivered;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsThousands;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsConsultant;
}}

if (!class_exists("SexAll")) {
/**
 * SexAll
 */
class SexAll {
	/**
	 * @access public
	 * @var SexAllInput
	 */
	public $sexAllInput;
}}

if (!class_exists("SexAllInput")) {
/**
 * SexAllInput
 */
class SexAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("SexAllResponse")) {
/**
 * SexAllResponse
 */
class SexAllResponse {
	/**
	 * @access public
	 * @var ArrayOfSexAllOutput
	 */
	public $SexAllResult;
}}

if (!class_exists("SexAllOutput")) {
/**
 * SexAllOutput
 */
class SexAllOutput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("RealtyInsert")) {
/**
 * RealtyInsert
 */
class RealtyInsert {
	/**
	 * @access public
	 * @var Realty
	 */
	public $realty;
}}

if (!class_exists("RealtyInsertResponse")) {
/**
 * RealtyInsertResponse
 */
class RealtyInsertResponse {
	/**
	 * @access public
	 * @var RealtyInsertOutput
	 */
	public $RealtyInsertResult;
}}

if (!class_exists("RealtyInsertOutput")) {
/**
 * RealtyInsertOutput
 */
class RealtyInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("RealtyDetail")) {
/**
 * RealtyDetail
 */
class RealtyDetail {
	/**
	 * @access public
	 * @var RealtyDetailInput
	 */
	public $realtyDetailInput;
}}

if (!class_exists("RealtyDetailInput")) {
/**
 * RealtyDetailInput
 */
class RealtyDetailInput {
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
}}

if (!class_exists("RealtyDetailResponse")) {
/**
 * RealtyDetailResponse
 */
class RealtyDetailResponse {
	/**
	 * @access public
	 * @var Realty
	 */
	public $RealtyDetailResult;
}}

if (!class_exists("FunctionTypeDelete")) {
/**
 * FunctionTypeDelete
 */
class FunctionTypeDelete {
	/**
	 * @access public
	 * @var FunctionTypeDeleteInput
	 */
	public $functionTypeDeleteInput;
}}

if (!class_exists("FunctionTypeDeleteInput")) {
/**
 * FunctionTypeDeleteInput
 */
class FunctionTypeDeleteInput {
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
}}

if (!class_exists("FunctionTypeDeleteResponse")) {
/**
 * FunctionTypeDeleteResponse
 */
class FunctionTypeDeleteResponse {
}}

if (!class_exists("PersonParseIdentificationCode")) {
/**
 * PersonParseIdentificationCode
 */
class PersonParseIdentificationCode {
	/**
	 * @access public
	 * @var PersonParseIdentificationCodeInput
	 */
	public $personParseIdentificationCodeInput;
}}

if (!class_exists("PersonParseIdentificationCodeInput")) {
/**
 * PersonParseIdentificationCodeInput
 */
class PersonParseIdentificationCodeInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IdentificationCode;
}}

if (!class_exists("PersonParseIdentificationCodeResponse")) {
/**
 * PersonParseIdentificationCodeResponse
 */
class PersonParseIdentificationCodeResponse {
	/**
	 * @access public
	 * @var PersonParseIdentificationCodeOutput
	 */
	public $PersonParseIdentificationCodeResult;
}}

if (!class_exists("PersonParseIdentificationCodeOutput")) {
/**
 * PersonParseIdentificationCodeOutput
 */
class PersonParseIdentificationCodeOutput {
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $Birthday;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Sex;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Exists;
}}

if (!class_exists("PersonAllLogin")) {
/**
 * PersonAllLogin
 */
class PersonAllLogin {
	/**
	 * @access public
	 * @var PersonAllLoginInput
	 */
	public $personAllLoginInput;
}}

if (!class_exists("PersonAllLoginInput")) {
/**
 * PersonAllLoginInput
 */
class PersonAllLoginInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
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
	public $IdentificationCode;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $Birthday;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Phone;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Email;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IdentificationCodeStartsWith;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
}}

if (!class_exists("PersonAllLoginResponse")) {
/**
 * PersonAllLoginResponse
 */
class PersonAllLoginResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonAllLoginOutput
	 */
	public $PersonAllLoginResult;
}}

if (!class_exists("PersonAllLoginOutput")) {
/**
 * PersonAllLoginOutput
 */
class PersonAllLoginOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Group;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $Birthday;
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
	public $Note;
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
	public $ID_Sex;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Sex;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Email;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Phone;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MaidenName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PhotoExtension;
}}

if (!class_exists("RequestAll")) {
/**
 * RequestAll
 */
class RequestAll {
	/**
	 * @access public
	 * @var RequestAllInput
	 */
	public $requestAllInput;
}}

if (!class_exists("RequestAllInput")) {
/**
 * RequestAllInput
 */
class RequestAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UserCreate;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UserDecision;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_RequestState;
}}

if (!class_exists("RequestAllResponse")) {
/**
 * RequestAllResponse
 */
class RequestAllResponse {
	/**
	 * @access public
	 * @var ArrayOfRequestAllOutput
	 */
	public $RequestAllResult;
}}

if (!class_exists("RequestAllOutput")) {
/**
 * RequestAllOutput
 */
class RequestAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Reason;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipCategory;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UserCreate;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_PersonCreate;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PersonCreate;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateCreate;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_RequestState;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RequestState;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UserDecision;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_PersonDecision;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PersonDecision;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateDecision;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Decision;
}}

if (!class_exists("PersonDetailIdentificationCode")) {
/**
 * PersonDetailIdentificationCode
 */
class PersonDetailIdentificationCode {
	/**
	 * @access public
	 * @var PersonDetailIdentificationCodeInput
	 */
	public $personDetailIdentificationCodeInput;
}}

if (!class_exists("PersonDetailIdentificationCodeInput")) {
/**
 * PersonDetailIdentificationCodeInput
 */
class PersonDetailIdentificationCodeInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IdentificationCode;
}}

if (!class_exists("PersonDetailIdentificationCodeResponse")) {
/**
 * PersonDetailIdentificationCodeResponse
 */
class PersonDetailIdentificationCodeResponse {
	/**
	 * @access public
	 * @var PersonDetailIdentificationCodeOutput
	 */
	public $PersonDetailIdentificationCodeResult;
}}

if (!class_exists("PersonDetailIdentificationCodeOutput")) {
/**
 * PersonDetailIdentificationCodeOutput
 */
class PersonDetailIdentificationCodeOutput {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $MembershipSameUnit;
}}

if (!class_exists("StatementErrors")) {
/**
 * StatementErrors
 */
class StatementErrors {
	/**
	 * @access public
	 * @var StatementErrorsInput
	 */
	public $statementErrorsInput;
}}

if (!class_exists("StatementErrorsInput")) {
/**
 * StatementErrorsInput
 */
class StatementErrorsInput {
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
}}

if (!class_exists("StatementErrorsResponse")) {
/**
 * StatementErrorsResponse
 */
class StatementErrorsResponse {
	/**
	 * @access public
	 * @var ArrayOfStatementErrorsOutput
	 */
	public $StatementErrorsResult;
}}

if (!class_exists("StatementErrorsOutput")) {
/**
 * StatementErrorsOutput
 */
class StatementErrorsOutput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("MeetingDateInsert")) {
/**
 * MeetingDateInsert
 */
class MeetingDateInsert {
	/**
	 * @access public
	 * @var MeetingDate
	 */
	public $meetingDate;
}}

if (!class_exists("MeetingDateInsertResponse")) {
/**
 * MeetingDateInsertResponse
 */
class MeetingDateInsertResponse {
	/**
	 * @access public
	 * @var MeetingDateInsertOutput
	 */
	public $MeetingDateInsertResult;
}}

if (!class_exists("MeetingDateInsertOutput")) {
/**
 * MeetingDateInsertOutput
 */
class MeetingDateInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("MeetingDateDetail")) {
/**
 * MeetingDateDetail
 */
class MeetingDateDetail {
	/**
	 * @access public
	 * @var MeetingDateDetailInput
	 */
	public $meetingDateDetailInput;
}}

if (!class_exists("MeetingDateDetailInput")) {
/**
 * MeetingDateDetailInput
 */
class MeetingDateDetailInput {
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
}}

if (!class_exists("MeetingDateDetailResponse")) {
/**
 * MeetingDateDetailResponse
 */
class MeetingDateDetailResponse {
	/**
	 * @access public
	 * @var MeetingDate
	 */
	public $MeetingDateDetailResult;
}}

if (!class_exists("PersonDetail")) {
/**
 * PersonDetail
 */
class PersonDetail {
	/**
	 * @access public
	 * @var PersonDetailInput
	 */
	public $personDetailInput;
}}

if (!class_exists("PersonDetailInput")) {
/**
 * PersonDetailInput
 */
class PersonDetailInput {
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
}}

if (!class_exists("PersonDetailResponse")) {
/**
 * PersonDetailResponse
 */
class PersonDetailResponse {
	/**
	 * @access public
	 * @var Person
	 */
	public $PersonDetailResult;
}}

if (!class_exists("PersonInsert")) {
/**
 * PersonInsert
 */
class PersonInsert {
	/**
	 * @access public
	 * @var Person
	 */
	public $person;
}}

if (!class_exists("PersonInsertResponse")) {
/**
 * PersonInsertResponse
 */
class PersonInsertResponse {
	/**
	 * @access public
	 * @var PersonInsertOutput
	 */
	public $PersonInsertResult;
}}

if (!class_exists("PersonInsertOutput")) {
/**
 * PersonInsertOutput
 */
class PersonInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("PersonContactUpdate")) {
/**
 * PersonContactUpdate
 */
class PersonContactUpdate {
	/**
	 * @access public
	 * @var PersonContact
	 */
	public $personContact;
}}

if (!class_exists("PersonContact")) {
/**
 * PersonContact
 */
class PersonContact {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_ContactType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Value;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsSts;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("PersonContactUpdateResponse")) {
/**
 * PersonContactUpdateResponse
 */
class PersonContactUpdateResponse {
}}

if (!class_exists("EducationDelete")) {
/**
 * EducationDelete
 */
class EducationDelete {
	/**
	 * @access public
	 * @var EducationDeleteInput
	 */
	public $educationDeleteInput;
}}

if (!class_exists("EducationDeleteInput")) {
/**
 * EducationDeleteInput
 */
class EducationDeleteInput {
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
}}

if (!class_exists("EducationDeleteResponse")) {
/**
 * EducationDeleteResponse
 */
class EducationDeleteResponse {
}}

if (!class_exists("FunctionAllPerson")) {
/**
 * FunctionAllPerson
 */
class FunctionAllPerson {
	/**
	 * @access public
	 * @var FunctionAllPersonInput
	 */
	public $functionAllPersonInput;
}}

if (!class_exists("FunctionAllPersonInput")) {
/**
 * FunctionAllPersonInput
 */
class FunctionAllPersonInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_FunctionType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_FunctionReason;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsOficial;
}}

if (!class_exists("FunctionAllPersonResponse")) {
/**
 * FunctionAllPersonResponse
 */
class FunctionAllPersonResponse {
	/**
	 * @access public
	 * @var ArrayOfFunctionAllOutput
	 */
	public $FunctionAllPersonResult;
}}

if (!class_exists("EducatationSeminaryDelete")) {
/**
 * EducatationSeminaryDelete
 */
class EducatationSeminaryDelete {
	/**
	 * @access public
	 * @var EducatationSeminaryDeleteInput
	 */
	public $educatationSeminaryDeleteInput;
}}

if (!class_exists("EducatationSeminaryDeleteInput")) {
/**
 * EducatationSeminaryDeleteInput
 */
class EducatationSeminaryDeleteInput {
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
}}

if (!class_exists("EducatationSeminaryDeleteResponse")) {
/**
 * EducatationSeminaryDeleteResponse
 */
class EducatationSeminaryDeleteResponse {
}}

if (!class_exists("AdvertisingDetail")) {
/**
 * AdvertisingDetail
 */
class AdvertisingDetail {
	/**
	 * @access public
	 * @var AdvertisingDetailInput
	 */
	public $advertisingDetailInput;
}}

if (!class_exists("AdvertisingDetailInput")) {
/**
 * AdvertisingDetailInput
 */
class AdvertisingDetailInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
}}

if (!class_exists("AdvertisingDetailResponse")) {
/**
 * AdvertisingDetailResponse
 */
class AdvertisingDetailResponse {
	/**
	 * @access public
	 * @var Advertising
	 */
	public $AdvertisingDetailResult;
}}

if (!class_exists("AccountInsert")) {
/**
 * AccountInsert
 */
class AccountInsert {
	/**
	 * @access public
	 * @var Account
	 */
	public $account;
}}

if (!class_exists("AccountInsertResponse")) {
/**
 * AccountInsertResponse
 */
class AccountInsertResponse {
	/**
	 * @access public
	 * @var AccountInsertOutput
	 */
	public $AccountInsertResult;
}}

if (!class_exists("AccountInsertOutput")) {
/**
 * AccountInsertOutput
 */
class AccountInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("AccountDetail")) {
/**
 * AccountDetail
 */
class AccountDetail {
	/**
	 * @access public
	 * @var AccountDetailInput
	 */
	public $accountDetailInput;
}}

if (!class_exists("AccountDetailInput")) {
/**
 * AccountDetailInput
 */
class AccountDetailInput {
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
}}

if (!class_exists("AccountDetailResponse")) {
/**
 * AccountDetailResponse
 */
class AccountDetailResponse {
	/**
	 * @access public
	 * @var Account
	 */
	public $AccountDetailResult;
}}

if (!class_exists("UnitRegistrationUpdate")) {
/**
 * UnitRegistrationUpdate
 */
class UnitRegistrationUpdate {
	/**
	 * @access public
	 * @var UnitRegistration
	 */
	public $unitRegistration;
}}

if (!class_exists("UnitRegistration")) {
/**
 * UnitRegistration
 */
class UnitRegistration {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sint
	 */
	public $Year;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateConfirmed;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsDelivered;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAccepted;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Instructions;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitRegistrationParent;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UnitRegistrationParent;
	/**
	 * @access public
	 * @var sstring
	 */
	public $InstructionsParent;
}}

if (!class_exists("UnitRegistrationUpdateResponse")) {
/**
 * UnitRegistrationUpdateResponse
 */
class UnitRegistrationUpdateResponse {
}}

if (!class_exists("UnitAll")) {
/**
 * UnitAll
 */
class UnitAll {
	/**
	 * @access public
	 * @var UnitAllInput
	 */
	public $unitAllInput;
}}

if (!class_exists("UnitAllInput")) {
/**
 * UnitAllInput
 */
class UnitAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Group;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Location;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitParent;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitChild;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitTree;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $RegistrationNumberStartWith;
}}

if (!class_exists("UnitAllResponse")) {
/**
 * UnitAllResponse
 */
class UnitAllResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitAllOutput
	 */
	public $UnitAllResult;
}}

if (!class_exists("UnitAllOutput")) {
/**
 * UnitAllOutput
 */
class UnitAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Group;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UnitType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $SortName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ShortRegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Location;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IC;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DIC;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Street;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PostalState;
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
	public $Note;
}}

if (!class_exists("StatementEntryAll")) {
/**
 * StatementEntryAll
 */
class StatementEntryAll {
	/**
	 * @access public
	 * @var StatementEntryAllInput
	 */
	public $statementEntryAllInput;
}}

if (!class_exists("StatementEntryAllInput")) {
/**
 * StatementEntryAllInput
 */
class StatementEntryAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Statement;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_StatementEntryType;
}}

if (!class_exists("StatementEntryAllResponse")) {
/**
 * StatementEntryAllResponse
 */
class StatementEntryAllResponse {
	/**
	 * @access public
	 * @var ArrayOfStatementEntryAllOutput
	 */
	public $StatementEntryAllResult;
}}

if (!class_exists("StatementEntryAllOutput")) {
/**
 * StatementEntryAllOutput
 */
class StatementEntryAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Statement;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_StatementEntryType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $StatementEntryType;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_StatementCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $StatementCategory;
	/**
	 * @access public
	 * @var sdecimal
	 */
	public $Amount;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsThousands;
}}

if (!class_exists("OfferUpdate")) {
/**
 * OfferUpdate
 */
class OfferUpdate {
	/**
	 * @access public
	 * @var Offer
	 */
	public $offer;
}}

if (!class_exists("Offer")) {
/**
 * Offer
 */
class Offer {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_OfferType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("OfferUpdateResponse")) {
/**
 * OfferUpdateResponse
 */
class OfferUpdateResponse {
}}

if (!class_exists("QualificationInsertHistory")) {
/**
 * QualificationInsertHistory
 */
class QualificationInsertHistory {
	/**
	 * @access public
	 * @var Qualification
	 */
	public $qualification;
}}

if (!class_exists("QualificationInsertHistoryResponse")) {
/**
 * QualificationInsertHistoryResponse
 */
class QualificationInsertHistoryResponse {
	/**
	 * @access public
	 * @var QualificationInsertHistoryOutput
	 */
	public $QualificationInsertHistoryResult;
}}

if (!class_exists("QualificationInsertHistoryOutput")) {
/**
 * QualificationInsertHistoryOutput
 */
class QualificationInsertHistoryOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("MistakeDetail")) {
/**
 * MistakeDetail
 */
class MistakeDetail {
	/**
	 * @access public
	 * @var MistakeDetailInput
	 */
	public $mistakeDetailInput;
}}

if (!class_exists("MistakeDetailInput")) {
/**
 * MistakeDetailInput
 */
class MistakeDetailInput {
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
}}

if (!class_exists("MistakeDetailResponse")) {
/**
 * MistakeDetailResponse
 */
class MistakeDetailResponse {
	/**
	 * @access public
	 * @var MistakeDetailOutput
	 */
	public $MistakeDetailResult;
}}

if (!class_exists("MistakeDetailOutput")) {
/**
 * MistakeDetailOutput
 */
class MistakeDetailOutput {
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
	 * @var sboolean
	 */
	public $IsUnit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MistakeType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MistakeType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("EducatationSeminaryAll")) {
/**
 * EducatationSeminaryAll
 */
class EducatationSeminaryAll {
	/**
	 * @access public
	 * @var EducatationSeminaryAllInput
	 */
	public $educatationSeminaryAllInput;
}}

if (!class_exists("EducatationSeminaryAllInput")) {
/**
 * EducatationSeminaryAllInput
 */
class EducatationSeminaryAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("EducatationSeminaryAllResponse")) {
/**
 * EducatationSeminaryAllResponse
 */
class EducatationSeminaryAllResponse {
	/**
	 * @access public
	 * @var ArrayOfEducatationSeminaryAllOutput
	 */
	public $EducatationSeminaryAllResult;
}}

if (!class_exists("EducatationSeminaryAllOutput")) {
/**
 * EducatationSeminaryAllOutput
 */
class EducatationSeminaryAllOutput {
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsUsed;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sint
	 */
	public $YearFrom;
}}

if (!class_exists("ContactTypeAll")) {
/**
 * ContactTypeAll
 */
class ContactTypeAll {
	/**
	 * @access public
	 * @var ContactTypeAllInput
	 */
	public $contactTypeAllInput;
}}

if (!class_exists("ContactTypeAllInput")) {
/**
 * ContactTypeAllInput
 */
class ContactTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsForPerson;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsForUnit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID;
}}

if (!class_exists("ContactTypeAllResponse")) {
/**
 * ContactTypeAllResponse
 */
class ContactTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfContactTypeAllOutput
	 */
	public $ContactTypeAllResult;
}}

if (!class_exists("ContactTypeAllOutput")) {
/**
 * ContactTypeAllOutput
 */
class ContactTypeAllOutput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsMain;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsForPerson;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsForUnit;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsSts;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Validation;
	/**
	 * @access public
	 * @var sstring
	 */
	public $XhtmlDisplay;
	/**
	 * @access public
	 * @var sstring
	 */
	public $XhtmlIcon;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Help;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Icon;
}}

if (!class_exists("UnitContactUpdate")) {
/**
 * UnitContactUpdate
 */
class UnitContactUpdate {
	/**
	 * @access public
	 * @var UnitContact
	 */
	public $unitContact;
}}

if (!class_exists("UnitContact")) {
/**
 * UnitContact
 */
class UnitContact {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Publish;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_ContactType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Value;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsSts;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("UnitContactUpdateResponse")) {
/**
 * UnitContactUpdateResponse
 */
class UnitContactUpdateResponse {
}}

if (!class_exists("RegistrationCategoryInsert")) {
/**
 * RegistrationCategoryInsert
 */
class RegistrationCategoryInsert {
	/**
	 * @access public
	 * @var RegistrationCategory
	 */
	public $registrationCategoryInsertInput;
}}

if (!class_exists("RegistrationCategory")) {
/**
 * RegistrationCategory
 */
class RegistrationCategory {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitRegistration;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_RegistrationCategoryParent;
	/**
	 * @access public
	 * @var sdecimal
	 */
	public $Amount;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAfterDeadline;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsJournal;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("RegistrationCategoryInsertResponse")) {
/**
 * RegistrationCategoryInsertResponse
 */
class RegistrationCategoryInsertResponse {
	/**
	 * @access public
	 * @var RegistrationCategoryInsertOutput
	 */
	public $RegistrationCategoryInsertResult;
}}

if (!class_exists("RegistrationCategoryInsertOutput")) {
/**
 * RegistrationCategoryInsertOutput
 */
class RegistrationCategoryInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("PersonContactInsert")) {
/**
 * PersonContactInsert
 */
class PersonContactInsert {
	/**
	 * @access public
	 * @var PersonContact
	 */
	public $personContact;
}}

if (!class_exists("PersonContactInsertResponse")) {
/**
 * PersonContactInsertResponse
 */
class PersonContactInsertResponse {
	/**
	 * @access public
	 * @var PersonContactInsertOutput
	 */
	public $PersonContactInsertResult;
}}

if (!class_exists("PersonContactInsertOutput")) {
/**
 * PersonContactInsertOutput
 */
class PersonContactInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("OfferInsert")) {
/**
 * OfferInsert
 */
class OfferInsert {
	/**
	 * @access public
	 * @var Offer
	 */
	public $offer;
}}

if (!class_exists("OfferInsertResponse")) {
/**
 * OfferInsertResponse
 */
class OfferInsertResponse {
	/**
	 * @access public
	 * @var OfferInsertOutput
	 */
	public $OfferInsertResult;
}}

if (!class_exists("OfferInsertOutput")) {
/**
 * OfferInsertOutput
 */
class OfferInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("UnitRegistrationSummary")) {
/**
 * UnitRegistrationSummary
 */
class UnitRegistrationSummary {
	/**
	 * @access public
	 * @var UnitRegistrationSummaryInput
	 */
	public $unitRegistrationSummaryInput;
}}

if (!class_exists("UnitRegistrationSummaryInput")) {
/**
 * UnitRegistrationSummaryInput
 */
class UnitRegistrationSummaryInput {
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
}}

if (!class_exists("UnitRegistrationSummaryResponse")) {
/**
 * UnitRegistrationSummaryResponse
 */
class UnitRegistrationSummaryResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitRegistrationSummaryOutput
	 */
	public $UnitRegistrationSummaryResult;
}}

if (!class_exists("UnitRegistrationSummaryOutput")) {
/**
 * UnitRegistrationSummaryOutput
 */
class UnitRegistrationSummaryOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_RegistrationCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationCategory;
	/**
	 * @access public
	 * @var sint
	 */
	public $Count;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UnitType;
	/**
	 * @access public
	 * @var sdecimal
	 */
	public $Amount;
}}

if (!class_exists("UnitCancelTypeAll")) {
/**
 * UnitCancelTypeAll
 */
class UnitCancelTypeAll {
	/**
	 * @access public
	 * @var UnitCancelTypeAllInput
	 */
	public $unitCancelTypeAllInput;
}}

if (!class_exists("UnitCancelTypeAllInput")) {
/**
 * UnitCancelTypeAllInput
 */
class UnitCancelTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("UnitCancelTypeAllResponse")) {
/**
 * UnitCancelTypeAllResponse
 */
class UnitCancelTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitCancelTypeAllOutput
	 */
	public $UnitCancelTypeAllResult;
}}

if (!class_exists("UnitCancelTypeAllOutput")) {
/**
 * UnitCancelTypeAllOutput
 */
class UnitCancelTypeAllOutput {
	/**
	 * @access public
	 * @var sstring
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
	public $Note;
}}

if (!class_exists("AdvertisingCategoryUpdate")) {
/**
 * AdvertisingCategoryUpdate
 */
class AdvertisingCategoryUpdate {
	/**
	 * @access public
	 * @var AdvertisingCategory
	 */
	public $advertisingCategory;
}}

if (!class_exists("AdvertisingCategory")) {
/**
 * AdvertisingCategory
 */
class AdvertisingCategory {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $AgeFrom;
	/**
	 * @access public
	 * @var sint
	 */
	public $AgeTo;
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
	 * @var sint
	 */
	public $ID_MeetingDate;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MeetingDate;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("AdvertisingCategoryUpdateResponse")) {
/**
 * AdvertisingCategoryUpdateResponse
 */
class AdvertisingCategoryUpdateResponse {
}}

if (!class_exists("UnitTreeUpdate")) {
/**
 * UnitTreeUpdate
 */
class UnitTreeUpdate {
	/**
	 * @access public
	 * @var UnitTree
	 */
	public $unitTree;
}}

if (!class_exists("UnitTree")) {
/**
 * UnitTree
 */
class UnitTree {
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
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitTreeReason;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
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
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitType;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitMerge;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UnitMerge;
}}

if (!class_exists("UnitTreeUpdateResponse")) {
/**
 * UnitTreeUpdateResponse
 */
class UnitTreeUpdateResponse {
}}

if (!class_exists("UnitRegistrationInsert")) {
/**
 * UnitRegistrationInsert
 */
class UnitRegistrationInsert {
	/**
	 * @access public
	 * @var UnitRegistration
	 */
	public $unitRegistration;
}}

if (!class_exists("UnitRegistrationInsertResponse")) {
/**
 * UnitRegistrationInsertResponse
 */
class UnitRegistrationInsertResponse {
	/**
	 * @access public
	 * @var UnitRegistrationInsertOutput
	 */
	public $UnitRegistrationInsertResult;
}}

if (!class_exists("UnitRegistrationInsertOutput")) {
/**
 * UnitRegistrationInsertOutput
 */
class UnitRegistrationInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("UnitRegistrationDetail")) {
/**
 * UnitRegistrationDetail
 */
class UnitRegistrationDetail {
	/**
	 * @access public
	 * @var UnitRegistrationDetailInput
	 */
	public $unitRegistrationDetailInput;
}}

if (!class_exists("UnitRegistrationDetailInput")) {
/**
 * UnitRegistrationDetailInput
 */
class UnitRegistrationDetailInput {
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
}}

if (!class_exists("UnitRegistrationDetailResponse")) {
/**
 * UnitRegistrationDetailResponse
 */
class UnitRegistrationDetailResponse {
	/**
	 * @access public
	 * @var UnitRegistration
	 */
	public $UnitRegistrationDetailResult;
}}

if (!class_exists("StatementUpdate")) {
/**
 * StatementUpdate
 */
class StatementUpdate {
	/**
	 * @access public
	 * @var Statement
	 */
	public $statement;
}}

if (!class_exists("Statement")) {
/**
 * Statement
 */
class Statement {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sint
	 */
	public $Year;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_StatementType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $StatementType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsError;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsDelivered;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateDelivered;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsThousands;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsConsultant;
}}

if (!class_exists("StatementUpdateResponse")) {
/**
 * StatementUpdateResponse
 */
class StatementUpdateResponse {
}}

if (!class_exists("RealtyTypeAll")) {
/**
 * RealtyTypeAll
 */
class RealtyTypeAll {
	/**
	 * @access public
	 * @var RealtyTypeAllInput
	 */
	public $realtyTypeAllInput;
}}

if (!class_exists("RealtyTypeAllInput")) {
/**
 * RealtyTypeAllInput
 */
class RealtyTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("RealtyTypeAllResponse")) {
/**
 * RealtyTypeAllResponse
 */
class RealtyTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfRealtyTypeAllOutput
	 */
	public $RealtyTypeAllResult;
}}

if (!class_exists("RealtyTypeAllOutput")) {
/**
 * RealtyTypeAllOutput
 */
class RealtyTypeAllOutput {
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
	public $Note;
}}

if (!class_exists("OccupationUpdate")) {
/**
 * OccupationUpdate
 */
class OccupationUpdate {
	/**
	 * @access public
	 * @var Occupation
	 */
	public $occupation;
}}

if (!class_exists("Occupation")) {
/**
 * Occupation
 */
class Occupation {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Realty;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Publish;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_RealtyType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RealtyType;
}}

if (!class_exists("OccupationUpdateResponse")) {
/**
 * OccupationUpdateResponse
 */
class OccupationUpdateResponse {
}}

if (!class_exists("MembershipUpdate")) {
/**
 * MembershipUpdate
 */
class MembershipUpdate {
	/**
	 * @access public
	 * @var Membership
	 */
	public $membership;
}}

if (!class_exists("Membership")) {
/**
 * Membership
 */
class Membership {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipReason;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $CreateNew;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $OnlyValidate;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsFunction;
}}

if (!class_exists("MembershipUpdateResponse")) {
/**
 * MembershipUpdateResponse
 */
class MembershipUpdateResponse {
}}

if (!class_exists("PersonRegistrationAll")) {
/**
 * PersonRegistrationAll
 */
class PersonRegistrationAll {
	/**
	 * @access public
	 * @var PersonRegistrationAllInput
	 */
	public $personRegistrationAllInput;
}}

if (!class_exists("PersonRegistrationAllInput")) {
/**
 * PersonRegistrationAllInput
 */
class PersonRegistrationAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitRegistration;
}}

if (!class_exists("PersonRegistrationAllResponse")) {
/**
 * PersonRegistrationAllResponse
 */
class PersonRegistrationAllResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonRegistrationAllOutput
	 */
	public $PersonRegistrationAllResult;
}}

if (!class_exists("FunctionDeleteHistory")) {
/**
 * FunctionDeleteHistory
 */
class FunctionDeleteHistory {
	/**
	 * @access public
	 * @var FunctionDeleteHistoryInput
	 */
	public $functionDeleteHistoryInput;
}}

if (!class_exists("FunctionDeleteHistoryInput")) {
/**
 * FunctionDeleteHistoryInput
 */
class FunctionDeleteHistoryInput {
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
}}

if (!class_exists("FunctionDeleteHistoryResponse")) {
/**
 * FunctionDeleteHistoryResponse
 */
class FunctionDeleteHistoryResponse {
}}

if (!class_exists("UnitTreeRenew")) {
/**
 * UnitTreeRenew
 */
class UnitTreeRenew {
	/**
	 * @access public
	 * @var UnitTree
	 */
	public $unitTree;
}}

if (!class_exists("UnitTreeRenewResponse")) {
/**
 * UnitTreeRenewResponse
 */
class UnitTreeRenewResponse {
}}

if (!class_exists("UnitLogo")) {
/**
 * UnitLogo
 */
class UnitLogo {
	/**
	 * @access public
	 * @var UnitLogoInput
	 */
	public $unitLogoInput;
}}

if (!class_exists("UnitLogoInput")) {
/**
 * UnitLogoInput
 */
class UnitLogoInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("UnitLogoResponse")) {
/**
 * UnitLogoResponse
 */
class UnitLogoResponse {
	/**
	 * @access public
	 * @var UnitLogoOutput
	 */
	public $UnitLogoResult;
}}

if (!class_exists("UnitLogoOutput")) {
/**
 * UnitLogoOutput
 */
class UnitLogoOutput {
	/**
	 * @access public
	 * @var sbase64Binary
	 */
	public $LogoContent;
	/**
	 * @access public
	 * @var sstring
	 */
	public $LogoExtension;
}}

if (!class_exists("AssuranceAll")) {
/**
 * AssuranceAll
 */
class AssuranceAll {
	/**
	 * @access public
	 * @var AssuranceAllInput
	 */
	public $assuranceAllInput;
}}

if (!class_exists("AssuranceAllInput")) {
/**
 * AssuranceAllInput
 */
class AssuranceAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("AssuranceAllResponse")) {
/**
 * AssuranceAllResponse
 */
class AssuranceAllResponse {
	/**
	 * @access public
	 * @var ArrayOfAssuranceAllOutput
	 */
	public $AssuranceAllResult;
}}

if (!class_exists("AssuranceAllOutput")) {
/**
 * AssuranceAllOutput
 */
class AssuranceAllOutput {
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
	public $Note;
}}

if (!class_exists("AdvertisingSummary")) {
/**
 * AdvertisingSummary
 */
class AdvertisingSummary {
	/**
	 * @access public
	 * @var AdvertisingSummaryInput
	 */
	public $advertisingSummaryInput;
}}

if (!class_exists("AdvertisingSummaryInput")) {
/**
 * AdvertisingSummaryInput
 */
class AdvertisingSummaryInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IncludeChildUnits;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Realty;
	/**
	 * @access public
	 * @var sint
	 */
	public $Distance;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $GpsLatitude;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $GpsLongitude;
}}

if (!class_exists("AdvertisingSummaryResponse")) {
/**
 * AdvertisingSummaryResponse
 */
class AdvertisingSummaryResponse {
	/**
	 * @access public
	 * @var ArrayOfAdvertisingSummaryOutput
	 */
	public $AdvertisingSummaryResult;
}}

if (!class_exists("AdvertisingSummaryOutput")) {
/**
 * AdvertisingSummaryOutput
 */
class AdvertisingSummaryOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Advertising_Note;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_AdvertisingCategory;
	/**
	 * @access public
	 * @var sint
	 */
	public $AdvertisingCategory_AgeFrom;
	/**
	 * @access public
	 * @var sint
	 */
	public $AdvertisingCategory_AgeTo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $AdvertisingCategory_ID_Sex;
	/**
	 * @access public
	 * @var sstring
	 */
	public $AdvertisingCategory_Sex;
	/**
	 * @access public
	 * @var sstring
	 */
	public $AdvertisingCategory_Note;
	/**
	 * @access public
	 * @var sint
	 */
	public $MeetingDate_ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MeetingDate_ID_WeekDay;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MeetingDate_WeekDay;
	/**
	 * @access public
	 * @var sduration
	 */
	public $MeetingDate_TimeFrom;
	/**
	 * @access public
	 * @var sduration
	 */
	public $MeetingDate_TimeTo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MeetingDate_Periodicity;
	/**
	 * @access public
	 * @var sint
	 */
	public $Occupation_ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Occupation_Note;
	/**
	 * @access public
	 * @var sint
	 */
	public $Realty_ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $Realty_ID_RealtyType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Realty_RealtyType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Realty_Street;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Realty_City;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Realty_Postcode;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $Realty_GpsLatitude;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $Realty_GpsLongitude;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Realty_Description;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Realty_Note;
}}

if (!class_exists("AdvertisingCategoryInsert")) {
/**
 * AdvertisingCategoryInsert
 */
class AdvertisingCategoryInsert {
	/**
	 * @access public
	 * @var AdvertisingCategory
	 */
	public $advertisingCategory;
}}

if (!class_exists("AdvertisingCategoryInsertResponse")) {
/**
 * AdvertisingCategoryInsertResponse
 */
class AdvertisingCategoryInsertResponse {
	/**
	 * @access public
	 * @var AdvertisingCategoryInsertOutput
	 */
	public $AdvertisingCategoryInsertResult;
}}

if (!class_exists("AdvertisingCategoryInsertOutput")) {
/**
 * AdvertisingCategoryInsertOutput
 */
class AdvertisingCategoryInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("UnitInsertUnit")) {
/**
 * UnitInsertUnit
 */
class UnitInsertUnit {
	/**
	 * @access public
	 * @var Unit
	 */
	public $unit;
}}

if (!class_exists("UnitInsertUnitResponse")) {
/**
 * UnitInsertUnitResponse
 */
class UnitInsertUnitResponse {
	/**
	 * @access public
	 * @var UnitInsertUnitOutput
	 */
	public $UnitInsertUnitResult;
}}

if (!class_exists("UnitInsertUnitOutput")) {
/**
 * UnitInsertUnitOutput
 */
class UnitInsertUnitOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("UnitContactInsert")) {
/**
 * UnitContactInsert
 */
class UnitContactInsert {
	/**
	 * @access public
	 * @var UnitContact
	 */
	public $unitContact;
}}

if (!class_exists("UnitContactInsertResponse")) {
/**
 * UnitContactInsertResponse
 */
class UnitContactInsertResponse {
	/**
	 * @access public
	 * @var UnitContactInsertOutput
	 */
	public $UnitContactInsertResult;
}}

if (!class_exists("UnitContactInsertOutput")) {
/**
 * UnitContactInsertOutput
 */
class UnitContactInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("StatementInsert")) {
/**
 * StatementInsert
 */
class StatementInsert {
	/**
	 * @access public
	 * @var Statement
	 */
	public $statement;
}}

if (!class_exists("StatementInsertResponse")) {
/**
 * StatementInsertResponse
 */
class StatementInsertResponse {
	/**
	 * @access public
	 * @var StatementInsertOutput
	 */
	public $StatementInsertResult;
}}

if (!class_exists("StatementInsertOutput")) {
/**
 * StatementInsertOutput
 */
class StatementInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("QualificationAll")) {
/**
 * QualificationAll
 */
class QualificationAll {
	/**
	 * @access public
	 * @var QualificationAllInput
	 */
	public $qualificationAllInput;
}}

if (!class_exists("QualificationAllInput")) {
/**
 * QualificationAllInput
 */
class QualificationAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_QualificationType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
}}

if (!class_exists("QualificationAllResponse")) {
/**
 * QualificationAllResponse
 */
class QualificationAllResponse {
	/**
	 * @access public
	 * @var ArrayOfQualificationAllOutput
	 */
	public $QualificationAllResult;
}}

if (!class_exists("QualificationAllOutput")) {
/**
 * QualificationAllOutput
 */
class QualificationAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_QualificationType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $QualificationType;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $LetterNumber;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsConfirmed;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAuthorized;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
}}

if (!class_exists("PersonAll")) {
/**
 * PersonAll
 */
class PersonAll {
	/**
	 * @access public
	 * @var PersonAllInput
	 */
	public $personAllInput;
}}

if (!class_exists("PersonAllInput")) {
/**
 * PersonAllInput
 */
class PersonAllInput {
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
	public $ID_Sex;
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
	public $SecurityCode;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $OnlyDirectMember;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IdentificationCodeStartsWith;
}}

if (!class_exists("PersonAllResponse")) {
/**
 * PersonAllResponse
 */
class PersonAllResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonAllOutput
	 */
	public $PersonAllResult;
}}

if (!class_exists("PersonAllOutput")) {
/**
 * PersonAllOutput
 */
class PersonAllOutput {
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $Birthday;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Group;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
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
	public $Note;
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
	public $ID_Sex;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Sex;
}}

if (!class_exists("FunctionUpdate")) {
/**
 * FunctionUpdate
 */
class FunctionUpdate {
	/**
	 * @access public
	 * @var Function
	 */
	public $function;
}}

if (!class_exists("FunctionUpdateResponse")) {
/**
 * FunctionUpdateResponse
 */
class FunctionUpdateResponse {
}}

if (!class_exists("DegreeDelete")) {
/**
 * DegreeDelete
 */
class DegreeDelete {
	/**
	 * @access public
	 * @var DegreeDeleteInput
	 */
	public $degreeDeleteInput;
}}

if (!class_exists("DegreeDeleteInput")) {
/**
 * DegreeDeleteInput
 */
class DegreeDeleteInput {
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
}}

if (!class_exists("DegreeDeleteResponse")) {
/**
 * DegreeDeleteResponse
 */
class DegreeDeleteResponse {
}}

if (!class_exists("PersonRegistrationInsert")) {
/**
 * PersonRegistrationInsert
 */
class PersonRegistrationInsert {
	/**
	 * @access public
	 * @var PersonRegistrationInsertInput
	 */
	public $personRegistrationInsertInput;
}}

if (!class_exists("PersonRegistrationInsertInput")) {
/**
 * PersonRegistrationInsertInput
 */
class PersonRegistrationInsertInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Membership;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_RegistrationCategory;
}}

if (!class_exists("PersonRegistrationInsertResponse")) {
/**
 * PersonRegistrationInsertResponse
 */
class PersonRegistrationInsertResponse {
	/**
	 * @access public
	 * @var PersonRegistrationInsertOutput
	 */
	public $PersonRegistrationInsertResult;
}}

if (!class_exists("PersonRegistrationInsertOutput")) {
/**
 * PersonRegistrationInsertOutput
 */
class PersonRegistrationInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("PersonMistakeReportDelete")) {
/**
 * PersonMistakeReportDelete
 */
class PersonMistakeReportDelete {
	/**
	 * @access public
	 * @var PersonMistakeReportDeleteInput
	 */
	public $personMistakeReportDeleteInput;
}}

if (!class_exists("PersonMistakeReportDeleteInput")) {
/**
 * PersonMistakeReportDeleteInput
 */
class PersonMistakeReportDeleteInput {
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
}}

if (!class_exists("PersonMistakeReportDeleteResponse")) {
/**
 * PersonMistakeReportDeleteResponse
 */
class PersonMistakeReportDeleteResponse {
}}

if (!class_exists("QualificationUpdateHistory")) {
/**
 * QualificationUpdateHistory
 */
class QualificationUpdateHistory {
	/**
	 * @access public
	 * @var Qualification
	 */
	public $qualification;
}}

if (!class_exists("QualificationUpdateHistoryResponse")) {
/**
 * QualificationUpdateHistoryResponse
 */
class QualificationUpdateHistoryResponse {
}}

if (!class_exists("StatementComputeIsError")) {
/**
 * StatementComputeIsError
 */
class StatementComputeIsError {
	/**
	 * @access public
	 * @var Statement
	 */
	public $statement;
}}

if (!class_exists("StatementComputeIsErrorResponse")) {
/**
 * StatementComputeIsErrorResponse
 */
class StatementComputeIsErrorResponse {
}}

if (!class_exists("PersonOtherUpdate")) {
/**
 * PersonOtherUpdate
 */
class PersonOtherUpdate {
	/**
	 * @access public
	 * @var PersonOther
	 */
	public $personOther;
}}

if (!class_exists("PersonOther")) {
/**
 * PersonOther
 */
class PersonOther {
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
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MaidenName;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Assurance;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Assurance;
	/**
	 * @access public
	 * @var sstring
	 */
	public $InsuranceNumber;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Allergy;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Drugs;
	/**
	 * @access public
	 * @var sstring
	 */
	public $HealthLimitation;
	/**
	 * @access public
	 * @var sstring
	 */
	public $BodySkills;
	/**
	 * @access public
	 * @var sstring
	 */
	public $School;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsRPS;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsEPS;
}}

if (!class_exists("PersonOtherUpdateResponse")) {
/**
 * PersonOtherUpdateResponse
 */
class PersonOtherUpdateResponse {
}}

if (!class_exists("AdvertisingCategoryDetail")) {
/**
 * AdvertisingCategoryDetail
 */
class AdvertisingCategoryDetail {
	/**
	 * @access public
	 * @var AdvertisingCategoryDetailInput
	 */
	public $advertisingCategoryDetailInput;
}}

if (!class_exists("AdvertisingCategoryDetailInput")) {
/**
 * AdvertisingCategoryDetailInput
 */
class AdvertisingCategoryDetailInput {
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
}}

if (!class_exists("AdvertisingCategoryDetailResponse")) {
/**
 * AdvertisingCategoryDetailResponse
 */
class AdvertisingCategoryDetailResponse {
	/**
	 * @access public
	 * @var AdvertisingCategory
	 */
	public $AdvertisingCategoryDetailResult;
}}

if (!class_exists("UnitTreeReasonAll")) {
/**
 * UnitTreeReasonAll
 */
class UnitTreeReasonAll {
	/**
	 * @access public
	 * @var UnitTreeReasonAllInput
	 */
	public $unitTreeReasonAllInput;
}}

if (!class_exists("UnitTreeReasonAllInput")) {
/**
 * UnitTreeReasonAllInput
 */
class UnitTreeReasonAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("UnitTreeReasonAllResponse")) {
/**
 * UnitTreeReasonAllResponse
 */
class UnitTreeReasonAllResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitTreeReasonAllOutput
	 */
	public $UnitTreeReasonAllResult;
}}

if (!class_exists("UnitTreeReasonAllOutput")) {
/**
 * UnitTreeReasonAllOutput
 */
class UnitTreeReasonAllOutput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("UnitTreeDetail")) {
/**
 * UnitTreeDetail
 */
class UnitTreeDetail {
	/**
	 * @access public
	 * @var UnitTreeDetailInput
	 */
	public $unitTreeDetailInput;
}}

if (!class_exists("UnitTreeDetailInput")) {
/**
 * UnitTreeDetailInput
 */
class UnitTreeDetailInput {
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
}}

if (!class_exists("UnitTreeDetailResponse")) {
/**
 * UnitTreeDetailResponse
 */
class UnitTreeDetailResponse {
	/**
	 * @access public
	 * @var UnitTree
	 */
	public $UnitTreeDetailResult;
}}

if (!class_exists("UnitMistakeReportInsert")) {
/**
 * UnitMistakeReportInsert
 */
class UnitMistakeReportInsert {
	/**
	 * @access public
	 * @var UnitMistakeReport
	 */
	public $unitMistakeReport;
}}

if (!class_exists("UnitMistakeReport")) {
/**
 * UnitMistakeReport
 */
class UnitMistakeReport {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Mistake;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("UnitMistakeReportInsertResponse")) {
/**
 * UnitMistakeReportInsertResponse
 */
class UnitMistakeReportInsertResponse {
	/**
	 * @access public
	 * @var UnitMistakeReportInsertOutput
	 */
	public $UnitMistakeReportInsertResult;
}}

if (!class_exists("UnitMistakeReportInsertOutput")) {
/**
 * UnitMistakeReportInsertOutput
 */
class UnitMistakeReportInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("UnitContactAll")) {
/**
 * UnitContactAll
 */
class UnitContactAll {
	/**
	 * @access public
	 * @var UnitContactAllInput
	 */
	public $unitContactAllInput;
}}

if (!class_exists("UnitContactAllInput")) {
/**
 * UnitContactAllInput
 */
class UnitContactAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_ContactType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Publish;
}}

if (!class_exists("UnitContactAllResponse")) {
/**
 * UnitContactAllResponse
 */
class UnitContactAllResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitContact
	 */
	public $UnitContactAllResult;
}}

if (!class_exists("StatementDetail")) {
/**
 * StatementDetail
 */
class StatementDetail {
	/**
	 * @access public
	 * @var StatementDetailInput
	 */
	public $statementDetailInput;
}}

if (!class_exists("StatementDetailInput")) {
/**
 * StatementDetailInput
 */
class StatementDetailInput {
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
}}

if (!class_exists("StatementDetailResponse")) {
/**
 * StatementDetailResponse
 */
class StatementDetailResponse {
	/**
	 * @access public
	 * @var Statement
	 */
	public $StatementDetailResult;
}}

if (!class_exists("OccupationInsert")) {
/**
 * OccupationInsert
 */
class OccupationInsert {
	/**
	 * @access public
	 * @var Occupation
	 */
	public $occupation;
}}

if (!class_exists("OccupationInsertResponse")) {
/**
 * OccupationInsertResponse
 */
class OccupationInsertResponse {
	/**
	 * @access public
	 * @var OccupationInsertOutput
	 */
	public $OccupationInsertResult;
}}

if (!class_exists("OccupationInsertOutput")) {
/**
 * OccupationInsertOutput
 */
class OccupationInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("OccupationDetail")) {
/**
 * OccupationDetail
 */
class OccupationDetail {
	/**
	 * @access public
	 * @var OccupationDetailInput
	 */
	public $occupationDetailInput;
}}

if (!class_exists("OccupationDetailInput")) {
/**
 * OccupationDetailInput
 */
class OccupationDetailInput {
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
}}

if (!class_exists("OccupationDetailResponse")) {
/**
 * OccupationDetailResponse
 */
class OccupationDetailResponse {
	/**
	 * @access public
	 * @var Occupation
	 */
	public $OccupationDetailResult;
}}

if (!class_exists("MembershipReasonAll")) {
/**
 * MembershipReasonAll
 */
class MembershipReasonAll {
	/**
	 * @access public
	 * @var MembershipReasonAllInput
	 */
	public $membershipReasonAllInput;
}}

if (!class_exists("MembershipReasonAllInput")) {
/**
 * MembershipReasonAllInput
 */
class MembershipReasonAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("MembershipReasonAllResponse")) {
/**
 * MembershipReasonAllResponse
 */
class MembershipReasonAllResponse {
	/**
	 * @access public
	 * @var ArrayOfMembershipReasonAllOutput
	 */
	public $MembershipReasonAllResult;
}}

if (!class_exists("MembershipReasonAllOutput")) {
/**
 * MembershipReasonAllOutput
 */
class MembershipReasonAllOutput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("MembershipInsert")) {
/**
 * MembershipInsert
 */
class MembershipInsert {
	/**
	 * @access public
	 * @var Membership
	 */
	public $membership;
}}

if (!class_exists("MembershipInsertResponse")) {
/**
 * MembershipInsertResponse
 */
class MembershipInsertResponse {
	/**
	 * @access public
	 * @var MembershipInsertOutput
	 */
	public $MembershipInsertResult;
}}

if (!class_exists("MembershipInsertOutput")) {
/**
 * MembershipInsertOutput
 */
class MembershipInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("MembershipDetail")) {
/**
 * MembershipDetail
 */
class MembershipDetail {
	/**
	 * @access public
	 * @var MembershipDetailInput
	 */
	public $membershipDetailInput;
}}

if (!class_exists("MembershipDetailInput")) {
/**
 * MembershipDetailInput
 */
class MembershipDetailInput {
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
}}

if (!class_exists("MembershipDetailResponse")) {
/**
 * MembershipDetailResponse
 */
class MembershipDetailResponse {
	/**
	 * @access public
	 * @var Membership
	 */
	public $MembershipDetailResult;
}}

if (!class_exists("RegistrationCategoryCopyFromParentUnit")) {
/**
 * RegistrationCategoryCopyFromParentUnit
 */
class RegistrationCategoryCopyFromParentUnit {
	/**
	 * @access public
	 * @var RegistrationCategoryCopyFromParentUnitInput
	 */
	public $registrationCategoryCopyFromParentUnitInput;
}}

if (!class_exists("RegistrationCategoryCopyFromParentUnitInput")) {
/**
 * RegistrationCategoryCopyFromParentUnitInput
 */
class RegistrationCategoryCopyFromParentUnitInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitRegistrationCopy;
}}

if (!class_exists("RegistrationCategoryCopyFromParentUnitResponse")) {
/**
 * RegistrationCategoryCopyFromParentUnitResponse
 */
class RegistrationCategoryCopyFromParentUnitResponse {
}}

if (!class_exists("RequestUpdate")) {
/**
 * RequestUpdate
 */
class RequestUpdate {
	/**
	 * @access public
	 * @var Request
	 */
	public $request;
}}

if (!class_exists("RequestUpdateResponse")) {
/**
 * RequestUpdateResponse
 */
class RequestUpdateResponse {
}}

if (!class_exists("UnitRegistrationMembers")) {
/**
 * UnitRegistrationMembers
 */
class UnitRegistrationMembers {
	/**
	 * @access public
	 * @var UnitRegistrationMembersInput
	 */
	public $unitRegistrationMembersInput;
}}

if (!class_exists("UnitRegistrationMembersInput")) {
/**
 * UnitRegistrationMembersInput
 */
class UnitRegistrationMembersInput {
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
}}

if (!class_exists("UnitRegistrationMembersResponse")) {
/**
 * UnitRegistrationMembersResponse
 */
class UnitRegistrationMembersResponse {
	/**
	 * @access public
	 * @var UnitRegistrationMembersOutput
	 */
	public $UnitRegistrationMembersResult;
}}

if (!class_exists("UnitRegistrationMembersOutput")) {
/**
 * UnitRegistrationMembersOutput
 */
class UnitRegistrationMembersOutput {
	/**
	 * @access public
	 * @var ArrayOfUnitRegistrationMembersUnits
	 */
	public $Units;
	/**
	 * @access public
	 * @var ArrayOfUnitRegistrationMembersAge
	 */
	public $MembersAge;
	/**
	 * @access public
	 * @var ArrayOfUnitRegistrationMembersCategory
	 */
	public $MembersCategory;
}}

if (!class_exists("UnitRegistrationMembersUnits")) {
/**
 * UnitRegistrationMembersUnits
 */
class UnitRegistrationMembersUnits {
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UnitType;
	/**
	 * @access public
	 * @var sint
	 */
	public $Count;
}}

if (!class_exists("UnitRegistrationMembersAge")) {
/**
 * UnitRegistrationMembersAge
 */
class UnitRegistrationMembersAge {
	/**
	 * @access public
	 * @var sstring
	 */
	public $Row;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsThisUnit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_AgeCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $AgeCategory;
	/**
	 * @access public
	 * @var sint
	 */
	public $Count;
}}

if (!class_exists("UnitRegistrationMembersCategory")) {
/**
 * UnitRegistrationMembersCategory
 */
class UnitRegistrationMembersCategory {
	/**
	 * @access public
	 * @var sstring
	 */
	public $Row;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsThisUnit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MembershipCategory;
	/**
	 * @access public
	 * @var sint
	 */
	public $Count;
}}

if (!class_exists("UnitDetailMembersRegistry")) {
/**
 * UnitDetailMembersRegistry
 */
class UnitDetailMembersRegistry {
	/**
	 * @access public
	 * @var UnitDetailMembersRegistryInput
	 */
	public $unitDetailMembersRegistryInput;
}}

if (!class_exists("UnitDetailMembersRegistryInput")) {
/**
 * UnitDetailMembersRegistryInput
 */
class UnitDetailMembersRegistryInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("UnitDetailMembersRegistryResponse")) {
/**
 * UnitDetailMembersRegistryResponse
 */
class UnitDetailMembersRegistryResponse {
	/**
	 * @access public
	 * @var MembersCount
	 */
	public $UnitDetailMembersRegistryResult;
}}

if (!class_exists("PersonAllEventCongressFunction")) {
/**
 * PersonAllEventCongressFunction
 */
class PersonAllEventCongressFunction {
	/**
	 * @access public
	 * @var PersonAllEventCongressFunctionInput
	 */
	public $personAllEventCongressFunctionInput;
}}

if (!class_exists("PersonAllEventCongressFunctionInput")) {
/**
 * PersonAllEventCongressFunctionInput
 */
class PersonAllEventCongressFunctionInput {
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
	 * @var sint
	 */
	public $ID_EventCongressFunction;
}}

if (!class_exists("PersonAllEventCongressFunctionResponse")) {
/**
 * PersonAllEventCongressFunctionResponse
 */
class PersonAllEventCongressFunctionResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonAllEventCongressFunctionOutput
	 */
	public $PersonAllEventCongressFunctionResult;
}}

if (!class_exists("PersonAllEventCongressFunctionOutput")) {
/**
 * PersonAllEventCongressFunctionOutput
 */
class PersonAllEventCongressFunctionOutput {
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
}}

if (!class_exists("UnitAllCamp")) {
/**
 * UnitAllCamp
 */
class UnitAllCamp {
	/**
	 * @access public
	 * @var UnitAllCampInput
	 */
	public $unitAllCampInput;
}}

if (!class_exists("UnitAllCampInput")) {
/**
 * UnitAllCampInput
 */
class UnitAllCampInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
}}

if (!class_exists("UnitAllCampResponse")) {
/**
 * UnitAllCampResponse
 */
class UnitAllCampResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitAllCampOutput
	 */
	public $UnitAllCampResult;
}}

if (!class_exists("UnitAllCampOutput")) {
/**
 * UnitAllCampOutput
 */
class UnitAllCampOutput {
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
	public $SortName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
}}

if (!class_exists("PersonAllEventCamp")) {
/**
 * PersonAllEventCamp
 */
class PersonAllEventCamp {
	/**
	 * @access public
	 * @var PersonAllEventCampInput
	 */
	public $personAllEventCampInput;
}}

if (!class_exists("PersonAllEventCampInput")) {
/**
 * PersonAllEventCampInput
 */
class PersonAllEventCampInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_EventCamp;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IdentificationCode;
}}

if (!class_exists("PersonAllEventCampResponse")) {
/**
 * PersonAllEventCampResponse
 */
class PersonAllEventCampResponse {
	/**
	 * @access public
	 * @var ArrayOfPersonAllEventCampOutput
	 */
	public $PersonAllEventCampResult;
}}

if (!class_exists("PersonAllEventCampOutput")) {
/**
 * PersonAllEventCampOutput
 */
class PersonAllEventCampOutput {
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
}}

if (!class_exists("MembershipAll")) {
/**
 * MembershipAll
 */
class MembershipAll {
	/**
	 * @access public
	 * @var MembershipAllInput
	 */
	public $membershipAllInput;
}}

if (!class_exists("MembershipAllInput")) {
/**
 * MembershipAllInput
 */
class MembershipAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MembershipCategory;
	/**
	 * @access public
	 * @var sstring
	 */
	public $LastName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $IdentificationCode;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $OnlyDirectMember;
}}

if (!class_exists("MembershipAllResponse")) {
/**
 * MembershipAllResponse
 */
class MembershipAllResponse {
	/**
	 * @access public
	 * @var ArrayOfMembershipAllOutput
	 */
	public $MembershipAllResult;
}}

if (!class_exists("FunctionTypeUpdate")) {
/**
 * FunctionTypeUpdate
 */
class FunctionTypeUpdate {
	/**
	 * @access public
	 * @var FunctionType
	 */
	public $functionType;
}}

if (!class_exists("FunctionTypeUpdateResponse")) {
/**
 * FunctionTypeUpdateResponse
 */
class FunctionTypeUpdateResponse {
}}

if (!class_exists("FunctionInsert")) {
/**
 * FunctionInsert
 */
class FunctionInsert {
	/**
	 * @access public
	 * @var Function
	 */
	public $function;
}}

if (!class_exists("FunctionInsertResponse")) {
/**
 * FunctionInsertResponse
 */
class FunctionInsertResponse {
	/**
	 * @access public
	 * @var FunctionInsertOutput
	 */
	public $FunctionInsertResult;
}}

if (!class_exists("FunctionInsertOutput")) {
/**
 * FunctionInsertOutput
 */
class FunctionInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("FunctionDetail")) {
/**
 * FunctionDetail
 */
class FunctionDetail {
	/**
	 * @access public
	 * @var FunctionDetailInput
	 */
	public $functionDetailInput;
}}

if (!class_exists("FunctionDetailInput")) {
/**
 * FunctionDetailInput
 */
class FunctionDetailInput {
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
}}

if (!class_exists("FunctionDetailResponse")) {
/**
 * FunctionDetailResponse
 */
class FunctionDetailResponse {
	/**
	 * @access public
	 * @var FunctionDetailOutput
	 */
	public $FunctionDetailResult;
}}

if (!class_exists("FunctionDetailOutput")) {
/**
 * FunctionDetailOutput
 */
class FunctionDetailOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_FunctionType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $FunctionType;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_FunctionReason;
	/**
	 * @access public
	 * @var sstring
	 */
	public $FunctionReason;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsDefaultRole;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Specification;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsUsed;
}}

if (!class_exists("EducationUpdate")) {
/**
 * EducationUpdate
 */
class EducationUpdate {
	/**
	 * @access public
	 * @var Education
	 */
	public $education;
}}

if (!class_exists("EducationUpdateResponse")) {
/**
 * EducationUpdateResponse
 */
class EducationUpdateResponse {
}}

if (!class_exists("MembershipRenew")) {
/**
 * MembershipRenew
 */
class MembershipRenew {
	/**
	 * @access public
	 * @var Membership
	 */
	public $membership;
}}

if (!class_exists("MembershipRenewResponse")) {
/**
 * MembershipRenewResponse
 */
class MembershipRenewResponse {
}}

if (!class_exists("StatementAllChild")) {
/**
 * StatementAllChild
 */
class StatementAllChild {
	/**
	 * @access public
	 * @var StatementAllChildInput
	 */
	public $statementAllChildInput;
}}

if (!class_exists("StatementAllChildInput")) {
/**
 * StatementAllChildInput
 */
class StatementAllChildInput {
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
}}

if (!class_exists("StatementAllChildResponse")) {
/**
 * StatementAllChildResponse
 */
class StatementAllChildResponse {
	/**
	 * @access public
	 * @var ArrayOfStatementAllChildOutput
	 */
	public $StatementAllChildResult;
}}

if (!class_exists("StatementAllChildOutput")) {
/**
 * StatementAllChildOutput
 */
class StatementAllChildOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sint
	 */
	public $Year;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_StatementType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $StatementType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsError;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsDelivered;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateDelivered;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsThousands;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsConsultant;
}}

if (!class_exists("UnitCancelInsert")) {
/**
 * UnitCancelInsert
 */
class UnitCancelInsert {
	/**
	 * @access public
	 * @var UnitCancel
	 */
	public $unitCancel;
}}

if (!class_exists("UnitCancel")) {
/**
 * UnitCancel
 */
class UnitCancel {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_UnitCancelType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UnitCancelType;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $DateDecision;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Description;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Person;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Person;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
}}

if (!class_exists("UnitCancelInsertResponse")) {
/**
 * UnitCancelInsertResponse
 */
class UnitCancelInsertResponse {
	/**
	 * @access public
	 * @var UnitCancelInsertOutput
	 */
	public $UnitCancelInsertResult;
}}

if (!class_exists("UnitCancelInsertOutput")) {
/**
 * UnitCancelInsertOutput
 */
class UnitCancelInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("PersonOtherDetail")) {
/**
 * PersonOtherDetail
 */
class PersonOtherDetail {
	/**
	 * @access public
	 * @var PersonOtherDetailInput
	 */
	public $personOtherDetailInput;
}}

if (!class_exists("PersonOtherDetailInput")) {
/**
 * PersonOtherDetailInput
 */
class PersonOtherDetailInput {
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
}}

if (!class_exists("PersonOtherDetailResponse")) {
/**
 * PersonOtherDetailResponse
 */
class PersonOtherDetailResponse {
	/**
	 * @access public
	 * @var PersonOther
	 */
	public $PersonOtherDetailResult;
}}

if (!class_exists("UnitTreeAll")) {
/**
 * UnitTreeAll
 */
class UnitTreeAll {
	/**
	 * @access public
	 * @var UnitTreeAllInput
	 */
	public $unitTreeAllInput;
}}

if (!class_exists("UnitTreeAllInput")) {
/**
 * UnitTreeAllInput
 */
class UnitTreeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitParent;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsValid;
}}

if (!class_exists("UnitTreeAllResponse")) {
/**
 * UnitTreeAllResponse
 */
class UnitTreeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitTreeAllOutput
	 */
	public $UnitTreeAllResult;
}}

if (!class_exists("UnitTreeAllOutput")) {
/**
 * UnitTreeAllOutput
 */
class UnitTreeAllOutput {
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidTo;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $SortName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UnitMerge;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UnitMerge;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RegistrationNumberMerge;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $CanRenew;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsUnitCancel;
}}

if (!class_exists("StatementEntryTypeAll")) {
/**
 * StatementEntryTypeAll
 */
class StatementEntryTypeAll {
	/**
	 * @access public
	 * @var StatementEntryTypeAllInput
	 */
	public $statementEntryTypeAllInput;
}}

if (!class_exists("StatementEntryTypeAllInput")) {
/**
 * StatementEntryTypeAllInput
 */
class StatementEntryTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_StatementType;
}}

if (!class_exists("StatementEntryTypeAllResponse")) {
/**
 * StatementEntryTypeAllResponse
 */
class StatementEntryTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfStatementEntryTypeAllOutput
	 */
	public $StatementEntryTypeAllResult;
}}

if (!class_exists("StatementEntryTypeAllOutput")) {
/**
 * StatementEntryTypeAllOutput
 */
class StatementEntryTypeAllOutput {
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
	public $ID_StatementType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $StatementType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Note;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Birdos;
}}

if (!class_exists("MembershipTypeAll")) {
/**
 * MembershipTypeAll
 */
class MembershipTypeAll {
	/**
	 * @access public
	 * @var MembershipTypeAllInput
	 */
	public $membershipTypeAllInput;
}}

if (!class_exists("MembershipTypeAllInput")) {
/**
 * MembershipTypeAllInput
 */
class MembershipTypeAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("MembershipTypeAllResponse")) {
/**
 * MembershipTypeAllResponse
 */
class MembershipTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfMembershipTypeAllOutput
	 */
	public $MembershipTypeAllResult;
}}

if (!class_exists("MembershipTypeAllOutput")) {
/**
 * MembershipTypeAllOutput
 */
class MembershipTypeAllOutput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("UnitRegistrationReport")) {
/**
 * UnitRegistrationReport
 */
class UnitRegistrationReport {
	/**
	 * @access public
	 * @var UnitRegistrationReportInput
	 */
	public $UnitRegistrationReportInput;
}}

if (!class_exists("UnitRegistrationReportInput")) {
/**
 * UnitRegistrationReportInput
 */
class UnitRegistrationReportInput {
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
}}

if (!class_exists("UnitRegistrationReportResponse")) {
/**
 * UnitRegistrationReportResponse
 */
class UnitRegistrationReportResponse {
	/**
	 * @access public
	 * @var ArrayOfUnitRegistrationReportOutput
	 */
	public $UnitRegistrationReportResult;
}}

if (!class_exists("UnitRegistrationReportOutput")) {
/**
 * UnitRegistrationReportOutput
 */
class UnitRegistrationReportOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Mistake;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Mistake;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsUnit;
	/**
	 * @access public
	 * @var sint
	 */
	public $ObjectId;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_MistakeType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $MistakeType;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Report;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Report;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $ValidFrom;
}}

if (!class_exists("guid")) {
/**
 * guid
 */
class guid {
}}

if (!class_exists("OrganizationUnit")) {
/**
 * OrganizationUnit
 * @author WSDLInterpreter
 */
class OrganizationUnit extends SoapClient {
	/**
	 * Default class map for wsdl=>php
	 * @access private
	 * @var array
	 */
	private static $classmap = array(
		"RequestStateAll" => "RequestStateAll",
		"RequestStateAllInput" => "RequestStateAllInput",
		"RequestStateAllResponse" => "RequestStateAllResponse",
		"RequestStateAllOutput" => "RequestStateAllOutput",
		"RequestInsert" => "RequestInsert",
		"Request" => "Request",
		"RequestInsertResponse" => "RequestInsertResponse",
		"RequestInsertOutput" => "RequestInsertOutput",
		"RequestDetail" => "RequestDetail",
		"RequestDetailInput" => "RequestDetailInput",
		"RequestDetailResponse" => "RequestDetailResponse",
		"UnitCancelAll" => "UnitCancelAll",
		"UnitCancelAllInput" => "UnitCancelAllInput",
		"UnitCancelAllResponse" => "UnitCancelAllResponse",
		"UnitCancelAllOutput" => "UnitCancelAllOutput",
		"MeetingDateDelete" => "MeetingDateDelete",
		"MeetingDateDeleteInput" => "MeetingDateDeleteInput",
		"MeetingDateDeleteResponse" => "MeetingDateDeleteResponse",
		"EducatationSeminaryUpdate" => "EducatationSeminaryUpdate",
		"EducatationSeminary" => "EducatationSeminary",
		"EducatationSeminaryUpdateResponse" => "EducatationSeminaryUpdateResponse",
		"AlignmentUpdate" => "AlignmentUpdate",
		"Alignment" => "Alignment",
		"AlignmentUpdateResponse" => "AlignmentUpdateResponse",
		"QualificationTypeAll" => "QualificationTypeAll",
		"QualificationTypeAllInput" => "QualificationTypeAllInput",
		"QualificationTypeAllResponse" => "QualificationTypeAllResponse",
		"QualificationTypeAllOutput" => "QualificationTypeAllOutput",
		"PersonContactAll" => "PersonContactAll",
		"PersonContactAllInput" => "PersonContactAllInput",
		"PersonContactAllResponse" => "PersonContactAllResponse",
		"PersonContactAllOutput" => "PersonContactAllOutput",
		"FunctionTypeInsert" => "FunctionTypeInsert",
		"FunctionType" => "FunctionType",
		"FunctionTypeInsertResponse" => "FunctionTypeInsertResponse",
		"FunctionTypeInsertOutput" => "FunctionTypeInsertOutput",
		"FunctionTypeDetail" => "FunctionTypeDetail",
		"FunctionTypeDetailInput" => "FunctionTypeDetailInput",
		"FunctionTypeDetailResponse" => "FunctionTypeDetailResponse",
		"EducationInsert" => "EducationInsert",
		"Education" => "Education",
		"EducationInsertResponse" => "EducationInsertResponse",
		"EducationInsertOutput" => "EducationInsertOutput",
		"DegreeTypeAll" => "DegreeTypeAll",
		"DegreeTypeAllInput" => "DegreeTypeAllInput",
		"DegreeTypeAllResponse" => "DegreeTypeAllResponse",
		"DegreeTypeAllOutput" => "DegreeTypeAllOutput",
		"UnitRegistrationAllChild" => "UnitRegistrationAllChild",
		"UnitRegistrationAllChildInput" => "UnitRegistrationAllChildInput",
		"UnitRegistrationAllChildResponse" => "UnitRegistrationAllChildResponse",
		"UnitRegistrationAllChildOutput" => "UnitRegistrationAllChildOutput",
		"EducatationSeminaryInsert" => "EducatationSeminaryInsert",
		"EducatationSeminaryInsertResponse" => "EducatationSeminaryInsertResponse",
		"EducatationSeminaryInsertOutput" => "EducatationSeminaryInsertOutput",
		"AccountDelete" => "AccountDelete",
		"AccountDeleteInput" => "AccountDeleteInput",
		"AccountDeleteResponse" => "AccountDeleteResponse",
		"AccountAll" => "AccountAll",
		"AccountAllInput" => "AccountAllInput",
		"AccountAllResponse" => "AccountAllResponse",
		"AccountAllOutput" => "Account",
		"PersonAllPublic" => "PersonAllPublic",
		"PersonAllPublicInput" => "PersonAllPublicInput",
		"PersonAllPublicResponse" => "PersonAllPublicResponse",
		"PersonAllPublicOutput" => "PersonAllPublicOutput",
		"PersonUpdateUser" => "PersonUpdateUser",
		"PersonUpdateUserInput" => "PersonUpdateUserInput",
		"PersonUpdateUserResponse" => "PersonUpdateUserResponse",
		"UnitRegistrationCheck" => "UnitRegistrationCheck",
		"UnitRegistrationCheckInput" => "UnitRegistrationCheckInput",
		"UnitRegistrationCheckResponse" => "UnitRegistrationCheckResponse",
		"UnitRegistrationCheckOutput" => "UnitRegistrationCheckOutput",
		"TroopArtAll" => "TroopArtAll",
		"TroopArtAllInput" => "TroopArtAllInput",
		"TroopArtAllResponse" => "TroopArtAllResponse",
		"TroopArtAllOutput" => "TroopArtAllOutput",
		"StatementTypeAll" => "StatementTypeAll",
		"StatementTypeAllInput" => "StatementTypeAllInput",
		"StatementTypeAllResponse" => "StatementTypeAllResponse",
		"StatementTypeAllOutput" => "StatementTypeAllOutput",
		"RegistrationCategoryAll" => "RegistrationCategoryAll",
		"RegistrationCategoryAllInput" => "RegistrationCategoryAllInput",
		"RegistrationCategoryAllResponse" => "RegistrationCategoryAllResponse",
		"RegistrationCategoryAllOutput" => "RegistrationCategoryAllOutput",
		"RealtyAll" => "RealtyAll",
		"RealtyAllInput" => "RealtyAllInput",
		"RealtyAllResponse" => "RealtyAllResponse",
		"RealtyAllOutput" => "RealtyAllOutput",
		"OccupationAll" => "OccupationAll",
		"OccupationAllInput" => "OccupationAllInput",
		"OccupationAllResponse" => "OccupationAllResponse",
		"OccupationAllOutput" => "OccupationAllOutput",
		"BankDetail" => "BankDetail",
		"BankDetailInput" => "BankDetailInput",
		"BankDetailResponse" => "BankDetailResponse",
		"BankDetailOutput" => "BankDetailOutput",
		"BankAll" => "BankAll",
		"BankAllInput" => "BankAllInput",
		"BankAllResponse" => "BankAllResponse",
		"BankAllOutput" => "BankAllOutput",
		"AlignmentInsert" => "AlignmentInsert",
		"AlignmentInsertResponse" => "AlignmentInsertResponse",
		"AlignmentInsertOutput" => "AlignmentInsertOutput",
		"AlignmentDetail" => "AlignmentDetail",
		"AlignmentDetailInput" => "AlignmentDetailInput",
		"AlignmentDetailResponse" => "AlignmentDetailResponse",
		"OfferTypeAll" => "OfferTypeAll",
		"OfferTypeAllInput" => "OfferTypeAllInput",
		"OfferTypeAllResponse" => "OfferTypeAllResponse",
		"OfferTypeAllOutput" => "OfferTypeAllOutput",
		"OfferAll" => "OfferAll",
		"OfferAllInput" => "OfferAllInput",
		"OfferAllResponse" => "OfferAllResponse",
		"OfferAllOutput" => "OfferAllOutput",
		"MembershipCategoryAll" => "MembershipCategoryAll",
		"MembershipCategoryAllInput" => "MembershipCategoryAllInput",
		"MembershipCategoryAllResponse" => "MembershipCategoryAllResponse",
		"MembershipCategoryAllOutput" => "MembershipCategoryAllOutput",
		"EducationTypeAll" => "EducationTypeAll",
		"EducationTypeAllInput" => "EducationTypeAllInput",
		"EducationTypeAllResponse" => "EducationTypeAllResponse",
		"EducationTypeAllOutput" => "EducationTypeAllOutput",
		"PersonAllRegistrationCategory" => "PersonAllRegistrationCategory",
		"PersonAllRegistrationCategoryInput" => "PersonAllRegistrationCategoryInput",
		"PersonAllRegistrationCategoryResponse" => "PersonAllRegistrationCategoryResponse",
		"PersonAllRegistrationCategoryOutput" => "PersonAllRegistrationCategoryOutput",
		"QualificationDeleteHistory" => "QualificationDeleteHistory",
		"QualificationDeleteHistoryInput" => "QualificationDeleteHistoryInput",
		"QualificationDeleteHistoryResponse" => "QualificationDeleteHistoryResponse",
		"FunctionInsertHistory" => "FunctionInsertHistory",
		"Function" => "FFunction",
		"FunctionInsertHistoryResponse" => "FunctionInsertHistoryResponse",
		"FunctionInsertHistoryOutput" => "FunctionInsertHistoryOutput",
		"AlignmentTypeAll" => "AlignmentTypeAll",
		"AlignmentTypeAllInput" => "AlignmentTypeAllInput",
		"AlignmentTypeAllResponse" => "AlignmentTypeAllResponse",
		"AlignmentTypeAllOutput" => "AlignmentTypeAllOutput",
		"UnitRegistrationAll" => "UnitRegistrationAll",
		"UnitRegistrationAllInput" => "UnitRegistrationAllInput",
		"UnitRegistrationAllResponse" => "UnitRegistrationAllResponse",
		"UnitRegistrationAllOutput" => "UnitRegistrationAllOutput",
		"RegistrationCategoryDelete" => "RegistrationCategoryDelete",
		"RegistrationCategoryDeleteInput" => "RegistrationCategoryDeleteInput",
		"RegistrationCategoryDeleteResponse" => "RegistrationCategoryDeleteResponse",
		"PersonContactDelete" => "PersonContactDelete",
		"PersonContactDeleteInput" => "PersonContactDeleteInput",
		"PersonContactDeleteResponse" => "PersonContactDeleteResponse",
		"OfferDelete" => "OfferDelete",
		"OfferDeleteInput" => "OfferDeleteInput",
		"OfferDeleteResponse" => "OfferDeleteResponse",
		"FunctionTypeAll" => "FunctionTypeAll",
		"FunctionTypeAllInput" => "FunctionTypeAllInput",
		"FunctionTypeAllResponse" => "FunctionTypeAllResponse",
		"FunctionTypeAllOutput" => "FunctionTypeAllOutput",
		"FunctionReasonAll" => "FunctionReasonAll",
		"FunctionReasonAllInput" => "FunctionReasonAllInput",
		"FunctionReasonAllResponse" => "FunctionReasonAllResponse",
		"FunctionReasonAllOutput" => "FunctionReasonAllOutput",
		"DegreeUpdate" => "DegreeUpdate",
		"Degree" => "Degree",
		"DegreeUpdateResponse" => "DegreeUpdateResponse",
		"MembershipAllPerson" => "MembershipAllPerson",
		"MembershipAllPersonInput" => "MembershipAllPersonInput",
		"MembershipAllPersonResponse" => "MembershipAllPersonResponse",
		"MembershipAllOutput" => "MembershipAllOutput",
		"PersonRegistrationAllPerson" => "PersonRegistrationAllPerson",
		"PersonRegistrationAllPersonInput" => "PersonRegistrationAllPersonInput",
		"PersonRegistrationAllPersonResponse" => "PersonRegistrationAllPersonResponse",
		"PersonRegistrationAllOutput" => "PersonRegistrationAllOutput",
		"PersonDetailSecurityCode" => "PersonDetailSecurityCode",
		"PersonDetailSecurityCodeInput" => "PersonDetailSecurityCodeInput",
		"PersonDetailSecurityCodeResponse" => "PersonDetailSecurityCodeResponse",
		"PersonDetailSecurityCodeOutput" => "PersonDetailSecurityCodeOutput",
		"StatementEntryAllTotals" => "StatementEntryAllTotals",
		"StatementEntryAllTotalsInput" => "StatementEntryAllTotalsInput",
		"StatementEntryAllTotalsResponse" => "StatementEntryAllTotalsResponse",
		"StatementEntryAllTotalsOutput" => "StatementEntryAllTotalsOutput",
		"UnitAllRegistry" => "UnitAllRegistry",
		"UnitAllRegistryInput" => "UnitAllRegistryInput",
		"UnitAllRegistryResponse" => "UnitAllRegistryResponse",
		"UnitAllRegistryOutput" => "UnitExt",
		"MeetingDateAll" => "MeetingDateAll",
		"MeetingDateAllInput" => "MeetingDateAllInput",
		"MeetingDateAllResponse" => "MeetingDateAllResponse",
		"MeetingDateAllOutput" => "MeetingDateAllOutput",
		"UnitUpdate" => "UnitUpdate",
		"UnitUpdateUnit" => "UnitUpdateUnit",
		"UnitUpdateResponse" => "UnitUpdateResponse",
		"QualificationUpdate" => "QualificationUpdate",
		"Qualification" => "Qualification",
		"QualificationUpdateResponse" => "QualificationUpdateResponse",
		"PersonRegistrationDelete" => "PersonRegistrationDelete",
		"PersonRegistrationDeleteInput" => "PersonRegistrationDeleteInput",
		"PersonRegistrationDeleteResponse" => "PersonRegistrationDeleteResponse",
		"PersonAllExport" => "PersonAllExport",
		"PersonAllExportInput" => "PersonAllExportInput",
		"PersonAllExportResponse" => "PersonAllExportResponse",
		"PersonAllExportOutput" => "PersonAllExportOutput",
		"FunctionAllRegistry" => "FunctionAllRegistry",
		"FunctionAllRegistryInput" => "FunctionAllRegistryInput",
		"FunctionAllRegistryResponse" => "FunctionAllRegistryResponse",
		"FunctionAllRegistryOutput" => "FunctionAllRegistryOutput",
		"AdvertisingCategoryDelete" => "AdvertisingCategoryDelete",
		"AdvertisingCategoryDeleteInput" => "AdvertisingCategoryDeleteInput",
		"AdvertisingCategoryDeleteResponse" => "AdvertisingCategoryDeleteResponse",
		"PersonAllUstredi" => "PersonAllUstredi",
		"PersonAllUstrediInput" => "PersonAllUstrediInput",
		"PersonAllUstrediResponse" => "PersonAllUstrediResponse",
		"PersonAllUstrediOutput" => "PersonAllUstrediOutput",
		"UnitMistakeReportDelete" => "UnitMistakeReportDelete",
		"UnitMistakeReportDeleteInput" => "UnitMistakeReportDeleteInput",
		"UnitMistakeReportDeleteResponse" => "UnitMistakeReportDeleteResponse",
		"UnitContactDelete" => "UnitContactDelete",
		"UnitContactDeleteInput" => "UnitContactDeleteInput",
		"UnitContactDeleteResponse" => "UnitContactDeleteResponse",
		"StatementDelete" => "StatementDelete",
		"StatementDeleteInput" => "StatementDeleteInput",
		"StatementDeleteResponse" => "StatementDeleteResponse",
		"OccupationDelete" => "OccupationDelete",
		"OccupationDeleteInput" => "OccupationDeleteInput",
		"OccupationDeleteResponse" => "OccupationDeleteResponse",
		"FunctionAll" => "FunctionAll",
		"FunctionAllInput" => "FunctionAllInput",
		"FunctionAllResponse" => "FunctionAllResponse",
		"FunctionAllOutput" => "FunctionAllOutput",
		"DegreeInsert" => "DegreeInsert",
		"DegreeInsertResponse" => "DegreeInsertResponse",
		"DegreeInsertOutput" => "DegreeInsertOutput",
		"PersonMistakeReportInsert" => "PersonMistakeReportInsert",
		"PersonMistakeReport" => "PersonMistakeReport",
		"PersonMistakeReportInsertResponse" => "PersonMistakeReportInsertResponse",
		"PersonMistakeReportInsertOutput" => "PersonMistakeReportInsertOutput",
		"UnitAllUnit" => "UnitAllUnit",
		"UnitAllUnitInput" => "UnitAllUnitInput",
		"UnitAllUnitResponse" => "UnitAllUnitResponse",
		"UnitAllUnitOutput" => "UnitAllUnitOutput",
		"AlignmentAll" => "AlignmentAll",
		"AlignmentAllInput" => "AlignmentAllInput",
		"AlignmentAllResponse" => "AlignmentAllResponse",
		"AlignmentAllOutput" => "AlignmentAllOutput",
		"PersonAllEventCampMulti" => "PersonAllEventCampMulti",
		"PersonAllEventCampMultiInput" => "PersonAllEventCampMultiInput",
		"PersonAllEventCampMultiResponse" => "PersonAllEventCampMultiResponse",
		"PersonAllEventCampMultiOutput" => "PersonAllEventCampMultiOutput",
		"UnitDetail" => "UnitDetail",
		"UnitDetailInput" => "UnitDetailInput",
		"UnitDetailResponse" => "UnitDetailResponse",
                "UnitDetailResult" => "UnitDetailResult",
		"RealtyUpdate" => "RealtyUpdate",
		"Realty" => "Realty",
		"RealtyUpdateResponse" => "RealtyUpdateResponse",
		"QualificationInsert" => "QualificationInsert",
		"QualificationInsertResponse" => "QualificationInsertResponse",
		"QualificationInsertOutput" => "QualificationInsertOutput",
		"QualificationDetail" => "QualificationDetail",
		"QualificationDetailInput" => "QualificationDetailInput",
		"QualificationDetailResponse" => "QualificationDetailResponse",
		"EducationAll" => "EducationAll",
		"EducationAllInput" => "EducationAllInput",
		"EducationAllResponse" => "EducationAllResponse",
		"EducationAllOutput" => "EducationAllOutput",
		"FunctionUpdateHistory" => "FunctionUpdateHistory",
		"FunctionUpdateHistoryResponse" => "FunctionUpdateHistoryResponse",
		"PersonAllHelpdesk" => "PersonAllHelpdesk",
		"PersonAllHelpdeskInput" => "PersonAllHelpdeskInput",
		"PersonAllHelpdeskResponse" => "PersonAllHelpdeskResponse",
		"PersonAllHelpdeskOutput" => "PersonAllHelpdeskOutput",
		"MeetingDateUpdate" => "MeetingDateUpdate",
		"MeetingDate" => "MeetingDate",
		"MeetingDateUpdateResponse" => "MeetingDateUpdateResponse",
		"UnitTypeAll" => "UnitTypeAll",
		"UnitTypeAllInput" => "UnitTypeAllInput",
		"UnitTypeAllResponse" => "UnitTypeAllResponse",
		"UnitTypeAllOutput" => "UnitTypeAllOutput",
		"PersonUpdate" => "PersonUpdate",
		"Person" => "Person",
		"PersonUpdateResponse" => "PersonUpdateResponse",
		"DegreeAll" => "DegreeAll",
		"DegreeAllInput" => "DegreeAllInput",
		"DegreeAllResponse" => "DegreeAllResponse",
		"DegreeAllOutput" => "DegreeAllOutput",
		"UnitDetailRegistry" => "UnitDetailRegistry",
		"UnitDetailRegistryInput" => "UnitDetailRegistryInput",
		"UnitDetailRegistryResponse" => "UnitDetailRegistryResponse",
		"UnitDetailRegistryOutput" => "UnitExt",
		"PersonPhoto" => "PersonPhoto",
		"PersonPhotoInput" => "PersonPhotoInput",
		"PersonPhotoResponse" => "PersonPhotoResponse",
		"PersonPhotoOutput" => "PersonPhotoOutput",
		"AdvertisingUpdate" => "AdvertisingUpdate",
		"Advertising" => "Advertising",
		"AdvertisingUpdateResponse" => "AdvertisingUpdateResponse",
		"AdvertisingCategoryAll" => "AdvertisingCategoryAll",
		"AdvertisingCategoryAllInput" => "AdvertisingCategoryAllInput",
		"AdvertisingCategoryAllResponse" => "AdvertisingCategoryAllResponse",
		"AdvertisingCategoryAllOutput" => "AdvertisingCategoryAllOutput",
		"AccountUpdate" => "AccountUpdate",
		"Account" => "Account",
		"AccountUpdateResponse" => "AccountUpdateResponse",
		"StatementEntryUpdate" => "StatementEntryUpdate",
		"StatementEntry" => "StatementEntry",
		"StatementEntryUpdateResponse" => "StatementEntryUpdateResponse",
		"StatementAll" => "StatementAll",
		"StatementAllInput" => "StatementAllInput",
		"StatementAllResponse" => "StatementAllResponse",
		"StatementAllOutput" => "StatementAllOutput",
		"SexAll" => "SexAll",
		"SexAllInput" => "SexAllInput",
		"SexAllResponse" => "SexAllResponse",
		"SexAllOutput" => "SexAllOutput",
		"RealtyInsert" => "RealtyInsert",
		"RealtyInsertResponse" => "RealtyInsertResponse",
		"RealtyInsertOutput" => "RealtyInsertOutput",
		"RealtyDetail" => "RealtyDetail",
		"RealtyDetailInput" => "RealtyDetailInput",
		"RealtyDetailResponse" => "RealtyDetailResponse",
		"FunctionTypeDelete" => "FunctionTypeDelete",
		"FunctionTypeDeleteInput" => "FunctionTypeDeleteInput",
		"FunctionTypeDeleteResponse" => "FunctionTypeDeleteResponse",
		"PersonParseIdentificationCode" => "PersonParseIdentificationCode",
		"PersonParseIdentificationCodeInput" => "PersonParseIdentificationCodeInput",
		"PersonParseIdentificationCodeResponse" => "PersonParseIdentificationCodeResponse",
		"PersonParseIdentificationCodeOutput" => "PersonParseIdentificationCodeOutput",
		"PersonAllLogin" => "PersonAllLogin",
		"PersonAllLoginInput" => "PersonAllLoginInput",
		"PersonAllLoginResponse" => "PersonAllLoginResponse",
		"PersonAllLoginOutput" => "PersonAllLoginOutput",
		"RequestAll" => "RequestAll",
		"RequestAllInput" => "RequestAllInput",
		"RequestAllResponse" => "RequestAllResponse",
		"RequestAllOutput" => "RequestAllOutput",
		"PersonDetailIdentificationCode" => "PersonDetailIdentificationCode",
		"PersonDetailIdentificationCodeInput" => "PersonDetailIdentificationCodeInput",
		"PersonDetailIdentificationCodeResponse" => "PersonDetailIdentificationCodeResponse",
		"PersonDetailIdentificationCodeOutput" => "PersonDetailIdentificationCodeOutput",
		"StatementErrors" => "StatementErrors",
		"StatementErrorsInput" => "StatementErrorsInput",
		"StatementErrorsResponse" => "StatementErrorsResponse",
		"StatementErrorsOutput" => "StatementErrorsOutput",
		"MeetingDateInsert" => "MeetingDateInsert",
		"MeetingDateInsertResponse" => "MeetingDateInsertResponse",
		"MeetingDateInsertOutput" => "MeetingDateInsertOutput",
		"MeetingDateDetail" => "MeetingDateDetail",
		"MeetingDateDetailInput" => "MeetingDateDetailInput",
		"MeetingDateDetailResponse" => "MeetingDateDetailResponse",
		"PersonDetail" => "PersonDetail",
		"PersonDetailInput" => "PersonDetailInput",
		"PersonDetailResponse" => "PersonDetailResponse",
		"PersonInsert" => "PersonInsert",
		"PersonInsertResponse" => "PersonInsertResponse",
		"PersonInsertOutput" => "PersonInsertOutput",
		"PersonContactUpdate" => "PersonContactUpdate",
		"PersonContact" => "PersonContact",
		"PersonContactUpdateResponse" => "PersonContactUpdateResponse",
		"EducationDelete" => "EducationDelete",
		"EducationDeleteInput" => "EducationDeleteInput",
		"EducationDeleteResponse" => "EducationDeleteResponse",
		"FunctionAllPerson" => "FunctionAllPerson",
		"FunctionAllPersonInput" => "FunctionAllPersonInput",
		"FunctionAllPersonResponse" => "FunctionAllPersonResponse",
		"EducatationSeminaryDelete" => "EducatationSeminaryDelete",
		"EducatationSeminaryDeleteInput" => "EducatationSeminaryDeleteInput",
		"EducatationSeminaryDeleteResponse" => "EducatationSeminaryDeleteResponse",
		"AdvertisingDetail" => "AdvertisingDetail",
		"AdvertisingDetailInput" => "AdvertisingDetailInput",
		"AdvertisingDetailResponse" => "AdvertisingDetailResponse",
		"AccountInsert" => "AccountInsert",
		"AccountInsertResponse" => "AccountInsertResponse",
		"AccountInsertOutput" => "AccountInsertOutput",
		"AccountDetail" => "AccountDetail",
		"AccountDetailInput" => "AccountDetailInput",
		"AccountDetailResponse" => "AccountDetailResponse",
		"UnitRegistrationUpdate" => "UnitRegistrationUpdate",
		"UnitRegistration" => "UnitRegistration",
		"UnitRegistrationUpdateResponse" => "UnitRegistrationUpdateResponse",
		"UnitAll" => "UnitAll",
		"UnitAllInput" => "UnitAllInput",
		"UnitAllResponse" => "UnitAllResponse",
		"UnitAllOutput" => "UnitAllOutput",
		"StatementEntryAll" => "StatementEntryAll",
		"StatementEntryAllInput" => "StatementEntryAllInput",
		"StatementEntryAllResponse" => "StatementEntryAllResponse",
		"StatementEntryAllOutput" => "StatementEntryAllOutput",
		"OfferUpdate" => "OfferUpdate",
		"Offer" => "Offer",
		"OfferUpdateResponse" => "OfferUpdateResponse",
		"QualificationInsertHistory" => "QualificationInsertHistory",
		"QualificationInsertHistoryResponse" => "QualificationInsertHistoryResponse",
		"QualificationInsertHistoryOutput" => "QualificationInsertHistoryOutput",
		"MistakeDetail" => "MistakeDetail",
		"MistakeDetailInput" => "MistakeDetailInput",
		"MistakeDetailResponse" => "MistakeDetailResponse",
		"MistakeDetailOutput" => "MistakeDetailOutput",
		"EducatationSeminaryAll" => "EducatationSeminaryAll",
		"EducatationSeminaryAllInput" => "EducatationSeminaryAllInput",
		"EducatationSeminaryAllResponse" => "EducatationSeminaryAllResponse",
		"EducatationSeminaryAllOutput" => "EducatationSeminaryAllOutput",
		"ContactTypeAll" => "ContactTypeAll",
		"ContactTypeAllInput" => "ContactTypeAllInput",
		"ContactTypeAllResponse" => "ContactTypeAllResponse",
		"ContactTypeAllOutput" => "ContactTypeAllOutput",
		"UnitContactUpdate" => "UnitContactUpdate",
		"UnitContact" => "UnitContact",
		"UnitContactUpdateResponse" => "UnitContactUpdateResponse",
		"RegistrationCategoryInsert" => "RegistrationCategoryInsert",
		"RegistrationCategory" => "RegistrationCategory",
		"RegistrationCategoryInsertResponse" => "RegistrationCategoryInsertResponse",
		"RegistrationCategoryInsertOutput" => "RegistrationCategoryInsertOutput",
		"PersonContactInsert" => "PersonContactInsert",
		"PersonContactInsertResponse" => "PersonContactInsertResponse",
		"PersonContactInsertOutput" => "PersonContactInsertOutput",
		"OfferInsert" => "OfferInsert",
		"OfferInsertResponse" => "OfferInsertResponse",
		"OfferInsertOutput" => "OfferInsertOutput",
		"UnitRegistrationSummary" => "UnitRegistrationSummary",
		"UnitRegistrationSummaryInput" => "UnitRegistrationSummaryInput",
		"UnitRegistrationSummaryResponse" => "UnitRegistrationSummaryResponse",
		"UnitRegistrationSummaryOutput" => "UnitRegistrationSummaryOutput",
		"UnitCancelTypeAll" => "UnitCancelTypeAll",
		"UnitCancelTypeAllInput" => "UnitCancelTypeAllInput",
		"UnitCancelTypeAllResponse" => "UnitCancelTypeAllResponse",
		"UnitCancelTypeAllOutput" => "UnitCancelTypeAllOutput",
		"AdvertisingCategoryUpdate" => "AdvertisingCategoryUpdate",
		"AdvertisingCategory" => "AdvertisingCategory",
		"AdvertisingCategoryUpdateResponse" => "AdvertisingCategoryUpdateResponse",
		"UnitTreeUpdate" => "UnitTreeUpdate",
		"UnitTree" => "UnitTree",
		"UnitTreeUpdateResponse" => "UnitTreeUpdateResponse",
		"UnitRegistrationInsert" => "UnitRegistrationInsert",
		"UnitRegistrationInsertResponse" => "UnitRegistrationInsertResponse",
		"UnitRegistrationInsertOutput" => "UnitRegistrationInsertOutput",
		"UnitRegistrationDetail" => "UnitRegistrationDetail",
		"UnitRegistrationDetailInput" => "UnitRegistrationDetailInput",
		"UnitRegistrationDetailResponse" => "UnitRegistrationDetailResponse",
		"StatementUpdate" => "StatementUpdate",
		"Statement" => "Statement",
		"StatementUpdateResponse" => "StatementUpdateResponse",
		"RealtyTypeAll" => "RealtyTypeAll",
		"RealtyTypeAllInput" => "RealtyTypeAllInput",
		"RealtyTypeAllResponse" => "RealtyTypeAllResponse",
		"RealtyTypeAllOutput" => "RealtyTypeAllOutput",
		"OccupationUpdate" => "OccupationUpdate",
		"Occupation" => "Occupation",
		"OccupationUpdateResponse" => "OccupationUpdateResponse",
		"MembershipUpdate" => "MembershipUpdate",
		"Membership" => "Membership",
		"MembershipUpdateResponse" => "MembershipUpdateResponse",
		"PersonRegistrationAll" => "PersonRegistrationAll",
		"PersonRegistrationAllInput" => "PersonRegistrationAllInput",
		"PersonRegistrationAllResponse" => "PersonRegistrationAllResponse",
		"FunctionDeleteHistory" => "FunctionDeleteHistory",
		"FunctionDeleteHistoryInput" => "FunctionDeleteHistoryInput",
		"FunctionDeleteHistoryResponse" => "FunctionDeleteHistoryResponse",
		"UnitTreeRenew" => "UnitTreeRenew",
		"UnitTreeRenewResponse" => "UnitTreeRenewResponse",
		"UnitLogo" => "UnitLogo",
		"UnitLogoInput" => "UnitLogoInput",
		"UnitLogoResponse" => "UnitLogoResponse",
		"UnitLogoOutput" => "UnitLogoOutput",
		"AssuranceAll" => "AssuranceAll",
		"AssuranceAllInput" => "AssuranceAllInput",
		"AssuranceAllResponse" => "AssuranceAllResponse",
		"AssuranceAllOutput" => "AssuranceAllOutput",
		"AdvertisingSummary" => "AdvertisingSummary",
		"AdvertisingSummaryInput" => "AdvertisingSummaryInput",
		"AdvertisingSummaryResponse" => "AdvertisingSummaryResponse",
		"AdvertisingSummaryOutput" => "AdvertisingSummaryOutput",
		"AdvertisingCategoryInsert" => "AdvertisingCategoryInsert",
		"AdvertisingCategoryInsertResponse" => "AdvertisingCategoryInsertResponse",
		"AdvertisingCategoryInsertOutput" => "AdvertisingCategoryInsertOutput",
		"UnitInsertUnit" => "UnitInsertUnit",
		"UnitInsertUnitResponse" => "UnitInsertUnitResponse",
		"UnitInsertUnitOutput" => "UnitInsertUnitOutput",
		"UnitContactInsert" => "UnitContactInsert",
		"UnitContactInsertResponse" => "UnitContactInsertResponse",
		"UnitContactInsertOutput" => "UnitContactInsertOutput",
		"StatementInsert" => "StatementInsert",
		"StatementInsertResponse" => "StatementInsertResponse",
		"StatementInsertOutput" => "StatementInsertOutput",
		"QualificationAll" => "QualificationAll",
		"QualificationAllInput" => "QualificationAllInput",
		"QualificationAllResponse" => "QualificationAllResponse",
		"QualificationAllOutput" => "QualificationAllOutput",
		"PersonAll" => "PersonAll",
		"PersonAllInput" => "PersonAllInput",
		"PersonAllResponse" => "PersonAllResponse",
		"PersonAllOutput" => "PersonAllOutput",
		"FunctionUpdate" => "FunctionUpdate",
		"FunctionUpdateResponse" => "FunctionUpdateResponse",
		"DegreeDelete" => "DegreeDelete",
		"DegreeDeleteInput" => "DegreeDeleteInput",
		"DegreeDeleteResponse" => "DegreeDeleteResponse",
		"PersonRegistrationInsert" => "PersonRegistrationInsert",
		"PersonRegistrationInsertInput" => "PersonRegistrationInsertInput",
		"PersonRegistrationInsertResponse" => "PersonRegistrationInsertResponse",
		"PersonRegistrationInsertOutput" => "PersonRegistrationInsertOutput",
		"PersonMistakeReportDelete" => "PersonMistakeReportDelete",
		"PersonMistakeReportDeleteInput" => "PersonMistakeReportDeleteInput",
		"PersonMistakeReportDeleteResponse" => "PersonMistakeReportDeleteResponse",
		"QualificationUpdateHistory" => "QualificationUpdateHistory",
		"QualificationUpdateHistoryResponse" => "QualificationUpdateHistoryResponse",
		"StatementComputeIsError" => "StatementComputeIsError",
		"StatementComputeIsErrorResponse" => "StatementComputeIsErrorResponse",
		"PersonOtherUpdate" => "PersonOtherUpdate",
		"PersonOther" => "PersonOther",
		"PersonOtherUpdateResponse" => "PersonOtherUpdateResponse",
		"AdvertisingCategoryDetail" => "AdvertisingCategoryDetail",
		"AdvertisingCategoryDetailInput" => "AdvertisingCategoryDetailInput",
		"AdvertisingCategoryDetailResponse" => "AdvertisingCategoryDetailResponse",
		"UnitTreeReasonAll" => "UnitTreeReasonAll",
		"UnitTreeReasonAllInput" => "UnitTreeReasonAllInput",
		"UnitTreeReasonAllResponse" => "UnitTreeReasonAllResponse",
		"UnitTreeReasonAllOutput" => "UnitTreeReasonAllOutput",
		"UnitTreeDetail" => "UnitTreeDetail",
		"UnitTreeDetailInput" => "UnitTreeDetailInput",
		"UnitTreeDetailResponse" => "UnitTreeDetailResponse",
		"UnitMistakeReportInsert" => "UnitMistakeReportInsert",
		"UnitMistakeReport" => "UnitMistakeReport",
		"UnitMistakeReportInsertResponse" => "UnitMistakeReportInsertResponse",
		"UnitMistakeReportInsertOutput" => "UnitMistakeReportInsertOutput",
		"UnitContactAll" => "UnitContactAll",
		"UnitContactAllInput" => "UnitContactAllInput",
		"UnitContactAllResponse" => "UnitContactAllResponse",
		"UnitContactAllOutput" => "UnitContact",
		"StatementDetail" => "StatementDetail",
		"StatementDetailInput" => "StatementDetailInput",
		"StatementDetailResponse" => "StatementDetailResponse",
		"OccupationInsert" => "OccupationInsert",
		"OccupationInsertResponse" => "OccupationInsertResponse",
		"OccupationInsertOutput" => "OccupationInsertOutput",
		"OccupationDetail" => "OccupationDetail",
		"OccupationDetailInput" => "OccupationDetailInput",
		"OccupationDetailResponse" => "OccupationDetailResponse",
		"MembershipReasonAll" => "MembershipReasonAll",
		"MembershipReasonAllInput" => "MembershipReasonAllInput",
		"MembershipReasonAllResponse" => "MembershipReasonAllResponse",
		"MembershipReasonAllOutput" => "MembershipReasonAllOutput",
		"MembershipInsert" => "MembershipInsert",
		"MembershipInsertResponse" => "MembershipInsertResponse",
		"MembershipInsertOutput" => "MembershipInsertOutput",
		"MembershipDetail" => "MembershipDetail",
		"MembershipDetailInput" => "MembershipDetailInput",
		"MembershipDetailResponse" => "MembershipDetailResponse",
		"RegistrationCategoryCopyFromParentUnit" => "RegistrationCategoryCopyFromParentUnit",
		"RegistrationCategoryCopyFromParentUnitInput" => "RegistrationCategoryCopyFromParentUnitInput",
		"RegistrationCategoryCopyFromParentUnitResponse" => "RegistrationCategoryCopyFromParentUnitResponse",
		"RequestUpdate" => "RequestUpdate",
		"RequestUpdateResponse" => "RequestUpdateResponse",
		"UnitRegistrationMembers" => "UnitRegistrationMembers",
		"UnitRegistrationMembersInput" => "UnitRegistrationMembersInput",
		"UnitRegistrationMembersResponse" => "UnitRegistrationMembersResponse",
		"UnitRegistrationMembersOutput" => "UnitRegistrationMembersOutput",
		"UnitRegistrationMembersUnits" => "UnitRegistrationMembersUnits",
		"UnitRegistrationMembersAge" => "UnitRegistrationMembersAge",
		"UnitRegistrationMembersCategory" => "UnitRegistrationMembersCategory",
		"UnitDetailMembersRegistry" => "UnitDetailMembersRegistry",
		"UnitDetailMembersRegistryInput" => "UnitDetailMembersRegistryInput",
		"UnitDetailMembersRegistryResponse" => "UnitDetailMembersRegistryResponse",
		"UnitDetailMembersRegistryOutput" => "MembersCount",
		"PersonAllEventCongressFunction" => "PersonAllEventCongressFunction",
		"PersonAllEventCongressFunctionInput" => "PersonAllEventCongressFunctionInput",
		"PersonAllEventCongressFunctionResponse" => "PersonAllEventCongressFunctionResponse",
		"PersonAllEventCongressFunctionOutput" => "PersonAllEventCongressFunctionOutput",
		"UnitAllCamp" => "UnitAllCamp",
		"UnitAllCampInput" => "UnitAllCampInput",
		"UnitAllCampResponse" => "UnitAllCampResponse",
		"UnitAllCampOutput" => "UnitAllCampOutput",
		"PersonAllEventCamp" => "PersonAllEventCamp",
		"PersonAllEventCampInput" => "PersonAllEventCampInput",
		"PersonAllEventCampResponse" => "PersonAllEventCampResponse",
		"PersonAllEventCampOutput" => "PersonAllEventCampOutput",
		"MembershipAll" => "MembershipAll",
		"MembershipAllInput" => "MembershipAllInput",
		"MembershipAllResponse" => "MembershipAllResponse",
		"FunctionTypeUpdate" => "FunctionTypeUpdate",
		"FunctionTypeUpdateResponse" => "FunctionTypeUpdateResponse",
		"FunctionInsert" => "FunctionInsert",
		"FunctionInsertResponse" => "FunctionInsertResponse",
		"FunctionInsertOutput" => "FunctionInsertOutput",
		"FunctionDetail" => "FunctionDetail",
		"FunctionDetailInput" => "FunctionDetailInput",
		"FunctionDetailResponse" => "FunctionDetailResponse",
		"FunctionDetailOutput" => "FunctionDetailOutput",
		"EducationUpdate" => "EducationUpdate",
		"EducationUpdateResponse" => "EducationUpdateResponse",
		"MembershipRenew" => "MembershipRenew",
		"MembershipRenewResponse" => "MembershipRenewResponse",
		"StatementAllChild" => "StatementAllChild",
		"StatementAllChildInput" => "StatementAllChildInput",
		"StatementAllChildResponse" => "StatementAllChildResponse",
		"StatementAllChildOutput" => "StatementAllChildOutput",
		"UnitCancelInsert" => "UnitCancelInsert",
		"UnitCancel" => "UnitCancel",
		"UnitCancelInsertResponse" => "UnitCancelInsertResponse",
		"UnitCancelInsertOutput" => "UnitCancelInsertOutput",
		"PersonOtherDetail" => "PersonOtherDetail",
		"PersonOtherDetailInput" => "PersonOtherDetailInput",
		"PersonOtherDetailResponse" => "PersonOtherDetailResponse",
		"UnitTreeAll" => "UnitTreeAll",
		"UnitTreeAllInput" => "UnitTreeAllInput",
		"UnitTreeAllResponse" => "UnitTreeAllResponse",
		"UnitTreeAllOutput" => "UnitTreeAllOutput",
		"StatementEntryTypeAll" => "StatementEntryTypeAll",
		"StatementEntryTypeAllInput" => "StatementEntryTypeAllInput",
		"StatementEntryTypeAllResponse" => "StatementEntryTypeAllResponse",
		"StatementEntryTypeAllOutput" => "StatementEntryTypeAllOutput",
		"MembershipTypeAll" => "MembershipTypeAll",
		"MembershipTypeAllInput" => "MembershipTypeAllInput",
		"MembershipTypeAllResponse" => "MembershipTypeAllResponse",
		"MembershipTypeAllOutput" => "MembershipTypeAllOutput",
		"UnitRegistrationReport" => "UnitRegistrationReport",
		"UnitRegistrationReportInput" => "UnitRegistrationReportInput",
		"UnitRegistrationReportResponse" => "UnitRegistrationReportResponse",
		"UnitRegistrationReportOutput" => "UnitRegistrationReportOutput",
		"guid" => "guid",
	);

	/**
	 * Constructor using wsdl location and options array
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl=organizationUnitWsdlAdress, $options=array()) {
		foreach(self::$classmap as $wsdlClassName => $phpClassName) {
		    if(!isset($options['classmap'][$wsdlClassName])) {
		        $options['classmap'][$wsdlClassName] = $phpClassName;
		    }
		}
		parent::__construct($wsdl, $options);
	}

	/**
	 * Checks if an argument list matches against a valid argument type list
	 * @param array $arguments The argument list to check
	 * @param array $validParameters A list of valid argument types
	 * @return boolean true if arguments match against validParameters
	 * @throws Exception invalid function signature message
	 */
	public function _checkArguments($arguments, $validParameters) {
		$variables = "";
		foreach ($arguments as $arg) {
		    $type = gettype($arg);
		    if ($type == "object") {
		        $type = get_class($arg);
		    }
		    $variables .= "(".$type.")";
		}
		if (!in_array($variables, $validParameters)) {
		    throw new Exception("Invalid parameter types: ".str_replace(")(", ", ", $variables));
		}
		return true;
	}

	/**
	 * Service Call: RequestStateAll
	 * Parameter options:
	 * (RequestStateAll) parameters
	 * (RequestStateAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RequestStateAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function RequestStateAll($mixed = null) {
		$validParameters = array(
			"(RequestStateAll)",
			"(RequestStateAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RequestStateAll", $args);
	}


	/**
	 * Service Call: RequestInsert
	 * Parameter options:
	 * (RequestInsert) parameters
	 * (RequestInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RequestInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function RequestInsert($mixed = null) {
		$validParameters = array(
			"(RequestInsert)",
			"(RequestInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RequestInsert", $args);
	}


	/**
	 * Service Call: RequestDetail
	 * Parameter options:
	 * (RequestDetail) parameters
	 * (RequestDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RequestDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function RequestDetail($mixed = null) {
		$validParameters = array(
			"(RequestDetail)",
			"(RequestDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RequestDetail", $args);
	}


	/**
	 * Service Call: UnitCancelAll
	 * Parameter options:
	 * (UnitCancelAll) parameters
	 * (UnitCancelAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitCancelAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitCancelAll($mixed = null) {
		$validParameters = array(
			"(UnitCancelAll)",
			"(UnitCancelAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitCancelAll", $args);
	}


	/**
	 * Service Call: MeetingDateDelete
	 * Parameter options:
	 * (MeetingDateDelete) parameters
	 * (MeetingDateDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MeetingDateDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function MeetingDateDelete($mixed = null) {
		$validParameters = array(
			"(MeetingDateDelete)",
			"(MeetingDateDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MeetingDateDelete", $args);
	}


	/**
	 * Service Call: EducatationSeminaryUpdate
	 * Parameter options:
	 * (EducatationSeminaryUpdate) parameters
	 * (EducatationSeminaryUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return EducatationSeminaryUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function EducatationSeminaryUpdate($mixed = null) {
		$validParameters = array(
			"(EducatationSeminaryUpdate)",
			"(EducatationSeminaryUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("EducatationSeminaryUpdate", $args);
	}


	/**
	 * Service Call: AlignmentUpdate
	 * Parameter options:
	 * (AlignmentUpdate) parameters
	 * (AlignmentUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AlignmentUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function AlignmentUpdate($mixed = null) {
		$validParameters = array(
			"(AlignmentUpdate)",
			"(AlignmentUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AlignmentUpdate", $args);
	}


	/**
	 * Service Call: QualificationTypeAll
	 * Parameter options:
	 * (QualificationTypeAll) parameters
	 * (QualificationTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return QualificationTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function QualificationTypeAll($mixed = null) {
		$validParameters = array(
			"(QualificationTypeAll)",
			"(QualificationTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("QualificationTypeAll", $args);
	}


	/**
	 * Service Call: PersonContactAll
	 * Parameter options:
	 * (PersonContactAll) parameters
	 * (PersonContactAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonContactAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonContactAll($mixed = null) {
		$validParameters = array(
			"(PersonContactAll)",
			"(PersonContactAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonContactAll", $args);
	}


	/**
	 * Service Call: FunctionTypeInsert
	 * Parameter options:
	 * (FunctionTypeInsert) parameters
	 * (FunctionTypeInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionTypeInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionTypeInsert($mixed = null) {
		$validParameters = array(
			"(FunctionTypeInsert)",
			"(FunctionTypeInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionTypeInsert", $args);
	}


	/**
	 * Service Call: FunctionTypeDetail
	 * Parameter options:
	 * (FunctionTypeDetail) parameters
	 * (FunctionTypeDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionTypeDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionTypeDetail($mixed = null) {
		$validParameters = array(
			"(FunctionTypeDetail)",
			"(FunctionTypeDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionTypeDetail", $args);
	}


	/**
	 * Service Call: EducationInsert
	 * Parameter options:
	 * (EducationInsert) parameters
	 * (EducationInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return EducationInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function EducationInsert($mixed = null) {
		$validParameters = array(
			"(EducationInsert)",
			"(EducationInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("EducationInsert", $args);
	}


	/**
	 * Service Call: DegreeTypeAll
	 * Parameter options:
	 * (DegreeTypeAll) parameters
	 * (DegreeTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return DegreeTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function DegreeTypeAll($mixed = null) {
		$validParameters = array(
			"(DegreeTypeAll)",
			"(DegreeTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("DegreeTypeAll", $args);
	}


	/**
	 * Service Call: UnitRegistrationAllChild
	 * Parameter options:
	 * (UnitRegistrationAllChild) parameters
	 * (UnitRegistrationAllChild) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitRegistrationAllChildResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitRegistrationAllChild($mixed = null) {
		$validParameters = array(
			"(UnitRegistrationAllChild)",
			"(UnitRegistrationAllChild)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitRegistrationAllChild", $args);
	}


	/**
	 * Service Call: EducatationSeminaryInsert
	 * Parameter options:
	 * (EducatationSeminaryInsert) parameters
	 * (EducatationSeminaryInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return EducatationSeminaryInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function EducatationSeminaryInsert($mixed = null) {
		$validParameters = array(
			"(EducatationSeminaryInsert)",
			"(EducatationSeminaryInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("EducatationSeminaryInsert", $args);
	}


	/**
	 * Service Call: AccountDelete
	 * Parameter options:
	 * (AccountDelete) parameters
	 * (AccountDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AccountDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function AccountDelete($mixed = null) {
		$validParameters = array(
			"(AccountDelete)",
			"(AccountDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AccountDelete", $args);
	}


	/**
	 * Service Call: AccountAll
	 * Parameter options:
	 * (AccountAll) parameters
	 * (AccountAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AccountAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function AccountAll($mixed = null) {
		$validParameters = array(
			"(AccountAll)",
			"(AccountAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AccountAll", $args);
	}


	/**
	 * Service Call: PersonAllPublic
	 * Parameter options:
	 * (PersonAllPublic) parameters
	 * (PersonAllPublic) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonAllPublicResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonAllPublic($mixed = null) {
		$validParameters = array(
			"(PersonAllPublic)",
			"(PersonAllPublic)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonAllPublic", $args);
	}


	/**
	 * Service Call: PersonUpdateUser
	 * Parameter options:
	 * (PersonUpdateUser) parameters
	 * (PersonUpdateUser) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonUpdateUserResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonUpdateUser($mixed = null) {
		$validParameters = array(
			"(PersonUpdateUser)",
			"(PersonUpdateUser)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonUpdateUser", $args);
	}


	/**
	 * Service Call: UnitRegistrationCheck
	 * Parameter options:
	 * (UnitRegistrationCheck) parameters
	 * (UnitRegistrationCheck) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitRegistrationCheckResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitRegistrationCheck($mixed = null) {
		$validParameters = array(
			"(UnitRegistrationCheck)",
			"(UnitRegistrationCheck)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitRegistrationCheck", $args);
	}


	/**
	 * Service Call: TroopArtAll
	 * Parameter options:
	 * (TroopArtAll) parameters
	 * (TroopArtAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return TroopArtAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function TroopArtAll($mixed = null) {
		$validParameters = array(
			"(TroopArtAll)",
			"(TroopArtAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("TroopArtAll", $args);
	}


	/**
	 * Service Call: StatementTypeAll
	 * Parameter options:
	 * (StatementTypeAll) parameters
	 * (StatementTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementTypeAll($mixed = null) {
		$validParameters = array(
			"(StatementTypeAll)",
			"(StatementTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementTypeAll", $args);
	}


	/**
	 * Service Call: RegistrationCategoryAll
	 * Parameter options:
	 * (RegistrationCategoryAll) parameters
	 * (RegistrationCategoryAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RegistrationCategoryAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function RegistrationCategoryAll($mixed = null) {
		$validParameters = array(
			"(RegistrationCategoryAll)",
			"(RegistrationCategoryAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RegistrationCategoryAll", $args);
	}


	/**
	 * Service Call: RealtyAll
	 * Parameter options:
	 * (RealtyAll) parameters
	 * (RealtyAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RealtyAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function RealtyAll($mixed = null) {
		$validParameters = array(
			"(RealtyAll)",
			"(RealtyAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RealtyAll", $args);
	}


	/**
	 * Service Call: OccupationAll
	 * Parameter options:
	 * (OccupationAll) parameters
	 * (OccupationAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return OccupationAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function OccupationAll($mixed = null) {
		$validParameters = array(
			"(OccupationAll)",
			"(OccupationAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("OccupationAll", $args);
	}


	/**
	 * Service Call: BankDetail
	 * Parameter options:
	 * (BankDetail) parameters
	 * (BankDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return BankDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function BankDetail($mixed = null) {
		$validParameters = array(
			"(BankDetail)",
			"(BankDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("BankDetail", $args);
	}


	/**
	 * Service Call: BankAll
	 * Parameter options:
	 * (BankAll) parameters
	 * (BankAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return BankAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function BankAll($mixed = null) {
		$validParameters = array(
			"(BankAll)",
			"(BankAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("BankAll", $args);
	}


	/**
	 * Service Call: AlignmentInsert
	 * Parameter options:
	 * (AlignmentInsert) parameters
	 * (AlignmentInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AlignmentInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function AlignmentInsert($mixed = null) {
		$validParameters = array(
			"(AlignmentInsert)",
			"(AlignmentInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AlignmentInsert", $args);
	}


	/**
	 * Service Call: AlignmentDetail
	 * Parameter options:
	 * (AlignmentDetail) parameters
	 * (AlignmentDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AlignmentDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function AlignmentDetail($mixed = null) {
		$validParameters = array(
			"(AlignmentDetail)",
			"(AlignmentDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AlignmentDetail", $args);
	}


	/**
	 * Service Call: OfferTypeAll
	 * Parameter options:
	 * (OfferTypeAll) parameters
	 * (OfferTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return OfferTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function OfferTypeAll($mixed = null) {
		$validParameters = array(
			"(OfferTypeAll)",
			"(OfferTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("OfferTypeAll", $args);
	}


	/**
	 * Service Call: OfferAll
	 * Parameter options:
	 * (OfferAll) parameters
	 * (OfferAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return OfferAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function OfferAll($mixed = null) {
		$validParameters = array(
			"(OfferAll)",
			"(OfferAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("OfferAll", $args);
	}


	/**
	 * Service Call: MembershipCategoryAll
	 * Parameter options:
	 * (MembershipCategoryAll) parameters
	 * (MembershipCategoryAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MembershipCategoryAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function MembershipCategoryAll($mixed = null) {
		$validParameters = array(
			"(MembershipCategoryAll)",
			"(MembershipCategoryAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MembershipCategoryAll", $args);
	}


	/**
	 * Service Call: EducationTypeAll
	 * Parameter options:
	 * (EducationTypeAll) parameters
	 * (EducationTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return EducationTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function EducationTypeAll($mixed = null) {
		$validParameters = array(
			"(EducationTypeAll)",
			"(EducationTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("EducationTypeAll", $args);
	}


	/**
	 * Service Call: PersonAllRegistrationCategory
	 * Parameter options:
	 * (PersonAllRegistrationCategory) parameters
	 * (PersonAllRegistrationCategory) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonAllRegistrationCategoryResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonAllRegistrationCategory($mixed = null) {
		$validParameters = array(
			"(PersonAllRegistrationCategory)",
			"(PersonAllRegistrationCategory)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonAllRegistrationCategory", $args);
	}


	/**
	 * Service Call: QualificationDeleteHistory
	 * Parameter options:
	 * (QualificationDeleteHistory) parameters
	 * (QualificationDeleteHistory) parameters
	 * @param mixed,... See function description for parameter options
	 * @return QualificationDeleteHistoryResponse
	 * @throws Exception invalid function signature message
	 */
	public function QualificationDeleteHistory($mixed = null) {
		$validParameters = array(
			"(QualificationDeleteHistory)",
			"(QualificationDeleteHistory)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("QualificationDeleteHistory", $args);
	}


	/**
	 * Service Call: FunctionInsertHistory
	 * Parameter options:
	 * (FunctionInsertHistory) parameters
	 * (FunctionInsertHistory) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionInsertHistoryResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionInsertHistory($mixed = null) {
		$validParameters = array(
			"(FunctionInsertHistory)",
			"(FunctionInsertHistory)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionInsertHistory", $args);
	}


	/**
	 * Service Call: AlignmentTypeAll
	 * Parameter options:
	 * (AlignmentTypeAll) parameters
	 * (AlignmentTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AlignmentTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function AlignmentTypeAll($mixed = null) {
		$validParameters = array(
			"(AlignmentTypeAll)",
			"(AlignmentTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AlignmentTypeAll", $args);
	}


	/**
	 * Service Call: UnitRegistrationAll
	 * Parameter options:
	 * (UnitRegistrationAll) parameters
	 * (UnitRegistrationAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitRegistrationAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitRegistrationAll($mixed = null) {
		$validParameters = array(
			"(UnitRegistrationAll)",
			"(UnitRegistrationAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitRegistrationAll", $args);
	}


	/**
	 * Service Call: RegistrationCategoryDelete
	 * Parameter options:
	 * (RegistrationCategoryDelete) parameters
	 * (RegistrationCategoryDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RegistrationCategoryDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function RegistrationCategoryDelete($mixed = null) {
		$validParameters = array(
			"(RegistrationCategoryDelete)",
			"(RegistrationCategoryDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RegistrationCategoryDelete", $args);
	}


	/**
	 * Service Call: PersonContactDelete
	 * Parameter options:
	 * (PersonContactDelete) parameters
	 * (PersonContactDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonContactDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonContactDelete($mixed = null) {
		$validParameters = array(
			"(PersonContactDelete)",
			"(PersonContactDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonContactDelete", $args);
	}


	/**
	 * Service Call: OfferDelete
	 * Parameter options:
	 * (OfferDelete) parameters
	 * (OfferDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return OfferDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function OfferDelete($mixed = null) {
		$validParameters = array(
			"(OfferDelete)",
			"(OfferDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("OfferDelete", $args);
	}


	/**
	 * Service Call: FunctionTypeAll
	 * Parameter options:
	 * (FunctionTypeAll) parameters
	 * (FunctionTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionTypeAll($mixed = null) {
		$validParameters = array(
			"(FunctionTypeAll)",
			"(FunctionTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionTypeAll", $args);
	}


	/**
	 * Service Call: FunctionReasonAll
	 * Parameter options:
	 * (FunctionReasonAll) parameters
	 * (FunctionReasonAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionReasonAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionReasonAll($mixed = null) {
		$validParameters = array(
			"(FunctionReasonAll)",
			"(FunctionReasonAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionReasonAll", $args);
	}


	/**
	 * Service Call: DegreeUpdate
	 * Parameter options:
	 * (DegreeUpdate) parameters
	 * (DegreeUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return DegreeUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function DegreeUpdate($mixed = null) {
		$validParameters = array(
			"(DegreeUpdate)",
			"(DegreeUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("DegreeUpdate", $args);
	}


	/**
	 * Service Call: MembershipAllPerson
	 * Parameter options:
	 * (MembershipAllPerson) parameters
	 * (MembershipAllPerson) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MembershipAllPersonResponse
	 * @throws Exception invalid function signature message
	 */
	public function MembershipAllPerson($mixed = null) {
		$validParameters = array(
			"(MembershipAllPerson)",
			"(MembershipAllPerson)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MembershipAllPerson", $args);
	}


	/**
	 * Service Call: PersonRegistrationAllPerson
	 * Parameter options:
	 * (PersonRegistrationAllPerson) parameters
	 * (PersonRegistrationAllPerson) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonRegistrationAllPersonResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonRegistrationAllPerson($mixed = null) {
		$validParameters = array(
			"(PersonRegistrationAllPerson)",
			"(PersonRegistrationAllPerson)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonRegistrationAllPerson", $args);
	}


	/**
	 * Service Call: PersonDetailSecurityCode
	 * Parameter options:
	 * (PersonDetailSecurityCode) parameters
	 * (PersonDetailSecurityCode) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonDetailSecurityCodeResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonDetailSecurityCode($mixed = null) {
		$validParameters = array(
			"(PersonDetailSecurityCode)",
			"(PersonDetailSecurityCode)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonDetailSecurityCode", $args);
	}


	/**
	 * Service Call: StatementEntryAllTotals
	 * Parameter options:
	 * (StatementEntryAllTotals) parameters
	 * (StatementEntryAllTotals) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementEntryAllTotalsResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementEntryAllTotals($mixed = null) {
		$validParameters = array(
			"(StatementEntryAllTotals)",
			"(StatementEntryAllTotals)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementEntryAllTotals", $args);
	}


	/**
	 * Service Call: UnitAllRegistry
	 * Parameter options:
	 * (UnitAllRegistry) parameters
	 * (UnitAllRegistry) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitAllRegistryResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitAllRegistry($mixed = null) {
		$validParameters = array(
			"(UnitAllRegistry)",
			"(UnitAllRegistry)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitAllRegistry", $args);
	}


	/**
	 * Service Call: MeetingDateAll
	 * Parameter options:
	 * (MeetingDateAll) parameters
	 * (MeetingDateAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MeetingDateAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function MeetingDateAll($mixed = null) {
		$validParameters = array(
			"(MeetingDateAll)",
			"(MeetingDateAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MeetingDateAll", $args);
	}


	/**
	 * Service Call: UnitUpdate
	 * Parameter options:
	 * (UnitUpdate) parameters
	 * (UnitUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitUpdate($mixed = null) {
		$validParameters = array(
			"(UnitUpdate)",
			"(UnitUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitUpdate", $args);
	}


	/**
	 * Service Call: QualificationUpdate
	 * Parameter options:
	 * (QualificationUpdate) parameters
	 * (QualificationUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return QualificationUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function QualificationUpdate($mixed = null) {
		$validParameters = array(
			"(QualificationUpdate)",
			"(QualificationUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("QualificationUpdate", $args);
	}


	/**
	 * Service Call: PersonRegistrationDelete
	 * Parameter options:
	 * (PersonRegistrationDelete) parameters
	 * (PersonRegistrationDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonRegistrationDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonRegistrationDelete($mixed = null) {
		$validParameters = array(
			"(PersonRegistrationDelete)",
			"(PersonRegistrationDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonRegistrationDelete", $args);
	}


	/**
	 * Service Call: PersonAllExport
	 * Parameter options:
	 * (PersonAllExport) parameters
	 * (PersonAllExport) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonAllExportResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonAllExport($mixed = null) {
		$validParameters = array(
			"(PersonAllExport)",
			"(PersonAllExport)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonAllExport", $args);
	}


	/**
	 * Service Call: FunctionAllRegistry
	 * Parameter options:
	 * (FunctionAllRegistry) parameters
	 * (FunctionAllRegistry) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionAllRegistryResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionAllRegistry($mixed = null) {
		$validParameters = array(
			"(FunctionAllRegistry)",
			"(FunctionAllRegistry)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionAllRegistry", $args);
	}


	/**
	 * Service Call: AdvertisingCategoryDelete
	 * Parameter options:
	 * (AdvertisingCategoryDelete) parameters
	 * (AdvertisingCategoryDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AdvertisingCategoryDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function AdvertisingCategoryDelete($mixed = null) {
		$validParameters = array(
			"(AdvertisingCategoryDelete)",
			"(AdvertisingCategoryDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AdvertisingCategoryDelete", $args);
	}


	/**
	 * Service Call: PersonAllUstredi
	 * Parameter options:
	 * (PersonAllUstredi) parameters
	 * (PersonAllUstredi) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonAllUstrediResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonAllUstredi($mixed = null) {
		$validParameters = array(
			"(PersonAllUstredi)",
			"(PersonAllUstredi)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonAllUstredi", $args);
	}


	/**
	 * Service Call: UnitMistakeReportDelete
	 * Parameter options:
	 * (UnitMistakeReportDelete) parameters
	 * (UnitMistakeReportDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitMistakeReportDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitMistakeReportDelete($mixed = null) {
		$validParameters = array(
			"(UnitMistakeReportDelete)",
			"(UnitMistakeReportDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitMistakeReportDelete", $args);
	}


	/**
	 * Service Call: UnitContactDelete
	 * Parameter options:
	 * (UnitContactDelete) parameters
	 * (UnitContactDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitContactDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitContactDelete($mixed = null) {
		$validParameters = array(
			"(UnitContactDelete)",
			"(UnitContactDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitContactDelete", $args);
	}


	/**
	 * Service Call: StatementDelete
	 * Parameter options:
	 * (StatementDelete) parameters
	 * (StatementDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementDelete($mixed = null) {
		$validParameters = array(
			"(StatementDelete)",
			"(StatementDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementDelete", $args);
	}


	/**
	 * Service Call: OccupationDelete
	 * Parameter options:
	 * (OccupationDelete) parameters
	 * (OccupationDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return OccupationDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function OccupationDelete($mixed = null) {
		$validParameters = array(
			"(OccupationDelete)",
			"(OccupationDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("OccupationDelete", $args);
	}


	/**
	 * Service Call: FunctionAll
	 * Parameter options:
	 * (FunctionAll) parameters
	 * (FunctionAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionAll($mixed = null) {
		$validParameters = array(
			"(FunctionAll)",
			"(FunctionAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionAll", $args);
	}


	/**
	 * Service Call: DegreeInsert
	 * Parameter options:
	 * (DegreeInsert) parameters
	 * (DegreeInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return DegreeInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function DegreeInsert($mixed = null) {
		$validParameters = array(
			"(DegreeInsert)",
			"(DegreeInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("DegreeInsert", $args);
	}


	/**
	 * Service Call: PersonMistakeReportInsert
	 * Parameter options:
	 * (PersonMistakeReportInsert) parameters
	 * (PersonMistakeReportInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonMistakeReportInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonMistakeReportInsert($mixed = null) {
		$validParameters = array(
			"(PersonMistakeReportInsert)",
			"(PersonMistakeReportInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonMistakeReportInsert", $args);
	}


	/**
	 * Service Call: UnitAllUnit
	 * Parameter options:
	 * (UnitAllUnit) parameters
	 * (UnitAllUnit) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitAllUnitResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitAllUnit($mixed = null) {
		$validParameters = array(
			"(UnitAllUnit)",
			"(UnitAllUnit)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitAllUnit", $args);
	}


	/**
	 * Service Call: AlignmentAll
	 * Parameter options:
	 * (AlignmentAll) parameters
	 * (AlignmentAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AlignmentAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function AlignmentAll($mixed = null) {
		$validParameters = array(
			"(AlignmentAll)",
			"(AlignmentAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AlignmentAll", $args);
	}


	/**
	 * Service Call: PersonAllEventCampMulti
	 * Parameter options:
	 * (PersonAllEventCampMulti) parameters
	 * (PersonAllEventCampMulti) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonAllEventCampMultiResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonAllEventCampMulti($mixed = null) {
		$validParameters = array(
			"(PersonAllEventCampMulti)",
			"(PersonAllEventCampMulti)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonAllEventCampMulti", $args);
	}


	/**
	 * Service Call: UnitDetail
	 * Parameter options:
	 * (UnitDetail) parameters
	 * (UnitDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitDetail($mixed = null) {
		$validParameters = array(
			"(UnitDetail)",
			"(UnitDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitDetail", $args);
	}


	/**
	 * Service Call: RealtyUpdate
	 * Parameter options:
	 * (RealtyUpdate) parameters
	 * (RealtyUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RealtyUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function RealtyUpdate($mixed = null) {
		$validParameters = array(
			"(RealtyUpdate)",
			"(RealtyUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RealtyUpdate", $args);
	}


	/**
	 * Service Call: QualificationInsert
	 * Parameter options:
	 * (QualificationInsert) parameters
	 * (QualificationInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return QualificationInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function QualificationInsert($mixed = null) {
		$validParameters = array(
			"(QualificationInsert)",
			"(QualificationInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("QualificationInsert", $args);
	}


	/**
	 * Service Call: QualificationDetail
	 * Parameter options:
	 * (QualificationDetail) parameters
	 * (QualificationDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return QualificationDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function QualificationDetail($mixed = null) {
		$validParameters = array(
			"(QualificationDetail)",
			"(QualificationDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("QualificationDetail", $args);
	}


	/**
	 * Service Call: EducationAll
	 * Parameter options:
	 * (EducationAll) parameters
	 * (EducationAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return EducationAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function EducationAll($mixed = null) {
		$validParameters = array(
			"(EducationAll)",
			"(EducationAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("EducationAll", $args);
	}


	/**
	 * Service Call: FunctionUpdateHistory
	 * Parameter options:
	 * (FunctionUpdateHistory) parameters
	 * (FunctionUpdateHistory) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionUpdateHistoryResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionUpdateHistory($mixed = null) {
		$validParameters = array(
			"(FunctionUpdateHistory)",
			"(FunctionUpdateHistory)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionUpdateHistory", $args);
	}


	/**
	 * Service Call: PersonAllHelpdesk
	 * Parameter options:
	 * (PersonAllHelpdesk) parameters
	 * (PersonAllHelpdesk) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonAllHelpdeskResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonAllHelpdesk($mixed = null) {
		$validParameters = array(
			"(PersonAllHelpdesk)",
			"(PersonAllHelpdesk)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonAllHelpdesk", $args);
	}


	/**
	 * Service Call: MeetingDateUpdate
	 * Parameter options:
	 * (MeetingDateUpdate) parameters
	 * (MeetingDateUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MeetingDateUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function MeetingDateUpdate($mixed = null) {
		$validParameters = array(
			"(MeetingDateUpdate)",
			"(MeetingDateUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MeetingDateUpdate", $args);
	}


	/**
	 * Service Call: UnitTypeAll
	 * Parameter options:
	 * (UnitTypeAll) parameters
	 * (UnitTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitTypeAll($mixed = null) {
		$validParameters = array(
			"(UnitTypeAll)",
			"(UnitTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitTypeAll", $args);
	}


	/**
	 * Service Call: PersonUpdate
	 * Parameter options:
	 * (PersonUpdate) parameters
	 * (PersonUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonUpdate($mixed = null) {
		$validParameters = array(
			"(PersonUpdate)",
			"(PersonUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonUpdate", $args);
	}


	/**
	 * Service Call: DegreeAll
	 * Parameter options:
	 * (DegreeAll) parameters
	 * (DegreeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return DegreeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function DegreeAll($mixed = null) {
		$validParameters = array(
			"(DegreeAll)",
			"(DegreeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("DegreeAll", $args);
	}


	/**
	 * Service Call: UnitDetailRegistry
	 * Parameter options:
	 * (UnitDetailRegistry) parameters
	 * (UnitDetailRegistry) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitDetailRegistryResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitDetailRegistry($mixed = null) {
		$validParameters = array(
			"(UnitDetailRegistry)",
			"(UnitDetailRegistry)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitDetailRegistry", $args);
	}


	/**
	 * Service Call: PersonPhoto
	 * Parameter options:
	 * (PersonPhoto) parameters
	 * (PersonPhoto) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonPhotoResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonPhoto($mixed = null) {
		$validParameters = array(
			"(PersonPhoto)",
			"(PersonPhoto)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonPhoto", $args);
	}


	/**
	 * Service Call: AdvertisingUpdate
	 * Parameter options:
	 * (AdvertisingUpdate) parameters
	 * (AdvertisingUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AdvertisingUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function AdvertisingUpdate($mixed = null) {
		$validParameters = array(
			"(AdvertisingUpdate)",
			"(AdvertisingUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AdvertisingUpdate", $args);
	}


	/**
	 * Service Call: AdvertisingCategoryAll
	 * Parameter options:
	 * (AdvertisingCategoryAll) parameters
	 * (AdvertisingCategoryAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AdvertisingCategoryAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function AdvertisingCategoryAll($mixed = null) {
		$validParameters = array(
			"(AdvertisingCategoryAll)",
			"(AdvertisingCategoryAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AdvertisingCategoryAll", $args);
	}


	/**
	 * Service Call: AccountUpdate
	 * Parameter options:
	 * (AccountUpdate) parameters
	 * (AccountUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AccountUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function AccountUpdate($mixed = null) {
		$validParameters = array(
			"(AccountUpdate)",
			"(AccountUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AccountUpdate", $args);
	}


	/**
	 * Service Call: StatementEntryUpdate
	 * Parameter options:
	 * (StatementEntryUpdate) parameters
	 * (StatementEntryUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementEntryUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementEntryUpdate($mixed = null) {
		$validParameters = array(
			"(StatementEntryUpdate)",
			"(StatementEntryUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementEntryUpdate", $args);
	}


	/**
	 * Service Call: StatementAll
	 * Parameter options:
	 * (StatementAll) parameters
	 * (StatementAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementAll($mixed = null) {
		$validParameters = array(
			"(StatementAll)",
			"(StatementAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementAll", $args);
	}


	/**
	 * Service Call: SexAll
	 * Parameter options:
	 * (SexAll) parameters
	 * (SexAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return SexAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function SexAll($mixed = null) {
		$validParameters = array(
			"(SexAll)",
			"(SexAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("SexAll", $args);
	}


	/**
	 * Service Call: RealtyInsert
	 * Parameter options:
	 * (RealtyInsert) parameters
	 * (RealtyInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RealtyInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function RealtyInsert($mixed = null) {
		$validParameters = array(
			"(RealtyInsert)",
			"(RealtyInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RealtyInsert", $args);
	}


	/**
	 * Service Call: RealtyDetail
	 * Parameter options:
	 * (RealtyDetail) parameters
	 * (RealtyDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RealtyDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function RealtyDetail($mixed = null) {
		$validParameters = array(
			"(RealtyDetail)",
			"(RealtyDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RealtyDetail", $args);
	}


	/**
	 * Service Call: FunctionTypeDelete
	 * Parameter options:
	 * (FunctionTypeDelete) parameters
	 * (FunctionTypeDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionTypeDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionTypeDelete($mixed = null) {
		$validParameters = array(
			"(FunctionTypeDelete)",
			"(FunctionTypeDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionTypeDelete", $args);
	}


	/**
	 * Service Call: PersonParseIdentificationCode
	 * Parameter options:
	 * (PersonParseIdentificationCode) parameters
	 * (PersonParseIdentificationCode) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonParseIdentificationCodeResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonParseIdentificationCode($mixed = null) {
		$validParameters = array(
			"(PersonParseIdentificationCode)",
			"(PersonParseIdentificationCode)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonParseIdentificationCode", $args);
	}


	/**
	 * Service Call: PersonAllLogin
	 * Parameter options:
	 * (PersonAllLogin) parameters
	 * (PersonAllLogin) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonAllLoginResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonAllLogin($mixed = null) {
		$validParameters = array(
			"(PersonAllLogin)",
			"(PersonAllLogin)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonAllLogin", $args);
	}


	/**
	 * Service Call: RequestAll
	 * Parameter options:
	 * (RequestAll) parameters
	 * (RequestAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RequestAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function RequestAll($mixed = null) {
		$validParameters = array(
			"(RequestAll)",
			"(RequestAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RequestAll", $args);
	}


	/**
	 * Service Call: PersonDetailIdentificationCode
	 * Parameter options:
	 * (PersonDetailIdentificationCode) parameters
	 * (PersonDetailIdentificationCode) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonDetailIdentificationCodeResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonDetailIdentificationCode($mixed = null) {
		$validParameters = array(
			"(PersonDetailIdentificationCode)",
			"(PersonDetailIdentificationCode)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonDetailIdentificationCode", $args);
	}


	/**
	 * Service Call: StatementErrors
	 * Parameter options:
	 * (StatementErrors) parameters
	 * (StatementErrors) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementErrorsResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementErrors($mixed = null) {
		$validParameters = array(
			"(StatementErrors)",
			"(StatementErrors)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementErrors", $args);
	}


	/**
	 * Service Call: MeetingDateInsert
	 * Parameter options:
	 * (MeetingDateInsert) parameters
	 * (MeetingDateInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MeetingDateInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function MeetingDateInsert($mixed = null) {
		$validParameters = array(
			"(MeetingDateInsert)",
			"(MeetingDateInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MeetingDateInsert", $args);
	}


	/**
	 * Service Call: MeetingDateDetail
	 * Parameter options:
	 * (MeetingDateDetail) parameters
	 * (MeetingDateDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MeetingDateDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function MeetingDateDetail($mixed = null) {
		$validParameters = array(
			"(MeetingDateDetail)",
			"(MeetingDateDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MeetingDateDetail", $args);
	}


	/**
	 * Service Call: PersonDetail
	 * Parameter options:
	 * (PersonDetail) parameters
	 * (PersonDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonDetail($mixed = null) {
		$validParameters = array(
			"(PersonDetail)",
			"(PersonDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonDetail", $args);
	}


	/**
	 * Service Call: PersonInsert
	 * Parameter options:
	 * (PersonInsert) parameters
	 * (PersonInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonInsert($mixed = null) {
		$validParameters = array(
			"(PersonInsert)",
			"(PersonInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonInsert", $args);
	}


	/**
	 * Service Call: PersonContactUpdate
	 * Parameter options:
	 * (PersonContactUpdate) parameters
	 * (PersonContactUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonContactUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonContactUpdate($mixed = null) {
		$validParameters = array(
			"(PersonContactUpdate)",
			"(PersonContactUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonContactUpdate", $args);
	}


	/**
	 * Service Call: EducationDelete
	 * Parameter options:
	 * (EducationDelete) parameters
	 * (EducationDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return EducationDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function EducationDelete($mixed = null) {
		$validParameters = array(
			"(EducationDelete)",
			"(EducationDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("EducationDelete", $args);
	}


	/**
	 * Service Call: FunctionAllPerson
	 * Parameter options:
	 * (FunctionAllPerson) parameters
	 * (FunctionAllPerson) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionAllPersonResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionAllPerson($mixed = null) {
		$validParameters = array(
			"(FunctionAllPerson)",
			"(FunctionAllPerson)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionAllPerson", $args);
	}


	/**
	 * Service Call: EducatationSeminaryDelete
	 * Parameter options:
	 * (EducatationSeminaryDelete) parameters
	 * (EducatationSeminaryDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return EducatationSeminaryDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function EducatationSeminaryDelete($mixed = null) {
		$validParameters = array(
			"(EducatationSeminaryDelete)",
			"(EducatationSeminaryDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("EducatationSeminaryDelete", $args);
	}


	/**
	 * Service Call: AdvertisingDetail
	 * Parameter options:
	 * (AdvertisingDetail) parameters
	 * (AdvertisingDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AdvertisingDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function AdvertisingDetail($mixed = null) {
		$validParameters = array(
			"(AdvertisingDetail)",
			"(AdvertisingDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AdvertisingDetail", $args);
	}


	/**
	 * Service Call: AccountInsert
	 * Parameter options:
	 * (AccountInsert) parameters
	 * (AccountInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AccountInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function AccountInsert($mixed = null) {
		$validParameters = array(
			"(AccountInsert)",
			"(AccountInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AccountInsert", $args);
	}


	/**
	 * Service Call: AccountDetail
	 * Parameter options:
	 * (AccountDetail) parameters
	 * (AccountDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AccountDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function AccountDetail($mixed = null) {
		$validParameters = array(
			"(AccountDetail)",
			"(AccountDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AccountDetail", $args);
	}


	/**
	 * Service Call: UnitRegistrationUpdate
	 * Parameter options:
	 * (UnitRegistrationUpdate) parameters
	 * (UnitRegistrationUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitRegistrationUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitRegistrationUpdate($mixed = null) {
		$validParameters = array(
			"(UnitRegistrationUpdate)",
			"(UnitRegistrationUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitRegistrationUpdate", $args);
	}


	/**
	 * Service Call: UnitAll
	 * Parameter options:
	 * (UnitAll) parameters
	 * (UnitAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitAll($mixed = null) {
		$validParameters = array(
			"(UnitAll)",
			"(UnitAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitAll", $args);
	}


	/**
	 * Service Call: StatementEntryAll
	 * Parameter options:
	 * (StatementEntryAll) parameters
	 * (StatementEntryAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementEntryAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementEntryAll($mixed = null) {
		$validParameters = array(
			"(StatementEntryAll)",
			"(StatementEntryAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementEntryAll", $args);
	}


	/**
	 * Service Call: OfferUpdate
	 * Parameter options:
	 * (OfferUpdate) parameters
	 * (OfferUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return OfferUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function OfferUpdate($mixed = null) {
		$validParameters = array(
			"(OfferUpdate)",
			"(OfferUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("OfferUpdate", $args);
	}


	/**
	 * Service Call: QualificationInsertHistory
	 * Parameter options:
	 * (QualificationInsertHistory) parameters
	 * (QualificationInsertHistory) parameters
	 * @param mixed,... See function description for parameter options
	 * @return QualificationInsertHistoryResponse
	 * @throws Exception invalid function signature message
	 */
	public function QualificationInsertHistory($mixed = null) {
		$validParameters = array(
			"(QualificationInsertHistory)",
			"(QualificationInsertHistory)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("QualificationInsertHistory", $args);
	}


	/**
	 * Service Call: MistakeDetail
	 * Parameter options:
	 * (MistakeDetail) parameters
	 * (MistakeDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MistakeDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function MistakeDetail($mixed = null) {
		$validParameters = array(
			"(MistakeDetail)",
			"(MistakeDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MistakeDetail", $args);
	}


	/**
	 * Service Call: EducatationSeminaryAll
	 * Parameter options:
	 * (EducatationSeminaryAll) parameters
	 * (EducatationSeminaryAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return EducatationSeminaryAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function EducatationSeminaryAll($mixed = null) {
		$validParameters = array(
			"(EducatationSeminaryAll)",
			"(EducatationSeminaryAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("EducatationSeminaryAll", $args);
	}


	/**
	 * Service Call: ContactTypeAll
	 * Parameter options:
	 * (ContactTypeAll) parameters
	 * (ContactTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return ContactTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function ContactTypeAll($mixed = null) {
		$validParameters = array(
			"(ContactTypeAll)",
			"(ContactTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("ContactTypeAll", $args);
	}


	/**
	 * Service Call: UnitContactUpdate
	 * Parameter options:
	 * (UnitContactUpdate) parameters
	 * (UnitContactUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitContactUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitContactUpdate($mixed = null) {
		$validParameters = array(
			"(UnitContactUpdate)",
			"(UnitContactUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitContactUpdate", $args);
	}


	/**
	 * Service Call: RegistrationCategoryInsert
	 * Parameter options:
	 * (RegistrationCategoryInsert) parameters
	 * (RegistrationCategoryInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RegistrationCategoryInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function RegistrationCategoryInsert($mixed = null) {
		$validParameters = array(
			"(RegistrationCategoryInsert)",
			"(RegistrationCategoryInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RegistrationCategoryInsert", $args);
	}


	/**
	 * Service Call: PersonContactInsert
	 * Parameter options:
	 * (PersonContactInsert) parameters
	 * (PersonContactInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonContactInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonContactInsert($mixed = null) {
		$validParameters = array(
			"(PersonContactInsert)",
			"(PersonContactInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonContactInsert", $args);
	}


	/**
	 * Service Call: OfferInsert
	 * Parameter options:
	 * (OfferInsert) parameters
	 * (OfferInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return OfferInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function OfferInsert($mixed = null) {
		$validParameters = array(
			"(OfferInsert)",
			"(OfferInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("OfferInsert", $args);
	}


	/**
	 * Service Call: UnitRegistrationSummary
	 * Parameter options:
	 * (UnitRegistrationSummary) parameters
	 * (UnitRegistrationSummary) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitRegistrationSummaryResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitRegistrationSummary($mixed = null) {
		$validParameters = array(
			"(UnitRegistrationSummary)",
			"(UnitRegistrationSummary)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitRegistrationSummary", $args);
	}


	/**
	 * Service Call: UnitCancelTypeAll
	 * Parameter options:
	 * (UnitCancelTypeAll) parameters
	 * (UnitCancelTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitCancelTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitCancelTypeAll($mixed = null) {
		$validParameters = array(
			"(UnitCancelTypeAll)",
			"(UnitCancelTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitCancelTypeAll", $args);
	}


	/**
	 * Service Call: AdvertisingCategoryUpdate
	 * Parameter options:
	 * (AdvertisingCategoryUpdate) parameters
	 * (AdvertisingCategoryUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AdvertisingCategoryUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function AdvertisingCategoryUpdate($mixed = null) {
		$validParameters = array(
			"(AdvertisingCategoryUpdate)",
			"(AdvertisingCategoryUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AdvertisingCategoryUpdate", $args);
	}


	/**
	 * Service Call: UnitTreeUpdate
	 * Parameter options:
	 * (UnitTreeUpdate) parameters
	 * (UnitTreeUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitTreeUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitTreeUpdate($mixed = null) {
		$validParameters = array(
			"(UnitTreeUpdate)",
			"(UnitTreeUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitTreeUpdate", $args);
	}


	/**
	 * Service Call: UnitRegistrationInsert
	 * Parameter options:
	 * (UnitRegistrationInsert) parameters
	 * (UnitRegistrationInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitRegistrationInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitRegistrationInsert($mixed = null) {
		$validParameters = array(
			"(UnitRegistrationInsert)",
			"(UnitRegistrationInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitRegistrationInsert", $args);
	}


	/**
	 * Service Call: UnitRegistrationDetail
	 * Parameter options:
	 * (UnitRegistrationDetail) parameters
	 * (UnitRegistrationDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitRegistrationDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitRegistrationDetail($mixed = null) {
		$validParameters = array(
			"(UnitRegistrationDetail)",
			"(UnitRegistrationDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitRegistrationDetail", $args);
	}


	/**
	 * Service Call: StatementUpdate
	 * Parameter options:
	 * (StatementUpdate) parameters
	 * (StatementUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementUpdate($mixed = null) {
		$validParameters = array(
			"(StatementUpdate)",
			"(StatementUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementUpdate", $args);
	}


	/**
	 * Service Call: RealtyTypeAll
	 * Parameter options:
	 * (RealtyTypeAll) parameters
	 * (RealtyTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RealtyTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function RealtyTypeAll($mixed = null) {
		$validParameters = array(
			"(RealtyTypeAll)",
			"(RealtyTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RealtyTypeAll", $args);
	}


	/**
	 * Service Call: OccupationUpdate
	 * Parameter options:
	 * (OccupationUpdate) parameters
	 * (OccupationUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return OccupationUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function OccupationUpdate($mixed = null) {
		$validParameters = array(
			"(OccupationUpdate)",
			"(OccupationUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("OccupationUpdate", $args);
	}


	/**
	 * Service Call: MembershipUpdate
	 * Parameter options:
	 * (MembershipUpdate) parameters
	 * (MembershipUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MembershipUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function MembershipUpdate($mixed = null) {
		$validParameters = array(
			"(MembershipUpdate)",
			"(MembershipUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MembershipUpdate", $args);
	}


	/**
	 * Service Call: PersonRegistrationAll
	 * Parameter options:
	 * (PersonRegistrationAll) parameters
	 * (PersonRegistrationAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonRegistrationAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonRegistrationAll($mixed = null) {
		$validParameters = array(
			"(PersonRegistrationAll)",
			"(PersonRegistrationAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonRegistrationAll", $args);
	}


	/**
	 * Service Call: FunctionDeleteHistory
	 * Parameter options:
	 * (FunctionDeleteHistory) parameters
	 * (FunctionDeleteHistory) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionDeleteHistoryResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionDeleteHistory($mixed = null) {
		$validParameters = array(
			"(FunctionDeleteHistory)",
			"(FunctionDeleteHistory)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionDeleteHistory", $args);
	}


	/**
	 * Service Call: UnitTreeRenew
	 * Parameter options:
	 * (UnitTreeRenew) parameters
	 * (UnitTreeRenew) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitTreeRenewResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitTreeRenew($mixed = null) {
		$validParameters = array(
			"(UnitTreeRenew)",
			"(UnitTreeRenew)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitTreeRenew", $args);
	}


	/**
	 * Service Call: UnitLogo
	 * Parameter options:
	 * (UnitLogo) parameters
	 * (UnitLogo) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitLogoResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitLogo($mixed = null) {
		$validParameters = array(
			"(UnitLogo)",
			"(UnitLogo)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitLogo", $args);
	}


	/**
	 * Service Call: AssuranceAll
	 * Parameter options:
	 * (AssuranceAll) parameters
	 * (AssuranceAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AssuranceAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function AssuranceAll($mixed = null) {
		$validParameters = array(
			"(AssuranceAll)",
			"(AssuranceAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AssuranceAll", $args);
	}


	/**
	 * Service Call: AdvertisingSummary
	 * Parameter options:
	 * (AdvertisingSummary) parameters
	 * (AdvertisingSummary) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AdvertisingSummaryResponse
	 * @throws Exception invalid function signature message
	 */
	public function AdvertisingSummary($mixed = null) {
		$validParameters = array(
			"(AdvertisingSummary)",
			"(AdvertisingSummary)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AdvertisingSummary", $args);
	}


	/**
	 * Service Call: AdvertisingCategoryInsert
	 * Parameter options:
	 * (AdvertisingCategoryInsert) parameters
	 * (AdvertisingCategoryInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AdvertisingCategoryInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function AdvertisingCategoryInsert($mixed = null) {
		$validParameters = array(
			"(AdvertisingCategoryInsert)",
			"(AdvertisingCategoryInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AdvertisingCategoryInsert", $args);
	}


	/**
	 * Service Call: UnitInsertUnit
	 * Parameter options:
	 * (UnitInsertUnit) parameters
	 * (UnitInsertUnit) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitInsertUnitResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitInsertUnit($mixed = null) {
		$validParameters = array(
			"(UnitInsertUnit)",
			"(UnitInsertUnit)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitInsertUnit", $args);
	}


	/**
	 * Service Call: UnitContactInsert
	 * Parameter options:
	 * (UnitContactInsert) parameters
	 * (UnitContactInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitContactInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitContactInsert($mixed = null) {
		$validParameters = array(
			"(UnitContactInsert)",
			"(UnitContactInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitContactInsert", $args);
	}


	/**
	 * Service Call: StatementInsert
	 * Parameter options:
	 * (StatementInsert) parameters
	 * (StatementInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementInsert($mixed = null) {
		$validParameters = array(
			"(StatementInsert)",
			"(StatementInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementInsert", $args);
	}


	/**
	 * Service Call: QualificationAll
	 * Parameter options:
	 * (QualificationAll) parameters
	 * (QualificationAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return QualificationAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function QualificationAll($mixed = null) {
		$validParameters = array(
			"(QualificationAll)",
			"(QualificationAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("QualificationAll", $args);
	}


	/**
	 * Service Call: PersonAll
	 * Parameter options:
	 * (PersonAll) parameters
	 * (PersonAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonAll($mixed = null) {
		$validParameters = array(
			"(PersonAll)",
			"(PersonAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonAll", $args);
	}


	/**
	 * Service Call: FunctionUpdate
	 * Parameter options:
	 * (FunctionUpdate) parameters
	 * (FunctionUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionUpdate($mixed = null) {
		$validParameters = array(
			"(FunctionUpdate)",
			"(FunctionUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionUpdate", $args);
	}


	/**
	 * Service Call: DegreeDelete
	 * Parameter options:
	 * (DegreeDelete) parameters
	 * (DegreeDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return DegreeDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function DegreeDelete($mixed = null) {
		$validParameters = array(
			"(DegreeDelete)",
			"(DegreeDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("DegreeDelete", $args);
	}


	/**
	 * Service Call: PersonRegistrationInsert
	 * Parameter options:
	 * (PersonRegistrationInsert) parameters
	 * (PersonRegistrationInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonRegistrationInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonRegistrationInsert($mixed = null) {
		$validParameters = array(
			"(PersonRegistrationInsert)",
			"(PersonRegistrationInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonRegistrationInsert", $args);
	}


	/**
	 * Service Call: PersonMistakeReportDelete
	 * Parameter options:
	 * (PersonMistakeReportDelete) parameters
	 * (PersonMistakeReportDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonMistakeReportDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonMistakeReportDelete($mixed = null) {
		$validParameters = array(
			"(PersonMistakeReportDelete)",
			"(PersonMistakeReportDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonMistakeReportDelete", $args);
	}


	/**
	 * Service Call: QualificationUpdateHistory
	 * Parameter options:
	 * (QualificationUpdateHistory) parameters
	 * (QualificationUpdateHistory) parameters
	 * @param mixed,... See function description for parameter options
	 * @return QualificationUpdateHistoryResponse
	 * @throws Exception invalid function signature message
	 */
	public function QualificationUpdateHistory($mixed = null) {
		$validParameters = array(
			"(QualificationUpdateHistory)",
			"(QualificationUpdateHistory)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("QualificationUpdateHistory", $args);
	}


	/**
	 * Service Call: StatementComputeIsError
	 * Parameter options:
	 * (StatementComputeIsError) parameters
	 * (StatementComputeIsError) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementComputeIsErrorResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementComputeIsError($mixed = null) {
		$validParameters = array(
			"(StatementComputeIsError)",
			"(StatementComputeIsError)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementComputeIsError", $args);
	}


	/**
	 * Service Call: PersonOtherUpdate
	 * Parameter options:
	 * (PersonOtherUpdate) parameters
	 * (PersonOtherUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonOtherUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonOtherUpdate($mixed = null) {
		$validParameters = array(
			"(PersonOtherUpdate)",
			"(PersonOtherUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonOtherUpdate", $args);
	}


	/**
	 * Service Call: AdvertisingCategoryDetail
	 * Parameter options:
	 * (AdvertisingCategoryDetail) parameters
	 * (AdvertisingCategoryDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return AdvertisingCategoryDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function AdvertisingCategoryDetail($mixed = null) {
		$validParameters = array(
			"(AdvertisingCategoryDetail)",
			"(AdvertisingCategoryDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("AdvertisingCategoryDetail", $args);
	}


	/**
	 * Service Call: UnitTreeReasonAll
	 * Parameter options:
	 * (UnitTreeReasonAll) parameters
	 * (UnitTreeReasonAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitTreeReasonAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitTreeReasonAll($mixed = null) {
		$validParameters = array(
			"(UnitTreeReasonAll)",
			"(UnitTreeReasonAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitTreeReasonAll", $args);
	}


	/**
	 * Service Call: UnitTreeDetail
	 * Parameter options:
	 * (UnitTreeDetail) parameters
	 * (UnitTreeDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitTreeDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitTreeDetail($mixed = null) {
		$validParameters = array(
			"(UnitTreeDetail)",
			"(UnitTreeDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitTreeDetail", $args);
	}


	/**
	 * Service Call: UnitMistakeReportInsert
	 * Parameter options:
	 * (UnitMistakeReportInsert) parameters
	 * (UnitMistakeReportInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitMistakeReportInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitMistakeReportInsert($mixed = null) {
		$validParameters = array(
			"(UnitMistakeReportInsert)",
			"(UnitMistakeReportInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitMistakeReportInsert", $args);
	}


	/**
	 * Service Call: UnitContactAll
	 * Parameter options:
	 * (UnitContactAll) parameters
	 * (UnitContactAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitContactAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitContactAll($mixed = null) {
		$validParameters = array(
			"(UnitContactAll)",
			"(UnitContactAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitContactAll", $args);
	}


	/**
	 * Service Call: StatementDetail
	 * Parameter options:
	 * (StatementDetail) parameters
	 * (StatementDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementDetail($mixed = null) {
		$validParameters = array(
			"(StatementDetail)",
			"(StatementDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementDetail", $args);
	}


	/**
	 * Service Call: OccupationInsert
	 * Parameter options:
	 * (OccupationInsert) parameters
	 * (OccupationInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return OccupationInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function OccupationInsert($mixed = null) {
		$validParameters = array(
			"(OccupationInsert)",
			"(OccupationInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("OccupationInsert", $args);
	}


	/**
	 * Service Call: OccupationDetail
	 * Parameter options:
	 * (OccupationDetail) parameters
	 * (OccupationDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return OccupationDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function OccupationDetail($mixed = null) {
		$validParameters = array(
			"(OccupationDetail)",
			"(OccupationDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("OccupationDetail", $args);
	}


	/**
	 * Service Call: MembershipReasonAll
	 * Parameter options:
	 * (MembershipReasonAll) parameters
	 * (MembershipReasonAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MembershipReasonAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function MembershipReasonAll($mixed = null) {
		$validParameters = array(
			"(MembershipReasonAll)",
			"(MembershipReasonAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MembershipReasonAll", $args);
	}


	/**
	 * Service Call: MembershipInsert
	 * Parameter options:
	 * (MembershipInsert) parameters
	 * (MembershipInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MembershipInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function MembershipInsert($mixed = null) {
		$validParameters = array(
			"(MembershipInsert)",
			"(MembershipInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MembershipInsert", $args);
	}


	/**
	 * Service Call: MembershipDetail
	 * Parameter options:
	 * (MembershipDetail) parameters
	 * (MembershipDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MembershipDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function MembershipDetail($mixed = null) {
		$validParameters = array(
			"(MembershipDetail)",
			"(MembershipDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MembershipDetail", $args);
	}


	/**
	 * Service Call: RegistrationCategoryCopyFromParentUnit
	 * Parameter options:
	 * (RegistrationCategoryCopyFromParentUnit) parameters
	 * (RegistrationCategoryCopyFromParentUnit) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RegistrationCategoryCopyFromParentUnitResponse
	 * @throws Exception invalid function signature message
	 */
	public function RegistrationCategoryCopyFromParentUnit($mixed = null) {
		$validParameters = array(
			"(RegistrationCategoryCopyFromParentUnit)",
			"(RegistrationCategoryCopyFromParentUnit)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RegistrationCategoryCopyFromParentUnit", $args);
	}


	/**
	 * Service Call: RequestUpdate
	 * Parameter options:
	 * (RequestUpdate) parameters
	 * (RequestUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RequestUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function RequestUpdate($mixed = null) {
		$validParameters = array(
			"(RequestUpdate)",
			"(RequestUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RequestUpdate", $args);
	}


	/**
	 * Service Call: UnitRegistrationMembers
	 * Parameter options:
	 * (UnitRegistrationMembers) parameters
	 * (UnitRegistrationMembers) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitRegistrationMembersResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitRegistrationMembers($mixed = null) {
		$validParameters = array(
			"(UnitRegistrationMembers)",
			"(UnitRegistrationMembers)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitRegistrationMembers", $args);
	}


	/**
	 * Service Call: UnitDetailMembersRegistry
	 * Parameter options:
	 * (UnitDetailMembersRegistry) parameters
	 * (UnitDetailMembersRegistry) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitDetailMembersRegistryResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitDetailMembersRegistry($mixed = null) {
		$validParameters = array(
			"(UnitDetailMembersRegistry)",
			"(UnitDetailMembersRegistry)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitDetailMembersRegistry", $args);
	}


	/**
	 * Service Call: PersonAllEventCongressFunction
	 * Parameter options:
	 * (PersonAllEventCongressFunction) parameters
	 * (PersonAllEventCongressFunction) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonAllEventCongressFunctionResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonAllEventCongressFunction($mixed = null) {
		$validParameters = array(
			"(PersonAllEventCongressFunction)",
			"(PersonAllEventCongressFunction)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonAllEventCongressFunction", $args);
	}


	/**
	 * Service Call: UnitAllCamp
	 * Parameter options:
	 * (UnitAllCamp) parameters
	 * (UnitAllCamp) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitAllCampResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitAllCamp($mixed = null) {
		$validParameters = array(
			"(UnitAllCamp)",
			"(UnitAllCamp)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitAllCamp", $args);
	}


	/**
	 * Service Call: PersonAllEventCamp
	 * Parameter options:
	 * (PersonAllEventCamp) parameters
	 * (PersonAllEventCamp) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonAllEventCampResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonAllEventCamp($mixed = null) {
		$validParameters = array(
			"(PersonAllEventCamp)",
			"(PersonAllEventCamp)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonAllEventCamp", $args);
	}


	/**
	 * Service Call: MembershipAll
	 * Parameter options:
	 * (MembershipAll) parameters
	 * (MembershipAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MembershipAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function MembershipAll($mixed = null) {
		$validParameters = array(
			"(MembershipAll)",
			"(MembershipAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MembershipAll", $args);
	}


	/**
	 * Service Call: FunctionTypeUpdate
	 * Parameter options:
	 * (FunctionTypeUpdate) parameters
	 * (FunctionTypeUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionTypeUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionTypeUpdate($mixed = null) {
		$validParameters = array(
			"(FunctionTypeUpdate)",
			"(FunctionTypeUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionTypeUpdate", $args);
	}


	/**
	 * Service Call: FunctionInsert
	 * Parameter options:
	 * (FunctionInsert) parameters
	 * (FunctionInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionInsert($mixed = null) {
		$validParameters = array(
			"(FunctionInsert)",
			"(FunctionInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionInsert", $args);
	}


	/**
	 * Service Call: FunctionDetail
	 * Parameter options:
	 * (FunctionDetail) parameters
	 * (FunctionDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return FunctionDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function FunctionDetail($mixed = null) {
		$validParameters = array(
			"(FunctionDetail)",
			"(FunctionDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("FunctionDetail", $args);
	}


	/**
	 * Service Call: EducationUpdate
	 * Parameter options:
	 * (EducationUpdate) parameters
	 * (EducationUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return EducationUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function EducationUpdate($mixed = null) {
		$validParameters = array(
			"(EducationUpdate)",
			"(EducationUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("EducationUpdate", $args);
	}


	/**
	 * Service Call: MembershipRenew
	 * Parameter options:
	 * (MembershipRenew) parameters
	 * (MembershipRenew) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MembershipRenewResponse
	 * @throws Exception invalid function signature message
	 */
	public function MembershipRenew($mixed = null) {
		$validParameters = array(
			"(MembershipRenew)",
			"(MembershipRenew)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MembershipRenew", $args);
	}


	/**
	 * Service Call: StatementAllChild
	 * Parameter options:
	 * (StatementAllChild) parameters
	 * (StatementAllChild) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementAllChildResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementAllChild($mixed = null) {
		$validParameters = array(
			"(StatementAllChild)",
			"(StatementAllChild)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementAllChild", $args);
	}


	/**
	 * Service Call: UnitCancelInsert
	 * Parameter options:
	 * (UnitCancelInsert) parameters
	 * (UnitCancelInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitCancelInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitCancelInsert($mixed = null) {
		$validParameters = array(
			"(UnitCancelInsert)",
			"(UnitCancelInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitCancelInsert", $args);
	}


	/**
	 * Service Call: PersonOtherDetail
	 * Parameter options:
	 * (PersonOtherDetail) parameters
	 * (PersonOtherDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PersonOtherDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function PersonOtherDetail($mixed = null) {
		$validParameters = array(
			"(PersonOtherDetail)",
			"(PersonOtherDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PersonOtherDetail", $args);
	}


	/**
	 * Service Call: UnitTreeAll
	 * Parameter options:
	 * (UnitTreeAll) parameters
	 * (UnitTreeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitTreeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitTreeAll($mixed = null) {
		$validParameters = array(
			"(UnitTreeAll)",
			"(UnitTreeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitTreeAll", $args);
	}


	/**
	 * Service Call: StatementEntryTypeAll
	 * Parameter options:
	 * (StatementEntryTypeAll) parameters
	 * (StatementEntryTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return StatementEntryTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function StatementEntryTypeAll($mixed = null) {
		$validParameters = array(
			"(StatementEntryTypeAll)",
			"(StatementEntryTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("StatementEntryTypeAll", $args);
	}


	/**
	 * Service Call: MembershipTypeAll
	 * Parameter options:
	 * (MembershipTypeAll) parameters
	 * (MembershipTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return MembershipTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function MembershipTypeAll($mixed = null) {
		$validParameters = array(
			"(MembershipTypeAll)",
			"(MembershipTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("MembershipTypeAll", $args);
	}


	/**
	 * Service Call: UnitRegistrationReport
	 * Parameter options:
	 * (UnitRegistrationReport) parameters
	 * (UnitRegistrationReport) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UnitRegistrationReportResponse
	 * @throws Exception invalid function signature message
	 */
	public function UnitRegistrationReport($mixed = null) {
		$validParameters = array(
			"(UnitRegistrationReport)",
			"(UnitRegistrationReport)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UnitRegistrationReport", $args);
	}


}}

?>
