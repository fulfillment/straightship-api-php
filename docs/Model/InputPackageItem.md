# InputPackageItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Item SKU | [optional] 
**lot_number** | **string** | Optional Lot number | [optional] 
**serial_number** | **string** | Optional serial number | [optional] 
**description** | **string** | Optional description 1 | [optional] 
**description2** | **string** | Optional description 2 | [optional] 
**description3** | **string** | Optional description 2 | [optional] 
**quantity** | **double** | Mandatory quantity | [optional] 
**unit_price** | **double** | Mandatory unit price | [optional] 
**unit_weight** | **double** | Weight per 1 unit | [optional] 
**net_unit_weight** | **double** | Net weight per 1 unit (for DHL Express) | [optional] 
**expiration_date** | **string** | Optional expiration date | [optional] 
**uom** | **string** | Mandatory UOM | [optional] 
**supplier** | **string** | Optional supplier name | [optional] 
**country_of_origin** | **string** | Country of origin (required for international) | [optional] 
**harmonized_code** | **string** | Harmonized item code (required for some international) | [optional] 
**custom_fields** | [**Fulfillment\StraightShip\Client\Model\CustomField[]**](CustomField.md) | Custom fields to pass with item | [optional] 
**dangerous_goods** | [**Fulfillment\StraightShip\Client\Model\DangerousGoodsDetails**](DangerousGoodsDetails.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

