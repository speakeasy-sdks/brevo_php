# Conversations
(*conversations*)

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

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteConversationsMessagesIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteConversationsMessagesIdRequest();
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
| `$request`                                                                                                                            | [\test\BREVO\Models\Operations\DeleteConversationsMessagesIdRequest](../../models/operations/DeleteConversationsMessagesIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\test\BREVO\Models\Operations\DeleteConversationsMessagesIdResponse](../../models/operations/DeleteConversationsMessagesIdResponse.md)**


## deleteConversationsPushedMessagesId

Delete an automated message

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteConversationsPushedMessagesIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteConversationsPushedMessagesIdRequest();
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
| `$request`                                                                                                                                        | [\test\BREVO\Models\Operations\DeleteConversationsPushedMessagesIdRequest](../../models/operations/DeleteConversationsPushedMessagesIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\test\BREVO\Models\Operations\DeleteConversationsPushedMessagesIdResponse](../../models/operations/DeleteConversationsPushedMessagesIdResponse.md)**


## getConversationsMessagesId

Get a message

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetConversationsMessagesIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetConversationsMessagesIdRequest();
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
| `$request`                                                                                                                      | [\test\BREVO\Models\Operations\GetConversationsMessagesIdRequest](../../models/operations/GetConversationsMessagesIdRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\test\BREVO\Models\Operations\GetConversationsMessagesIdResponse](../../models/operations/GetConversationsMessagesIdResponse.md)**


## getConversationsPushedMessagesId

Get an automated message

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetConversationsPushedMessagesIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetConversationsPushedMessagesIdRequest();
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
| `$request`                                                                                                                                  | [\test\BREVO\Models\Operations\GetConversationsPushedMessagesIdRequest](../../models/operations/GetConversationsPushedMessagesIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetConversationsPushedMessagesIdResponse](../../models/operations/GetConversationsPushedMessagesIdResponse.md)**


## postConversationsAgentOnlinePing

We recommend pinging this endpoint every minute for as long as the agent has to be considered online.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PostConversationsAgentOnlinePingRequestBody;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostConversationsAgentOnlinePingRequestBody();
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
| `$request`                                                                                                                                          | [\test\BREVO\Models\Operations\PostConversationsAgentOnlinePingRequestBody](../../models/operations/PostConversationsAgentOnlinePingRequestBody.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\test\BREVO\Models\Operations\PostConversationsAgentOnlinePingResponse](../../models/operations/PostConversationsAgentOnlinePingResponse.md)**


## postConversationsMessages

Send a message as an agent

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PostConversationsMessagesRequestBody;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostConversationsMessagesRequestBody();
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
| `$request`                                                                                                                            | [\test\BREVO\Models\Operations\PostConversationsMessagesRequestBody](../../models/operations/PostConversationsMessagesRequestBody.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\test\BREVO\Models\Operations\PostConversationsMessagesResponse](../../models/operations/PostConversationsMessagesResponse.md)**


## postConversationsPushedMessages

Example of automated messages: order status, announce new features in your web app, etc.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PostConversationsPushedMessagesRequestBody;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostConversationsPushedMessagesRequestBody();
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
| `$request`                                                                                                                                        | [\test\BREVO\Models\Operations\PostConversationsPushedMessagesRequestBody](../../models/operations/PostConversationsPushedMessagesRequestBody.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\test\BREVO\Models\Operations\PostConversationsPushedMessagesResponse](../../models/operations/PostConversationsPushedMessagesResponse.md)**


## putConversationsMessagesId

Only agents’ messages can be edited.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PutConversationsMessagesIdRequest;
use \test\BREVO\Models\Operations\PutConversationsMessagesIdRequestBody;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutConversationsMessagesIdRequest();
    $request->requestBody = new PutConversationsMessagesIdRequestBody();
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
| `$request`                                                                                                                      | [\test\BREVO\Models\Operations\PutConversationsMessagesIdRequest](../../models/operations/PutConversationsMessagesIdRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\test\BREVO\Models\Operations\PutConversationsMessagesIdResponse](../../models/operations/PutConversationsMessagesIdResponse.md)**


## putConversationsPushedMessagesId

Update an automated message

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PutConversationsPushedMessagesIdRequest;
use \test\BREVO\Models\Operations\PutConversationsPushedMessagesIdRequestBody;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutConversationsPushedMessagesIdRequest();
    $request->requestBody = new PutConversationsPushedMessagesIdRequestBody();
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
| `$request`                                                                                                                                  | [\test\BREVO\Models\Operations\PutConversationsPushedMessagesIdRequest](../../models/operations/PutConversationsPushedMessagesIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\test\BREVO\Models\Operations\PutConversationsPushedMessagesIdResponse](../../models/operations/PutConversationsPushedMessagesIdResponse.md)**

