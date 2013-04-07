<?php

require_once 'dataObjects/User.php';
require_once 'dataObjects/UserRole.php';

define("userManagemetWsdlAdress", wsdlAdress."/UserManagement.asmx?WSDL");


/**
 * Tento script obsahuje tridy, ktere obsluhuji sluzbu UserManagement. Tyto
 * tridy pokud mozno nepouzivat, jelikoz obsahuji nestastne obalovani objektu
 * jinymi objekty. Tyto tridy byly automaticky generovany pomoci classGeneratoru
 */

if (!class_exists("WeekDayAll")) {
/**
 * WeekDayAll
 */
class WeekDayAll {
	/**
	 * @access public
	 * @var WeekDayAllInput
	 */
	public $weekDayAllInput;
}}

if (!class_exists("WeekDayAllInput")) {
/**
 * WeekDayAllInput
 */
class WeekDayAllInput {
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

if (!class_exists("WeekDayAllResponse")) {
/**
 * WeekDayAllResponse
 */
class WeekDayAllResponse {
	/**
	 * @access public
	 * @var ArrayOfWeekDayAllOutput
	 */
	public $WeekDayAllResult;
}}

if (!class_exists("WeekDayAllOutput")) {
/**
 * WeekDayAllOutput
 */
class WeekDayAllOutput {
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

if (!class_exists("LogAll")) {
/**
 * LogAll
 */
class LogAll {
	/**
	 * @access public
	 * @var LogAllInput
	 */
	public $logAllInput;
}}

if (!class_exists("LogAllInput")) {
/**
 * LogAllInput
 */
class LogAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_TableDisplay;
	/**
	 * @access public
	 * @var sint
	 */
	public $DisplayObjectId;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_User;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Operation;
}}

if (!class_exists("LogAllResponse")) {
/**
 * LogAllResponse
 */
class LogAllResponse {
	/**
	 * @access public
	 * @var ArrayOfLogAllOutput
	 */
	public $LogAllResult;
}}

if (!class_exists("LogAllOutput")) {
/**
 * LogAllOutput
 */
class LogAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_User;
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
	public $Date;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_TableDisplay;
	/**
	 * @access public
	 * @var sstring
	 */
	public $TableDisplay;
	/**
	 * @access public
	 * @var sint
	 */
	public $DisplayObjectId;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Table;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Table;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Operation;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Operation;
	/**
	 * @access public
	 * @var sint
	 */
	public $ObjectID;
	/**
	 * @access public
	 * @var sint
	 */
	public $HistoryObjectId;
}}

if (!class_exists("RoleUpdate")) {
/**
 * RoleUpdate
 */
class RoleUpdate {
	/**
	 * @access public
	 * @var Role
	 */
	public $role;
}}

if (!class_exists("Role")) {
/**
 * Role
 */
class Role {
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
	public $ID_GroupType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $GroupType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsHidden;
}}

if (!class_exists("RoleUpdateResponse")) {
/**
 * RoleUpdateResponse
 */
class RoleUpdateResponse {
}}

if (!class_exists("LogDetailHistory")) {
/**
 * LogDetailHistory
 */
class LogDetailHistory {
	/**
	 * @access public
	 * @var LogDetailHistoryInput
	 */
	public $logDetailHistoryInput;
}}

if (!class_exists("LogDetailHistoryInput")) {
/**
 * LogDetailHistoryInput
 */
class LogDetailHistoryInput {
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

if (!class_exists("LogDetailHistoryResponse")) {
/**
 * LogDetailHistoryResponse
 */
class LogDetailHistoryResponse {
	/**
	 * @access public
	 * @var ArrayOfLogDetailHistoryOutput
	 */
	public $LogDetailHistoryResult;
}}

if (!class_exists("LogDetailHistoryOutput")) {
/**
 * LogDetailHistoryOutput
 */
class LogDetailHistoryOutput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $OldValue;
	/**
	 * @access public
	 * @var sstring
	 */
	public $NewValue;
}}

if (!class_exists("RoleInsert")) {
/**
 * RoleInsert
 */
class RoleInsert {
	/**
	 * @access public
	 * @var Role
	 */
	public $role;
}}

if (!class_exists("RoleInsertResponse")) {
/**
 * RoleInsertResponse
 */
class RoleInsertResponse {
	/**
	 * @access public
	 * @var RoleInsertOutput
	 */
	public $RoleInsertResult;
}}

if (!class_exists("RoleInsertOutput")) {
/**
 * RoleInsertOutput
 */
class RoleInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("RoleDetail")) {
/**
 * RoleDetail
 */
class RoleDetail {
	/**
	 * @access public
	 * @var RoleDetailInput
	 */
	public $roleDetailInput;
}}

if (!class_exists("RoleDetailInput")) {
/**
 * RoleDetailInput
 */
class RoleDetailInput {
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

if (!class_exists("RoleDetailResponse")) {
/**
 * RoleDetailResponse
 */
class RoleDetailResponse {
	/**
	 * @access public
	 * @var Role
	 */
	public $RoleDetailResult;
}}

if (!class_exists("LoginUpdate")) {
/**
 * LoginUpdate
 */
class LoginUpdate {
	/**
	 * @access public
	 * @var LoginUpdateInput
	 */
	public $loginUpdateInput;
}}

if (!class_exists("LoginUpdateInput")) {
/**
 * LoginUpdateInput
 */
class LoginUpdateInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UserRole;
}}

if (!class_exists("LoginUpdateResponse")) {
/**
 * LoginUpdateResponse
 */
class LoginUpdateResponse {
	/**
	 * @access public
	 * @var LoginUpdateOutput
	 */
	public $LoginUpdateResult;
}}

if (!class_exists("LoginUpdateOutput")) {
/**
 * LoginUpdateOutput
 */
class LoginUpdateOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
}}

if (!class_exists("UserUpdate")) {
/**
 * UserUpdate
 */
class UserUpdate {
	/**
	 * @access public
	 * @var UserUpdateInput
	 */
	public $userUpdateInput;
}}

if (!class_exists("UserUpdateInput")) {
/**
 * UserUpdateInput
 */
class UserUpdateInput {
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
	 * @var sboolean
	 */
	public $IsEnabled;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Password;
	/**
	 * @access public
	 * @var sstring
	 */
	public $PasswordActual;
}}

if (!class_exists("UserUpdateResponse")) {
/**
 * UserUpdateResponse
 */
class UserUpdateResponse {
}}

if (!class_exists("ErrorUpdate")) {
/**
 * ErrorUpdate
 */
class ErrorUpdate {
	/**
	 * @access public
	 * @var Error
	 */
	public $error;
}}

if (!class_exists("Error")) {
/**
 * Error
 */
class Error {
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
	public $ID_User;
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
	public $ID_ErrorType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ErrorType;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $Date;
	/**
	 * @access public
	 * @var sstring
	 */
	public $URL;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Description;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsProcessed;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Browser;
}}

if (!class_exists("ErrorUpdateResponse")) {
/**
 * ErrorUpdateResponse
 */
class ErrorUpdateResponse {
}}

if (!class_exists("LoginInsert")) {
/**
 * LoginInsert
 */
class LoginInsert {
	/**
	 * @access public
	 * @var LoginInsertInput
	 */
	public $loginInsertInput;
}}

if (!class_exists("LoginInsertInput")) {
/**
 * LoginInsertInput
 */
class LoginInsertInput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $UserName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Password;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UserRole;
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Application;
}}

if (!class_exists("LoginInsertResponse")) {
/**
 * LoginInsertResponse
 */
class LoginInsertResponse {
	/**
	 * @access public
	 * @var LoginInsertOutput
	 */
	public $LoginInsertResult;
}}

if (!class_exists("LoginInsertOutput")) {
/**
 * LoginInsertOutput
 */
class LoginInsertOutput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_UserRole;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Unit;
}}

if (!class_exists("UserRoleDelete")) {
/**
 * UserRoleDelete
 */
class UserRoleDelete {
	/**
	 * @access public
	 * @var UserRoleDeleteInput
	 */
	public $userRoleDeleteInput;
}}

if (!class_exists("UserRoleDeleteInput")) {
/**
 * UserRoleDeleteInput
 */
class UserRoleDeleteInput {
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

if (!class_exists("UserRoleDeleteResponse")) {
/**
 * UserRoleDeleteResponse
 */
class UserRoleDeleteResponse {
}}

if (!class_exists("UserInsert")) {
/**
 * UserInsert
 */
class UserInsert {
	/**
	 * @access public
	 * @var UserInsertInput
	 */
	public $userInsertInput;
}}

if (!class_exists("UserInsertInput")) {
/**
 * UserInsertInput
 */
class UserInsertInput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $UserName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Password;
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
}}

if (!class_exists("UserInsertResponse")) {
/**
 * UserInsertResponse
 */
class UserInsertResponse {
	/**
	 * @access public
	 * @var UserInsertOutput
	 */
	public $UserInsertResult;
}}

if (!class_exists("UserInsertOutput")) {
/**
 * UserInsertOutput
 */
class UserInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("ErrorInsert")) {
/**
 * ErrorInsert
 */
class ErrorInsert {
	/**
	 * @access public
	 * @var Error
	 */
	public $error;
}}

if (!class_exists("ErrorInsertResponse")) {
/**
 * ErrorInsertResponse
 */
class ErrorInsertResponse {
	/**
	 * @access public
	 * @var ErrorInsertOutput
	 */
	public $ErrorInsertResult;
}}

if (!class_exists("ErrorInsertOutput")) {
/**
 * ErrorInsertOutput
 */
class ErrorInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("ErrorDetail")) {
/**
 * ErrorDetail
 */
class ErrorDetail {
	/**
	 * @access public
	 * @var ErrorDetailInput
	 */
	public $errorDetailInput;
}}

if (!class_exists("ErrorDetailInput")) {
/**
 * ErrorDetailInput
 */
class ErrorDetailInput {
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

if (!class_exists("ErrorDetailResponse")) {
/**
 * ErrorDetailResponse
 */
class ErrorDetailResponse {
	/**
	 * @access public
	 * @var Error
	 */
	public $ErrorDetailResult;
}}

if (!class_exists("UserDetail")) {
/**
 * UserDetail
 */
class UserDetail {
	/**
	 * @access public
	 * @var UserDetailInput
	 */
	public $userDetailInput;
}}

if (!class_exists("UserDetailInput")) {
/**
 * UserDetailInput
 */
class UserDetailInput {
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

if (!class_exists("UserDetailResponse")) {
/**
 * UserDetailResponse
 */
class UserDetailResponse {
	/**
	 * @access public
	 * @var User
	 */
	public $UserDetailResult;
}}


if (!class_exists("UserRoleALLUnit")) {
/**
 * UserRoleALLUnit
 */
class UserRoleALLUnit {
	/**
	 * @access public
	 * @var UserRoleALLUnitInput
	 */
	public $userRoleALLUnitInput;
}}

if (!class_exists("UserRoleALLUnitInput")) {
/**
 * UserRoleALLUnitInput
 */
class UserRoleALLUnitInput {
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
	public $ID_Role;
}}

if (!class_exists("UserRoleALLUnitResponse")) {
/**
 * UserRoleALLUnitResponse
 */
class UserRoleALLUnitResponse {
	/**
	 * @access public
	 * @var ArrayOfUserRoleALLUnitOutput
	 */
	public $UserRoleALLUnitResult;
}}

if (!class_exists("UserRoleALLUnitOutput")) {
/**
 * UserRoleALLUnitOutput
 */
class UserRoleALLUnitOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_User;
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
	public $ID_Role;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Role;
}}

if (!class_exists("RolePermissionDelete")) {
/**
 * RolePermissionDelete
 */
class RolePermissionDelete {
	/**
	 * @access public
	 * @var RolePermissionDeleteInput
	 */
	public $rolePermissionDeleteInput;
}}

if (!class_exists("RolePermissionDeleteInput")) {
/**
 * RolePermissionDeleteInput
 */
class RolePermissionDeleteInput {
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

if (!class_exists("RolePermissionDeleteResponse")) {
/**
 * RolePermissionDeleteResponse
 */
class RolePermissionDeleteResponse {
}}

if (!class_exists("PermissionAllLogin")) {
/**
 * PermissionAllLogin
 */
class PermissionAllLogin {
	/**
	 * @access public
	 * @var PermissionAllLoginInput
	 */
	public $permissionAllLoginInput;
}}

if (!class_exists("PermissionAllLoginInput")) {
/**
 * PermissionAllLoginInput
 */
class PermissionAllLoginInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID;
}}

if (!class_exists("PermissionAllLoginResponse")) {
/**
 * PermissionAllLoginResponse
 */
class PermissionAllLoginResponse {
	/**
	 * @access public
	 * @var ArrayOfPermissionAllLoginOutput
	 */
	public $PermissionAllLoginResult;
}}

if (!class_exists("PermissionAllLoginOutput")) {
/**
 * PermissionAllLoginOutput
 */
class PermissionAllLoginOutput {
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

if (!class_exists("ActionVerify")) {
/**
 * ActionVerify
 */
class ActionVerify {
	/**
	 * @access public
	 * @var ActionVerifyInput
	 */
	public $actionVerifyInput;
}}

if (!class_exists("ActionVerifyInput")) {
/**
 * ActionVerifyInput
 */
class ActionVerifyInput {
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
	public $ID_Table;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Action;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsRaiseError;
}}

if (!class_exists("ActionVerifyResponse")) {
/**
 * ActionVerifyResponse
 */
class ActionVerifyResponse {
	/**
	 * @access public
	 * @var ArrayOfActionVerifyOutput
	 */
	public $ActionVerifyResult;
}}

if (!class_exists("ActionVerifyOutput")) {
/**
 * ActionVerifyOutput
 */
class ActionVerifyOutput {
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

if (!class_exists("OperationAll")) {
/**
 * OperationAll
 */
class OperationAll {
	/**
	 * @access public
	 * @var OperationAllInput
	 */
	public $operationAllInput;
}}

if (!class_exists("OperationAllInput")) {
/**
 * OperationAllInput
 */
class OperationAllInput {
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

if (!class_exists("OperationAllResponse")) {
/**
 * OperationAllResponse
 */
class OperationAllResponse {
	/**
	 * @access public
	 * @var ArrayOfOperationAllOutput
	 */
	public $OperationAllResult;
}}

if (!class_exists("OperationAllOutput")) {
/**
 * OperationAllOutput
 */
class OperationAllOutput {
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

if (!class_exists("UserUpdatePassword")) {
/**
 * UserUpdatePassword
 */
class UserUpdatePassword {
	/**
	 * @access public
	 * @var UserUpdatePasswordInput
	 */
	public $userUpdatePasswordInput;
}}

if (!class_exists("UserUpdatePasswordInput")) {
/**
 * UserUpdatePasswordInput
 */
class UserUpdatePasswordInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $PasswordRequest;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Password;
}}

if (!class_exists("UserUpdatePasswordResponse")) {
/**
 * UserUpdatePasswordResponse
 */
class UserUpdatePasswordResponse {
}}

if (!class_exists("InstanceDetail")) {
/**
 * InstanceDetail
 */
class InstanceDetail {
	/**
	 * @access public
	 * @var InstanceDetailInput
	 */
	public $instanceDetailInput;
}}

if (!class_exists("InstanceDetailInput")) {
/**
 * InstanceDetailInput
 */
class InstanceDetailInput {
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
}}

if (!class_exists("InstanceDetailResponse")) {
/**
 * InstanceDetailResponse
 */
class InstanceDetailResponse {
	/**
	 * @access public
	 * @var InstanceDetailOutput
	 */
	public $InstanceDetailResult;
}}

if (!class_exists("InstanceDetailOutput")) {
/**
 * InstanceDetailOutput
 */
class InstanceDetailOutput {
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
	public $IsActual;
}}

if (!class_exists("UserRoleAll")) {
/**
 * UserRoleAll
 */
class UserRoleAll {
	/**
	 * @access public
	 * @var UserRoleAllInput
	 */
	public $userRoleAllInput;
}}

if (!class_exists("UserRoleAllInput")) {
/**
 * UserRoleAllInput
 */
class UserRoleAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_User;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Role;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_GroupType;
}}

if (!class_exists("UserRoleAllResponse")) {
/**
 * UserRoleAllResponse
 */
class UserRoleAllResponse {
	/**
	 * @access public
	 * @var ArrayOfUserRole
	 */
	public $UserRoleAllResult;
}}

if (!class_exists("RoleAll")) {
/**
 * RoleAll
 */
class RoleAll {
	/**
	 * @access public
	 * @var RoleAllInput
	 */
	public $roleAllInput;
}}

if (!class_exists("RoleAllInput")) {
/**
 * RoleAllInput
 */
class RoleAllInput {
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
	 * @var sstring
	 */
	public $ID_GroupType;
}}

if (!class_exists("RoleAllResponse")) {
/**
 * RoleAllResponse
 */
class RoleAllResponse {
	/**
	 * @access public
	 * @var ArrayOfUserRole
	 */
	public $RoleAllResult;
}}

if (!class_exists("GroupTypeAll")) {
/**
 * GroupTypeAll
 */
class GroupTypeAll {
	/**
	 * @access public
	 * @var GroupTypeAllInput
	 */
	public $groupTypeAllInput;
}}

if (!class_exists("GroupTypeAllInput")) {
/**
 * GroupTypeAllInput
 */
class GroupTypeAllInput {
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
	public $ID_Table;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $CanLogin;
}}

if (!class_exists("GroupTypeAllResponse")) {
/**
 * GroupTypeAllResponse
 */
class GroupTypeAllResponse {
	/**
	 * @access public
	 * @var ArrayOfGroupTypeAllOutput
	 */
	public $GroupTypeAllResult;
}}

if (!class_exists("GroupTypeAllOutput")) {
/**
 * GroupTypeAllOutput
 */
class GroupTypeAllOutput {
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
	public $ID_Table;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Table;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $CanLogin;
}}

if (!class_exists("UserRoleUpdate")) {
/**
 * UserRoleUpdate
 */
class UserRoleUpdate {
	/**
	 * @access public
	 * @var UserRole
	 */
	public $userRole;
}}

if (!class_exists("UserRoleUpdateResponse")) {
/**
 * UserRoleUpdateResponse
 */
class UserRoleUpdateResponse {
}}

if (!class_exists("RoleDelete")) {
/**
 * RoleDelete
 */
class RoleDelete {
	/**
	 * @access public
	 * @var RoleDeleteInput
	 */
	public $roleDeleteInput;
}}

if (!class_exists("RoleDeleteInput")) {
/**
 * RoleDeleteInput
 */
class RoleDeleteInput {
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

if (!class_exists("RoleDeleteResponse")) {
/**
 * RoleDeleteResponse
 */
class RoleDeleteResponse {
}}

if (!class_exists("LoginUpdateLogout")) {
/**
 * LoginUpdateLogout
 */
class LoginUpdateLogout {
	/**
	 * @access public
	 * @var LoginUpdateLogoutInput
	 */
	public $loginUpdateLogoutInput;
}}

if (!class_exists("LoginUpdateLogoutInput")) {
/**
 * LoginUpdateLogoutInput
 */
class LoginUpdateLogoutInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID;
}}

if (!class_exists("LoginUpdateLogoutResponse")) {
/**
 * LoginUpdateLogoutResponse
 */
class LoginUpdateLogoutResponse {
}}

if (!class_exists("UserPasswordRequest")) {
/**
 * UserPasswordRequest
 */
class UserPasswordRequest {
	/**
	 * @access public
	 * @var UserPasswordRequestInput
	 */
	public $userPasswordRequestInput;
}}

if (!class_exists("UserPasswordRequestInput")) {
/**
 * UserPasswordRequestInput
 */
class UserPasswordRequestInput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $UserName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Email;
}}

if (!class_exists("UserPasswordRequestResponse")) {
/**
 * UserPasswordRequestResponse
 */
class UserPasswordRequestResponse {
	/**
	 * @access public
	 * @var UserPasswordRequestOutput
	 */
	public $UserPasswordRequestResult;
}}

if (!class_exists("UserPasswordRequestOutput")) {
/**
 * UserPasswordRequestOutput
 */
class UserPasswordRequestOutput {
	/**
	 * @access public
	 * @var sstring
	 */
	public $Status;
}}

if (!class_exists("UserAll")) {
/**
 * UserAll
 */
class UserAll {
	/**
	 * @access public
	 * @var UserAllInput
	 */
	public $userAllInput;
}}

if (!class_exists("UserAllInput")) {
/**
 * UserAllInput
 */
class UserAllInput {
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
	 * @var sint
	 */
	public $ID_Unit;
	/**
	 * @access public
	 * @var sstring
	 */
	public $UserName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
}}

if (!class_exists("UserAllResponse")) {
/**
 * UserAllResponse
 */
class UserAllResponse {
	/**
	 * @access public
	 * @var ArrayOfUserAllOutput
	 */
	public $UserAllResult;
}}

if (!class_exists("UserAllOutput")) {
/**
 * UserAllOutput
 */
class UserAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsEnabled;
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
	public $DisplayName;
}}

if (!class_exists("LogDetail")) {
/**
 * LogDetail
 */
class LogDetail {
	/**
	 * @access public
	 * @var LogDetailInput
	 */
	public $logDetailInput;
}}

if (!class_exists("LogDetailInput")) {
/**
 * LogDetailInput
 */
class LogDetailInput {
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

if (!class_exists("LogDetailResponse")) {
/**
 * LogDetailResponse
 */
class LogDetailResponse {
	/**
	 * @access public
	 * @var LogDetailOutput
	 */
	public $LogDetailResult;
}}

if (!class_exists("LogDetailOutput")) {
/**
 * LogDetailOutput
 */
class LogDetailOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_User;
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
	public $Date;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_TableDisplay;
	/**
	 * @access public
	 * @var sstring
	 */
	public $TableDisplay;
	/**
	 * @access public
	 * @var sint
	 */
	public $DisplayObjectId;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Table;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Table;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Operation;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Operation;
	/**
	 * @access public
	 * @var sint
	 */
	public $ObjectID;
	/**
	 * @access public
	 * @var sint
	 */
	public $HistoryObjectId;
}}

if (!class_exists("UserRoleInsert")) {
/**
 * UserRoleInsert
 */
class UserRoleInsert {
	/**
	 * @access public
	 * @var UserRole
	 */
	public $userRole;
}}

if (!class_exists("UserRoleInsertResponse")) {
/**
 * UserRoleInsertResponse
 */
class UserRoleInsertResponse {
	/**
	 * @access public
	 * @var UserRoleInsertOutput
	 */
	public $UserRoleInsertResult;
}}

if (!class_exists("UserRoleInsertOutput")) {
/**
 * UserRoleInsertOutput
 */
class UserRoleInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("RolePermissionUpdate")) {
/**
 * RolePermissionUpdate
 */
class RolePermissionUpdate {
	/**
	 * @access public
	 * @var RolePermission
	 */
	public $rolePermission;
}}

if (!class_exists("RolePermission")) {
/**
 * RolePermission
 */
class RolePermission {
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
	public $ID_Role;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Permission;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsHierarchic;
}}

if (!class_exists("RolePermissionUpdateResponse")) {
/**
 * RolePermissionUpdateResponse
 */
class RolePermissionUpdateResponse {
}}

if (!class_exists("LoginUpdateRefresh")) {
/**
 * LoginUpdateRefresh
 */
class LoginUpdateRefresh {
	/**
	 * @access public
	 * @var LoginUpdateRefreshInput
	 */
	public $loginUpdateRefreshInput;
}}

if (!class_exists("LoginUpdateRefreshInput")) {
/**
 * LoginUpdateRefreshInput
 */
class LoginUpdateRefreshInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID;
}}

if (!class_exists("LoginUpdateRefreshResponse")) {
/**
 * LoginUpdateRefreshResponse
 */
class LoginUpdateRefreshResponse {
}}

if (!class_exists("ErrorAll")) {
/**
 * ErrorAll
 */
class ErrorAll {
	/**
	 * @access public
	 * @var ErrorAllInput
	 */
	public $errorAllInput;
}}

if (!class_exists("ErrorAllInput")) {
/**
 * ErrorAllInput
 */
class ErrorAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_User;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_ErrorType;
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
	 * @access public
	 * @var sboolean
	 */
	public $IsProcessed;
}}

if (!class_exists("ErrorAllResponse")) {
/**
 * ErrorAllResponse
 */
class ErrorAllResponse {
	/**
	 * @access public
	 * @var ArrayOfErrorAllOutput
	 */
	public $ErrorAllResult;
}}

if (!class_exists("ErrorAllOutput")) {
/**
 * ErrorAllOutput
 */
class ErrorAllOutput {
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
	public $ID_User;
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
	public $ID_ErrorType;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ErrorType;
	/**
	 * @access public
	 * @var sdateTime
	 */
	public $Date;
	/**
	 * @access public
	 * @var sstring
	 */
	public $URL;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Description;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsProcessed;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Browser;
}}

if (!class_exists("ActionAll")) {
/**
 * ActionAll
 */
class ActionAll {
	/**
	 * @access public
	 * @var ActionAllInput
	 */
	public $actionAllInput;
}}

if (!class_exists("ActionAllInput")) {
/**
 * ActionAllInput
 */
class ActionAllInput {
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
	public $ID_Table;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_TableRelated;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Operation;
}}

if (!class_exists("ActionAllResponse")) {
/**
 * ActionAllResponse
 */
class ActionAllResponse {
	/**
	 * @access public
	 * @var ArrayOfActionAllOutput
	 */
	public $ActionAllResult;
}}

if (!class_exists("ActionAllOutput")) {
/**
 * ActionAllOutput
 */
class ActionAllOutput {
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
	public $ID_Table;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Table;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_TableRelated;
	/**
	 * @access public
	 * @var sstring
	 */
	public $TableRelated;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Operation;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Operation;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $RequiresRecord;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsAnonymous;
}}

if (!class_exists("PermissionAll")) {
/**
 * PermissionAll
 */
class PermissionAll {
	/**
	 * @access public
	 * @var PermissionAllInput
	 */
	public $permissionAllInput;
}}

if (!class_exists("PermissionAllInput")) {
/**
 * PermissionAllInput
 */
class PermissionAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
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
	public $ID_GroupType;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsStatic;
}}

if (!class_exists("PermissionAllResponse")) {
/**
 * PermissionAllResponse
 */
class PermissionAllResponse {
	/**
	 * @access public
	 * @var ArrayOfPermissionAllOutput
	 */
	public $PermissionAllResult;
}}

if (!class_exists("PermissionAllOutput")) {
/**
 * PermissionAllOutput
 */
class PermissionAllOutput {
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
	public $ID_GroupType;
}}

if (!class_exists("GroupAll")) {
/**
 * GroupAll
 */
class GroupAll {
	/**
	 * @access public
	 * @var GroupAllInput
	 */
	public $groupAllInput;
}}

if (!class_exists("GroupAllInput")) {
/**
 * GroupAllInput
 */
class GroupAllInput {
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

if (!class_exists("GroupAllResponse")) {
/**
 * GroupAllResponse
 */
class GroupAllResponse {
	/**
	 * @access public
	 * @var ArrayOfGroupAllOutput
	 */
	public $GroupAllResult;
}}

if (!class_exists("GroupAllOutput")) {
/**
 * GroupAllOutput
 */
class GroupAllOutput {
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

if (!class_exists("GroupMemberApplication")) {
/**
 * GroupMemberApplication
 */
class GroupMemberApplication {
	/**
	 * @access public
	 * @var GroupMemberUpdateInput
	 */
	public $groupMemberApplicationInput;
}}

if (!class_exists("GroupMemberUpdateInput")) {
/**
 * GroupMemberUpdateInput
 */
class GroupMemberUpdateInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Grant;
}}

if (!class_exists("GroupMemberApplicationResponse")) {
/**
 * GroupMemberApplicationResponse
 */
class GroupMemberApplicationResponse {
}}

if (!class_exists("RolePermissionInsert")) {
/**
 * RolePermissionInsert
 */
class RolePermissionInsert {
	/**
	 * @access public
	 * @var RolePermission
	 */
	public $rolePermission;
}}

if (!class_exists("RolePermissionInsertResponse")) {
/**
 * RolePermissionInsertResponse
 */
class RolePermissionInsertResponse {
	/**
	 * @access public
	 * @var RolePermissionInsertOutput
	 */
	public $RolePermissionInsertResult;
}}

if (!class_exists("RolePermissionInsertOutput")) {
/**
 * RolePermissionInsertOutput
 */
class RolePermissionInsertOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
}}

if (!class_exists("RolePermissionAll")) {
/**
 * RolePermissionAll
 */
class RolePermissionAll {
	/**
	 * @access public
	 * @var RolePermissionAllInput
	 */
	public $rolePermissionAllInput;
}}

if (!class_exists("RolePermissionAllInput")) {
/**
 * RolePermissionAllInput
 */
class RolePermissionAllInput {
	/**
	 * @access public
	 * @var s1guid
	 */
	public $ID_Login;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Role;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Permission;
}}

if (!class_exists("RolePermissionAllResponse")) {
/**
 * RolePermissionAllResponse
 */
class RolePermissionAllResponse {
	/**
	 * @access public
	 * @var ArrayOfRolePermissionAllOutput
	 */
	public $RolePermissionAllResult;
}}

if (!class_exists("RolePermissionAllOutput")) {
/**
 * RolePermissionAllOutput
 */
class RolePermissionAllOutput {
	/**
	 * @access public
	 * @var sint
	 */
	public $ID;
	/**
	 * @access public
	 * @var sint
	 */
	public $ID_Role;
	/**
	 * @access public
	 * @var sstring
	 */
	public $ID_Permission;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Permission;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $IsHierarchic;
}}

if (!class_exists("guid")) {
/**
 * guid
 */
class guid {
}}

if (!class_exists("UserManagement")) {
/**
 * UserManagement
 * @author WSDLInterpreter
 */
class UserManagement extends SoapClient {
	/**
	 * Default class map for wsdl=>php
	 * @access private
	 * @var array
	 */
	private static $classmap = array(
		"WeekDayAll" => "WeekDayAll",
		"WeekDayAllInput" => "WeekDayAllInput",
		"WeekDayAllResponse" => "WeekDayAllResponse",
		"WeekDayAllOutput" => "WeekDayAllOutput",
		"LogAll" => "LogAll",
		"LogAllInput" => "LogAllInput",
		"LogAllResponse" => "LogAllResponse",
		"LogAllOutput" => "LogAllOutput",
		"RoleUpdate" => "RoleUpdate",
		"Role" => "Role",
		"RoleUpdateResponse" => "RoleUpdateResponse",
		"LogDetailHistory" => "LogDetailHistory",
		"LogDetailHistoryInput" => "LogDetailHistoryInput",
		"LogDetailHistoryResponse" => "LogDetailHistoryResponse",
		"LogDetailHistoryOutput" => "LogDetailHistoryOutput",
		"RoleInsert" => "RoleInsert",
		"RoleInsertResponse" => "RoleInsertResponse",
		"RoleInsertOutput" => "RoleInsertOutput",
		"RoleDetail" => "RoleDetail",
		"RoleDetailInput" => "RoleDetailInput",
		"RoleDetailResponse" => "RoleDetailResponse",
		"LoginUpdate" => "LoginUpdate",
		"LoginUpdateInput" => "LoginUpdateInput",
		"LoginUpdateResponse" => "LoginUpdateResponse",
		"LoginUpdateOutput" => "LoginUpdateOutput",
		"UserUpdate" => "UserUpdate",
		"UserUpdateInput" => "UserUpdateInput",
		"UserUpdateResponse" => "UserUpdateResponse",
		"ErrorUpdate" => "ErrorUpdate",
		"Error" => "Error",
		"ErrorUpdateResponse" => "ErrorUpdateResponse",
		"LoginInsert" => "LoginInsert",
		"LoginInsertInput" => "LoginInsertInput",
		"LoginInsertResponse" => "LoginInsertResponse",
		"LoginInsertOutput" => "LoginInsertOutput",
		"UserRoleDelete" => "UserRoleDelete",
		"UserRoleDeleteInput" => "UserRoleDeleteInput",
		"UserRoleDeleteResponse" => "UserRoleDeleteResponse",
		"UserInsert" => "UserInsert",
		"UserInsertInput" => "UserInsertInput",
		"UserInsertResponse" => "UserInsertResponse",
		"UserInsertOutput" => "UserInsertOutput",
		"ErrorInsert" => "ErrorInsert",
		"ErrorInsertResponse" => "ErrorInsertResponse",
		"ErrorInsertOutput" => "ErrorInsertOutput",
		"ErrorDetail" => "ErrorDetail",
		"ErrorDetailInput" => "ErrorDetailInput",
		"ErrorDetailResponse" => "ErrorDetailResponse",
		"UserDetail" => "UserDetail",
		"UserDetailInput" => "UserDetailInput",
		"UserDetailResponse" => "UserDetailResponse",
		"UserDetailOutput" => "User",
		"UserRoleALLUnit" => "UserRoleALLUnit",
		"UserRoleALLUnitInput" => "UserRoleALLUnitInput",
		"UserRoleALLUnitResponse" => "UserRoleALLUnitResponse",
		"UserRoleALLUnitOutput" => "UserRoleALLUnitOutput",
		"RolePermissionDelete" => "RolePermissionDelete",
		"RolePermissionDeleteInput" => "RolePermissionDeleteInput",
		"RolePermissionDeleteResponse" => "RolePermissionDeleteResponse",
		"PermissionAllLogin" => "PermissionAllLogin",
		"PermissionAllLoginInput" => "PermissionAllLoginInput",
		"PermissionAllLoginResponse" => "PermissionAllLoginResponse",
		"PermissionAllLoginOutput" => "PermissionAllLoginOutput",
		"ActionVerify" => "ActionVerify",
		"ActionVerifyInput" => "ActionVerifyInput",
		"ActionVerifyResponse" => "ActionVerifyResponse",
		"ActionVerifyOutput" => "ActionVerifyOutput",
		"OperationAll" => "OperationAll",
		"OperationAllInput" => "OperationAllInput",
		"OperationAllResponse" => "OperationAllResponse",
		"OperationAllOutput" => "OperationAllOutput",
		"UserUpdatePassword" => "UserUpdatePassword",
		"UserUpdatePasswordInput" => "UserUpdatePasswordInput",
		"UserUpdatePasswordResponse" => "UserUpdatePasswordResponse",
		"InstanceDetail" => "InstanceDetail",
		"InstanceDetailInput" => "InstanceDetailInput",
		"InstanceDetailResponse" => "InstanceDetailResponse",
		"InstanceDetailOutput" => "InstanceDetailOutput",
		"UserRoleAll" => "UserRoleAll",
		"UserRoleAllInput" => "UserRoleAllInput",
		"UserRoleAllResponse" => "UserRoleAllResponse",
		"UserRoleAllOutput" => "UserRole",
		"RoleAll" => "RoleAll",
		"RoleAllInput" => "RoleAllInput",
		"RoleAllResponse" => "RoleAllResponse",
		"RoleAllOutput" => "UserRole",
		"GroupTypeAll" => "GroupTypeAll",
		"GroupTypeAllInput" => "GroupTypeAllInput",
		"GroupTypeAllResponse" => "GroupTypeAllResponse",
		"GroupTypeAllOutput" => "GroupTypeAllOutput",
		"UserRoleUpdate" => "UserRoleUpdate",
		"UserRole" => "UserRole",
		"UserRoleUpdateResponse" => "UserRoleUpdateResponse",
		"RoleDelete" => "RoleDelete",
		"RoleDeleteInput" => "RoleDeleteInput",
		"RoleDeleteResponse" => "RoleDeleteResponse",
		"LoginUpdateLogout" => "LoginUpdateLogout",
		"LoginUpdateLogoutInput" => "LoginUpdateLogoutInput",
		"LoginUpdateLogoutResponse" => "LoginUpdateLogoutResponse",
		"UserPasswordRequest" => "UserPasswordRequest",
		"UserPasswordRequestInput" => "UserPasswordRequestInput",
		"UserPasswordRequestResponse" => "UserPasswordRequestResponse",
		"UserPasswordRequestOutput" => "UserPasswordRequestOutput",
		"UserAll" => "UserAll",
		"UserAllInput" => "UserAllInput",
		"UserAllResponse" => "UserAllResponse",
		"UserAllOutput" => "UserAllOutput",
		"LogDetail" => "LogDetail",
		"LogDetailInput" => "LogDetailInput",
		"LogDetailResponse" => "LogDetailResponse",
		"LogDetailOutput" => "LogDetailOutput",
		"UserRoleInsert" => "UserRoleInsert",
		"UserRoleInsertResponse" => "UserRoleInsertResponse",
		"UserRoleInsertOutput" => "UserRoleInsertOutput",
		"RolePermissionUpdate" => "RolePermissionUpdate",
		"RolePermission" => "RolePermission",
		"RolePermissionUpdateResponse" => "RolePermissionUpdateResponse",
		"LoginUpdateRefresh" => "LoginUpdateRefresh",
		"LoginUpdateRefreshInput" => "LoginUpdateRefreshInput",
		"LoginUpdateRefreshResponse" => "LoginUpdateRefreshResponse",
		"ErrorAll" => "ErrorAll",
		"ErrorAllInput" => "ErrorAllInput",
		"ErrorAllResponse" => "ErrorAllResponse",
		"ErrorAllOutput" => "ErrorAllOutput",
		"ActionAll" => "ActionAll",
		"ActionAllInput" => "ActionAllInput",
		"ActionAllResponse" => "ActionAllResponse",
		"ActionAllOutput" => "ActionAllOutput",
		"PermissionAll" => "PermissionAll",
		"PermissionAllInput" => "PermissionAllInput",
		"PermissionAllResponse" => "PermissionAllResponse",
		"PermissionAllOutput" => "PermissionAllOutput",
		"GroupAll" => "GroupAll",
		"GroupAllInput" => "GroupAllInput",
		"GroupAllResponse" => "GroupAllResponse",
		"GroupAllOutput" => "GroupAllOutput",
		"GroupMemberApplication" => "GroupMemberApplication",
		"GroupMemberUpdateInput" => "GroupMemberUpdateInput",
		"GroupMemberApplicationResponse" => "GroupMemberApplicationResponse",
		"RolePermissionInsert" => "RolePermissionInsert",
		"RolePermissionInsertResponse" => "RolePermissionInsertResponse",
		"RolePermissionInsertOutput" => "RolePermissionInsertOutput",
		"RolePermissionAll" => "RolePermissionAll",
		"RolePermissionAllInput" => "RolePermissionAllInput",
		"RolePermissionAllResponse" => "RolePermissionAllResponse",
		"RolePermissionAllOutput" => "RolePermissionAllOutput",
		"guid" => "guid",
	);

	/**
	 * Constructor using wsdl location and options array
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl=userManagemetWsdlAdress, $options=array("encoding"=>"utf-8")) {
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
	 * Service Call: WeekDayAll
	 * Parameter options:
	 * (WeekDayAll) parameters
	 * (WeekDayAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return WeekDayAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function WeekDayAll($mixed = null) {
		$validParameters = array(
			"(WeekDayAll)",
			"(WeekDayAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("WeekDayAll", $args);
	}


	/**
	 * Service Call: LogAll
	 * Parameter options:
	 * (LogAll) parameters
	 * (LogAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return LogAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function LogAll($mixed = null) {
		$validParameters = array(
			"(LogAll)",
			"(LogAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("LogAll", $args);
	}


	/**
	 * Service Call: RoleUpdate
	 * Parameter options:
	 * (RoleUpdate) parameters
	 * (RoleUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RoleUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function RoleUpdate($mixed = null) {
		$validParameters = array(
			"(RoleUpdate)",
			"(RoleUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RoleUpdate", $args);
	}


	/**
	 * Service Call: LogDetailHistory
	 * Parameter options:
	 * (LogDetailHistory) parameters
	 * (LogDetailHistory) parameters
	 * @param mixed,... See function description for parameter options
	 * @return LogDetailHistoryResponse
	 * @throws Exception invalid function signature message
	 */
	public function LogDetailHistory($mixed = null) {
		$validParameters = array(
			"(LogDetailHistory)",
			"(LogDetailHistory)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("LogDetailHistory", $args);
	}


	/**
	 * Service Call: RoleInsert
	 * Parameter options:
	 * (RoleInsert) parameters
	 * (RoleInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RoleInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function RoleInsert($mixed = null) {
		$validParameters = array(
			"(RoleInsert)",
			"(RoleInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RoleInsert", $args);
	}


	/**
	 * Service Call: RoleDetail
	 * Parameter options:
	 * (RoleDetail) parameters
	 * (RoleDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RoleDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function RoleDetail($mixed = null) {
		$validParameters = array(
			"(RoleDetail)",
			"(RoleDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RoleDetail", $args);
	}


	/**
	 * Service Call: LoginUpdate
	 * Parameter options:
	 * (LoginUpdate) parameters
	 * (LoginUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return LoginUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function LoginUpdate($mixed = null) {
		$validParameters = array(
			"(LoginUpdate)",
			"(LoginUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("LoginUpdate", $args);
	}


	/**
	 * Service Call: UserUpdate
	 * Parameter options:
	 * (UserUpdate) parameters
	 * (UserUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UserUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function UserUpdate($mixed = null) {
		$validParameters = array(
			"(UserUpdate)",
			"(UserUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UserUpdate", $args);
	}


	/**
	 * Service Call: ErrorUpdate
	 * Parameter options:
	 * (ErrorUpdate) parameters
	 * (ErrorUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return ErrorUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function ErrorUpdate($mixed = null) {
		$validParameters = array(
			"(ErrorUpdate)",
			"(ErrorUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("ErrorUpdate", $args);
	}


	/**
	 * Service Call: LoginInsert
	 * Parameter options:
	 * (LoginInsert) parameters
	 * (LoginInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return LoginInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function LoginInsert($mixed = null) {
		$validParameters = array(
			"(LoginInsert)",
			"(LoginInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("LoginInsert", $args);
	}


	/**
	 * Service Call: UserRoleDelete
	 * Parameter options:
	 * (UserRoleDelete) parameters
	 * (UserRoleDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UserRoleDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function UserRoleDelete($mixed = null) {
		$validParameters = array(
			"(UserRoleDelete)",
			"(UserRoleDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UserRoleDelete", $args);
	}


	/**
	 * Service Call: UserInsert
	 * Parameter options:
	 * (UserInsert) parameters
	 * (UserInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UserInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function UserInsert($mixed = null) {
		$validParameters = array(
			"(UserInsert)",
			"(UserInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UserInsert", $args);
	}


	/**
	 * Service Call: ErrorInsert
	 * Parameter options:
	 * (ErrorInsert) parameters
	 * (ErrorInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return ErrorInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function ErrorInsert($mixed = null) {
		$validParameters = array(
			"(ErrorInsert)",
			"(ErrorInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("ErrorInsert", $args);
	}


	/**
	 * Service Call: ErrorDetail
	 * Parameter options:
	 * (ErrorDetail) parameters
	 * (ErrorDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return ErrorDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function ErrorDetail($mixed = null) {
		$validParameters = array(
			"(ErrorDetail)",
			"(ErrorDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("ErrorDetail", $args);
	}


	/**
	 * Service Call: UserDetail
	 * Parameter options:
	 * (UserDetail) parameters
	 * (UserDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UserDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function UserDetail($mixed = null) {
		$validParameters = array(
			"(UserDetail)",
			"(UserDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UserDetail", $args);
	}


	/**
	 * Service Call: UserRoleALLUnit
	 * Parameter options:
	 * (UserRoleALLUnit) parameters
	 * (UserRoleALLUnit) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UserRoleALLUnitResponse
	 * @throws Exception invalid function signature message
	 */
	public function UserRoleALLUnit($mixed = null) {
		$validParameters = array(
			"(UserRoleALLUnit)",
			"(UserRoleALLUnit)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UserRoleALLUnit", $args);
	}


	/**
	 * Service Call: RolePermissionDelete
	 * Parameter options:
	 * (RolePermissionDelete) parameters
	 * (RolePermissionDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RolePermissionDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function RolePermissionDelete($mixed = null) {
		$validParameters = array(
			"(RolePermissionDelete)",
			"(RolePermissionDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RolePermissionDelete", $args);
	}


	/**
	 * Service Call: PermissionAllLogin
	 * Parameter options:
	 * (PermissionAllLogin) parameters
	 * (PermissionAllLogin) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PermissionAllLoginResponse
	 * @throws Exception invalid function signature message
	 */
	public function PermissionAllLogin($mixed = null) {
		$validParameters = array(
			"(PermissionAllLogin)",
			"(PermissionAllLogin)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PermissionAllLogin", $args);
	}


	/**
	 * Service Call: ActionVerify
	 * Parameter options:
	 * (ActionVerify) parameters
	 * (ActionVerify) parameters
	 * @param mixed,... See function description for parameter options
	 * @return ActionVerifyResponse
	 * @throws Exception invalid function signature message
	 */
	public function ActionVerify($mixed = null) {
		$validParameters = array(
			"(ActionVerify)",
			"(ActionVerify)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("ActionVerify", $args);
	}


	/**
	 * Service Call: OperationAll
	 * Parameter options:
	 * (OperationAll) parameters
	 * (OperationAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return OperationAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function OperationAll($mixed = null) {
		$validParameters = array(
			"(OperationAll)",
			"(OperationAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("OperationAll", $args);
	}


	/**
	 * Service Call: UserUpdatePassword
	 * Parameter options:
	 * (UserUpdatePassword) parameters
	 * (UserUpdatePassword) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UserUpdatePasswordResponse
	 * @throws Exception invalid function signature message
	 */
	public function UserUpdatePassword($mixed = null) {
		$validParameters = array(
			"(UserUpdatePassword)",
			"(UserUpdatePassword)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UserUpdatePassword", $args);
	}


	/**
	 * Service Call: InstanceDetail
	 * Parameter options:
	 * (InstanceDetail) parameters
	 * (InstanceDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return InstanceDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function InstanceDetail($mixed = null) {
		$validParameters = array(
			"(InstanceDetail)",
			"(InstanceDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("InstanceDetail", $args);
	}


	/**
	 * Service Call: UserRoleAll
	 * Parameter options:
	 * (UserRoleAll) parameters
	 * (UserRoleAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UserRoleAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function UserRoleAll($mixed = null) {
		$validParameters = array(
			"(UserRoleAll)",
			"(UserRoleAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UserRoleAll", $args);
	}


	/**
	 * Service Call: RoleAll
	 * Parameter options:
	 * (RoleAll) parameters
	 * (RoleAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RoleAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function RoleAll($mixed = null) {
		$validParameters = array(
			"(RoleAll)",
			"(RoleAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RoleAll", $args);
	}


	/**
	 * Service Call: GroupTypeAll
	 * Parameter options:
	 * (GroupTypeAll) parameters
	 * (GroupTypeAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return GroupTypeAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function GroupTypeAll($mixed = null) {
		$validParameters = array(
			"(GroupTypeAll)",
			"(GroupTypeAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("GroupTypeAll", $args);
	}


	/**
	 * Service Call: UserRoleUpdate
	 * Parameter options:
	 * (UserRoleUpdate) parameters
	 * (UserRoleUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UserRoleUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function UserRoleUpdate($mixed = null) {
		$validParameters = array(
			"(UserRoleUpdate)",
			"(UserRoleUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UserRoleUpdate", $args);
	}


	/**
	 * Service Call: RoleDelete
	 * Parameter options:
	 * (RoleDelete) parameters
	 * (RoleDelete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RoleDeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function RoleDelete($mixed = null) {
		$validParameters = array(
			"(RoleDelete)",
			"(RoleDelete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RoleDelete", $args);
	}


	/**
	 * Service Call: LoginUpdateLogout
	 * Parameter options:
	 * (LoginUpdateLogout) parameters
	 * (LoginUpdateLogout) parameters
	 * @param mixed,... See function description for parameter options
	 * @return LoginUpdateLogoutResponse
	 * @throws Exception invalid function signature message
	 */
	public function LoginUpdateLogout($mixed = null) {
		$validParameters = array(
			"(LoginUpdateLogout)",
			"(LoginUpdateLogout)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("LoginUpdateLogout", $args);
	}


	/**
	 * Service Call: UserPasswordRequest
	 * Parameter options:
	 * (UserPasswordRequest) parameters
	 * (UserPasswordRequest) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UserPasswordRequestResponse
	 * @throws Exception invalid function signature message
	 */
	public function UserPasswordRequest($mixed = null) {
		$validParameters = array(
			"(UserPasswordRequest)",
			"(UserPasswordRequest)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UserPasswordRequest", $args);
	}


	/**
	 * Service Call: UserAll
	 * Parameter options:
	 * (UserAll) parameters
	 * (UserAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UserAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function UserAll($mixed = null) {
		$validParameters = array(
			"(UserAll)",
			"(UserAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UserAll", $args);
	}


	/**
	 * Service Call: LogDetail
	 * Parameter options:
	 * (LogDetail) parameters
	 * (LogDetail) parameters
	 * @param mixed,... See function description for parameter options
	 * @return LogDetailResponse
	 * @throws Exception invalid function signature message
	 */
	public function LogDetail($mixed = null) {
		$validParameters = array(
			"(LogDetail)",
			"(LogDetail)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("LogDetail", $args);
	}


	/**
	 * Service Call: UserRoleInsert
	 * Parameter options:
	 * (UserRoleInsert) parameters
	 * (UserRoleInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UserRoleInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function UserRoleInsert($mixed = null) {
		$validParameters = array(
			"(UserRoleInsert)",
			"(UserRoleInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UserRoleInsert", $args);
	}


	/**
	 * Service Call: RolePermissionUpdate
	 * Parameter options:
	 * (RolePermissionUpdate) parameters
	 * (RolePermissionUpdate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RolePermissionUpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function RolePermissionUpdate($mixed = null) {
		$validParameters = array(
			"(RolePermissionUpdate)",
			"(RolePermissionUpdate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RolePermissionUpdate", $args);
	}


	/**
	 * Service Call: LoginUpdateRefresh
	 * Parameter options:
	 * (LoginUpdateRefresh) parameters
	 * (LoginUpdateRefresh) parameters
	 * @param mixed,... See function description for parameter options
	 * @return LoginUpdateRefreshResponse
	 * @throws Exception invalid function signature message
	 */
	public function LoginUpdateRefresh($mixed = null) {
		$validParameters = array(
			"(LoginUpdateRefresh)",
			"(LoginUpdateRefresh)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("LoginUpdateRefresh", $args);
	}


	/**
	 * Service Call: ErrorAll
	 * Parameter options:
	 * (ErrorAll) parameters
	 * (ErrorAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return ErrorAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function ErrorAll($mixed = null) {
		$validParameters = array(
			"(ErrorAll)",
			"(ErrorAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("ErrorAll", $args);
	}


	/**
	 * Service Call: ActionAll
	 * Parameter options:
	 * (ActionAll) parameters
	 * (ActionAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return ActionAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function ActionAll($mixed = null) {
		$validParameters = array(
			"(ActionAll)",
			"(ActionAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("ActionAll", $args);
	}


	/**
	 * Service Call: PermissionAll
	 * Parameter options:
	 * (PermissionAll) parameters
	 * (PermissionAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return PermissionAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function PermissionAll($mixed = null) {
		$validParameters = array(
			"(PermissionAll)",
			"(PermissionAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("PermissionAll", $args);
	}


	/**
	 * Service Call: GroupAll
	 * Parameter options:
	 * (GroupAll) parameters
	 * (GroupAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return GroupAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function GroupAll($mixed = null) {
		$validParameters = array(
			"(GroupAll)",
			"(GroupAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("GroupAll", $args);
	}


	/**
	 * Service Call: GroupMemberApplication
	 * Parameter options:
	 * (GroupMemberApplication) parameters
	 * (GroupMemberApplication) parameters
	 * @param mixed,... See function description for parameter options
	 * @return GroupMemberApplicationResponse
	 * @throws Exception invalid function signature message
	 */
	public function GroupMemberApplication($mixed = null) {
		$validParameters = array(
			"(GroupMemberApplication)",
			"(GroupMemberApplication)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("GroupMemberApplication", $args);
	}


	/**
	 * Service Call: RolePermissionInsert
	 * Parameter options:
	 * (RolePermissionInsert) parameters
	 * (RolePermissionInsert) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RolePermissionInsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function RolePermissionInsert($mixed = null) {
		$validParameters = array(
			"(RolePermissionInsert)",
			"(RolePermissionInsert)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RolePermissionInsert", $args);
	}


	/**
	 * Service Call: RolePermissionAll
	 * Parameter options:
	 * (RolePermissionAll) parameters
	 * (RolePermissionAll) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RolePermissionAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function RolePermissionAll($mixed = null) {
		$validParameters = array(
			"(RolePermissionAll)",
			"(RolePermissionAll)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RolePermissionAll", $args);
	}


}}

?>
