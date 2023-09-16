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
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteCrmNotesIdRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteCrmNotesIdRequest();
    $request->id = '8f5c0b2f-2fb7-4b19-8a27-6b26916fe1f0';

    $response = $sdk->notes->deleteCrmNotesId($request);

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
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\DeleteCrmNotesIdRequest](../../models/operations/DeleteCrmNotesIdRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\DeleteCrmNotesIdResponse](../../models/operations/DeleteCrmNotesIdResponse.md)**


## getCrmNotes

Get all notes

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCrmNotesRequest;
use \test\BREVO\Models\Operations\GetCrmNotesEntity;
use \test\BREVO\Models\Operations\GetCrmNotesSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCrmNotesRequest();
    $request->dateFrom = 546885;
    $request->dateTo = 979574;
    $request->entity = GetCrmNotesEntity::Companies;
    $request->entityIds = 'sed';
    $request->limit = 592231;
    $request->offset = 258702;
    $request->sort = GetCrmNotesSort::Desc;

    $response = $sdk->notes->getCrmNotes($request);

    if ($response->noteList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetCrmNotesRequest](../../models/operations/GetCrmNotesRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetCrmNotesResponse](../../models/operations/GetCrmNotesResponse.md)**


## getCrmNotesId

Get a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCrmNotesIdRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCrmNotesIdRequest();
    $request->id = '3698f447-f603-4e8b-845e-80ca55efd20e';

    $response = $sdk->notes->getCrmNotesId($request);

    if ($response->note !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\GetCrmNotesIdRequest](../../models/operations/GetCrmNotesIdRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetCrmNotesIdResponse](../../models/operations/GetCrmNotesIdResponse.md)**


## patchCrmNotesId

Update a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PatchCrmNotesIdRequest;
use \test\BREVO\Models\Shared\NoteData;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PatchCrmNotesIdRequest();
    $request->noteData = new NoteData();
    $request->noteData->companyIds = [
        'numquam',
    ];
    $request->noteData->contactIds = [
        329935,
    ];
    $request->noteData->dealIds = [
        'in',
    ];
    $request->noteData->text = 'In communication with client for resolution of queries.';
    $request->id = 'e1858b6a-89fb-4e3a-9aa8-e4824d0ab407';

    $response = $sdk->notes->patchCrmNotesId($request);

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
| `$request`                                                                                                | [\test\BREVO\Models\Operations\PatchCrmNotesIdRequest](../../models/operations/PatchCrmNotesIdRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\PatchCrmNotesIdResponse](../../models/operations/PatchCrmNotesIdResponse.md)**


## postCrmNotes

Create a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\NoteData;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new NoteData();
    $request->companyIds = [
        'ipsam',
    ];
    $request->contactIds = [
        24527,
    ];
    $request->dealIds = [
        'voluptatum',
    ];
    $request->text = 'In communication with client for resolution of queries.';

    $response = $sdk->notes->postCrmNotes($request);

    if ($response->noteId !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                             | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `$request`                                                            | [\test\BREVO\Models\Shared\NoteData](../../models/shared/NoteData.md) | :heavy_check_mark:                                                    | The request object to use for the request.                            |


### Response

**[?\test\BREVO\Models\Operations\PostCrmNotesResponse](../../models/operations/PostCrmNotesResponse.md)**
