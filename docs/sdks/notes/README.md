# Notes


### Available Operations

* [deleteCrmNotesId](#deletecrmnotesid) - Delete a note
* [getCrmNotes](#getcrmnotes) - Get all notes
* [getCrmNotesId](#getcrmnotesid) - Get a note
* [patchCrmNotesId](#patchcrmnotesid) - Update a note
* [postCrmNotes](#postcrmnotes) - Create a note

## deleteCrmNotesId

Delete a note

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteCrmNotesIdRequest();
    $request->id = '<id>';;

    $response = $sdk->notes->deleteCrmNotesId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\DeleteCrmNotesIdRequest](../../Models/Operations/DeleteCrmNotesIdRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\DeleteCrmNotesIdResponse](../../Models/Operations/DeleteCrmNotesIdResponse.md)**


## getCrmNotes

Get all notes

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCrmNotesRequest();
    $request->dateFrom = 734797;
    $request->dateTo = 292043;
    $request->entity = Operations\QueryParamEntity::Contacts;
    $request->entityIds = '<value>';
    $request->limit = 672070;
    $request->offset = 601102;
    $request->sort = Operations\GetCrmNotesQueryParamSort::Asc;;

    $response = $sdk->notes->getCrmNotes($request);

    if ($response->noteList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetCrmNotesRequest](../../Models/Operations/GetCrmNotesRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetCrmNotesResponse](../../Models/Operations/GetCrmNotesResponse.md)**


## getCrmNotesId

Get a note

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCrmNotesIdRequest();
    $request->id = '<id>';;

    $response = $sdk->notes->getCrmNotesId($request);

    if ($response->note !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\GetCrmNotesIdRequest](../../Models/Operations/GetCrmNotesIdRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetCrmNotesIdResponse](../../Models/Operations/GetCrmNotesIdResponse.md)**


## patchCrmNotesId

Update a note

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchCrmNotesIdRequest();
    $request->noteData = new Shared\NoteData();
    $request->noteData->companyIds = [
        '<value>',
    ];
    $request->noteData->contactIds = [
        535017,
    ];
    $request->noteData->dealIds = [
        '<value>',
    ];
    $request->noteData->text = 'In communication with client for resolution of queries.';
    $request->id = '<id>';;

    $response = $sdk->notes->patchCrmNotesId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\test\BREVO\Models\Operations\PatchCrmNotesIdRequest](../../Models/Operations/PatchCrmNotesIdRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\PatchCrmNotesIdResponse](../../Models/Operations/PatchCrmNotesIdResponse.md)**


## postCrmNotes

Create a note

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Shared\NoteData();
    $request->companyIds = [
        '<value>',
    ];
    $request->contactIds = [
        684262,
    ];
    $request->dealIds = [
        '<value>',
    ];
    $request->text = 'In communication with client for resolution of queries.';;

    $response = $sdk->notes->postCrmNotes($request);

    if ($response->noteId !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                             | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `$request`                                                            | [\test\BREVO\Models\Shared\NoteData](../../Models/Shared/NoteData.md) | :heavy_check_mark:                                                    | The request object to use for the request.                            |


### Response

**[?\test\BREVO\Models\Operations\PostCrmNotesResponse](../../Models/Operations/PostCrmNotesResponse.md)**

