# WhatsAppCampaigns


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

use \test\BREVO;
use \test\BREVO\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateWhatsAppCampaign();
    $request->name = 'Test Campaign';
    $request->recipients = new Shared\CreateWhatsAppCampaignRecipients();
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
    $request->templateId = 19;;

    $response = $sdk->whatsAppCampaigns->createWhatsAppCampaign($request);

    if ($response->createModel !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Shared\CreateWhatsAppCampaign](../../Models/Shared/CreateWhatsAppCampaign.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\CreateWhatsAppCampaignResponse](../../Models/Operations/CreateWhatsAppCampaignResponse.md)**


## createWhatsAppTemplate

Create a WhatsApp template

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
        $request = new Shared\CreateWhatsAppTemplate();
    $request->bodyText = 'making it look like readable English';
    $request->category = Shared\Category::Marketing;
    $request->headerText = 'Test WhatsApp campaign';
    $request->language = 'en';
    $request->mediaUrl = 'https://attachment.domain.com';
    $request->name = 'Test template';;

    $response = $sdk->whatsAppCampaigns->createWhatsAppTemplate($request);

    if ($response->createModel !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Shared\CreateWhatsAppTemplate](../../Models/Shared/CreateWhatsAppTemplate.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\CreateWhatsAppTemplateResponse](../../Models/Operations/CreateWhatsAppTemplateResponse.md)**


## deleteWhatsAppCampaign

Delete a WhatsApp campaign

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
        $request = new Operations\DeleteWhatsAppCampaignRequest();
    $request->campaignId = 789504;;

    $response = $sdk->whatsAppCampaigns->deleteWhatsAppCampaign($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\DeleteWhatsAppCampaignRequest](../../Models/Operations/DeleteWhatsAppCampaignRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\DeleteWhatsAppCampaignResponse](../../Models/Operations/DeleteWhatsAppCampaignResponse.md)**


## getWhatsAppCampaign

Get a WhatsApp campaign

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
        $request = new Operations\GetWhatsAppCampaignRequest();
    $request->campaignId = 179428;;

    $response = $sdk->whatsAppCampaigns->getWhatsAppCampaign($request);

    if ($response->getWhatsappCampaignOverview !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetWhatsAppCampaignRequest](../../Models/Operations/GetWhatsAppCampaignRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetWhatsAppCampaignResponse](../../Models/Operations/GetWhatsAppCampaignResponse.md)**


## getWhatsAppCampaigns

Return all your created WhatsApp campaigns

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
        $request = new Operations\GetWhatsAppCampaignsRequest();
    $request->endDate = '<value>';
    $request->limit = 452266;
    $request->offset = 758325;
    $request->sort = Operations\GetWhatsAppCampaignsQueryParamSort::Asc;
    $request->startDate = '<value>';;

    $response = $sdk->whatsAppCampaigns->getWhatsAppCampaigns($request);

    if ($response->getWhatsappCampaigns !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\GetWhatsAppCampaignsRequest](../../Models/Operations/GetWhatsAppCampaignsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetWhatsAppCampaignsResponse](../../Models/Operations/GetWhatsAppCampaignsResponse.md)**


## getWhatsAppConfig

Get your WhatsApp API account information

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
    $response = $sdk->whatsAppCampaigns->getWhatsAppConfig();

    if ($response->getWhatsAppConfig !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetWhatsAppConfigResponse](../../Models/Operations/GetWhatsAppConfigResponse.md)**


## getWhatsAppTemplates

Return all your created WhatsApp templates

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
        $request = new Operations\GetWhatsAppTemplatesRequest();
    $request->endDate = '<value>';
    $request->limit = 39819;
    $request->offset = 185489;
    $request->sort = Operations\GetWhatsAppTemplatesQueryParamSort::Asc;
    $request->startDate = '<value>';;

    $response = $sdk->whatsAppCampaigns->getWhatsAppTemplates($request);

    if ($response->getWhatsappTemplates !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\GetWhatsAppTemplatesRequest](../../Models/Operations/GetWhatsAppTemplatesRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetWhatsAppTemplatesResponse](../../Models/Operations/GetWhatsAppTemplatesResponse.md)**


## sendWhatsAppTemplateApproval

Send your WhatsApp template for approval

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
        $request = new Operations\SendWhatsAppTemplateApprovalRequest();
    $request->templateId = 576759;;

    $response = $sdk->whatsAppCampaigns->sendWhatsAppTemplateApproval($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\test\BREVO\Models\Operations\SendWhatsAppTemplateApprovalRequest](../../Models/Operations/SendWhatsAppTemplateApprovalRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\test\BREVO\Models\Operations\SendWhatsAppTemplateApprovalResponse](../../Models/Operations/SendWhatsAppTemplateApprovalResponse.md)**


## updateWhatsAppCampaign

Update a WhatsApp campaign

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
        $request = new Operations\UpdateWhatsAppCampaignRequest();
    $request->campaignId = 898516;
    $request->updateWhatsAppCampaign = new Shared\UpdateWhatsAppCampaign();
    $request->updateWhatsAppCampaign->campaignName = 'Test WhatsApp';
    $request->updateWhatsAppCampaign->campaignStatus = Shared\UpdateWhatsAppCampaignCampaignStatus::Scheduled;
    $request->updateWhatsAppCampaign->recipients = new Shared\UpdateWhatsAppCampaignRecipients();
    $request->updateWhatsAppCampaign->recipients->excludedListIds = [
        8,
    ];
    $request->updateWhatsAppCampaign->recipients->listIds = [
        32,
    ];
    $request->updateWhatsAppCampaign->recipients->segments = [
        23,
    ];
    $request->updateWhatsAppCampaign->rescheduleFor = '2017-06-01T12:30:00+02:00';;

    $response = $sdk->whatsAppCampaigns->updateWhatsAppCampaign($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\UpdateWhatsAppCampaignRequest](../../Models/Operations/UpdateWhatsAppCampaignRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\UpdateWhatsAppCampaignResponse](../../Models/Operations/UpdateWhatsAppCampaignResponse.md)**

