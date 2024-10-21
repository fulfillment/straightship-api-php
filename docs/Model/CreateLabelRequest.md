# CreateLabelRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | Tracking number. | [optional] 
**tracking_url** | **string** | Tracking url (if available or configured on carrier setup). | [optional] 
**extended_tracking_number** | **string** | Per package extended tracking number. Ignored on creation | [optional] 
**package_id** | **int** | Package Id | [optional] 
**request_package_id** | **string** | Request package Id | [optional] 
**sscc** | **string** | Per package UCC 128 code. | [optional] 
**carton_id** | **string** | Per package carton id. | [optional] 
**package_shipping_charge** | **double** | Per package net charge. Not availabe for some carriers. Ignored on creation | [optional] 
**package_shipping_charge_total** | **double** | Per package total charge. Not availabe for some carriers. Ignored on creation | [optional] 
**package_tax1_type** | **string** | Per package tax 1 type. Ignored on creation | [optional] 
**package_tax1_amount** | **double** | Per package tax 1 amount. Ignored on creation | [optional] 
**package_tax2_type** | **string** | Per package tax 2 type. Ignored on creation | [optional] 
**package_tax2_amount** | **double** | Per package tax 2 amount. Ignored on creation | [optional] 
**package_tax3_type** | **string** | Per package tax 3 type. Ignored on creation | [optional] 
**package_tax3_amount** | **double** | Per package tax 3 amount. Ignored on creation | [optional] 
**package_fuel_surcharge** | **double** | Per package fuel surcharge. Ignored on creation | [optional] 
**type** | **int** | Label type:  1 - _PDF_  2 - _ZPL_  3 - _PNG_ | [optional] 
**label** | **string** | Generated label in base 64 encoding | [optional] 
**label_page_count** | **int** | Count of pages in ZPL label only,  Provided only if configured on portal | [optional] 
**label_url** | **string** | Label download url | [optional] 
**purpose** | **string** | Label purpose, one of the following:  _LABEL_  _RETURN LABEL_  _COMMERCIALINVOICE_  _CODREMITTANCELABEL_  _DANGEROUSGOODS_ | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

