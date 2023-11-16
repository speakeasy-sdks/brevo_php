# TransactionalWhatsApp


### Available Operations

* [getWhatsappEventReport](#getwhatsappeventreport) - Get all your WhatsApp activity (unaggregated events)
* [sendWhatsappMessage](#sendwhatsappmessage) - Send a WhatsApp message

## getWhatsappEventReport

This endpoint will show the unaggregated statistics for WhatsApp activity (30 days by default if `startDate` and `endDate` or `days` is not passed. The date range can not exceed 90 days)

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
    $request = new Operations\GetWhatsappEventReportRequest();
    $request->contactNumber = '217-450-0860 x3202';
    $request->days = 322054;
    $request->endDate = 'string';
    $request->event = Operations\QueryParamEvent::Sent;
    $request->limit = 686968;
    $request->offset = 60200;
    $request->sort = Operations\GetWhatsappEventReportQueryParamSort::Desc;
    $request->startDate = 'string';

    $response = $sdk->transactionalWhatsApp->getWhatsappEventReport($request);

    if ($response->getWhatsappEventReport !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\GetWhatsappEventReportRequest](../../Models/Operations/GetWhatsappEventReportRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetWhatsappEventReportResponse](../../Models/Operations/GetWhatsappEventReportResponse.md)**


## sendWhatsappMessage

This endpoint is used to send a WhatsApp message. <br/>(**The first message you send using the API must contain a Template ID. You must create a template on WhatsApp on the Brevo platform to fetch the Template ID.**)

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
'string'

    $response = $sdk->transactionalWhatsApp->sendWhatsappMessage($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [mixed](../../.md)                         | :heavy_check_mark:                         | The request object to use for the request. |


### Response

**[?\test\BREVO\Models\Operations\SendWhatsappMessageResponse](../../Models/Operations/SendWhatsappMessageResponse.md)**

