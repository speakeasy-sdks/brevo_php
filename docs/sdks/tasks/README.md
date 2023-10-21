# Tasks
(*tasks*)

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
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteCrmTasksIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmTasksIdRequest();
    $request->id = '<ID>';

    $response = $sdk->tasks->deleteCrmTasksId($request);

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
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\DeleteCrmTasksIdRequest](../../models/operations/DeleteCrmTasksIdRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\DeleteCrmTasksIdResponse](../../models/operations/DeleteCrmTasksIdResponse.md)**


## getCrmTasks

Get all tasks

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCrmTasksRequest;
use \test\BREVO\Models\Operations\GetCrmTasksFilterDate;
use \test\BREVO\Models\Operations\GetCrmTasksFilterStatus;
use \test\BREVO\Models\Operations\GetCrmTasksSort;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmTasksRequest();
    $request->dateFrom = 347707;
    $request->dateTo = 258884;
    $request->filterAssignTo = 'string';
    $request->filterCompanies = 'string';
    $request->filterContacts = 'string';
    $request->filterDate = GetCrmTasksFilterDate::Week;
    $request->filterDeals = 'string';
    $request->filterStatus = GetCrmTasksFilterStatus::Done;
    $request->filterType = 'string';
    $request->limit = 92194;
    $request->offset = 295949;
    $request->sort = GetCrmTasksSort::Desc;
    $request->sortBy = 'string';

    $response = $sdk->tasks->getCrmTasks($request);

    if ($response->taskList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetCrmTasksRequest](../../models/operations/GetCrmTasksRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetCrmTasksResponse](../../models/operations/GetCrmTasksResponse.md)**


## getCrmTasksId

Get a task

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCrmTasksIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmTasksIdRequest();
    $request->id = '<ID>';

    $response = $sdk->tasks->getCrmTasksId($request);

    if ($response->task !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\GetCrmTasksIdRequest](../../models/operations/GetCrmTasksIdRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetCrmTasksIdResponse](../../models/operations/GetCrmTasksIdResponse.md)**


## getCrmTasktypes

Get all task types

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->tasks->getCrmTasktypes();

    if ($response->taskTypes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetCrmTasktypesResponse](../../models/operations/GetCrmTasktypesResponse.md)**


## patchCrmTasksId

Update a task

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PatchCrmTasksIdRequest;
use \test\BREVO\Models\Operations\PatchCrmTasksIdRequestBody;
use \test\BREVO\Models\Shared\TaskReminder;
use \test\BREVO\Models\Shared\TaskReminderTypes;
use \test\BREVO\Models\Shared\TaskReminderUnit;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmTasksIdRequest();
    $request->requestBody = new PatchCrmTasksIdRequestBody();
    $request->requestBody->assignToId = '5faab4b7f195bb3c4c31e62a';
    $request->requestBody->companiesIds = [
        'string',
    ];
    $request->requestBody->contactsIds = [
        426328,
    ];
    $request->requestBody->date = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-01T17:44:54.668Z');
    $request->requestBody->dealsIds = [
        'string',
    ];
    $request->requestBody->done = false;
    $request->requestBody->duration = 600000;
    $request->requestBody->name = 'Task: Connect with client';
    $request->requestBody->notes = 'In communication with client for resolution of queries.';
    $request->requestBody->reminder = new TaskReminder();
    $request->requestBody->reminder->types = [
        TaskReminderTypes::Push,
    ];
    $request->requestBody->reminder->unit = TaskReminderUnit::Weeks;
    $request->requestBody->reminder->value = 10;
    $request->requestBody->taskTypeId = '61a5cd07ca1347c82306ad09';
    $request->id = '<ID>';

    $response = $sdk->tasks->patchCrmTasksId($request);

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
| `$request`                                                                                                | [\test\BREVO\Models\Operations\PatchCrmTasksIdRequest](../../models/operations/PatchCrmTasksIdRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\PatchCrmTasksIdResponse](../../models/operations/PatchCrmTasksIdResponse.md)**


## postCrmTasks

Create a task

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PostCrmTasksRequestBody;
use \test\BREVO\Models\Shared\TaskReminder;
use \test\BREVO\Models\Shared\TaskReminderTypes;
use \test\BREVO\Models\Shared\TaskReminderUnit;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmTasksRequestBody();
    $request->assignToId = '5faab4b7f195bb3c4c31e62a';
    $request->companiesIds = [
        'string',
    ];
    $request->contactsIds = [
        185663,
    ];
    $request->date = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-01T17:44:54.668Z');
    $request->dealsIds = [
        'string',
    ];
    $request->done = false;
    $request->duration = 600000;
    $request->name = 'Task: Connect with client';
    $request->notes = 'In communication with client for resolution of queries.';
    $request->reminder = new TaskReminder();
    $request->reminder->types = [
        TaskReminderTypes::Push,
    ];
    $request->reminder->unit = TaskReminderUnit::Weeks;
    $request->reminder->value = 10;
    $request->taskTypeId = '61a5cd07ca1347c82306ad09';

    $response = $sdk->tasks->postCrmTasks($request);

    if ($response->postCrmTasks201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\PostCrmTasksRequestBody](../../models/operations/PostCrmTasksRequestBody.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\PostCrmTasksResponse](../../models/operations/PostCrmTasksResponse.md)**

