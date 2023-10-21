# Reseller
(*reseller*)

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

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\AddCreditsRequest;
use \test\BREVO\Models\Shared\AddCredits;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AddCreditsRequest();
    $request->addCredits = new AddCredits();
    $request->addCredits->email = 1200;
    $request->addCredits->sms = 450;
    $request->childIdentifier = 'string';

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
| `$request`                                                                                      | [\test\BREVO\Models\Operations\AddCreditsRequest](../../models/operations/AddCreditsRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\AddCreditsResponse](../../models/operations/AddCreditsResponse.md)**


## associateIpToChild

Associate a dedicated IP to the child

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\AssociateIpToChildRequest;
use \test\BREVO\Models\Shared\ManageIp;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AssociateIpToChildRequest();
    $request->childIdentifier = 'string';
    $request->manageIp = new ManageIp();
    $request->manageIp->ip = '123.65.8.22';

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
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\AssociateIpToChildRequest](../../models/operations/AssociateIpToChildRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\AssociateIpToChildResponse](../../models/operations/AssociateIpToChildResponse.md)**


## createChildDomain

Create a domain for a child account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\CreateChildDomainRequest;
use \test\BREVO\Models\Shared\AddChildDomain;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateChildDomainRequest();
    $request->addChildDomain = new AddChildDomain();
    $request->addChildDomain->domain = 'mychilddomain.com';
    $request->childIdentifier = 'string';

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
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\CreateChildDomainRequest](../../models/operations/CreateChildDomainRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\CreateChildDomainResponse](../../models/operations/CreateChildDomainResponse.md)**


## createResellerChild

Creates a reseller child

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateChild;
use \test\BREVO\Models\Shared\CreateChildLanguage;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateChild();
    $request->companyName = 'Your Company';
    $request->email = 'josh.cruise@example.com';
    $request->firstName = 'Josh';
    $request->language = CreateChildLanguage::En;
    $request->lastName = 'Cruise';
    $request->password = 'Pa55w0rd65';

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
| `$request`                                                                  | [\test\BREVO\Models\Shared\CreateChild](../../models/shared/CreateChild.md) | :heavy_check_mark:                                                          | The request object to use for the request.                                  |


### Response

**[?\test\BREVO\Models\Operations\CreateResellerChildResponse](../../models/operations/CreateResellerChildResponse.md)**


## deleteChildDomain

Delete the sender domain of the reseller child based on the childIdentifier and domainName passed

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteChildDomainRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteChildDomainRequest();
    $request->childIdentifier = 'string';
    $request->domainName = 'silver-redesign.org';

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
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\DeleteChildDomainRequest](../../models/operations/DeleteChildDomainRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\DeleteChildDomainResponse](../../models/operations/DeleteChildDomainResponse.md)**


## deleteResellerChild

Delete a single reseller child based on the child identifier supplied

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteResellerChildRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteResellerChildRequest();
    $request->childIdentifier = 'string';

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\DeleteResellerChildRequest](../../models/operations/DeleteResellerChildRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\DeleteResellerChildResponse](../../models/operations/DeleteResellerChildResponse.md)**


## dissociateIpFromChild

Dissociate a dedicated IP to the child

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DissociateIpFromChildRequest;
use \test\BREVO\Models\Shared\ManageIp;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DissociateIpFromChildRequest();
    $request->childIdentifier = 'string';
    $request->manageIp = new ManageIp();
    $request->manageIp->ip = '123.65.8.22';

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
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\DissociateIpFromChildRequest](../../models/operations/DissociateIpFromChildRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\DissociateIpFromChildResponse](../../models/operations/DissociateIpFromChildResponse.md)**


## getChildAccountCreationStatus

Get the status of a reseller's child account creation, whether it is successfully created (exists) or not based on the childIdentifier supplied

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetChildAccountCreationStatusRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetChildAccountCreationStatusRequest();
    $request->childIdentifier = 'string';

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
| `$request`                                                                                                                            | [\test\BREVO\Models\Operations\GetChildAccountCreationStatusRequest](../../models/operations/GetChildAccountCreationStatusRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetChildAccountCreationStatusResponse](../../models/operations/GetChildAccountCreationStatusResponse.md)**


## getChildDomains

Get all sender domains for a specific child account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetChildDomainsRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetChildDomainsRequest();
    $request->childIdentifier = 'string';

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
| `$request`                                                                                                | [\test\BREVO\Models\Operations\GetChildDomainsRequest](../../models/operations/GetChildDomainsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetChildDomainsResponse](../../models/operations/GetChildDomainsResponse.md)**


## getChildInfo

Get a child account's details

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetChildInfoRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetChildInfoRequest();
    $request->childIdentifier = 'string';

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
| `$request`                                                                                          | [\test\BREVO\Models\Operations\GetChildInfoRequest](../../models/operations/GetChildInfoRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetChildInfoResponse](../../models/operations/GetChildInfoResponse.md)**


## getResellerChilds

Get the list of all children accounts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetResellerChildsRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetResellerChildsRequest();
    $request->limit = 137968;
    $request->offset = 492577;

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
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\GetResellerChildsRequest](../../models/operations/GetResellerChildsRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetResellerChildsResponse](../../models/operations/GetResellerChildsResponse.md)**


## getSsoToken

It returns a session [token] which will remain valid for a short period of time. A child account will be able to access a white-labeled section by using the following url pattern => https:/email.mydomain.com/login/sso?token=[token]

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetSsoTokenRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetSsoTokenRequest();
    $request->childIdentifier = 'string';

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
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetSsoTokenRequest](../../models/operations/GetSsoTokenRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetSsoTokenResponse](../../models/operations/GetSsoTokenResponse.md)**


## removeCredits

Remove Email and/or SMS credits from a specific child account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\RemoveCreditsRequest;
use \test\BREVO\Models\Shared\RemoveCredits;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveCreditsRequest();
    $request->childIdentifier = 'string';
    $request->removeCredits = new RemoveCredits();
    $request->removeCredits->email = 500;
    $request->removeCredits->sms = 300;

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
| `$request`                                                                                            | [\test\BREVO\Models\Operations\RemoveCreditsRequest](../../models/operations/RemoveCreditsRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\RemoveCreditsResponse](../../models/operations/RemoveCreditsResponse.md)**


## updateChildAccountStatus

Update info of reseller's child account status based on the identifier supplied

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateChildAccountStatusRequest;
use \test\BREVO\Models\Shared\UpdateChildAccountStatus;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateChildAccountStatusRequest();
    $request->childIdentifier = 'string';
    $request->updateChildAccountStatus = new UpdateChildAccountStatus();
    $request->updateChildAccountStatus->marketingAutomation = true;
    $request->updateChildAccountStatus->smsCampaign = true;
    $request->updateChildAccountStatus->transactionalEmail = false;
    $request->updateChildAccountStatus->transactionalSms = false;

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
| `$request`                                                                                                                  | [\test\BREVO\Models\Operations\UpdateChildAccountStatusRequest](../../models/operations/UpdateChildAccountStatusRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\test\BREVO\Models\Operations\UpdateChildAccountStatusResponse](../../models/operations/UpdateChildAccountStatusResponse.md)**


## updateChildDomain

Update the sender domain of reseller's child based on the childIdentifier and domainName passed

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateChildDomainRequest;
use \test\BREVO\Models\Shared\UpdateChildDomain;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateChildDomainRequest();
    $request->childIdentifier = 'string';
    $request->domainName = 'turbulent-quotation.biz';
    $request->updateChildDomain = new UpdateChildDomain();
    $request->updateChildDomain->domain = 'myupdateddomain.com';

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
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\UpdateChildDomainRequest](../../models/operations/UpdateChildDomainRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\UpdateChildDomainResponse](../../models/operations/UpdateChildDomainResponse.md)**


## updateResellerChild

Update info of reseller's child based on the child identifier supplied

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateResellerChildRequest;
use \test\BREVO\Models\Shared\UpdateChild;

$security = new Security();
$security->apiKey = '';

$sdk = Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateResellerChildRequest();
    $request->childIdentifier = 'string';
    $request->updateChild = new UpdateChild();
    $request->updateChild->companyName = 'Your Company';
    $request->updateChild->email = 'josh.cruise@example.com';
    $request->updateChild->firstName = 'Josh';
    $request->updateChild->lastName = 'Cruise';
    $request->updateChild->password = 'Pa55w0rd65';

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\UpdateResellerChildRequest](../../models/operations/UpdateResellerChildRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\UpdateResellerChildResponse](../../models/operations/UpdateResellerChildResponse.md)**

