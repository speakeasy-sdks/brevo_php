# TransactionalSMS


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

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetSmsEventsRequest();
    $request->days = 922986;
    $request->endDate = '<value>';
    $request->event = Operations\Event::Blocked;
    $request->limit = 648983;
    $request->offset = 491120;
    $request->phoneNumber = '<value>';
    $request->sort = Operations\GetSmsEventsQueryParamSort::Desc;
    $request->startDate = '<value>';
    $request->tags = '<value>';;

    $response = $sdk->transactionalSMS->getSmsEvents($request);

    if ($response->getSmsEventReport !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\test\BREVO\Models\Operations\GetSmsEventsRequest](../../Models/Operations/GetSmsEventsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetSmsEventsResponse](../../Models/Operations/GetSmsEventsResponse.md)**


## getTransacAggregatedSmsReport

Get your SMS activity aggregated over a period of time

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetTransacAggregatedSmsReportRequest();
    $request->days = 40533;
    $request->endDate = '<value>';
    $request->startDate = '<value>';
    $request->tag = '<value>';;

    $response = $sdk->transactionalSMS->getTransacAggregatedSmsReport($request);

    if ($response->getTransacAggregatedSmsReport !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\test\BREVO\Models\Operations\GetTransacAggregatedSmsReportRequest](../../Models/Operations/GetTransacAggregatedSmsReportRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetTransacAggregatedSmsReportResponse](../../Models/Operations/GetTransacAggregatedSmsReportResponse.md)**


## getTransacSmsReport

Get your SMS activity aggregated per day

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetTransacSmsReportRequest();
    $request->days = 183250;
    $request->endDate = '<value>';
    $request->sort = Operations\GetTransacSmsReportQueryParamSort::Desc;
    $request->startDate = '<value>';
    $request->tag = '<value>';;

    $response = $sdk->transactionalSMS->getTransacSmsReport($request);

    if ($response->getTransacSmsReport !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetTransacSmsReportRequest](../../Models/Operations/GetTransacSmsReportRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetTransacSmsReportResponse](../../Models/Operations/GetTransacSmsReportResponse.md)**


## sendTransacSms

Send SMS message to a mobile number

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Shared\SendTransacSms();
    $request->content = 'Enter this code:CCJJG8 to validate your account';
    $request->organisationPrefix = 'MyCompany';
    $request->recipient = '33689965433';
    $request->sender = 'MyShop';
    $request->tag = 'accountValidation';
    $request->type = Shared\SendTransacSmsType::Marketing;
    $request->unicodeEnabled = true;
    $request->webUrl = 'http://requestb.in/173lyyx1';;

    $response = $sdk->transactionalSMS->sendTransacSms($request);

    if ($response->sendSms !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                         | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `$request`                                                                        | [\test\BREVO\Models\Shared\SendTransacSms](../../Models/Shared/SendTransacSms.md) | :heavy_check_mark:                                                                | The request object to use for the request.                                        |


### Response

**[?\test\BREVO\Models\Operations\SendTransacSmsResponse](../../Models/Operations/SendTransacSmsResponse.md)**

