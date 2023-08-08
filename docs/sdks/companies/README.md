# companies

### Available Operations

* [deleteCompaniesId](#deletecompaniesid) - Delete a company
* [getCompanies](#getcompanies) - Get all Companies
* [getCompaniesAttributes](#getcompaniesattributes) - Get company attributes
* [getCompaniesId](#getcompaniesid) - Get a company
* [patchCompaniesLinkUnlinkId](#patchcompanieslinkunlinkid) - Link and Unlink company with contact and deal
* [patchCompaniesId](#patchcompaniesid) - Update a company
* [postCompanies](#postcompanies) - Create a company

## deleteCompaniesId

Delete a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteCompaniesIdRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteCompaniesIdRequest();
    $request->id = '9d8d69a6-74e0-4f46-bcc8-796ed151a05d';

    $response = $sdk->companies->deleteCompaniesId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\DeleteCompaniesIdRequest](../../models/operations/DeleteCompaniesIdRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\DeleteCompaniesIdResponse](../../models/operations/DeleteCompaniesIdResponse.md)**


## getCompanies

Get all Companies

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCompaniesRequest;
use \test\BREVO\Models\Operations\GetCompaniesSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCompaniesRequest();
    $request->filters = 'sapiente';
    $request->limit = 778157;
    $request->linkedContactsIds = 140350;
    $request->linkedDealsIds = 'at';
    $request->page = 870088;
    $request->sort = GetCompaniesSort::Desc;
    $request->sortBy = 'molestiae';

    $response = $sdk->companies->getCompanies($request);

    if ($response->companiesList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\test\BREVO\Models\Operations\GetCompaniesRequest](../../models/operations/GetCompaniesRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetCompaniesResponse](../../models/operations/GetCompaniesResponse.md)**


## getCompaniesAttributes

Get company attributes

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
    $response = $sdk->companies->getCompaniesAttributes();

    if ($response->companyAttributes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetCompaniesAttributesResponse](../../models/operations/GetCompaniesAttributesResponse.md)**


## getCompaniesId

Get a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCompaniesIdRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCompaniesIdRequest();
    $request->id = 'cc78ca1b-a928-4fc8-9674-2cb739205929';

    $response = $sdk->companies->getCompaniesId($request);

    if ($response->company !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\test\BREVO\Models\Operations\GetCompaniesIdRequest](../../models/operations/GetCompaniesIdRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetCompaniesIdResponse](../../models/operations/GetCompaniesIdResponse.md)**


## patchCompaniesLinkUnlinkId

Link and Unlink company with contact and deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PatchCompaniesLinkUnlinkIdRequest;
use \test\BREVO\Models\Operations\PatchCompaniesLinkUnlinkIdRequestBody;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PatchCompaniesLinkUnlinkIdRequest();
    $request->requestBody = new PatchCompaniesLinkUnlinkIdRequestBody();
    $request->requestBody->linkContactIds = [
        616934,
    ];
    $request->requestBody->linkDealsIds = [
        'hic',
        'saepe',
    ];
    $request->requestBody->unlinkContactIds = [
        449950,
        359508,
        613064,
    ];
    $request->requestBody->unlinkDealsIds = [
        'saepe',
        'quidem',
    ];
    $request->id = '10faaa23-52c5-4955-907a-ff1a3a2fa946';

    $response = $sdk->companies->patchCompaniesLinkUnlinkId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\test\BREVO\Models\Operations\PatchCompaniesLinkUnlinkIdRequest](../../models/operations/PatchCompaniesLinkUnlinkIdRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\test\BREVO\Models\Operations\PatchCompaniesLinkUnlinkIdResponse](../../models/operations/PatchCompaniesLinkUnlinkIdResponse.md)**


## patchCompaniesId

Update a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PatchCompaniesIdRequest;
use \test\BREVO\Models\Operations\PatchCompaniesIdRequestBody;
use \test\BREVO\Models\Operations\PatchCompaniesIdRequestBodyAttributes;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PatchCompaniesIdRequest();
    $request->requestBody = new PatchCompaniesIdRequestBody();
    $request->requestBody->attributes = new PatchCompaniesIdRequestBodyAttributes();
    $request->requestBody->countryCode = 91;
    $request->requestBody->name = 'company';
    $request->id = '7739251a-a52c-43f5-ad01-9da1ffe78f09';

    $response = $sdk->companies->patchCompaniesId($request);

    if ($response->company !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\PatchCompaniesIdRequest](../../models/operations/PatchCompaniesIdRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\PatchCompaniesIdResponse](../../models/operations/PatchCompaniesIdResponse.md)**


## postCompanies

Create a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PostCompaniesRequestBody;
use \test\BREVO\Models\Operations\PostCompaniesRequestBodyAttributes;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PostCompaniesRequestBody();
    $request->attributes = new PostCompaniesRequestBodyAttributes();
    $request->countryCode = 91;
    $request->name = 'company';

    $response = $sdk->companies->postCompanies($request);

    if ($response->postCompanies200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\PostCompaniesRequestBody](../../models/operations/PostCompaniesRequestBody.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\PostCompaniesResponse](../../models/operations/PostCompaniesResponse.md)**

