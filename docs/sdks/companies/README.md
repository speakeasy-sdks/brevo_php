# Companies


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

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\DeleteCompaniesIdRequest();
    $request->id = '<ID>';

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

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCompaniesRequest();
    $request->filters = 'string';
    $request->limit = 817302;
    $request->linkedContactsIds = 571205;
    $request->linkedDealsIds = 'string';
    $request->page = 66234;
    $request->sort = Operations\Sort::Desc;
    $request->sortBy = 'string';

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

use \test\BREVO;
use \test\BREVO\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
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

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCompaniesIdRequest();
    $request->id = '<ID>';

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

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchCompaniesLinkUnlinkIdRequest();
    $request->requestBody = new Operations\PatchCompaniesLinkUnlinkIdRequestBody();
    $request->requestBody->linkContactIds = [
        478673,
    ];
    $request->requestBody->linkDealsIds = [
        'string',
    ];
    $request->requestBody->unlinkContactIds = [
        514435,
    ];
    $request->requestBody->unlinkDealsIds = [
        'string',
    ];
    $request->id = '<ID>';

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

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchCompaniesIdRequest();
    $request->requestBody = new Operations\PatchCompaniesIdRequestBody();
    $request->requestBody->attributes = new Operations\Attributes();
    $request->requestBody->countryCode = 91;
    $request->requestBody->name = 'company';
    $request->id = '<ID>';

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

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PostCompaniesRequestBody();
    $request->attributes = new Operations\PostCompaniesAttributes();
    $request->countryCode = 91;
    $request->name = 'company';

    $response = $sdk->companies->postCompanies($request);

    if ($response->object !== null) {
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

