# Package

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | Tracking number for package. | [optional] 
**extended_tracking_number** | **string** | Extended tracking number. | [optional] 
**tracking_url** | **string** | Tracking url (if available or configured on carrier setup). | [optional] 
**items** | [**Fulfillment\StraightShip\Client\Model\PackageItem[]**](PackageItem.md) | Package contents (for international shipments or packing slips) | [optional] 
**labels** | [**Fulfillment\StraightShip\Client\Model\Label[]**](Label.md) | Created labels list | [optional] 
**packing_slips** | [**Fulfillment\StraightShip\Client\Model\Label[]**](Label.md) | Created packing slips list. | [optional] 
**description** | **string** | Box name | [optional] 
**sequence_number** | **int** | Package sequential number in shipment | [optional] 
**custom_fields** | [**Fulfillment\StraightShip\Client\Model\CustomField[]**](CustomField.md) | Custom fields to pass with package | [optional] 
**user_documents** | [**Fulfillment\StraightShip\Client\Model\UserDocument[]**](UserDocument.md) | User documents | [optional] 
**weight** | **double** | Mandatory package net weight. | [optional] 
**commodity_description** | **string** | Commodity description | [optional] 
**id** | **int** |  | [optional] 
**package_freight_charge** | [**Fulfillment\StraightShip\Client\Model\PackageFreightCharge**](PackageFreightCharge.md) |  | [optional] 
**weight_uom** | **string** | Weight UOM. Default is LBS.  Allowed values: LB, KG, OZ, G | [optional] 
**metro_scg_carton_id** | **string** | For internal use only | [optional] 
**dimensions** | [**Fulfillment\StraightShip\Client\Model\Dimensions**](Dimensions.md) |  | [optional] 
**batteries_info** | [**Fulfillment\StraightShip\Client\Model\BatteriesInfo**](BatteriesInfo.md) |  | [optional] 
**package_details** | [**Fulfillment\StraightShip\Client\Model\PackageDetails**](PackageDetails.md) |  | [optional] 
**package_options** | [**Fulfillment\StraightShip\Client\Model\PackageOptions**](PackageOptions.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

