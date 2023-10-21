# Senders
(*senders*)

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
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateSender;
use \test\BREVO\Models\Shared\CreateSenderIps;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateSender();
    $request->email = 'newsletter@mycompany.com';
    $request->ips = [
        new CreateSenderIps(),
    ];
    $request->name = 'Newsletter';

    $response = $sdk->senders->createSender($request);

    if ($response->createSenderModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                     | Type                                                                          | Required                                                                      | Description                                                                   |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `$request`                                                                    | [\test\BREVO\Models\Shared\CreateSender](../../models/shared/CreateSender.md) | :heavy_check_mark:                                                            | The request object to use for the request.                                    |


### Response

**[?\test\BREVO\Models\Operations\CreateSenderResponse](../../models/operations/CreateSenderResponse.md)**


## deleteSender

Delete a sender

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteSenderRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteSenderRequest();
    $request->senderId = 234732;

    $response = $sdk->senders->deleteSender($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\test\BREVO\Models\Operations\DeleteSenderRequest](../../models/operations/DeleteSenderRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\DeleteSenderResponse](../../models/operations/DeleteSenderResponse.md)**


## getIps

Get all the dedicated IPs for your account

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
    $response = $sdk->senders->getIps();

    if ($response->getIps !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetIpsResponse](../../models/operations/GetIpsResponse.md)**


## getIpsFromSender

Get all the dedicated IPs for a sender

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetIpsFromSenderRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetIpsFromSenderRequest();
    $request->senderId = 848663;

    $response = $sdk->senders->getIpsFromSender($request);

    if ($response->getIpsFromSender !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\GetIpsFromSenderRequest](../../models/operations/GetIpsFromSenderRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetIpsFromSenderResponse](../../models/operations/GetIpsFromSenderResponse.md)**


## getSenders

Get the list of all your senders

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetSendersRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetSendersRequest();
    $request->domain = 'extroverted-congo.name';
    $request->ip = '94.106.65.227';

    $response = $sdk->senders->getSenders($request);

    if ($response->getSendersList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\test\BREVO\Models\Operations\GetSendersRequest](../../models/operations/GetSendersRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\GetSendersResponse](../../models/operations/GetSendersResponse.md)**


## updateSender

Update a sender

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateSenderRequest;
use \test\BREVO\Models\Shared\UpdateSender;
use \test\BREVO\Models\Shared\UpdateSenderIps;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateSenderRequest();
    $request->senderId = 616420;
    $request->updateSender = new UpdateSender();
    $request->updateSender->email = 'newsletter@mycompany.com';
    $request->updateSender->ips = [
        new UpdateSenderIps(),
    ];
    $request->updateSender->name = 'Newsletter';

    $response = $sdk->senders->updateSender($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\test\BREVO\Models\Operations\UpdateSenderRequest](../../models/operations/UpdateSenderRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\UpdateSenderResponse](../../models/operations/UpdateSenderResponse.md)**


## validateSenderByOTP

Validate Sender using OTP

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\ValidateSenderByOTPRequest;
use \test\BREVO\Models\Shared\Otp;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ValidateSenderByOTPRequest();
    $request->otp = new Otp();
    $request->otp->otp = 123456;
    $request->senderId = 499324;

    $response = $sdk->senders->validateSenderByOTP($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\ValidateSenderByOTPRequest](../../models/operations/ValidateSenderByOTPRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\ValidateSenderByOTPResponse](../../models/operations/ValidateSenderByOTPResponse.md)**

