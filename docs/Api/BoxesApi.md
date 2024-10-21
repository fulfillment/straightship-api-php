# namespace Fulfillment\StraightShip\Client\BoxesApi

All URIs are relative to *https://api-us.techship.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listBoxes**](BoxesApi.md#listboxes) | **GET** /api/v3/boxes | List client boxes

# **listBoxes**
> Fulfillment\StraightShip\Client\Model\ClientBox[] listBoxes($client_code, $client_id, $page_index, $items_per_page)

List client boxes

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\BoxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_code = "client_code_example"; // string | Client code
$client_id = 56; // int | Client id
$page_index = 0; // int | Zero-based page index
$items_per_page = 1000; // int | Count per page (up to 1000)

try {
    $result = $apiInstance->listBoxes($client_code, $client_id, $page_index, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoxesApi->listBoxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_code** | **string**| Client code | [optional]
 **client_id** | **int**| Client id | [optional]
 **page_index** | **int**| Zero-based page index | [optional] [default to 0]
 **items_per_page** | **int**| Count per page (up to 1000) | [optional] [default to 1000]

### Return type

[**Fulfillment\StraightShip\Client\Model\ClientBox[]**](../Model/ClientBox.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

