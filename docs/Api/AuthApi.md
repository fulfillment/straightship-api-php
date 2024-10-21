# namespace Fulfillment\StraightShip\Client\AuthApi

All URIs are relative to *https://api-us.techship.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPermissions**](AuthApi.md#getpermissions) | **POST** /api/v3/auth/permissions | Get permissions
[**login**](AuthApi.md#login) | **POST** /api/v3/auth/login | Login
[**refreshToken**](AuthApi.md#refreshtoken) | **POST** /api/v3/auth/refreshtoken | Desktop login, exchange refresh token for token
[**token**](AuthApi.md#token) | **POST** /api/v3/auth/token | Desktop login, exchange uid for token

# **getPermissions**
> Fulfillment\StraightShip\Client\Model\Permissions[] getPermissions()

Get permissions

This method is for internal use only

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Fulfillment\StraightShip\Client\Model\Permissions[]**](../Model/Permissions.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **login**
> login()

Login

This method can be used to  validates your api keys  You do not need to call it because api keys needs to be supplied on each request

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->login();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshToken**
> Fulfillment\StraightShip\Client\Model\Token[] refreshToken($refresh_token)

Desktop login, exchange refresh token for token

This method is for internal use only

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refresh_token = "refresh_token_example"; // string | 

try {
    $result = $apiInstance->refreshToken($refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->refreshToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_token** | **string**|  |

### Return type

[**Fulfillment\StraightShip\Client\Model\Token[]**](../Model/Token.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **token**
> Fulfillment\StraightShip\Client\Model\Token[] token($uid)

Desktop login, exchange uid for token

This method is for internal use only

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

$apiInstance = new namespace Fulfillment\StraightShip\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = "uid_example"; // string | 

try {
    $result = $apiInstance->token($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->token: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |

### Return type

[**Fulfillment\StraightShip\Client\Model\Token[]**](../Model/Token.md)

### Authorization

[x-api-key](../../README.md#x-api-key), [x-secret-key](../../README.md#x-secret-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

