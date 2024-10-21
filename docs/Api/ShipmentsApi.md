# namespace Fulfillment\StraightShip\Client\ShipmentsApi

All URIs are relative to *https://api-us.techship.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callPrint**](ShipmentsApi.md#callprint) | **POST** /api/v3/shipments/print | Send shipment to printer (requires desktop client)
[**cartonizeShipment**](ShipmentsApi.md#cartonizeshipment) | **POST** /api/v3/shipments/cartonize | Cartonize unpacked shipment
[**countShipment**](ShipmentsApi.md#countshipment) | **GET** /api/v3/shipments/count | Count
[**createShipment**](ShipmentsApi.md#createshipment) | **POST** /api/v3/shipments/create | Create shipment
[**delete**](ShipmentsApi.md#delete) | **DELETE** /api/v3/shipments/{shipmentId} | Delete shipment
[**estimateShipment**](ShipmentsApi.md#estimateshipment) | **POST** /api/v3/shipments/estimate | Create shipment
[**getShipment**](ShipmentsApi.md#getshipment) | **GET** /api/v3/shipments/{shipmentId} | Get shipment
[**importAndProcess**](ShipmentsApi.md#importandprocess) | **POST** /api/v3/shipments/importandprocess | Import shipment
[**listShipment**](ShipmentsApi.md#listshipment) | **GET** /api/v3/shipments | List shipments
[**trigger**](ShipmentsApi.md#trigger) | **POST** /api/v3/shipments/{shipmentId} | Triggers WMS callback
[**updateShipment**](ShipmentsApi.md#updateshipment) | **PUT** /api/v3/shipments/{shipmentId} | Update shipment

# **callPrint**
> object callPrint($printer_key, $shipment_id, $transaction_number, $customer_order, $batch_number, $customer_po)

Send shipment to printer (requires desktop client)

Send shipment to printer (requires print client)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-api-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');// Configure API key authorization: x-secret-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-key', 'Bearer');

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$printer_key = "printer_key_example"; // string | Printer key
$shipment_id = 56; // int | 
$transaction_number = "transaction_number_example"; // string | 
$customer_order = "customer_order_example"; // string | 
$batch_number = "batch_number_example"; // string | 
$customer_po = "customer_po_example"; // string | 

try {
    $result = $apiInstance->callPrint($printer_key, $shipment_id, $transaction_number, $customer_order, $batch_number, $customer_po);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->callPrint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **printer_key** | **string**| Printer key |
 **shipment_id** | **int**|  | [optional]
 **transaction_number** | **string**|  | [optional]
 **customer_order** | **string**|  | [optional]
 **batch_number** | **string**|  | [optional]
 **customer_po** | **string**|  | [optional]

### Return type

**object**

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartonizeShipment**
> Fulfillment\StraightShip\Client\Model\CartonizeResult cartonizeShipment($body, $duplicate_handling, $error_label_mode, $label_pdf_conversion, $label_preference, $is_quote, $no_lock, $import_only, $label_url, $dry_run, $printer_key)

Cartonize unpacked shipment

Cartonize, create and process shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-api-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');// Configure API key authorization: x-secret-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-key', 'Bearer');

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new Fulfillment\StraightShip\Client\Model\InputUnpackedOrder(); // Fulfillment\StraightShip\Client\Model\InputUnpackedOrder | Shipment  to create
$duplicate_handling = "Exception"; // string | Duplicate handling ( by transaction number)              0 - Exception on duplicate (default)              1 - Allow duplicates               2 - Overwrite if duplicate not closed              3 - System reserved for internal use              4 - Overwrite if duplicate not in processed state              5 - Return existing label if processed, otherwise overwrite
$error_label_mode = "None"; // string | Error label modeL 0 - None, 1 - PDF, 2 - ZPL
$label_pdf_conversion = "Default"; // string | Label pdf conversion: 0 - Default, 1 - Enabled, 2 - Disabled
$label_preference = "label_preference_example"; // string | Label preference (support depends on carrier): 0 - ZPL, 1 - PDF, 2 - AZPL, 3 - BZPL, 4 - EPL, 5 - DPL, 6 - PDF
$is_quote = true; // bool | 
$no_lock = false; // bool | Do not use distributed locking for duplicate check (if used, duplicate check should be done by calling system)
$import_only = false; // bool | Import order and leave in not processed state
$label_url = false; // bool | Generate labels as URL (for internal use only)
$dry_run = false; // bool | Do not save results to database
$printer_key = "printer_key_example"; // string | Id of printer used to process order

try {
    $result = $apiInstance->cartonizeShipment($body, $duplicate_handling, $error_label_mode, $label_pdf_conversion, $label_preference, $is_quote, $no_lock, $import_only, $label_url, $dry_run, $printer_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->cartonizeShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Fulfillment\StraightShip\Client\Model\InputUnpackedOrder**](../Model/InputUnpackedOrder.md)| Shipment  to create |
 **duplicate_handling** | **string**| Duplicate handling ( by transaction number)              0 - Exception on duplicate (default)              1 - Allow duplicates               2 - Overwrite if duplicate not closed              3 - System reserved for internal use              4 - Overwrite if duplicate not in processed state              5 - Return existing label if processed, otherwise overwrite | [optional] [default to Exception]
 **error_label_mode** | **string**| Error label modeL 0 - None, 1 - PDF, 2 - ZPL | [optional] [default to None]
 **label_pdf_conversion** | **string**| Label pdf conversion: 0 - Default, 1 - Enabled, 2 - Disabled | [optional] [default to Default]
 **label_preference** | **string**| Label preference (support depends on carrier): 0 - ZPL, 1 - PDF, 2 - AZPL, 3 - BZPL, 4 - EPL, 5 - DPL, 6 - PDF | [optional]
 **is_quote** | **bool**|  | [optional]
 **no_lock** | **bool**| Do not use distributed locking for duplicate check (if used, duplicate check should be done by calling system) | [optional] [default to false]
 **import_only** | **bool**| Import order and leave in not processed state | [optional] [default to false]
 **label_url** | **bool**| Generate labels as URL (for internal use only) | [optional] [default to false]
 **dry_run** | **bool**| Do not save results to database | [optional] [default to false]
 **printer_key** | **string**| Id of printer used to process order | [optional]

### Return type

[**Fulfillment\StraightShip\Client\Model\CartonizeResult**](../Model/CartonizeResult.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countShipment**
> int countShipment($start_date, $end_date, $date_type, $client_code, $carrier_code)

Count

Retrieve shipment details and label

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-api-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');// Configure API key authorization: x-secret-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-key', 'Bearer');

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = "start_date_example"; // string | Start date, required (max range is 31 days)
$end_date = "end_date_example"; // string | End date, required (max range is 31 days)
$date_type = "date_type_example"; // string | Date type: ProcessedOn (default), CreatedOn, ShipDate
$client_code = "client_code_example"; // string | Client code
$carrier_code = "carrier_code_example"; // string | Carrier code

try {
    $result = $apiInstance->countShipment($start_date, $end_date, $date_type, $client_code, $carrier_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->countShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Start date, required (max range is 31 days) |
 **end_date** | **string**| End date, required (max range is 31 days) |
 **date_type** | **string**| Date type: ProcessedOn (default), CreatedOn, ShipDate | [optional]
 **client_code** | **string**| Client code | [optional]
 **carrier_code** | **string**| Carrier code | [optional]

### Return type

**int**

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShipment**
> Fulfillment\StraightShip\Client\Model\CreateLabelResult createShipment($body, $duplicate_handling, $error_label_mode, $label_pdf_conversion, $label_preference, $no_lock, $import_only, $label_url, $dry_run, $printer_key)

Create shipment

Create and process shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-api-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');// Configure API key authorization: x-secret-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-key', 'Bearer');

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new Fulfillment\StraightShip\Client\Model\InputOrder(); // Fulfillment\StraightShip\Client\Model\InputOrder | Shipment  to create
$duplicate_handling = "Exception"; // string | Duplicate handling ( by transaction number)              0 - Exception on duplicate (default)              1 - Allow duplicates if not closed              2 - Overwrite if duplicate not closed              3 - System reserved for internal use              4 - Overwrite if duplicate not in processed state              5 - Return existing label if processed, otherwise overwrite
$error_label_mode = "None"; // string | Error label modeL 0 - None, 1 - PDF, 2 - ZPL
$label_pdf_conversion = "Default"; // string | Label pdf conversion: 0 - Default, 1 - Enabled, 2 - Disabled
$label_preference = "label_preference_example"; // string | Label preference (support depends on carrier): 0 - ZPL, 1 - PDF, 2 - AZPL, 3 - BZPL, 4 - EPL, 5 - DPL, 6 - PDF
$no_lock = false; // bool | Do not use distributed locking for duplicate check (if used, duplicate check should be done by calling system)
$import_only = false; // bool | Import order and leave in not processed state
$label_url = false; // bool | Generate labels as URL (for internal use only)
$dry_run = false; // bool | Do not save results to database
$printer_key = "printer_key_example"; // string | Id of printer used to process order

try {
    $result = $apiInstance->createShipment($body, $duplicate_handling, $error_label_mode, $label_pdf_conversion, $label_preference, $no_lock, $import_only, $label_url, $dry_run, $printer_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Fulfillment\StraightShip\Client\Model\InputOrder**](../Model/InputOrder.md)| Shipment  to create |
 **duplicate_handling** | **string**| Duplicate handling ( by transaction number)              0 - Exception on duplicate (default)              1 - Allow duplicates if not closed              2 - Overwrite if duplicate not closed              3 - System reserved for internal use              4 - Overwrite if duplicate not in processed state              5 - Return existing label if processed, otherwise overwrite | [optional] [default to Exception]
 **error_label_mode** | **string**| Error label modeL 0 - None, 1 - PDF, 2 - ZPL | [optional] [default to None]
 **label_pdf_conversion** | **string**| Label pdf conversion: 0 - Default, 1 - Enabled, 2 - Disabled | [optional] [default to Default]
 **label_preference** | **string**| Label preference (support depends on carrier): 0 - ZPL, 1 - PDF, 2 - AZPL, 3 - BZPL, 4 - EPL, 5 - DPL, 6 - PDF | [optional]
 **no_lock** | **bool**| Do not use distributed locking for duplicate check (if used, duplicate check should be done by calling system) | [optional] [default to false]
 **import_only** | **bool**| Import order and leave in not processed state | [optional] [default to false]
 **label_url** | **bool**| Generate labels as URL (for internal use only) | [optional] [default to false]
 **dry_run** | **bool**| Do not save results to database | [optional] [default to false]
 **printer_key** | **string**| Id of printer used to process order | [optional]

### Return type

[**Fulfillment\StraightShip\Client\Model\CreateLabelResult**](../Model/CreateLabelResult.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> Fulfillment\StraightShip\Client\Model\VoidShipmentResult delete($shipment_id, $leave_as_open)

Delete shipment

Void labels and deletes shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-api-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');// Configure API key authorization: x-secret-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-key', 'Bearer');

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 56; // int | Shipment id returned from create order call
$leave_as_open = false; // bool | 

try {
    $result = $apiInstance->delete($shipment_id, $leave_as_open);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**| Shipment id returned from create order call |
 **leave_as_open** | **bool**|  | [optional] [default to false]

### Return type

[**Fulfillment\StraightShip\Client\Model\VoidShipmentResult**](../Model/VoidShipmentResult.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **estimateShipment**
> Fulfillment\StraightShip\Client\Model\RatesResult estimateShipment($body, $duplicate_handling, $no_lock)

Create shipment

Create and process shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-api-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');// Configure API key authorization: x-secret-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-key', 'Bearer');

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new Fulfillment\StraightShip\Client\Model\InputOrder(); // Fulfillment\StraightShip\Client\Model\InputOrder | Shipment  to create
$duplicate_handling = "Exception"; // string | Duplicate handling ( by transaction number)              0 - Exception on duplicate (default)              1 - Allow duplicates if not closed              2 - Overwrite if duplicate not closed              3 - System reserved for internal use              4 - Overwrite if duplicate not in processed state              5 - Return existing label if processed, otherwise overwrite
$no_lock = false; // bool | Do not use distributed locking for duplicate check (if used, duplicate check should be done by calling system)

try {
    $result = $apiInstance->estimateShipment($body, $duplicate_handling, $no_lock);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->estimateShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Fulfillment\StraightShip\Client\Model\InputOrder**](../Model/InputOrder.md)| Shipment  to create |
 **duplicate_handling** | **string**| Duplicate handling ( by transaction number)              0 - Exception on duplicate (default)              1 - Allow duplicates if not closed              2 - Overwrite if duplicate not closed              3 - System reserved for internal use              4 - Overwrite if duplicate not in processed state              5 - Return existing label if processed, otherwise overwrite | [optional] [default to Exception]
 **no_lock** | **bool**| Do not use distributed locking for duplicate check (if used, duplicate check should be done by calling system) | [optional] [default to false]

### Return type

[**Fulfillment\StraightShip\Client\Model\RatesResult**](../Model/RatesResult.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShipment**
> Fulfillment\StraightShip\Client\Model\Order getShipment($shipment_id, $label_pdf_conversion, $label_preference, $fetch_optional_documents)

Get shipment

Retrieve shipment details and label

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-api-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');// Configure API key authorization: x-secret-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-key', 'Bearer');

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 56; // int | Order id returned from create order call
$label_pdf_conversion = "Default"; // string | Label pdf conversion
$label_preference = "label_preference_example"; // string | Label preference
$fetch_optional_documents = false; // bool | Fetch optional documents

try {
    $result = $apiInstance->getShipment($shipment_id, $label_pdf_conversion, $label_preference, $fetch_optional_documents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**| Order id returned from create order call |
 **label_pdf_conversion** | **string**| Label pdf conversion | [optional] [default to Default]
 **label_preference** | **string**| Label preference | [optional]
 **fetch_optional_documents** | **bool**| Fetch optional documents | [optional] [default to false]

### Return type

[**Fulfillment\StraightShip\Client\Model\Order**](../Model/Order.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importAndProcess**
> Fulfillment\StraightShip\Client\Model\Order importAndProcess($mode, $search_value, $label_pdf_conversion, $client_box_id, $apply_client_box, $apply_client_box_content_weight, $batch_number, $printer_key, $label_preference, $command, $reimport, $no_lock)

Import shipment

Imports shipment data for linked system and processes shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-api-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');// Configure API key authorization: x-secret-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-key', 'Bearer');

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mode = "mode_example"; // string | Import mode
$search_value = "search_value_example"; // string | Value to search
$label_pdf_conversion = "Default"; // string | Label pdf conversion
$client_box_id = 56; // int | Client box id to apply
$apply_client_box = true; // bool | 
$apply_client_box_content_weight = false; // bool | 
$batch_number = "batch_number_example"; // string | 
$printer_key = "printer_key_example"; // string | Printer key to schedule for printing
$label_preference = "label_preference_example"; // string | 
$command = "command_example"; // string | Process command (default ImportAndProcess)
$reimport = false; // bool | 
$no_lock = false; // bool | Do not use distributed locking for duplicate check (if used, duplicate check should be done by calling system)

try {
    $result = $apiInstance->importAndProcess($mode, $search_value, $label_pdf_conversion, $client_box_id, $apply_client_box, $apply_client_box_content_weight, $batch_number, $printer_key, $label_preference, $command, $reimport, $no_lock);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->importAndProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mode** | **string**| Import mode |
 **search_value** | **string**| Value to search |
 **label_pdf_conversion** | **string**| Label pdf conversion | [optional] [default to Default]
 **client_box_id** | **int**| Client box id to apply | [optional]
 **apply_client_box** | **bool**|  | [optional] [default to true]
 **apply_client_box_content_weight** | **bool**|  | [optional] [default to false]
 **batch_number** | **string**|  | [optional]
 **printer_key** | **string**| Printer key to schedule for printing | [optional]
 **label_preference** | **string**|  | [optional]
 **command** | **string**| Process command (default ImportAndProcess) | [optional]
 **reimport** | **bool**|  | [optional] [default to false]
 **no_lock** | **bool**| Do not use distributed locking for duplicate check (if used, duplicate check should be done by calling system) | [optional] [default to false]

### Return type

[**Fulfillment\StraightShip\Client\Model\Order**](../Model/Order.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listShipment**
> Fulfillment\StraightShip\Client\Model\Order[] listShipment($start_date, $end_date, $date_type, $client_code, $carrier_code, $transaction_number, $tracking_number, $customer_order, $customer_po, $batch_number, $status, $page_index, $items_per_page)

List shipments

Retrieve shipment info.  This method is intended to retrieve list of basic shipment info, and does not return shipment labels and some details.  To get labels, use methods which returns individual shipment by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-api-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');// Configure API key authorization: x-secret-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-key', 'Bearer');

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = "start_date_example"; // string | Start date
$end_date = "end_date_example"; // string | End date
$date_type = "date_type_example"; // string | Date type: ProcessedOn (default), CreatedOn, ShipDate
$client_code = "client_code_example"; // string | Client code
$carrier_code = "carrier_code_example"; // string | Carrier code
$transaction_number = "transaction_number_example"; // string | Transaction number
$tracking_number = "tracking_number_example"; // string | Tracking number
$customer_order = "customer_order_example"; // string | Customer order
$customer_po = "customer_po_example"; // string | Customer po
$batch_number = "batch_number_example"; // string | Batch number
$status = "status_example"; // string | 
$page_index = 0; // int | Zero-based page index
$items_per_page = 1000; // int | Shipment count per page (up to 1000)

try {
    $result = $apiInstance->listShipment($start_date, $end_date, $date_type, $client_code, $carrier_code, $transaction_number, $tracking_number, $customer_order, $customer_po, $batch_number, $status, $page_index, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->listShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Start date | [optional]
 **end_date** | **string**| End date | [optional]
 **date_type** | **string**| Date type: ProcessedOn (default), CreatedOn, ShipDate | [optional]
 **client_code** | **string**| Client code | [optional]
 **carrier_code** | **string**| Carrier code | [optional]
 **transaction_number** | **string**| Transaction number | [optional]
 **tracking_number** | **string**| Tracking number | [optional]
 **customer_order** | **string**| Customer order | [optional]
 **customer_po** | **string**| Customer po | [optional]
 **batch_number** | **string**| Batch number | [optional]
 **status** | **string**|  | [optional]
 **page_index** | **int**| Zero-based page index | [optional] [default to 0]
 **items_per_page** | **int**| Shipment count per page (up to 1000) | [optional] [default to 1000]

### Return type

[**Fulfillment\StraightShip\Client\Model\Order[]**](../Model/Order.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trigger**
> Fulfillment\StraightShip\Client\Model\OperationResult trigger($shipment_id)

Triggers WMS callback

Triggers WMS callback

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-api-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');// Configure API key authorization: x-secret-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-key', 'Bearer');

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 56; // int | Order id returned from create order call

try {
    $result = $apiInstance->trigger($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->trigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**| Order id returned from create order call |

### Return type

[**Fulfillment\StraightShip\Client\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShipment**
> Fulfillment\StraightShip\Client\Model\Order updateShipment($body, $shipment_id)

Update shipment

Update shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-api-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');// Configure API key authorization: x-secret-key
$config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKey('x-secret-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = namespace Fulfillment\StraightShip\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-secret-key', 'Bearer');

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new Fulfillment\StraightShip\Client\Model\InputOrder(); // Fulfillment\StraightShip\Client\Model\InputOrder | Shipment to update
$shipment_id = 56; // int | Shipment id

try {
    $result = $apiInstance->updateShipment($body, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->updateShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Fulfillment\StraightShip\Client\Model\InputOrder**](../Model/InputOrder.md)| Shipment to update |
 **shipment_id** | **int**| Shipment id |

### Return type

[**Fulfillment\StraightShip\Client\Model\Order**](../Model/Order.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

