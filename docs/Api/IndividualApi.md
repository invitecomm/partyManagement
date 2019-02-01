# Swagger\Client\IndividualApi

All URIs are relative to *http://env-0693795.jelastic.servint.net/DSPartyManagement/api/partyManagement/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**individualCreate**](IndividualApi.md#individualCreate) | **POST** /individual | individualCreate
[**individualDelete**](IndividualApi.md#individualDelete) | **DELETE** /individual/{individualId} | individualDelete
[**individualFind**](IndividualApi.md#individualFind) | **GET** /individual | individualFind
[**individualGet**](IndividualApi.md#individualGet) | **GET** /individual/{individualId} | individualGet
[**individualPatch**](IndividualApi.md#individualPatch) | **PATCH** /individual/{individualId} | individualPatch
[**individualUpdate**](IndividualApi.md#individualUpdate) | **PUT** /individual/{individualId} | individualUpdate


# **individualCreate**
> \Swagger\Client\Model\Individual individualCreate($individual)

individualCreate



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IndividualApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$individual = new \Swagger\Client\Model\Individual(); // \Swagger\Client\Model\Individual | 

try {
    $result = $apiInstance->individualCreate($individual);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualApi->individualCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **individual** | [**\Swagger\Client\Model\Individual**](../Model/Individual.md)|  |

### Return type

[**\Swagger\Client\Model\Individual**](../Model/Individual.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **individualDelete**
> individualDelete($individual_id)

individualDelete



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IndividualApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$individual_id = "individual_id_example"; // string | 

try {
    $apiInstance->individualDelete($individual_id);
} catch (Exception $e) {
    echo 'Exception when calling IndividualApi->individualDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **individual_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **individualFind**
> \Swagger\Client\Model\Individual[] individualFind($fields)

individualFind



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IndividualApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->individualFind($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualApi->individualFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Individual[]**](../Model/Individual.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **individualGet**
> \Swagger\Client\Model\Individual individualGet($individual_id, $fields)

individualGet



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IndividualApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$individual_id = "individual_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->individualGet($individual_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualApi->individualGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **individual_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Individual**](../Model/Individual.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **individualPatch**
> \Swagger\Client\Model\Individual individualPatch($individual_id, $individual)

individualPatch



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IndividualApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$individual_id = "individual_id_example"; // string | 
$individual = new \Swagger\Client\Model\Individual(); // \Swagger\Client\Model\Individual | 

try {
    $result = $apiInstance->individualPatch($individual_id, $individual);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualApi->individualPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **individual_id** | **string**|  |
 **individual** | [**\Swagger\Client\Model\Individual**](../Model/Individual.md)|  |

### Return type

[**\Swagger\Client\Model\Individual**](../Model/Individual.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **individualUpdate**
> \Swagger\Client\Model\Individual individualUpdate($individual_id, $individual)

individualUpdate



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IndividualApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$individual_id = "individual_id_example"; // string | 
$individual = new \Swagger\Client\Model\Individual(); // \Swagger\Client\Model\Individual | 

try {
    $result = $apiInstance->individualUpdate($individual_id, $individual);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndividualApi->individualUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **individual_id** | **string**|  |
 **individual** | [**\Swagger\Client\Model\Individual**](../Model/Individual.md)|  |

### Return type

[**\Swagger\Client\Model\Individual**](../Model/Individual.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

