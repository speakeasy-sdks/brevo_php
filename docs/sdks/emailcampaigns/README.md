# EmailCampaigns
(*emailCampaigns*)

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

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateEmailCampaign;
use \test\BREVO\Models\Shared\CreateEmailCampaignRecipients;
use \test\BREVO\Models\Shared\CreateEmailCampaignSender;
use \test\BREVO\Models\Shared\CreateEmailCampaignWinnerCriteria;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateEmailCampaign();
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
        'wield' => 'online',
    ];
    $request->previewText = 'Thanks for your order!';
    $request->recipients = new CreateEmailCampaignRecipients();
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
    $request->sender = new CreateEmailCampaignSender();
    $request->sender->email = 'newsletter@myshop.com';
    $request->sender->id = 3;
    $request->sender->name = 'Mary from MyShop';
    $request->splitRule = 50;
    $request->subject = 'Discover the New Collection !';
    $request->subjectA = 'Discover the New Collection!';
    $request->subjectB = 'Want to discover the New Collection?';
    $request->tag = 'Newsletter';
    $request->templateId = 449692;
    $request->toField = '{FNAME} {LNAME}';
    $request->unsubscriptionPageId = '62cbb7fabbe85021021aac52';
    $request->updateFormId = '6313436b9ad40e23b371d095';
    $request->utmCampaign = 'NL_05_2017';
    $request->winnerCriteria = CreateEmailCampaignWinnerCriteria::Open;
    $request->winnerDelay = 50;

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
| `$request`                                                                                  | [\test\BREVO\Models\Shared\CreateEmailCampaign](../../models/shared/CreateEmailCampaign.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\test\BREVO\Models\Operations\CreateEmailCampaignResponse](../../models/operations/CreateEmailCampaignResponse.md)**


## deleteEmailCampaign

Delete an email campaign

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteEmailCampaignRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteEmailCampaignRequest();
    $request->campaignId = 413690;

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\DeleteEmailCampaignRequest](../../models/operations/DeleteEmailCampaignRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\DeleteEmailCampaignResponse](../../models/operations/DeleteEmailCampaignResponse.md)**


## emailExportRecipients

Export the recipients of an email campaign

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\EmailExportRecipientsRequest;
use \test\BREVO\Models\Shared\EmailExportRecipients;
use \test\BREVO\Models\Shared\EmailExportRecipientsRecipientsType;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new EmailExportRecipientsRequest();
    $request->campaignId = 116313;
    $request->emailExportRecipients = new EmailExportRecipients();
    $request->emailExportRecipients->notifyURL = 'http://requestb.in/173lyyx1';
    $request->emailExportRecipients->recipientsType = EmailExportRecipientsRecipientsType::Openers;

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
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\EmailExportRecipientsRequest](../../models/operations/EmailExportRecipientsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\EmailExportRecipientsResponse](../../models/operations/EmailExportRecipientsResponse.md)**


## getAbTestCampaignResult

Obtain winning version of an A/B test email campaign

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetAbTestCampaignResultRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetAbTestCampaignResultRequest();
    $request->campaignId = 968439;

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
| `$request`                                                                                                                | [\test\BREVO\Models\Operations\GetAbTestCampaignResultRequest](../../models/operations/GetAbTestCampaignResultRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetAbTestCampaignResultResponse](../../models/operations/GetAbTestCampaignResultResponse.md)**


## getEmailCampaign

Get an email campaign report

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetEmailCampaignRequest;
use \test\BREVO\Models\Operations\GetEmailCampaignStatistics;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetEmailCampaignRequest();
    $request->campaignId = 715666;
    $request->statistics = GetEmailCampaignStatistics::GlobalStats;

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
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\GetEmailCampaignRequest](../../models/operations/GetEmailCampaignRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetEmailCampaignResponse](../../models/operations/GetEmailCampaignResponse.md)**


## getEmailCampaigns

Return all your created email campaigns

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetEmailCampaignsRequest;
use \test\BREVO\Models\Operations\GetEmailCampaignsExcludeHTMLContent;
use \test\BREVO\Models\Operations\GetEmailCampaignsSort;
use \test\BREVO\Models\Operations\GetEmailCampaignsStatistics;
use \test\BREVO\Models\Operations\GetEmailCampaignsStatus;
use \test\BREVO\Models\Operations\GetEmailCampaignsType;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetEmailCampaignsRequest();
    $request->endDate = 'Gorgeous';
    $request->excludeHtmlContent = GetEmailCampaignsExcludeHTMLContent::False;
    $request->limit = 729461;
    $request->offset = 686479;
    $request->sort = GetEmailCampaignsSort::Asc;
    $request->startDate = 'Dynamic metrics';
    $request->statistics = GetEmailCampaignsStatistics::StatsByDomain;
    $request->status = GetEmailCampaignsStatus::Suspended;
    $request->type = GetEmailCampaignsType::Trigger;

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
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\GetEmailCampaignsRequest](../../models/operations/GetEmailCampaignsRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetEmailCampaignsResponse](../../models/operations/GetEmailCampaignsResponse.md)**


## getSharedTemplateUrl

Get a unique URL to share & import an email template from one Brevo account to another.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetSharedTemplateUrlRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetSharedTemplateUrlRequest();
    $request->campaignId = 374812;

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
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\GetSharedTemplateUrlRequest](../../models/operations/GetSharedTemplateUrlRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetSharedTemplateUrlResponse](../../models/operations/GetSharedTemplateUrlResponse.md)**


## sendEmailCampaignNow

Send an email campaign immediately, based on campaignId

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\SendEmailCampaignNowRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new SendEmailCampaignNowRequest();
    $request->campaignId = 666463;

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
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\SendEmailCampaignNowRequest](../../models/operations/SendEmailCampaignNowRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\SendEmailCampaignNowResponse](../../models/operations/SendEmailCampaignNowResponse.md)**


## sendReport

A PDF will be sent to the specified email addresses

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\SendReportRequest;
use \test\BREVO\Models\Shared\SendReport;
use \test\BREVO\Models\Shared\SendReportEmail;
use \test\BREVO\Models\Shared\SendReportLanguage;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new SendReportRequest();
    $request->campaignId = 349447;
    $request->sendReport = new SendReport();
    $request->sendReport->email = new SendReportEmail();
    $request->sendReport->email->body = 'Please find attached the report of our last email campaign.';
    $request->sendReport->email->to = [
        'jim.suehan@example.com',
    ];
    $request->sendReport->language = SendReportLanguage::En;

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
| `$request`                                                                                      | [\test\BREVO\Models\Operations\SendReportRequest](../../models/operations/SendReportRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\SendReportResponse](../../models/operations/SendReportResponse.md)**


## sendTestEmail

Send an email campaign to your test list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\SendTestEmailRequest;
use \test\BREVO\Models\Shared\SendTestEmail;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new SendTestEmailRequest();
    $request->campaignId = 634623;
    $request->sendTestEmail = new SendTestEmail();
    $request->sendTestEmail->emailTo = [
        'helen.jurger@example.com',
    ];

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
| `$request`                                                                                            | [\test\BREVO\Models\Operations\SendTestEmailRequest](../../models/operations/SendTestEmailRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\SendTestEmailResponse](../../models/operations/SendTestEmailResponse.md)**


## updateCampaignStatus

Update an email campaign status

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateCampaignStatusRequest;
use \test\BREVO\Models\Shared\UpdateCampaignStatus;
use \test\BREVO\Models\Shared\UpdateCampaignStatusStatus;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UpdateCampaignStatusRequest();
    $request->campaignId = 859791;
    $request->updateCampaignStatus = new UpdateCampaignStatus();
    $request->updateCampaignStatus->status = UpdateCampaignStatusStatus::ReplicateTemplate;

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
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\UpdateCampaignStatusRequest](../../models/operations/UpdateCampaignStatusRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\UpdateCampaignStatusResponse](../../models/operations/UpdateCampaignStatusResponse.md)**


## updateEmailCampaign

Update an email campaign

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateEmailCampaignRequest;
use \test\BREVO\Models\Shared\UpdateEmailCampaign;
use \test\BREVO\Models\Shared\UpdateEmailCampaignRecipients;
use \test\BREVO\Models\Shared\UpdateEmailCampaignSender;
use \test\BREVO\Models\Shared\UpdateEmailCampaignWinnerCriteria;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UpdateEmailCampaignRequest();
    $request->campaignId = 130470;
    $request->updateEmailCampaign = new UpdateEmailCampaign();
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
        'Bicycle' => 'gah',
    ];
    $request->updateEmailCampaign->previewText = 'Thanks for your order!';
    $request->updateEmailCampaign->recipients = new UpdateEmailCampaignRecipients();
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
    $request->updateEmailCampaign->sender = new UpdateEmailCampaignSender();
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
    $request->updateEmailCampaign->winnerCriteria = UpdateEmailCampaignWinnerCriteria::Open;
    $request->updateEmailCampaign->winnerDelay = 50;

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\UpdateEmailCampaignRequest](../../models/operations/UpdateEmailCampaignRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\UpdateEmailCampaignResponse](../../models/operations/UpdateEmailCampaignResponse.md)**


## uploadImageToGallery

Upload an image to your account's image gallery

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\UploadImageToGallery;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UploadImageToGallery();
    $request->imageUrl = 'https://somedomain.com/image1.jpg';
    $request->name = 'nature.jpg';

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
| `$request`                                                                                    | [\test\BREVO\Models\Shared\UploadImageToGallery](../../models/shared/UploadImageToGallery.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\test\BREVO\Models\Operations\UploadImageToGalleryResponse](../../models/operations/UploadImageToGalleryResponse.md)**

