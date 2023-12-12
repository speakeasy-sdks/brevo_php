# EmailCampaigns


### Available Operations

* [createEmailCampaign](#createemailcampaign) - Create an email campaign
* [deleteEmailCampaign](#deleteemailcampaign) - Delete an email campaign
* [emailExportRecipients](#emailexportrecipients) - Export the recipients of an email campaign
* [getAbTestCampaignResult](#getabtestcampaignresult) - Get an A/B test email campaign results
* [getEmailCampaign](#getemailcampaign) - Get an email campaign report
* [getEmailCampaigns](#getemailcampaigns) - Return all your created email campaigns
* [getSharedTemplateUrl](#getsharedtemplateurl) - Get a shared template url
* [sendEmailCampaignNow](#sendemailcampaignnow) - Send an email campaign immediately, based on campaignId
* [sendReport](#sendreport) - Send the report of a campaign
* [sendTestEmail](#sendtestemail) - Send an email campaign to your test list
* [updateCampaignStatus](#updatecampaignstatus) - Update an email campaign status
* [updateEmailCampaign](#updateemailcampaign) - Update an email campaign
* [uploadImageToGallery](#uploadimagetogallery) - Upload an image to your account's image gallery

## createEmailCampaign

Create an email campaign

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
        $request = new Shared\CreateEmailCampaign();
    $request->abTesting = true;
    $request->attachmentUrl = 'https://attachment.domain.com';
    $request->footer = '[DEFAULT_FOOTER]';
    $request->header = '[DEFAULT_HEADER]';
    $request->htmlContent = '<!DOCTYPE html> <html> <body> <h1>Confirm you email</h1> <p>Please confirm your email address by clicking on the link below</p> </body> </html>';
    $request->htmlUrl = 'https://html.domain.com';
    $request->increaseRate = 70;
    $request->initialQuota = 3000;
    $request->inlineImageActivation = true;
    $request->ipWarmupEnable = true;
    $request->mirrorActive = true;
    $request->name = 'Newsletter - May 2017';
    $request->params = [
        'wield' => 'string',
    ];
    $request->previewText = 'Thanks for your order!';
    $request->recipients = new Shared\Recipients();
    $request->recipients->exclusionListIds = [
        8,
    ];
    $request->recipients->listIds = [
        32,
    ];
    $request->recipients->segmentIds = [
        23,
    ];
    $request->replyTo = 'support@myshop.com';
    $request->scheduledAt = '2017-06-01T12:30:00+02:00';
    $request->sendAtBestTime = true;
    $request->sender = new Shared\Sender();
    $request->sender->email = 'newsletter@myshop.com';
    $request->sender->id = 3;
    $request->sender->name = 'Mary from MyShop';
    $request->splitRule = 50;
    $request->subject = 'Discover the New Collection !';
    $request->subjectA = 'Discover the New Collection!';
    $request->subjectB = 'Want to discover the New Collection?';
    $request->tag = 'Newsletter';
    $request->templateId = 487466;
    $request->toField = '{FNAME} {LNAME}';
    $request->unsubscriptionPageId = '62cbb7fabbe85021021aac52';
    $request->updateFormId = '6313436b9ad40e23b371d095';
    $request->utmCampaign = 'NL_05_2017';
    $request->winnerCriteria = Shared\WinnerCriteria::Open;
    $request->winnerDelay = 50;;

    $response = $sdk->emailCampaigns->createEmailCampaign($request);

    if ($response->createModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\test\BREVO\Models\Shared\CreateEmailCampaign](../../Models/Shared/CreateEmailCampaign.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\test\BREVO\Models\Operations\CreateEmailCampaignResponse](../../Models/Operations/CreateEmailCampaignResponse.md)**


## deleteEmailCampaign

Delete an email campaign

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
        $request = new Operations\DeleteEmailCampaignRequest();
    $request->campaignId = 413690;;

    $response = $sdk->emailCampaigns->deleteEmailCampaign($request);

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\DeleteEmailCampaignRequest](../../Models/Operations/DeleteEmailCampaignRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\DeleteEmailCampaignResponse](../../Models/Operations/DeleteEmailCampaignResponse.md)**


## emailExportRecipients

Export the recipients of an email campaign

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
        $request = new Operations\EmailExportRecipientsRequest();
    $request->campaignId = 116313;
    $request->emailExportRecipients = new Shared\EmailExportRecipients();
    $request->emailExportRecipients->notifyURL = 'http://requestb.in/173lyyx1';
    $request->emailExportRecipients->recipientsType = Shared\RecipientsType::Openers;;

    $response = $sdk->emailCampaigns->emailExportRecipients($request);

    if ($response->createdProcessId !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\EmailExportRecipientsRequest](../../Models/Operations/EmailExportRecipientsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\EmailExportRecipientsResponse](../../Models/Operations/EmailExportRecipientsResponse.md)**


## getAbTestCampaignResult

Obtain winning version of an A/B test email campaign

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
        $request = new Operations\GetAbTestCampaignResultRequest();
    $request->campaignId = 968439;;

    $response = $sdk->emailCampaigns->getAbTestCampaignResult($request);

    if ($response->abTestCampaignResult !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\test\BREVO\Models\Operations\GetAbTestCampaignResultRequest](../../Models/Operations/GetAbTestCampaignResultRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetAbTestCampaignResultResponse](../../Models/Operations/GetAbTestCampaignResultResponse.md)**


## getEmailCampaign

Get an email campaign report

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
        $request = new Operations\GetEmailCampaignRequest();
    $request->campaignId = 715666;
    $request->statistics = Operations\Statistics::GlobalStats;;

    $response = $sdk->emailCampaigns->getEmailCampaign($request);

    if ($response->getEmailCampaign !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\GetEmailCampaignRequest](../../Models/Operations/GetEmailCampaignRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetEmailCampaignResponse](../../Models/Operations/GetEmailCampaignResponse.md)**


## getEmailCampaigns

Return all your created email campaigns

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
        $request = new Operations\GetEmailCampaignsRequest();
    $request->endDate = 'string';
    $request->excludeHtmlContent = Operations\ExcludeHtmlContent::True;
    $request->limit = 276251;
    $request->offset = 238074;
    $request->sort = Operations\GetEmailCampaignsQueryParamSort::Asc;
    $request->startDate = 'string';
    $request->statistics = Operations\QueryParamStatistics::LinksStats;
    $request->status = Operations\Status::Archive;
    $request->type = Operations\Type::Trigger;;

    $response = $sdk->emailCampaigns->getEmailCampaigns($request);

    if ($response->getEmailCampaigns !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\GetEmailCampaignsRequest](../../Models/Operations/GetEmailCampaignsRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetEmailCampaignsResponse](../../Models/Operations/GetEmailCampaignsResponse.md)**


## getSharedTemplateUrl

Get a unique URL to share & import an email template from one Brevo account to another.

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
        $request = new Operations\GetSharedTemplateUrlRequest();
    $request->campaignId = 374812;;

    $response = $sdk->emailCampaigns->getSharedTemplateUrl($request);

    if ($response->getSharedTemplateUrl !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\GetSharedTemplateUrlRequest](../../Models/Operations/GetSharedTemplateUrlRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetSharedTemplateUrlResponse](../../Models/Operations/GetSharedTemplateUrlResponse.md)**


## sendEmailCampaignNow

Send an email campaign immediately, based on campaignId

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
        $request = new Operations\SendEmailCampaignNowRequest();
    $request->campaignId = 666463;;

    $response = $sdk->emailCampaigns->sendEmailCampaignNow($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\SendEmailCampaignNowRequest](../../Models/Operations/SendEmailCampaignNowRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\SendEmailCampaignNowResponse](../../Models/Operations/SendEmailCampaignNowResponse.md)**


## sendReport

A PDF will be sent to the specified email addresses

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
        $request = new Operations\SendReportRequest();
    $request->campaignId = 349447;
    $request->sendReport = new Shared\SendReport();
    $request->sendReport->email = new Shared\Email();
    $request->sendReport->email->body = 'Please find attached the report of our last email campaign.';
    $request->sendReport->email->to = [
        'jim.suehan@example.com',
    ];
    $request->sendReport->language = Shared\SendReportLanguage::En;;

    $response = $sdk->emailCampaigns->sendReport($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\test\BREVO\Models\Operations\SendReportRequest](../../Models/Operations/SendReportRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\SendReportResponse](../../Models/Operations/SendReportResponse.md)**


## sendTestEmail

Send an email campaign to your test list

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
        $request = new Operations\SendTestEmailRequest();
    $request->campaignId = 634623;
    $request->sendTestEmail = new Shared\SendTestEmail();
    $request->sendTestEmail->emailTo = [
        'helen.jurger@example.com',
    ];;

    $response = $sdk->emailCampaigns->sendTestEmail($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\SendTestEmailRequest](../../Models/Operations/SendTestEmailRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\SendTestEmailResponse](../../Models/Operations/SendTestEmailResponse.md)**


## updateCampaignStatus

Update an email campaign status

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
        $request = new Operations\UpdateCampaignStatusRequest();
    $request->campaignId = 859791;
    $request->updateCampaignStatus = new Shared\UpdateCampaignStatus();
    $request->updateCampaignStatus->status = Shared\UpdateCampaignStatusStatus::ReplicateTemplate;;

    $response = $sdk->emailCampaigns->updateCampaignStatus($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\UpdateCampaignStatusRequest](../../Models/Operations/UpdateCampaignStatusRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\UpdateCampaignStatusResponse](../../Models/Operations/UpdateCampaignStatusResponse.md)**


## updateEmailCampaign

Update an email campaign

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
        $request = new Operations\UpdateEmailCampaignRequest();
    $request->campaignId = 130470;
    $request->updateEmailCampaign = new Shared\UpdateEmailCampaign();
    $request->updateEmailCampaign->abTesting = true;
    $request->updateEmailCampaign->attachmentUrl = 'https://attachment.domain.com';
    $request->updateEmailCampaign->footer = '[DEFAULT_FOOTER]';
    $request->updateEmailCampaign->header = '[DEFAULT_HEADER]';
    $request->updateEmailCampaign->htmlContent = '<!DOCTYPE html> <html> <body> <h1>Confirm you email</h1> <p>Please confirm your email address by clicking on the link below</p> </body> </html>';
    $request->updateEmailCampaign->htmlUrl = 'https://html.domain.com';
    $request->updateEmailCampaign->increaseRate = 70;
    $request->updateEmailCampaign->initialQuota = 3000;
    $request->updateEmailCampaign->inlineImageActivation = true;
    $request->updateEmailCampaign->ipWarmupEnable = true;
    $request->updateEmailCampaign->mirrorActive = true;
    $request->updateEmailCampaign->name = 'Newsletter - May 2017';
    $request->updateEmailCampaign->params = [
        'Bicycle' => 'string',
    ];
    $request->updateEmailCampaign->previewText = 'Thanks for your order!';
    $request->updateEmailCampaign->recipients = new Shared\UpdateEmailCampaignRecipients();
    $request->updateEmailCampaign->recipients->exclusionListIds = [
        8,
    ];
    $request->updateEmailCampaign->recipients->listIds = [
        32,
    ];
    $request->updateEmailCampaign->recipients->segmentIds = [
        23,
    ];
    $request->updateEmailCampaign->recurring = false;
    $request->updateEmailCampaign->replyTo = 'support@myshop.com';
    $request->updateEmailCampaign->scheduledAt = '2017-06-01T12:30:00+02:00';
    $request->updateEmailCampaign->sendAtBestTime = true;
    $request->updateEmailCampaign->sender = new Shared\UpdateEmailCampaignSender();
    $request->updateEmailCampaign->sender->email = 'newsletter@myshop.com';
    $request->updateEmailCampaign->sender->id = 3;
    $request->updateEmailCampaign->sender->name = 'Mary from MyShop';
    $request->updateEmailCampaign->splitRule = 50;
    $request->updateEmailCampaign->subject = 'Discover the New Collection !';
    $request->updateEmailCampaign->subjectA = 'Discover the New Collection!';
    $request->updateEmailCampaign->subjectB = 'Want to discover the New Collection?';
    $request->updateEmailCampaign->tag = 'Newsletter';
    $request->updateEmailCampaign->toField = '{FNAME} {LNAME}';
    $request->updateEmailCampaign->unsubscriptionPageId = '62cbb7fabbe85021021aac52';
    $request->updateEmailCampaign->updateFormId = '6313436b9ad40e23b371d095';
    $request->updateEmailCampaign->utmCampaign = 'NL_05_2017';
    $request->updateEmailCampaign->winnerCriteria = Shared\UpdateEmailCampaignWinnerCriteria::Open;
    $request->updateEmailCampaign->winnerDelay = 50;;

    $response = $sdk->emailCampaigns->updateEmailCampaign($request);

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\UpdateEmailCampaignRequest](../../Models/Operations/UpdateEmailCampaignRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\UpdateEmailCampaignResponse](../../Models/Operations/UpdateEmailCampaignResponse.md)**


## uploadImageToGallery

Upload an image to your account's image gallery

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
        $request = new Shared\UploadImageToGallery();
    $request->imageUrl = 'https://somedomain.com/image1.jpg';
    $request->name = 'nature.jpg';;

    $response = $sdk->emailCampaigns->uploadImageToGallery($request);

    if ($response->uploadImageModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\test\BREVO\Models\Shared\UploadImageToGallery](../../Models/Shared/UploadImageToGallery.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\test\BREVO\Models\Operations\UploadImageToGalleryResponse](../../Models/Operations/UploadImageToGalleryResponse.md)**

