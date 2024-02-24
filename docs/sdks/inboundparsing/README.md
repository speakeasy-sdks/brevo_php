# InboundParsing


### Available Operations

* [getInboundEmailAttachment](#getinboundemailattachment) - Retrieve inbound attachment with download token.
* [getInboundEmailEvents](#getinboundemailevents) - Get the list of all the events for the received emails.
* [getInboundEmailEventsByUuid](#getinboundemaileventsbyuuid) - Fetch all events history for one particular received email.

## getInboundEmailAttachment

This endpoint will retrieve inbound attachment with download token.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetInboundEmailAttachmentRequest();
    $request->downloadToken = '<value>';;

    $response = $sdk->inboundParsing->getInboundEmailAttachment($request);

    if ($response->bytes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\test\BREVO\Models\Operations\GetInboundEmailAttachmentRequest](../../Models/Operations/GetInboundEmailAttachmentRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetInboundEmailAttachmentResponse](../../Models/Operations/GetInboundEmailAttachmentResponse.md)**


## getInboundEmailEvents

This endpoint will show the list of all the events for the received emails.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetInboundEmailEventsRequest();
    $request->endDate = '<value>';
    $request->limit = 717459;
    $request->offset = 401477;
    $request->sender = '<value>';
    $request->sort = Operations\GetInboundEmailEventsQueryParamSort::Desc;
    $request->startDate = '<value>';;

    $response = $sdk->inboundParsing->getInboundEmailEvents($request);

    if ($response->getInboundEmailEvents !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\GetInboundEmailEventsRequest](../../Models/Operations/GetInboundEmailEventsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetInboundEmailEventsResponse](../../Models/Operations/GetInboundEmailEventsResponse.md)**


## getInboundEmailEventsByUuid

This endpoint will show the list of all events history for one particular received email.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetInboundEmailEventsByUuidRequest();
    $request->uuid = '0b78133b-5346-4c5c-9f06-f4b3166b05d6';;

    $response = $sdk->inboundParsing->getInboundEmailEventsByUuid($request);

    if ($response->getInboundEmailEventsByUuid !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\test\BREVO\Models\Operations\GetInboundEmailEventsByUuidRequest](../../Models/Operations/GetInboundEmailEventsByUuidRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetInboundEmailEventsByUuidResponse](../../Models/Operations/GetInboundEmailEventsByUuidResponse.md)**

