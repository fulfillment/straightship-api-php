# DangerousGoodsHeader

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**regulation_set** | **string** | The Regulatory set associated with every regulated shipment. It must be same across the shipment.  Valid values:  ADR &#x3D; Europe to Europe Ground Movement  CFR &#x3D; HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada, same as DOT   IATA &#x3D; Worldwide Air movement  TDG &#x3D; Canada to Canada ground movement or Canada to U.S. standard movement.  ORMD - deprecated | [optional] 
**emergency_contact** | **string** | The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber.  The information is required if there is a value in the EmergencyPhoneNumber field above and the shipment is with a US50 or PR origin and/or destination and the RegulationSet is IATA.  Both UPS and Fedex | [optional] 
**emergency_phone** | **string** | 24 Hour Emergency Phone Number of the shipper. Valid values for this field are (0) through (9) with trailing blanks. For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries or territories the layout is country or territory code, area code, number.  The following are restricted in the phone number: period “.”, dash “-“, plus sign “+” and conventional parentheses “(“ and “)”, “EXT\&quot; or \&quot;OPT\&quot;\&quot;  Both UPS and Fedex | [optional] 
**signatory** | [**Fulfillment\StraightShip\Client\Model\DangerousGoodsSignatory**](DangerousGoodsSignatory.md) |  | [optional] 
**offeror** | **string** | Offeror&#x27;s name or contract number per DOT regulation.   Fedex | [optional] 
**additional_handling** | **string** | Additional handling | [optional] 
**accessibility** | **string** | Accessibility attribute | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

