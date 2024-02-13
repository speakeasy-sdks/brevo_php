# Domains


### Available Operations

* [authenticateDomain](#authenticatedomain) - Authenticate a domain
* [createDomain](#createdomain) - Create a new domain
* [deleteDomain](#deletedomain) - Delete a domain
* [getDomainConfiguration](#getdomainconfiguration) - Validate domain configuration
* [getDomains](#getdomains) - Get the list of all your domains

## authenticateDomain

Authenticate a domain

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
        $request = new Operations\AuthenticateDomainRequest();
    $request->domainName = 'sparkling-awareness.biz';;

    $response = $sdk->domains->authenticateDomain($request);

    if ($response->authenticateDomainModel !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\AuthenticateDomainRequest](../../Models/Operations/AuthenticateDomainRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\AuthenticateDomainResponse](../../Models/Operations/AuthenticateDomainResponse.md)**


## createDomain

Create a new domain

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
        $request = new Shared\CreateDomain();
    $request->name = 'mycompany.com';;

    $response = $sdk->domains->createDomain($request);

    if ($response->createDomainModel !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                     | Type                                                                          | Required                                                                      | Description                                                                   |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `$request`                                                                    | [\test\BREVO\Models\Shared\CreateDomain](../../Models/Shared/CreateDomain.md) | :heavy_check_mark:                                                            | The request object to use for the request.                                    |


### Response

**[?\test\BREVO\Models\Operations\CreateDomainResponse](../../Models/Operations/CreateDomainResponse.md)**


## deleteDomain

Delete a domain

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
        $request = new Operations\DeleteDomainRequest();
    $request->domainName = 'sturdy-supper.net';;

    $response = $sdk->domains->deleteDomain($request);

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
| `$request`                                                                                          | [\test\BREVO\Models\Operations\DeleteDomainRequest](../../Models/Operations/DeleteDomainRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\DeleteDomainResponse](../../Models/Operations/DeleteDomainResponse.md)**


## getDomainConfiguration

Validate domain configuration

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
        $request = new Operations\GetDomainConfigurationRequest();
    $request->domainName = 'slight-county.net';;

    $response = $sdk->domains->getDomainConfiguration($request);

    if ($response->getDomainConfigurationModel !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\GetDomainConfigurationRequest](../../Models/Operations/GetDomainConfigurationRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetDomainConfigurationResponse](../../Models/Operations/GetDomainConfigurationResponse.md)**


## getDomains

Get the list of all your domains

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
    $response = $sdk->domains->getDomains();

    if ($response->getDomainsList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetDomainsResponse](../../Models/Operations/GetDomainsResponse.md)**

