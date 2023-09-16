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

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetWhatsappEventReportRequest;
use \test\BREVO\Models\Operations\GetWhatsappEventReportEvent;
use \test\BREVO\Models\Operations\GetWhatsappEventReportSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetWhatsappEventReportRequest();
    $request->contactNumber = '(758) 743-0993 x479';
    $request->days = 637583;
    $request->endDate = 'laborum';
    $request->event = GetWhatsappEventReportEvent::Reply;
    $request->limit = 266697;
    $request->offset = 976226;
    $request->sort = GetWhatsappEventReportSort::Desc;
    $request->startDate = 'officiis';

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
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\GetWhatsappEventReportRequest](../../models/operations/GetWhatsappEventReportRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetWhatsappEventReportResponse](../../models/operations/GetWhatsappEventReportResponse.md)**


## sendWhatsappMessage

This endpoint is used to send a WhatsApp message. <br/>(**The first message you send using the API must contain a Template ID. You must create a template on WhatsApp on the Brevo platform to fetch the Template ID.**)

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
    $request = new SendWhatsappMessageText();
    $request->contactNumbers = [
        '919876543210',
    ];
    $request->senderNumber = '919876543210';
    $request->text = 'Hi! There i am a message';

    $response = $sdk->transactionalWhatsApp->sendWhatsappMessage($request);

    if ($response->sendWhatsappMessage201ApplicationJSONObject !== null) {
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

**[?\test\BREVO\Models\Operations\SendWhatsappMessageResponse](../../models/operations/SendWhatsappMessageResponse.md)**

