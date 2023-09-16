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

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;

$sdk = Brevo::builder()
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

**[?\test\BREVO\Models\Operations\GetAccountResponse](../../models/operations/GetAccountResponse.md)**


## getAccountActivity

Get user activity logs

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetAccountActivityRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetAccountActivityRequest();
    $request->endDate = 'corrupti';
    $request->limit = 592845;
    $request->offset = 715190;
    $request->startDate = 'quibusdam';

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
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\GetAccountActivityRequest](../../models/operations/GetAccountActivityRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\GetAccountActivityResponse](../../models/operations/GetAccountActivityResponse.md)**

