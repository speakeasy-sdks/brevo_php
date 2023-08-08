# files

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteCrmFilesIdRequest();
    $request->id = 'd4f6fbee-41f3-4331-bfe3-5b60eb1ea426';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCrmFilesRequest();
    $request->dateFrom = 374244;
    $request->dateTo = 374296;
    $request->entity = GetCrmFilesEntity::Companies;
    $request->entityIds = 'nobis';
    $request->limit = 680116;
    $request->offset = 237807;
    $request->sort = GetCrmFilesSort::Desc;

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCrmFilesIdRequest();
    $request->id = '28744ed5-3b88-4f3a-8d8f-5c0b2f2fb7b1';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCrmFilesIdDataRequest();
    $request->id = '94a276b2-6916-4fe1-b08f-4294e3698f44';

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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PostCrmFilesRequestBody();
    $request->companyId = 'voluptate';
    $request->contactId = 970076;
    $request->dealId = 'ex';
    $request->file = new PostCrmFilesRequestBodyFile();
    $request->file->content = 'sit';
    $request->file->file = 'non';

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

