# Tasks


### Available Operations

* [deleteCrmTasksId](#deletecrmtasksid) - Delete a task
* [getCrmTasks](#getcrmtasks) - Get all tasks
* [getCrmTasksId](#getcrmtasksid) - Get a task
* [getCrmTasktypes](#getcrmtasktypes) - Get all task types
* [patchCrmTasksId](#patchcrmtasksid) - Update a task
* [postCrmTasks](#postcrmtasks) - Create a task

## deleteCrmTasksId

Delete a task

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
        $request = new Operations\DeleteCrmTasksIdRequest();
    $request->id = '<id>';;

    $response = $sdk->tasks->deleteCrmTasksId($request);

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
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\DeleteCrmTasksIdRequest](../../Models/Operations/DeleteCrmTasksIdRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\DeleteCrmTasksIdResponse](../../Models/Operations/DeleteCrmTasksIdResponse.md)**


## getCrmTasks

Get all tasks

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
        $request = new Operations\GetCrmTasksRequest();
    $request->dateFrom = 347707;
    $request->dateTo = 258884;
    $request->filterAssignTo = '<value>';
    $request->filterCompanies = '<value>';
    $request->filterContacts = '<value>';
    $request->filterDate = Operations\FilterDate::Week;
    $request->filterDeals = '<value>';
    $request->filterStatus = Operations\FilterStatus::Done;
    $request->filterType = '<value>';
    $request->limit = 92194;
    $request->offset = 295949;
    $request->sort = Operations\GetCrmTasksQueryParamSort::Desc;
    $request->sortBy = '<value>';;

    $response = $sdk->tasks->getCrmTasks($request);

    if ($response->taskList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetCrmTasksRequest](../../Models/Operations/GetCrmTasksRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetCrmTasksResponse](../../Models/Operations/GetCrmTasksResponse.md)**


## getCrmTasksId

Get a task

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
        $request = new Operations\GetCrmTasksIdRequest();
    $request->id = '<id>';;

    $response = $sdk->tasks->getCrmTasksId($request);

    if ($response->task !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\GetCrmTasksIdRequest](../../Models/Operations/GetCrmTasksIdRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetCrmTasksIdResponse](../../Models/Operations/GetCrmTasksIdResponse.md)**


## getCrmTasktypes

Get all task types

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
    $response = $sdk->tasks->getCrmTasktypes();

    if ($response->taskTypes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetCrmTasktypesResponse](../../Models/Operations/GetCrmTasktypesResponse.md)**


## patchCrmTasksId

Update a task

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
        $request = new Operations\PatchCrmTasksIdRequest();
    $request->requestBody = new Operations\PatchCrmTasksIdRequestBody();
    $request->requestBody->assignToId = '5faab4b7f195bb3c4c31e62a';
    $request->requestBody->companiesIds = [
        '<value>',
    ];
    $request->requestBody->contactsIds = [
        426328,
    ];
    $request->requestBody->date = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-01T17:44:54.668Z');
    $request->requestBody->dealsIds = [
        '<value>',
    ];
    $request->requestBody->done = false;
    $request->requestBody->duration = 600000;
    $request->requestBody->name = 'Task: Connect with client';
    $request->requestBody->notes = 'In communication with client for resolution of queries.';
    $request->requestBody->reminder = new Shared\TaskReminder();
    $request->requestBody->reminder->types = [
        Shared\Types::Push,
    ];
    $request->requestBody->reminder->unit = Shared\Unit::Weeks;
    $request->requestBody->reminder->value = 10;
    $request->requestBody->taskTypeId = '61a5cd07ca1347c82306ad09';
    $request->id = '<id>';;

    $response = $sdk->tasks->patchCrmTasksId($request);

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
| `$request`                                                                                                | [\test\BREVO\Models\Operations\PatchCrmTasksIdRequest](../../Models/Operations/PatchCrmTasksIdRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\PatchCrmTasksIdResponse](../../Models/Operations/PatchCrmTasksIdResponse.md)**


## postCrmTasks

Create a task

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
        $request = new Operations\PostCrmTasksRequestBody();
    $request->assignToId = '5faab4b7f195bb3c4c31e62a';
    $request->companiesIds = [
        '<value>',
    ];
    $request->contactsIds = [
        185663,
    ];
    $request->date = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-01T17:44:54.668Z');
    $request->dealsIds = [
        '<value>',
    ];
    $request->done = false;
    $request->duration = 600000;
    $request->name = 'Task: Connect with client';
    $request->notes = 'In communication with client for resolution of queries.';
    $request->reminder = new Shared\TaskReminder();
    $request->reminder->types = [
        Shared\Types::Push,
    ];
    $request->reminder->unit = Shared\Unit::Weeks;
    $request->reminder->value = 10;
    $request->taskTypeId = '61a5cd07ca1347c82306ad09';;

    $response = $sdk->tasks->postCrmTasks($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\PostCrmTasksRequestBody](../../Models/Operations/PostCrmTasksRequestBody.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\PostCrmTasksResponse](../../Models/Operations/PostCrmTasksResponse.md)**

