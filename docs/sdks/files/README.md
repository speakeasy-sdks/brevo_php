# Files
(*files*)

### Available Operations

* [deleteCrmFilesId](#deletecrmfilesid) - Delete a file
* [getCrmFiles](#getcrmfiles) - Get all files
* [getCrmFilesId](#getcrmfilesid) - Download a file
* [getCrmFilesIdData](#getcrmfilesiddata) - Get file details
* [postCrmFiles](#postcrmfiles) - Upload a file

## deleteCrmFilesId

Delete a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteCrmFilesIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmFilesIdRequest();
    $request->id = '<ID>';

    $response = $sdk->files->deleteCrmFilesId($request);

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
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\DeleteCrmFilesIdRequest](../../models/operations/DeleteCrmFilesIdRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\DeleteCrmFilesIdResponse](../../models/operations/DeleteCrmFilesIdResponse.md)**


## getCrmFiles

Get all files

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCrmFilesRequest;
use \test\BREVO\Models\Operations\GetCrmFilesEntity;
use \test\BREVO\Models\Operations\GetCrmFilesSort;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmFilesRequest();
    $request->dateFrom = 736297;
    $request->dateTo = 40718;
    $request->entity = GetCrmFilesEntity::Deals;
    $request->entityIds = 'string';
    $request->limit = 240606;
    $request->offset = 115165;
    $request->sort = GetCrmFilesSort::Asc;

    $response = $sdk->files->getCrmFiles($request);

    if ($response->fileList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetCrmFilesRequest](../../models/operations/GetCrmFilesRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetCrmFilesResponse](../../models/operations/GetCrmFilesResponse.md)**


## getCrmFilesId

Download a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCrmFilesIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmFilesIdRequest();
    $request->id = '<ID>';

    $response = $sdk->files->getCrmFilesId($request);

    if ($response->fileDownloadableLink !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\GetCrmFilesIdRequest](../../models/operations/GetCrmFilesIdRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetCrmFilesIdResponse](../../models/operations/GetCrmFilesIdResponse.md)**


## getCrmFilesIdData

Get file details

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCrmFilesIdDataRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmFilesIdDataRequest();
    $request->id = '<ID>';

    $response = $sdk->files->getCrmFilesIdData($request);

    if ($response->fileData !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\GetCrmFilesIdDataRequest](../../models/operations/GetCrmFilesIdDataRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetCrmFilesIdDataResponse](../../models/operations/GetCrmFilesIdDataResponse.md)**


## postCrmFiles

Upload a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PostCrmFilesRequestBody;
use \test\BREVO\Models\Operations\PostCrmFilesRequestBodyFile;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmFilesRequestBody();
    $request->companyId = 'string';
    $request->contactId = 256288;
    $request->dealId = 'string';
    $request->file = new PostCrmFilesRequestBodyFile();
    $request->file->content = 'k3*ek8J:Kt';
    $request->file->file = 'string';

    $response = $sdk->files->postCrmFiles($request);

    if ($response->fileData !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\PostCrmFilesRequestBody](../../models/operations/PostCrmFilesRequestBody.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\PostCrmFilesResponse](../../models/operations/PostCrmFilesResponse.md)**

