# InboundParsing
(*inboundParsing*)

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
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetInboundEmailAttachmentRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetInboundEmailAttachmentRequest();
    $request->downloadToken = 'string';

    $response = $sdk->inboundParsing->getInboundEmailAttachment($request);

    if ($response->getInboundEmailAttachment200ApplicationOctetStreamBinaryString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\test\BREVO\Models\Operations\GetInboundEmailAttachmentRequest](../../models/operations/GetInboundEmailAttachmentRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetInboundEmailAttachmentResponse](../../models/operations/GetInboundEmailAttachmentResponse.md)**


## getInboundEmailEvents

This endpoint will show the list of all the events for the received emails.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetInboundEmailEventsRequest;
use \test\BREVO\Models\Operations\GetInboundEmailEventsSort;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetInboundEmailEventsRequest();
    $request->endDate = 'string';
    $request->limit = 717459;
    $request->offset = 401477;
    $request->sender = 'string';
    $request->sort = GetInboundEmailEventsSort::Desc;
    $request->startDate = 'string';

    $response = $sdk->inboundParsing->getInboundEmailEvents($request);

    if ($response->getInboundEmailEvents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\GetInboundEmailEventsRequest](../../models/operations/GetInboundEmailEventsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetInboundEmailEventsResponse](../../models/operations/GetInboundEmailEventsResponse.md)**


## getInboundEmailEventsByUuid

This endpoint will show the list of all events history for one particular received email.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetInboundEmailEventsByUuidRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetInboundEmailEventsByUuidRequest();
    $request->uuid = '0b78133b-5346-4c5c-9f06-f4b3166b05d6';

    $response = $sdk->inboundParsing->getInboundEmailEventsByUuid($request);

    if ($response->getInboundEmailEventsByUuid !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\test\BREVO\Models\Operations\GetInboundEmailEventsByUuidRequest](../../models/operations/GetInboundEmailEventsByUuidRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetInboundEmailEventsByUuidResponse](../../models/operations/GetInboundEmailEventsByUuidResponse.md)**

