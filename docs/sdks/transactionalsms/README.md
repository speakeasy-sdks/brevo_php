# transactionalSMS

### Available Operations

* [getSmsEvents](#getsmsevents) - Get all your SMS activity (unaggregated events)
* [getTransacAggregatedSmsReport](#gettransacaggregatedsmsreport) - Get your SMS activity aggregated over a period of time
* [getTransacSmsReport](#gettransacsmsreport) - Get your SMS activity aggregated per day
* [sendTransacSms](#sendtransacsms) - Send SMS message to a mobile number

## getSmsEvents

Get all your SMS activity (unaggregated events)

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetSmsEventsRequest;
use \test\BREVO\Models\Operations\GetSmsEventsEvent;
use \test\BREVO\Models\Operations\GetSmsEventsSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetSmsEventsRequest();
    $request->days = 321043;
    $request->endDate = 'expedita';
    $request->event = GetSmsEventsEvent::Bounces;
    $request->limit = 561577;
    $request->offset = 737254;
    $request->phoneNumber = 'aliquid';
    $request->sort = GetSmsEventsSort::Asc;
    $request->startDate = 'voluptatum';
    $request->tags = 'omnis';

    $response = $sdk->transactionalSMS->getSmsEvents($request);

    if ($response->getSmsEventReport !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\test\BREVO\Models\Operations\GetSmsEventsRequest](../../models/operations/GetSmsEventsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetSmsEventsResponse](../../models/operations/GetSmsEventsResponse.md)**


## getTransacAggregatedSmsReport

Get your SMS activity aggregated over a period of time

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetTransacAggregatedSmsReportRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetTransacAggregatedSmsReportRequest();
    $request->days = 85233;
    $request->endDate = 'rerum';
    $request->startDate = 'est';
    $request->tag = 'culpa';

    $response = $sdk->transactionalSMS->getTransacAggregatedSmsReport($request);

    if ($response->getTransacAggregatedSmsReport !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\test\BREVO\Models\Operations\GetTransacAggregatedSmsReportRequest](../../models/operations/GetTransacAggregatedSmsReportRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetTransacAggregatedSmsReportResponse](../../models/operations/GetTransacAggregatedSmsReportResponse.md)**


## getTransacSmsReport

Get your SMS activity aggregated per day

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetTransacSmsReportRequest;
use \test\BREVO\Models\Operations\GetTransacSmsReportSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetTransacSmsReportRequest();
    $request->days = 29634;
    $request->endDate = 'sapiente';
    $request->sort = GetTransacSmsReportSort::Desc;
    $request->startDate = 'architecto';
    $request->tag = 'fuga';

    $response = $sdk->transactionalSMS->getTransacSmsReport($request);

    if ($response->getTransacSmsReport !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetTransacSmsReportRequest](../../models/operations/GetTransacSmsReportRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetTransacSmsReportResponse](../../models/operations/GetTransacSmsReportResponse.md)**


## sendTransacSms

Send SMS message to a mobile number

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\SendTransacSms;
use \test\BREVO\Models\Shared\SendTransacSmsType;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new SendTransacSms();
    $request->content = 'Enter this code:CCJJG8 to validate your account';
    $request->organisationPrefix = 'MyCompany';
    $request->recipient = '33689965433';
    $request->sender = 'MyShop';
    $request->tag = 'accountValidation';
    $request->type = SendTransacSmsType::Marketing;
    $request->unicodeEnabled = true;
    $request->webUrl = 'http://requestb.in/173lyyx1';

    $response = $sdk->transactionalSMS->sendTransacSms($request);

    if ($response->sendSms !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                         | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `$request`                                                                        | [\test\BREVO\Models\Shared\SendTransacSms](../../models/shared/SendTransacSms.md) | :heavy_check_mark:                                                                | The request object to use for the request.                                        |


### Response

**[?\test\BREVO\Models\Operations\SendTransacSmsResponse](../../models/operations/SendTransacSmsResponse.md)**

