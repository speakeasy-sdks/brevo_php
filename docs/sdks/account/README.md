# Account


### Available Operations

* [getAccount](#getaccount) - Get your account information, plan and credits details
* [getAccountActivity](#getaccountactivity) - Get user activity logs

## getAccount

Get your account information, plan and credits details

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
    $response = $sdk->account->getAccount();

    if ($response->getAccount !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetAccountResponse](../../Models/Operations/GetAccountResponse.md)**


## getAccountActivity

Get user activity logs

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
    $request = new Operations\GetAccountActivityRequest();
    $request->endDate = 'string';
    $request->limit = 87824;
    $request->offset = 280117;
    $request->startDate = 'string';

    $response = $sdk->account->getAccountActivity($request);

    if ($response->getAccountActivity !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\GetAccountActivityRequest](../../Models/Operations/GetAccountActivityRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\GetAccountActivityResponse](../../Models/Operations/GetAccountActivityResponse.md)**

