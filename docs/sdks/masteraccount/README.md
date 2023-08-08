# masterAccount

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

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteCorporateSubAccountIdRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteCorporateSubAccountIdRequest();
    $request->id = 639028;

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
| `$request`                                                                                                                        | [\test\BREVO\Models\Operations\DeleteCorporateSubAccountIdRequest](../../models/operations/DeleteCorporateSubAccountIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\test\BREVO\Models\Operations\DeleteCorporateSubAccountIdResponse](../../models/operations/DeleteCorporateSubAccountIdResponse.md)**


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
    $request->endDate = 'dolorum';
    $request->limit = 548361;
    $request->offset = 879235;
    $request->startDate = 'tempora';

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
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\GetAccountActivityRequest](../../models/operations/GetAccountActivityRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\GetAccountActivityResponse](../../models/operations/GetAccountActivityResponse.md)**


## getCorporateMasterAccount

This endpoint will provide the details of the master account.

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
    $response = $sdk->masterAccount->getCorporateMasterAccount();

    if ($response->masterDetailsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetCorporateMasterAccountResponse](../../models/operations/GetCorporateMasterAccountResponse.md)**


## getCorporateSubAccount

This endpoint will provide the list all the sub-accounts of the master account.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCorporateSubAccountRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCorporateSubAccountRequest();
    $request->limit = 543678;
    $request->offset = 148268;

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
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\GetCorporateSubAccountRequest](../../models/operations/GetCorporateSubAccountRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetCorporateSubAccountResponse](../../models/operations/GetCorporateSubAccountResponse.md)**


## getCorporateSubAccountId

This endpoint will provide the details for the specified sub-account company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCorporateSubAccountIdRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCorporateSubAccountIdRequest();
    $request->id = 282699;

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
| `$request`                                                                                                                  | [\test\BREVO\Models\Operations\GetCorporateSubAccountIdRequest](../../models/operations/GetCorporateSubAccountIdRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetCorporateSubAccountIdResponse](../../models/operations/GetCorporateSubAccountIdResponse.md)**


## postCorporateSubAccount

This endpoint will create a new sub-account under a master account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateSubAccount;
use \test\BREVO\Models\Shared\CreateSubAccountLanguage;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateSubAccount();
    $request->companyName = 'fugiat';
    $request->email = 'Lorine0@gmail.com';
    $request->language = CreateSubAccountLanguage::It;
    $request->timezone = 'ipsam';

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
| `$request`                                                                            | [\test\BREVO\Models\Shared\CreateSubAccount](../../models/shared/CreateSubAccount.md) | :heavy_check_mark:                                                                    | The request object to use for the request.                                            |


### Response

**[?\test\BREVO\Models\Operations\PostCorporateSubAccountResponse](../../models/operations/PostCorporateSubAccountResponse.md)**


## postCorporateSubAccountKey

This endpoint will generate an API v3 key for a sub account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PostCorporateSubAccountKeyRequestBody;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PostCorporateSubAccountKeyRequestBody();
    $request->id = 3232323;
    $request->name = 'My Api Key';

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
| `$request`                                                                                                                              | [\test\BREVO\Models\Operations\PostCorporateSubAccountKeyRequestBody](../../models/operations/PostCorporateSubAccountKeyRequestBody.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\test\BREVO\Models\Operations\PostCorporateSubAccountKeyResponse](../../models/operations/PostCorporateSubAccountKeyResponse.md)**


## postCorporateSubAccountSsoToken

This endpoint generates an sso token to authenticate and access a sub-account of the master using the account endpoint https://account-app.brevo.com/account/login/sub-account/sso/[token], where [token] will be replaced by the actual token.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PostCorporateSubAccountSsoTokenRequestBody;
use \test\BREVO\Models\Operations\PostCorporateSubAccountSsoTokenRequestBodyTarget;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PostCorporateSubAccountSsoTokenRequestBody();
    $request->email = 'vipin+subaccount@brevo.com';
    $request->id = 3232323;
    $request->target = PostCorporateSubAccountSsoTokenRequestBodyTarget::Contacts;
    $request->url = 'https://app.brevo.com/senders/domain/list';

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
| `$request`                                                                                                                                        | [\test\BREVO\Models\Operations\PostCorporateSubAccountSsoTokenRequestBody](../../models/operations/PostCorporateSubAccountSsoTokenRequestBody.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\test\BREVO\Models\Operations\PostCorporateSubAccountSsoTokenResponse](../../models/operations/PostCorporateSubAccountSsoTokenResponse.md)**


## putCorporateSubAccountIdApplicationsToggle

API endpoints for the Corporate owner to enable/disable applications on the sub-account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PutCorporateSubAccountIdApplicationsToggleRequest;
use \test\BREVO\Models\Shared\SubAccountAppsToggleRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PutCorporateSubAccountIdApplicationsToggleRequest();
    $request->id = 24527;
    $request->subAccountAppsToggleRequest = new SubAccountAppsToggleRequest();
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
    $request->subAccountAppsToggleRequest->whatsapp = false;

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
| `$request`                                                                                                                                                      | [\test\BREVO\Models\Operations\PutCorporateSubAccountIdApplicationsToggleRequest](../../models/operations/PutCorporateSubAccountIdApplicationsToggleRequest.md) | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |


### Response

**[?\test\BREVO\Models\Operations\PutCorporateSubAccountIdApplicationsToggleResponse](../../models/operations/PutCorporateSubAccountIdApplicationsToggleResponse.md)**


## putCorporateSubAccountIdPlan

This endpoint will update the sub-account plan

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\PutCorporateSubAccountIdPlanRequest;
use \test\BREVO\Models\Shared\SubAccountUpdatePlanRequest;
use \test\BREVO\Models\Shared\SubAccountUpdatePlanRequestCredits;
use \test\BREVO\Models\Shared\SubAccountUpdatePlanRequestFeatures;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new PutCorporateSubAccountIdPlanRequest();
    $request->id = 530537;
    $request->subAccountUpdatePlanRequest = new SubAccountUpdatePlanRequest();
    $request->subAccountUpdatePlanRequest->credits = new SubAccountUpdatePlanRequestCredits();
    $request->subAccountUpdatePlanRequest->credits->email = 558065;
    $request->subAccountUpdatePlanRequest->features = new SubAccountUpdatePlanRequestFeatures();
    $request->subAccountUpdatePlanRequest->features->inbox = 922112;
    $request->subAccountUpdatePlanRequest->features->landingPage = 361151;
    $request->subAccountUpdatePlanRequest->features->users = 89494;

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
| `$request`                                                                                                                          | [\test\BREVO\Models\Operations\PutCorporateSubAccountIdPlanRequest](../../models/operations/PutCorporateSubAccountIdPlanRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\test\BREVO\Models\Operations\PutCorporateSubAccountIdPlanResponse](../../models/operations/PutCorporateSubAccountIdPlanResponse.md)**

