# Swagger\Client\HubApi

All URIs are relative to *http://env-0693795.jelastic.servint.net/DSPartyManagement/api/partyManagement/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hubCreate**](HubApi.md#hubCreate) | **POST** /hub | hubCreate
[**hubDelete**](HubApi.md#hubDelete) | **DELETE** /hub/{hubId} | hubDelete
[**hubFind**](HubApi.md#hubFind) | **GET** /hub | hubFind
[**hubGet**](HubApi.md#hubGet) | **GET** /hub/{hubId} | hubGet


# **hubCreate**
> \Swagger\Client\Model\Hub hubCreate($hub)

hubCreate



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hub = new \Swagger\Client\Model\Hub(); // \Swagger\Client\Model\Hub | 

try {
    $result = $apiInstance->hubCreate($hub);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HubApi->hubCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hub** | [**\Swagger\Client\Model\Hub**](../Model/Hub.md)|  |

### Return type

[**\Swagger\Client\Model\Hub**](../Model/Hub.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hubDelete**
> hubDelete($hub_id)

hubDelete



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hub_id = "hub_id_example"; // string | 

try {
    $apiInstance->hubDelete($hub_id);
} catch (Exception $e) {
    echo 'Exception when calling HubApi->hubDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hub_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hubFind**
> \Swagger\Client\Model\Hub[] hubFind()

hubFind



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hubFind();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HubApi->hubFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Hub[]**](../Model/Hub.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hubGet**
> \Swagger\Client\Model\Hub hubGet($hub_id)

hubGet



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hub_id = "hub_id_example"; // string | 

try {
    $result = $apiInstance->hubGet($hub_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HubApi->hubGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hub_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Hub**](../Model/Hub.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

