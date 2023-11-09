# Conversations


### Available Operations

* [deleteConversationsMessagesId](#deleteconversationsmessagesid) - Delete a message sent by an agent
* [deleteConversationsPushedMessagesId](#deleteconversationspushedmessagesid) - Delete an automated message
* [getConversationsMessagesId](#getconversationsmessagesid) - Get a message
* [getConversationsPushedMessagesId](#getconversationspushedmessagesid) - Get an automated message
* [postConversationsAgentOnlinePing](#postconversationsagentonlineping) - Sets agent’s status to online for 2-3 minutes
* [postConversationsMessages](#postconversationsmessages) - Send a message as an agent
* [postConversationsPushedMessages](#postconversationspushedmessages) - Send an automated message to a visitor
* [putConversationsMessagesId](#putconversationsmessagesid) - Update a message sent by an agent
* [putConversationsPushedMessagesId](#putconversationspushedmessagesid) - Update an automated message

## deleteConversationsMessagesId

Only agents’ messages can be deleted.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\DeleteConversationsMessagesIdRequest();
    $request->id = '<ID>';

    $response = $sdk->conversations->deleteConversationsMessagesId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\test\BREVO\Models\Operations\DeleteConversationsMessagesIdRequest](../../Models/Operations/DeleteConversationsMessagesIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\test\BREVO\Models\Operations\DeleteConversationsMessagesIdResponse](../../Models/Operations/DeleteConversationsMessagesIdResponse.md)**


## deleteConversationsPushedMessagesId

Delete an automated message

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\DeleteConversationsPushedMessagesIdRequest();
    $request->id = '<ID>';

    $response = $sdk->conversations->deleteConversationsPushedMessagesId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\test\BREVO\Models\Operations\DeleteConversationsPushedMessagesIdRequest](../../Models/Operations/DeleteConversationsPushedMessagesIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\test\BREVO\Models\Operations\DeleteConversationsPushedMessagesIdResponse](../../Models/Operations/DeleteConversationsPushedMessagesIdResponse.md)**


## getConversationsMessagesId

Get a message

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetConversationsMessagesIdRequest();
    $request->id = '<ID>';

    $response = $sdk->conversations->getConversationsMessagesId($request);

    if ($response->conversationsMessage !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\test\BREVO\Models\Operations\GetConversationsMessagesIdRequest](../../Models/Operations/GetConversationsMessagesIdRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\test\BREVO\Models\Operations\GetConversationsMessagesIdResponse](../../Models/Operations/GetConversationsMessagesIdResponse.md)**


## getConversationsPushedMessagesId

Get an automated message

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetConversationsPushedMessagesIdRequest();
    $request->id = '<ID>';

    $response = $sdk->conversations->getConversationsPushedMessagesId($request);

    if ($response->conversationsMessage !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\test\BREVO\Models\Operations\GetConversationsPushedMessagesIdRequest](../../Models/Operations/GetConversationsPushedMessagesIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetConversationsPushedMessagesIdResponse](../../Models/Operations/GetConversationsPushedMessagesIdResponse.md)**


## postConversationsAgentOnlinePing

We recommend pinging this endpoint every minute for as long as the agent has to be considered online.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PostConversationsAgentOnlinePingRequestBody();
    $request->agentEmail = 'string';
    $request->agentId = 'string';
    $request->agentName = 'string';
    $request->receivedFrom = 'string';

    $response = $sdk->conversations->postConversationsAgentOnlinePing($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\test\BREVO\Models\Operations\PostConversationsAgentOnlinePingRequestBody](../../Models/Operations/PostConversationsAgentOnlinePingRequestBody.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\test\BREVO\Models\Operations\PostConversationsAgentOnlinePingResponse](../../Models/Operations/PostConversationsAgentOnlinePingResponse.md)**


## postConversationsMessages

Send a message as an agent

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PostConversationsMessagesRequestBody();
    $request->agentEmail = 'string';
    $request->agentId = 'string';
    $request->agentName = 'string';
    $request->receivedFrom = 'string';
    $request->text = 'string';
    $request->visitorId = 'string';

    $response = $sdk->conversations->postConversationsMessages($request);

    if ($response->conversationsMessage !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\test\BREVO\Models\Operations\PostConversationsMessagesRequestBody](../../Models/Operations/PostConversationsMessagesRequestBody.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\test\BREVO\Models\Operations\PostConversationsMessagesResponse](../../Models/Operations/PostConversationsMessagesResponse.md)**


## postConversationsPushedMessages

Example of automated messages: order status, announce new features in your web app, etc.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PostConversationsPushedMessagesRequestBody();
    $request->agentId = 'string';
    $request->groupId = 'string';
    $request->text = 'string';
    $request->visitorId = 'string';

    $response = $sdk->conversations->postConversationsPushedMessages($request);

    if ($response->conversationsMessage !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\test\BREVO\Models\Operations\PostConversationsPushedMessagesRequestBody](../../Models/Operations/PostConversationsPushedMessagesRequestBody.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\test\BREVO\Models\Operations\PostConversationsPushedMessagesResponse](../../Models/Operations/PostConversationsPushedMessagesResponse.md)**


## putConversationsMessagesId

Only agents’ messages can be edited.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PutConversationsMessagesIdRequest();
    $request->requestBody = new Operations\PutConversationsMessagesIdRequestBody();
    $request->requestBody->text = 'string';
    $request->id = '<ID>';

    $response = $sdk->conversations->putConversationsMessagesId($request);

    if ($response->conversationsMessage !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\test\BREVO\Models\Operations\PutConversationsMessagesIdRequest](../../Models/Operations/PutConversationsMessagesIdRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\test\BREVO\Models\Operations\PutConversationsMessagesIdResponse](../../Models/Operations/PutConversationsMessagesIdResponse.md)**


## putConversationsPushedMessagesId

Update an automated message

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PutConversationsPushedMessagesIdRequest();
    $request->requestBody = new Operations\PutConversationsPushedMessagesIdRequestBody();
    $request->requestBody->text = 'string';
    $request->id = '<ID>';

    $response = $sdk->conversations->putConversationsPushedMessagesId($request);

    if ($response->conversationsMessage !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\test\BREVO\Models\Operations\PutConversationsPushedMessagesIdRequest](../../Models/Operations/PutConversationsPushedMessagesIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\test\BREVO\Models\Operations\PutConversationsPushedMessagesIdResponse](../../Models/Operations/PutConversationsPushedMessagesIdResponse.md)**

