# Webhooks
(*webhooks*)

### Available Operations

* [createWebhook](#createwebhook) - Create a webhook
* [deleteWebhook](#deletewebhook) - Delete a webhook
* [exportWebhooksHistory](#exportwebhookshistory) - Export all transactional events
* [getWebhook](#getwebhook) - Get a webhook details
* [getWebhooks](#getwebhooks) - Get all webhooks
* [updateWebhook](#updatewebhook) - Update a webhook

## createWebhook

Create a webhook

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateWebhook;
use \test\BREVO\Models\Shared\CreateWebhookEvents;
use \test\BREVO\Models\Shared\CreateWebhookType;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateWebhook();
    $request->description = 'Webhook triggered on unsubscription';
    $request->domain = 'example.com';
    $request->events = [
        CreateWebhookEvents::Unsubscribed,
    ];
    $request->type = CreateWebhookType::Marketing;
    $request->url = 'http://requestb.in/173lyyx1';

    $response = $sdk->webhooks->createWebhook($request);

    if ($response->createModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                       | Type                                                                            | Required                                                                        | Description                                                                     |
| ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| `$request`                                                                      | [\test\BREVO\Models\Shared\CreateWebhook](../../models/shared/CreateWebhook.md) | :heavy_check_mark:                                                              | The request object to use for the request.                                      |


### Response

**[?\test\BREVO\Models\Operations\CreateWebhookResponse](../../models/operations/CreateWebhookResponse.md)**


## deleteWebhook

Delete a webhook

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteWebhookRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteWebhookRequest();
    $request->webhookId = 594215;

    $response = $sdk->webhooks->deleteWebhook($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\DeleteWebhookRequest](../../models/operations/DeleteWebhookRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\DeleteWebhookResponse](../../models/operations/DeleteWebhookResponse.md)**


## exportWebhooksHistory

This endpoint will submit a request to get the history of webhooks in the CSV file. The link to download that CSV file will send to the webhook link provided in notifyURL of the body payload.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new ExportWebhooksHistory();
    $request->days = 7;
    $request->email = 'example@brevo.com';
    $request->endDate = '2023-02-17';
    $request->event = ExportWebhooksHistoryEvent::Request;
    $request->messageId = <23befbae-1505-47a8-bd27-e30ef739f32c@fr.sib>;
    $request->notifyURL = 'https://brevo.com';
    $request->sort = 'desc';
    $request->startDate = '2023-02-13';
    $request->webhookId = 2345;

    $response = $sdk->webhooks->exportWebhooksHistory($request);

    if ($response->createdProcessId !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [mixed](../../models//.md)                 | :heavy_check_mark:                         | The request object to use for the request. |


### Response

**[?\test\BREVO\Models\Operations\ExportWebhooksHistoryResponse](../../models/operations/ExportWebhooksHistoryResponse.md)**


## getWebhook

Get a webhook details

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetWebhookRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetWebhookRequest();
    $request->webhookId = 841269;

    $response = $sdk->webhooks->getWebhook($request);

    if ($response->getWebhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\test\BREVO\Models\Operations\GetWebhookRequest](../../models/operations/GetWebhookRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\GetWebhookResponse](../../models/operations/GetWebhookResponse.md)**


## getWebhooks

Get all webhooks

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetWebhooksRequest;
use \test\BREVO\Models\Operations\GetWebhooksSort;
use \test\BREVO\Models\Operations\GetWebhooksType;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetWebhooksRequest();
    $request->sort = GetWebhooksSort::Asc;
    $request->type = GetWebhooksType::Marketing;

    $response = $sdk->webhooks->getWebhooks($request);

    if ($response->getWebhooks !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetWebhooksRequest](../../models/operations/GetWebhooksRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetWebhooksResponse](../../models/operations/GetWebhooksResponse.md)**


## updateWebhook

Update a webhook

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateWebhookRequest;
use \test\BREVO\Models\Shared\UpdateWebhook;
use \test\BREVO\Models\Shared\UpdateWebhookEvents;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UpdateWebhookRequest();
    $request->updateWebhook = new UpdateWebhook();
    $request->updateWebhook->description = 'Webhook triggered on contact hardbounce';
    $request->updateWebhook->domain = 'example.com';
    $request->updateWebhook->events = [
        UpdateWebhookEvents::HardBounce,
    ];
    $request->updateWebhook->url = 'http://requestb.in/173lyyx1';
    $request->webhookId = 520428;

    $response = $sdk->webhooks->updateWebhook($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\UpdateWebhookRequest](../../models/operations/UpdateWebhookRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\UpdateWebhookResponse](../../models/operations/UpdateWebhookResponse.md)**

