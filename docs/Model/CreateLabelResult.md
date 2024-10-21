# CreateLabelResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_id** | **int** | Batch id for created label | [optional] 
**shipment_id** | **int** | Shipment id for created label | [optional] 
**manifest_id** | **string** | Manifest id for created label | [optional] 
**batch_number** | **string** | Optional batch number. If batch already exists, order is added to existing batch | [optional] 
**client_code** | **string** | Client code for order | [optional] 
**carrier_code** | **string** | Optional carrier code from list installed on portal. Use null or omit for rate shopping. | [optional] 
**carrier_id** | **int** | Internal techship carrier id. Output-only field. | [optional] 
**service_code** | **string** | Optional carrier service code from list installed on portal. Default value defined on portal for client is used if value omitted. | [optional] 
**external_service_code** | **string** | Optional carrier service code mapped to external code on carrier tab on portal. | [optional] 
**transaction_number** | **string** | Mandatory unique shipment number | [optional] 
**customer_order** | **string** | Optional customer reference 1 | [optional] 
**customer_po** | **string** | Optional customer reference 2 | [optional] 
**customer_number** | **string** | Optional customer reference 3 | [optional] 
**sequence** | **int** | Order sequence number | [optional] 
**processing_errors** | **string** | Processing Errors | [optional] 
**has_errors** | **bool** | Has errors | [optional] 
**labels** | [**Fulfillment\StraightShip\Client\Model\CreateLabelRequest[]**](CreateLabelRequest.md) | Created label list | [optional] 
**tax1_type** | **string** | Shipment tax 1 code. Ignored on creation | [optional] 
**tax1_amount** | **double** | Shipment tax 1 amount. Ignored on creation | [optional] 
**tax2_type** | **string** | Shipment tax 2 code. Ignored on creation | [optional] 
**tax2_amount** | **double** | Shipment tax 2 amount. Ignored on creation | [optional] 
**tax3_type** | **string** | Shipment tax 3 code. Ignored on creation | [optional] 
**tax3_amount** | **double** | Shipment tax 3 amount. Ignored on creation | [optional] 
**shipping_charge** | **double** | Shipping charge. Ignored on creation | [optional] 
**shipping_charge_total** | **double** | Shipping charge total. Ignored on creation | [optional] 
**fuel_surcharge** | **double** | Carrier fuel surcharge. Ignored on creation | [optional] 
**fee_markup** | **double** | Fee markup. Ignored on creation | [optional] 
**labels_pdf_url** | **string** | Combined labels download url | [optional] 
**documents_pdf_url** | **string** | Combined labels download url | [optional] 
**combined_pdf_url** | **string** | Combined labels download url | [optional] 
**airway_bill_number** | **string** | Air waybill number | [optional] 
**elapsed_carrier_api_time_process** | **double** | Elapsed label API time (without rates) | [optional] 
**elapsed_carrier_api_time_void_previous** | **double** | Elapsed void previous order API time | [optional] 
**rates** | [**Fulfillment\StraightShip\Client\Model\CarrierOrderRate[]**](CarrierOrderRate.md) | Estimate rates | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

