# ExternalFeeds


### Available Operations

* [createExternalFeed](#createexternalfeed) - Create an external feed
* [deleteExternalFeed](#deleteexternalfeed) - Delete an external feed
* [getAllExternalFeeds](#getallexternalfeeds) - Fetch all external feeds
* [getExternalFeedByUUID](#getexternalfeedbyuuid) - Get an external feed by UUID
* [updateExternalFeed](#updateexternalfeed) - Update an external feed

## createExternalFeed

This endpoint will create an external feed.

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
    $request = new Shared\CreateExternalFeed();
    $request->authType = Shared\AuthType::Token;
    $request->cache = true;
    $request->headers = [
        new Shared\Headers(),
    ];
    $request->maxRetries = 5;
    $request->name = 'New feed';
    $request->password = 'password';
    $request->token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c';
    $request->url = 'http://requestb.in/173lyyx1';
    $request->username = 'user';

    $response = $sdk->externalFeeds->createExternalFeed($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `$request`                                                                                | [\test\BREVO\Models\Shared\CreateExternalFeed](../../Models/Shared/CreateExternalFeed.md) | :heavy_check_mark:                                                                        | The request object to use for the request.                                                |


### Response

**[?\test\BREVO\Models\Operations\CreateExternalFeedResponse](../../Models/Operations/CreateExternalFeedResponse.md)**


## deleteExternalFeed

This endpoint will delete an external feed.

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
    $request = new Operations\DeleteExternalFeedRequest();
    $request->uuid = 'b0692cb8-a6d8-42d5-9923-10ace67bc974';

    $response = $sdk->externalFeeds->deleteExternalFeed($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\DeleteExternalFeedRequest](../../Models/Operations/DeleteExternalFeedRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\DeleteExternalFeedResponse](../../Models/Operations/DeleteExternalFeedResponse.md)**


## getAllExternalFeeds

This endpoint can fetch all created external feeds.

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
    $request = new Operations\GetAllExternalFeedsRequest();
    $request->authType = Operations\AuthType::NoAuth;
    $request->endDate = DateTime::createFromFormat('Y-m-d', '2022-12-17');
    $request->limit = 611577;
    $request->offset = 408687;
    $request->search = 'string';
    $request->sort = Operations\GetAllExternalFeedsQueryParamSort::Asc;
    $request->startDate = DateTime::createFromFormat('Y-m-d', '2023-06-18');

    $response = $sdk->externalFeeds->getAllExternalFeeds($request);

    if ($response->getAllExternalFeeds !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetAllExternalFeedsRequest](../../Models/Operations/GetAllExternalFeedsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetAllExternalFeedsResponse](../../Models/Operations/GetAllExternalFeedsResponse.md)**


## getExternalFeedByUUID

This endpoint will update an external feed.

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
    $request = new Operations\GetExternalFeedByUUIDRequest();
    $request->uuid = 'fa819eb0-857b-463d-ad10-39975748ac59';

    $response = $sdk->externalFeeds->getExternalFeedByUUID($request);

    if ($response->getExternalFeedByUUID !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\GetExternalFeedByUUIDRequest](../../Models/Operations/GetExternalFeedByUUIDRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetExternalFeedByUUIDResponse](../../Models/Operations/GetExternalFeedByUUIDResponse.md)**


## updateExternalFeed

This endpoint will update an external feed.

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
    $request = new Operations\UpdateExternalFeedRequest();
    $request->updateExternalFeed = new Shared\UpdateExternalFeed();
    $request->updateExternalFeed->authType = Shared\UpdateExternalFeedAuthType::NoAuth;
    $request->updateExternalFeed->cache = true;
    $request->updateExternalFeed->headers = [
        new Shared\UpdateExternalFeedHeaders(),
    ];
    $request->updateExternalFeed->maxRetries = 5;
    $request->updateExternalFeed->name = 'New feed';
    $request->updateExternalFeed->password = 'password';
    $request->updateExternalFeed->token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c';
    $request->updateExternalFeed->url = 'http://requestb.in/173lyyx1';
    $request->updateExternalFeed->username = 'user';
    $request->uuid = '5fe6c802-73af-494b-8891-280ca7739cb6';

    $response = $sdk->externalFeeds->updateExternalFeed($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\UpdateExternalFeedRequest](../../Models/Operations/UpdateExternalFeedRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\UpdateExternalFeedResponse](../../Models/Operations/UpdateExternalFeedResponse.md)**

