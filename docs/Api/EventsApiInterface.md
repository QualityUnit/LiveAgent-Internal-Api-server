# Qu\LaInternalApiServer\Api\EventsApiInterface

All URIs are relative to *http://localhost/public/api/internal*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeHandler**](EventsApiInterface.md#executeHandler) | **POST** /handlers | Execute event handlers
[**getEventConsumers**](EventsApiInterface.md#getEventConsumers) | **GET** /handlers | Get event consumer definitions


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\EventsApi:
        tags:
            - { name: "live_agent_internal_api_server.api", api: "events" }
    # ...
```

## **executeHandler**
> executeHandler($handlerPayload)

Execute event handlers

Execute event handler by handler ID

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EventsApiInterface.php

namespace Acme\MyBundle\Api;

use Qu\LaInternalApiServer\Api\EventsApiInterface;

class EventsApi implements EventsApiInterface
{

    // ...

    /**
     * Implementation of EventsApiInterface#executeHandler
     */
    public function executeHandler(?HandlerPayload $handlerPayload, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handlerPayload** | [**Qu\LaInternalApiServer\Model\HandlerPayload**](../Model/HandlerPayload.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getEventConsumers**
> Qu\LaInternalApiServer\Model\Consumer getEventConsumers()

Get event consumer definitions

Consumer is defined by unique ID and list of event IDs it consumes

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EventsApiInterface.php

namespace Acme\MyBundle\Api;

use Qu\LaInternalApiServer\Api\EventsApiInterface;

class EventsApi implements EventsApiInterface
{

    // ...

    /**
     * Implementation of EventsApiInterface#getEventConsumers
     */
    public function getEventConsumers(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Qu\LaInternalApiServer\Model\Consumer**](../Model/Consumer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

