# namespace Fulfillment\StraightShip\Client\MiddleMileApi

All URIs are relative to *https://api-us.techship.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**setContainerId**](MiddleMileApi.md#setcontainerid) | **PUT** /api/v3/middlemile/setcontainerid | Set container for shipment by tracking number

# **setContainerId**
> Fulfillment\StraightShip\Client\Model\MiddleMileContainerIdUpdateResponse setContainerId($body)

Set container for shipment by tracking number

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\MiddleMileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new Fulfillment\StraightShip\Client\Model\MiddleMileContainerIdUpdateRequest(); // Fulfillment\StraightShip\Client\Model\MiddleMileContainerIdUpdateRequest | 

try {
    $result = $apiInstance->setContainerId($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiddleMileApi->setContainerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Fulfillment\StraightShip\Client\Model\MiddleMileContainerIdUpdateRequest**](../Model/MiddleMileContainerIdUpdateRequest.md)|  |

### Return type

[**Fulfillment\StraightShip\Client\Model\MiddleMileContainerIdUpdateResponse**](../Model/MiddleMileContainerIdUpdateResponse.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

