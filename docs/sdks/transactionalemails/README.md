# TransactionalEmails


### Available Operations

* [blockNewDomain](#blocknewdomain) - Add a new domain to the list of blocked domains
* [createSmtpTemplate](#createsmtptemplate) - Create an email template
* [deleteBlockedDomain](#deleteblockeddomain) - Unblock an existing domain from the list of blocked domains
* [deleteHardbounces](#deletehardbounces) - Delete hardbounces
* [deleteScheduledEmailById](#deletescheduledemailbyid) - Delete scheduled emails by batchId or messageId
* [deleteSmtpTemplate](#deletesmtptemplate) - Delete an inactive email template
* [deleteSmtpBlockedContactsEmail](#deletesmtpblockedcontactsemail) - Unblock or resubscribe a transactional contact
* [deleteSmtpLogMessageId](#deletesmtplogmessageid) - Delete an SMTP transactional log
* [getAggregatedSmtpReport](#getaggregatedsmtpreport) - Get your transactional email activity aggregated over a period of time
* [getBlockedDomains](#getblockeddomains) - Get the list of blocked domains
* [getEmailEventReport](#getemaileventreport) - Get all your transactional email activity (unaggregated events)
* [getScheduledEmailById](#getscheduledemailbyid) - Fetch scheduled emails by batchId or messageId
* [getSmtpReport](#getsmtpreport) - Get your transactional email activity aggregated per day
* [getSmtpTemplate](#getsmtptemplate) - Returns the template information
* [getSmtpTemplates](#getsmtptemplates) - Get the list of email templates
* [getTransacBlockedContacts](#gettransacblockedcontacts) - Get the list of blocked or unsubscribed transactional contacts
* [getTransacEmailContent](#gettransacemailcontent) - Get the personalized content of a sent transactional email
* [getTransacEmailsList](#gettransacemailslist) - Get the list of transactional emails on the basis of allowed filters
* [sendTestTemplate](#sendtesttemplate) - Send a template to your test list
* [sendTransacEmail](#sendtransacemail) - Send a transactional email
* [updateSmtpTemplate](#updatesmtptemplate) - Update an email template

## blockNewDomain

Blocks a new domain in order to avoid messages being sent to the same

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
    $request = new Shared\BlockDomain();
    $request->domain = 'example.com';

    $response = $sdk->transactionalEmails->blockNewDomain($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                   | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `$request`                                                                  | [\test\BREVO\Models\Shared\BlockDomain](../../Models/Shared/BlockDomain.md) | :heavy_check_mark:                                                          | The request object to use for the request.                                  |


### Response

**[?\test\BREVO\Models\Operations\BlockNewDomainResponse](../../Models/Operations/BlockNewDomainResponse.md)**


## createSmtpTemplate

Create an email template

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
    $request = new Shared\CreateSmtpTemplate();
    $request->attachmentUrl = 'https://attachment.domain.com';
    $request->htmlContent = 'The order n°xxxxx has been confirmed. Thanks for your purchase';
    $request->htmlUrl = 'https://html.domain.com';
    $request->isActive = true;
    $request->replyTo = 'support@myshop.com';
    $request->sender = new Shared\CreateSmtpTemplateSender();
    $request->sender->email = 'contact@myshop.com';
    $request->sender->id = 3;
    $request->sender->name = 'Mary from MyShop';
    $request->subject = 'Thanks for your purchase !';
    $request->tag = 'OrderConfirmation';
    $request->templateName = 'Order Confirmation - EN';
    $request->toField = '{FNAME} {LNAME}';

    $response = $sdk->transactionalEmails->createSmtpTemplate($request);

    if ($response->createModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `$request`                                                                                | [\test\BREVO\Models\Shared\CreateSmtpTemplate](../../Models/Shared/CreateSmtpTemplate.md) | :heavy_check_mark:                                                                        | The request object to use for the request.                                                |


### Response

**[?\test\BREVO\Models\Operations\CreateSmtpTemplateResponse](../../Models/Operations/CreateSmtpTemplateResponse.md)**


## deleteBlockedDomain

Unblocks an existing domain from the list of blocked domains

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
    $request = new Operations\DeleteBlockedDomainRequest();
    $request->domain = 'unknown-cappuccino.name';

    $response = $sdk->transactionalEmails->deleteBlockedDomain($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\DeleteBlockedDomainRequest](../../Models/Operations/DeleteBlockedDomainRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\DeleteBlockedDomainResponse](../../Models/Operations/DeleteBlockedDomainResponse.md)**


## deleteHardbounces

Delete hardbounces. To use carefully (e.g. in case of temporary ISP failures)

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
    $request = new Shared\DeleteHardbounces();
    $request->contactEmail = 'alex76@example.com';
    $request->endDate = '2017-01-31';
    $request->startDate = '2016-12-31';

    $response = $sdk->transactionalEmails->deleteHardbounces($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                               | Type                                                                                    | Required                                                                                | Description                                                                             |
| --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| `$request`                                                                              | [\test\BREVO\Models\Shared\DeleteHardbounces](../../Models/Shared/DeleteHardbounces.md) | :heavy_check_mark:                                                                      | The request object to use for the request.                                              |


### Response

**[?\test\BREVO\Models\Operations\DeleteHardbouncesResponse](../../Models/Operations/DeleteHardbouncesResponse.md)**


## deleteScheduledEmailById

Delete scheduled batch of emails by batchId or single scheduled email by messageId

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
    $request = new Operations\DeleteScheduledEmailByIdRequest();
    $request->identifier = 'string';

    $response = $sdk->transactionalEmails->deleteScheduledEmailById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\test\BREVO\Models\Operations\DeleteScheduledEmailByIdRequest](../../Models/Operations/DeleteScheduledEmailByIdRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\test\BREVO\Models\Operations\DeleteScheduledEmailByIdResponse](../../Models/Operations/DeleteScheduledEmailByIdResponse.md)**


## deleteSmtpTemplate

Delete an inactive email template

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
    $request = new Operations\DeleteSmtpTemplateRequest();
    $request->templateId = 567614;

    $response = $sdk->transactionalEmails->deleteSmtpTemplate($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\DeleteSmtpTemplateRequest](../../Models/Operations/DeleteSmtpTemplateRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\DeleteSmtpTemplateResponse](../../Models/Operations/DeleteSmtpTemplateResponse.md)**


## deleteSmtpBlockedContactsEmail

Unblock or resubscribe a transactional contact

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
    $request = new Operations\DeleteSmtpBlockedContactsEmailRequest();
    $request->email = 'Francesco.Marks@yahoo.com';

    $response = $sdk->transactionalEmails->deleteSmtpBlockedContactsEmail($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\test\BREVO\Models\Operations\DeleteSmtpBlockedContactsEmailRequest](../../Models/Operations/DeleteSmtpBlockedContactsEmailRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\test\BREVO\Models\Operations\DeleteSmtpBlockedContactsEmailResponse](../../Models/Operations/DeleteSmtpBlockedContactsEmailResponse.md)**


## deleteSmtpLogMessageId

Delete an SMTP transactional log

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
    $request = new Operations\DeleteSmtpLogMessageIdRequest();
    $request->messageId = 'string';

    $response = $sdk->transactionalEmails->deleteSmtpLogMessageId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\DeleteSmtpLogMessageIdRequest](../../Models/Operations/DeleteSmtpLogMessageIdRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\DeleteSmtpLogMessageIdResponse](../../Models/Operations/DeleteSmtpLogMessageIdResponse.md)**


## getAggregatedSmtpReport

This endpoint will show the aggregated stats for past 90 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days

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
    $request = new Operations\GetAggregatedSmtpReportRequest();
    $request->days = 49808;
    $request->endDate = 'string';
    $request->startDate = 'string';
    $request->tag = 'string';

    $response = $sdk->transactionalEmails->getAggregatedSmtpReport($request);

    if ($response->getAggregatedReport !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\test\BREVO\Models\Operations\GetAggregatedSmtpReportRequest](../../Models/Operations/GetAggregatedSmtpReportRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetAggregatedSmtpReportResponse](../../Models/Operations/GetAggregatedSmtpReportResponse.md)**


## getBlockedDomains

Get the list of blocked domains

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
    $response = $sdk->transactionalEmails->getBlockedDomains();

    if ($response->getBlockedDomains !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetBlockedDomainsResponse](../../Models/Operations/GetBlockedDomainsResponse.md)**


## getEmailEventReport

This endpoint will show the aggregated stats for past 30 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days

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
    $request = new Operations\GetEmailEventReportRequest();
    $request->days = 140058;
    $request->email = 'Saige.Keebler63@yahoo.com';
    $request->endDate = 'string';
    $request->event = Operations\GetEmailEventReportQueryParamEvent::Clicks;
    $request->limit = 265644;
    $request->messageId = 'string';
    $request->offset = 736837;
    $request->sort = Operations\GetEmailEventReportQueryParamSort::Asc;
    $request->startDate = 'string';
    $request->tags = 'string';
    $request->templateId = 427801;

    $response = $sdk->transactionalEmails->getEmailEventReport($request);

    if ($response->getEmailEventReport !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetEmailEventReportRequest](../../Models/Operations/GetEmailEventReportRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetEmailEventReportResponse](../../Models/Operations/GetEmailEventReportResponse.md)**


## getScheduledEmailById

Fetch scheduled batch of emails by batchId or single scheduled email by messageId (Can retrieve data upto 30 days old)

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
    $request = new Operations\GetScheduledEmailByIdRequest();
    $request->endDate = DateTime::createFromFormat('Y-m-d', '2021-10-03');
    $request->identifier = 'string';
    $request->limit = 169392;
    $request->offset = 19100;
    $request->sort = Operations\GetScheduledEmailByIdQueryParamSort::Desc;
    $request->startDate = DateTime::createFromFormat('Y-m-d', '2021-06-15');
    $request->status = Operations\GetScheduledEmailByIdQueryParamStatus::Processed;

    $response = $sdk->transactionalEmails->getScheduledEmailById($request);

    if ($response->oneOf !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\GetScheduledEmailByIdRequest](../../Models/Operations/GetScheduledEmailByIdRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetScheduledEmailByIdResponse](../../Models/Operations/GetScheduledEmailByIdResponse.md)**


## getSmtpReport

Get your transactional email activity aggregated per day

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
    $request = new Operations\GetSmtpReportRequest();
    $request->days = 6474;
    $request->endDate = 'string';
    $request->limit = 183433;
    $request->offset = 786117;
    $request->sort = Operations\GetSmtpReportQueryParamSort::Desc;
    $request->startDate = 'string';
    $request->tag = 'string';

    $response = $sdk->transactionalEmails->getSmtpReport($request);

    if ($response->getReports !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\GetSmtpReportRequest](../../Models/Operations/GetSmtpReportRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetSmtpReportResponse](../../Models/Operations/GetSmtpReportResponse.md)**


## getSmtpTemplate

Returns the template information

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
    $request = new Operations\GetSmtpTemplateRequest();
    $request->templateId = 397488;

    $response = $sdk->transactionalEmails->getSmtpTemplate($request);

    if ($response->getSmtpTemplateOverview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\test\BREVO\Models\Operations\GetSmtpTemplateRequest](../../Models/Operations/GetSmtpTemplateRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetSmtpTemplateResponse](../../Models/Operations/GetSmtpTemplateResponse.md)**


## getSmtpTemplates

Get the list of email templates

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
    $request = new Operations\GetSmtpTemplatesRequest();
    $request->limit = 714658;
    $request->offset = 628724;
    $request->sort = Operations\GetSmtpTemplatesQueryParamSort::Desc;
    $request->templateStatus = false;

    $response = $sdk->transactionalEmails->getSmtpTemplates($request);

    if ($response->getSmtpTemplates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\GetSmtpTemplatesRequest](../../Models/Operations/GetSmtpTemplatesRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetSmtpTemplatesResponse](../../Models/Operations/GetSmtpTemplatesResponse.md)**


## getTransacBlockedContacts

Get the list of blocked or unsubscribed transactional contacts

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
    $request = new Operations\GetTransacBlockedContactsRequest();
    $request->endDate = 'string';
    $request->limit = 309106;
    $request->offset = 420163;
    $request->senders = [
        'string',
    ];
    $request->sort = Operations\GetTransacBlockedContactsQueryParamSort::Asc;
    $request->startDate = 'string';

    $response = $sdk->transactionalEmails->getTransacBlockedContacts($request);

    if ($response->getTransacBlockedContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\test\BREVO\Models\Operations\GetTransacBlockedContactsRequest](../../Models/Operations/GetTransacBlockedContactsRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetTransacBlockedContactsResponse](../../Models/Operations/GetTransacBlockedContactsResponse.md)**


## getTransacEmailContent

Get the personalized content of a sent transactional email

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
    $request = new Operations\GetTransacEmailContentRequest();
    $request->uuid = '566179bf-4e3e-496d-95b0-fe604c61ac51';

    $response = $sdk->transactionalEmails->getTransacEmailContent($request);

    if ($response->getTransacEmailContent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\GetTransacEmailContentRequest](../../Models/Operations/GetTransacEmailContentRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetTransacEmailContentResponse](../../Models/Operations/GetTransacEmailContentResponse.md)**


## getTransacEmailsList

This endpoint will show the list of emails for past 30 days by default. To retrieve emails before that time, please pass startDate and endDate in query filters.

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
    $request = new Operations\GetTransacEmailsListRequest();
    $request->email = 'Carmel_McLaughlin64@hotmail.com';
    $request->endDate = 'string';
    $request->limit = 16086;
    $request->messageId = 'string';
    $request->offset = 704759;
    $request->sort = Operations\GetTransacEmailsListQueryParamSort::Desc;
    $request->startDate = 'string';
    $request->templateId = 839474;

    $response = $sdk->transactionalEmails->getTransacEmailsList($request);

    if ($response->getTransacEmailsList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\GetTransacEmailsListRequest](../../Models/Operations/GetTransacEmailsListRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetTransacEmailsListResponse](../../Models/Operations/GetTransacEmailsListResponse.md)**


## sendTestTemplate

Send a template to your test list

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
    $request = new Operations\SendTestTemplateRequest();
    $request->sendTestEmail = new Shared\SendTestEmail();
    $request->sendTestEmail->emailTo = [
        'helen.jurger@example.com',
    ];
    $request->templateId = 320531;

    $response = $sdk->transactionalEmails->sendTestTemplate($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\SendTestTemplateRequest](../../Models/Operations/SendTestTemplateRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\SendTestTemplateResponse](../../Models/Operations/SendTestTemplateResponse.md)**


## sendTransacEmail

Send a transactional email

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
    $request = new Shared\SendSmtpEmail();
    $request->attachment = [
        new Shared\Attachment(),
    ];
    $request->batchId = '5c6cfa04-eed9-42c2-8b5c-6d470d978e9d';
    $request->bcc = [
        new Shared\Bcc(),
    ];
    $request->cc = [
        new Shared\Cc(),
    ];
    $request->headers = [
        'voluptatem' => 'string',
    ];
    $request->htmlContent = '<!DOCTYPE html> <html> <body> <h1>Confirm you email</h1> <p>Please confirm your email address by clicking on the link below</p> </body> </html>';
    $request->messageVersions = [
        new Shared\MessageVersions(),
    ];
    $request->params = [
        'Northwest' => 'string',
    ];
    $request->replyTo = new Shared\ReplyTo();
    $request->replyTo->email = 'ann6533@example.com';
    $request->replyTo->name = 'Ann';
    $request->scheduledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-05T12:30:00+02:00');
    $request->sender = new Shared\SendSmtpEmailSender();
    $request->sender->email = 'no-reply@myshop.com';
    $request->sender->id = 2;
    $request->sender->name = 'Mary from MyShop';
    $request->subject = 'Login Email confirmation';
    $request->tags = [
        'tag1',
    ];
    $request->templateId = 2;
    $request->textContent = 'Please confirm your email address by clicking on the link https://text.domain.com';
    $request->to = [
        new Shared\To(),
    ];

    $response = $sdk->transactionalEmails->sendTransacEmail($request);

    if ($response->createSmtpEmail !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                       | Type                                                                            | Required                                                                        | Description                                                                     |
| ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| `$request`                                                                      | [\test\BREVO\Models\Shared\SendSmtpEmail](../../Models/Shared/SendSmtpEmail.md) | :heavy_check_mark:                                                              | The request object to use for the request.                                      |


### Response

**[?\test\BREVO\Models\Operations\SendTransacEmailResponse](../../Models/Operations/SendTransacEmailResponse.md)**


## updateSmtpTemplate

Update an email template

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
    $request = new Operations\UpdateSmtpTemplateRequest();
    $request->templateId = 604767;
    $request->updateSmtpTemplate = new Shared\UpdateSmtpTemplate();
    $request->updateSmtpTemplate->attachmentUrl = 'https://attachment.domain.com';
    $request->updateSmtpTemplate->htmlContent = 'The order n°xxxxx has been confirmed. Thanks for your purchase';
    $request->updateSmtpTemplate->htmlUrl = 'https://html.domain.com';
    $request->updateSmtpTemplate->isActive = true;
    $request->updateSmtpTemplate->replyTo = 'support@myshop.com';
    $request->updateSmtpTemplate->sender = new Shared\UpdateSmtpTemplateSender();
    $request->updateSmtpTemplate->sender->email = 'contact@myshop.com';
    $request->updateSmtpTemplate->sender->id = 3;
    $request->updateSmtpTemplate->sender->name = 'Mary from MyShop';
    $request->updateSmtpTemplate->subject = 'Thanks for your purchase !';
    $request->updateSmtpTemplate->tag = 'OrderConfirmation';
    $request->updateSmtpTemplate->templateName = 'Order Confirmation - EN';
    $request->updateSmtpTemplate->toField = '{FNAME} {LNAME}';

    $response = $sdk->transactionalEmails->updateSmtpTemplate($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\UpdateSmtpTemplateRequest](../../Models/Operations/UpdateSmtpTemplateRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\UpdateSmtpTemplateResponse](../../Models/Operations/UpdateSmtpTemplateResponse.md)**

