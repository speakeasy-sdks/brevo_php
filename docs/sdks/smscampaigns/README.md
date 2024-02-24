# SMSCampaigns


### Available Operations

* [createSmsCampaign](#createsmscampaign) - Creates an SMS campaign
* [deleteSmsCampaign](#deletesmscampaign) - Delete an SMS campaign
* [getSmsCampaign](#getsmscampaign) - Get an SMS campaign
* [getSmsCampaigns](#getsmscampaigns) - Returns the information for all your created SMS campaigns
* [requestSmsRecipientExport](#requestsmsrecipientexport) - Export an SMS campaign's recipients
* [sendSmsCampaignNow](#sendsmscampaignnow) - Send your SMS campaign immediately
* [sendSmsReport](#sendsmsreport) - Send an SMS campaign's report
* [sendTestSms](#sendtestsms) - Send a test SMS campaign
* [updateSmsCampaign](#updatesmscampaign) - Update an SMS campaign
* [updateSmsCampaignStatus](#updatesmscampaignstatus) - Update a campaign's status

## createSmsCampaign

Creates an SMS campaign

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateSmsCampaign();
    $request->content = 'Get a discount by visiting our NY store and saying : Happy Spring!';
    $request->name = 'Spring Promo Code';
    $request->organisationPrefix = 'MyCompany';
    $request->recipients = new Shared\CreateSmsCampaignRecipients();
    $request->recipients->exclusionListIds = [
        15,
    ];
    $request->recipients->listIds = [
        54,
    ];
    $request->scheduledAt = '2017-05-05T12:30:00+02:00';
    $request->sender = 'MyShop';
    $request->unicodeEnabled = true;
    $request->unsubscribeInstruction = 'send Stop if you want to unsubscribe.';;

    $response = $sdk->smsCampaigns->createSmsCampaign($request);

    if ($response->createModel !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                               | Type                                                                                    | Required                                                                                | Description                                                                             |
| --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| `$request`                                                                              | [\test\BREVO\Models\Shared\CreateSmsCampaign](../../Models/Shared/CreateSmsCampaign.md) | :heavy_check_mark:                                                                      | The request object to use for the request.                                              |


### Response

**[?\test\BREVO\Models\Operations\CreateSmsCampaignResponse](../../Models/Operations/CreateSmsCampaignResponse.md)**


## deleteSmsCampaign

Delete an SMS campaign

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
        $request = new Operations\DeleteSmsCampaignRequest();
    $request->campaignId = 225721;;

    $response = $sdk->smsCampaigns->deleteSmsCampaign($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\DeleteSmsCampaignRequest](../../Models/Operations/DeleteSmsCampaignRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\DeleteSmsCampaignResponse](../../Models/Operations/DeleteSmsCampaignResponse.md)**


## getSmsCampaign

Get an SMS campaign

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
        $request = new Operations\GetSmsCampaignRequest();
    $request->campaignId = 704072;;

    $response = $sdk->smsCampaigns->getSmsCampaign($request);

    if ($response->getSmsCampaign !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\test\BREVO\Models\Operations\GetSmsCampaignRequest](../../Models/Operations/GetSmsCampaignRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetSmsCampaignResponse](../../Models/Operations/GetSmsCampaignResponse.md)**


## getSmsCampaigns

Returns the information for all your created SMS campaigns

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
        $request = new Operations\GetSmsCampaignsRequest();
    $request->endDate = '<value>';
    $request->limit = 200697;
    $request->offset = 609082;
    $request->sort = Operations\GetSmsCampaignsQueryParamSort::Desc;
    $request->startDate = '<value>';
    $request->status = Operations\QueryParamStatus::Suspended;;

    $response = $sdk->smsCampaigns->getSmsCampaigns($request);

    if ($response->getSmsCampaigns !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\test\BREVO\Models\Operations\GetSmsCampaignsRequest](../../Models/Operations/GetSmsCampaignsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetSmsCampaignsResponse](../../Models/Operations/GetSmsCampaignsResponse.md)**


## requestSmsRecipientExport

It returns the background process ID which on completion calls the notify URL that you have set in the input.

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
        $request = new Operations\RequestSmsRecipientExportRequest();
    $request->campaignId = 946569;
    $request->requestSmsRecipientExport = new Shared\RequestSmsRecipientExport();
    $request->requestSmsRecipientExport->notifyURL = 'http://requestb.in/173lyyx1';
    $request->requestSmsRecipientExport->recipientsType = Shared\RequestSmsRecipientExportRecipientsType::Answered;;

    $response = $sdk->smsCampaigns->requestSmsRecipientExport($request);

    if ($response->createdProcessId !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\test\BREVO\Models\Operations\RequestSmsRecipientExportRequest](../../Models/Operations/RequestSmsRecipientExportRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\test\BREVO\Models\Operations\RequestSmsRecipientExportResponse](../../Models/Operations/RequestSmsRecipientExportResponse.md)**


## sendSmsCampaignNow

Send your SMS campaign immediately

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
        $request = new Operations\SendSmsCampaignNowRequest();
    $request->campaignId = 697931;;

    $response = $sdk->smsCampaigns->sendSmsCampaignNow($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\SendSmsCampaignNowRequest](../../Models/Operations/SendSmsCampaignNowRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\SendSmsCampaignNowResponse](../../Models/Operations/SendSmsCampaignNowResponse.md)**


## sendSmsReport

Send report of Sent and Archived campaign, to the specified email addresses, with respective data and a pdf attachment in detail.

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
        $request = new Operations\SendSmsReportRequest();
    $request->campaignId = 786011;
    $request->sendReport = new Shared\SendReport();
    $request->sendReport->email = new Shared\Email();
    $request->sendReport->email->body = 'Please find attached the report of our last email campaign.';
    $request->sendReport->email->to = [
        'jim.suehan@example.com',
    ];
    $request->sendReport->language = Shared\SendReportLanguage::En;;

    $response = $sdk->smsCampaigns->sendSmsReport($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\SendSmsReportRequest](../../Models/Operations/SendSmsReportRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\SendSmsReportResponse](../../Models/Operations/SendSmsReportResponse.md)**


## sendTestSms

Send a test SMS campaign

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
        $request = new Operations\SendTestSmsRequest();
    $request->campaignId = 562258;
    $request->sendTestSms = new Shared\SendTestSms();
    $request->sendTestSms->phoneNumber = '33689965433';;

    $response = $sdk->smsCampaigns->sendTestSms($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\SendTestSmsRequest](../../Models/Operations/SendTestSmsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\SendTestSmsResponse](../../Models/Operations/SendTestSmsResponse.md)**


## updateSmsCampaign

Update an SMS campaign

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
        $request = new Operations\UpdateSmsCampaignRequest();
    $request->campaignId = 537860;
    $request->updateSmsCampaign = new Shared\UpdateSmsCampaign();
    $request->updateSmsCampaign->content = 'Get a discount by visiting our NY store and saying : Happy Spring!';
    $request->updateSmsCampaign->name = 'Spring Promo Code';
    $request->updateSmsCampaign->organisationPrefix = 'MyCompany';
    $request->updateSmsCampaign->recipients = new Shared\UpdateSmsCampaignRecipients();
    $request->updateSmsCampaign->recipients->exclusionListIds = [
        15,
    ];
    $request->updateSmsCampaign->recipients->listIds = [
        54,
    ];
    $request->updateSmsCampaign->scheduledAt = '2017-05-05T12:30:00+02:00';
    $request->updateSmsCampaign->sender = 'MyShop';
    $request->updateSmsCampaign->unicodeEnabled = true;
    $request->updateSmsCampaign->unsubscribeInstruction = 'send Stop if you want to unsubscribe.';;

    $response = $sdk->smsCampaigns->updateSmsCampaign($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\UpdateSmsCampaignRequest](../../Models/Operations/UpdateSmsCampaignRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\UpdateSmsCampaignResponse](../../Models/Operations/UpdateSmsCampaignResponse.md)**


## updateSmsCampaignStatus

Update a campaign's status

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
        $request = new Operations\UpdateSmsCampaignStatusRequest();
    $request->campaignId = 258044;
    $request->updateCampaignStatus = new Shared\UpdateCampaignStatus();
    $request->updateCampaignStatus->status = Shared\UpdateCampaignStatusStatus::Suspended;;

    $response = $sdk->smsCampaigns->updateSmsCampaignStatus($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\test\BREVO\Models\Operations\UpdateSmsCampaignStatusRequest](../../Models/Operations/UpdateSmsCampaignStatusRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\test\BREVO\Models\Operations\UpdateSmsCampaignStatusResponse](../../Models/Operations/UpdateSmsCampaignStatusResponse.md)**

