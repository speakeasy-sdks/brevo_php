# conversations

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteConversationsMessagesIdRequest();
    $request->id = '59890afa-563e-4251-afe4-c8b711e5b7fd';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteConversationsPushedMessagesIdRequest();
    $request->id = '2ed02892-1cdd-4c69-a601-fb576b0d5f0d';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetConversationsMessagesIdRequest();
    $request->id = '30c5fbb2-5870-4532-82c7-3d5fe9b90c28';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetConversationsPushedMessagesIdRequest();
    $request->id = '909b3fe4-9a8d-49cb-b486-33323f9b77f3';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PostConversationsAgentOnlinePingRequestBody();
    $request->agentEmail = 'dolorum';
    $request->agentId = 'numquam';
    $request->agentName = 'veritatis';
    $request->receivedFrom = 'ipsa';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PostConversationsMessagesRequestBody();
    $request->agentEmail = 'ipsa';
    $request->agentId = 'iure';
    $request->agentName = 'odio';
    $request->receivedFrom = 'quaerat';
    $request->text = 'accusamus';
    $request->visitorId = 'quidem';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PostConversationsPushedMessagesRequestBody();
    $request->agentId = 'voluptatibus';
    $request->groupId = 'voluptas';
    $request->text = 'natus';
    $request->visitorId = 'eos';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PutConversationsMessagesIdRequest();
    $request->requestBody = new PutConversationsMessagesIdRequestBody();
    $request->requestBody->text = 'atque';
    $request->id = '0d1ba77a-89eb-4f73-bae4-203ce5e6a95d';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PutConversationsPushedMessagesIdRequest();
    $request->requestBody = new PutConversationsPushedMessagesIdRequestBody();
    $request->requestBody->text = 'totam';
    $request->id = 'a0d446ce-2af7-4a73-8f3b-e453f870b326';

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

