<?php
/**
    Joomla Netsuite authentication bridge
    Copyright (C) 2010-2011 Viren Kumar
    http://www.viren.ca

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see http://www.gnu.org/licenses/.
 */
 
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
 
jimport('joomla.event.plugin');
jimport('joomla.user.helper');
jimport( 'joomla.plugin.plugin' );

//BEGIN NetSuiteService_250.php - full


class RecordType {
}

class GetAllRecordType {
}

class GetCustomizationType {
}

class InitializeType {
}

class InitializeRefType {
}

class DeletedRecordType {
}

class GetSelectValueType {
}

class AsyncStatusType {
}

class SearchStringFieldOperator {
}

class SearchLongFieldOperator {
}

class SearchTextNumberFieldOperator {
}

class SearchDoubleFieldOperator {
}

class SearchDateFieldOperator {
}

class SearchEnumMultiSelectFieldOperator {
}

class SearchMultiSelectFieldOperator {
}

class SearchTimeFieldOperator {
}

class SearchPeriodFieldOperator {
}

class SearchDate {
}

class StatusDetailType {
}

class StatusDetailCodeType {
}

class FaultCodeType {
}

class Passport {
  public $email; // string
  public $password; // string
  public $account; // string
  public $role; // RecordRef
}

class SsoCredentials {
  public $email; // string
  public $password; // string
  public $account; // string
  public $role; // RecordRef
  public $authenticationToken; // string
  public $partnerId; // string
}

class ChangePasswordOrEmailCredentials {
  public $currentPassword; // string
  public $newEmail; // string
  public $newEmail2; // string
  public $newPassword; // string
  public $newPassword2; // string
  public $justThisAccount; // boolean
}

class StatusDetail {
  public $code; // StatusDetailCodeType
  public $message; // string
  public $type; // StatusDetailType
}

class Status {
  public $statusDetail; // StatusDetail
  public $isSuccess; // boolean
}

class WsRole {
  public $role; // RecordRef
  public $isDefault; // boolean
  public $isInactive; // boolean
}

class WsRoleList {
  public $wsRole; // WsRole
}

class Record {
  public $nullFieldList; // NullField
}

class NullField {
  public $name; // string
}

class SearchRecord {
}

class SearchResult {
  public $status; // Status
  public $totalRecords; // int
  public $pageSize; // int
  public $totalPages; // int
  public $pageIndex; // int
  public $recordList; // RecordList
}

class AsyncStatusResult {
  public $jobId; // string
  public $status; // AsyncStatusType
  public $percentCompleted; // double
  public $estRemainingDuration; // double
}

class GetAllResult {
  public $status; // Status
  public $totalRecords; // int
  public $recordList; // RecordList
}

class GetCustomizationResult {
  public $status; // Status
  public $totalRecords; // int
  public $recordList; // RecordList
}

class getSelectValueResult {
  public $status; // Status
  public $totalRecords; // int
  public $recordRefList; // RecordRefList
}

class RecordList {
  public $record; // Record
}

class RecordRefList {
  public $recordRef; // RecordRef
}

class BaseRef {
  public $name; // string
}

class RecordRef {
  public $internalId; // string
  public $externalId; // string
  public $type; // RecordType
}

class CustomRecordRef {
  public $internalId; // string
  public $externalId; // string
  public $typeId; // string
}

class InitializeRecord {
  public $type; // InitializeType
  public $reference; // InitializeRef
}

class InitializeRef {
  public $type; // InitializeRefType
  public $internalId; // string
  public $externalId; // string
}

class GetAllRecord {
  public $recordType; // GetAllRecordType
}

class CustomizationType {
  public $getCustomizationType; // GetCustomizationType
}

class GetSelectValueField {
  public $searchCriteria; // string
  public $fieldType; // GetSelectValueType
}

class ListOrRecordRef {
  public $name; // string
  public $internalId; // string
  public $typeId; // string
}

class CustomFieldRef {
}

class LongCustomFieldRef {
  public $value; // long
  public $internalId; // string
}

class DoubleCustomFieldRef {
  public $value; // double
  public $internalId; // string
}

class BooleanCustomFieldRef {
  public $value; // boolean
  public $internalId; // string
}

class StringCustomFieldRef {
  public $value; // string
  public $internalId; // string
}

class DateCustomFieldRef {
  public $value; // dateTime
  public $internalId; // string
}

class SelectCustomFieldRef {
  public $value; // ListOrRecordRef
  public $internalId; // string
}

class MultiSelectCustomFieldRef {
  public $value; // ListOrRecordRef
  public $internalId; // string
}

class CustomFieldList {
  public $customField; // CustomFieldRef
}

class SearchBooleanField {
  public $searchValue; // boolean
}

class SearchStringField {
  public $searchValue; // string
  public $operator; // SearchStringFieldOperator
}

class SearchLongField {
  public $searchValue; // long
  public $searchValue2; // long
  public $operator; // SearchLongFieldOperator
}

class SearchTextNumberField {
  public $searchValue; // string
  public $searchValue2; // string
  public $operator; // SearchTextNumberFieldOperator
}

class SearchDoubleField {
  public $searchValue; // double
  public $searchValue2; // double
  public $operator; // SearchDoubleFieldOperator
}

class SearchDateField {
  public $predefinedSearchValue; // SearchDate
  public $searchValue; // dateTime
  public $searchValue2; // dateTime
  public $operator; // SearchDateFieldOperator
}

class SearchEnumMultiSelectField {
  public $searchValue; // string
  public $operator; // SearchEnumMultiSelectFieldOperator
}

class SearchMultiSelectField {
  public $searchValue; // RecordRef
  public $operator; // SearchMultiSelectFieldOperator
}

class SearchCustomField {
}

class SearchBooleanCustomField {
  public $searchValue; // boolean
  public $internalId; // string
}

class SearchStringCustomField {
  public $searchValue; // string
  public $internalId; // string
  public $operator; // SearchStringFieldOperator
}

class SearchLongCustomField {
  public $searchValue; // long
  public $searchValue2; // long
  public $internalId; // string
  public $operator; // SearchLongFieldOperator
}

class SearchDoubleCustomField {
  public $searchValue; // double
  public $searchValue2; // double
  public $internalId; // string
  public $operator; // SearchDoubleFieldOperator
}

class SearchDateCustomField {
  public $predefinedSearchValue; // SearchDate
  public $searchValue; // dateTime
  public $searchValue2; // dateTime
  public $internalId; // string
  public $operator; // SearchDateFieldOperator
}

class SearchEnumMultiSelectCustomField {
  public $searchValue; // string
  public $internalId; // string
  public $operator; // SearchEnumMultiSelectFieldOperator
}

class SearchMultiSelectCustomField {
  public $searchValue; // ListOrRecordRef
  public $internalId; // string
  public $operator; // SearchMultiSelectFieldOperator
}

class SearchCustomFieldList {
  public $customField; // SearchCustomField
}

class ItemAvailabilityFilter {
  public $item; // RecordRefList
  public $lastQtyAvailableChange; // dateTime
}

class ItemAvailability {
  public $item; // RecordRef
  public $lastQtyAvailableChange; // dateTime
  public $locationId; // RecordRef
  public $quantityOnHand; // double
  public $onHandValueMli; // double
  public $reorderPoint; // double
  public $preferredStockLevel; // double
  public $quantityOnOrder; // double
  public $quantityCommitted; // double
  public $quantityBackOrdered; // double
  public $quantityAvailable; // double
}

class ItemAvailabilityList {
  public $itemAvailability; // ItemAvailability
}

class GetItemAvailabilityResult {
  public $status; // Status
  public $itemAvailabilityList; // ItemAvailabilityList
}

class DeletedRecord {
  public $deletedDate; // dateTime
  public $record; // BaseRef
}

class DeletedRecordList {
  public $deletedRecord; // DeletedRecord
}

class GetDeletedResult {
  public $status; // Status
  public $deletedRecordList; // DeletedRecordList
}

class GetDeletedFilter {
  public $deletedDate; // SearchDateField
  public $type; // SearchEnumMultiSelectField
}

class AttachReference {
  public $attachTo; // RecordRef
}

class AttachContactReference {
  public $contact; // RecordRef
  public $contactRole; // RecordRef
}

class AttachBasicReference {
  public $attachedRecord; // RecordRef
}

class InsufficientPermissionFault {
}

class InvalidAccountFault {
}

class InvalidCredentialsFault {
}

class InvalidSessionFault {
}

class ExceededRequestLimitFault {
}

class ExceededUsageLimitFault {
}

class ExceededRecordCountFault {
}

class InvalidVersionFault {
}

class AsyncFault {
}

class UnexpectedErrorFault {
}

class SessionInfo {
  public $userId; // string
}

class ApplicationInfo {
  public $applicationId; // string
}

class PartnerInfo {
  public $partnerId; // string
}

class DocumentInfo {
  public $nsId; // string
}

class Preferences {
  public $warningAsError; // boolean
  public $useConditionalDefaultsOnAdd; // boolean
  public $useConditionalDefaultsOnUpdate; // boolean
  public $disableMandatoryCustomFieldValidation; // boolean
  public $disableSystemNotesForCustomFields; // boolean
  public $ignoreReadOnlyFields; // boolean
}

class SearchPreferences {
  public $bodyFieldsOnly; // boolean
  public $pageSize; // int
}

class SessionResponse {
  public $status; // Status
  public $wsRoleList; // WsRoleList
}

class WriteResponse {
  public $status; // Status
  public $baseRef; // BaseRef
}

class ReadResponse {
  public $status; // Status
  public $record; // Record
}

class WriteResponseList {
  public $writeResponse; // WriteResponse
}

class ReadResponseList {
  public $readResponse; // ReadResponse
}

class LoginResponse {
  public $sessionResponse; // SessionResponse
}

class MapSsoResponse {
  public $sessionResponse; // SessionResponse
}

class ChangePasswordOrEmailResponse {
  public $sessionResponse; // SessionResponse
}

class LogoutResponse {
  public $sessionResponse; // SessionResponse
}

class AddResponse {
  public $writeResponse; // WriteResponse
}

class AddListResponse {
  public $writeResponseList; // WriteResponseList
}

class UpdateResponse {
  public $writeResponse; // WriteResponse
}

class UpdateListResponse {
  public $writeResponseList; // WriteResponseList
}

class DeleteResponse {
  public $writeResponse; // WriteResponse
}

class DeleteListResponse {
  public $writeResponseList; // WriteResponseList
}

class SearchResponse {
  public $searchResult; // SearchResult
}

class SearchMoreResponse {
  public $searchResult; // SearchResult
}

class SearchNextResponse {
  public $searchResult; // SearchResult
}

class GetResponse {
  public $readResponse; // ReadResponse
}

class GetListResponse {
  public $readResponseList; // ReadResponseList
}

class GetAllResponse {
  public $getAllResult; // GetAllResult
}

class GetCustomizationResponse {
  public $getCustomizationResult; // GetCustomizationResult
}

class InitializeResponse {
  public $readResponse; // ReadResponse
}

class getSelectValueResponse {
  public $getSelectValueResult; // getSelectValueResult
}

class GetItemAvailabilityResponse {
  public $getItemAvailabilityResult; // GetItemAvailabilityResult
}

class AttachResponse {
  public $writeResponse; // WriteResponse
}

class DetachResponse {
  public $writeResponse; // WriteResponse
}

class AsyncStatusResponse {
  public $asyncStatusResult; // AsyncStatusResult
}

class GetAsyncResultResponse {
  public $asyncResult; // AsyncResult
}

class AsyncResult {
}

class AsyncAddListResult {
  public $writeResponseList; // WriteResponseList
}

class AsyncUpdateListResult {
  public $writeResponseList; // WriteResponseList
}

class AsyncDeleteListResult {
  public $writeResponseList; // WriteResponseList
}

class AsyncGetListResult {
  public $readResponseList; // ReadResponseList
}

class AsyncSearchResult {
  public $searchResult; // SearchResult
}

class GetDeletedResponse {
  public $getDeletedResult; // GetDeletedResult
}

class LoginRequest {
  public $passport; // Passport
}

class MapSsoRequest {
  public $ssoCredentials; // SsoCredentials
}

class ChangePasswordOrEmailRequest {
  public $changePasswordOrEmailCredentials; // ChangePasswordOrEmailCredentials
}

class LogoutRequest {
}

class AddRequest {
  public $record; // Record
}

class DeleteRequest {
  public $baseRef; // BaseRef
}

class SearchRequest {
  public $searchRecord; // SearchRecord
}

class SearchMoreRequest {
  public $pageIndex; // int
}

class SearchNextRequest {
}

class UpdateRequest {
  public $record; // Record
}

class AddListRequest {
  public $record; // Record
}

class DeleteListRequest {
  public $baseRef; // BaseRef
}

class UpdateListRequest {
  public $record; // Record
}

class GetRequest {
  public $baseRef; // BaseRef
}

class GetListRequest {
  public $baseRef; // BaseRef
}

class GetAllRequest {
  public $record; // GetAllRecord
}

class GetCustomizationRequest {
  public $customizationType; // CustomizationType
}

class InitializeRequest {
  public $initializeRecord; // InitializeRecord
}

class getSelectValueRequest {
  public $fieldName; // GetSelectValueField
}

class GetItemAvailabilityRequest {
  public $itemAvailabilityFilter; // ItemAvailabilityFilter
}

class AttachRequest {
  public $attachReferece; // AttachReference
}

class DetachRequest {
  public $attachReferece; // AttachReference
}

class AsyncAddListRequest {
  public $record; // Record
}

class AsyncUpdateListRequest {
  public $record; // Record
}

class AsyncDeleteListRequest {
  public $baseRef; // BaseRef
}

class AsyncGetListRequest {
  public $baseRef; // BaseRef
}

class AsyncSearchRequest {
  public $searchRecord; // SearchRecord
}

class CheckAsyncStatusRequest {
  public $jobId; // string
}

class GetAsyncResultRequest {
  public $jobId; // string
  public $pageIndex; // int
}

class GetDeletedRequest {
  public $getDeletedFilter; // GetDeletedFilter
}

class Country {
}

class Language {
}

class State {
}

class StateAbbreviation {
}

class AvsMatchCode {
}

class CostingMethod {
}

class EntitySearchBasic {
  public $address; // SearchStringField
  public $city; // SearchStringField
  public $country; // SearchEnumMultiSelectField
  public $county; // SearchStringField
  public $dateCreated; // SearchDateField
  public $email; // SearchStringField
  public $entityId; // SearchStringField
  public $externalId; // SearchMultiSelectField
  public $fax; // SearchStringField
  public $giveAccess; // SearchBooleanField
  public $image; // SearchStringField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $language; // SearchStringField
  public $lastModifiedDate; // SearchDateField
  public $phone; // SearchStringField
  public $phoneticName; // SearchStringField
  public $state; // SearchStringField
  public $unsubscribe; // SearchBooleanField
  public $zipCode; // SearchStringField
}

class ContactSearchBasic {
  public $address; // SearchStringField
  public $availableOffline; // SearchBooleanField
  public $category; // SearchMultiSelectField
  public $city; // SearchStringField
  public $company; // SearchStringField
  public $contactRole; // SearchMultiSelectField
  public $country; // SearchEnumMultiSelectField
  public $county; // SearchStringField
  public $dateCreated; // SearchDateField
  public $email; // SearchStringField
  public $entityId; // SearchStringField
  public $externalId; // SearchMultiSelectField
  public $fax; // SearchStringField
  public $firstName; // SearchStringField
  public $giveAccess; // SearchBooleanField
  public $group; // SearchMultiSelectField
  public $hasDuplicates; // SearchBooleanField
  public $image; // SearchStringField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $isPrivate; // SearchBooleanField
  public $language; // SearchStringField
  public $lastModifiedDate; // SearchDateField
  public $lastName; // SearchStringField
  public $middleName; // SearchStringField
  public $owner; // SearchMultiSelectField
  public $phone; // SearchStringField
  public $phoneticName; // SearchStringField
  public $salutation; // SearchStringField
  public $state; // SearchStringField
  public $title; // SearchStringField
  public $type; // SearchEnumMultiSelectField
  public $unsubscribe; // SearchBooleanField
  public $zipCode; // SearchStringField
  public $customFieldList; // SearchCustomFieldList
}

class CustomerSearchBasic {
  public $accountNumber; // SearchStringField
  public $address; // SearchStringField
  public $availableOffline; // SearchBooleanField
  public $balance; // SearchDoubleField
  public $boughtAmount; // SearchDoubleField
  public $boughtDate; // SearchDateField
  public $category; // SearchMultiSelectField
  public $ccCustomerCode; // SearchStringField
  public $ccDefault; // SearchBooleanField
  public $ccExpDate; // SearchDateField
  public $ccHolderName; // SearchStringField
  public $ccNumber; // SearchStringField
  public $ccType; // SearchMultiSelectField
  public $city; // SearchStringField
  public $classBought; // SearchMultiSelectField
  public $comments; // SearchStringField
  public $contact; // SearchStringField
  public $contribution; // SearchLongField
  public $country; // SearchEnumMultiSelectField
  public $county; // SearchStringField
  public $creditHoldOverride; // SearchBooleanField
  public $creditLimit; // SearchDoubleField
  public $currency; // SearchMultiSelectField
  public $custStage; // SearchMultiSelectField
  public $custStatus; // SearchMultiSelectField
  public $dateClosed; // SearchDateField
  public $dateCreated; // SearchDateField
  public $daysOverdue; // SearchLongField
  public $deptBought; // SearchMultiSelectField
  public $email; // SearchStringField
  public $endDate; // SearchDateField
  public $entityId; // SearchStringField
  public $entityStatus; // SearchMultiSelectField
  public $externalId; // SearchMultiSelectField
  public $fax; // SearchStringField
  public $firstName; // SearchStringField
  public $firstSaleDate; // SearchDateField
  public $giveAccess; // SearchBooleanField
  public $group; // SearchMultiSelectField
  public $hasDuplicates; // SearchBooleanField
  public $image; // SearchStringField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $isPerson; // SearchBooleanField
  public $isReportedLead; // SearchBooleanField
  public $isShipAddress; // SearchBooleanField
  public $itemsBought; // SearchMultiSelectField
  public $itemsOrdered; // SearchMultiSelectField
  public $language; // SearchStringField
  public $lastModifiedDate; // SearchDateField
  public $lastName; // SearchStringField
  public $leadSource; // SearchMultiSelectField
  public $locationBought; // SearchMultiSelectField
  public $manualCreditHold; // SearchBooleanField
  public $merchantAccount; // SearchMultiSelectField
  public $middleName; // SearchStringField
  public $onCreditHold; // SearchBooleanField
  public $overdueBalance; // SearchDoubleField
  public $parent; // SearchMultiSelectField
  public $parentItemsBought; // SearchMultiSelectField
  public $partner; // SearchMultiSelectField
  public $pec; // SearchStringField
  public $phone; // SearchStringField
  public $phoneticName; // SearchStringField
  public $priceLevel; // SearchMultiSelectField
  public $prospectDate; // SearchDateField
  public $pstExempt; // SearchBooleanField
  public $reminderDate; // SearchDateField
  public $resaleNumber; // SearchStringField
  public $salesRep; // SearchMultiSelectField
  public $salesTeamMember; // SearchMultiSelectField
  public $salesTeamRole; // SearchMultiSelectField
  public $salutation; // SearchStringField
  public $shipComplete; // SearchBooleanField
  public $shippingItem; // SearchMultiSelectField
  public $stage; // SearchEnumMultiSelectField
  public $startDate; // SearchDateField
  public $state; // SearchStringField
  public $taxable; // SearchBooleanField
  public $territory; // SearchMultiSelectField
  public $unsubscribe; // SearchBooleanField
  public $url; // SearchStringField
  public $webLead; // SearchBooleanField
  public $zipCode; // SearchStringField
  public $customFieldList; // SearchCustomFieldList
}

class CalendarEventSearchBasic {
  public $attendee; // SearchMultiSelectField
  public $calendar; // SearchMultiSelectField
  public $completedDate; // SearchDateField
  public $createdDate; // SearchDateField
  public $externalId; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $isUpcomingEvent; // SearchBooleanField
  public $lastModifiedDate; // SearchDateField
  public $location; // SearchStringField
  public $organizer; // SearchMultiSelectField
  public $resource; // SearchMultiSelectField
  public $response; // SearchEnumMultiSelectField
  public $startDate; // SearchDateField
  public $status; // SearchEnumMultiSelectField
  public $title; // SearchStringField
  public $customFieldList; // SearchCustomFieldList
}

class TaskSearchBasic {
  public $assigned; // SearchMultiSelectField
  public $company; // SearchMultiSelectField
  public $completedDate; // SearchDateField
  public $contact; // SearchMultiSelectField
  public $createdDate; // SearchDateField
  public $endDate; // SearchDateField
  public $estimatedTime; // SearchDoubleField
  public $estimatedTimeOverride; // SearchDoubleField
  public $externalId; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $isPrivate; // SearchBooleanField
  public $lastModifiedDate; // SearchDateField
  public $milestone; // SearchLongField
  public $owner; // SearchMultiSelectField
  public $percentComplete; // SearchLongField
  public $percentTimeComplete; // SearchLongField
  public $priority; // SearchEnumMultiSelectField
  public $startDate; // SearchDateField
  public $status; // SearchEnumMultiSelectField
  public $title; // SearchStringField
  public $customFieldList; // SearchCustomFieldList
}

class OpportunitySearchBasic {
  public $amount; // SearchDoubleField
  public $availableOffline; // SearchBooleanField
  public $class; // SearchMultiSelectField
  public $closeDate; // SearchDateField
  public $competitor; // SearchMultiSelectField
  public $contribution; // SearchLongField
  public $currencyName; // SearchMultiSelectField
  public $custType; // SearchMultiSelectField
  public $dateCreated; // SearchDateField
  public $daysOpen; // SearchLongField
  public $daysToClose; // SearchLongField
  public $department; // SearchMultiSelectField
  public $entity; // SearchMultiSelectField
  public $entityStatus; // SearchMultiSelectField
  public $expectedCloseDate; // SearchDateField
  public $externalId; // SearchMultiSelectField
  public $forecastType; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $item; // SearchMultiSelectField
  public $lastModifiedDate; // SearchDateField
  public $leadSource; // SearchMultiSelectField
  public $location; // SearchMultiSelectField
  public $memo; // SearchStringField
  public $number; // SearchLongField
  public $partner; // SearchMultiSelectField
  public $postingPeriod; // SearchMultiSelectField
  public $probability; // SearchLongField
  public $projAltSalesAmt; // SearchDoubleField
  public $projectedTotal; // SearchDoubleField
  public $rangeHigh; // SearchDoubleField
  public $rangeHighAlt; // SearchDoubleField
  public $rangeLow; // SearchDoubleField
  public $rangeLowAlt; // SearchDoubleField
  public $salesRep; // SearchMultiSelectField
  public $salesTeamMember; // SearchMultiSelectField
  public $salesTeamRole; // SearchMultiSelectField
  public $status; // SearchEnumMultiSelectField
  public $title; // SearchStringField
  public $tranDate; // SearchDateField
  public $tranId; // SearchStringField
  public $winLossReason; // SearchMultiSelectField
  public $wonBy; // SearchMultiSelectField
  public $customFieldList; // SearchCustomFieldList
}

class EmployeeSearchBasic {
  public $address; // SearchStringField
  public $alienNumber; // SearchStringField
  public $anniversary; // SearchDateField
  public $approvalLimit; // SearchDoubleField
  public $authworkDate; // SearchDateField
  public $billingClass; // SearchMultiSelectField
  public $birthDate; // SearchDateField
  public $birthDay; // SearchDateField
  public $cContribution; // SearchMultiSelectField
  public $city; // SearchStringField
  public $class; // SearchMultiSelectField
  public $country; // SearchEnumMultiSelectField
  public $county; // SearchStringField
  public $dateCreated; // SearchDateField
  public $deduction; // SearchMultiSelectField
  public $department; // SearchMultiSelectField
  public $earning; // SearchMultiSelectField
  public $education; // SearchMultiSelectField
  public $eligibleForCommission; // SearchBooleanField
  public $email; // SearchStringField
  public $employeeStatus; // SearchMultiSelectField
  public $employeeType; // SearchMultiSelectField
  public $employeeTypeKpi; // SearchBooleanField
  public $entityId; // SearchStringField
  public $ethnicity; // SearchMultiSelectField
  public $externalId; // SearchMultiSelectField
  public $fax; // SearchStringField
  public $firstName; // SearchStringField
  public $gender; // SearchBooleanField
  public $giveAccess; // SearchBooleanField
  public $group; // SearchMultiSelectField
  public $hireDate; // SearchDateField
  public $I9Verified; // SearchBooleanField
  public $image; // SearchStringField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $isJobResource; // SearchBooleanField
  public $isTemplate; // SearchBooleanField
  public $jobDescription; // SearchStringField
  public $laborCost; // SearchDoubleField
  public $language; // SearchStringField
  public $lastModifiedDate; // SearchDateField
  public $lastName; // SearchStringField
  public $lastReviewDate; // SearchDateField
  public $location; // SearchMultiSelectField
  public $maritalStatus; // SearchMultiSelectField
  public $middleName; // SearchStringField
  public $nextReviewDate; // SearchDateField
  public $offlineAccess; // SearchBooleanField
  public $phone; // SearchStringField
  public $phoneticName; // SearchStringField
  public $releaseDate; // SearchDateField
  public $residentStatus; // SearchMultiSelectField
  public $salesRep; // SearchBooleanField
  public $salesRole; // SearchMultiSelectField
  public $salutation; // SearchStringField
  public $socialSecurityNumber; // SearchStringField
  public $state; // SearchStringField
  public $supervisor; // SearchMultiSelectField
  public $supportRep; // SearchBooleanField
  public $title; // SearchStringField
  public $type; // SearchEnumMultiSelectField
  public $unsubscribe; // SearchBooleanField
  public $visaExpDate; // SearchDateField
  public $visaType; // SearchMultiSelectField
  public $withholding; // SearchMultiSelectField
  public $zipCode; // SearchStringField
  public $customFieldList; // SearchCustomFieldList
}

class PhoneCallSearchBasic {
  public $assigned; // SearchMultiSelectField
  public $company; // SearchMultiSelectField
  public $completedDate; // SearchDateField
  public $contact; // SearchMultiSelectField
  public $createdBy; // SearchMultiSelectField
  public $createdDate; // SearchDateField
  public $externalId; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $isPrivate; // SearchBooleanField
  public $lastModifiedDate; // SearchDateField
  public $owner; // SearchBooleanField
  public $phone; // SearchStringField
  public $priority; // SearchEnumMultiSelectField
  public $startDate; // SearchDateField
  public $status; // SearchEnumMultiSelectField
  public $title; // SearchStringField
  public $customFieldList; // SearchCustomFieldList
}

class SupportCaseSearchBasic {
  public $assigned; // SearchMultiSelectField
  public $awaitingReply; // SearchBooleanField
  public $caseNumber; // SearchStringField
  public $category; // SearchMultiSelectField
  public $closedDate; // SearchDateField
  public $company; // SearchStringField
  public $contact; // SearchStringField
  public $createdDate; // SearchDateField
  public $email; // SearchStringField
  public $escalateTo; // SearchMultiSelectField
  public $externalId; // SearchMultiSelectField
  public $helpDesk; // SearchBooleanField
  public $inboundEmail; // SearchStringField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $issue; // SearchMultiSelectField
  public $item; // SearchMultiSelectField
  public $lastMessage; // SearchBooleanField
  public $lastModifiedDate; // SearchDateField
  public $lastReopenedDate; // SearchDateField
  public $locked; // SearchBooleanField
  public $message; // SearchStringField
  public $messageAuthor; // SearchMultiSelectField
  public $messageDate; // SearchDateField
  public $messageType; // SearchBooleanField
  public $module; // SearchMultiSelectField
  public $number; // SearchLongField
  public $origin; // SearchMultiSelectField
  public $priority; // SearchMultiSelectField
  public $product; // SearchMultiSelectField
  public $stage; // SearchEnumMultiSelectField
  public $status; // SearchMultiSelectField
  public $title; // SearchStringField
  public $type; // SearchEnumMultiSelectField
  public $customFieldList; // SearchCustomFieldList
}

class MessageSearchBasic {
  public $author; // SearchMultiSelectField
  public $authorEmail; // SearchStringField
  public $bcc; // SearchStringField
  public $cc; // SearchStringField
  public $externalId; // SearchMultiSelectField
  public $hasAttachment; // SearchBooleanField
  public $internalId; // SearchMultiSelectField
  public $internalOnly; // SearchBooleanField
  public $message; // SearchStringField
  public $messageDate; // SearchDateField
  public $messageType; // SearchEnumMultiSelectField
  public $recipient; // SearchMultiSelectField
  public $recipientEmail; // SearchStringField
  public $subject; // SearchStringField
}

class NoteSearchBasic {
  public $author; // SearchMultiSelectField
  public $direction; // SearchBooleanField
  public $externalId; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $note; // SearchStringField
  public $noteDate; // SearchDateField
  public $noteType; // SearchMultiSelectField
  public $title; // SearchStringField
}

class CustomRecordSearchBasic {
  public $recType; // RecordRef
  public $availableOffline; // SearchBooleanField
  public $created; // SearchDateField
  public $externalId; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $lastModified; // SearchDateField
  public $lastModifiedBy; // SearchMultiSelectField
  public $name; // SearchStringField
  public $owner; // SearchMultiSelectField
  public $customFieldList; // SearchCustomFieldList
}

class BinSearchBasic {
  public $internalId; // SearchMultiSelectField
  public $binNumber; // SearchStringField
  public $location; // SearchMultiSelectField
  public $memo; // SearchStringField
  public $isInactive; // SearchBooleanField
}

class DepartmentSearchBasic {
  public $externalId; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $name; // SearchStringField
  public $customFieldList; // SearchCustomFieldList
}

class LocationSearchBasic {
  public $address; // SearchStringField
  public $city; // SearchStringField
  public $country; // SearchEnumMultiSelectField
  public $county; // SearchStringField
  public $externalId; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $isOffice; // SearchBooleanField
  public $name; // SearchStringField
  public $phone; // SearchStringField
  public $state; // SearchStringField
  public $zip; // SearchStringField
  public $customFieldList; // SearchCustomFieldList
}

class ClassificationSearchBasic {
  public $externalId; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $name; // SearchStringField
  public $customFieldList; // SearchCustomFieldList
}

class TransactionSearchBasic {
  public $account; // SearchMultiSelectField
  public $accountType; // SearchMultiSelectField
  public $altSalesAmount; // SearchDoubleField
  public $altSalesNetAmount; // SearchDoubleField
  public $amount; // SearchDoubleField
  public $amountPaid; // SearchDoubleField
  public $amountRemaining; // SearchDoubleField
  public $anyLineItem; // SearchMultiSelectField
  public $billable; // SearchBooleanField
  public $billAddress; // SearchStringField
  public $billAddressee; // SearchStringField
  public $billAttention; // SearchStringField
  public $billCity; // SearchStringField
  public $billCountry; // SearchEnumMultiSelectField
  public $billCounty; // SearchStringField
  public $billingSchedule; // SearchMultiSelectField
  public $billingStatus; // SearchBooleanField
  public $billPhone; // SearchStringField
  public $billState; // SearchStringField
  public $billZip; // SearchStringField
  public $ccCustomerCode; // SearchStringField
  public $ccExpireDate; // SearchDateField
  public $ccName; // SearchStringField
  public $ccNumber; // SearchStringField
  public $class; // SearchMultiSelectField
  public $cleared; // SearchBooleanField
  public $closeDate; // SearchDateField
  public $commissionEffectiveDate; // SearchDateField
  public $commit; // SearchEnumMultiSelectField
  public $contribution; // SearchLongField
  public $createdFrom; // SearchMultiSelectField
  public $creditAmount; // SearchDoubleField
  public $currencyName; // SearchMultiSelectField
  public $customerSubOf; // SearchMultiSelectField
  public $customForm; // SearchMultiSelectField
  public $custType; // SearchMultiSelectField
  public $dateCreated; // SearchDateField
  public $daysOpen; // SearchLongField
  public $daysOverdue; // SearchLongField
  public $debitAmount; // SearchDoubleField
  public $deferRevRec; // SearchBooleanField
  public $department; // SearchMultiSelectField
  public $dueDate; // SearchDateField
  public $employee; // SearchMultiSelectField
  public $endDate; // SearchDateField
  public $entityStatus; // SearchMultiSelectField
  public $excludeCommission; // SearchBooleanField
  public $expectedCloseDate; // SearchDateField
  public $externalId; // SearchMultiSelectField
  public $finChrg; // SearchBooleanField
  public $forecastType; // SearchMultiSelectField
  public $fxAmount; // SearchDoubleField
  public $giftCertificate; // SearchStringField
  public $grossAmount; // SearchDoubleField
  public $internalId; // SearchMultiSelectField
  public $inVsoeBundle; // SearchBooleanField
  public $isPayPalMeth; // SearchBooleanField
  public $isShipAddress; // SearchBooleanField
  public $item; // SearchMultiSelectField
  public $itemSubOf; // SearchMultiSelectField
  public $lastModifiedDate; // SearchDateField
  public $leadSource; // SearchMultiSelectField
  public $location; // SearchMultiSelectField
  public $mainline; // SearchBooleanField
  public $memo; // SearchStringField
  public $memorized; // SearchBooleanField
  public $merchantAccount; // SearchStringField
  public $name; // SearchMultiSelectField
  public $nameText; // SearchStringField
  public $netAmount; // SearchDoubleField
  public $nextBillDate; // SearchDateField
  public $number; // SearchLongField
  public $otherRefNum; // SearchLongField
  public $parent; // SearchLongField
  public $partner; // SearchMultiSelectField
  public $paymentMethod; // SearchMultiSelectField
  public $payPalPending; // SearchBooleanField
  public $payPalStatus; // SearchStringField
  public $payPalTranId; // SearchStringField
  public $poAsText; // SearchStringField
  public $posting; // SearchBooleanField
  public $postingPeriod; // SearchMultiSelectField
  public $probability; // SearchLongField
  public $promoCode; // SearchMultiSelectField
  public $quantity; // SearchDoubleField
  public $revRecEndDate; // SearchDateField
  public $revRecStartDate; // SearchDateField
  public $revRecTermInMonths; // SearchLongField
  public $salesRep; // SearchMultiSelectField
  public $salesTeamMember; // SearchMultiSelectField
  public $salesTeamRole; // SearchMultiSelectField
  public $serialNumber; // SearchStringField
  public $shipAddress; // SearchStringField
  public $shipAddressee; // SearchStringField
  public $shipAttention; // SearchStringField
  public $shipCity; // SearchStringField
  public $shipComplete; // SearchBooleanField
  public $shipCountry; // SearchEnumMultiSelectField
  public $shipCounty; // SearchStringField
  public $shipDate; // SearchDateField
  public $shipMethod; // SearchMultiSelectField
  public $shipPhone; // SearchStringField
  public $shipRecvStatus; // SearchBooleanField
  public $shipState; // SearchStringField
  public $shipZip; // SearchStringField
  public $startDate; // SearchDateField
  public $status; // SearchEnumMultiSelectField
  public $taxItem; // SearchMultiSelectField
  public $taxRate; // SearchDoubleField
  public $terms; // SearchMultiSelectField
  public $totalAmount; // SearchDoubleField
  public $trackingNumbers; // SearchStringField
  public $tranDate; // SearchDateField
  public $tranId; // SearchStringField
  public $tranIsVsoeBundle; // SearchBooleanField
  public $type; // SearchEnumMultiSelectField
  public $unit; // SearchMultiSelectField
  public $vendType; // SearchMultiSelectField
  public $voided; // SearchBooleanField
  public $vsoeAllocation; // SearchDoubleField
  public $vsoeAmount; // SearchDoubleField
  public $vsoeDeferral; // SearchMultiSelectField
  public $vsoeDelivered; // SearchBooleanField
  public $vsoePermitDiscount; // SearchMultiSelectField
  public $vsoePrice; // SearchDoubleField
  public $customFieldList; // SearchCustomFieldList
}

class ItemSearchBasic {
  public $account; // SearchMultiSelectField
  public $autoLeadTime; // SearchBooleanField
  public $autoPreferredStockLevel; // SearchBooleanField
  public $autoReorderPoint; // SearchBooleanField
  public $availableToPartners; // SearchBooleanField
  public $category; // SearchMultiSelectField
  public $class; // SearchMultiSelectField
  public $component; // SearchMultiSelectField
  public $copyDescription; // SearchBooleanField
  public $cost; // SearchDoubleField
  public $costingMethod; // SearchEnumMultiSelectField
  public $created; // SearchDateField
  public $dateViewed; // SearchDateField
  public $daysBeforeExpiration; // SearchDoubleField
  public $demandModifier; // SearchDoubleField
  public $department; // SearchMultiSelectField
  public $ebayAuction; // SearchBooleanField
  public $ebayAuctionDuration; // SearchEnumMultiSelectField
  public $ebayBuyNowPrice; // SearchDoubleField
  public $ebayCategoryId; // SearchLongField
  public $ebayItemDescr; // SearchStringField
  public $ebayItemSubtitle; // SearchStringField
  public $ebayItemTitle; // SearchStringField
  public $ebayReservePrice; // SearchDoubleField
  public $ebayStartPrice; // SearchDoubleField
  public $ebayStore; // SearchBooleanField
  public $externalId; // SearchMultiSelectField
  public $feedDescription; // SearchStringField
  public $feedName; // SearchStringField
  public $froogleProductFeed; // SearchBooleanField
  public $giftCertAuthCode; // SearchStringField
  public $giftCertEmail; // SearchStringField
  public $giftCertExpDate; // SearchDateField
  public $giftCertFrom; // SearchStringField
  public $giftCertMsg; // SearchStringField
  public $giftCertOrigAmt; // SearchStringField
  public $giftCertRecipient; // SearchStringField
  public $imageUrl; // SearchStringField
  public $internalId; // SearchMultiSelectField
  public $isAvailable; // SearchBooleanField
  public $isDropShipItem; // SearchBooleanField
  public $isFeatured; // SearchBooleanField
  public $isInactive; // SearchBooleanField
  public $isOnline; // SearchBooleanField
  public $isSpecialOrderItem; // SearchBooleanField
  public $issueProduct; // SearchMultiSelectField
  public $isTaxable; // SearchBooleanField
  public $isVsoeBundle; // SearchBooleanField
  public $itemUrl; // SearchStringField
  public $lastModifiedDate; // SearchDateField
  public $lastQuantityAvailableChange; // SearchDateField
  public $leadTime; // SearchLongField
  public $location; // SearchMultiSelectField
  public $manufacturer; // SearchStringField
  public $matrix; // SearchBooleanField
  public $matrixChild; // SearchBooleanField
  public $metaTagHtml; // SearchStringField
  public $minimumQuantity; // SearchLongField
  public $mpn; // SearchStringField
  public $name; // SearchStringField
  public $nexTagCategory; // SearchStringField
  public $nexTagProductFeed; // SearchBooleanField
  public $numberAllowedDownloads; // SearchDoubleField
  public $offerSupport; // SearchBooleanField
  public $onlineCustomerPrice; // SearchDoubleField
  public $onSpecial; // SearchBooleanField
  public $overallQuantityPricingType; // SearchEnumMultiSelectField
  public $pageTitle; // SearchStringField
  public $parent; // SearchMultiSelectField
  public $preferredLocation; // SearchMultiSelectField
  public $preferredStockLevel; // SearchDoubleField
  public $preferredStockLevelDays; // SearchLongField
  public $price; // SearchDoubleField
  public $pricingGroup; // SearchMultiSelectField
  public $purchaseUnit; // SearchMultiSelectField
  public $quantityAvailable; // SearchDoubleField
  public $quantityBackOrdered; // SearchDoubleField
  public $quantityCommitted; // SearchDoubleField
  public $quantityOnHand; // SearchDoubleField
  public $quantityOnOrder; // SearchDoubleField
  public $quantityPricingSchedule; // SearchMultiSelectField
  public $reorderPoint; // SearchDoubleField
  public $revRecSchedule; // SearchMultiSelectField
  public $safetyStockLevel; // SearchDoubleField
  public $safetyStockLevelDays; // SearchLongField
  public $salesDescription; // SearchStringField
  public $saleUnit; // SearchMultiSelectField
  public $searchKeywords; // SearchStringField
  public $seasonalDemand; // SearchBooleanField
  public $serialNumber; // SearchStringField
  public $shippingRate; // SearchDoubleField
  public $shoppingDotComCategory; // SearchStringField
  public $shoppingProductFeed; // SearchBooleanField
  public $shopzillaCategoryId; // SearchLongField
  public $shopzillaProductFeed; // SearchBooleanField
  public $softDescriptor; // SearchMultiSelectField
  public $stockDescription; // SearchStringField
  public $stockUnit; // SearchMultiSelectField
  public $storeDescription; // SearchStringField
  public $subType; // SearchEnumMultiSelectField
  public $taxCode; // SearchMultiSelectField
  public $thumbnailUrl; // SearchStringField
  public $totalValue; // SearchDoubleField
  public $trackLandedCost; // SearchBooleanField
  public $type; // SearchEnumMultiSelectField
  public $unitsType; // SearchMultiSelectField
  public $urlComponent; // SearchStringField
  public $useBins; // SearchBooleanField
  public $useMarginalRates; // SearchBooleanField
  public $vendor; // SearchMultiSelectField
  public $vsoeDeferral; // SearchMultiSelectField
  public $vsoeDelivered; // SearchBooleanField
  public $vsoePermitDiscount; // SearchMultiSelectField
  public $vsoePrice; // SearchDoubleField
  public $weight; // SearchDoubleField
  public $customFieldList; // SearchCustomFieldList
}

class PartnerSearchBasic {
  public $address; // SearchStringField
  public $assignTasks; // SearchBooleanField
  public $category; // SearchMultiSelectField
  public $city; // SearchStringField
  public $class; // SearchMultiSelectField
  public $country; // SearchMultiSelectField
  public $county; // SearchStringField
  public $dateCreated; // SearchDateField
  public $department; // SearchMultiSelectField
  public $eligibleForCommission; // SearchBooleanField
  public $email; // SearchStringField
  public $entityId; // SearchStringField
  public $externalId; // SearchMultiSelectField
  public $fax; // SearchStringField
  public $firstName; // SearchStringField
  public $giveAccess; // SearchBooleanField
  public $group; // SearchMultiSelectField
  public $image; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $isPerson; // SearchBooleanField
  public $language; // SearchStringField
  public $lastModifiedDate; // SearchDateField
  public $lastName; // SearchStringField
  public $location; // SearchMultiSelectField
  public $middleName; // SearchStringField
  public $parent; // SearchMultiSelectField
  public $partnerCode; // SearchStringField
  public $phone; // SearchStringField
  public $phoneticName; // SearchStringField
  public $promoCode; // SearchMultiSelectField
  public $salutation; // SearchStringField
  public $state; // SearchMultiSelectField
  public $unsubscribe; // SearchBooleanField
  public $URL; // SearchStringField
  public $zipCode; // SearchStringField
  public $customFieldList; // SearchCustomFieldList
}

class VendorSearchBasic {
  public $accountNumber; // SearchStringField
  public $address; // SearchStringField
  public $balance; // SearchDoubleField
  public $category; // SearchMultiSelectField
  public $city; // SearchStringField
  public $contact; // SearchStringField
  public $country; // SearchMultiSelectField
  public $county; // SearchStringField
  public $creditLimit; // SearchDoubleField
  public $currency; // SearchMultiSelectField
  public $dateCreated; // SearchDateField
  public $eligibleForCommission; // SearchBooleanField
  public $email; // SearchStringField
  public $entityId; // SearchStringField
  public $externalId; // SearchMultiSelectField
  public $fax; // SearchStringField
  public $firstName; // SearchStringField
  public $giveAccess; // SearchBooleanField
  public $group; // SearchMultiSelectField
  public $image; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $isJobResourceVend; // SearchBooleanField
  public $isPerson; // SearchBooleanField
  public $laborCost; // SearchDoubleField
  public $language; // SearchStringField
  public $lastModifiedDate; // SearchDateField
  public $lastName; // SearchStringField
  public $middleName; // SearchStringField
  public $phone; // SearchStringField
  public $phoneticName; // SearchStringField
  public $salutation; // SearchStringField
  public $state; // SearchMultiSelectField
  public $taxIdNum; // SearchStringField
  public $unsubscribe; // SearchBooleanField
  public $url; // SearchStringField
  public $zipCode; // SearchStringField
  public $customFieldList; // SearchCustomFieldList
}

class SiteCategorySearchBasic {
  public $dateViewed; // SearchDateField
  public $description; // SearchStringField
  public $externalId; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $name; // SearchMultiSelectField
}

class TimeBillSearchBasic {
  public $approved; // SearchBooleanField
  public $billable; // SearchBooleanField
  public $class; // SearchMultiSelectField
  public $customer; // SearchMultiSelectField
  public $date; // SearchDateField
  public $dateCreated; // SearchDateField
  public $department; // SearchMultiSelectField
  public $duration; // SearchDoubleField
  public $employee; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $item; // SearchMultiSelectField
  public $lastModified; // SearchDateField
  public $location; // SearchMultiSelectField
  public $memo; // SearchStringField
  public $paidByPayroll; // SearchBooleanField
  public $paidExternally; // SearchBooleanField
  public $payItem; // SearchMultiSelectField
  public $status; // SearchBooleanField
  public $customFieldList; // SearchCustomFieldList
}

class SolutionSearchBasic {
  public $abstract; // SearchStringField
  public $code; // SearchStringField
  public $description; // SearchStringField
  public $externalId; // SearchMultiSelectField
  public $find; // SearchStringField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $number; // SearchLongField
  public $status; // SearchEnumMultiSelectField
  public $title; // SearchStringField
  public $topic; // SearchMultiSelectField
  public $customFieldList; // SearchCustomFieldList
}

class TopicSearchBasic {
  public $description; // SearchStringField
  public $externalId; // SearchMultiSelectField
  public $internalId; // SearchMultiSelectField
  public $isInactive; // SearchBooleanField
  public $name; // SearchStringField
}

class CalendarEventAccessLevel {
}

class CalendarEventAttendeeAttendance {
}

class CalendarEventAttendeeResponse {
}

class CalendarEventFrequency {
}

class CalendarEventPeriod {
}

class CalendarEventReminderMinutes {
}

class CalendarEventReminderType {
}

class CalendarEventResponse {
}

class CalendarEventStatus {
}

class TaskPriority {
}

class TaskReminderMinutes {
}

class TaskReminderType {
}

class TaskStatus {
}

class PhoneCallPriority {
}

class PhoneCallReminderMinutes {
}

class PhoneCallReminderType {
}

class PhoneCallStatus {
}

class CalendarEvent {
  public $company; // RecordRef
  public $contact; // RecordRef
  public $supportCase; // RecordRef
  public $transaction; // RecordRef
  public $isRecurringEvent; // boolean
  public $period; // CalendarEventPeriod
  public $frequency; // CalendarEventFrequency
  public $seriesStartDate; // dateTime
  public $endByDate; // dateTime
  public $noEndDate; // boolean
  public $sendEmail; // boolean
  public $customForm; // RecordRef
  public $title; // string
  public $location; // string
  public $startDate; // dateTime
  public $allDayEvent; // boolean
  public $timedEvent; // boolean
  public $reminderType; // CalendarEventReminderType
  public $reminderMinutes; // CalendarEventReminderMinutes
  public $status; // CalendarEventStatus
  public $accessLevel; // CalendarEventAccessLevel
  public $organizer; // RecordRef
  public $message; // string
  public $createdDate; // dateTime
  public $endDate; // dateTime
  public $exclusionDateList; // ExclusionDateList
  public $lastModifiedDate; // dateTime
  public $owner; // RecordRef
  public $attendeeList; // CalendarEventAttendeeList
  public $resourceList; // CalendarEventResourceList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class ExclusionDateList {
  public $exclusionDate; // dateTime
}

class CalendarEventAttendee {
  public $sendEmail; // boolean
  public $attendee; // RecordRef
  public $response; // CalendarEventAttendeeResponse
  public $attendance; // CalendarEventAttendeeAttendance
}

class CalendarEventAttendeeList {
  public $attendee; // CalendarEventAttendee
  public $replaceAll; // boolean
}

class CalendarEventResource {
  public $resource; // RecordRef
  public $location; // string
}

class CalendarEventResourceList {
  public $resource; // CalendarEventResource
  public $replaceAll; // boolean
}

class CalendarEventSearch {
  public $basic; // CalendarEventSearchBasic
  public $attendeeJoin; // EntitySearchBasic
  public $attendeeContactJoin; // ContactSearchBasic
  public $attendeeCustomerJoin; // CustomerSearchBasic
  public $caseJoin; // SupportCaseSearchBasic
  public $opportunityJoin; // OpportunitySearchBasic
  public $transactionJoin; // TransactionSearchBasic
  public $userNotesJoin; // NoteSearchBasic
}

class Task {
  public $company; // RecordRef
  public $contact; // RecordRef
  public $supportCase; // RecordRef
  public $transaction; // RecordRef
  public $milestone; // RecordRef
  public $customForm; // RecordRef
  public $title; // string
  public $assigned; // RecordRef
  public $sendEmail; // boolean
  public $startDate; // dateTime
  public $timedEvent; // boolean
  public $endDate; // dateTime
  public $completedDate; // dateTime
  public $priority; // TaskPriority
  public $status; // TaskStatus
  public $message; // string
  public $accessLevel; // boolean
  public $reminderType; // TaskReminderType
  public $reminderMinutes; // TaskReminderMinutes
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $owner; // RecordRef
  public $contactList; // TaskContactList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class TaskContact {
  public $company; // RecordRef
  public $contact; // RecordRef
}

class TaskContactList {
  public $contact; // TaskContact
  public $replaceAll; // boolean
}

class TaskSearch {
  public $basic; // TaskSearchBasic
  public $companyCustomerJoin; // CustomerSearchBasic
  public $contactJoin; // ContactSearchBasic
  public $employeeJoin; // EmployeeSearchBasic
  public $opportunityJoin; // OpportunitySearchBasic
  public $transactionJoin; // TransactionSearchBasic
  public $userNotesJoin; // NoteSearchBasic
}

class PhoneCall {
  public $message; // string
  public $company; // RecordRef
  public $contact; // RecordRef
  public $supportCase; // RecordRef
  public $transaction; // RecordRef
  public $milestone; // RecordRef
  public $customForm; // RecordRef
  public $title; // string
  public $assigned; // RecordRef
  public $sendEmail; // boolean
  public $startDate; // dateTime
  public $timedEvent; // boolean
  public $completedDate; // dateTime
  public $phone; // string
  public $status; // PhoneCallStatus
  public $priority; // PhoneCallPriority
  public $accessLevel; // boolean
  public $reminderType; // PhoneCallReminderType
  public $reminderMinutes; // PhoneCallReminderMinutes
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $contactList; // PhoneCallContactList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class PhoneCallContact {
  public $company; // RecordRef
  public $contact; // RecordRef
  public $phone; // string
  public $email; // string
}

class PhoneCallContactList {
  public $contact; // PhoneCallContact
  public $replaceAll; // boolean
}

class PhoneCallSearch {
  public $basic; // PhoneCallSearchBasic
  public $caseJoin; // SupportCaseSearchBasic
  public $contactJoin; // ContactSearchBasic
  public $employeeJoin; // EmployeeSearchBasic
  public $opportunityJoin; // OpportunitySearchBasic
  public $transactionJoin; // TransactionSearchBasic
  public $userNotesJoin; // NoteSearchBasic
}

class NoteDirection {
}

class MediaType {
}

class File {
  public $name; // string
  public $fileType; // MediaType
  public $content; // base64Binary
  public $folder; // RecordRef
  public $fileSize; // double
  public $url; // string
  public $description; // string
  public $isOnline; // boolean
  public $isInactive; // boolean
  public $createdDate; // dateTime
  public $internalId; // string
}

class Note {
  public $title; // string
  public $noteType; // RecordRef
  public $direction; // NoteDirection
  public $noteDate; // dateTime
  public $note; // string
  public $activity; // RecordRef
  public $author; // RecordRef
  public $entity; // RecordRef
  public $item; // RecordRef
  public $lastModifiedDate; // dateTime
  public $record; // RecordRef
  public $recordType; // RecordRef
  public $topic; // RecordRef
  public $transaction; // RecordRef
  public $internalId; // string
  public $externalId; // string
}

class NoteSearch {
  public $basic; // NoteSearchBasic
  public $authorJoin; // EmployeeSearchBasic
  public $callJoin; // PhoneCallSearchBasic
  public $caseJoin; // SupportCaseSearchBasic
  public $contactJoin; // ContactSearchBasic
  public $customerJoin; // CustomerSearchBasic
  public $employeeJoin; // EmployeeSearchBasic
  public $entityJoin; // EntitySearchBasic
  public $eventJoin; // CalendarEventSearchBasic
  public $opportunityJoin; // OpportunitySearchBasic
  public $partnerJoin; // PartnerSearchBasic
  public $solutionJoin; // SolutionSearchBasic
  public $taskJoin; // TaskSearchBasic
  public $transactionJoin; // TransactionSearchBasic
  public $vendorJoin; // VendorSearchBasic
}

class Message {
  public $author; // RecordRef
  public $recipient; // RecordRef
  public $cc; // string
  public $bcc; // string
  public $messageDate; // dateTime
  public $subject; // string
  public $message; // string
  public $emailed; // boolean
  public $activity; // RecordRef
  public $incoming; // boolean
  public $lastModifiedDate; // dateTime
  public $transaction; // RecordRef
  public $mediaItemList; // MessageMediaItemList
  public $internalId; // string
  public $externalId; // string
}

class MessageMediaItemList {
  public $mediaItem; // File
}

class MessageSearch {
  public $basic; // MessageSearchBasic
  public $authorJoin; // EntitySearchBasic
  public $caseJoin; // SupportCaseSearchBasic
  public $contactJoin; // ContactSearchBasic
  public $customerJoin; // CustomerSearchBasic
  public $employeeJoin; // EmployeeSearchBasic
  public $entityJoin; // EntitySearchBasic
  public $opportunityJoin; // OpportunitySearchBasic
  public $partnerJoin; // PartnerSearchBasic
  public $recipientJoin; // EntitySearchBasic
  public $solutionJoin; // SolutionSearchBasic
  public $transactionJoin; // TransactionSearchBasic
  public $vendorJoin; // VendorSearchBasic
}

class CustomerStatusStage {
}

class ContactType {
}

class CustomerStage {
}

class CustomerCreditHoldOverride {
}

class EmailPreference {
}

class Contact {
  public $customForm; // RecordRef
  public $entityId; // string
  public $company; // RecordRef
  public $salutation; // string
  public $firstName; // string
  public $middleName; // string
  public $lastName; // string
  public $title; // string
  public $phone; // string
  public $fax; // string
  public $email; // string
  public $defaultAddress; // string
  public $isPrivate; // boolean
  public $isInactive; // boolean
  public $categoryList; // CategoryList
  public $altEmail; // string
  public $officePhone; // string
  public $homePhone; // string
  public $mobilePhone; // string
  public $supervisor; // RecordRef
  public $supervisorPhone; // string
  public $assistant; // RecordRef
  public $assistantPhone; // string
  public $comments; // string
  public $unsubscribe; // boolean
  public $image; // RecordRef
  public $billPay; // boolean
  public $dateCreated; // dateTime
  public $lastModifiedDate; // dateTime
  public $addressbookList; // ContactAddressbookList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class CategoryList {
  public $category; // RecordRef
}

class ContactAddressbook {
  public $defaultShipping; // boolean
  public $defaultBilling; // boolean
  public $label; // string
  public $attention; // string
  public $addressee; // string
  public $phone; // string
  public $addr1; // string
  public $addr2; // string
  public $city; // string
  public $zip; // string
  public $country; // Country
  public $addrText; // string
  public $override; // boolean
  public $internalId; // string
  public $state; // string
}

class ContactAddressbookList {
  public $addressbook; // ContactAddressbook
  public $replaceAll; // boolean
}

class ContactSearch {
  public $basic; // ContactSearchBasic
  public $callJoin; // PhoneCallSearchBasic
  public $caseJoin; // SupportCaseSearchBasic
  public $customerJoin; // CustomerSearchBasic
  public $customerPrimaryJoin; // CustomerSearchBasic
  public $eventJoin; // CalendarEventSearchBasic
  public $messagesJoin; // MessageSearchBasic
  public $messagesFromJoin; // MessageSearchBasic
  public $messagesToJoin; // MessageSearchBasic
  public $opportunityJoin; // OpportunitySearchBasic
  public $partnerJoin; // PartnerSearchBasic
  public $partnerPrimaryJoin; // PartnerSearchBasic
  public $taskJoin; // TaskSearchBasic
  public $transactionJoin; // TransactionSearchBasic
  public $userNotesJoin; // NoteSearchBasic
  public $vendorJoin; // VendorSearchBasic
  public $vendorPrimaryJoin; // VendorSearchBasic
}

class Customer {
  public $customForm; // RecordRef
  public $entityId; // string
  public $isPerson; // boolean
  public $salutation; // string
  public $firstName; // string
  public $middleName; // string
  public $lastName; // string
  public $companyName; // string
  public $entityStatus; // RecordRef
  public $parent; // RecordRef
  public $phone; // string
  public $fax; // string
  public $email; // string
  public $url; // string
  public $defaultAddress; // string
  public $isInactive; // boolean
  public $category; // RecordRef
  public $title; // string
  public $printOnCheckAs; // string
  public $altPhone; // string
  public $homePhone; // string
  public $mobilePhone; // string
  public $altEmail; // string
  public $language; // Language
  public $comments; // string
  public $dateCreated; // dateTime
  public $image; // RecordRef
  public $emailPreference; // EmailPreference
  public $salesRep; // RecordRef
  public $territory; // RecordRef
  public $partner; // RecordRef
  public $salesGroup; // RecordRef
  public $vatRegNumber; // string
  public $accountNumber; // string
  public $terms; // RecordRef
  public $creditLimit; // double
  public $creditHoldOverride; // CustomerCreditHoldOverride
  public $balance; // double
  public $overdueBalance; // double
  public $daysOverdue; // long
  public $priceLevel; // RecordRef
  public $currency; // RecordRef
  public $prefCCProcessor; // RecordRef
  public $shipComplete; // boolean
  public $taxable; // boolean
  public $taxItem; // RecordRef
  public $resaleNumber; // string
  public $startDate; // dateTime
  public $endDate; // dateTime
  public $reminderDays; // long
  public $shippingItem; // RecordRef
  public $thirdPartyAcct; // string
  public $thirdPartyZipcode; // string
  public $thirdPartyCountry; // Country
  public $giveAccess; // boolean
  public $accessRole; // RecordRef
  public $sendEmail; // boolean
  public $password; // string
  public $password2; // string
  public $requirePwdChange; // boolean
  public $accessHelp; // string
  public $campaignCategory; // RecordRef
  public $leadSource; // RecordRef
  public $webLead; // string
  public $unsubscribe; // boolean
  public $referrer; // string
  public $keywords; // string
  public $clickStream; // string
  public $lastPageVisited; // string
  public $visits; // long
  public $firstVisit; // dateTime
  public $lastVisit; // dateTime
  public $billPay; // boolean
  public $openingBalance; // double
  public $lastModifiedDate; // dateTime
  public $openingBalanceDate; // dateTime
  public $openingBalanceAccount; // RecordRef
  public $stage; // CustomerStage
  public $salesTeamList; // CustomerSalesTeamList
  public $downloadList; // CustomerDownloadList
  public $addressbookList; // CustomerAddressbookList
  public $contactList; // CustomerContactList
  public $creditCardsList; // CustomerCreditCardsList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class CustomerDownload {
  public $file; // RecordRef
  public $licenseCode; // string
  public $remainingDownloads; // long
  public $expiration; // dateTime
}

class CustomerDownloadList {
  public $download; // CustomerDownload
  public $replaceAll; // boolean
}

class CustomerContact {
  public $contact; // RecordRef
  public $contactRole; // RecordRef
}

class CustomerContactList {
  public $contact; // CustomerContact
  public $replaceAll; // boolean
}

class CustomerSalesTeam {
  public $employee; // RecordRef
  public $salesRole; // RecordRef
  public $isPrimary; // boolean
  public $contribution; // double
}

class CustomerSalesTeamList {
  public $salesTeam; // CustomerSalesTeam
  public $replaceAll; // boolean
}

class CustomerAddressbook {
  public $defaultShipping; // boolean
  public $defaultBilling; // boolean
  public $isResidential; // boolean
  public $label; // string
  public $attention; // string
  public $addressee; // string
  public $phone; // string
  public $addr1; // string
  public $addr2; // string
  public $city; // string
  public $zip; // string
  public $country; // Country
  public $addrText; // string
  public $override; // boolean
  public $internalId; // string
  public $state; // string
}

class CustomerAddressbookList {
  public $addressbook; // CustomerAddressbook
  public $replaceAll; // boolean
}

class CustomerCreditCards {
  public $internalId; // string
  public $ccNumber; // string
  public $ccExpireDate; // dateTime
  public $ccName; // string
  public $paymentMethod; // RecordRef
  public $ccDefault; // boolean
}

class CustomerCreditCardsList {
  public $creditCards; // CustomerCreditCards
  public $replaceAll; // boolean
}

class CustomerSearch {
  public $basic; // CustomerSearchBasic
  public $callJoin; // PhoneCallSearchBasic
  public $caseJoin; // SupportCaseSearchBasic
  public $contactJoin; // ContactSearchBasic
  public $contactPrimaryJoin; // ContactSearchBasic
  public $eventJoin; // CalendarEventSearchBasic
  public $messagesJoin; // MessageSearchBasic
  public $messagesFromJoin; // MessageSearchBasic
  public $messagesToJoin; // MessageSearchBasic
  public $opportunityJoin; // OpportunitySearchBasic
  public $parentCustomerJoin; // CustomerSearchBasic
  public $partnerJoin; // PartnerSearchBasic
  public $salesRepJoin; // EmployeeSearchBasic
  public $subCustomerJoin; // CustomerSearchBasic
  public $taskJoin; // TaskSearchBasic
  public $transactionJoin; // TransactionSearchBasic
  public $userNotesJoin; // NoteSearchBasic
  public $webSiteCategoryJoin; // SiteCategorySearchBasic
  public $webSiteItemJoin; // ItemSearchBasic
}

class CustomerStatus {
  public $name; // string
  public $stage; // CustomerStatusStage
  public $probability; // double
  public $description; // string
  public $includeInLeadReports; // boolean
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class Partner {
  public $customForm; // RecordRef
  public $entityId; // string
  public $partnerCode; // string
  public $isPerson; // boolean
  public $salutation; // string
  public $firstName; // string
  public $middleName; // string
  public $lastName; // string
  public $companyName; // string
  public $parent; // RecordRef
  public $phone; // string
  public $fax; // string
  public $email; // string
  public $url; // string
  public $defaultAddress; // string
  public $isInactive; // boolean
  public $lastModifiedDate; // dateTime
  public $dateCreated; // dateTime
  public $referringUrl; // string
  public $unsubscribe; // boolean
  public $categoryList; // CategoryList
  public $title; // string
  public $printOnCheckAs; // string
  public $taxIdNum; // string
  public $comments; // string
  public $image; // RecordRef
  public $emailPreference; // EmailPreference
  public $department; // RecordRef
  public $location; // RecordRef
  public $class; // RecordRef
  public $homePhone; // string
  public $mobilePhone; // string
  public $altEmail; // string
  public $giveAccess; // boolean
  public $accessRole; // RecordRef
  public $sendEmail; // boolean
  public $password; // string
  public $password2; // string
  public $requirePwdChange; // boolean
  public $subPartnerLogin; // boolean
  public $promoCodeList; // PartnerPromoCodeList
  public $addressbookList; // PartnerAddressbookList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class PartnerPromoCode {
  public $promoCode; // RecordRef
  public $discount; // string
  public $endDate; // dateTime
}

class PartnerPromoCodeList {
  public $promoCode; // PartnerPromoCode
  public $replaceAll; // boolean
}

class PartnerAddressbook {
  public $defaultShipping; // boolean
  public $defaultBilling; // boolean
  public $label; // string
  public $attention; // string
  public $addressee; // string
  public $phone; // string
  public $addr1; // string
  public $addr2; // string
  public $city; // string
  public $zip; // string
  public $country; // Country
  public $addrText; // string
  public $override; // boolean
  public $internalId; // string
  public $state; // string
}

class PartnerAddressbookList {
  public $addressbook; // PartnerAddressbook
  public $replaceAll; // boolean
}

class PartnerSearch {
  public $basic; // PartnerSearchBasic
  public $contactJoin; // ContactSearchBasic
  public $contactPrimaryJoin; // ContactSearchBasic
  public $messagesJoin; // MessageSearchBasic
  public $messagesFromJoin; // MessageSearchBasic
  public $messagesToJoin; // MessageSearchBasic
  public $transactionJoin; // TransactionSearchBasic
  public $userNotesJoin; // NoteSearchBasic
}

class Vendor {
  public $customForm; // RecordRef
  public $entityId; // string
  public $isPerson; // boolean
  public $salutation; // string
  public $firstName; // string
  public $middleName; // string
  public $lastName; // string
  public $companyName; // string
  public $phone; // string
  public $fax; // string
  public $email; // string
  public $url; // string
  public $defaultAddress; // string
  public $isInactive; // boolean
  public $lastModifiedDate; // dateTime
  public $dateCreated; // dateTime
  public $category; // RecordRef
  public $title; // string
  public $printOnCheckAs; // string
  public $altPhone; // string
  public $homePhone; // string
  public $mobilePhone; // string
  public $altEmail; // string
  public $comments; // string
  public $unsubscribe; // boolean
  public $image; // RecordRef
  public $emailPreference; // EmailPreference
  public $accountNumber; // string
  public $legalName; // string
  public $expenseAccount; // RecordRef
  public $terms; // RecordRef
  public $creditLimit; // double
  public $openingBalance; // double
  public $openingBalanceDate; // dateTime
  public $openingBalanceAccount; // RecordRef
  public $balance; // double
  public $currency; // RecordRef
  public $is1099Eligible; // boolean
  public $isJobResourceVend; // boolean
  public $taxIdNum; // string
  public $giveAccess; // boolean
  public $sendEmail; // boolean
  public $billPay; // boolean
  public $isAccountant; // boolean
  public $password; // string
  public $password2; // string
  public $requirePwdChange; // boolean
  public $pricingScheduleList; // VendorPricingScheduleList
  public $addressbookList; // VendorAddressbookList
  public $rolesList; // VendorRolesList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class VendorPricingSchedule {
  public $scheduleName; // string
  public $scheduleDiscount; // double
}

class VendorPricingScheduleList {
  public $pricingSchedule; // VendorPricingSchedule
  public $replaceAll; // boolean
}

class VendorAddressbook {
  public $defaultShipping; // boolean
  public $defaultBilling; // boolean
  public $label; // string
  public $attention; // string
  public $addressee; // string
  public $phone; // string
  public $addr1; // string
  public $addr2; // string
  public $city; // string
  public $zip; // string
  public $country; // Country
  public $addrText; // string
  public $override; // boolean
  public $internalId; // string
  public $state; // string
}

class VendorAddressbookList {
  public $addressbook; // VendorAddressbook
  public $replaceAll; // boolean
}

class VendorRoles {
  public $selectedRole; // RecordRef
}

class VendorRolesList {
  public $roles; // VendorRoles
  public $replaceAll; // boolean
}

class VendorSearch {
  public $basic; // VendorSearchBasic
  public $contactJoin; // ContactSearchBasic
  public $contactPrimaryJoin; // ContactSearchBasic
  public $messagesJoin; // MessageSearchBasic
  public $messagesFromJoin; // MessageSearchBasic
  public $messagesToJoin; // MessageSearchBasic
  public $transactionJoin; // TransactionSearchBasic
  public $userNotesJoin; // NoteSearchBasic
}

class SupportCaseStatusStage {
}

class SupportCaseStage {
}

class SolutionStatus {
}

class SupportCase {
  public $escalationMessage; // string
  public $lastReopenedDate; // dateTime
  public $incomingMessage; // string
  public $messageNew; // boolean
  public $outgoingMessage; // string
  public $emailForm; // boolean
  public $internalOnly; // boolean
  public $customForm; // RecordRef
  public $title; // string
  public $caseNumber; // string
  public $startDate; // dateTime
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $lastMessageDate; // dateTime
  public $company; // RecordRef
  public $contact; // RecordRef
  public $email; // string
  public $phone; // string
  public $item; // RecordRef
  public $serialNumber; // RecordRef
  public $inboundEmail; // string
  public $issue; // RecordRef
  public $status; // RecordRef
  public $isInactive; // boolean
  public $priority; // RecordRef
  public $origin; // RecordRef
  public $category; // RecordRef
  public $assigned; // RecordRef
  public $helpDesk; // boolean
  public $emailEmployeesList; // EmailEmployeesList
  public $escalateToList; // SupportCaseEscalateToList
  public $solutionsList; // SupportCaseSolutionsList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class EmailEmployeesList {
  public $emailEmployees; // RecordRef
}

class SupportCaseEscalateTo {
  public $escalatee; // RecordRef
  public $email; // string
  public $phone; // string
}

class SupportCaseEscalateToList {
  public $escalateTo; // SupportCaseEscalateTo
  public $replaceAll; // boolean
}

class SupportCaseSolutions {
  public $solution; // RecordRef
  public $message; // string
}

class SupportCaseSolutionsList {
  public $solutions; // SupportCaseSolutions
  public $replaceAll; // boolean
}

class SupportCaseSearch {
  public $basic; // SupportCaseSearchBasic
  public $contactJoin; // ContactSearchBasic
  public $customerJoin; // CustomerSearchBasic
  public $employeeJoin; // EmployeeSearchBasic
  public $itemJoin; // ItemSearchBasic
  public $messagesJoin; // MessageSearchBasic
  public $userNotesJoin; // NoteSearchBasic
}

class SupportCaseStatus {
  public $name; // string
  public $insertBefore; // RecordRef
  public $stage; // SupportCaseStatusStage
  public $description; // string
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class SupportCaseType {
  public $name; // string
  public $insertBefore; // RecordRef
  public $description; // string
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class SupportCaseOrigin {
  public $name; // string
  public $insertBefore; // RecordRef
  public $description; // string
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class SupportCaseIssue {
  public $name; // string
  public $insertBefore; // RecordRef
  public $description; // string
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class SupportCasePriority {
  public $name; // string
  public $insertBefore; // RecordRef
  public $description; // string
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class Solution {
  public $customForm; // RecordRef
  public $solutionCode; // string
  public $title; // string
  public $message; // string
  public $status; // SolutionStatus
  public $displayOnline; // boolean
  public $isInactive; // boolean
  public $longDescription; // string
  public $topicsList; // SolutionTopicsList
  public $solutionsList; // SolutionsList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class SolutionTopics {
  public $topic; // RecordRef
}

class SolutionTopicsList {
  public $topics; // SolutionTopics
  public $replaceAll; // boolean
}

class Solutions {
  public $solution; // RecordRef
  public $message; // string
}

class SolutionsList {
  public $solutions; // Solutions
  public $replaceAll; // boolean
}

class SolutionSearch {
  public $basic; // SolutionSearchBasic
  public $messagesJoin; // MessageSearchBasic
  public $userNotesJoin; // NoteSearchBasic
  public $caseJoin; // SupportCaseSearchBasic
}

class Topic {
  public $title; // string
  public $parentTopic; // RecordRef
  public $description; // string
  public $isInactive; // boolean
  public $longDescription; // string
  public $solutionList; // TopicSolutionList
  public $internalId; // string
  public $externalId; // string
}

class TopicSolution {
  public $solution; // RecordRef
  public $message; // string
}

class TopicSolutionList {
  public $solution; // TopicSolution
  public $replaceAll; // boolean
}

class TopicSearch {
  public $basic; // TopicSearchBasic
}

class CurrencyLocale {
}

class AccountType {
}

class ItemCostingMethod {
}

class ItemProductFeed {
}

class ItemType {
}

class ItemWeightUnit {
}

class ItemPreferenceCriterion {
}

class ItemOverallQuantityPricingType {
}

class ScheduleBCode {
}

class ItemSubType {
}

class CurrencyCurrencyPrecision {
}

class SalesTaxItemAvailable {
}

class ContactCategory {
  public $name; // string
  public $private; // boolean
  public $sync; // boolean
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class CustomerCategory {
  public $name; // string
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class SalesRole {
  public $name; // string
  public $description; // string
  public $isSalesRep; // boolean
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class PriceLevel {
  public $name; // string
  public $discountpct; // double
  public $updateExistingPrices; // boolean
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class WinLossReason {
  public $name; // string
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class Term {
  public $name; // string
  public $dateDriven; // boolean
  public $daysUntilNetDue; // long
  public $discountPercent; // double
  public $daysUntilExpiry; // long
  public $dayOfMonthNetDue; // long
  public $dueNextMonthIfWithinDays; // long
  public $discountPercentDateDriven; // double
  public $dayDiscountExpires; // long
  public $preferred; // boolean
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class NoteType {
  public $name; // string
  public $description; // string
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class PaymentMethod {
  public $name; // string
  public $creditCard; // boolean
  public $undepFunds; // boolean
  public $account; // RecordRef
  public $isInactive; // boolean
  public $isOnline; // boolean
  public $isDebitCard; // boolean
  public $internalId; // string
  public $externalId; // string
}

class LeadSource {
  public $name; // string
  public $description; // string
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class Price {
  public $value; // double
  public $quantity; // double
}

class PriceList {
  public $price; // Price
}

class Pricing {
  public $currency; // RecordRef
  public $priceLevel; // RecordRef
  public $discount; // double
  public $priceList; // PriceList
}

class PricingMatrix {
  public $pricing; // Pricing
  public $replaceAll; // boolean
}

class Rate {
  public $value; // double
  public $priceLevel; // RecordRef
}

class RateList {
  public $rate; // Rate
}

class BillingRates {
  public $currency; // RecordRef
  public $billingClass; // RecordRef
  public $rateList; // RateList
}

class BillingRatesMatrix {
  public $billingRates; // BillingRates
  public $replaceAll; // boolean
}

class Translation {
  public $language; // string
  public $displayName; // string
  public $description; // string
}

class TranslationList {
  public $translation; // Translation
  public $replaceAll; // boolean
}

class ItemOptionsList {
  public $itemOptions; // RecordRef
}

class ItemVendor {
  public $vendor; // RecordRef
  public $vendorCode; // string
  public $purchasePrice; // double
  public $preferredVendor; // boolean
}

class ItemVendorList {
  public $itemVendor; // ItemVendor
  public $replaceAll; // boolean
}

class SiteCategory {
  public $category; // RecordRef
  public $categoryDescription; // string
}

class SiteCategoryList {
  public $siteCategory; // SiteCategory
  public $replaceAll; // boolean
}

class InventoryItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $purchaseDescription; // string
  public $copyDescription; // boolean
  public $cogsAccount; // RecordRef
  public $salesDescription; // string
  public $incomeAccount; // RecordRef
  public $isTaxable; // boolean
  public $assetAccount; // RecordRef
  public $shippingCost; // double
  public $shippingCostUnits; // string
  public $handlingCost; // double
  public $handlingCostUnits; // string
  public $weight; // double
  public $weightUnit; // ItemWeightUnit
  public $weightUnits; // string
  public $costingMethodDisplay; // string
  public $unitsType; // RecordRef
  public $stockUnit; // RecordRef
  public $purchaseUnit; // RecordRef
  public $saleUnit; // RecordRef
  public $billingSchedule; // RecordRef
  public $trackLandedCost; // boolean
  public $isDropShipItem; // boolean
  public $isSpecialOrderItem; // boolean
  public $stockDescription; // string
  public $deferredRevenueAccount; // RecordRef
  public $producer; // boolean
  public $manufacturer; // string
  public $revRecSchedule; // RecordRef
  public $mpn; // string
  public $manufacturerAddr1; // string
  public $manufacturerCity; // string
  public $manufacturerState; // StateAbbreviation
  public $manufacturerZip; // string
  public $countryOfManufacture; // Country
  public $manufacturerTaxId; // string
  public $scheduleBNumber; // string
  public $scheduleBQuantity; // long
  public $scheduleBCode; // ScheduleBCode
  public $manufacturerTariff; // string
  public $preferenceCriterion; // ItemPreferenceCriterion
  public $minimumQuantity; // long
  public $enforceMinQtyInternally; // boolean
  public $quantityPricingSchedule; // RecordRef
  public $useMarginalRates; // boolean
  public $overallQuantityPricingType; // ItemOverallQuantityPricingType
  public $pricingGroup; // RecordRef
  public $preferredLocation; // RecordRef
  public $cost; // double
  public $costUnits; // string
  public $totalValue; // double
  public $useBins; // boolean
  public $quantityReorderUnits; // string
  public $leadTime; // long
  public $autoLeadTime; // boolean
  public $autoPreferredStockLevel; // boolean
  public $preferredStockLevelDays; // double
  public $safetyStockLevel; // double
  public $safetyStockLevelDays; // long
  public $seasonalDemand; // boolean
  public $demandModifier; // double
  public $autoReorderPoint; // boolean
  public $storeDisplayName; // string
  public $storeDisplayThumbnail; // RecordRef
  public $storeDisplayImage; // RecordRef
  public $storeDescription; // string
  public $storeDetailedDescription; // string
  public $storeItemTemplate; // RecordRef
  public $pageTitle; // string
  public $metaTagHtml; // string
  public $searchKeywords; // string
  public $isDonationItem; // boolean
  public $showDefaultDonationAmount; // boolean
  public $maxDonationAmount; // double
  public $onSpecial; // boolean
  public $relatedItemsDescription; // string
  public $specialsDescription; // string
  public $isFeatured; // boolean
  public $featuredDescription; // string
  public $shoppingDotComCategory; // string
  public $shopzillaCategoryId; // long
  public $nexTagCategory; // string
  public $productFeed; // ItemProductFeed
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $vendorName; // string
  public $parent; // RecordRef
  public $isOnline; // boolean
  public $offerSupport; // boolean
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $costingMethod; // ItemCostingMethod
  public $currency; // string
  public $itemOptionsList; // ItemOptionsList
  public $itemVendorList; // ItemVendorList
  public $preferredStockLevel; // double
  public $pricingMatrix; // PricingMatrix
  public $purchaseTaxCode; // RecordRef
  public $quantityBackOrdered; // double
  public $quantityCommitted; // double
  public $quantityOnHand; // double
  public $quantityOnOrder; // double
  public $rate; // double
  public $reorderPoint; // double
  public $salesTaxCode; // RecordRef
  public $siteCategoryList; // SiteCategoryList
  public $translation; // TranslationList
  public $vendor; // RecordRef
  public $binNumberList; // InventoryItemBinNumberList
  public $locationsList; // InventoryItemLocationsList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class InventoryItemBinNumber {
  public $binNumber; // RecordRef
  public $onHand; // string
  public $location; // string
  public $preferredBin; // boolean
}

class InventoryItemBinNumberList {
  public $binNumber; // InventoryItemBinNumber
  public $replaceAll; // boolean
}

class InventoryItemLocations {
  public $location; // string
  public $quantityOnHand; // double
  public $onHandValueMli; // double
  public $reorderPoint; // double
  public $preferredStockLevel; // double
  public $quantityOnOrder; // double
  public $quantityCommitted; // double
  public $quantityAvailable; // double
  public $quantityBackOrdered; // double
  public $locationId; // RecordRef
}

class InventoryItemLocationsList {
  public $locations; // InventoryItemLocations
  public $replaceAll; // boolean
}

class DescriptionItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $description; // string
  public $customForm; // RecordRef
  public $itemId; // string
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class DiscountItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $description; // string
  public $nonPosting; // boolean
  public $account; // RecordRef
  public $rate; // string
  public $isPreTax; // boolean
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $vendorName; // string
  public $parent; // RecordRef
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $deferredRevenueAccount; // RecordRef
  public $expenseAccount; // RecordRef
  public $incomeAccount; // RecordRef
  public $revRecSchedule; // RecordRef
  public $salesTaxCode; // RecordRef
  public $translation; // TranslationList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class MarkupItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $description; // string
  public $nonPosting; // boolean
  public $account; // RecordRef
  public $rate; // string
  public $isPreTax; // boolean
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $vendorName; // string
  public $parent; // RecordRef
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $deferredRevenueAccount; // RecordRef
  public $expenseAccount; // RecordRef
  public $incomeAccount; // RecordRef
  public $revRecSchedule; // RecordRef
  public $salesTaxCode; // RecordRef
  public $translation; // TranslationList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class PaymentItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $description; // string
  public $paymentMethod; // RecordRef
  public $undepfunds; // boolean
  public $account; // RecordRef
  public $customForm; // RecordRef
  public $itemId; // string
  public $displayName; // string
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $translation; // TranslationList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class SubtotalItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $displayName; // string
  public $description; // string
  public $customForm; // RecordRef
  public $itemId; // string
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $translation; // TranslationList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class NonInventoryPurchaseItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $purchaseDescription; // string
  public $cost; // double
  public $costUnits; // string
  public $expenseAccount; // RecordRef
  public $isTaxable; // boolean
  public $unitsType; // RecordRef
  public $purchaseUnit; // RecordRef
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $vendorName; // string
  public $parent; // RecordRef
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $currency; // string
  public $itemOptionsList; // ItemOptionsList
  public $itemVendorList; // ItemVendorList
  public $purchaseTaxCode; // RecordRef
  public $salesTaxCode; // RecordRef
  public $translation; // TranslationList
  public $vendor; // RecordRef
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class NonInventorySaleItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $salesDescription; // string
  public $incomeAccount; // RecordRef
  public $isTaxable; // boolean
  public $shippingCost; // double
  public $shippingCostUnits; // string
  public $handlingCost; // double
  public $handlingCostUnits; // string
  public $weight; // double
  public $weightUnit; // ItemWeightUnit
  public $weightUnits; // string
  public $unitsType; // RecordRef
  public $saleUnit; // RecordRef
  public $billingSchedule; // RecordRef
  public $deferredRevenueAccount; // RecordRef
  public $revRecSchedule; // RecordRef
  public $stockDescription; // string
  public $producer; // boolean
  public $manufacturer; // string
  public $mpn; // string
  public $manufacturerAddr1; // string
  public $manufacturerCity; // string
  public $manufacturerState; // StateAbbreviation
  public $manufacturerZip; // string
  public $countryOfManufacture; // Country
  public $manufacturerTaxId; // string
  public $scheduleBNumber; // string
  public $scheduleBQuantity; // long
  public $scheduleBCode; // ScheduleBCode
  public $manufacturerTariff; // string
  public $preferenceCriterion; // ItemPreferenceCriterion
  public $minimumQuantity; // long
  public $enforceMinQtyInternally; // boolean
  public $quantityPricingSchedule; // RecordRef
  public $useMarginalRates; // boolean
  public $overallQuantityPricingType; // ItemOverallQuantityPricingType
  public $pricingGroup; // RecordRef
  public $minimumQuantityUnits; // string
  public $storeDisplayName; // string
  public $storeDisplayThumbnail; // RecordRef
  public $storeDisplayImage; // RecordRef
  public $storeDescription; // string
  public $storeDetailedDescription; // string
  public $storeItemTemplate; // RecordRef
  public $pageTitle; // string
  public $metaTagHtml; // string
  public $searchKeywords; // string
  public $isDonationItem; // boolean
  public $showDefaultDonationAmount; // boolean
  public $maxDonationAmount; // double
  public $onSpecial; // boolean
  public $relatedItemsDescription; // string
  public $specialsDescription; // string
  public $isFeatured; // boolean
  public $featuredDescription; // string
  public $shoppingDotComCategory; // string
  public $shopzillaCategoryId; // long
  public $nexTagCategory; // string
  public $productFeed; // ItemProductFeed
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $parent; // RecordRef
  public $isOnline; // boolean
  public $offerSupport; // boolean
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $itemOptionsList; // ItemOptionsList
  public $pricingMatrix; // PricingMatrix
  public $purchaseTaxCode; // RecordRef
  public $rate; // double
  public $salesTaxCode; // RecordRef
  public $siteCategoryList; // SiteCategoryList
  public $translation; // TranslationList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class NonInventoryResaleItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $purchaseDescription; // string
  public $copyDescription; // boolean
  public $cost; // double
  public $costUnits; // string
  public $expenseAccount; // RecordRef
  public $salesDescription; // string
  public $incomeAccount; // RecordRef
  public $isTaxable; // boolean
  public $isDropShipItem; // boolean
  public $isSpecialOrderItem; // boolean
  public $shippingCost; // double
  public $shippingCostUnits; // string
  public $handlingCost; // double
  public $handlingCostUnits; // string
  public $weight; // double
  public $weightUnit; // ItemWeightUnit
  public $weightUnits; // string
  public $unitsType; // RecordRef
  public $purchaseUnit; // RecordRef
  public $saleUnit; // RecordRef
  public $billingSchedule; // RecordRef
  public $deferredRevenueAccount; // RecordRef
  public $revRecSchedule; // RecordRef
  public $stockDescription; // string
  public $producer; // boolean
  public $manufacturer; // string
  public $mpn; // string
  public $manufacturerAddr1; // string
  public $manufacturerCity; // string
  public $manufacturerState; // StateAbbreviation
  public $manufacturerZip; // string
  public $countryOfManufacture; // Country
  public $manufacturerTaxId; // string
  public $scheduleBNumber; // string
  public $scheduleBQuantity; // long
  public $scheduleBCode; // ScheduleBCode
  public $manufacturerTariff; // string
  public $preferenceCriterion; // ItemPreferenceCriterion
  public $minimumQuantity; // long
  public $enforceMinQtyInternally; // boolean
  public $quantityPricingSchedule; // RecordRef
  public $useMarginalRates; // boolean
  public $overallQuantityPricingType; // ItemOverallQuantityPricingType
  public $pricingGroup; // RecordRef
  public $minimumQuantityUnits; // string
  public $storeDisplayName; // string
  public $storeDisplayThumbnail; // RecordRef
  public $storeDisplayImage; // RecordRef
  public $storeDescription; // string
  public $storeDetailedDescription; // string
  public $storeItemTemplate; // RecordRef
  public $pageTitle; // string
  public $metaTagHtml; // string
  public $searchKeywords; // string
  public $isDonationItem; // boolean
  public $showDefaultDonationAmount; // boolean
  public $maxDonationAmount; // double
  public $onSpecial; // boolean
  public $relatedItemsDescription; // string
  public $specialsDescription; // string
  public $isFeatured; // boolean
  public $featuredDescription; // string
  public $shoppingDotComCategory; // string
  public $shopzillaCategoryId; // long
  public $nexTagCategory; // string
  public $productFeed; // ItemProductFeed
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $vendorName; // string
  public $parent; // RecordRef
  public $isOnline; // boolean
  public $offerSupport; // boolean
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $currency; // string
  public $itemOptionsList; // ItemOptionsList
  public $itemVendorList; // ItemVendorList
  public $pricingMatrix; // PricingMatrix
  public $purchaseTaxCode; // RecordRef
  public $rate; // double
  public $salesTaxCode; // RecordRef
  public $siteCategoryList; // SiteCategoryList
  public $translation; // TranslationList
  public $vendor; // RecordRef
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class OtherChargeResaleItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $purchaseDescription; // string
  public $cost; // double
  public $costUnits; // string
  public $expenseAccount; // RecordRef
  public $salesDescription; // string
  public $incomeAccount; // RecordRef
  public $isTaxable; // boolean
  public $unitsType; // RecordRef
  public $purchaseUnit; // RecordRef
  public $saleUnit; // RecordRef
  public $billingSchedule; // RecordRef
  public $deferredRevenueAccount; // RecordRef
  public $revRecSchedule; // RecordRef
  public $minimumQuantity; // long
  public $minimumQuantityUnits; // string
  public $enforceMinQtyInternally; // boolean
  public $quantityPricingSchedule; // RecordRef
  public $useMarginalRates; // boolean
  public $overallQuantityPricingType; // ItemOverallQuantityPricingType
  public $pricingGroup; // RecordRef
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $vendorName; // string
  public $parent; // RecordRef
  public $isOnline; // boolean
  public $offerSupport; // boolean
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $currency; // string
  public $itemOptionsList; // ItemOptionsList
  public $itemVendorList; // ItemVendorList
  public $pricingMatrix; // PricingMatrix
  public $purchaseTaxCode; // RecordRef
  public $rate; // double
  public $salesTaxCode; // RecordRef
  public $translation; // TranslationList
  public $vendor; // RecordRef
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class OtherChargePurchaseItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $purchaseDescription; // string
  public $cost; // double
  public $costUnits; // string
  public $expenseAccount; // RecordRef
  public $isTaxable; // boolean
  public $unitsType; // RecordRef
  public $purchaseUnit; // RecordRef
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $vendorName; // string
  public $parent; // RecordRef
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $currency; // string
  public $itemOptionsList; // ItemOptionsList
  public $itemVendorList; // ItemVendorList
  public $purchaseTaxCode; // RecordRef
  public $salesTaxCode; // RecordRef
  public $translation; // TranslationList
  public $vendor; // RecordRef
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class ServiceResaleItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $purchaseDescription; // string
  public $cost; // double
  public $costUnits; // string
  public $expenseAccount; // RecordRef
  public $salesDescription; // string
  public $incomeAccount; // RecordRef
  public $isTaxable; // boolean
  public $unitsType; // RecordRef
  public $purchaseUnit; // RecordRef
  public $saleUnit; // RecordRef
  public $billingSchedule; // RecordRef
  public $deferredRevenueAccount; // RecordRef
  public $revRecSchedule; // RecordRef
  public $minimumQuantity; // long
  public $enforceMinQtyInternally; // boolean
  public $quantityPricingSchedule; // RecordRef
  public $useMarginalRates; // boolean
  public $overallQuantityPricingType; // ItemOverallQuantityPricingType
  public $pricingGroup; // RecordRef
  public $minimumQuantityUnits; // string
  public $storeDisplayName; // string
  public $storeDisplayThumbnail; // RecordRef
  public $storeDisplayImage; // RecordRef
  public $storeDescription; // string
  public $storeDetailedDescription; // string
  public $storeItemTemplate; // RecordRef
  public $pageTitle; // string
  public $metaTagHtml; // string
  public $searchKeywords; // string
  public $isDonationItem; // boolean
  public $showDefaultDonationAmount; // boolean
  public $maxDonationAmount; // double
  public $onSpecial; // boolean
  public $relatedItemsDescription; // string
  public $specialsDescription; // string
  public $isFeatured; // boolean
  public $featuredDescription; // string
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $vendorName; // string
  public $parent; // RecordRef
  public $isOnline; // boolean
  public $offerSupport; // boolean
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $currency; // string
  public $billingRatesMatrix; // BillingRatesMatrix
  public $itemOptionsList; // ItemOptionsList
  public $itemVendorList; // ItemVendorList
  public $pricingMatrix; // PricingMatrix
  public $purchaseTaxCode; // RecordRef
  public $rate; // double
  public $salesTaxCode; // RecordRef
  public $siteCategoryList; // SiteCategoryList
  public $translation; // TranslationList
  public $vendor; // RecordRef
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class ServicePurchaseItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $purchaseDescription; // string
  public $cost; // double
  public $costUnits; // string
  public $expenseAccount; // RecordRef
  public $isTaxable; // boolean
  public $unitsType; // RecordRef
  public $purchaseUnit; // RecordRef
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $vendorName; // string
  public $parent; // RecordRef
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $currency; // string
  public $itemOptionsList; // ItemOptionsList
  public $itemVendorList; // ItemVendorList
  public $purchaseTaxCode; // RecordRef
  public $salesTaxCode; // RecordRef
  public $translation; // TranslationList
  public $vendor; // RecordRef
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class ServiceSaleItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $salesDescription; // string
  public $incomeAccount; // RecordRef
  public $isTaxable; // boolean
  public $unitsType; // RecordRef
  public $saleUnit; // RecordRef
  public $billingSchedule; // RecordRef
  public $deferredRevenueAccount; // RecordRef
  public $revRecSchedule; // RecordRef
  public $minimumQuantity; // long
  public $enforceMinQtyInternally; // boolean
  public $quantityPricingSchedule; // RecordRef
  public $useMarginalRates; // boolean
  public $overallQuantityPricingType; // ItemOverallQuantityPricingType
  public $pricingGroup; // RecordRef
  public $minimumQuantityUnits; // string
  public $storeDisplayName; // string
  public $storeDisplayThumbnail; // RecordRef
  public $storeDisplayImage; // RecordRef
  public $storeDescription; // string
  public $storeDetailedDescription; // string
  public $storeItemTemplate; // RecordRef
  public $pageTitle; // string
  public $metaTagHtml; // string
  public $searchKeywords; // string
  public $isDonationItem; // boolean
  public $showDefaultDonationAmount; // boolean
  public $maxDonationAmount; // double
  public $onSpecial; // boolean
  public $relatedItemsDescription; // string
  public $specialsDescription; // string
  public $isFeatured; // boolean
  public $featuredDescription; // string
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $parent; // RecordRef
  public $isOnline; // boolean
  public $offerSupport; // boolean
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $billingRatesMatrix; // BillingRatesMatrix
  public $itemOptionsList; // ItemOptionsList
  public $pricingMatrix; // PricingMatrix
  public $purchaseTaxCode; // RecordRef
  public $rate; // double
  public $salesTaxCode; // RecordRef
  public $siteCategoryList; // SiteCategoryList
  public $translation; // TranslationList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class OtherChargeSaleItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $salesDescription; // string
  public $incomeAccount; // RecordRef
  public $isTaxable; // boolean
  public $unitsType; // RecordRef
  public $saleUnit; // RecordRef
  public $billingSchedule; // RecordRef
  public $deferredRevenueAccount; // RecordRef
  public $revRecSchedule; // RecordRef
  public $minimumQuantity; // long
  public $minimumQuantityUnits; // string
  public $enforceMinQtyInternally; // boolean
  public $quantityPricingSchedule; // RecordRef
  public $useMarginalRates; // boolean
  public $overallQuantityPricingType; // ItemOverallQuantityPricingType
  public $pricingGroup; // RecordRef
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $parent; // RecordRef
  public $isOnline; // boolean
  public $offerSupport; // boolean
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $itemOptionsList; // ItemOptionsList
  public $pricingMatrix; // PricingMatrix
  public $purchaseTaxCode; // RecordRef
  public $rate; // double
  public $salesTaxCode; // RecordRef
  public $translation; // TranslationList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class Currency {
  public $name; // string
  public $symbol; // string
  public $isInactive; // boolean
  public $isBaseCurrency; // boolean
  public $locale; // CurrencyLocale
  public $formatSample; // string
  public $exchangeRate; // double
  public $currencyPrecision; // CurrencyCurrencyPrecision
  public $internalId; // string
  public $externalId; // string
}

class ExpenseCategory {
  public $name; // string
  public $description; // string
  public $expenseAcct; // RecordRef
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class Account {
  public $acctType; // AccountType
  public $acctNumber; // string
  public $acctName; // string
  public $currency; // RecordRef
  public $exchangeRate; // string
  public $parent; // RecordRef
  public $billableExpensesAcct; // RecordRef
  public $deferralAcct; // RecordRef
  public $description; // string
  public $curDocNum; // long
  public $isInactive; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $category1099misc; // RecordRef
  public $incomeStatement; // RecordRef
  public $balanceSheet; // RecordRef
  public $cashFlow; // RecordRef
  public $openingBalance; // double
  public $tranDate; // dateTime
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class Department {
  public $name; // string
  public $parent; // RecordRef
  public $isInactive; // boolean
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class DepartmentSearch {
  public $basic; // DepartmentSearchBasic
}

class Classification {
  public $name; // string
  public $parent; // RecordRef
  public $isInactive; // boolean
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class ClassificationSearch {
  public $basic; // ClassificationSearchBasic
}

class Location {
  public $name; // string
  public $parent; // RecordRef
  public $isInactive; // boolean
  public $tranPrefix; // string
  public $attention; // string
  public $addressee; // string
  public $addrPhone; // string
  public $addr1; // string
  public $addr2; // string
  public $city; // string
  public $state; // State
  public $zip; // string
  public $country; // Country
  public $addrText; // string
  public $override; // boolean
  public $logo; // RecordRef
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class LocationSearch {
  public $basic; // LocationSearchBasic
}

class UnitsType {
  public $name; // string
  public $isInactive; // boolean
  public $uomList; // UnitsTypeUomList
  public $internalId; // string
  public $externalId; // string
}

class UnitsTypeUom {
  public $name; // string
  public $pluralName; // string
  public $abbreviation; // string
  public $pluralAbbreviation; // string
  public $conversionRate; // double
  public $baseUnit; // boolean
}

class UnitsTypeUomList {
  public $uom; // UnitsTypeUom
  public $replaceAll; // boolean
}

class ItemSearch {
  public $basic; // ItemSearchBasic
  public $preferredVendorJoin; // VendorSearchBasic
  public $shopperJoin; // CustomerSearchBasic
  public $vendorJoin; // VendorSearchBasic
}

class ContactRole {
  public $name; // string
  public $description; // string
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class Bin {
  public $binNumber; // string
  public $location; // RecordRef
  public $memo; // string
  public $isInactive; // boolean
  public $internalId; // string
  public $externalId; // string
}

class BinSearch {
  public $basic; // BinSearchBasic
}

class SalesTaxItem {
  public $itemId; // string
  public $displayName; // string
  public $description; // string
  public $rate; // string
  public $taxType; // RecordRef
  public $taxAgency; // RecordRef
  public $purchaseAccount; // RecordRef
  public $saleAccount; // RecordRef
  public $isInactive; // boolean
  public $effectiveFrom; // dateTime
  public $validUntil; // dateTime
  public $eccode; // boolean
  public $parent; // RecordRef
  public $isDefault; // boolean
  public $excludeFromTaxReports; // boolean
  public $available; // SalesTaxItemAvailable
  public $export; // boolean
  public $taxAccount; // RecordRef
  public $county; // string
  public $city; // string
  public $state; // StateAbbreviation
  public $zip; // string
  public $internalId; // string
  public $externalId; // string
}

class TaxGroup {
  public $itemId; // string
  public $description; // string
  public $state; // StateAbbreviation
  public $taxitem1; // RecordRef
  public $unitprice1; // string
  public $taxitem2; // RecordRef
  public $unitprice2; // string
  public $piggyback; // boolean
  public $isInactive; // boolean
  public $rate; // double
  public $taxType; // RecordRef
  public $county; // string
  public $city; // string
  public $zip; // string
  public $isDefault; // boolean
  public $taxItemList; // TaxGroupTaxItemList
  public $internalId; // string
  public $externalId; // string
}

class TaxGroupTaxItem {
  public $taxName; // RecordRef
  public $rate; // double
  public $basis; // double
  public $taxType; // string
}

class TaxGroupTaxItemList {
  public $taxItem; // TaxGroupTaxItem
  public $replaceAll; // boolean
}

class TaxType {
  public $name; // string
  public $description; // string
  public $saleAccount; // RecordRef
  public $purchaseAccount; // RecordRef
  public $internalId; // string
  public $externalId; // string
}

class SerializedInventoryItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $vendorName; // string
  public $parent; // RecordRef
  public $isOnline; // boolean
  public $offerSupport; // boolean
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $purchaseDescription; // string
  public $copyDescription; // boolean
  public $currency; // string
  public $cogsAccount; // RecordRef
  public $vendor; // RecordRef
  public $salesDescription; // string
  public $incomeAccount; // RecordRef
  public $isTaxable; // boolean
  public $assetAccount; // RecordRef
  public $shippingCost; // double
  public $handlingCost; // double
  public $weight; // double
  public $costingMethodDisplay; // string
  public $billingSchedule; // RecordRef
  public $trackLandedCost; // boolean
  public $isDropShipItem; // boolean
  public $isSpecialOrderItem; // boolean
  public $stockDescription; // string
  public $deferredRevenueAccount; // RecordRef
  public $producer; // boolean
  public $manufacturer; // string
  public $revRecSchedule; // RecordRef
  public $mpn; // string
  public $manufacturerAddr1; // string
  public $manufacturerCity; // string
  public $manufacturerState; // StateAbbreviation
  public $manufacturerZip; // string
  public $countryOfManufacture; // Country
  public $manufacturerTaxId; // string
  public $scheduleBNumber; // string
  public $scheduleBQuantity; // long
  public $scheduleBCode; // ScheduleBCode
  public $manufacturerTariff; // string
  public $preferenceCriterion; // ItemPreferenceCriterion
  public $minimumQuantity; // long
  public $enforceMinQtyInternally; // boolean
  public $quantityPricingSchedule; // RecordRef
  public $useMarginalRates; // boolean
  public $overallQuantityPricingType; // ItemOverallQuantityPricingType
  public $pricingGroup; // RecordRef
  public $preferredLocation; // RecordRef
  public $cost; // double
  public $costUnits; // string
  public $quantityReorderUnits; // string
  public $totalValue; // double
  public $useBins; // boolean
  public $leadTime; // long
  public $autoLeadTime; // boolean
  public $autoReorderPoint; // boolean
  public $autoPreferredStockLevel; // boolean
  public $preferredStockLevelDays; // double
  public $safetyStockLevel; // double
  public $safetyStockLevelDays; // long
  public $seasonalDemand; // boolean
  public $demandModifier; // double
  public $storeDisplayName; // string
  public $storeDisplayThumbnail; // RecordRef
  public $weightUnit; // ItemWeightUnit
  public $weightUnits; // string
  public $storeDisplayImage; // RecordRef
  public $storeDescription; // string
  public $storeDetailedDescription; // string
  public $storeItemTemplate; // RecordRef
  public $pageTitle; // string
  public $metaTagHtml; // string
  public $searchKeywords; // string
  public $isDonationItem; // boolean
  public $showDefaultDonationAmount; // boolean
  public $maxDonationAmount; // double
  public $shoppingDotComCategory; // string
  public $shopzillaCategoryId; // long
  public $nexTagCategory; // string
  public $quantityOnHand; // double
  public $onHandValueMli; // double
  public $serialNumbers; // string
  public $reorderPoint; // double
  public $preferredStockLevel; // double
  public $quantityOnOrder; // double
  public $quantityCommitted; // double
  public $quantityAvailable; // double
  public $quantityBackOrdered; // double
  public $purchaseTaxCode; // RecordRef
  public $rate; // double
  public $salesTaxCode; // RecordRef
  public $translation; // TranslationList
  public $onSpecial; // boolean
  public $specialsDescription; // string
  public $isFeatured; // boolean
  public $relatedItemsDescription; // string
  public $featuredDescription; // string
  public $productFeed; // ItemProductFeed
  public $itemOptionsList; // ItemOptionsList
  public $itemVendorList; // ItemVendorList
  public $pricingMatrix; // PricingMatrix
  public $numbersList; // SerializedInventoryItemNumbersList
  public $binNumberList; // InventoryItemBinNumberList
  public $siteCategoryList; // SiteCategoryList
  public $locationsList; // SerializedInventoryItemLocationsList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class SerializedInventoryItemLocations {
  public $location; // string
  public $quantityOnHand; // double
  public $onHandValueMli; // double
  public $serialNumbers; // string
  public $reorderPoint; // double
  public $preferredStockLevel; // double
  public $quantityOnOrder; // double
  public $quantityCommitted; // double
  public $quantityAvailable; // double
  public $quantityBackOrdered; // double
  public $locationId; // RecordRef
}

class SerializedInventoryItemLocationsList {
  public $locations; // SerializedInventoryItemLocations
  public $replaceAll; // boolean
}

class SerializedInventoryItemNumbers {
  public $serialNumber; // RecordRef
}

class SerializedInventoryItemNumbersList {
  public $numbers; // SerializedInventoryItemNumbers
  public $replaceAll; // boolean
}

class LotNumberedInventoryItem {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $customForm; // RecordRef
  public $itemId; // string
  public $nameIsUPC; // boolean
  public $displayName; // string
  public $vendorName; // string
  public $parent; // RecordRef
  public $isOnline; // boolean
  public $offerSupport; // boolean
  public $isInactive; // boolean
  public $availableToPartners; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $purchaseDescription; // string
  public $copyDescription; // boolean
  public $currency; // string
  public $cogsAccount; // RecordRef
  public $vendor; // RecordRef
  public $salesDescription; // string
  public $incomeAccount; // RecordRef
  public $isTaxable; // boolean
  public $assetAccount; // RecordRef
  public $shippingCost; // double
  public $handlingCost; // double
  public $weight; // double
  public $costingMethodDisplay; // string
  public $billingSchedule; // RecordRef
  public $trackLandedCost; // boolean
  public $isDropShipItem; // boolean
  public $isSpecialOrderItem; // boolean
  public $stockDescription; // string
  public $deferredRevenueAccount; // RecordRef
  public $producer; // boolean
  public $manufacturer; // string
  public $revRecSchedule; // RecordRef
  public $mpn; // string
  public $manufacturerAddr1; // string
  public $manufacturerCity; // string
  public $manufacturerState; // StateAbbreviation
  public $manufacturerZip; // string
  public $countryOfManufacture; // Country
  public $manufacturerTaxId; // string
  public $scheduleBNumber; // string
  public $scheduleBQuantity; // long
  public $scheduleBCode; // ScheduleBCode
  public $manufacturerTariff; // string
  public $preferenceCriterion; // ItemPreferenceCriterion
  public $minimumQuantity; // long
  public $enforceMinQtyInternally; // boolean
  public $quantityPricingSchedule; // RecordRef
  public $useMarginalRates; // boolean
  public $overallQuantityPricingType; // ItemOverallQuantityPricingType
  public $pricingGroup; // RecordRef
  public $preferredLocation; // RecordRef
  public $cost; // double
  public $costUnits; // string
  public $quantityReorderUnits; // string
  public $totalValue; // double
  public $useBins; // boolean
  public $leadTime; // long
  public $autoLeadTime; // boolean
  public $autoReorderPoint; // boolean
  public $autoPreferredStockLevel; // boolean
  public $preferredStockLevelDays; // double
  public $safetyStockLevel; // double
  public $safetyStockLevelDays; // long
  public $seasonalDemand; // boolean
  public $demandModifier; // double
  public $storeDisplayName; // string
  public $storeDisplayThumbnail; // RecordRef
  public $weightUnit; // ItemWeightUnit
  public $weightUnits; // string
  public $storeDisplayImage; // RecordRef
  public $storeDescription; // string
  public $storeDetailedDescription; // string
  public $storeItemTemplate; // RecordRef
  public $pageTitle; // string
  public $metaTagHtml; // string
  public $searchKeywords; // string
  public $isDonationItem; // boolean
  public $showDefaultDonationAmount; // boolean
  public $maxDonationAmount; // double
  public $shoppingDotComCategory; // string
  public $shopzillaCategoryId; // long
  public $nexTagCategory; // string
  public $quantityOnHand; // double
  public $expirationDate; // dateTime
  public $onHandValueMli; // double
  public $serialNumbers; // string
  public $reorderPoint; // double
  public $preferredStockLevel; // double
  public $quantityOnOrder; // double
  public $quantityCommitted; // double
  public $quantityAvailable; // double
  public $quantityBackOrdered; // double
  public $purchaseTaxCode; // RecordRef
  public $rate; // double
  public $salesTaxCode; // RecordRef
  public $translation; // TranslationList
  public $onSpecial; // boolean
  public $specialsDescription; // string
  public $isFeatured; // boolean
  public $relatedItemsDescription; // string
  public $featuredDescription; // string
  public $productFeed; // ItemProductFeed
  public $itemOptionsList; // ItemOptionsList
  public $itemVendorList; // ItemVendorList
  public $pricingMatrix; // PricingMatrix
  public $numbersList; // LotNumberedInventoryItemNumbersList
  public $binNumberList; // InventoryItemBinNumberList
  public $siteCategoryList; // SiteCategoryList
  public $locationsList; // LotNumberedInventoryItemLocationsList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class LotNumberedInventoryItemLocations {
  public $location; // string
  public $quantityOnHand; // double
  public $onHandValueMli; // double
  public $serialNumbers; // string
  public $expirationDate; // dateTime
  public $reorderPoint; // double
  public $preferredStockLevel; // double
  public $quantityOnOrder; // double
  public $quantityCommitted; // double
  public $quantityAvailable; // double
  public $quantityBackOrdered; // double
  public $locationId; // RecordRef
}

class LotNumberedInventoryItemLocationsList {
  public $locations; // LotNumberedInventoryItemLocations
  public $replaceAll; // boolean
}

class LotNumberedInventoryItemNumbers {
  public $serialNumber; // RecordRef
  public $quantityOnHand; // double
}

class LotNumberedInventoryItemNumbersList {
  public $numbers; // LotNumberedInventoryItemNumbers
  public $replaceAll; // boolean
}

class SalesOrderItemCommitInventory {
}

class SalesOrderItemCreatePo {
}

class SalesOrderOrderStatus {
}

class ItemFulfillmentExportTypeUps {
}

class ItemFulfillmentLicenseExceptionUps {
}

class ItemFulfillmentMethodOfTransportUps {
}

class ItemFulfillmentThirdPartyTypeUps {
}

class ItemFulfillmentPackageUpsCodMethodUps {
}

class ItemFulfillmentPackageUpsDeliveryConfUps {
}

class ItemFulfillmentPackageUpsPackagingUps {
}

class ItemFulfillmentB13AFilingOptionFedEx {
}

class ItemFulfillmentHomeDeliveryTypeFedEx {
}

class ItemFulfillmentThirdPartyTypeFedEx {
}

class ItemFulfillmentPackageFedExAdmPackageTypeFedEx {
}

class ItemFulfillmentPackageFedExCodMethodFedEx {
}

class ItemFulfillmentPackageFedExDeliveryConfFedEx {
}

class ItemFulfillmentPackageFedExPackagingFedEx {
}

class ItemFulfillmentPackageFedExSignatureOptionsFedEx {
}

class ItemFulfillmentTermsOfSaleFedEx {
}

class ItemFulfillmentShipStatus {
}

class OpportunityStatus {
}

class TransactionType {
}

class TransactionStatus {
}

class ItemFulfillmentPackageFedExCodFreightTypeFedEx {
}

class Opportunity {
  public $customForm; // RecordRef
  public $entity; // RecordRef
  public $title; // string
  public $tranId; // string
  public $salesRep; // RecordRef
  public $partner; // RecordRef
  public $salesGroup; // RecordRef
  public $syncSalesTeams; // boolean
  public $leadSource; // RecordRef
  public $entityStatus; // RecordRef
  public $probability; // double
  public $tranDate; // dateTime
  public $expectedCloseDate; // dateTime
  public $forecastType; // RecordRef
  public $currencyName; // string
  public $exchangeRate; // double
  public $projectedTotal; // double
  public $rangeLow; // double
  public $rangeHigh; // double
  public $projAltSalesAmt; // double
  public $altSalesRangeLow; // double
  public $altSalesRangeHigh; // double
  public $weightedTotal; // double
  public $actionItem; // string
  public $winLossReason; // RecordRef
  public $memo; // string
  public $billAddressList; // RecordRef
  public $billAddress; // string
  public $shipAddressList; // RecordRef
  public $shipAddress; // string
  public $class; // RecordRef
  public $closeDate; // dateTime
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $department; // RecordRef
  public $location; // RecordRef
  public $status; // string
  public $vatRegNum; // string
  public $salesTeamList; // OpportunitySalesTeamList
  public $itemList; // OpportunityItemList
  public $competitorsList; // OpportunityCompetitorsList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class OpportunitySalesTeam {
  public $employee; // RecordRef
  public $salesRole; // RecordRef
  public $isPrimary; // boolean
  public $contribution; // double
}

class OpportunitySalesTeamList {
  public $salesTeam; // OpportunitySalesTeam
  public $replaceAll; // boolean
}

class OpportunityItem {
  public $item; // RecordRef
  public $line; // long
  public $quantityAvailable; // double
  public $quantityOnHand; // double
  public $quantity; // double
  public $units; // RecordRef
  public $description; // string
  public $price; // RecordRef
  public $rate; // string
  public $amount; // double
  public $altSalesAmt; // double
  public $revRecTermInMonths; // long
  public $options; // CustomFieldList
  public $department; // RecordRef
  public $location; // RecordRef
  public $class; // RecordRef
  public $grossAmt; // double
  public $tax1Amt; // double
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
  public $customFieldList; // CustomFieldList
}

class OpportunityItemList {
  public $item; // OpportunityItem
  public $replaceAll; // boolean
}

class OpportunityCompetitors {
  public $competitor; // RecordRef
  public $url; // string
  public $notes; // string
  public $winner; // boolean
}

class OpportunityCompetitorsList {
  public $competitors; // OpportunityCompetitors
  public $replaceAll; // boolean
}

class OpportunitySearch {
  public $basic; // OpportunitySearchBasic
  public $callJoin; // PhoneCallSearchBasic
  public $customerJoin; // CustomerSearchBasic
  public $decisionMakerJoin; // ContactSearchBasic
  public $eventJoin; // CalendarEventSearchBasic
  public $messagesJoin; // MessageSearchBasic
  public $partnerJoin; // PartnerSearchBasic
  public $salesRepJoin; // EmployeeSearchBasic
  public $taskJoin; // TaskSearchBasic
  public $userNotesJoin; // NoteSearchBasic
}

class SalesOrder {
  public $createdDate; // dateTime
  public $customForm; // RecordRef
  public $entity; // RecordRef
  public $tranDate; // dateTime
  public $tranId; // string
  public $createdFrom; // RecordRef
  public $orderStatus; // SalesOrderOrderStatus
  public $opportunity; // RecordRef
  public $salesRep; // RecordRef
  public $partner; // RecordRef
  public $salesGroup; // RecordRef
  public $syncSalesTeams; // boolean
  public $leadSource; // RecordRef
  public $startDate; // dateTime
  public $endDate; // dateTime
  public $otherRefNum; // string
  public $memo; // string
  public $excludeCommission; // boolean
  public $exchangeRate; // double
  public $promoCode; // RecordRef
  public $currencyName; // string
  public $discountItem; // RecordRef
  public $discountRate; // string
  public $isTaxable; // boolean
  public $taxItem; // RecordRef
  public $taxRate; // double
  public $toBePrinted; // boolean
  public $toBeEmailed; // boolean
  public $email; // string
  public $toBeFaxed; // boolean
  public $fax; // string
  public $messageSel; // RecordRef
  public $message; // string
  public $billAddressList; // RecordRef
  public $billAddress; // string
  public $shipAddressList; // RecordRef
  public $shipAddress; // string
  public $fob; // string
  public $shipDate; // dateTime
  public $shipMethod; // RecordRef
  public $shippingCost; // double
  public $shippingTax1Rate; // double
  public $shippingTaxCode; // RecordRef
  public $handlingTaxCode; // RecordRef
  public $handlingTax1Rate; // double
  public $handlingCost; // double
  public $trackingNumbers; // string
  public $shipComplete; // boolean
  public $paymentMethod; // RecordRef
  public $creditCard; // RecordRef
  public $ccNumber; // string
  public $ccExpireDate; // dateTime
  public $ccName; // string
  public $ccStreet; // string
  public $ccZipCode; // string
  public $payPalStatus; // string
  public $creditCardProcessor; // RecordRef
  public $payPalTranId; // string
  public $ccApproved; // boolean
  public $getAuth; // boolean
  public $authCode; // string
  public $ccAvsStreetMatch; // AvsMatchCode
  public $ccAvsZipMatch; // AvsMatchCode
  public $ccSecurityCodeMatch; // AvsMatchCode
  public $altSalesTotal; // double
  public $subTotal; // double
  public $discountTotal; // double
  public $taxTotal; // double
  public $altShippingCost; // double
  public $altHandlingCost; // double
  public $total; // double
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $balance; // double
  public $billingSchedule; // RecordRef
  public $ccSecurityCode; // string
  public $class; // RecordRef
  public $department; // RecordRef
  public $debitCardIssueNo; // string
  public $lastModifiedDate; // dateTime
  public $location; // RecordRef
  public $pnRefNum; // string
  public $status; // string
  public $tax2Total; // double
  public $terms; // RecordRef
  public $validFrom; // dateTime
  public $vatRegNum; // string
  public $salesTeamList; // SalesOrderSalesTeamList
  public $itemList; // SalesOrderItemList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class SalesOrderSalesTeam {
  public $employee; // RecordRef
  public $salesRole; // RecordRef
  public $isPrimary; // boolean
  public $contribution; // double
}

class SalesOrderSalesTeamList {
  public $salesTeam; // SalesOrderSalesTeam
  public $replaceAll; // boolean
}

class SalesOrderItem {
  public $item; // RecordRef
  public $quantityAvailable; // double
  public $quantityOnHand; // double
  public $quantity; // double
  public $units; // RecordRef
  public $description; // string
  public $price; // RecordRef
  public $rate; // string
  public $serialNumbers; // RecordRef
  public $amount; // double
  public $isTaxable; // boolean
  public $commitInventory; // SalesOrderItemCommitInventory
  public $licenseCode; // string
  public $options; // CustomFieldList
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $createPo; // SalesOrderItemCreatePo
  public $createdPo; // RecordRef
  public $altSalesAmt; // double
  public $poVendor; // RecordRef
  public $poCurrency; // string
  public $poRate; // double
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecTermInMonths; // long
  public $revRecEndDate; // dateTime
  public $deferRevRec; // boolean
  public $isClosed; // boolean
  public $billingSchedule; // RecordRef
  public $grossAmt; // double
  public $line; // long
  public $percentComplete; // double
  public $quantityBackOrdered; // double
  public $quantityBilled; // double
  public $quantityCommitted; // double
  public $quantityFulfilled; // double
  public $quantityPacked; // double
  public $quantityPicked; // double
  public $tax1Amt; // double
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
  public $customFieldList; // CustomFieldList
}

class SalesOrderItemList {
  public $item; // SalesOrderItem
  public $replaceAll; // boolean
}

class TransactionSearch {
  public $basic; // TransactionSearchBasic
  public $classJoin; // ClassificationSearchBasic
  public $contactPrimaryJoin; // ContactSearchBasic
  public $createdFromJoin; // TransactionSearchBasic
  public $customerJoin; // CustomerSearchBasic
  public $departmentJoin; // DepartmentSearchBasic
  public $employeeJoin; // EmployeeSearchBasic
  public $itemJoin; // ItemSearchBasic
  public $locationJoin; // LocationSearchBasic
  public $messagesJoin; // MessageSearchBasic
  public $salesRepJoin; // EmployeeSearchBasic
  public $userNotesJoin; // NoteSearchBasic
  public $vendorJoin; // VendorSearchBasic
}

class ItemFulfillment {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $postingPeriod; // RecordRef
  public $entity; // RecordRef
  public $createdFrom; // RecordRef
  public $shipAddressList; // RecordRef
  public $shipAddress; // string
  public $shipOverride; // boolean
  public $shipAttention; // string
  public $shipCompany; // string
  public $shipAddr1; // string
  public $shipAddr2; // string
  public $shipCity; // string
  public $shipState; // string
  public $shipZip; // string
  public $shipCountry; // Country
  public $shipPhone; // string
  public $shipIsResidential; // boolean
  public $shipStatus; // ItemFulfillmentShipStatus
  public $saturdayDeliveryUps; // boolean
  public $sendShipNotifyEmailUps; // boolean
  public $sendBackupEmailUps; // boolean
  public $shipNotifyEmailAddressUps; // string
  public $shipNotifyEmailAddress2Ups; // string
  public $backupEmailAddressUps; // string
  public $shipNotifyEmailMessageUps; // string
  public $thirdPartyAcctUps; // string
  public $thirdPartyZipcodeUps; // string
  public $thirdPartyCountryUps; // Country
  public $thirdPartyTypeUps; // ItemFulfillmentThirdPartyTypeUps
  public $partiesToTransactionUps; // boolean
  public $exportTypeUps; // ItemFulfillmentExportTypeUps
  public $methodOfTransportUps; // ItemFulfillmentMethodOfTransportUps
  public $carrierIdUps; // string
  public $entryNumberUps; // string
  public $inbondCodeUps; // string
  public $isRoutedExportTransactionUps; // boolean
  public $licenseNumberUps; // string
  public $licenseDateUps; // dateTime
  public $licenseExceptionUps; // ItemFulfillmentLicenseExceptionUps
  public $eccNumberUps; // string
  public $recipientTaxIdUps; // string
  public $blanketStartDateUps; // dateTime
  public $blanketEndDateUps; // dateTime
  public $shipmentWeightUps; // double
  public $saturdayDeliveryFedEx; // boolean
  public $saturdayPickupFedex; // boolean
  public $sendShipNotifyEmailFedEx; // boolean
  public $sendBackupEmailFedEx; // boolean
  public $signatureHomeDeliveryFedEx; // boolean
  public $shipNotifyEmailAddressFedEx; // string
  public $backupEmailAddressFedEx; // string
  public $shipDateFedEx; // dateTime
  public $homeDeliveryTypeFedEx; // ItemFulfillmentHomeDeliveryTypeFedEx
  public $homeDeliveryDateFedEx; // dateTime
  public $bookingConfirmationNumFedEx; // string
  public $intlExemptionNumFedEx; // string
  public $b13aFilingOptionFedEx; // ItemFulfillmentB13AFilingOptionFedEx
  public $b13aStatementDataFedEx; // string
  public $thirdPartyAcctFedEx; // string
  public $thirdPartyCountryFedEx; // Country
  public $thirdPartyTypeFedEx; // ItemFulfillmentThirdPartyTypeFedEx
  public $shipmentWeightFedEx; // double
  public $termsOfSaleFedEx; // ItemFulfillmentTermsOfSaleFedEx
  public $termsFreightChargeFedEx; // double
  public $termsInsuranceChargeFedEx; // double
  public $tranDate; // dateTime
  public $tranId; // string
  public $shipMethod; // RecordRef
  public $generateIntegratedShipperLabel; // boolean
  public $shippingCost; // double
  public $shippingCostInForeignCurrency; // double
  public $handlingCost; // double
  public $handlingCostInForeignCurrency; // double
  public $packageList; // ItemFulfillmentPackageList
  public $packageUpsList; // ItemFulfillmentPackageUpsList
  public $packageFedExList; // ItemFulfillmentPackageFedExList
  public $itemList; // ItemFulfillmentItemList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class ItemFulfillmentItem {
  public $jobName; // string
  public $itemReceive; // boolean
  public $itemName; // string
  public $description; // string
  public $location; // RecordRef
  public $onHand; // double
  public $quantity; // double
  public $unitsDisplay; // string
  public $binNumbers; // string
  public $serialNumbers; // string
  public $poNum; // string
  public $item; // RecordRef
  public $orderLine; // long
  public $quantityRemaining; // double
  public $options; // CustomFieldList
  public $customFieldList; // CustomFieldList
}

class ItemFulfillmentItemList {
  public $item; // ItemFulfillmentItem
  public $replaceAll; // boolean
}

class ItemFulfillmentPackage {
  public $packageWeight; // double
  public $packageDescr; // string
  public $packageTrackingNumber; // string
}

class ItemFulfillmentPackageList {
  public $package; // ItemFulfillmentPackage
  public $replaceAll; // boolean
}

class ItemFulfillmentPackageUps {
  public $packageWeightUps; // double
  public $packageDescrUps; // string
  public $packageTrackingNumberUps; // string
  public $packagingUps; // ItemFulfillmentPackageUpsPackagingUps
  public $insuredValueUps; // double
  public $reference1Ups; // string
  public $reference2Ups; // string
  public $packageLengthUps; // long
  public $packageWidthUps; // long
  public $packageHeightUps; // long
  public $additionalHandlingUps; // boolean
  public $useCodUps; // boolean
  public $codAmountUps; // double
  public $codMethodUps; // ItemFulfillmentPackageUpsCodMethodUps
  public $deliveryConfUps; // ItemFulfillmentPackageUpsDeliveryConfUps
}

class ItemFulfillmentPackageUpsList {
  public $packageUps; // ItemFulfillmentPackageUps
  public $replaceAll; // boolean
}

class ItemFulfillmentPackageFedEx {
  public $packageWeightFedEx; // double
  public $packageTrackingNumberFedEx; // string
  public $packagingFedEx; // ItemFulfillmentPackageFedExPackagingFedEx
  public $admPackageTypeFedEx; // ItemFulfillmentPackageFedExAdmPackageTypeFedEx
  public $isNonStandardContainerFedEx; // boolean
  public $insuredValueFedEx; // double
  public $reference1FedEx; // string
  public $packageLengthFedEx; // long
  public $packageWidthFedEx; // long
  public $packageHeightFedEx; // long
  public $useCodFedEx; // boolean
  public $codAmountFedEx; // double
  public $codMethodFedEx; // ItemFulfillmentPackageFedExCodMethodFedEx
  public $codFreightTypeFedEx; // ItemFulfillmentPackageFedExCodFreightTypeFedEx
  public $deliveryConfFedEx; // ItemFulfillmentPackageFedExDeliveryConfFedEx
  public $signatureOptionsFedEx; // ItemFulfillmentPackageFedExSignatureOptionsFedEx
  public $signatureReleaseFedEx; // string
  public $authorizationNumberFedEx; // string
}

class ItemFulfillmentPackageFedExList {
  public $packageFedEx; // ItemFulfillmentPackageFedEx
  public $replaceAll; // boolean
}

class Invoice {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $customForm; // RecordRef
  public $entity; // RecordRef
  public $tranDate; // dateTime
  public $tranId; // string
  public $createdFrom; // RecordRef
  public $postingPeriod; // RecordRef
  public $opportunity; // RecordRef
  public $department; // RecordRef
  public $class; // RecordRef
  public $terms; // RecordRef
  public $location; // RecordRef
  public $dueDate; // dateTime
  public $discountDate; // dateTime
  public $discountAmount; // double
  public $salesRep; // RecordRef
  public $partner; // RecordRef
  public $leadSource; // RecordRef
  public $startDate; // dateTime
  public $endDate; // dateTime
  public $otherRefNum; // string
  public $memo; // string
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $amountPaid; // double
  public $amountRemaining; // double
  public $balance; // double
  public $account; // RecordRef
  public $exchangeRate; // double
  public $currencyName; // string
  public $promoCode; // RecordRef
  public $discountItem; // RecordRef
  public $discountRate; // string
  public $isTaxable; // boolean
  public $taxItem; // RecordRef
  public $taxRate; // double
  public $toBePrinted; // boolean
  public $toBeEmailed; // boolean
  public $toBeFaxed; // boolean
  public $fax; // string
  public $messageSel; // RecordRef
  public $message; // string
  public $billAddressList; // RecordRef
  public $billAddress; // string
  public $shipAddressList; // RecordRef
  public $shipAddress; // string
  public $fob; // string
  public $shipDate; // dateTime
  public $shipMethod; // RecordRef
  public $shippingCost; // double
  public $shippingTax1Rate; // double
  public $shippingTaxCode; // RecordRef
  public $handlingTaxCode; // RecordRef
  public $handlingTax1Rate; // double
  public $handlingCost; // double
  public $trackingNumbers; // string
  public $salesGroup; // RecordRef
  public $subTotal; // double
  public $syncSalesTeams; // boolean
  public $discountTotal; // double
  public $taxTotal; // double
  public $altShippingCost; // double
  public $altHandlingCost; // double
  public $total; // double
  public $status; // string
  public $billingSchedule; // RecordRef
  public $email; // string
  public $tax2Total; // double
  public $vatRegNum; // string
  public $expCostDiscount; // RecordRef
  public $itemCostDiscount; // RecordRef
  public $timeDiscount; // RecordRef
  public $expCostDiscRate; // string
  public $itemCostDiscRate; // string
  public $timeDiscRate; // string
  public $expCostDiscAmount; // double
  public $itemCostDiscAmount; // double
  public $timeDiscAmount; // double
  public $expCostDiscTaxable; // boolean
  public $itemCostDiscTaxable; // boolean
  public $timeDiscTaxable; // boolean
  public $expCostDiscPrint; // boolean
  public $salesTeamList; // InvoiceSalesTeamList
  public $itemList; // InvoiceItemList
  public $itemCostList; // InvoiceItemCostList
  public $expCostList; // InvoiceExpCostList
  public $timeList; // InvoiceTimeList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class InvoiceSalesTeam {
  public $employee; // RecordRef
  public $salesRole; // RecordRef
  public $isPrimary; // boolean
  public $contribution; // double
}

class InvoiceSalesTeamList {
  public $salesTeam; // InvoiceSalesTeam
  public $replaceAll; // boolean
}

class InvoiceItem {
  public $item; // RecordRef
  public $line; // long
  public $description; // string
  public $amount; // double
  public $isTaxable; // boolean
  public $options; // CustomFieldList
  public $deferRevRec; // boolean
  public $quantity; // double
  public $currentPercent; // double
  public $units; // RecordRef
  public $serialNumbers; // string
  public $binNumbers; // string
  public $price; // RecordRef
  public $rate; // string
  public $percentComplete; // double
  public $quantityOnHand; // double
  public $quantityAvailable; // double
  public $quantityOrdered; // double
  public $quantityRemaining; // double
  public $quantityFulfilled; // double
  public $amountOrdered; // double
  public $department; // RecordRef
  public $orderLine; // long
  public $licenseCode; // string
  public $class; // RecordRef
  public $location; // RecordRef
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $grossAmt; // double
  public $tax1Amt; // double
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
  public $customFieldList; // CustomFieldList
}

class InvoiceItemList {
  public $item; // InvoiceItem
  public $replaceAll; // boolean
}

class InvoiceItemCost {
  public $apply; // boolean
  public $doc; // long
  public $line; // long
  public $billedDate; // dateTime
  public $itemDisp; // string
  public $desc; // string
  public $departmentDisp; // string
  public $classDisp; // string
  public $locationDisp; // string
  public $unitDisp; // string
  public $options; // CustomFieldList
  public $count; // string
  public $serialNumbers; // string
  public $cost; // double
  public $amount; // double
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $grossAmt; // double
  public $tax1Amt; // double
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
}

class InvoiceItemCostList {
  public $itemCost; // InvoiceItemCost
  public $replaceAll; // boolean
}

class InvoiceExpCost {
  public $apply; // boolean
  public $doc; // long
  public $line; // long
  public $billedDate; // dateTime
  public $employeeDisp; // string
  public $categoryDisp; // string
  public $memo; // string
  public $departmentDisp; // string
  public $classDisp; // string
  public $locationDisp; // string
  public $originalAmount; // double
  public $amount; // double
  public $taxableDisp; // string
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $grossAmt; // double
  public $tax1Amt; // double
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
}

class InvoiceExpCostList {
  public $expCost; // InvoiceExpCost
  public $replaceAll; // boolean
}

class InvoiceTime {
  public $apply; // boolean
  public $doc; // long
  public $billedDate; // dateTime
  public $employeeDisp; // string
  public $itemDisp; // string
  public $departmentDisp; // string
  public $classDisp; // string
  public $locationDisp; // string
  public $quantity; // string
  public $rate; // double
  public $amount; // double
  public $desc; // string
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $grossAmt; // double
  public $tax1Amt; // double
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
}

class InvoiceTimeList {
  public $time; // InvoiceTime
  public $replaceAll; // boolean
}

class CashSale {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $customForm; // RecordRef
  public $entity; // RecordRef
  public $tranDate; // dateTime
  public $tranId; // string
  public $postingPeriod; // RecordRef
  public $createdFrom; // RecordRef
  public $opportunity; // RecordRef
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $salesRep; // RecordRef
  public $partner; // RecordRef
  public $leadSource; // RecordRef
  public $startDate; // dateTime
  public $endDate; // dateTime
  public $otherRefNum; // string
  public $memo; // string
  public $revRecSchedule; // RecordRef
  public $undepFunds; // boolean
  public $account; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $exchangeRate; // double
  public $currencyName; // string
  public $promoCode; // RecordRef
  public $discountItem; // RecordRef
  public $discountRate; // string
  public $isTaxable; // boolean
  public $taxItem; // RecordRef
  public $taxRate; // double
  public $toBePrinted; // boolean
  public $toBeEmailed; // boolean
  public $toBeFaxed; // boolean
  public $fax; // string
  public $messageSel; // RecordRef
  public $message; // string
  public $billAddressList; // RecordRef
  public $billAddress; // string
  public $shipAddressList; // RecordRef
  public $shipAddress; // string
  public $fob; // string
  public $shipDate; // dateTime
  public $shipMethod; // RecordRef
  public $shippingCost; // double
  public $shippingTax1Rate; // double
  public $shippingTaxCode; // RecordRef
  public $handlingTaxCode; // RecordRef
  public $handlingTax1Rate; // double
  public $handlingCost; // double
  public $trackingNumbers; // string
  public $salesGroup; // RecordRef
  public $syncSalesTeams; // boolean
  public $paymentMethod; // RecordRef
  public $payPalStatus; // string
  public $creditCard; // RecordRef
  public $ccNumber; // string
  public $ccExpireDate; // dateTime
  public $ccName; // string
  public $ccStreet; // string
  public $ccZipCode; // string
  public $creditCardProcessor; // RecordRef
  public $ccApproved; // boolean
  public $authCode; // string
  public $ccAvsStreetMatch; // AvsMatchCode
  public $ccAvsZipMatch; // AvsMatchCode
  public $payPalTranId; // string
  public $subTotal; // double
  public $discountTotal; // double
  public $taxTotal; // double
  public $altShippingCost; // double
  public $altHandlingCost; // double
  public $total; // double
  public $ccSecurityCode; // string
  public $ccSecurityCodeMatch; // AvsMatchCode
  public $chargeIt; // boolean
  public $debitCardIssueNo; // string
  public $pnRefNum; // string
  public $status; // string
  public $billingSchedule; // RecordRef
  public $email; // string
  public $tax2Total; // double
  public $validFrom; // dateTime
  public $vatRegNum; // string
  public $salesTeamList; // CashSaleSalesTeamList
  public $itemList; // CashSaleItemList
  public $itemCostList; // CashSaleItemCostList
  public $expCostList; // CashSaleExpCostList
  public $timeList; // CashSaleTimeList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class CashSaleSalesTeam {
  public $employee; // RecordRef
  public $salesRole; // RecordRef
  public $isPrimary; // boolean
  public $contribution; // double
}

class CashSaleSalesTeamList {
  public $salesTeam; // CashSaleSalesTeam
  public $replaceAll; // boolean
}

class CashSaleItem {
  public $item; // RecordRef
  public $line; // long
  public $quantityAvailable; // double
  public $quantityOnHand; // double
  public $quantity; // double
  public $units; // RecordRef
  public $serialNumbers; // string
  public $binNumbers; // string
  public $description; // string
  public $price; // RecordRef
  public $rate; // string
  public $amount; // double
  public $orderLine; // long
  public $licenseCode; // string
  public $isTaxable; // boolean
  public $options; // CustomFieldList
  public $deferRevRec; // boolean
  public $currentPercent; // double
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $grossAmt; // double
  public $tax1Amt; // double
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
  public $customFieldList; // CustomFieldList
}

class CashSaleItemList {
  public $item; // CashSaleItem
  public $replaceAll; // boolean
}

class CashSaleItemCost {
  public $apply; // boolean
  public $doc; // long
  public $line; // long
  public $billedDate; // dateTime
  public $itemDisp; // string
  public $desc; // string
  public $departmentDisp; // string
  public $classDisp; // string
  public $locationDisp; // string
  public $unitDisp; // string
  public $options; // CustomFieldList
  public $count; // string
  public $serialNumbers; // string
  public $cost; // double
  public $amount; // double
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $grossAmt; // double
  public $tax1Amt; // double
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
}

class CashSaleItemCostList {
  public $itemCost; // CashSaleItemCost
  public $replaceAll; // boolean
}

class CashSaleExpCost {
  public $apply; // boolean
  public $doc; // long
  public $line; // long
  public $billedDate; // dateTime
  public $employeeDisp; // string
  public $categoryDisp; // string
  public $memo; // string
  public $departmentDisp; // string
  public $classDisp; // string
  public $locationDisp; // string
  public $originalAmount; // double
  public $amount; // double
  public $taxableDisp; // string
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $grossAmt; // double
  public $tax1Amt; // double
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
}

class CashSaleExpCostList {
  public $expCost; // CashSaleExpCost
  public $replaceAll; // boolean
}

class CashSaleTime {
  public $apply; // boolean
  public $doc; // long
  public $billedDate; // dateTime
  public $employeeDisp; // string
  public $itemDisp; // string
  public $departmentDisp; // string
  public $classDisp; // string
  public $locationDisp; // string
  public $quantity; // string
  public $rate; // double
  public $amount; // double
  public $desc; // string
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $grossAmt; // double
  public $tax1Amt; // double
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
}

class CashSaleTimeList {
  public $time; // CashSaleTime
  public $replaceAll; // boolean
}

class Estimate {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $entity; // RecordRef
  public $job; // RecordRef
  public $tranDate; // dateTime
  public $tranId; // string
  public $customForm; // RecordRef
  public $entityStatus; // RecordRef
  public $probability; // double
  public $forecastType; // RecordRef
  public $opportunity; // RecordRef
  public $department; // RecordRef
  public $class; // RecordRef
  public $terms; // RecordRef
  public $dueDate; // dateTime
  public $location; // RecordRef
  public $status; // string
  public $salesRep; // RecordRef
  public $partner; // RecordRef
  public $leadSource; // RecordRef
  public $expectedCloseDate; // dateTime
  public $otherRefNum; // string
  public $memo; // string
  public $endDate; // dateTime
  public $startDate; // dateTime
  public $createdFrom; // RecordRef
  public $exchangeRate; // double
  public $currencyName; // string
  public $promoCode; // RecordRef
  public $discountItem; // RecordRef
  public $discountRate; // string
  public $isTaxable; // boolean
  public $taxItem; // RecordRef
  public $taxRate; // double
  public $vatRegNum; // string
  public $toBePrinted; // boolean
  public $toBeEmailed; // boolean
  public $email; // string
  public $toBeFaxed; // boolean
  public $fax; // string
  public $messageSel; // RecordRef
  public $message; // string
  public $billAddressList; // RecordRef
  public $billAddress; // string
  public $shipAddressList; // RecordRef
  public $shipAddress; // string
  public $fob; // string
  public $shipDate; // dateTime
  public $shipMethod; // RecordRef
  public $shippingCost; // double
  public $shippingTax1Rate; // double
  public $shippingTaxCode; // RecordRef
  public $handlingTaxCode; // RecordRef
  public $handlingTax1Rate; // double
  public $handlingCost; // double
  public $trackingNumbers; // string
  public $salesGroup; // RecordRef
  public $syncSalesTeams; // boolean
  public $altSalesTotal; // double
  public $subTotal; // double
  public $discountTotal; // double
  public $taxTotal; // double
  public $altShippingCost; // double
  public $altHandlingCost; // double
  public $total; // double
  public $itemList; // EstimateItemList
  public $salesTeamList; // EstimateSalesTeamList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class EstimateItem {
  public $item; // RecordRef
  public $line; // long
  public $quantityAvailable; // double
  public $quantityOnHand; // double
  public $quantity; // double
  public $units; // RecordRef
  public $description; // string
  public $serialNumbers; // string
  public $price; // RecordRef
  public $rate; // string
  public $amount; // double
  public $options; // CustomFieldList
  public $revRecTermInMonths; // long
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $isTaxable; // boolean
  public $altSalesAmt; // double
  public $grossAmt; // double
  public $tax1Amt; // double
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
  public $customFieldList; // CustomFieldList
}

class EstimateItemList {
  public $item; // EstimateItem
  public $replaceAll; // boolean
}

class EstimateSalesTeam {
  public $employee; // RecordRef
  public $salesRole; // RecordRef
  public $isPrimary; // boolean
  public $contribution; // double
}

class EstimateSalesTeamList {
  public $salesTeam; // EstimateSalesTeam
  public $replaceAll; // boolean
}

class VendorBill {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $customForm; // RecordRef
  public $entity; // RecordRef
  public $vatRegNum; // string
  public $postingPeriod; // RecordRef
  public $tranDate; // dateTime
  public $currencyName; // string
  public $exchangeRate; // double
  public $terms; // RecordRef
  public $dueDate; // dateTime
  public $discountDate; // dateTime
  public $tranId; // string
  public $userTotal; // double
  public $discountAmount; // double
  public $memo; // string
  public $creditLimit; // double
  public $class; // RecordRef
  public $department; // RecordRef
  public $location; // RecordRef
  public $status; // string
  public $expenseList; // VendorBillExpenseList
  public $itemList; // VendorBillItemList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class VendorBillExpense {
  public $orderLine; // long
  public $line; // long
  public $category; // RecordRef
  public $account; // RecordRef
  public $amount; // double
  public $memo; // string
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $customer; // RecordRef
  public $isBillable; // boolean
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
  public $amortizationSched; // RecordRef
  public $amortizStartDate; // dateTime
  public $amortizationEndDate; // dateTime
  public $amortizationResidual; // string
  public $customFieldList; // CustomFieldList
}

class VendorBillExpenseList {
  public $expense; // VendorBillExpense
  public $replaceAll; // boolean
}

class VendorBillItem {
  public $item; // RecordRef
  public $line; // long
  public $orderLine; // long
  public $quantity; // double
  public $units; // RecordRef
  public $description; // string
  public $serialNumbers; // string
  public $binNumbers; // string
  public $expirationDate; // dateTime
  public $rate; // string
  public $amount; // double
  public $options; // CustomFieldList
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $customer; // RecordRef
  public $landedCostCategory; // RecordRef
  public $isBillable; // boolean
  public $amortizationSched; // RecordRef
  public $amortizStartDate; // dateTime
  public $amortizationEndDate; // dateTime
  public $amortizationResidual; // string
  public $customFieldList; // CustomFieldList
}

class VendorBillItemList {
  public $item; // VendorBillItem
  public $replaceAll; // boolean
}

class PurchaseOrder {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $customForm; // RecordRef
  public $entity; // RecordRef
  public $employee; // RecordRef
  public $supervisorApproval; // boolean
  public $tranDate; // dateTime
  public $tranId; // string
  public $createdFrom; // RecordRef
  public $terms; // RecordRef
  public $dueDate; // dateTime
  public $otherRefNum; // string
  public $memo; // string
  public $exchangeRate; // double
  public $currencyName; // string
  public $toBePrinted; // boolean
  public $toBeEmailed; // boolean
  public $email; // string
  public $toBeFaxed; // boolean
  public $fax; // string
  public $message; // string
  public $billAddressList; // RecordRef
  public $billAddress; // string
  public $shipTo; // RecordRef
  public $shipAddressList; // RecordRef
  public $shipAddress; // string
  public $fob; // string
  public $shipDate; // dateTime
  public $shipMethod; // RecordRef
  public $trackingNumbers; // string
  public $total; // double
  public $class; // RecordRef
  public $department; // RecordRef
  public $location; // RecordRef
  public $status; // string
  public $itemList; // PurchaseOrderItemList
  public $expenseList; // PurchaseOrderExpenseList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class PurchaseOrderExpense {
  public $line; // long
  public $category; // RecordRef
  public $account; // RecordRef
  public $amount; // double
  public $memo; // string
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $customer; // RecordRef
  public $isBillable; // boolean
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
  public $customFieldList; // CustomFieldList
}

class PurchaseOrderExpenseList {
  public $expense; // PurchaseOrderExpense
  public $replaceAll; // boolean
}

class PurchaseOrderItem {
  public $item; // RecordRef
  public $line; // long
  public $vendorName; // string
  public $quantityReceived; // double
  public $quantityBilled; // double
  public $quantityAvailable; // double
  public $quantityOnHand; // double
  public $quantity; // double
  public $units; // RecordRef
  public $serialNumbers; // string
  public $description; // string
  public $rate; // string
  public $amount; // double
  public $options; // CustomFieldList
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $landedCostCategory; // RecordRef
  public $customer; // RecordRef
  public $isBillable; // boolean
  public $isClosed; // boolean
  public $customFieldList; // CustomFieldList
}

class PurchaseOrderItemList {
  public $item; // PurchaseOrderItem
  public $replaceAll; // boolean
}

class ReturnAuthorizationOrderStatus {
}

class CashRefund {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $customForm; // RecordRef
  public $entity; // RecordRef
  public $vatRegNum; // string
  public $tranDate; // dateTime
  public $tranId; // string
  public $createdFrom; // RecordRef
  public $postingPeriod; // RecordRef
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $salesRep; // RecordRef
  public $partner; // RecordRef
  public $otherRefNum; // string
  public $memo; // string
  public $refundCheck; // boolean
  public $toPrint2; // boolean
  public $account; // RecordRef
  public $exchangeRate; // double
  public $currencyName; // string
  public $promoCode; // RecordRef
  public $discountItem; // RecordRef
  public $discountRate; // string
  public $isTaxable; // boolean
  public $taxItem; // RecordRef
  public $taxRate; // double
  public $toBePrinted; // boolean
  public $toBeEmailed; // boolean
  public $email; // string
  public $toBeFaxed; // boolean
  public $fax; // string
  public $messageSel; // RecordRef
  public $message; // string
  public $billAddressList; // RecordRef
  public $billAddress; // string
  public $shipMethod; // RecordRef
  public $shippingTaxCode; // RecordRef
  public $shippingTax1Rate; // double
  public $shippingCost; // double
  public $handlingTaxCode; // RecordRef
  public $handlingTax1Rate; // double
  public $handlingCost; // double
  public $salesGroup; // RecordRef
  public $syncSalesTeams; // boolean
  public $paymentMethod; // RecordRef
  public $creditCard; // RecordRef
  public $chargeIt; // boolean
  public $ccNumber; // string
  public $ccExpireDate; // dateTime
  public $ccName; // string
  public $ccStreet; // string
  public $ccZipCode; // string
  public $ccApproved; // boolean
  public $creditCardProcessor; // RecordRef
  public $debitCardIssueNo; // string
  public $pnRefNum; // string
  public $validFrom; // dateTime
  public $subTotal; // double
  public $discountTotal; // double
  public $taxTotal; // double
  public $tax2Total; // double
  public $altShippingCost; // double
  public $altHandlingCost; // double
  public $total; // double
  public $status; // string
  public $itemList; // CashRefundItemList
  public $salesTeamList; // CashRefundSalesTeamList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class CashRefundItem {
  public $item; // RecordRef
  public $line; // long
  public $orderLine; // long
  public $quantity; // double
  public $units; // RecordRef
  public $binNumbers; // string
  public $serialNumbers; // string
  public $description; // string
  public $price; // RecordRef
  public $rate; // string
  public $amount; // double
  public $taxCode; // RecordRef
  public $taxRate1; // string
  public $taxRate2; // string
  public $tax1Amt; // double
  public $grossAmt; // double
  public $isTaxable; // boolean
  public $options; // CustomFieldList
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $customFieldList; // CustomFieldList
}

class CashRefundItemList {
  public $item; // CashRefundItem
  public $replaceAll; // boolean
}

class CashRefundSalesTeam {
  public $employee; // RecordRef
  public $salesRole; // RecordRef
  public $isPrimary; // boolean
  public $contribution; // double
}

class CashRefundSalesTeamList {
  public $salesTeam; // CashRefundSalesTeam
  public $replaceAll; // boolean
}

class CustomerPayment {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $arAcct; // RecordRef
  public $customer; // RecordRef
  public $balance; // double
  public $pending; // double
  public $payment; // double
  public $autoApply; // boolean
  public $tranDate; // dateTime
  public $postingPeriod; // RecordRef
  public $paymentMethod; // RecordRef
  public $memo; // string
  public $checkNum; // string
  public $currencyName; // string
  public $exchangeRate; // double
  public $creditCard; // RecordRef
  public $chargeIt; // boolean
  public $ccNumber; // string
  public $ccExpireDate; // dateTime
  public $ccName; // string
  public $ccStreet; // string
  public $ccZipCode; // string
  public $ccApproved; // boolean
  public $authCode; // string
  public $ccAvsStreetMatch; // AvsMatchCode
  public $ccAvsZipMatch; // AvsMatchCode
  public $ccSecurityCode; // string
  public $ccSecurityCodeMatch; // AvsMatchCode
  public $pnRefNum; // string
  public $creditCardProcessor; // RecordRef
  public $debitCardIssueNo; // string
  public $validFrom; // dateTime
  public $undepFunds; // boolean
  public $account; // RecordRef
  public $total; // double
  public $applied; // double
  public $unApplied; // double
  public $class; // RecordRef
  public $department; // RecordRef
  public $location; // RecordRef
  public $status; // string
  public $applyList; // CustomerPaymentApplyList
  public $creditList; // CustomerPaymentCreditList
  public $depositList; // CustomerPaymentDepositList
  public $internalId; // string
  public $externalId; // string
}

class CustomerPaymentApply {
  public $apply; // boolean
  public $doc; // long
  public $date; // dateTime
  public $job; // string
  public $type; // string
  public $refNum; // string
  public $total; // double
  public $due; // double
  public $currency; // string
  public $discDate; // dateTime
  public $discAmt; // double
  public $disc; // double
  public $amount; // double
}

class CustomerPaymentApplyList {
  public $apply; // CustomerPaymentApply
  public $replaceAll; // boolean
}

class CustomerPaymentCredit {
  public $apply; // boolean
  public $doc; // long
  public $date; // dateTime
  public $type; // string
  public $refNum; // string
  public $total; // double
  public $due; // double
  public $currency; // string
  public $amount; // double
}

class CustomerPaymentCreditList {
  public $credit; // CustomerPaymentCredit
  public $replaceAll; // boolean
}

class CustomerPaymentDeposit {
  public $apply; // boolean
  public $doc; // long
  public $date; // dateTime
  public $refNum; // string
  public $total; // double
  public $remaining; // double
  public $currency; // string
  public $amount; // double
}

class CustomerPaymentDepositList {
  public $deposit; // CustomerPaymentDeposit
  public $replaceAll; // boolean
}

class ReturnAuthorization {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $customForm; // RecordRef
  public $entity; // RecordRef
  public $tranDate; // dateTime
  public $tranId; // string
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $partner; // RecordRef
  public $otherRefNum; // string
  public $memo; // string
  public $createdFrom; // RecordRef
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $excludeCommission; // boolean
  public $exchangeRate; // double
  public $currencyName; // string
  public $discountItem; // RecordRef
  public $discountRate; // string
  public $taxItem; // RecordRef
  public $taxRate; // double
  public $toBePrinted; // boolean
  public $toBeEmailed; // boolean
  public $toBeFaxed; // boolean
  public $messageSel; // RecordRef
  public $message; // string
  public $billAddressList; // RecordRef
  public $billAddress; // string
  public $shipAddressList; // RecordRef
  public $shipAddress; // string
  public $salesGroup; // RecordRef
  public $syncSalesTeams; // boolean
  public $paymentMethod; // RecordRef
  public $creditCard; // RecordRef
  public $ccNumber; // string
  public $ccExpireDate; // dateTime
  public $ccName; // string
  public $ccStreet; // string
  public $ccZipCode; // string
  public $ccApproved; // boolean
  public $pnRefNum; // string
  public $subTotal; // double
  public $discountTotal; // double
  public $total; // double
  public $itemList; // ReturnAuthorizationItemList
  public $salesTeamList; // ReturnAuthorizationSalesTeamList
  public $creditCardProcessor; // RecordRef
  public $customFieldList; // CustomFieldList
  public $email; // string
  public $fax; // string
  public $debitCardIssueNo; // string
  public $isTaxable; // boolean
  public $promoCode; // RecordRef
  public $status; // string
  public $taxTotal; // double
  public $tax2Total; // double
  public $validFrom; // dateTime
  public $orderStatus; // ReturnAuthorizationOrderStatus
  public $salesRep; // RecordRef
  public $internalId; // string
  public $externalId; // string
}

class ReturnAuthorizationItem {
  public $item; // RecordRef
  public $orderLine; // long
  public $line; // long
  public $quantity; // double
  public $units; // RecordRef
  public $description; // string
  public $serialNumbers; // string
  public $price; // RecordRef
  public $rate; // string
  public $amount; // double
  public $options; // CustomFieldList
  public $revRecTermInMonths; // long
  public $deferRevRec; // boolean
  public $isClosed; // boolean
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecEndDate; // dateTime
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
  public $tax1Amt; // double
  public $grossAmt; // double
  public $isTaxable; // boolean
  public $customFieldList; // CustomFieldList
}

class ReturnAuthorizationItemList {
  public $item; // ReturnAuthorizationItem
  public $replaceAll; // boolean
}

class ReturnAuthorizationSalesTeam {
  public $employee; // RecordRef
  public $salesRole; // RecordRef
  public $isPrimary; // boolean
  public $contribution; // double
}

class ReturnAuthorizationSalesTeamList {
  public $salesTeam; // ReturnAuthorizationSalesTeam
  public $replaceAll; // boolean
}

class CreditMemo {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $customForm; // RecordRef
  public $entity; // RecordRef
  public $tranDate; // dateTime
  public $tranId; // string
  public $createdFrom; // RecordRef
  public $postingPeriod; // RecordRef
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $salesRep; // RecordRef
  public $partner; // RecordRef
  public $otherRefNum; // string
  public $memo; // string
  public $balance; // double
  public $account; // RecordRef
  public $exchangeRate; // double
  public $currencyName; // string
  public $promoCode; // RecordRef
  public $discountItem; // RecordRef
  public $discountRate; // string
  public $isTaxable; // boolean
  public $taxItem; // RecordRef
  public $taxRate; // double
  public $unApplied; // double
  public $autoApply; // boolean
  public $applied; // double
  public $toBePrinted; // boolean
  public $toBeEmailed; // boolean
  public $email; // string
  public $toBeFaxed; // boolean
  public $fax; // string
  public $messageSel; // RecordRef
  public $message; // string
  public $billAddressList; // RecordRef
  public $billAddress; // string
  public $shipMethod; // RecordRef
  public $shippingCost; // double
  public $shippingTax1Rate; // double
  public $shippingTaxCode; // RecordRef
  public $handlingTaxCode; // RecordRef
  public $handlingTax1Rate; // double
  public $handlingCost; // double
  public $subTotal; // double
  public $discountTotal; // double
  public $taxTotal; // double
  public $tax2Total; // double
  public $altShippingCost; // double
  public $altHandlingCost; // double
  public $total; // double
  public $itemList; // CreditMemoItemList
  public $applyList; // CreditMemoApplyList
  public $customFieldList; // CustomFieldList
  public $salesGroup; // RecordRef
  public $syncSalesTeams; // boolean
  public $salesTeamList; // CreditMemoSalesTeamList
  public $status; // string
  public $internalId; // string
  public $externalId; // string
}

class CreditMemoSalesTeam {
  public $employee; // RecordRef
  public $salesRole; // RecordRef
  public $isPrimary; // boolean
  public $contribution; // double
}

class CreditMemoSalesTeamList {
  public $salesTeam; // CreditMemoSalesTeam
  public $replaceAll; // boolean
}

class CreditMemoItem {
  public $item; // RecordRef
  public $orderLine; // long
  public $line; // long
  public $quantity; // double
  public $description; // string
  public $price; // RecordRef
  public $rate; // string
  public $amount; // double
  public $isTaxable; // boolean
  public $options; // CustomFieldList
  public $customFieldList; // CustomFieldList
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
  public $tax1Amt; // double
  public $grossAmt; // double
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $revRecSchedule; // RecordRef
  public $revRecStartDate; // dateTime
  public $revRecTermInMonths; // long
  public $revRecEndDate; // dateTime
  public $units; // RecordRef
  public $serialNumbers; // RecordRef
  public $deferRevRec; // boolean
}

class CreditMemoItemList {
  public $item; // CreditMemoItem
  public $replaceAll; // boolean
}

class CreditMemoApply {
  public $apply; // boolean
  public $doc; // long
  public $date; // dateTime
  public $job; // string
  public $type; // string
  public $refNum; // string
  public $total; // double
  public $due; // double
  public $currency; // string
  public $amount; // double
  public $line; // long
}

class CreditMemoApplyList {
  public $apply; // CreditMemoApply
  public $replaceAll; // boolean
}

class CustomerRefund {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $status; // string
  public $customer; // RecordRef
  public $balance; // double
  public $arAcct; // RecordRef
  public $currencyName; // string
  public $exchangeRate; // double
  public $address; // string
  public $total; // double
  public $tranDate; // dateTime
  public $postingPeriod; // RecordRef
  public $memo; // string
  public $paymentMethod; // RecordRef
  public $account; // RecordRef
  public $toBePrinted; // boolean
  public $tranId; // string
  public $debitCardIssueNo; // string
  public $creditCardProcessor; // RecordRef
  public $chargeIt; // boolean
  public $pnRefNum; // string
  public $validFrom; // dateTime
  public $creditCard; // RecordRef
  public $ccNumber; // string
  public $ccExpireDate; // dateTime
  public $ccName; // string
  public $ccStreet; // string
  public $ccZipCode; // string
  public $ccApproved; // boolean
  public $applyList; // CustomerRefundApplyList
  public $internalId; // string
  public $externalId; // string
}

class CustomerRefundApply {
  public $apply; // boolean
  public $doc; // long
  public $date; // dateTime
  public $type; // string
  public $refNum; // string
  public $total; // double
  public $due; // double
  public $currency; // string
  public $amount; // double
}

class CustomerRefundApplyList {
  public $apply; // CustomerRefundApply
  public $replaceAll; // boolean
}

class Check {
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $customForm; // RecordRef
  public $account; // RecordRef
  public $entity; // RecordRef
  public $address; // string
  public $postingPeriod; // RecordRef
  public $tranDate; // dateTime
  public $currency; // RecordRef
  public $exchangeRate; // double
  public $toBePrinted; // boolean
  public $tranId; // string
  public $memo; // string
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $userTotal; // double
  public $expenseList; // CheckExpenseList
  public $itemList; // CheckItemList
  public $customFieldList; // CustomFieldList
  public $billPay; // boolean
  public $internalId; // string
  public $externalId; // string
}

class CheckExpense {
  public $line; // long
  public $category; // RecordRef
  public $account; // RecordRef
  public $amount; // double
  public $memo; // string
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $customer; // RecordRef
  public $isBillable; // boolean
  public $taxCode; // RecordRef
  public $taxRate1; // double
  public $taxRate2; // double
  public $customFieldList; // CustomFieldList
}

class CheckExpenseList {
  public $expense; // CheckExpense
  public $replaceAll; // boolean
}

class CheckItem {
  public $item; // RecordRef
  public $line; // long
  public $quantity; // double
  public $units; // RecordRef
  public $description; // string
  public $binNumbers; // string
  public $serialNumbers; // string
  public $expirationDate; // dateTime
  public $rate; // string
  public $amount; // double
  public $options; // CustomFieldList
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $customer; // RecordRef
  public $isBillable; // boolean
  public $customFieldList; // CustomFieldList
}

class CheckItemList {
  public $item; // CheckItem
  public $replaceAll; // boolean
}

class InventoryAdjustment {
  public $postingPeriod; // RecordRef
  public $tranDate; // dateTime
  public $tranId; // string
  public $account; // RecordRef
  public $estimatedTotalValue; // double
  public $customer; // RecordRef
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $memo; // string
  public $inventoryList; // InventoryAdjustmentInventoryList
  public $internalId; // string
  public $externalId; // string
}

class InventoryAdjustmentInventory {
  public $item; // RecordRef
  public $description; // string
  public $location; // RecordRef
  public $units; // RecordRef
  public $qtyOnHand; // double
  public $currentValue; // double
  public $adjustQtyBy; // double
  public $binNumbers; // string
  public $serialNumbers; // string
  public $newQty; // double
  public $unitCost; // double
  public $memo; // string
  public $expirationDate; // dateTime
}

class InventoryAdjustmentInventoryList {
  public $inventory; // InventoryAdjustmentInventory
  public $replaceAll; // boolean
}

class JournalEntry {
  public $postingPeriod; // RecordRef
  public $tranDate; // dateTime
  public $currency; // RecordRef
  public $exchangeRate; // double
  public $tranId; // string
  public $reversalDate; // dateTime
  public $reversalDefer; // boolean
  public $reversalEntry; // string
  public $createdFrom; // RecordRef
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $approved; // boolean
  public $lineList; // JournalEntryLineList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class JournalEntryLine {
  public $account; // RecordRef
  public $debit; // double
  public $credit; // double
  public $memo; // string
  public $entity; // RecordRef
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $amortizationSched; // RecordRef
  public $amortizStartDate; // dateTime
  public $amortizationEndDate; // dateTime
  public $amortizationResidual; // string
  public $customFieldList; // CustomFieldList
}

class JournalEntryLineList {
  public $line; // JournalEntryLine
  public $replaceAll; // boolean
}

class CustomizationFieldType {
}

class CustomizationDynamicDefault {
}

class CustomizationDisplayType {
}

class CustomizationFilterCompareType {
}

class CustomRecordTypePermissionsPermittedLevel {
}

class CustomRecordTypePermissionsRestriction {
}

class ItemCustomFieldItemSubType {
}

class CustomRecord {
  public $customForm; // RecordRef
  public $isInactive; // boolean
  public $created; // dateTime
  public $lastModified; // dateTime
  public $name; // string
  public $owner; // RecordRef
  public $recType; // RecordRef
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class CustomRecordSearch {
  public $basic; // CustomRecordSearchBasic
  public $messagesJoin; // MessageSearchBasic
  public $userNotesJoin; // NoteSearchBasic
}

class CustomList {
  public $name; // string
  public $isOrdered; // boolean
  public $isMatrixOption; // boolean
  public $convertToCustomRecord; // boolean
  public $isInactive; // boolean
  public $customValueList; // CustomListCustomValueList
  public $internalId; // string
}

class CustomListCustomValue {
  public $value; // string
  public $abbreviation; // string
  public $isInactive; // boolean
  public $valueId; // RecordRef
}

class CustomListCustomValueList {
  public $customValue; // CustomListCustomValue
  public $replaceAll; // boolean
}

class CustomRecordType {
  public $recordName; // string
  public $includeName; // boolean
  public $showId; // boolean
  public $showCreationDate; // boolean
  public $showCreationDateOnList; // boolean
  public $showLastModified; // boolean
  public $showLastModifiedOnList; // boolean
  public $showOwner; // boolean
  public $showOwnerOnList; // boolean
  public $showOwnerAllowChange; // boolean
  public $usePermissions; // boolean
  public $allowAttachments; // boolean
  public $showNotes; // boolean
  public $enableMailMerge; // boolean
  public $isOrdered; // boolean
  public $allowInlineEditing; // boolean
  public $isAvailableOffline; // boolean
  public $allowQuickSearch; // boolean
  public $isInactive; // boolean
  public $disclaimer; // string
  public $enableNumbering; // boolean
  public $numberingPrefix; // string
  public $numberingSuffix; // string
  public $numberingMinDigits; // long
  public $numberingInit; // long
  public $numberingCurrentNumber; // long
  public $allowNumberingOverride; // boolean
  public $isNumberingUpdateable; // boolean
  public $fieldList; // CustomRecordTypeFieldList
  public $tabsList; // CustomRecordTypeTabsList
  public $formsList; // CustomRecordTypeFormsList
  public $onlineFormsList; // CustomRecordTypeOnlineFormsList
  public $permissionsList; // CustomRecordTypePermissionsList
  public $linksList; // CustomRecordTypeLinksList
  public $managersList; // CustomRecordTypeManagersList
  public $childrenList; // CustomRecordTypeChildrenList
  public $parentsList; // CustomRecordTypeParentsList
  public $internalId; // string
}

class CustomRecordTypeFieldList {
  public $customField; // CustomRecordCustomField
  public $replaceAll; // boolean
}

class CustomRecordTypeTabs {
  public $tabTitle; // string
  public $tabParent; // RecordRef
}

class CustomRecordTypeTabsList {
  public $tabs; // CustomRecordTypeTabs
  public $replaceAll; // boolean
}

class CustomRecordTypeForms {
  public $formEdit; // string
  public $formName; // string
  public $formPref; // boolean
}

class CustomRecordTypeFormsList {
  public $forms; // CustomRecordTypeForms
  public $replaceAll; // boolean
}

class CustomRecordTypeOnlineForms {
  public $onlineFormName; // string
  public $isOnline; // string
  public $templateName; // string
}

class CustomRecordTypeOnlineFormsList {
  public $onlineForms; // CustomRecordTypeOnlineForms
  public $replaceAll; // boolean
}

class CustomRecordTypePermissions {
  public $permittedRole; // RecordRef
  public $permittedLevel; // CustomRecordTypePermissionsPermittedLevel
  public $restriction; // CustomRecordTypePermissionsRestriction
  public $defaultForm; // RecordRef
  public $restrictForm; // boolean
  public $searchForm; // RecordRef
  public $listView; // RecordRef
  public $listViewRestricted; // boolean
  public $dashboardView; // RecordRef
  public $restrictDashboardView; // boolean
  public $sublistView; // RecordRef
  public $restrictSublistView; // boolean
}

class CustomRecordTypePermissionsList {
  public $permissions; // CustomRecordTypePermissions
  public $replaceAll; // boolean
}

class CustomRecordTypeLinks {
  public $linkCenter; // RecordRef
  public $linkSection; // RecordRef
  public $linkLabel; // string
}

class CustomRecordTypeLinksList {
  public $links; // CustomRecordTypeLinks
  public $replaceAll; // boolean
}

class CustomRecordTypeManagers {
  public $managerEmp; // RecordRef
}

class CustomRecordTypeManagersList {
  public $managers; // CustomRecordTypeManagers
  public $replaceAll; // boolean
}

class CustomRecordTypeChildren {
  public $childDescr; // string
  public $childTab; // RecordRef
}

class CustomRecordTypeChildrenList {
  public $children; // CustomRecordTypeChildren
  public $replaceAll; // boolean
}

class CustomRecordTypeParents {
  public $childDescr; // string
}

class CustomRecordTypeParentsList {
  public $parents; // CustomRecordTypeParents
  public $replaceAll; // boolean
}

class EntityCustomField {
  public $label; // string
  public $fieldType; // CustomizationFieldType
  public $selectRecordType; // RecordRef
  public $storeValue; // boolean
  public $showInList; // boolean
  public $isParent; // boolean
  public $insertBefore; // RecordRef
  public $subtab; // RecordRef
  public $displayType; // CustomizationDisplayType
  public $displayWidth; // long
  public $displayHeight; // long
  public $help; // string
  public $parentSubtab; // RecordRef
  public $linkText; // string
  public $isMandatory; // boolean
  public $maxLength; // long
  public $minValue; // double
  public $maxValue; // double
  public $defaultChecked; // boolean
  public $defaultValue; // string
  public $isFormula; // boolean
  public $defaultSelection; // RecordRef
  public $dynamicDefault; // CustomizationDynamicDefault
  public $sourceList; // RecordRef
  public $sourceFrom; // RecordRef
  public $sourceFilterBy; // RecordRef
  public $appliesToCustomer; // boolean
  public $appliesToProject; // boolean
  public $appliesToVendor; // boolean
  public $appliesToEmployee; // boolean
  public $appliesToOtherName; // boolean
  public $appliesToContact; // boolean
  public $appliesToPartner; // boolean
  public $appliesToWebSite; // boolean
  public $appliesToGroup; // boolean
  public $availableExternally; // boolean
  public $filterList; // EntityCustomFieldFilterList
  public $internalId; // string
}

class EntityCustomFieldFilter {
  public $fldFilter; // RecordRef
  public $fldFilterChecked; // boolean
  public $fldFilterCompareType; // CustomizationFilterCompareType
  public $fldFilterVal; // string
  public $fldFilterSelList; // FldFilterSelList
  public $fldFilterNotNull; // boolean
}

class EntityCustomFieldFilterList {
  public $filter; // EntityCustomFieldFilter
  public $replaceAll; // boolean
}

class FldFilterSelList {
  public $fldFilterSel; // RecordRef
}

class CrmCustomField {
  public $label; // string
  public $fieldType; // CustomizationFieldType
  public $selectRecordType; // RecordRef
  public $storeValue; // boolean
  public $showInList; // boolean
  public $isParent; // boolean
  public $insertBefore; // RecordRef
  public $subtab; // RecordRef
  public $displayType; // CustomizationDisplayType
  public $displayWidth; // long
  public $displayHeight; // long
  public $help; // string
  public $parentSubtab; // RecordRef
  public $linkText; // string
  public $isMandatory; // boolean
  public $maxLength; // long
  public $minValue; // double
  public $maxValue; // double
  public $defaultChecked; // boolean
  public $defaultValue; // string
  public $isFormula; // boolean
  public $defaultSelection; // RecordRef
  public $dynamicDefault; // CustomizationDynamicDefault
  public $sourceList; // RecordRef
  public $sourceFrom; // RecordRef
  public $sourceFilterBy; // RecordRef
  public $appliesToTask; // boolean
  public $appliesToPhoneCall; // boolean
  public $appliesToEvent; // boolean
  public $appliesToCase; // boolean
  public $appliesToCampaign; // boolean
  public $appliesPerKeyword; // boolean
  public $appliesToSolution; // boolean
  public $availableExternally; // boolean
  public $filterList; // CrmCustomFieldFilterList
  public $internalId; // string
}

class CrmCustomFieldFilter {
  public $fldFilter; // RecordRef
  public $fldFilterChecked; // boolean
  public $fldFilterCompareType; // CustomizationFilterCompareType
  public $fldFilterVal; // string
  public $fldFilterSelList; // FldFilterSelList
  public $fldFilterNotNull; // boolean
}

class CrmCustomFieldFilterList {
  public $filter; // CrmCustomFieldFilter
  public $replaceAll; // boolean
}

class OtherCustomField {
  public $recType; // RecordRef
  public $label; // string
  public $fieldType; // CustomizationFieldType
  public $selectRecordType; // RecordRef
  public $storeValue; // boolean
  public $showInList; // boolean
  public $insertBefore; // RecordRef
  public $displayType; // CustomizationDisplayType
  public $displayWidth; // long
  public $displayHeight; // long
  public $help; // string
  public $linkText; // string
  public $isMandatory; // boolean
  public $maxLength; // long
  public $minValue; // double
  public $maxValue; // double
  public $defaultChecked; // boolean
  public $defaultValue; // string
  public $isFormula; // boolean
  public $defaultSelection; // RecordRef
  public $dynamicDefault; // CustomizationDynamicDefault
  public $sourceList; // RecordRef
  public $sourceFrom; // RecordRef
  public $sourceFilterBy; // RecordRef
  public $filterList; // OtherCustomFieldFilterList
  public $internalId; // string
}

class OtherCustomFieldFilter {
  public $fldFilter; // RecordRef
  public $fldFilterChecked; // boolean
  public $fldFilterCompareType; // CustomizationFilterCompareType
  public $fldFilterVal; // string
  public $fldFilterSelList; // FldFilterSelList
  public $fldFilterNotNull; // boolean
}

class OtherCustomFieldFilterList {
  public $filter; // OtherCustomFieldFilter
  public $replaceAll; // boolean
}

class ItemCustomField {
  public $label; // string
  public $itemMatrix; // boolean
  public $fieldType; // CustomizationFieldType
  public $selectRecordType; // RecordRef
  public $storeValue; // boolean
  public $showInList; // boolean
  public $isParent; // boolean
  public $insertBefore; // RecordRef
  public $subtab; // RecordRef
  public $displayType; // CustomizationDisplayType
  public $displayWidth; // long
  public $displayHeight; // long
  public $help; // string
  public $parentSubtab; // RecordRef
  public $linkText; // string
  public $isMandatory; // boolean
  public $maxLength; // long
  public $minValue; // double
  public $maxValue; // double
  public $defaultChecked; // boolean
  public $defaultValue; // string
  public $isFormula; // boolean
  public $defaultSelection; // RecordRef
  public $dynamicDefault; // CustomizationDynamicDefault
  public $sourceList; // RecordRef
  public $sourceFrom; // RecordRef
  public $sourceFilterBy; // RecordRef
  public $appliesToInventory; // boolean
  public $appliesToNonInventory; // boolean
  public $appliesToService; // boolean
  public $appliesToOtherCharge; // boolean
  public $appliesToGroup; // boolean
  public $appliesToKit; // boolean
  public $appliesToItemAssembly; // boolean
  public $itemSubType; // ItemCustomFieldItemSubType
  public $filterList; // ItemCustomFieldFilterList
  public $internalId; // string
}

class ItemCustomFieldFilter {
  public $fldFilter; // RecordRef
  public $fldFilterChecked; // boolean
  public $fldFilterCompareType; // CustomizationFilterCompareType
  public $fldFilterVal; // string
  public $fldFilterSelList; // FldFilterSelList
  public $fldFilterNotNull; // boolean
}

class ItemCustomFieldFilterList {
  public $filter; // ItemCustomFieldFilter
  public $replaceAll; // boolean
}

class TransactionBodyCustomField {
  public $label; // string
  public $fieldType; // CustomizationFieldType
  public $selectRecordType; // RecordRef
  public $storeValue; // boolean
  public $showInList; // boolean
  public $isParent; // boolean
  public $insertBefore; // RecordRef
  public $subtab; // RecordRef
  public $displayType; // CustomizationDisplayType
  public $displayWidth; // long
  public $displayHeight; // long
  public $help; // string
  public $parentSubtab; // RecordRef
  public $linkText; // string
  public $isMandatory; // boolean
  public $maxLength; // long
  public $minValue; // double
  public $maxValue; // double
  public $defaultChecked; // boolean
  public $defaultValue; // string
  public $isFormula; // boolean
  public $defaultSelection; // RecordRef
  public $dynamicDefault; // CustomizationDynamicDefault
  public $sourceList; // RecordRef
  public $sourceFrom; // RecordRef
  public $sourceFilterBy; // RecordRef
  public $bodyPurchase; // boolean
  public $bodySale; // boolean
  public $bodyOpportunity; // boolean
  public $bodyJournal; // boolean
  public $bodyExpenseReport; // boolean
  public $bodyStore; // boolean
  public $bodyItemReceipt; // boolean
  public $bodyItemReceiptOrder; // boolean
  public $bodyItemFulfillment; // boolean
  public $bodyItemFulfillmentOrder; // boolean
  public $bodyInventoryAdjustment; // boolean
  public $bodyAssemblyBuild; // boolean
  public $bodyPrintFlag; // boolean
  public $bodyPickingTicket; // boolean
  public $bodyPrintPackingSlip; // boolean
  public $bodyPrintStatement; // boolean
  public $filterList; // TransactionBodyCustomFieldFilterList
  public $internalId; // string
}

class TransactionBodyCustomFieldFilter {
  public $fldFilter; // RecordRef
  public $fldFilterChecked; // boolean
  public $fldFilterCompareType; // CustomizationFilterCompareType
  public $fldFilterVal; // string
  public $fldFilterSelList; // FldFilterSelList
  public $fldFilterNotNull; // boolean
}

class TransactionBodyCustomFieldFilterList {
  public $filter; // TransactionBodyCustomFieldFilter
  public $replaceAll; // boolean
}

class TransactionColumnCustomField {
  public $label; // string
  public $fieldType; // CustomizationFieldType
  public $selectRecordType; // RecordRef
  public $storeValue; // boolean
  public $insertBefore; // RecordRef
  public $displayType; // CustomizationDisplayType
  public $displayWidth; // long
  public $displayHeight; // long
  public $help; // string
  public $isMandatory; // boolean
  public $maxLength; // long
  public $minValue; // double
  public $maxValue; // double
  public $defaultChecked; // boolean
  public $defaultValue; // string
  public $isFormula; // boolean
  public $defaultSelection; // RecordRef
  public $dynamicDefault; // CustomizationDynamicDefault
  public $sourceList; // RecordRef
  public $sourceFrom; // RecordRef
  public $sourceFilterBy; // RecordRef
  public $colExpense; // boolean
  public $colPurchase; // boolean
  public $colSale; // boolean
  public $colOpportunity; // boolean
  public $colStore; // boolean
  public $colStoreHidden; // boolean
  public $colJournal; // boolean
  public $colExpenseReport; // boolean
  public $colTime; // boolean
  public $colTimeGroup; // boolean
  public $colItemReceipt; // boolean
  public $colItemReceiptOrder; // boolean
  public $colItemFulfillment; // boolean
  public $colItemFulfillmentOrder; // boolean
  public $colPrintFlag; // boolean
  public $colPickingTicket; // boolean
  public $colPackingSlip; // boolean
  public $colReturnForm; // boolean
  public $colStoreWithGroups; // boolean
  public $colKitItem; // boolean
  public $filterList; // TransactionColumnCustomFieldFilterList
  public $internalId; // string
}

class TransactionColumnCustomFieldFilter {
  public $fldFilter; // RecordRef
  public $fldFilterChecked; // boolean
  public $fldFilterCompareType; // CustomizationFilterCompareType
  public $fldFilterVal; // string
  public $fldFilterSelList; // FldFilterSelList
  public $fldFilterNotNull; // boolean
}

class TransactionColumnCustomFieldFilterList {
  public $filter; // TransactionColumnCustomFieldFilter
  public $replaceAll; // boolean
}

class ItemOptionCustomField {
  public $label; // string
  public $fieldType; // CustomizationFieldType
  public $selectRecordType; // RecordRef
  public $storeValue; // boolean
  public $insertBefore; // RecordRef
  public $displayType; // CustomizationDisplayType
  public $displayWidth; // long
  public $displayHeight; // long
  public $help; // string
  public $isMandatory; // boolean
  public $maxLength; // long
  public $minValue; // double
  public $maxValue; // double
  public $defaultChecked; // boolean
  public $defaultValue; // string
  public $isFormula; // boolean
  public $defaultSelection; // RecordRef
  public $dynamicDefault; // CustomizationDynamicDefault
  public $sourceList; // RecordRef
  public $sourceFrom; // RecordRef
  public $sourceFilterBy; // RecordRef
  public $colPurchase; // boolean
  public $colSale; // boolean
  public $colOpportunity; // boolean
  public $colStore; // boolean
  public $colStoreHidden; // boolean
  public $colAllItems; // boolean
  public $itemsList; // ItemsList
  public $filterList; // ItemOptionCustomFieldFilterList
  public $internalId; // string
}

class ItemsList {
  public $items; // RecordRef
}

class ItemOptionCustomFieldFilter {
  public $fldFilter; // RecordRef
  public $fldFilterChecked; // boolean
  public $fldFilterCompareType; // CustomizationFilterCompareType
  public $fldFilterVal; // string
  public $fldFilterSelList; // FldFilterSelList
  public $fldFilterNotNull; // boolean
}

class ItemOptionCustomFieldFilterList {
  public $filter; // ItemOptionCustomFieldFilter
  public $replaceAll; // boolean
}

class CustomRecordCustomField {
  public $label; // string
  public $fieldType; // CustomizationFieldType
  public $selectRecordType; // RecordRef
  public $storeValue; // boolean
  public $showInList; // boolean
  public $isParent; // boolean
  public $insertBefore; // RecordRef
  public $subtab; // RecordRef
  public $displayType; // CustomizationDisplayType
  public $displayWidth; // long
  public $displayHeight; // long
  public $help; // string
  public $parentSubtab; // RecordRef
  public $linkText; // string
  public $isMandatory; // boolean
  public $maxLength; // long
  public $minValue; // double
  public $maxValue; // double
  public $defaultChecked; // boolean
  public $defaultValue; // string
  public $isFormula; // boolean
  public $defaultSelection; // RecordRef
  public $dynamicDefault; // CustomizationDynamicDefault
  public $sourceList; // RecordRef
  public $sourceFrom; // RecordRef
  public $sourcefilterby; // RecordRef
  public $recType; // string
  public $filterList; // CustomRecordCustomFieldFilterList
  public $internalId; // string
}

class CustomRecordCustomFieldFilter {
  public $fldFilter; // RecordRef
  public $fldFilterChecked; // boolean
  public $fldFilterCompareType; // CustomizationFilterCompareType
  public $fldFilterVal; // string
  public $fldFilterSelList; // FldFilterSelList
  public $fldFilterNotNull; // boolean
}

class CustomRecordCustomFieldFilterList {
  public $filter; // CustomRecordCustomFieldFilter
  public $replaceAll; // boolean
}

class EmployeePayFrequency {
}

class Employee {
  public $customForm; // RecordRef
  public $entityId; // string
  public $salutation; // string
  public $firstName; // string
  public $middleName; // string
  public $lastName; // string
  public $phone; // string
  public $fax; // string
  public $email; // string
  public $defaultAddress; // string
  public $isInactive; // boolean
  public $initials; // string
  public $officePhone; // string
  public $homePhone; // string
  public $mobilePhone; // string
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $billingClass; // RecordRef
  public $accountNumber; // string
  public $comments; // string
  public $unsubscribe; // boolean
  public $image; // RecordRef
  public $payFrequency; // EmployeePayFrequency
  public $lastPaidDate; // dateTime
  public $useTimeData; // boolean
  public $directDeposit; // boolean
  public $socialSecurityNumber; // string
  public $supervisor; // RecordRef
  public $approver; // RecordRef
  public $approvalLimit; // double
  public $employeeType; // RecordRef
  public $isSalesRep; // boolean
  public $isSupportRep; // boolean
  public $birthDate; // dateTime
  public $hireDate; // dateTime
  public $releaseDate; // dateTime
  public $lastReviewDate; // dateTime
  public $nextReviewDate; // dateTime
  public $title; // string
  public $employeeStatus; // RecordRef
  public $jobDescription; // string
  public $giveAccess; // boolean
  public $sendEmail; // boolean
  public $hasOfflineAccess; // boolean
  public $password; // string
  public $password2; // string
  public $requirePwdChange; // boolean
  public $inheritIPRules; // boolean
  public $IPAddressRule; // string
  public $billPay; // boolean
  public $dateCreated; // dateTime
  public $lastModifiedDate; // dateTime
  public $addressbookList; // EmployeeAddressbookList
  public $rolesList; // EmployeeRolesList
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class EmployeeAddressbook {
  public $defaultShipping; // boolean
  public $defaultBilling; // boolean
  public $label; // string
  public $attention; // string
  public $addressee; // string
  public $phone; // string
  public $addr1; // string
  public $addr2; // string
  public $city; // string
  public $zip; // string
  public $country; // Country
  public $addrText; // string
  public $override; // boolean
  public $internalId; // string
  public $state; // string
}

class EmployeeAddressbookList {
  public $addressbook; // EmployeeAddressbook
  public $replaceAll; // boolean
}

class EmployeeRoles {
  public $selectedRole; // RecordRef
}

class EmployeeRolesList {
  public $roles; // EmployeeRoles
  public $replaceAll; // boolean
}

class EmployeeSearch {
  public $basic; // EmployeeSearchBasic
  public $messagesJoin; // MessageSearchBasic
  public $messagesFromJoin; // MessageSearchBasic
  public $messagesToJoin; // MessageSearchBasic
  public $transactionJoin; // TransactionSearchBasic
  public $userNotesJoin; // NoteSearchBasic
}

class SiteCategoryPresentationItemItemType {
}

class SiteCategoryPresentationItem {
  public $item; // RecordRef
  public $itemType; // SiteCategoryPresentationItemItemType
  public $description; // string
  public $onlinePrice; // double
  public $basePrice; // double
}

class SiteCategoryPresentationItemList {
  public $presentationItem; // SiteCategoryPresentationItem
  public $replaceAll; // boolean
}

class SiteCategorySearch {
  public $basic; // SiteCategorySearchBasic
  public $shopperJoin; // CustomerSearchBasic
}

class TimeBill {
  public $customForm; // RecordRef
  public $employee; // RecordRef
  public $tranDate; // dateTime
  public $customer; // RecordRef
  public $caseTaskEvent; // RecordRef
  public $isBillable; // boolean
  public $payrollItem; // RecordRef
  public $paidExternally; // boolean
  public $item; // RecordRef
  public $department; // RecordRef
  public $class; // RecordRef
  public $location; // RecordRef
  public $hours; // string
  public $price; // RecordRef
  public $rate; // double
  public $overrideRate; // boolean
  public $memo; // string
  public $supervisorApproval; // boolean
  public $createdDate; // dateTime
  public $lastModifiedDate; // dateTime
  public $status; // string
  public $customFieldList; // CustomFieldList
  public $internalId; // string
  public $externalId; // string
}

class TimeBillSearch {
  public $basic; // TimeBillSearchBasic
  public $callJoin; // PhoneCallSearchBasic
  public $caseJoin; // SupportCaseSearchBasic
  public $customerJoin; // CustomerSearchBasic
  public $employeeJoin; // EmployeeSearchBasic
  public $eventJoin; // CalendarEventSearchBasic
  public $itemJoin; // ItemSearchBasic
  public $taskJoin; // TaskSearchBasic
}

class NetSuiteService extends SoapClient {

  private static $classmap = array(
                                    'RecordType' => 'RecordType',
                                    'GetAllRecordType' => 'GetAllRecordType',
                                    'GetCustomizationType' => 'GetCustomizationType',
                                    'InitializeType' => 'InitializeType',
                                    'InitializeRefType' => 'InitializeRefType',
                                    'DeletedRecordType' => 'DeletedRecordType',
                                    'GetSelectValueType' => 'GetSelectValueType',
                                    'AsyncStatusType' => 'AsyncStatusType',
                                    'SearchStringFieldOperator' => 'SearchStringFieldOperator',
                                    'SearchLongFieldOperator' => 'SearchLongFieldOperator',
                                    'SearchTextNumberFieldOperator' => 'SearchTextNumberFieldOperator',
                                    'SearchDoubleFieldOperator' => 'SearchDoubleFieldOperator',
                                    'SearchDateFieldOperator' => 'SearchDateFieldOperator',
                                    'SearchEnumMultiSelectFieldOperator' => 'SearchEnumMultiSelectFieldOperator',
                                    'SearchMultiSelectFieldOperator' => 'SearchMultiSelectFieldOperator',
                                    'SearchTimeFieldOperator' => 'SearchTimeFieldOperator',
                                    'SearchPeriodFieldOperator' => 'SearchPeriodFieldOperator',
                                    'SearchDate' => 'SearchDate',
                                    'StatusDetailType' => 'StatusDetailType',
                                    'StatusDetailCodeType' => 'StatusDetailCodeType',
                                    'FaultCodeType' => 'FaultCodeType',
                                    'Passport' => 'Passport',
                                    'SsoCredentials' => 'SsoCredentials',
                                    'ChangePasswordOrEmailCredentials' => 'ChangePasswordOrEmailCredentials',
                                    'StatusDetail' => 'StatusDetail',
                                    'Status' => 'Status',
                                    'WsRole' => 'WsRole',
                                    'WsRoleList' => 'WsRoleList',
                                    'Record' => 'Record',
                                    'NullField' => 'NullField',
                                    'SearchRecord' => 'SearchRecord',
                                    'SearchResult' => 'SearchResult',
                                    'AsyncStatusResult' => 'AsyncStatusResult',
                                    'GetAllResult' => 'GetAllResult',
                                    'GetCustomizationResult' => 'GetCustomizationResult',
                                    'getSelectValueResult' => 'getSelectValueResult',
                                    'RecordList' => 'RecordList',
                                    'RecordRefList' => 'RecordRefList',
                                    'BaseRef' => 'BaseRef',
                                    'RecordRef' => 'RecordRef',
                                    'CustomRecordRef' => 'CustomRecordRef',
                                    'InitializeRecord' => 'InitializeRecord',
                                    'InitializeRef' => 'InitializeRef',
                                    'GetAllRecord' => 'GetAllRecord',
                                    'CustomizationType' => 'CustomizationType',
                                    'GetSelectValueField' => 'GetSelectValueField',
                                    'ListOrRecordRef' => 'ListOrRecordRef',
                                    'CustomFieldRef' => 'CustomFieldRef',
                                    'LongCustomFieldRef' => 'LongCustomFieldRef',
                                    'DoubleCustomFieldRef' => 'DoubleCustomFieldRef',
                                    'BooleanCustomFieldRef' => 'BooleanCustomFieldRef',
                                    'StringCustomFieldRef' => 'StringCustomFieldRef',
                                    'DateCustomFieldRef' => 'DateCustomFieldRef',
                                    'SelectCustomFieldRef' => 'SelectCustomFieldRef',
                                    'MultiSelectCustomFieldRef' => 'MultiSelectCustomFieldRef',
                                    'CustomFieldList' => 'CustomFieldList',
                                    'SearchBooleanField' => 'SearchBooleanField',
                                    'SearchStringField' => 'SearchStringField',
                                    'SearchLongField' => 'SearchLongField',
                                    'SearchTextNumberField' => 'SearchTextNumberField',
                                    'SearchDoubleField' => 'SearchDoubleField',
                                    'SearchDateField' => 'SearchDateField',
                                    'SearchEnumMultiSelectField' => 'SearchEnumMultiSelectField',
                                    'SearchMultiSelectField' => 'SearchMultiSelectField',
                                    'SearchCustomField' => 'SearchCustomField',
                                    'SearchBooleanCustomField' => 'SearchBooleanCustomField',
                                    'SearchStringCustomField' => 'SearchStringCustomField',
                                    'SearchLongCustomField' => 'SearchLongCustomField',
                                    'SearchDoubleCustomField' => 'SearchDoubleCustomField',
                                    'SearchDateCustomField' => 'SearchDateCustomField',
                                    'SearchEnumMultiSelectCustomField' => 'SearchEnumMultiSelectCustomField',
                                    'SearchMultiSelectCustomField' => 'SearchMultiSelectCustomField',
                                    'SearchCustomFieldList' => 'SearchCustomFieldList',
                                    'ItemAvailabilityFilter' => 'ItemAvailabilityFilter',
                                    'ItemAvailability' => 'ItemAvailability',
                                    'ItemAvailabilityList' => 'ItemAvailabilityList',
                                    'GetItemAvailabilityResult' => 'GetItemAvailabilityResult',
                                    'DeletedRecord' => 'DeletedRecord',
                                    'DeletedRecordList' => 'DeletedRecordList',
                                    'GetDeletedResult' => 'GetDeletedResult',
                                    'GetDeletedFilter' => 'GetDeletedFilter',
                                    'AttachReference' => 'AttachReference',
                                    'AttachContactReference' => 'AttachContactReference',
                                    'AttachBasicReference' => 'AttachBasicReference',
                                    'SoapFault' => 'SoapFault',
                                    'InsufficientPermissionFault' => 'InsufficientPermissionFault',
                                    'InvalidAccountFault' => 'InvalidAccountFault',
                                    'InvalidCredentialsFault' => 'InvalidCredentialsFault',
                                    'InvalidSessionFault' => 'InvalidSessionFault',
                                    'ExceededRequestLimitFault' => 'ExceededRequestLimitFault',
                                    'ExceededUsageLimitFault' => 'ExceededUsageLimitFault',
                                    'ExceededRecordCountFault' => 'ExceededRecordCountFault',
                                    'InvalidVersionFault' => 'InvalidVersionFault',
                                    'AsyncFault' => 'AsyncFault',
                                    'UnexpectedErrorFault' => 'UnexpectedErrorFault',
                                    'SessionInfo' => 'SessionInfo',
                                    'ApplicationInfo' => 'ApplicationInfo',
                                    'PartnerInfo' => 'PartnerInfo',
                                    'DocumentInfo' => 'DocumentInfo',
                                    'Preferences' => 'Preferences',
                                    'SearchPreferences' => 'SearchPreferences',
                                    'SessionResponse' => 'SessionResponse',
                                    'WriteResponse' => 'WriteResponse',
                                    'ReadResponse' => 'ReadResponse',
                                    'WriteResponseList' => 'WriteResponseList',
                                    'ReadResponseList' => 'ReadResponseList',
                                    'LoginResponse' => 'LoginResponse',
                                    'MapSsoResponse' => 'MapSsoResponse',
                                    'ChangePasswordOrEmailResponse' => 'ChangePasswordOrEmailResponse',
                                    'LogoutResponse' => 'LogoutResponse',
                                    'AddResponse' => 'AddResponse',
                                    'AddListResponse' => 'AddListResponse',
                                    'UpdateResponse' => 'UpdateResponse',
                                    'UpdateListResponse' => 'UpdateListResponse',
                                    'DeleteResponse' => 'DeleteResponse',
                                    'DeleteListResponse' => 'DeleteListResponse',
                                    'SearchResponse' => 'SearchResponse',
                                    'SearchMoreResponse' => 'SearchMoreResponse',
                                    'SearchNextResponse' => 'SearchNextResponse',
                                    'GetResponse' => 'GetResponse',
                                    'GetListResponse' => 'GetListResponse',
                                    'GetAllResponse' => 'GetAllResponse',
                                    'GetCustomizationResponse' => 'GetCustomizationResponse',
                                    'InitializeResponse' => 'InitializeResponse',
                                    'getSelectValueResponse' => 'getSelectValueResponse',
                                    'GetItemAvailabilityResponse' => 'GetItemAvailabilityResponse',
                                    'AttachResponse' => 'AttachResponse',
                                    'DetachResponse' => 'DetachResponse',
                                    'AsyncStatusResponse' => 'AsyncStatusResponse',
                                    'GetAsyncResultResponse' => 'GetAsyncResultResponse',
                                    'AsyncResult' => 'AsyncResult',
                                    'AsyncAddListResult' => 'AsyncAddListResult',
                                    'AsyncUpdateListResult' => 'AsyncUpdateListResult',
                                    'AsyncDeleteListResult' => 'AsyncDeleteListResult',
                                    'AsyncGetListResult' => 'AsyncGetListResult',
                                    'AsyncSearchResult' => 'AsyncSearchResult',
                                    'GetDeletedResponse' => 'GetDeletedResponse',
                                    'LoginRequest' => 'LoginRequest',
                                    'MapSsoRequest' => 'MapSsoRequest',
                                    'ChangePasswordOrEmailRequest' => 'ChangePasswordOrEmailRequest',
                                    'LogoutRequest' => 'LogoutRequest',
                                    'AddRequest' => 'AddRequest',
                                    'DeleteRequest' => 'DeleteRequest',
                                    'SearchRequest' => 'SearchRequest',
                                    'SearchMoreRequest' => 'SearchMoreRequest',
                                    'SearchNextRequest' => 'SearchNextRequest',
                                    'UpdateRequest' => 'UpdateRequest',
                                    'AddListRequest' => 'AddListRequest',
                                    'DeleteListRequest' => 'DeleteListRequest',
                                    'UpdateListRequest' => 'UpdateListRequest',
                                    'GetRequest' => 'GetRequest',
                                    'GetListRequest' => 'GetListRequest',
                                    'GetAllRequest' => 'GetAllRequest',
                                    'GetCustomizationRequest' => 'GetCustomizationRequest',
                                    'InitializeRequest' => 'InitializeRequest',
                                    'getSelectValueRequest' => 'getSelectValueRequest',
                                    'GetItemAvailabilityRequest' => 'GetItemAvailabilityRequest',
                                    'AttachRequest' => 'AttachRequest',
                                    'DetachRequest' => 'DetachRequest',
                                    'AsyncAddListRequest' => 'AsyncAddListRequest',
                                    'AsyncUpdateListRequest' => 'AsyncUpdateListRequest',
                                    'AsyncDeleteListRequest' => 'AsyncDeleteListRequest',
                                    'AsyncGetListRequest' => 'AsyncGetListRequest',
                                    'AsyncSearchRequest' => 'AsyncSearchRequest',
                                    'CheckAsyncStatusRequest' => 'CheckAsyncStatusRequest',
                                    'GetAsyncResultRequest' => 'GetAsyncResultRequest',
                                    'GetDeletedRequest' => 'GetDeletedRequest',
                                    'Country' => 'Country',
                                    'Language' => 'Language',
                                    'State' => 'State',
                                    'StateAbbreviation' => 'StateAbbreviation',
                                    'AvsMatchCode' => 'AvsMatchCode',
                                    'CostingMethod' => 'CostingMethod',
                                    'EntitySearchBasic' => 'EntitySearchBasic',
                                    'ContactSearchBasic' => 'ContactSearchBasic',
                                    'CustomerSearchBasic' => 'CustomerSearchBasic',
                                    'CalendarEventSearchBasic' => 'CalendarEventSearchBasic',
                                    'TaskSearchBasic' => 'TaskSearchBasic',
                                    'OpportunitySearchBasic' => 'OpportunitySearchBasic',
                                    'EmployeeSearchBasic' => 'EmployeeSearchBasic',
                                    'PhoneCallSearchBasic' => 'PhoneCallSearchBasic',
                                    'SupportCaseSearchBasic' => 'SupportCaseSearchBasic',
                                    'MessageSearchBasic' => 'MessageSearchBasic',
                                    'NoteSearchBasic' => 'NoteSearchBasic',
                                    'CustomRecordSearchBasic' => 'CustomRecordSearchBasic',
                                    'BinSearchBasic' => 'BinSearchBasic',
                                    'DepartmentSearchBasic' => 'DepartmentSearchBasic',
                                    'LocationSearchBasic' => 'LocationSearchBasic',
                                    'ClassificationSearchBasic' => 'ClassificationSearchBasic',
                                    'TransactionSearchBasic' => 'TransactionSearchBasic',
                                    'ItemSearchBasic' => 'ItemSearchBasic',
                                    'PartnerSearchBasic' => 'PartnerSearchBasic',
                                    'VendorSearchBasic' => 'VendorSearchBasic',
                                    'SiteCategorySearchBasic' => 'SiteCategorySearchBasic',
                                    'TimeBillSearchBasic' => 'TimeBillSearchBasic',
                                    'SolutionSearchBasic' => 'SolutionSearchBasic',
                                    'TopicSearchBasic' => 'TopicSearchBasic',
                                    'CalendarEventAccessLevel' => 'CalendarEventAccessLevel',
                                    'CalendarEventAttendeeAttendance' => 'CalendarEventAttendeeAttendance',
                                    'CalendarEventAttendeeResponse' => 'CalendarEventAttendeeResponse',
                                    'CalendarEventFrequency' => 'CalendarEventFrequency',
                                    'CalendarEventPeriod' => 'CalendarEventPeriod',
                                    'CalendarEventReminderMinutes' => 'CalendarEventReminderMinutes',
                                    'CalendarEventReminderType' => 'CalendarEventReminderType',
                                    'CalendarEventResponse' => 'CalendarEventResponse',
                                    'CalendarEventStatus' => 'CalendarEventStatus',
                                    'TaskPriority' => 'TaskPriority',
                                    'TaskReminderMinutes' => 'TaskReminderMinutes',
                                    'TaskReminderType' => 'TaskReminderType',
                                    'TaskStatus' => 'TaskStatus',
                                    'PhoneCallPriority' => 'PhoneCallPriority',
                                    'PhoneCallReminderMinutes' => 'PhoneCallReminderMinutes',
                                    'PhoneCallReminderType' => 'PhoneCallReminderType',
                                    'PhoneCallStatus' => 'PhoneCallStatus',
                                    'CalendarEvent' => 'CalendarEvent',
                                    'ExclusionDateList' => 'ExclusionDateList',
                                    'CalendarEventAttendee' => 'CalendarEventAttendee',
                                    'CalendarEventAttendeeList' => 'CalendarEventAttendeeList',
                                    'CalendarEventResource' => 'CalendarEventResource',
                                    'CalendarEventResourceList' => 'CalendarEventResourceList',
                                    'CalendarEventSearch' => 'CalendarEventSearch',
                                    'Task' => 'Task',
                                    'TaskContact' => 'TaskContact',
                                    'TaskContactList' => 'TaskContactList',
                                    'TaskSearch' => 'TaskSearch',
                                    'PhoneCall' => 'PhoneCall',
                                    'PhoneCallContact' => 'PhoneCallContact',
                                    'PhoneCallContactList' => 'PhoneCallContactList',
                                    'PhoneCallSearch' => 'PhoneCallSearch',
                                    'NoteDirection' => 'NoteDirection',
                                    'MediaType' => 'MediaType',
                                    'File' => 'File',
                                    'Note' => 'Note',
                                    'NoteSearch' => 'NoteSearch',
                                    'Message' => 'Message',
                                    'MessageMediaItemList' => 'MessageMediaItemList',
                                    'MessageSearch' => 'MessageSearch',
                                    'CustomerStatusStage' => 'CustomerStatusStage',
                                    'ContactType' => 'ContactType',
                                    'CustomerStage' => 'CustomerStage',
                                    'CustomerCreditHoldOverride' => 'CustomerCreditHoldOverride',
                                    'EmailPreference' => 'EmailPreference',
                                    'Contact' => 'Contact',
                                    'CategoryList' => 'CategoryList',
                                    'ContactAddressbook' => 'ContactAddressbook',
                                    'ContactAddressbookList' => 'ContactAddressbookList',
                                    'ContactSearch' => 'ContactSearch',
                                    'Customer' => 'Customer',
                                    'CustomerDownload' => 'CustomerDownload',
                                    'CustomerDownloadList' => 'CustomerDownloadList',
                                    'CustomerContact' => 'CustomerContact',
                                    'CustomerContactList' => 'CustomerContactList',
                                    'CustomerSalesTeam' => 'CustomerSalesTeam',
                                    'CustomerSalesTeamList' => 'CustomerSalesTeamList',
                                    'CustomerAddressbook' => 'CustomerAddressbook',
                                    'CustomerAddressbookList' => 'CustomerAddressbookList',
                                    'CustomerCreditCards' => 'CustomerCreditCards',
                                    'CustomerCreditCardsList' => 'CustomerCreditCardsList',
                                    'CustomerSearch' => 'CustomerSearch',
                                    'CustomerStatus' => 'CustomerStatus',
                                    'Partner' => 'Partner',
                                    'PartnerPromoCode' => 'PartnerPromoCode',
                                    'PartnerPromoCodeList' => 'PartnerPromoCodeList',
                                    'PartnerAddressbook' => 'PartnerAddressbook',
                                    'PartnerAddressbookList' => 'PartnerAddressbookList',
                                    'PartnerSearch' => 'PartnerSearch',
                                    'Vendor' => 'Vendor',
                                    'VendorPricingSchedule' => 'VendorPricingSchedule',
                                    'VendorPricingScheduleList' => 'VendorPricingScheduleList',
                                    'VendorAddressbook' => 'VendorAddressbook',
                                    'VendorAddressbookList' => 'VendorAddressbookList',
                                    'VendorRoles' => 'VendorRoles',
                                    'VendorRolesList' => 'VendorRolesList',
                                    'VendorSearch' => 'VendorSearch',
                                    'SupportCaseStatusStage' => 'SupportCaseStatusStage',
                                    'SupportCaseStage' => 'SupportCaseStage',
                                    'SolutionStatus' => 'SolutionStatus',
                                    'SupportCase' => 'SupportCase',
                                    'EmailEmployeesList' => 'EmailEmployeesList',
                                    'SupportCaseEscalateTo' => 'SupportCaseEscalateTo',
                                    'SupportCaseEscalateToList' => 'SupportCaseEscalateToList',
                                    'SupportCaseSolutions' => 'SupportCaseSolutions',
                                    'SupportCaseSolutionsList' => 'SupportCaseSolutionsList',
                                    'SupportCaseSearch' => 'SupportCaseSearch',
                                    'SupportCaseStatus' => 'SupportCaseStatus',
                                    'SupportCaseType' => 'SupportCaseType',
                                    'SupportCaseOrigin' => 'SupportCaseOrigin',
                                    'SupportCaseIssue' => 'SupportCaseIssue',
                                    'SupportCasePriority' => 'SupportCasePriority',
                                    'Solution' => 'Solution',
                                    'SolutionTopics' => 'SolutionTopics',
                                    'SolutionTopicsList' => 'SolutionTopicsList',
                                    'Solutions' => 'Solutions',
                                    'SolutionsList' => 'SolutionsList',
                                    'SolutionSearch' => 'SolutionSearch',
                                    'Topic' => 'Topic',
                                    'TopicSolution' => 'TopicSolution',
                                    'TopicSolutionList' => 'TopicSolutionList',
                                    'TopicSearch' => 'TopicSearch',
                                    'CurrencyLocale' => 'CurrencyLocale',
                                    'AccountType' => 'AccountType',
                                    'ItemCostingMethod' => 'ItemCostingMethod',
                                    'ItemProductFeed' => 'ItemProductFeed',
                                    'ItemType' => 'ItemType',
                                    'ItemWeightUnit' => 'ItemWeightUnit',
                                    'ItemPreferenceCriterion' => 'ItemPreferenceCriterion',
                                    'ItemOverallQuantityPricingType' => 'ItemOverallQuantityPricingType',
                                    'ScheduleBCode' => 'ScheduleBCode',
                                    'ItemSubType' => 'ItemSubType',
                                    'CurrencyCurrencyPrecision' => 'CurrencyCurrencyPrecision',
                                    'SalesTaxItemAvailable' => 'SalesTaxItemAvailable',
                                    'ContactCategory' => 'ContactCategory',
                                    'CustomerCategory' => 'CustomerCategory',
                                    'SalesRole' => 'SalesRole',
                                    'PriceLevel' => 'PriceLevel',
                                    'WinLossReason' => 'WinLossReason',
                                    'Term' => 'Term',
                                    'NoteType' => 'NoteType',
                                    'PaymentMethod' => 'PaymentMethod',
                                    'LeadSource' => 'LeadSource',
                                    'Price' => 'Price',
                                    'PriceList' => 'PriceList',
                                    'Pricing' => 'Pricing',
                                    'PricingMatrix' => 'PricingMatrix',
                                    'Rate' => 'Rate',
                                    'RateList' => 'RateList',
                                    'BillingRates' => 'BillingRates',
                                    'BillingRatesMatrix' => 'BillingRatesMatrix',
                                    'Translation' => 'Translation',
                                    'TranslationList' => 'TranslationList',
                                    'ItemOptionsList' => 'ItemOptionsList',
                                    'ItemVendor' => 'ItemVendor',
                                    'ItemVendorList' => 'ItemVendorList',
                                    'SiteCategory' => 'SiteCategory',
                                    'SiteCategoryList' => 'SiteCategoryList',
                                    'InventoryItem' => 'InventoryItem',
                                    'InventoryItemBinNumber' => 'InventoryItemBinNumber',
                                    'InventoryItemBinNumberList' => 'InventoryItemBinNumberList',
                                    'InventoryItemLocations' => 'InventoryItemLocations',
                                    'InventoryItemLocationsList' => 'InventoryItemLocationsList',
                                    'DescriptionItem' => 'DescriptionItem',
                                    'DiscountItem' => 'DiscountItem',
                                    'MarkupItem' => 'MarkupItem',
                                    'PaymentItem' => 'PaymentItem',
                                    'SubtotalItem' => 'SubtotalItem',
                                    'NonInventoryPurchaseItem' => 'NonInventoryPurchaseItem',
                                    'NonInventorySaleItem' => 'NonInventorySaleItem',
                                    'NonInventoryResaleItem' => 'NonInventoryResaleItem',
                                    'OtherChargeResaleItem' => 'OtherChargeResaleItem',
                                    'OtherChargePurchaseItem' => 'OtherChargePurchaseItem',
                                    'ServiceResaleItem' => 'ServiceResaleItem',
                                    'ServicePurchaseItem' => 'ServicePurchaseItem',
                                    'ServiceSaleItem' => 'ServiceSaleItem',
                                    'OtherChargeSaleItem' => 'OtherChargeSaleItem',
                                    'Currency' => 'Currency',
                                    'ExpenseCategory' => 'ExpenseCategory',
                                    'Account' => 'Account',
                                    'Department' => 'Department',
                                    'DepartmentSearch' => 'DepartmentSearch',
                                    'Classification' => 'Classification',
                                    'ClassificationSearch' => 'ClassificationSearch',
                                    'Location' => 'Location',
                                    'LocationSearch' => 'LocationSearch',
                                    'UnitsType' => 'UnitsType',
                                    'UnitsTypeUom' => 'UnitsTypeUom',
                                    'UnitsTypeUomList' => 'UnitsTypeUomList',
                                    'ItemSearch' => 'ItemSearch',
                                    'ContactRole' => 'ContactRole',
                                    'Bin' => 'Bin',
                                    'BinSearch' => 'BinSearch',
                                    'SalesTaxItem' => 'SalesTaxItem',
                                    'TaxGroup' => 'TaxGroup',
                                    'TaxGroupTaxItem' => 'TaxGroupTaxItem',
                                    'TaxGroupTaxItemList' => 'TaxGroupTaxItemList',
                                    'TaxType' => 'TaxType',
                                    'SerializedInventoryItem' => 'SerializedInventoryItem',
                                    'SerializedInventoryItemLocations' => 'SerializedInventoryItemLocations',
                                    'SerializedInventoryItemLocationsList' => 'SerializedInventoryItemLocationsList',
                                    'SerializedInventoryItemNumbers' => 'SerializedInventoryItemNumbers',
                                    'SerializedInventoryItemNumbersList' => 'SerializedInventoryItemNumbersList',
                                    'LotNumberedInventoryItem' => 'LotNumberedInventoryItem',
                                    'LotNumberedInventoryItemLocations' => 'LotNumberedInventoryItemLocations',
                                    'LotNumberedInventoryItemLocationsList' => 'LotNumberedInventoryItemLocationsList',
                                    'LotNumberedInventoryItemNumbers' => 'LotNumberedInventoryItemNumbers',
                                    'LotNumberedInventoryItemNumbersList' => 'LotNumberedInventoryItemNumbersList',
                                    'SalesOrderItemCommitInventory' => 'SalesOrderItemCommitInventory',
                                    'SalesOrderItemCreatePo' => 'SalesOrderItemCreatePo',
                                    'SalesOrderOrderStatus' => 'SalesOrderOrderStatus',
                                    'ItemFulfillmentExportTypeUps' => 'ItemFulfillmentExportTypeUps',
                                    'ItemFulfillmentLicenseExceptionUps' => 'ItemFulfillmentLicenseExceptionUps',
                                    'ItemFulfillmentMethodOfTransportUps' => 'ItemFulfillmentMethodOfTransportUps',
                                    'ItemFulfillmentThirdPartyTypeUps' => 'ItemFulfillmentThirdPartyTypeUps',
                                    'ItemFulfillmentPackageUpsCodMethodUps' => 'ItemFulfillmentPackageUpsCodMethodUps',
                                    'ItemFulfillmentPackageUpsDeliveryConfUps' => 'ItemFulfillmentPackageUpsDeliveryConfUps',
                                    'ItemFulfillmentPackageUpsPackagingUps' => 'ItemFulfillmentPackageUpsPackagingUps',
                                    'ItemFulfillmentB13AFilingOptionFedEx' => 'ItemFulfillmentB13AFilingOptionFedEx',
                                    'ItemFulfillmentHomeDeliveryTypeFedEx' => 'ItemFulfillmentHomeDeliveryTypeFedEx',
                                    'ItemFulfillmentThirdPartyTypeFedEx' => 'ItemFulfillmentThirdPartyTypeFedEx',
                                    'ItemFulfillmentPackageFedExAdmPackageTypeFedEx' => 'ItemFulfillmentPackageFedExAdmPackageTypeFedEx',
                                    'ItemFulfillmentPackageFedExCodMethodFedEx' => 'ItemFulfillmentPackageFedExCodMethodFedEx',
                                    'ItemFulfillmentPackageFedExDeliveryConfFedEx' => 'ItemFulfillmentPackageFedExDeliveryConfFedEx',
                                    'ItemFulfillmentPackageFedExPackagingFedEx' => 'ItemFulfillmentPackageFedExPackagingFedEx',
                                    'ItemFulfillmentPackageFedExSignatureOptionsFedEx' => 'ItemFulfillmentPackageFedExSignatureOptionsFedEx',
                                    'ItemFulfillmentTermsOfSaleFedEx' => 'ItemFulfillmentTermsOfSaleFedEx',
                                    'ItemFulfillmentShipStatus' => 'ItemFulfillmentShipStatus',
                                    'OpportunityStatus' => 'OpportunityStatus',
                                    'TransactionType' => 'TransactionType',
                                    'TransactionStatus' => 'TransactionStatus',
                                    'ItemFulfillmentPackageFedExCodFreightTypeFedEx' => 'ItemFulfillmentPackageFedExCodFreightTypeFedEx',
                                    'Opportunity' => 'Opportunity',
                                    'OpportunitySalesTeam' => 'OpportunitySalesTeam',
                                    'OpportunitySalesTeamList' => 'OpportunitySalesTeamList',
                                    'OpportunityItem' => 'OpportunityItem',
                                    'OpportunityItemList' => 'OpportunityItemList',
                                    'OpportunityCompetitors' => 'OpportunityCompetitors',
                                    'OpportunityCompetitorsList' => 'OpportunityCompetitorsList',
                                    'OpportunitySearch' => 'OpportunitySearch',
                                    'SalesOrder' => 'SalesOrder',
                                    'SalesOrderSalesTeam' => 'SalesOrderSalesTeam',
                                    'SalesOrderSalesTeamList' => 'SalesOrderSalesTeamList',
                                    'SalesOrderItem' => 'SalesOrderItem',
                                    'SalesOrderItemList' => 'SalesOrderItemList',
                                    'TransactionSearch' => 'TransactionSearch',
                                    'ItemFulfillment' => 'ItemFulfillment',
                                    'ItemFulfillmentItem' => 'ItemFulfillmentItem',
                                    'ItemFulfillmentItemList' => 'ItemFulfillmentItemList',
                                    'ItemFulfillmentPackage' => 'ItemFulfillmentPackage',
                                    'ItemFulfillmentPackageList' => 'ItemFulfillmentPackageList',
                                    'ItemFulfillmentPackageUps' => 'ItemFulfillmentPackageUps',
                                    'ItemFulfillmentPackageUpsList' => 'ItemFulfillmentPackageUpsList',
                                    'ItemFulfillmentPackageFedEx' => 'ItemFulfillmentPackageFedEx',
                                    'ItemFulfillmentPackageFedExList' => 'ItemFulfillmentPackageFedExList',
                                    'Invoice' => 'Invoice',
                                    'InvoiceSalesTeam' => 'InvoiceSalesTeam',
                                    'InvoiceSalesTeamList' => 'InvoiceSalesTeamList',
                                    'InvoiceItem' => 'InvoiceItem',
                                    'InvoiceItemList' => 'InvoiceItemList',
                                    'InvoiceItemCost' => 'InvoiceItemCost',
                                    'InvoiceItemCostList' => 'InvoiceItemCostList',
                                    'InvoiceExpCost' => 'InvoiceExpCost',
                                    'InvoiceExpCostList' => 'InvoiceExpCostList',
                                    'InvoiceTime' => 'InvoiceTime',
                                    'InvoiceTimeList' => 'InvoiceTimeList',
                                    'CashSale' => 'CashSale',
                                    'CashSaleSalesTeam' => 'CashSaleSalesTeam',
                                    'CashSaleSalesTeamList' => 'CashSaleSalesTeamList',
                                    'CashSaleItem' => 'CashSaleItem',
                                    'CashSaleItemList' => 'CashSaleItemList',
                                    'CashSaleItemCost' => 'CashSaleItemCost',
                                    'CashSaleItemCostList' => 'CashSaleItemCostList',
                                    'CashSaleExpCost' => 'CashSaleExpCost',
                                    'CashSaleExpCostList' => 'CashSaleExpCostList',
                                    'CashSaleTime' => 'CashSaleTime',
                                    'CashSaleTimeList' => 'CashSaleTimeList',
                                    'Estimate' => 'Estimate',
                                    'EstimateItem' => 'EstimateItem',
                                    'EstimateItemList' => 'EstimateItemList',
                                    'EstimateSalesTeam' => 'EstimateSalesTeam',
                                    'EstimateSalesTeamList' => 'EstimateSalesTeamList',
                                    'VendorBill' => 'VendorBill',
                                    'VendorBillExpense' => 'VendorBillExpense',
                                    'VendorBillExpenseList' => 'VendorBillExpenseList',
                                    'VendorBillItem' => 'VendorBillItem',
                                    'VendorBillItemList' => 'VendorBillItemList',
                                    'PurchaseOrder' => 'PurchaseOrder',
                                    'PurchaseOrderExpense' => 'PurchaseOrderExpense',
                                    'PurchaseOrderExpenseList' => 'PurchaseOrderExpenseList',
                                    'PurchaseOrderItem' => 'PurchaseOrderItem',
                                    'PurchaseOrderItemList' => 'PurchaseOrderItemList',
                                    'ReturnAuthorizationOrderStatus' => 'ReturnAuthorizationOrderStatus',
                                    'CashRefund' => 'CashRefund',
                                    'CashRefundItem' => 'CashRefundItem',
                                    'CashRefundItemList' => 'CashRefundItemList',
                                    'CashRefundSalesTeam' => 'CashRefundSalesTeam',
                                    'CashRefundSalesTeamList' => 'CashRefundSalesTeamList',
                                    'CustomerPayment' => 'CustomerPayment',
                                    'CustomerPaymentApply' => 'CustomerPaymentApply',
                                    'CustomerPaymentApplyList' => 'CustomerPaymentApplyList',
                                    'CustomerPaymentCredit' => 'CustomerPaymentCredit',
                                    'CustomerPaymentCreditList' => 'CustomerPaymentCreditList',
                                    'CustomerPaymentDeposit' => 'CustomerPaymentDeposit',
                                    'CustomerPaymentDepositList' => 'CustomerPaymentDepositList',
                                    'ReturnAuthorization' => 'ReturnAuthorization',
                                    'ReturnAuthorizationItem' => 'ReturnAuthorizationItem',
                                    'ReturnAuthorizationItemList' => 'ReturnAuthorizationItemList',
                                    'ReturnAuthorizationSalesTeam' => 'ReturnAuthorizationSalesTeam',
                                    'ReturnAuthorizationSalesTeamList' => 'ReturnAuthorizationSalesTeamList',
                                    'CreditMemo' => 'CreditMemo',
                                    'CreditMemoSalesTeam' => 'CreditMemoSalesTeam',
                                    'CreditMemoSalesTeamList' => 'CreditMemoSalesTeamList',
                                    'CreditMemoItem' => 'CreditMemoItem',
                                    'CreditMemoItemList' => 'CreditMemoItemList',
                                    'CreditMemoApply' => 'CreditMemoApply',
                                    'CreditMemoApplyList' => 'CreditMemoApplyList',
                                    'CustomerRefund' => 'CustomerRefund',
                                    'CustomerRefundApply' => 'CustomerRefundApply',
                                    'CustomerRefundApplyList' => 'CustomerRefundApplyList',
                                    'Check' => 'Check',
                                    'CheckExpense' => 'CheckExpense',
                                    'CheckExpenseList' => 'CheckExpenseList',
                                    'CheckItem' => 'CheckItem',
                                    'CheckItemList' => 'CheckItemList',
                                    'InventoryAdjustment' => 'InventoryAdjustment',
                                    'InventoryAdjustmentInventory' => 'InventoryAdjustmentInventory',
                                    'InventoryAdjustmentInventoryList' => 'InventoryAdjustmentInventoryList',
                                    'JournalEntry' => 'JournalEntry',
                                    'JournalEntryLine' => 'JournalEntryLine',
                                    'JournalEntryLineList' => 'JournalEntryLineList',
                                    'CustomizationFieldType' => 'CustomizationFieldType',
                                    'CustomizationDynamicDefault' => 'CustomizationDynamicDefault',
                                    'CustomizationDisplayType' => 'CustomizationDisplayType',
                                    'CustomizationFilterCompareType' => 'CustomizationFilterCompareType',
                                    'CustomRecordTypePermissionsPermittedLevel' => 'CustomRecordTypePermissionsPermittedLevel',
                                    'CustomRecordTypePermissionsRestriction' => 'CustomRecordTypePermissionsRestriction',
                                    'ItemCustomFieldItemSubType' => 'ItemCustomFieldItemSubType',
                                    'CustomRecord' => 'CustomRecord',
                                    'CustomRecordSearch' => 'CustomRecordSearch',
                                    'CustomList' => 'CustomList',
                                    'CustomListCustomValue' => 'CustomListCustomValue',
                                    'CustomListCustomValueList' => 'CustomListCustomValueList',
                                    'CustomRecordType' => 'CustomRecordType',
                                    'CustomRecordTypeFieldList' => 'CustomRecordTypeFieldList',
                                    'CustomRecordTypeTabs' => 'CustomRecordTypeTabs',
                                    'CustomRecordTypeTabsList' => 'CustomRecordTypeTabsList',
                                    'CustomRecordTypeForms' => 'CustomRecordTypeForms',
                                    'CustomRecordTypeFormsList' => 'CustomRecordTypeFormsList',
                                    'CustomRecordTypeOnlineForms' => 'CustomRecordTypeOnlineForms',
                                    'CustomRecordTypeOnlineFormsList' => 'CustomRecordTypeOnlineFormsList',
                                    'CustomRecordTypePermissions' => 'CustomRecordTypePermissions',
                                    'CustomRecordTypePermissionsList' => 'CustomRecordTypePermissionsList',
                                    'CustomRecordTypeLinks' => 'CustomRecordTypeLinks',
                                    'CustomRecordTypeLinksList' => 'CustomRecordTypeLinksList',
                                    'CustomRecordTypeManagers' => 'CustomRecordTypeManagers',
                                    'CustomRecordTypeManagersList' => 'CustomRecordTypeManagersList',
                                    'CustomRecordTypeChildren' => 'CustomRecordTypeChildren',
                                    'CustomRecordTypeChildrenList' => 'CustomRecordTypeChildrenList',
                                    'CustomRecordTypeParents' => 'CustomRecordTypeParents',
                                    'CustomRecordTypeParentsList' => 'CustomRecordTypeParentsList',
                                    'EntityCustomField' => 'EntityCustomField',
                                    'EntityCustomFieldFilter' => 'EntityCustomFieldFilter',
                                    'EntityCustomFieldFilterList' => 'EntityCustomFieldFilterList',
                                    'FldFilterSelList' => 'FldFilterSelList',
                                    'CrmCustomField' => 'CrmCustomField',
                                    'CrmCustomFieldFilter' => 'CrmCustomFieldFilter',
                                    'CrmCustomFieldFilterList' => 'CrmCustomFieldFilterList',
                                    'OtherCustomField' => 'OtherCustomField',
                                    'OtherCustomFieldFilter' => 'OtherCustomFieldFilter',
                                    'OtherCustomFieldFilterList' => 'OtherCustomFieldFilterList',
                                    'ItemCustomField' => 'ItemCustomField',
                                    'ItemCustomFieldFilter' => 'ItemCustomFieldFilter',
                                    'ItemCustomFieldFilterList' => 'ItemCustomFieldFilterList',
                                    'TransactionBodyCustomField' => 'TransactionBodyCustomField',
                                    'TransactionBodyCustomFieldFilter' => 'TransactionBodyCustomFieldFilter',
                                    'TransactionBodyCustomFieldFilterList' => 'TransactionBodyCustomFieldFilterList',
                                    'TransactionColumnCustomField' => 'TransactionColumnCustomField',
                                    'TransactionColumnCustomFieldFilter' => 'TransactionColumnCustomFieldFilter',
                                    'TransactionColumnCustomFieldFilterList' => 'TransactionColumnCustomFieldFilterList',
                                    'ItemOptionCustomField' => 'ItemOptionCustomField',
                                    'ItemsList' => 'ItemsList',
                                    'ItemOptionCustomFieldFilter' => 'ItemOptionCustomFieldFilter',
                                    'ItemOptionCustomFieldFilterList' => 'ItemOptionCustomFieldFilterList',
                                    'CustomRecordCustomField' => 'CustomRecordCustomField',
                                    'CustomRecordCustomFieldFilter' => 'CustomRecordCustomFieldFilter',
                                    'CustomRecordCustomFieldFilterList' => 'CustomRecordCustomFieldFilterList',
                                    'EmployeePayFrequency' => 'EmployeePayFrequency',
                                    'Employee' => 'Employee',
                                    'EmployeeAddressbook' => 'EmployeeAddressbook',
                                    'EmployeeAddressbookList' => 'EmployeeAddressbookList',
                                    'EmployeeRoles' => 'EmployeeRoles',
                                    'EmployeeRolesList' => 'EmployeeRolesList',
                                    'EmployeeSearch' => 'EmployeeSearch',
                                    'SiteCategoryPresentationItemItemType' => 'SiteCategoryPresentationItemItemType',
                                    'SiteCategory' => 'SiteCategory',
                                    'SiteCategoryPresentationItem' => 'SiteCategoryPresentationItem',
                                    'SiteCategoryPresentationItemList' => 'SiteCategoryPresentationItemList',
                                    'SiteCategorySearch' => 'SiteCategorySearch',
                                    'TimeBill' => 'TimeBill',
                                    'TimeBillSearch' => 'TimeBillSearch',
                                   );

  public function NetSuiteService($wsdl = "https://webservices.netsuite.com/wsdl/v2014_1_0/netsuite.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }


  public function login(LoginRequest $parameters) {
    return $this->__soapCall('login', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function mapSso(MapSsoRequest $parameters) {
    return $this->__soapCall('mapSso', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function changePasswordOrEmail(ChangePasswordOrEmailRequest $parameters) {
    return $this->__soapCall('changePasswordOrEmail', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function logout(LogoutRequest $parameters) {
    return $this->__soapCall('logout', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function add(AddRequest $parameters) {
    return $this->__soapCall('add', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function delete(DeleteRequest $parameters) {
    return $this->__soapCall('delete', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function search(SearchRequest $parameters) {
    return $this->__soapCall('search', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function searchMore(SearchMoreRequest $parameters) {
    return $this->__soapCall('searchMore', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function searchNext(SearchNextRequest $parameters) {
    return $this->__soapCall('searchNext', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function update(UpdateRequest $parameters) {
    return $this->__soapCall('update', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function addList(AddListRequest $parameters) {
    return $this->__soapCall('addList', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function deleteList(DeleteListRequest $parameters) {
    return $this->__soapCall('deleteList', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function updateList(UpdateListRequest $parameters) {
    return $this->__soapCall('updateList', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }

  public function get(GetRequest $parameters) {
    return $this->__soapCall('get', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function getList(GetListRequest $parameters) {
    return $this->__soapCall('getList', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function getAll(GetAllRequest $parameters) {
    return $this->__soapCall('getAll', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function getCustomization(GetCustomizationRequest $parameters) {
    return $this->__soapCall('getCustomization', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function initialize(InitializeRequest $parameters) {
    return $this->__soapCall('initialize', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function getSelectValue(getSelectValueRequest $parameters) {
    return $this->__soapCall('getSelectValue', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function getItemAvailability(GetItemAvailabilityRequest $parameters) {
    return $this->__soapCall('getItemAvailability', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }

  public function attach(AttachRequest $parameters) {
    return $this->__soapCall('attach', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function detach(DetachRequest $parameters) {
    return $this->__soapCall('detach', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function asyncAddList(AsyncAddListRequest $parameters) {
    return $this->__soapCall('asyncAddList', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function asyncUpdateList(AsyncUpdateListRequest $parameters) {
    return $this->__soapCall('asyncUpdateList', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function asyncDeleteList(AsyncDeleteListRequest $parameters) {
    return $this->__soapCall('asyncDeleteList', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function asyncGetList(AsyncGetListRequest $parameters) {
    return $this->__soapCall('asyncGetList', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function asyncSearch(AsyncSearchRequest $parameters) {
    return $this->__soapCall('asyncSearch', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function getAsyncResult(GetAsyncResultRequest $parameters) {
    return $this->__soapCall('getAsyncResult', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }


  public function checkAsyncStatus(CheckAsyncStatusRequest $parameters) {
    return $this->__soapCall('checkAsyncStatus', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }

  public function getDeleted(GetDeletedRequest $parameters) {
    return $this->__soapCall('getDeleted', array($parameters),       array(
            'uri' => 'urn:platform_2_5.webservices.netsuite.com',
            'soapaction' => ''
           )
      );
  }

}

//END NetSuiteService_250.php - full


//BEGIN NETSUITE.PHP

class NetSuite
{
    private $ns;
    private $NETSUITE_SYSTEM_LOGIN;
    private $NETSUITE_SYSTEM_PASSWORD;
    private $NETSUITE_SYSTEM_ACCOUNT;

    /**
     * Default constructor
     */
    function __construct($NETSUITE_SYSTEM_LOGIN, $NETSUITE_SYSTEM_PASSWORD, $NETSUITE_SYSTEM_ACCOUNT)
    {
	$this->NETSUITE_SYSTEM_LOGIN = $NETSUITE_SYSTEM_LOGIN;
	$this->NETSUITE_SYSTEM_PASSWORD = $NETSUITE_SYSTEM_PASSWORD;
	$this->NETSUITE_SYSTEM_ACCOUNT = $NETSUITE_SYSTEM_ACCOUNT;
	
        $this->ns = new NetSuiteService();
        $this->login();
    }

    /**
     * No-argument login method
     */
    function login()
    {
  	
	    $passport = new Passport();
	    $passport->email = $this->NETSUITE_SYSTEM_LOGIN;
	    $passport->password = $this->NETSUITE_SYSTEM_PASSWORD;
	    $passport->account = $this->NETSUITE_SYSTEM_ACCOUNT;
		
	    $loginRequest = new LoginRequest();
	    $loginRequest->passport = $passport;
	    
	    $loginResponse = $this->ns->login($loginRequest);
    }
    
    /**
     * This method checks if the specified user is allowed to log in or not
     * @param $username - username of user whose login you wish to check
     * @param $password - password of aforementioned user
     */
	function checkUserCred($username, $password)
	{
    	//TODO: this should ideally be a new object, but creating a new object is expensive
    	//re-using the existing $ns keeps the login time to ~2.8 seconds
    	//Using a new $ns increases it to ~3.3 seconds
    	//$loginCheckNS = new NetSuiteService();		
    	
	    $recordRef = new RecordRef();
		$recordRef->internalId = 1011;
		
		$passport = new Passport();
		$passport->email = $username;
		$passport->password = $password;
		$passport->account = $this->NETSUITE_SYSTEM_ACCOUNT;
		$passport->role = $recordRef;
		    
		$loginRequest = new LoginRequest();
		$loginRequest->passport = $passport;
		
		try
		{		
		    $loginResponse = $this->ns->login($loginRequest);
		}
		catch (SoapFault $soapFault)
		{
		    logNSLogin($username, $password, "Login SoapFault: " . $soapFault->__toString());
		    return false;
		}		
		
		//return if login failed
		if (!$loginResponse->sessionResponse->status->isSuccess)
		{
			return false;
		}
		
		$logoutRequest = new LogoutRequest();
		
		$this->ns->logout($logoutRequest);
		return true;
			
	}
	
	
	/**
	 * Search for clients who have the username and password
	 * @param $email - Email of user to search for
	 * @param $password - Password of above user
	 */
	function searchEmailPassword($email, $password)
	{
		$s = new SearchStringField();
		$s->searchValue = $email;
		$s->operator = "is";
		
		$s1 = new SearchStringField();
		$s1->searchValue = $password;
		$s1->operator = "is";		
		
		$custSearch = new CustomerSearchBasic();
		$custSearch->email = $s;
		$custSearch->password = $s1;
		
		$searchRequest = new SearchRequest();
		$searchRequest->searchRecord = $custSearch;
		
		$searchResponse = $this->ns->search($searchRequest);
		
		return $searchResponse;
	
	}
	
	/**
	 * Search for a user based on their email
	 * @param $email - email of the user you wish to find
	 */
	function searchEmail($email)
	{
		$s = new SearchStringField();
		$s->searchValue = $email;
		$s->operator = "is";
		
		$custSearch = new CustomerSearchBasic();
		$custSearch->email = $s;
		
		$searchRequest = new SearchRequest();
		$searchRequest->searchRecord = $custSearch;
		
		try
		{
		    $searchResponse = $this->ns->search($searchRequest);
		}
		catch (SoapFault $soapFault)
		{
		    logNSLogin($email, $email, "SearchEmail SoapFault: " . $soapFault->__toString());
		    return NULL;
		}
		
		return $searchResponse;
	
	}
	
	/**
	 * Log out of the Netsuite SOAP service
	 */
	function logout()
	{
		$logoutRequest = new LogoutRequest();
		$this->ns->logout($logoutRequest);
	}
	
	/**
	 * Get the entire record, including custom fields
	 * @param $customerID - ID of the customer, in Netsuite, whose record you wish to retrieve
	 */
	function getCustomerRecord($email, $password, $customerID)
	{		            
		$rr = new RecordRef();
		$rr->internalId = $customerID;
		$rr->type = "customer";
		    
		$getRequest = new GetRequest();
		$getRequest->baseRef = $rr;
		    
		try
		{
		    $getResp = $this->ns->get($getRequest);
		}
		catch (SoapFault $soapFault)
		{
		    logNSLogin($email, $password, "GetCustomerRecord SoapFault: " . $soapFault->__toString());
		    return NULL;
		}

		return $getResp->readResponse->record;		
	
	}

}

//END NETSUITE.PHP

//HELPER FUNCTIONS

/**
 * Function to log Netsuite logins in your database
 * @param $username
 * @param $password
 * @param $message
 */
function logNSLogin($username, $password, $message, $logTable)
{
        if ($username == "")
	    return;
	
	$password = md5($password);
	
	$message = mysql_real_escape_string($message);
	$queryStr = "INSERT INTO `$logTable` (password, username, ip, user_agent, message) VALUES ('$password', '$username', '{$_SERVER['REMOTE_ADDR']}', '{$_SERVER['HTTP_USER_AGENT']}', '$message')";
	$q2 = mysql_query($queryStr);
	if(!$q2)
	{
        die("<br> Cannot log sNSLogin. Error is: " . mysql_error());
	} 
}

//END HELPERS
 
/**
 * Example Authentication Plugin.  Based on the example.php plugin in the Joomla! Core installation
 *
 * @package    Joomla.Tutorials
 * @subpackage Plugins
 * @license    GNU/GPL
 */
class plgAuthenticationNetsuiteAuth extends JPlugin
{
    
    /**
    * Errors
    */
    private $E_NETSUITE_USER_EXIST_UNACTIVATED_ON_WEBSITE = 'User exists on NetSuite but has NOT been activated for Website';
    private $E_NETSUITE_USER_EXIST_UNACTIVATED_AND_INCORRECT_PASSWORD_ON_WEBSITE = "User exist on NetSuite. Password incorrect or not set and has NOT been activated for Website";
    private $E_NETSUITE_USER_EXIST_INCORRECT_PASSWORD_ON_WEBSITE = 'User exist on NetSuite. Password incorrect or not set';
    private $E_NETSUITE_USER_NOT_EXIST = 'User does NOT exist on NetSuite. New registration required';
    private $E_NETSUITE_UNABLE_TO_RETRIEVE_FULL_RECORD = " Unable to retrieve full user record";
    private $E_JOOMLA_USER_NOT_EXIST = "User does not exist";
    private $E_JOOMLA_INVALID_PASSWORD = "Invalid password";
    private $E_SOAP_EXCEPTION = 'SOAP threw an exception';
    private $E_BLANK_USERNAME = 'Empty username not allowed';
    private $E_BLANK_PASSWORD = 'Empty password not allowed';
    private $E_JOOMLA_UNABLE_TO_BIND_USER = "Unable to bind user data to new user";
    private $E_JOOMLA_UNABLE_TO_SAVE_USER = "Unable to save joomla User";
    
    
    /**
     * Constructor
     *
     * For php4 compatibility we must not use the __constructor as a constructor for plugins
     * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
     * This causes problems with cross-referencing necessary for the observer design pattern.
     *
     * @param object $subject The object to observe
     * @since 1.5
     */
    /*function plgAuthenticationNetsuiteAuth(& $subject, $params) 
    {
        parent::__construct($subject, $params);
    }*/

    
    //this is for the joomla plugin, since it executes after the NS plugin
    function onUserLoginFailure( &$response )
    {
     
       switch ($response["error_message"]) 
       {	   
    	   case $this->E_NETSUITE_USER_EXIST_UNACTIVATED_ON_WEBSITE : 
    	   case $this->E_NETSUITE_USER_NOT_EXIST :
    	   case $this->E_JOOMLA_USER_NOT_EXIST :
    	       JApplication::redirect($this->params->get('NETSUITE_SIGNUP_REDIRECT_LOCATION'));
    	       //260;
    	       break;
    	   case $this->E_NETSUITE_USER_EXIST_UNACTIVATED_AND_INCORRECT_PASSWORD_ON_WEBSITE :
    	   case $this->E_NETSUITE_USER_EXIST_INCORRECT_PASSWORD_ON_WEBSITE :
    	   case $this->E_JOOMLA_INVALID_PASSWORD :
    	       JApplication::redirect($this->params->get('FORGOT_PASSWORD_REDIRECT_LOCATION'));
    	       break;
    	   case $this->E_SOAP_EXCEPTION :
    	   case $this->E_BLANK_USERNAME :
    	   case $this->E_BLANK_PASSWORD :
    	   case $this->E_JOOMLA_UNABLE_TO_BIND_USER :
    	   case $this->E_JOOMLA_UNABLE_TO_SAVE_USER :
    	       JApplication::redirect($this->params->get('LOGIN_FORM_REDIRECT_LOCATION'));
    	       break;
	   
       }
       
    }
    

 
    /**
     * This method should handle any authentication and report back to the subject
     * This example uses simple authentication - it checks if the password is the reverse
     * of the username (and the user exists in the database).
     *
     * This method is called EVERY TIME the session expires, to re-authenticate the user
     *
     * @access    public
     * @param     array     $credentials    Array holding the user credentials ('username' and 'password')
     * @param     array     $options        Array of extra options
     * @param     object    $response       Authentication response object
     * @return    boolean
     * @since 1.5
     */
    function onUserAuthenticate( $credentials, $options, &$response )
    {
    	
    	$email = $credentials['username'];
    	$password = $credentials['password'];
    	
    	// No blank usernames or passwords
    	if (empty($credentials['password']))
    	{
    		logNSLogin($email, $password, $this->E_BLANK_PASSWORD, $this->params->get('LOG_ERROR_TABLE'));
    		$response->status = JAUTHENTICATE_STATUS_FAILURE;
    		$response->error_message = $this->E_BLANK_PASSWORD;
    		return false;
    	}	
    	
    	if (empty($credentials['username']))
    	{
    		logNSLogin($email, $password, $E_BLANK_USERNAME, $this->params->get('LOG_ERROR_TABLE'));
    		$response->status = JAUTHENTICATE_STATUS_FAILURE;
    		$response->error_message = $E_BLANK_USERNAME;
    		return false;
    	}
    	
    	try
    	{
    	    
    	    $ns = new NetSuite($this->params->get('NETSUITE_SYSTEM_LOGIN'), $this->params->get('NETSUITE_SYSTEM_PASSWORD'), $this->params->get('NETSUITE_SYSTEM_ACCOUNT'));
    
    	    $searchResponse = $ns->searchEmail($email);
	    
    	    if (!(is_null($searchResponse)) && $searchResponse->searchResult->totalRecords > 0)
    	    {	    
        		//if more than 1 record is returned, get one that matches email exactly
        		if ($searchResponse->searchResult->totalRecords > 1)
        		{
        		    $newestRecord = $searchResponse->searchResult->recordList->record[0];
        		    
        		    $i = 0;
        		    while ($newestRecord->email != $email)
        		    {
            			$newestRecord = $searchResponse->searchResult->recordList->record[$i];
            			$i++;
        		    }
        		}
        		else
        		{
        		    $newestRecord = $searchResponse->searchResult->recordList->record;
        		}
        		
        		//need to get full record to use custom fields
        		$newestRecord = $ns->getCustomerRecord($email, $password, $newestRecord->internalId);
			
			if (is_null($newestRecord)) 
			{
			    logNSLogin($email, $password, $this->E_NETSUITE_UNABLE_TO_RETRIEVE_FULL_RECORD);
			    $response->status = JAUTHENTICATE_STATUS_FAILURE;
			    $response->error_message = $this->E_NETSUITE_UNABLE_TO_RETRIEVE_FULL_RECORD;
			    return false;
			}			
        				
        		if ($newestRecord->giveAccess == null || !$newestRecord->giveAccess )
        		{
        		    logNSLogin($email, $password, $this->E_NETSUITE_USER_EXIST_UNACTIVATED_ON_WEBSITE, $this->params->get('LOG_ERROR_TABLE'));
        		    $response->status = JAUTHENTICATE_STATUS_FAILURE;
        		    $response->error_message = $this->E_NETSUITE_USER_EXIST_UNACTIVATED_ON_WEBSITE;
        		    return false;
        		}
        		
        		$userCanLogin = $ns->checkUserCred($email, $password);   
        
        		if ($userCanLogin)
        		{		
        	    
        		    $response->status = JAUTHENTICATE_STATUS_SUCCESS;
        		    $response->email = $credentials['username'];
        		    $response->fullname = $newestRecord->firstName . ' ' . $newestRecord->lastName;
        		    $response->username = $credentials['username'];
        		    return true;
        
        		}
        		else
        		{
        		    logNSLogin($email, $password, $E_NETSUITE_USER_EXIST_INCORRECT_PASSWORD_ON_WEBSITE, $this->params->get('LOG_ERROR_TABLE'));
        		    $response->status = JAUTHENTICATE_STATUS_FAILURE;
        		    $response->error_message = $E_NETSUITE_USER_EXIST_INCORRECT_PASSWORD_ON_WEBSITE;
        		    return false;
        		}
    		
    	    }
    	    else
    	    {
        		logNSLogin($email, $password, $E_NETSUITE_USER_NOT_EXIST, $this->params->get('LOG_ERROR_TABLE'));
        		$response->status = JAUTHENTICATE_STATUS_FAILURE;
        		$response->error_message = $E_NETSUITE_USER_NOT_EXIST;
        		return false;
    	    }
    		
    		
    	}
    	catch (SoapFault $soapFault)
    	{
    	    logNSLogin($email, $password, "NetSuite SoapFault: " . $soapFault->__toString(), $this->params->get('LOG_ERROR_TABLE'));
    	    $response->status = JAUTHENTICATE_STATUS_FAILURE;
    	    $response->error_message = $E_SOAP_EXCEPTION;
    	    return false;
    	}


    }
}

?>