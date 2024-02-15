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
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteCompaniesIdRequest();
    $request->id = '<id>';;

    $response = $sdk->companies->deleteCompaniesId($request);

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
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\DeleteCompaniesIdRequest](../../Models/Operations/DeleteCompaniesIdRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\DeleteCompaniesIdResponse](../../Models/Operations/DeleteCompaniesIdResponse.md)**


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
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCompaniesRequest();
    $request->filters = '<value>';
    $request->limit = 817302;
    $request->linkedContactsIds = 571205;
    $request->linkedDealsIds = '<value>';
    $request->page = 66234;
    $request->sort = Operations\Sort::Desc;
    $request->sortBy = '<value>';;

    $response = $sdk->companies->getCompanies($request);

    if ($response->companiesList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\test\BREVO\Models\Operations\GetCompaniesRequest](../../Models/Operations/GetCompaniesRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetCompaniesResponse](../../Models/Operations/GetCompaniesResponse.md)**


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
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
    $response = $sdk->companies->getCompaniesAttributes();

    if ($response->companyAttributes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetCompaniesAttributesResponse](../../Models/Operations/GetCompaniesAttributesResponse.md)**


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
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCompaniesIdRequest();
    $request->id = '<id>';;

    $response = $sdk->companies->getCompaniesId($request);

    if ($response->company !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\test\BREVO\Models\Operations\GetCompaniesIdRequest](../../Models/Operations/GetCompaniesIdRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetCompaniesIdResponse](../../Models/Operations/GetCompaniesIdResponse.md)**


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
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchCompaniesLinkUnlinkIdRequest();
    $request->requestBody = new Operations\PatchCompaniesLinkUnlinkIdRequestBody();
    $request->requestBody->linkContactIds = [
        478673,
    ];
    $request->requestBody->linkDealsIds = [
        '<value>',
    ];
    $request->requestBody->unlinkContactIds = [
        514435,
    ];
    $request->requestBody->unlinkDealsIds = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->companies->patchCompaniesLinkUnlinkId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\test\BREVO\Models\Operations\PatchCompaniesLinkUnlinkIdRequest](../../Models/Operations/PatchCompaniesLinkUnlinkIdRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\test\BREVO\Models\Operations\PatchCompaniesLinkUnlinkIdResponse](../../Models/Operations/PatchCompaniesLinkUnlinkIdResponse.md)**


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
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchCompaniesIdRequest();
    $request->requestBody = new Operations\PatchCompaniesIdRequestBody();
    $request->requestBody->attributes = new Operations\Attributes();
    $request->requestBody->countryCode = 91;
    $request->requestBody->name = 'company';
    $request->id = '<id>';;

    $response = $sdk->companies->patchCompaniesId($request);

    if ($response->company !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\PatchCompaniesIdRequest](../../Models/Operations/PatchCompaniesIdRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\PatchCompaniesIdResponse](../../Models/Operations/PatchCompaniesIdResponse.md)**


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
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PostCompaniesRequestBody();
    $request->attributes = new Operations\PostCompaniesAttributes();
    $request->countryCode = 91;
    $request->name = 'company';;

    $response = $sdk->companies->postCompanies($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\PostCompaniesRequestBody](../../Models/Operations/PostCompaniesRequestBody.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\PostCompaniesResponse](../../Models/Operations/PostCompaniesResponse.md)**

