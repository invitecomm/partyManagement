# Swagger\Client\OrganizationApi

All URIs are relative to *http://env-0693795.jelastic.servint.net/DSPartyManagement/api/partyManagement/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationCreate**](OrganizationApi.md#organizationCreate) | **POST** /organization | organizationCreate
[**organizationFind**](OrganizationApi.md#organizationFind) | **GET** /organization | organizationFind
[**organizationGet**](OrganizationApi.md#organizationGet) | **GET** /organization/{organizationId} | organizationGet
[**organizationPatch**](OrganizationApi.md#organizationPatch) | **PATCH** /organization/{organizationId} | organizationPatch
[**organizationUpdate**](OrganizationApi.md#organizationUpdate) | **PUT** /organization/{organizationId} | organizationUpdate


# **organizationCreate**
> \Swagger\Client\Model\Organization organizationCreate($organization)

organizationCreate



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization = new \Swagger\Client\Model\Organization(); // \Swagger\Client\Model\Organization | 

try {
    $result = $apiInstance->organizationCreate($organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | [**\Swagger\Client\Model\Organization**](../Model/Organization.md)|  |

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationFind**
> \Swagger\Client\Model\Organization[] organizationFind($fields)

organizationFind



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->organizationFind($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Organization[]**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationGet**
> \Swagger\Client\Model\Organization organizationGet($organization_id, $fields)

organizationGet



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->organizationGet($organization_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationPatch**
> \Swagger\Client\Model\Organization organizationPatch($organization_id, $organization)

organizationPatch



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$organization = new \Swagger\Client\Model\Organization(); // \Swagger\Client\Model\Organization | 

try {
    $result = $apiInstance->organizationPatch($organization_id, $organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **organization** | [**\Swagger\Client\Model\Organization**](../Model/Organization.md)|  |

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationUpdate**
> \Swagger\Client\Model\Organization organizationUpdate($organization_id, $organization)

organizationUpdate



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$organization = new \Swagger\Client\Model\Organization(); // \Swagger\Client\Model\Organization | 

try {
    $result = $apiInstance->organizationUpdate($organization_id, $organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **organization** | [**\Swagger\Client\Model\Organization**](../Model/Organization.md)|  |

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

