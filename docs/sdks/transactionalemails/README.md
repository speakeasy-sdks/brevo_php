# transactionalEmails

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

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\BlockDomain;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new BlockDomain();
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
| `$request`                                                                  | [\test\BREVO\Models\Shared\BlockDomain](../../models/shared/BlockDomain.md) | :heavy_check_mark:                                                          | The request object to use for the request.                                  |


### Response

**[?\test\BREVO\Models\Operations\BlockNewDomainResponse](../../models/operations/BlockNewDomainResponse.md)**


## createSmtpTemplate

Create an email template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateSmtpTemplate;
use \test\BREVO\Models\Shared\CreateSmtpTemplateSender;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateSmtpTemplate();
    $request->attachmentUrl = 'https://attachment.domain.com';
    $request->htmlContent = 'The order n°xxxxx has been confirmed. Thanks for your purchase';
    $request->htmlUrl = 'https://html.domain.com';
    $request->isActive = true;
    $request->replyTo = 'support@myshop.com';
    $request->sender = new CreateSmtpTemplateSender();
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
| `$request`                                                                                | [\test\BREVO\Models\Shared\CreateSmtpTemplate](../../models/shared/CreateSmtpTemplate.md) | :heavy_check_mark:                                                                        | The request object to use for the request.                                                |


### Response

**[?\test\BREVO\Models\Operations\CreateSmtpTemplateResponse](../../models/operations/CreateSmtpTemplateResponse.md)**


## deleteBlockedDomain

Unblocks an existing domain from the list of blocked domains

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteBlockedDomainRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteBlockedDomainRequest();
    $request->domain = 'deleniti';

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\DeleteBlockedDomainRequest](../../models/operations/DeleteBlockedDomainRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\DeleteBlockedDomainResponse](../../models/operations/DeleteBlockedDomainResponse.md)**


## deleteHardbounces

Delete hardbounces. To use carefully (e.g. in case of temporary ISP failures)

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\DeleteHardbounces;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteHardbounces();
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
| `$request`                                                                              | [\test\BREVO\Models\Shared\DeleteHardbounces](../../models/shared/DeleteHardbounces.md) | :heavy_check_mark:                                                                      | The request object to use for the request.                                              |


### Response

**[?\test\BREVO\Models\Operations\DeleteHardbouncesResponse](../../models/operations/DeleteHardbouncesResponse.md)**


## deleteScheduledEmailById

Delete scheduled batch of emails by batchId or single scheduled email by messageId

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteScheduledEmailByIdRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteScheduledEmailByIdRequest();
    $request->identifier = 'veritatis';

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
| `$request`                                                                                                                  | [\test\BREVO\Models\Operations\DeleteScheduledEmailByIdRequest](../../models/operations/DeleteScheduledEmailByIdRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\test\BREVO\Models\Operations\DeleteScheduledEmailByIdResponse](../../models/operations/DeleteScheduledEmailByIdResponse.md)**


## deleteSmtpTemplate

Delete an inactive email template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteSmtpTemplateRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteSmtpTemplateRequest();
    $request->templateId = 274575;

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
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\DeleteSmtpTemplateRequest](../../models/operations/DeleteSmtpTemplateRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\DeleteSmtpTemplateResponse](../../models/operations/DeleteSmtpTemplateResponse.md)**


## deleteSmtpBlockedContactsEmail

Unblock or resubscribe a transactional contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteSmtpBlockedContactsEmailRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteSmtpBlockedContactsEmailRequest();
    $request->email = 'Adela26@gmail.com';

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
| `$request`                                                                                                                              | [\test\BREVO\Models\Operations\DeleteSmtpBlockedContactsEmailRequest](../../models/operations/DeleteSmtpBlockedContactsEmailRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\test\BREVO\Models\Operations\DeleteSmtpBlockedContactsEmailResponse](../../models/operations/DeleteSmtpBlockedContactsEmailResponse.md)**


## deleteSmtpLogMessageId

Delete an SMTP transactional log

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteSmtpLogMessageIdRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteSmtpLogMessageIdRequest();
    $request->messageId = 'fugit';

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
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\DeleteSmtpLogMessageIdRequest](../../models/operations/DeleteSmtpLogMessageIdRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\DeleteSmtpLogMessageIdResponse](../../models/operations/DeleteSmtpLogMessageIdResponse.md)**


## getAggregatedSmtpReport

This endpoint will show the aggregated stats for past 90 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetAggregatedSmtpReportRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetAggregatedSmtpReportRequest();
    $request->days = 66149;
    $request->endDate = 'laudantium';
    $request->startDate = 'quae';
    $request->tag = 'dolor';

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
| `$request`                                                                                                                | [\test\BREVO\Models\Operations\GetAggregatedSmtpReportRequest](../../models/operations/GetAggregatedSmtpReportRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetAggregatedSmtpReportResponse](../../models/operations/GetAggregatedSmtpReportResponse.md)**


## getBlockedDomains

Get the list of blocked domains

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
    $response = $sdk->transactionalEmails->getBlockedDomains();

    if ($response->getBlockedDomains !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetBlockedDomainsResponse](../../models/operations/GetBlockedDomainsResponse.md)**


## getEmailEventReport

This endpoint will show the aggregated stats for past 30 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetEmailEventReportRequest;
use \test\BREVO\Models\Operations\GetEmailEventReportEvent;
use \test\BREVO\Models\Operations\GetEmailEventReportSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetEmailEventReportRequest();
    $request->days = 856277;
    $request->email = 'Carrie_Bednar@yahoo.com';
    $request->endDate = 'impedit';
    $request->event = GetEmailEventReportEvent::Error;
    $request->limit = 456410;
    $request->messageId = 'necessitatibus';
    $request->offset = 153369;
    $request->sort = GetEmailEventReportSort::Asc;
    $request->startDate = 'nesciunt';
    $request->tags = 'expedita';
    $request->templateId = 432984;

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetEmailEventReportRequest](../../models/operations/GetEmailEventReportRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetEmailEventReportResponse](../../models/operations/GetEmailEventReportResponse.md)**


## getScheduledEmailById

Fetch scheduled batch of emails by batchId or single scheduled email by messageId (Can retrieve data upto 30 days old)

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetScheduledEmailByIdRequest;
use \test\BREVO\Models\Operations\GetScheduledEmailByIdSort;
use \test\BREVO\Models\Operations\GetScheduledEmailByIdStatus;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetScheduledEmailByIdRequest();
    $request->endDate = DateTime::createFromFormat('Y-m-d', '2022-06-22');
    $request->identifier = 'magnam';
    $request->limit = 349440;
    $request->offset = 70410;
    $request->sort = GetScheduledEmailByIdSort::Desc;
    $request->startDate = DateTime::createFromFormat('Y-m-d', '2022-04-01');
    $request->status = GetScheduledEmailByIdStatus::InProgress;

    $response = $sdk->transactionalEmails->getScheduledEmailById($request);

    if ($response->getScheduledEmailById200ApplicationJSONOneOf !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\GetScheduledEmailByIdRequest](../../models/operations/GetScheduledEmailByIdRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetScheduledEmailByIdResponse](../../models/operations/GetScheduledEmailByIdResponse.md)**


## getSmtpReport

Get your transactional email activity aggregated per day

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetSmtpReportRequest;
use \test\BREVO\Models\Operations\GetSmtpReportSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetSmtpReportRequest();
    $request->days = 927212;
    $request->endDate = 'consequuntur';
    $request->limit = 28952;
    $request->offset = 350207;
    $request->sort = GetSmtpReportSort::Desc;
    $request->startDate = 'quasi';
    $request->tag = 'nisi';

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
| `$request`                                                                                            | [\test\BREVO\Models\Operations\GetSmtpReportRequest](../../models/operations/GetSmtpReportRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetSmtpReportResponse](../../models/operations/GetSmtpReportResponse.md)**


## getSmtpTemplate

Returns the template information

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetSmtpTemplateRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetSmtpTemplateRequest();
    $request->templateId = 871103;

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
| `$request`                                                                                                | [\test\BREVO\Models\Operations\GetSmtpTemplateRequest](../../models/operations/GetSmtpTemplateRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetSmtpTemplateResponse](../../models/operations/GetSmtpTemplateResponse.md)**


## getSmtpTemplates

Get the list of email templates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetSmtpTemplatesRequest;
use \test\BREVO\Models\Operations\GetSmtpTemplatesSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetSmtpTemplatesRequest();
    $request->limit = 878373;
    $request->offset = 667593;
    $request->sort = GetSmtpTemplatesSort::Desc;
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
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\GetSmtpTemplatesRequest](../../models/operations/GetSmtpTemplatesRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetSmtpTemplatesResponse](../../models/operations/GetSmtpTemplatesResponse.md)**


## getTransacBlockedContacts

Get the list of blocked or unsubscribed transactional contacts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetTransacBlockedContactsRequest;
use \test\BREVO\Models\Operations\GetTransacBlockedContactsSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetTransacBlockedContactsRequest();
    $request->endDate = 'sequi';
    $request->limit = 987349;
    $request->offset = 918092;
    $request->senders = [
        'occaecati',
        'nemo',
        'voluptate',
        'blanditiis',
    ];
    $request->sort = GetTransacBlockedContactsSort::Desc;
    $request->startDate = 'voluptas';

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
| `$request`                                                                                                                    | [\test\BREVO\Models\Operations\GetTransacBlockedContactsRequest](../../models/operations/GetTransacBlockedContactsRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetTransacBlockedContactsResponse](../../models/operations/GetTransacBlockedContactsResponse.md)**


## getTransacEmailContent

Get the personalized content of a sent transactional email

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetTransacEmailContentRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetTransacEmailContentRequest();
    $request->uuid = '4584273a-8418-4d16-a309-fb0929921aef';

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
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\GetTransacEmailContentRequest](../../models/operations/GetTransacEmailContentRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetTransacEmailContentResponse](../../models/operations/GetTransacEmailContentResponse.md)**


## getTransacEmailsList

This endpoint will show the list of emails for past 30 days by default. To retrieve emails before that time, please pass startDate and endDate in query filters.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetTransacEmailsListRequest;
use \test\BREVO\Models\Operations\GetTransacEmailsListSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetTransacEmailsListRequest();
    $request->email = 'Leola50@hotmail.com';
    $request->endDate = 'maxime';
    $request->limit = 300403;
    $request->messageId = 'temporibus';
    $request->offset = 549501;
    $request->sort = GetTransacEmailsListSort::Asc;
    $request->startDate = 'itaque';
    $request->templateId = 415608;

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
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\GetTransacEmailsListRequest](../../models/operations/GetTransacEmailsListRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetTransacEmailsListResponse](../../models/operations/GetTransacEmailsListResponse.md)**


## sendTestTemplate

Send a template to your test list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\SendTestTemplateRequest;
use \test\BREVO\Models\Shared\SendTestEmail;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new SendTestTemplateRequest();
    $request->sendTestEmail = new SendTestEmail();
    $request->sendTestEmail->emailTo = [
        'helen.jurger@example.com',
        'helen.jurger@example.com',
        'helen.jurger@example.com',
    ];
    $request->templateId = 936618;

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
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\SendTestTemplateRequest](../../models/operations/SendTestTemplateRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\SendTestTemplateResponse](../../models/operations/SendTestTemplateResponse.md)**


## sendTransacEmail

Send a transactional email

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\SendSmtpEmail;
use \test\BREVO\Models\Shared\SendSmtpEmailAttachment;
use \test\BREVO\Models\Shared\SendSmtpEmailBcc;
use \test\BREVO\Models\Shared\SendSmtpEmailCc;
use \test\BREVO\Models\Shared\SendSmtpEmailMessageVersions;
use \test\BREVO\Models\Shared\SendSmtpEmailMessageVersionsBcc;
use \test\BREVO\Models\Shared\SendSmtpEmailMessageVersionsCc;
use \test\BREVO\Models\Shared\SendSmtpEmailMessageVersionsReplyTo;
use \test\BREVO\Models\Shared\SendSmtpEmailMessageVersionsTo;
use \test\BREVO\Models\Shared\SendSmtpEmailReplyTo;
use \test\BREVO\Models\Shared\SendSmtpEmailSender;
use \test\BREVO\Models\Shared\SendSmtpEmailTo;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new SendSmtpEmail();
    $request->attachment = [
        new SendSmtpEmailAttachment(),
        new SendSmtpEmailAttachment(),
    ];
    $request->batchId = '5c6cfa04-eed9-42c2-8b5c-6d470d978e9d';
    $request->bcc = [
        new SendSmtpEmailBcc(),
        new SendSmtpEmailBcc(),
        new SendSmtpEmailBcc(),
    ];
    $request->cc = [
        new SendSmtpEmailCc(),
        new SendSmtpEmailCc(),
        new SendSmtpEmailCc(),
        new SendSmtpEmailCc(),
    ];
    $request->headers = [
        'ipsam' => 'vel',
    ];
    $request->htmlContent = '<!DOCTYPE html> <html> <body> <h1>Confirm you email</h1> <p>Please confirm your email address by clicking on the link below</p> </body> </html>';
    $request->messageVersions = [
        new SendSmtpEmailMessageVersions(),
    ];
    $request->params = [
        'non' => 'maiores',
    ];
    $request->replyTo = new SendSmtpEmailReplyTo();
    $request->replyTo->email = 'ann6533@example.com';
    $request->replyTo->name = 'Ann';
    $request->scheduledAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-05T12:30:00+02:00');
    $request->sender = new SendSmtpEmailSender();
    $request->sender->email = 'no-reply@myshop.com';
    $request->sender->id = 2;
    $request->sender->name = 'Mary from MyShop';
    $request->subject = 'Login Email confirmation';
    $request->tags = [
        'tag1',
        'tag1',
    ];
    $request->templateId = 2;
    $request->textContent = 'Please confirm your email address by clicking on the link https://text.domain.com';
    $request->to = [
        new SendSmtpEmailTo(),
        new SendSmtpEmailTo(),
        new SendSmtpEmailTo(),
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
| `$request`                                                                      | [\test\BREVO\Models\Shared\SendSmtpEmail](../../models/shared/SendSmtpEmail.md) | :heavy_check_mark:                                                              | The request object to use for the request.                                      |


### Response

**[?\test\BREVO\Models\Operations\SendTransacEmailResponse](../../models/operations/SendTransacEmailResponse.md)**


## updateSmtpTemplate

Update an email template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateSmtpTemplateRequest;
use \test\BREVO\Models\Shared\UpdateSmtpTemplate;
use \test\BREVO\Models\Shared\UpdateSmtpTemplateSender;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UpdateSmtpTemplateRequest();
    $request->templateId = 858778;
    $request->updateSmtpTemplate = new UpdateSmtpTemplate();
    $request->updateSmtpTemplate->attachmentUrl = 'https://attachment.domain.com';
    $request->updateSmtpTemplate->htmlContent = 'The order n°xxxxx has been confirmed. Thanks for your purchase';
    $request->updateSmtpTemplate->htmlUrl = 'https://html.domain.com';
    $request->updateSmtpTemplate->isActive = true;
    $request->updateSmtpTemplate->replyTo = 'support@myshop.com';
    $request->updateSmtpTemplate->sender = new UpdateSmtpTemplateSender();
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
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\UpdateSmtpTemplateRequest](../../models/operations/UpdateSmtpTemplateRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\UpdateSmtpTemplateResponse](../../models/operations/UpdateSmtpTemplateResponse.md)**

