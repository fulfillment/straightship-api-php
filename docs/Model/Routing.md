# Routing

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_code** | **string** | Optional carrier code from list assigned to client on portal. Use null or omit for rate shopping.  You can use {Techdinamics.Ship.Core.Api.Model.ApiRouting.AccountCode} or {Techdinamics.Ship.Core.Api.Model.ApiRouting.AccountId} but not both | [optional] 
**account_id** | **int** | Optional account id from list of accounts assigned to client on portal.  Use null or omit for rate shopping.  You can use {Techdinamics.Ship.Core.Api.Model.ApiRouting.AccountCode} or {Techdinamics.Ship.Core.Api.Model.ApiRouting.AccountId} but not both | [optional] 
**service_code** | **string** | Optional carrier service code from list installed on portal. Default value defined on portal for client is used if value omitted. | [optional] 
**external_service_code** | **string** | Optional carrier service code mapped to external code on carrier tab on portal. | [optional] 
**rate_shopping_group** | **string** | Rate shopping group | [optional] 
**routing_group** | **string** | Routing group | [optional] 
**freight_payment_terms** | **string** | Freight payment terms enum:  0 - _Prepaid_  1 - _Collect_  2 - _ThirdParty_ | [optional] 
**third_party_billing_account** | **string** | Third party billing account | [optional] 
**third_party_billing_postal** | **string** | DEPRECATED: Third party billing postal  Field is deprecated and will be removed in future versions.  Please switch to use &lt;b&gt;ThirdPartyBillingAddress.Postal&lt;/b&gt;{Techdinamics.Ship.Core.Api.Model.ApiRouting.ThirdPartyBillingAddress} | [optional] 
**third_party_billing_country_code** | **string** | DEPRECATED: Third party billing country code  Field is deprecated and will be removed in future versions.  Please switch to use &lt;b&gt;ThirdPartyBillingAddress.Country&lt;/b&gt;{Techdinamics.Ship.Core.Api.Model.ApiRouting.ThirdPartyBillingAddress} | [optional] 
**third_party_billing_address** | [**Fulfillment\StraightShip\Client\Model\Address**](Address.md) |  | [optional] 
**pickup_date_time** | **string** | Pickup date time | [optional] 
**injection_date_time** | **string** | Injection date time | [optional] 
**departure_date_time** | **string** | Departure date time | [optional] 
**delivery_date_time** | **string** | Delivery requested date time  Must be specified in portal timezone | [optional] 
**consignee_open_time** | **string** | Consignee open time  Limited support by carriers, put in hh:mm | [optional] 
**consignee_close_time** | **string** | Consignee close time  Limited support by carriers, put in hh:mm | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

