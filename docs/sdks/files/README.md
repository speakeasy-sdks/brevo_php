# Files

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
    $request->id = 'e674bdb0-4f15-4756-882d-68ea19f1d170';

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
    $request->dateFrom = 326701;
    $request->dateTo = 86532;
    $request->entity = GetCrmFilesEntity::Companies;
    $request->entityIds = 'adipisci';
    $request->limit = 614465;
    $request->offset = 839513;
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

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCrmFilesIdRequest();
    $request->id = '8086a184-0394-4c26-871f-93f5f0642dac';

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
    $request->id = '7af515cc-413a-4a63-aae8-d67864dbb675';

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
    $request->companyId = 'reiciendis';
    $request->contactId = 828657;
    $request->dealId = 'nemo';
    $request->file = new PostCrmFilesRequestBodyFile();
    $request->file->content = 'recusandae';
    $request->file->file = 'aliquid';

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

