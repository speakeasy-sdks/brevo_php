# Deals

### Available Operations

* [deleteCrmDealsId](#deletecrmdealsid) - Delete a deal
* [getCrmAttributesDeals](#getcrmattributesdeals) - Get deal attributes
* [getCrmDeals](#getcrmdeals) - Get all deals
* [getCrmDealsId](#getcrmdealsid) - Get a deal
* [~~getCrmPipelineDetails~~](#getcrmpipelinedetails) - Get pipeline stages :warning: **Deprecated**
* [getCrmPipelineDetailsAll](#getcrmpipelinedetailsall) - Get all pipelines
* [getCrmPipelineDetailsPipelineID](#getcrmpipelinedetailspipelineid) - Get a pipeline
* [patchCrmDealsLinkUnlinkId](#patchcrmdealslinkunlinkid) - Link and Unlink a deal with contacts and companies
* [patchCrmDealsId](#patchcrmdealsid) - Update a deal
* [postCrmDeals](#postcrmdeals) - Create a deal

## deleteCrmDealsId

Delete a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteCrmDealsIdRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteCrmDealsIdRequest();
    $request->id = 'ebf737ae-4203-4ce5-a6a9-5d8a0d446ce2';

    $response = $sdk->deals->deleteCrmDealsId($request);

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
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\DeleteCrmDealsIdRequest](../../models/operations/DeleteCrmDealsIdRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\DeleteCrmDealsIdResponse](../../models/operations/DeleteCrmDealsIdResponse.md)**


## getCrmAttributesDeals

Get deal attributes

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
    $response = $sdk->deals->getCrmAttributesDeals();

    if ($response->dealAttributes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetCrmAttributesDealsResponse](../../models/operations/GetCrmAttributesDealsResponse.md)**


## getCrmDeals

Get all deals

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCrmDealsRequest;
use \test\BREVO\Models\Operations\GetCrmDealsSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCrmDealsRequest();
    $request->filtersAttributesDealName = 'dolorum';
    $request->filtersLinkedCompaniesIds = 'a';
    $request->filtersLinkedContactsIds = 'esse';
    $request->limit = 687488;
    $request->offset = 483409;
    $request->sort = GetCrmDealsSort::Asc;

    $response = $sdk->deals->getCrmDeals($request);

    if ($response->dealsList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetCrmDealsRequest](../../models/operations/GetCrmDealsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetCrmDealsResponse](../../models/operations/GetCrmDealsResponse.md)**


## getCrmDealsId

Get a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCrmDealsIdRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCrmDealsIdRequest();
    $request->id = 'cf3be453-f870-4b32-ab5a-73429cdb1a84';

    $response = $sdk->deals->getCrmDealsId($request);

    if ($response->deal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\GetCrmDealsIdRequest](../../models/operations/GetCrmDealsIdRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetCrmDealsIdResponse](../../models/operations/GetCrmDealsIdResponse.md)**


## ~~getCrmPipelineDetails~~

This endpoint is deprecated. Prefer /crm/pipeline/details/{pipelineID} instead.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
    $response = $sdk->deals->getCrmPipelineDetails();

    if ($response->pipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetCrmPipelineDetailsResponse](../../models/operations/GetCrmPipelineDetailsResponse.md)**


## getCrmPipelineDetailsAll

Get all pipelines

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
    $response = $sdk->deals->getCrmPipelineDetailsAll();

    if ($response->pipelines !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetCrmPipelineDetailsAllResponse](../../models/operations/GetCrmPipelineDetailsAllResponse.md)**


## getCrmPipelineDetailsPipelineID

Get a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCrmPipelineDetailsPipelineIDRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCrmPipelineDetailsPipelineIDRequest();
    $request->pipelineID = 'aspernatur';

    $response = $sdk->deals->getCrmPipelineDetailsPipelineID($request);

    if ($response->pipelines !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\test\BREVO\Models\Operations\GetCrmPipelineDetailsPipelineIDRequest](../../models/operations/GetCrmPipelineDetailsPipelineIDRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetCrmPipelineDetailsPipelineIDResponse](../../models/operations/GetCrmPipelineDetailsPipelineIDResponse.md)**


## patchCrmDealsLinkUnlinkId

Link and Unlink a deal with contacts and companies

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PatchCrmDealsLinkUnlinkIdRequest;
use \test\BREVO\Models\Operations\PatchCrmDealsLinkUnlinkIdRequestBody;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PatchCrmDealsLinkUnlinkIdRequest();
    $request->requestBody = new PatchCrmDealsLinkUnlinkIdRequestBody();
    $request->requestBody->linkCompanyIds = [
        'dolores',
    ];
    $request->requestBody->linkContactIds = [
        716860,
    ];
    $request->requestBody->unlinkCompanyIds = [
        'facilis',
    ];
    $request->requestBody->unlinkContactIds = [
        396060,
    ];
    $request->id = '79d23227-15bf-40cb-b1e3-1b8b90f3443a';

    $response = $sdk->deals->patchCrmDealsLinkUnlinkId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\test\BREVO\Models\Operations\PatchCrmDealsLinkUnlinkIdRequest](../../models/operations/PatchCrmDealsLinkUnlinkIdRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\test\BREVO\Models\Operations\PatchCrmDealsLinkUnlinkIdResponse](../../models/operations/PatchCrmDealsLinkUnlinkIdResponse.md)**


## patchCrmDealsId

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PatchCrmDealsIdRequest;
use \test\BREVO\Models\Operations\PatchCrmDealsIdRequestBody;
use \test\BREVO\Models\Operations\PatchCrmDealsIdRequestBodyAttributes;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PatchCrmDealsIdRequest();
    $request->requestBody = new PatchCrmDealsIdRequestBody();
    $request->requestBody->attributes = new PatchCrmDealsIdRequestBodyAttributes();
    $request->requestBody->name = 'Deal: Connect with client';
    $request->id = '1108e0ad-cf4b-4921-879f-ce953f73ef7f';

    $response = $sdk->deals->patchCrmDealsId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\test\BREVO\Models\Operations\PatchCrmDealsIdRequest](../../models/operations/PatchCrmDealsIdRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\PatchCrmDealsIdResponse](../../models/operations/PatchCrmDealsIdResponse.md)**


## postCrmDeals

Create a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PostCrmDealsRequestBody;
use \test\BREVO\Models\Operations\PostCrmDealsRequestBodyAttributes;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PostCrmDealsRequestBody();
    $request->attributes = new PostCrmDealsRequestBodyAttributes();
    $request->name = 'Deal: Connect with company';

    $response = $sdk->deals->postCrmDeals($request);

    if ($response->postCrmDeals201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\PostCrmDealsRequestBody](../../models/operations/PostCrmDealsRequestBody.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\PostCrmDealsResponse](../../models/operations/PostCrmDealsResponse.md)**

