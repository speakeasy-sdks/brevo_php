# Senders


### Available Operations

* [createSender](#createsender) - Create a new sender
* [deleteSender](#deletesender) - Delete a sender
* [getIps](#getips) - Get all the dedicated IPs for your account
* [getIpsFromSender](#getipsfromsender) - Get all the dedicated IPs for a sender
* [getSenders](#getsenders) - Get the list of all your senders
* [updateSender](#updatesender) - Update a sender
* [validateSenderByOTP](#validatesenderbyotp) - Validate Sender using OTP

## createSender

Create a new sender

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
        $request = new Shared\CreateSender();
    $request->email = 'newsletter@mycompany.com';
    $request->ips = [
        new Shared\Ips(),
    ];
    $request->name = 'Newsletter';;

    $response = $sdk->senders->createSender($request);

    if ($response->createSenderModel !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                     | Type                                                                          | Required                                                                      | Description                                                                   |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `$request`                                                                    | [\test\BREVO\Models\Shared\CreateSender](../../Models/Shared/CreateSender.md) | :heavy_check_mark:                                                            | The request object to use for the request.                                    |


### Response

**[?\test\BREVO\Models\Operations\CreateSenderResponse](../../Models/Operations/CreateSenderResponse.md)**


## deleteSender

Delete a sender

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
        $request = new Operations\DeleteSenderRequest();
    $request->senderId = 234732;;

    $response = $sdk->senders->deleteSender($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\test\BREVO\Models\Operations\DeleteSenderRequest](../../Models/Operations/DeleteSenderRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\DeleteSenderResponse](../../Models/Operations/DeleteSenderResponse.md)**


## getIps

Get all the dedicated IPs for your account

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
    $response = $sdk->senders->getIps();

    if ($response->getIps !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetIpsResponse](../../Models/Operations/GetIpsResponse.md)**


## getIpsFromSender

Get all the dedicated IPs for a sender

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
        $request = new Operations\GetIpsFromSenderRequest();
    $request->senderId = 848663;;

    $response = $sdk->senders->getIpsFromSender($request);

    if ($response->getIpsFromSender !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\GetIpsFromSenderRequest](../../Models/Operations/GetIpsFromSenderRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetIpsFromSenderResponse](../../Models/Operations/GetIpsFromSenderResponse.md)**


## getSenders

Get the list of all your senders

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
        $request = new Operations\GetSendersRequest();
    $request->domain = 'extroverted-congo.name';
    $request->ip = '94.106.65.227';;

    $response = $sdk->senders->getSenders($request);

    if ($response->getSendersList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\test\BREVO\Models\Operations\GetSendersRequest](../../Models/Operations/GetSendersRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\GetSendersResponse](../../Models/Operations/GetSendersResponse.md)**


## updateSender

Update a sender

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
        $request = new Operations\UpdateSenderRequest();
    $request->senderId = 616420;
    $request->updateSender = new Shared\UpdateSender();
    $request->updateSender->email = 'newsletter@mycompany.com';
    $request->updateSender->ips = [
        new Shared\UpdateSenderIps(),
    ];
    $request->updateSender->name = 'Newsletter';;

    $response = $sdk->senders->updateSender($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\test\BREVO\Models\Operations\UpdateSenderRequest](../../Models/Operations/UpdateSenderRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\UpdateSenderResponse](../../Models/Operations/UpdateSenderResponse.md)**


## validateSenderByOTP

Validate Sender using OTP

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
        $request = new Operations\ValidateSenderByOTPRequest();
    $request->otp = new Shared\Otp();
    $request->otp->otp = 123456;
    $request->senderId = 499324;;

    $response = $sdk->senders->validateSenderByOTP($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\ValidateSenderByOTPRequest](../../Models/Operations/ValidateSenderByOTPRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\ValidateSenderByOTPResponse](../../Models/Operations/ValidateSenderByOTPResponse.md)**

