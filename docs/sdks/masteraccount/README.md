# MasterAccount


### Available Operations

* [deleteCorporateSubAccountId](#deletecorporatesubaccountid) - Delete a sub-account
* [getAccountActivity](#getaccountactivity) - Get user activity logs
* [getCorporateMasterAccount](#getcorporatemasteraccount) - Get the details of requested master account
* [getCorporateSubAccount](#getcorporatesubaccount) - Get the list of all the sub-accounts of the master account.
* [getCorporateSubAccountId](#getcorporatesubaccountid) - Get sub-account details
* [postCorporateSubAccount](#postcorporatesubaccount) - Create a new sub-account under a master account.
* [postCorporateSubAccountKey](#postcorporatesubaccountkey) - Create an API key for a sub-account
* [postCorporateSubAccountSsoToken](#postcorporatesubaccountssotoken) - Generate SSO token to access Brevo
* [putCorporateSubAccountIdApplicationsToggle](#putcorporatesubaccountidapplicationstoggle) - Enable/disable sub-account application(s)
* [putCorporateSubAccountIdPlan](#putcorporatesubaccountidplan) - Update sub-account plan

## deleteCorporateSubAccountId

Delete a sub-account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteCorporateSubAccountIdRequest();
    $request->id = 240183;;

    $response = $sdk->masterAccount->deleteCorporateSubAccountId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\test\BREVO\Models\Operations\DeleteCorporateSubAccountIdRequest](../../Models/Operations/DeleteCorporateSubAccountIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\test\BREVO\Models\Operations\DeleteCorporateSubAccountIdResponse](../../Models/Operations/DeleteCorporateSubAccountIdResponse.md)**


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
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAccountActivityRequest();
    $request->endDate = 'string';
    $request->limit = 87824;
    $request->offset = 280117;
    $request->startDate = 'string';;

    $response = $sdk->masterAccount->getAccountActivity($request);

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


## getCorporateMasterAccount

This endpoint will provide the details of the master account.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
    $response = $sdk->masterAccount->getCorporateMasterAccount();

    if ($response->masterDetailsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetCorporateMasterAccountResponse](../../Models/Operations/GetCorporateMasterAccountResponse.md)**


## getCorporateSubAccount

This endpoint will provide the list all the sub-accounts of the master account.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCorporateSubAccountRequest();
    $request->limit = 809548;
    $request->offset = 775566;;

    $response = $sdk->masterAccount->getCorporateSubAccount($request);

    if ($response->subAccountsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\GetCorporateSubAccountRequest](../../Models/Operations/GetCorporateSubAccountRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetCorporateSubAccountResponse](../../Models/Operations/GetCorporateSubAccountResponse.md)**


## getCorporateSubAccountId

This endpoint will provide the details for the specified sub-account company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCorporateSubAccountIdRequest();
    $request->id = 504418;;

    $response = $sdk->masterAccount->getCorporateSubAccountId($request);

    if ($response->subAccountDetailsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\test\BREVO\Models\Operations\GetCorporateSubAccountIdRequest](../../Models/Operations/GetCorporateSubAccountIdRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetCorporateSubAccountIdResponse](../../Models/Operations/GetCorporateSubAccountIdResponse.md)**


## postCorporateSubAccount

This endpoint will create a new sub-account under a master account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateSubAccount();
    $request->companyName = 'Bayer, Graham and Lemke';
    $request->email = 'Maxime61@hotmail.com';
    $request->language = Shared\CreateSubAccountLanguage::Pt;
    $request->timezone = 'Asia/Muscat';;

    $response = $sdk->masterAccount->postCorporateSubAccount($request);

    if ($response->createSubAccountResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                             | Type                                                                                  | Required                                                                              | Description                                                                           |
| ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- |
| `$request`                                                                            | [\test\BREVO\Models\Shared\CreateSubAccount](../../Models/Shared/CreateSubAccount.md) | :heavy_check_mark:                                                                    | The request object to use for the request.                                            |


### Response

**[?\test\BREVO\Models\Operations\PostCorporateSubAccountResponse](../../Models/Operations/PostCorporateSubAccountResponse.md)**


## postCorporateSubAccountKey

This endpoint will generate an API v3 key for a sub account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PostCorporateSubAccountKeyRequestBody();
    $request->id = 3232323;
    $request->name = 'My Api Key';;

    $response = $sdk->masterAccount->postCorporateSubAccountKey($request);

    if ($response->createApiKeyResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\test\BREVO\Models\Operations\PostCorporateSubAccountKeyRequestBody](../../Models/Operations/PostCorporateSubAccountKeyRequestBody.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\test\BREVO\Models\Operations\PostCorporateSubAccountKeyResponse](../../Models/Operations/PostCorporateSubAccountKeyResponse.md)**


## postCorporateSubAccountSsoToken

This endpoint generates an sso token to authenticate and access a sub-account of the master using the account endpoint https://account-app.brevo.com/account/login/sub-account/sso/[token], where [token] will be replaced by the actual token.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PostCorporateSubAccountSsoTokenRequestBody();
    $request->email = 'vipin+subaccount@brevo.com';
    $request->id = 3232323;
    $request->target = Operations\Target::Contacts;
    $request->url = 'https://app.brevo.com/senders/domain/list';;

    $response = $sdk->masterAccount->postCorporateSubAccountSsoToken($request);

    if ($response->getSsoToken !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\test\BREVO\Models\Operations\PostCorporateSubAccountSsoTokenRequestBody](../../Models/Operations/PostCorporateSubAccountSsoTokenRequestBody.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\test\BREVO\Models\Operations\PostCorporateSubAccountSsoTokenResponse](../../Models/Operations/PostCorporateSubAccountSsoTokenResponse.md)**


## putCorporateSubAccountIdApplicationsToggle

API endpoints for the Corporate owner to enable/disable applications on the sub-account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PutCorporateSubAccountIdApplicationsToggleRequest();
    $request->id = 310762;
    $request->subAccountAppsToggleRequest = new Shared\SubAccountAppsToggleRequest();
    $request->subAccountAppsToggleRequest->automation = false;
    $request->subAccountAppsToggleRequest->conversations = false;
    $request->subAccountAppsToggleRequest->crm = false;
    $request->subAccountAppsToggleRequest->emailCampaigns = false;
    $request->subAccountAppsToggleRequest->facebookAds = false;
    $request->subAccountAppsToggleRequest->inbox = false;
    $request->subAccountAppsToggleRequest->landingPages = false;
    $request->subAccountAppsToggleRequest->meetings = false;
    $request->subAccountAppsToggleRequest->smsCampaigns = false;
    $request->subAccountAppsToggleRequest->transactionalEmails = false;
    $request->subAccountAppsToggleRequest->transactionalSms = false;
    $request->subAccountAppsToggleRequest->webPush = false;
    $request->subAccountAppsToggleRequest->whatsapp = false;;

    $response = $sdk->masterAccount->putCorporateSubAccountIdApplicationsToggle($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\test\BREVO\Models\Operations\PutCorporateSubAccountIdApplicationsToggleRequest](../../Models/Operations/PutCorporateSubAccountIdApplicationsToggleRequest.md) | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |


### Response

**[?\test\BREVO\Models\Operations\PutCorporateSubAccountIdApplicationsToggleResponse](../../Models/Operations/PutCorporateSubAccountIdApplicationsToggleResponse.md)**


## putCorporateSubAccountIdPlan

This endpoint will update the sub-account plan

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO;
use \test\BREVO\Models\Shared;
use \test\BREVO\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = BREVO\Brevo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PutCorporateSubAccountIdPlanRequest();
    $request->id = 152623;
    $request->subAccountUpdatePlanRequest = new Shared\SubAccountUpdatePlanRequest();
    $request->subAccountUpdatePlanRequest->credits = new Shared\SubAccountUpdatePlanRequestCredits();
    $request->subAccountUpdatePlanRequest->credits->email = 454340;
    $request->subAccountUpdatePlanRequest->features = new Shared\Features();
    $request->subAccountUpdatePlanRequest->features->inbox = 662938;
    $request->subAccountUpdatePlanRequest->features->landingPage = 92293;
    $request->subAccountUpdatePlanRequest->features->users = 570439;;

    $response = $sdk->masterAccount->putCorporateSubAccountIdPlan($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\test\BREVO\Models\Operations\PutCorporateSubAccountIdPlanRequest](../../Models/Operations/PutCorporateSubAccountIdPlanRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\test\BREVO\Models\Operations\PutCorporateSubAccountIdPlanResponse](../../Models/Operations/PutCorporateSubAccountIdPlanResponse.md)**

