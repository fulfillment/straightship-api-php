# namespace Fulfillment\StraightShip\Client\ClientsApi

All URIs are relative to *https://api-us.techship.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listClients**](ClientsApi.md#listclients) | **GET** /api/v3/clients | List clients
[**listPrinters**](ClientsApi.md#listprinters) | **GET** /api/v3/miscellaneous/printers | List clients

# **listClients**
> Fulfillment\StraightShip\Client\Model\Client[] listClients($client_code, $client_name, $include_accounts, $page_index, $items_per_page)

List clients

Retrieve clients

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_code = "client_code_example"; // string | Client code
$client_name = "client_name_example"; // string | Client name
$include_accounts = false; // bool | 
$page_index = 0; // int | Zero-based page index
$items_per_page = 1000; // int | Count per page (up to 1000)

try {
    $result = $apiInstance->listClients($client_code, $client_name, $include_accounts, $page_index, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->listClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_code** | **string**| Client code | [optional]
 **client_name** | **string**| Client name | [optional]
 **include_accounts** | **bool**|  | [optional] [default to false]
 **page_index** | **int**| Zero-based page index | [optional] [default to 0]
 **items_per_page** | **int**| Count per page (up to 1000) | [optional] [default to 1000]

### Return type

[**Fulfillment\StraightShip\Client\Model\Client[]**](../Model/Client.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPrinters**
> Fulfillment\StraightShip\Client\Model\Printer[] listPrinters()

List clients

Retrieve clients

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPrinters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->listPrinters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Fulfillment\StraightShip\Client\Model\Printer[]**](../Model/Printer.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

