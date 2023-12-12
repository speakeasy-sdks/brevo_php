# Reseller


### Available Operations

* [addCredits](#addcredits) - Add Email and/or SMS credits to a specific child account
* [associateIpToChild](#associateiptochild) - Associate a dedicated IP to the child
* [createChildDomain](#createchilddomain) - Create a domain for a child account
* [createResellerChild](#createresellerchild) - Creates a reseller child
* [deleteChildDomain](#deletechilddomain) - Delete the sender domain of the reseller child based on the childIdentifier and domainName passed
* [deleteResellerChild](#deleteresellerchild) - Delete a single reseller child based on the child identifier supplied
* [dissociateIpFromChild](#dissociateipfromchild) - Dissociate a dedicated IP to the child
* [getChildAccountCreationStatus](#getchildaccountcreationstatus) - Get the status of a reseller's child account creation, whether it is successfully created (exists) or not based on the childIdentifier supplied
* [getChildDomains](#getchilddomains) - Get all sender domains for a specific child account
* [getChildInfo](#getchildinfo) - Get a child account's details
* [getResellerChilds](#getresellerchilds) - Get the list of all children accounts
* [getSsoToken](#getssotoken) - Get session token to access Brevo (SSO)
* [removeCredits](#removecredits) - Remove Email and/or SMS credits from a specific child account
* [updateChildAccountStatus](#updatechildaccountstatus) - Update info of reseller's child account status based on the identifier supplied
* [updateChildDomain](#updatechilddomain) - Update the sender domain of reseller's child based on the childIdentifier and domainName passed
* [updateResellerChild](#updateresellerchild) - Update info of reseller's child based on the child identifier supplied

## addCredits

Add Email and/or SMS credits to a specific child account

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
        $request = new Operations\AddCreditsRequest();
    $request->addCredits = new Shared\AddCredits();
    $request->addCredits->email = 1200;
    $request->addCredits->sms = 450;
    $request->childIdentifier = 'string';;

    $response = $sdk->reseller->addCredits($request);

    if ($response->remainingCreditModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\test\BREVO\Models\Operations\AddCreditsRequest](../../Models/Operations/AddCreditsRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\AddCreditsResponse](../../Models/Operations/AddCreditsResponse.md)**


## associateIpToChild

Associate a dedicated IP to the child

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
        $request = new Operations\AssociateIpToChildRequest();
    $request->childIdentifier = 'string';
    $request->manageIp = new Shared\ManageIp();
    $request->manageIp->ip = '123.65.8.22';;

    $response = $sdk->reseller->associateIpToChild($request);

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
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\AssociateIpToChildRequest](../../Models/Operations/AssociateIpToChildRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\AssociateIpToChildResponse](../../Models/Operations/AssociateIpToChildResponse.md)**


## createChildDomain

Create a domain for a child account

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
        $request = new Operations\CreateChildDomainRequest();
    $request->addChildDomain = new Shared\AddChildDomain();
    $request->addChildDomain->domain = 'mychilddomain.com';
    $request->childIdentifier = 'string';;

    $response = $sdk->reseller->createChildDomain($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\CreateChildDomainRequest](../../Models/Operations/CreateChildDomainRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\CreateChildDomainResponse](../../Models/Operations/CreateChildDomainResponse.md)**


## createResellerChild

Creates a reseller child

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
        $request = new Shared\CreateChild();
    $request->companyName = 'Your Company';
    $request->email = 'josh.cruise@example.com';
    $request->firstName = 'Josh';
    $request->language = Shared\Language::En;
    $request->lastName = 'Cruise';
    $request->password = 'Pa55w0rd65';;

    $response = $sdk->reseller->createResellerChild($request);

    if ($response->createReseller !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                   | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `$request`                                                                  | [\test\BREVO\Models\Shared\CreateChild](../../Models/Shared/CreateChild.md) | :heavy_check_mark:                                                          | The request object to use for the request.                                  |


### Response

**[?\test\BREVO\Models\Operations\CreateResellerChildResponse](../../Models/Operations/CreateResellerChildResponse.md)**


## deleteChildDomain

Delete the sender domain of the reseller child based on the childIdentifier and domainName passed

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
        $request = new Operations\DeleteChildDomainRequest();
    $request->childIdentifier = 'string';
    $request->domainName = 'silver-redesign.org';;

    $response = $sdk->reseller->deleteChildDomain($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\DeleteChildDomainRequest](../../Models/Operations/DeleteChildDomainRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\DeleteChildDomainResponse](../../Models/Operations/DeleteChildDomainResponse.md)**


## deleteResellerChild

Delete a single reseller child based on the child identifier supplied

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
        $request = new Operations\DeleteResellerChildRequest();
    $request->childIdentifier = 'string';;

    $response = $sdk->reseller->deleteResellerChild($request);

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\DeleteResellerChildRequest](../../Models/Operations/DeleteResellerChildRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\DeleteResellerChildResponse](../../Models/Operations/DeleteResellerChildResponse.md)**


## dissociateIpFromChild

Dissociate a dedicated IP to the child

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
        $request = new Operations\DissociateIpFromChildRequest();
    $request->childIdentifier = 'string';
    $request->manageIp = new Shared\ManageIp();
    $request->manageIp->ip = '123.65.8.22';;

    $response = $sdk->reseller->dissociateIpFromChild($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\DissociateIpFromChildRequest](../../Models/Operations/DissociateIpFromChildRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\DissociateIpFromChildResponse](../../Models/Operations/DissociateIpFromChildResponse.md)**


## getChildAccountCreationStatus

Get the status of a reseller's child account creation, whether it is successfully created (exists) or not based on the childIdentifier supplied

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
        $request = new Operations\GetChildAccountCreationStatusRequest();
    $request->childIdentifier = 'string';;

    $response = $sdk->reseller->getChildAccountCreationStatus($request);

    if ($response->getChildAccountCreationStatus !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\test\BREVO\Models\Operations\GetChildAccountCreationStatusRequest](../../Models/Operations/GetChildAccountCreationStatusRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetChildAccountCreationStatusResponse](../../Models/Operations/GetChildAccountCreationStatusResponse.md)**


## getChildDomains

Get all sender domains for a specific child account

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
        $request = new Operations\GetChildDomainsRequest();
    $request->childIdentifier = 'string';;

    $response = $sdk->reseller->getChildDomains($request);

    if ($response->getChildDomains !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\test\BREVO\Models\Operations\GetChildDomainsRequest](../../Models/Operations/GetChildDomainsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetChildDomainsResponse](../../Models/Operations/GetChildDomainsResponse.md)**


## getChildInfo

Get a child account's details

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
        $request = new Operations\GetChildInfoRequest();
    $request->childIdentifier = 'string';;

    $response = $sdk->reseller->getChildInfo($request);

    if ($response->getChildInfo !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\test\BREVO\Models\Operations\GetChildInfoRequest](../../Models/Operations/GetChildInfoRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetChildInfoResponse](../../Models/Operations/GetChildInfoResponse.md)**


## getResellerChilds

Get the list of all children accounts

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
        $request = new Operations\GetResellerChildsRequest();
    $request->limit = 137968;
    $request->offset = 492577;;

    $response = $sdk->reseller->getResellerChilds($request);

    if ($response->getChildrenList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\GetResellerChildsRequest](../../Models/Operations/GetResellerChildsRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetResellerChildsResponse](../../Models/Operations/GetResellerChildsResponse.md)**


## getSsoToken

It returns a session [token] which will remain valid for a short period of time. A child account will be able to access a white-labeled section by using the following url pattern => https:/email.mydomain.com/login/sso?token=[token]

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
        $request = new Operations\GetSsoTokenRequest();
    $request->childIdentifier = 'string';;

    $response = $sdk->reseller->getSsoToken($request);

    if ($response->getSsoToken !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetSsoTokenRequest](../../Models/Operations/GetSsoTokenRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetSsoTokenResponse](../../Models/Operations/GetSsoTokenResponse.md)**


## removeCredits

Remove Email and/or SMS credits from a specific child account

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
        $request = new Operations\RemoveCreditsRequest();
    $request->childIdentifier = 'string';
    $request->removeCredits = new Shared\RemoveCredits();
    $request->removeCredits->email = 500;
    $request->removeCredits->sms = 300;;

    $response = $sdk->reseller->removeCredits($request);

    if ($response->remainingCreditModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\RemoveCreditsRequest](../../Models/Operations/RemoveCreditsRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\RemoveCreditsResponse](../../Models/Operations/RemoveCreditsResponse.md)**


## updateChildAccountStatus

Update info of reseller's child account status based on the identifier supplied

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
        $request = new Operations\UpdateChildAccountStatusRequest();
    $request->childIdentifier = 'string';
    $request->updateChildAccountStatus = new Shared\UpdateChildAccountStatus();
    $request->updateChildAccountStatus->marketingAutomation = true;
    $request->updateChildAccountStatus->smsCampaign = true;
    $request->updateChildAccountStatus->transactionalEmail = false;
    $request->updateChildAccountStatus->transactionalSms = false;;

    $response = $sdk->reseller->updateChildAccountStatus($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\test\BREVO\Models\Operations\UpdateChildAccountStatusRequest](../../Models/Operations/UpdateChildAccountStatusRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\test\BREVO\Models\Operations\UpdateChildAccountStatusResponse](../../Models/Operations/UpdateChildAccountStatusResponse.md)**


## updateChildDomain

Update the sender domain of reseller's child based on the childIdentifier and domainName passed

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
        $request = new Operations\UpdateChildDomainRequest();
    $request->childIdentifier = 'string';
    $request->domainName = 'turbulent-quotation.biz';
    $request->updateChildDomain = new Shared\UpdateChildDomain();
    $request->updateChildDomain->domain = 'myupdateddomain.com';;

    $response = $sdk->reseller->updateChildDomain($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\UpdateChildDomainRequest](../../Models/Operations/UpdateChildDomainRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\UpdateChildDomainResponse](../../Models/Operations/UpdateChildDomainResponse.md)**


## updateResellerChild

Update info of reseller's child based on the child identifier supplied

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
        $request = new Operations\UpdateResellerChildRequest();
    $request->childIdentifier = 'string';
    $request->updateChild = new Shared\UpdateChild();
    $request->updateChild->companyName = 'Your Company';
    $request->updateChild->email = 'josh.cruise@example.com';
    $request->updateChild->firstName = 'Josh';
    $request->updateChild->lastName = 'Cruise';
    $request->updateChild->password = 'Pa55w0rd65';;

    $response = $sdk->reseller->updateResellerChild($request);

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\UpdateResellerChildRequest](../../Models/Operations/UpdateResellerChildRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\UpdateResellerChildResponse](../../Models/Operations/UpdateResellerChildResponse.md)**

