# namespace Fulfillment\StraightShip\Client\ManifestsApi

All URIs are relative to *https://api-us.techship.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**finalizeManifest**](ManifestsApi.md#finalizemanifest) | **POST** /api/v3/manifests/finalize/{manifestId} | Finalize manifest
[**getManifest**](ManifestsApi.md#getmanifest) | **GET** /api/v3/manifests/{manifestId} | Get manifest
[**listTrackingNumbers**](ManifestsApi.md#listtrackingnumbers) | **GET** /api/v3/manifests/listtrackingnumbers/{manifestId} | Get manifest tracking numbers
[**searchManifests**](ManifestsApi.md#searchmanifests) | **GET** /api/v3/manifests/search | Get manifest tracking numbers
[**validateTrackingNumber**](ManifestsApi.md#validatetrackingnumber) | **PUT** /api/v3/manifests/validatetrackingnumber | Validate tracking number
[**validateTrackingNumberExt**](ManifestsApi.md#validatetrackingnumberext) | **PUT** /api/v3/manifests/validatetrackingnumberext | Validate tracking number
[**validateTransaction**](ManifestsApi.md#validatetransaction) | **PUT** /api/v3/manifests/validatetransaction | Validate transaction

# **finalizeManifest**
> Fulfillment\StraightShip\Client\Model\Manifest finalizeManifest($manifest_id, $pars_number, $sync, $split_validated)

Finalize manifest

Finalize manifest synchronously or asynchronously

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manifest_id = "manifest_id_example"; // string | Manifest id
$pars_number = "pars_number_example"; // string | 
$sync = false; // bool | Synchronous finalize
$split_validated = false; // bool | Split validated

try {
    $result = $apiInstance->finalizeManifest($manifest_id, $pars_number, $sync, $split_validated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->finalizeManifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manifest_id** | **string**| Manifest id |
 **pars_number** | **string**|  | [optional]
 **sync** | **bool**| Synchronous finalize | [optional] [default to false]
 **split_validated** | **bool**| Split validated | [optional] [default to false]

### Return type

[**Fulfillment\StraightShip\Client\Model\Manifest**](../Model/Manifest.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManifest**
> Fulfillment\StraightShip\Client\Model\Manifest getManifest($manifest_id)

Get manifest

Retrieve manifest

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manifest_id = "manifest_id_example"; // string | Manifest id

try {
    $result = $apiInstance->getManifest($manifest_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->getManifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manifest_id** | **string**| Manifest id |

### Return type

[**Fulfillment\StraightShip\Client\Model\Manifest**](../Model/Manifest.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTrackingNumbers**
> Fulfillment\StraightShip\Client\Model\TrackingNumber[] listTrackingNumbers($manifest_id, $page_index, $page_size)

Get manifest tracking numbers

Retrieve manifest tracking numbers

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manifest_id = "manifest_id_example"; // string | Manifest id
$page_index = 56; // int | Page index, default 1
$page_size = 56; // int | Page size, default 100

try {
    $result = $apiInstance->listTrackingNumbers($manifest_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->listTrackingNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manifest_id** | **string**| Manifest id |
 **page_index** | **int**| Page index, default 1 |
 **page_size** | **int**| Page size, default 100 |

### Return type

[**Fulfillment\StraightShip\Client\Model\TrackingNumber[]**](../Model/TrackingNumber.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchManifests**
> Fulfillment\StraightShip\Client\Model\Manifest[] searchManifests($start_date_time, $end_date_time, $page_index, $page_size)

Get manifest tracking numbers

Retrieve manifest tracking numbers

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date_time = "start_date_time_example"; // string | Manifest close start date
$end_date_time = "end_date_time_example"; // string | Manifest close end date
$page_index = 56; // int | Page index, default 1
$page_size = 56; // int | Page size, default 100

try {
    $result = $apiInstance->searchManifests($start_date_time, $end_date_time, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->searchManifests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date_time** | **string**| Manifest close start date |
 **end_date_time** | **string**| Manifest close end date |
 **page_index** | **int**| Page index, default 1 |
 **page_size** | **int**| Page size, default 100 |

### Return type

[**Fulfillment\StraightShip\Client\Model\Manifest[]**](../Model/Manifest.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateTrackingNumber**
> bool validateTrackingNumber($manifest_id, $tracking_number)

Validate tracking number

This method is intended for internal use

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manifest_id = "manifest_id_example"; // string | Manifest id
$tracking_number = "tracking_number_example"; // string | Tracking number

try {
    $result = $apiInstance->validateTrackingNumber($manifest_id, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->validateTrackingNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manifest_id** | **string**| Manifest id |
 **tracking_number** | **string**| Tracking number |

### Return type

**bool**

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateTrackingNumberExt**
> Fulfillment\StraightShip\Client\Model\ValidateTrackingInfo validateTrackingNumberExt($manifest_id, $tracking_number)

Validate tracking number

This method is intended for internal use

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manifest_id = "manifest_id_example"; // string | Manifest id
$tracking_number = "tracking_number_example"; // string | Tracking number

try {
    $result = $apiInstance->validateTrackingNumberExt($manifest_id, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->validateTrackingNumberExt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manifest_id** | **string**| Manifest id |
 **tracking_number** | **string**| Tracking number |

### Return type

[**Fulfillment\StraightShip\Client\Model\ValidateTrackingInfo**](../Model/ValidateTrackingInfo.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateTransaction**
> bool validateTransaction($transaction_number, $manifest_id)

Validate transaction

This method is intended for internal use

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_number = "transaction_number_example"; // string | Tracking number
$manifest_id = "manifest_id_example"; // string | Manifest id, optional

try {
    $result = $apiInstance->validateTransaction($transaction_number, $manifest_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->validateTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_number** | **string**| Tracking number |
 **manifest_id** | **string**| Manifest id, optional | [optional]

### Return type

**bool**

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

