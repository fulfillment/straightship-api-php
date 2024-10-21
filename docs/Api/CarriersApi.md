# namespace Fulfillment\StraightShip\Client\CarriersApi

All URIs are relative to *https://api-us.techship.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCarriers**](CarriersApi.md#listcarriers) | **GET** /api/v3/carriers | List carriers

# **listCarriers**
> Fulfillment\StraightShip\Client\Model\Carrier[] listCarriers($carrier_code, $client_code, $carrier_id, $include_services, $include_accounts, $page_index, $items_per_page)

List carriers

Retrieve carriers

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier_code = "carrier_code_example"; // string | 
$client_code = "client_code_example"; // string | 
$carrier_id = 56; // int | 
$include_services = false; // bool | Include services
$include_accounts = false; // bool | 
$page_index = 0; // int | 
$items_per_page = 1000; // int | 

try {
    $result = $apiInstance->listCarriers($carrier_code, $client_code, $carrier_id, $include_services, $include_accounts, $page_index, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->listCarriers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**|  | [optional]
 **client_code** | **string**|  | [optional]
 **carrier_id** | **int**|  | [optional]
 **include_services** | **bool**| Include services | [optional] [default to false]
 **include_accounts** | **bool**|  | [optional] [default to false]
 **page_index** | **int**|  | [optional] [default to 0]
 **items_per_page** | **int**|  | [optional] [default to 1000]

### Return type

[**Fulfillment\StraightShip\Client\Model\Carrier[]**](../Model/Carrier.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

