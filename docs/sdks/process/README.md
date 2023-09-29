# Process
(*process*)

### Available Operations

* [getProcess](#getprocess) - Return the informations for a process
* [getProcesses](#getprocesses) - Return all the processes for your account

## getProcess

Return the informations for a process

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetProcessRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetProcessRequest();
    $request->processId = 220156;

    $response = $sdk->process->getProcess($request);

    if ($response->getProcess !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\test\BREVO\Models\Operations\GetProcessRequest](../../models/operations/GetProcessRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\GetProcessResponse](../../models/operations/GetProcessResponse.md)**


## getProcesses

Return all the processes for your account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetProcessesRequest;
use \test\BREVO\Models\Operations\GetProcessesSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetProcessesRequest();
    $request->limit = 441197;
    $request->offset = 705753;
    $request->sort = GetProcessesSort::Asc;

    $response = $sdk->process->getProcesses($request);

    if ($response->getProcesses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\test\BREVO\Models\Operations\GetProcessesRequest](../../models/operations/GetProcessesRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetProcessesResponse](../../models/operations/GetProcessesResponse.md)**

