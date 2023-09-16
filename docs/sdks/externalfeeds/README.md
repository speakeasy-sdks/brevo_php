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

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateExternalFeed;
use \test\BREVO\Models\Shared\CreateExternalFeedAuthType;
use \test\BREVO\Models\Shared\CreateExternalFeedHeaders;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateExternalFeed();
    $request->authType = CreateExternalFeedAuthType::Basic;
    $request->cache = true;
    $request->headers = [
        new CreateExternalFeedHeaders(),
    ];
    $request->maxRetries = 5;
    $request->name = 'New feed';
    $request->password = 'password';
    $request->token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c';
    $request->url = 'http://requestb.in/173lyyx1';
    $request->username = 'user';

    $response = $sdk->externalFeeds->createExternalFeed($request);

    if ($response->createExternalFeed201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `$request`                                                                                | [\test\BREVO\Models\Shared\CreateExternalFeed](../../models/shared/CreateExternalFeed.md) | :heavy_check_mark:                                                                        | The request object to use for the request.                                                |


### Response

**[?\test\BREVO\Models\Operations\CreateExternalFeedResponse](../../models/operations/CreateExternalFeedResponse.md)**


## deleteExternalFeed

This endpoint will delete an external feed.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteExternalFeedRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteExternalFeedRequest();
    $request->uuid = '4e523c7e-0bc7-4178-a479-6f2a70c68828';

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
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\DeleteExternalFeedRequest](../../models/operations/DeleteExternalFeedRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\DeleteExternalFeedResponse](../../models/operations/DeleteExternalFeedResponse.md)**


## getAllExternalFeeds

This endpoint can fetch all created external feeds.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetAllExternalFeedsRequest;
use \test\BREVO\Models\Operations\GetAllExternalFeedsAuthType;
use \test\BREVO\Models\Operations\GetAllExternalFeedsSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetAllExternalFeedsRequest();
    $request->authType = GetAllExternalFeedsAuthType::Basic;
    $request->endDate = DateTime::createFromFormat('Y-m-d', '2021-09-13');
    $request->limit = 277596;
    $request->offset = 539224;
    $request->search = 'explicabo';
    $request->sort = GetAllExternalFeedsSort::Asc;
    $request->startDate = DateTime::createFromFormat('Y-m-d', '2022-11-08');

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetAllExternalFeedsRequest](../../models/operations/GetAllExternalFeedsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetAllExternalFeedsResponse](../../models/operations/GetAllExternalFeedsResponse.md)**


## getExternalFeedByUUID

This endpoint will update an external feed.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetExternalFeedByUUIDRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetExternalFeedByUUIDRequest();
    $request->uuid = 'f222e981-7ee1-47cb-a61e-6b7b95bc0ab3';

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
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\GetExternalFeedByUUIDRequest](../../models/operations/GetExternalFeedByUUIDRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetExternalFeedByUUIDResponse](../../models/operations/GetExternalFeedByUUIDResponse.md)**


## updateExternalFeed

This endpoint will update an external feed.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateExternalFeedRequest;
use \test\BREVO\Models\Shared\UpdateExternalFeed;
use \test\BREVO\Models\Shared\UpdateExternalFeedAuthType;
use \test\BREVO\Models\Shared\UpdateExternalFeedHeaders;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UpdateExternalFeedRequest();
    $request->updateExternalFeed = new UpdateExternalFeed();
    $request->updateExternalFeed->authType = UpdateExternalFeedAuthType::NoAuth;
    $request->updateExternalFeed->cache = true;
    $request->updateExternalFeed->headers = [
        new UpdateExternalFeedHeaders(),
    ];
    $request->updateExternalFeed->maxRetries = 5;
    $request->updateExternalFeed->name = 'New feed';
    $request->updateExternalFeed->password = 'password';
    $request->updateExternalFeed->token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c';
    $request->updateExternalFeed->url = 'http://requestb.in/173lyyx1';
    $request->updateExternalFeed->username = 'user';
    $request->uuid = '20c4f378-9fd8-471f-99dd-2efd121aa6f1';

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
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\UpdateExternalFeedRequest](../../models/operations/UpdateExternalFeedRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\UpdateExternalFeedResponse](../../models/operations/UpdateExternalFeedResponse.md)**

