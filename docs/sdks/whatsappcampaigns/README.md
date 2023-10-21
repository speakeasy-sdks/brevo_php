# WhatsAppCampaigns
(*whatsAppCampaigns*)

### Available Operations

* [createWhatsAppCampaign](#createwhatsappcampaign) - Create and Send a WhatsApp campaign
* [createWhatsAppTemplate](#createwhatsapptemplate) - Create a WhatsApp template
* [deleteWhatsAppCampaign](#deletewhatsappcampaign) - Delete a WhatsApp campaign
* [getWhatsAppCampaign](#getwhatsappcampaign) - Get a WhatsApp campaign
* [getWhatsAppCampaigns](#getwhatsappcampaigns) - Return all your created WhatsApp campaigns
* [getWhatsAppConfig](#getwhatsappconfig) - Get your WhatsApp API account information
* [getWhatsAppTemplates](#getwhatsapptemplates) - Return all your created WhatsApp templates
* [sendWhatsAppTemplateApproval](#sendwhatsapptemplateapproval) - Send your WhatsApp template for approval
* [updateWhatsAppCampaign](#updatewhatsappcampaign) - Update a WhatsApp campaign

## createWhatsAppCampaign

Create and Send a WhatsApp campaign

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateWhatsAppCampaign;
use \test\BREVO\Models\Shared\CreateWhatsAppCampaignRecipients;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateWhatsAppCampaign();
    $request->name = 'Test Campaign';
    $request->recipients = new CreateWhatsAppCampaignRecipients();
    $request->recipients->excludedListIds = [
        8,
    ];
    $request->recipients->listIds = [
        32,
    ];
    $request->recipients->segments = [
        23,
    ];
    $request->scheduledAt = '2017-06-01T12:30:00+02:00';
    $request->templateId = 19;

    $response = $sdk->whatsAppCampaigns->createWhatsAppCampaign($request);

    if ($response->createModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Shared\CreateWhatsAppCampaign](../../models/shared/CreateWhatsAppCampaign.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\CreateWhatsAppCampaignResponse](../../models/operations/CreateWhatsAppCampaignResponse.md)**


## createWhatsAppTemplate

Create a WhatsApp template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateWhatsAppTemplate;
use \test\BREVO\Models\Shared\CreateWhatsAppTemplateCategory;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateWhatsAppTemplate();
    $request->bodyText = 'making it look like readable English';
    $request->category = CreateWhatsAppTemplateCategory::Marketing;
    $request->headerText = 'Test WhatsApp campaign';
    $request->language = 'en';
    $request->mediaUrl = 'https://attachment.domain.com';
    $request->name = 'Test template';

    $response = $sdk->whatsAppCampaigns->createWhatsAppTemplate($request);

    if ($response->createModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Shared\CreateWhatsAppTemplate](../../models/shared/CreateWhatsAppTemplate.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\CreateWhatsAppTemplateResponse](../../models/operations/CreateWhatsAppTemplateResponse.md)**


## deleteWhatsAppCampaign

Delete a WhatsApp campaign

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteWhatsAppCampaignRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteWhatsAppCampaignRequest();
    $request->campaignId = 789504;

    $response = $sdk->whatsAppCampaigns->deleteWhatsAppCampaign($request);

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
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\DeleteWhatsAppCampaignRequest](../../models/operations/DeleteWhatsAppCampaignRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\DeleteWhatsAppCampaignResponse](../../models/operations/DeleteWhatsAppCampaignResponse.md)**


## getWhatsAppCampaign

Get a WhatsApp campaign

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetWhatsAppCampaignRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetWhatsAppCampaignRequest();
    $request->campaignId = 179428;

    $response = $sdk->whatsAppCampaigns->getWhatsAppCampaign($request);

    if ($response->getWhatsappCampaignOverview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetWhatsAppCampaignRequest](../../models/operations/GetWhatsAppCampaignRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetWhatsAppCampaignResponse](../../models/operations/GetWhatsAppCampaignResponse.md)**


## getWhatsAppCampaigns

Return all your created WhatsApp campaigns

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetWhatsAppCampaignsRequest;
use \test\BREVO\Models\Operations\GetWhatsAppCampaignsSort;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetWhatsAppCampaignsRequest();
    $request->endDate = 'string';
    $request->limit = 452266;
    $request->offset = 758325;
    $request->sort = GetWhatsAppCampaignsSort::Asc;
    $request->startDate = 'string';

    $response = $sdk->whatsAppCampaigns->getWhatsAppCampaigns($request);

    if ($response->getWhatsappCampaigns !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\GetWhatsAppCampaignsRequest](../../models/operations/GetWhatsAppCampaignsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetWhatsAppCampaignsResponse](../../models/operations/GetWhatsAppCampaignsResponse.md)**


## getWhatsAppConfig

Get your WhatsApp API account information

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->whatsAppCampaigns->getWhatsAppConfig();

    if ($response->getWhatsAppConfig !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetWhatsAppConfigResponse](../../models/operations/GetWhatsAppConfigResponse.md)**


## getWhatsAppTemplates

Return all your created WhatsApp templates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetWhatsAppTemplatesRequest;
use \test\BREVO\Models\Operations\GetWhatsAppTemplatesSort;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetWhatsAppTemplatesRequest();
    $request->endDate = 'string';
    $request->limit = 39819;
    $request->offset = 185489;
    $request->sort = GetWhatsAppTemplatesSort::Asc;
    $request->startDate = 'string';

    $response = $sdk->whatsAppCampaigns->getWhatsAppTemplates($request);

    if ($response->getWhatsappTemplates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\GetWhatsAppTemplatesRequest](../../models/operations/GetWhatsAppTemplatesRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetWhatsAppTemplatesResponse](../../models/operations/GetWhatsAppTemplatesResponse.md)**


## sendWhatsAppTemplateApproval

Send your WhatsApp template for approval

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\SendWhatsAppTemplateApprovalRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new SendWhatsAppTemplateApprovalRequest();
    $request->templateId = 576759;

    $response = $sdk->whatsAppCampaigns->sendWhatsAppTemplateApproval($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\test\BREVO\Models\Operations\SendWhatsAppTemplateApprovalRequest](../../models/operations/SendWhatsAppTemplateApprovalRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\test\BREVO\Models\Operations\SendWhatsAppTemplateApprovalResponse](../../models/operations/SendWhatsAppTemplateApprovalResponse.md)**


## updateWhatsAppCampaign

Update a WhatsApp campaign

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateWhatsAppCampaignRequest;
use \test\BREVO\Models\Shared\UpdateWhatsAppCampaign;
use \test\BREVO\Models\Shared\UpdateWhatsAppCampaignCampaignStatus;
use \test\BREVO\Models\Shared\UpdateWhatsAppCampaignRecipients;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateWhatsAppCampaignRequest();
    $request->campaignId = 898516;
    $request->updateWhatsAppCampaign = new UpdateWhatsAppCampaign();
    $request->updateWhatsAppCampaign->campaignName = 'Test WhatsApp';
    $request->updateWhatsAppCampaign->campaignStatus = UpdateWhatsAppCampaignCampaignStatus::Scheduled;
    $request->updateWhatsAppCampaign->recipients = new UpdateWhatsAppCampaignRecipients();
    $request->updateWhatsAppCampaign->recipients->excludedListIds = [
        8,
    ];
    $request->updateWhatsAppCampaign->recipients->listIds = [
        32,
    ];
    $request->updateWhatsAppCampaign->recipients->segments = [
        23,
    ];
    $request->updateWhatsAppCampaign->rescheduleFor = '2017-06-01T12:30:00+02:00';

    $response = $sdk->whatsAppCampaigns->updateWhatsAppCampaign($request);

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
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\UpdateWhatsAppCampaignRequest](../../models/operations/UpdateWhatsAppCampaignRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\UpdateWhatsAppCampaignResponse](../../models/operations/UpdateWhatsAppCampaignResponse.md)**

