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
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetInboundEmailAttachmentRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetInboundEmailAttachmentRequest();
    $request->downloadToken = 'aperiam';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetInboundEmailEventsRequest();
    $request->endDate = 'cum';
    $request->limit = 232627;
    $request->offset = 449083;
    $request->sender = 'exercitationem';
    $request->sort = GetInboundEmailEventsSort::Desc;
    $request->startDate = 'facere';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetInboundEmailEventsByUuidRequest();
    $request->uuid = '4f6fbee4-1f33-4317-be35-b60eb1ea4265';

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

