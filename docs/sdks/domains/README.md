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

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\AuthenticateDomainRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new AuthenticateDomainRequest();
    $request->domainName = 'distinctio';

    $response = $sdk->domains->authenticateDomain($request);

    if ($response->authenticateDomainModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\test\BREVO\Models\Operations\AuthenticateDomainRequest](../../models/operations/AuthenticateDomainRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\test\BREVO\Models\Operations\AuthenticateDomainResponse](../../models/operations/AuthenticateDomainResponse.md)**


## createDomain

Create a new domain

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateDomain;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateDomain();
    $request->name = 'mycompany.com';

    $response = $sdk->domains->createDomain($request);

    if ($response->createDomainModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                     | Type                                                                          | Required                                                                      | Description                                                                   |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `$request`                                                                    | [\test\BREVO\Models\Shared\CreateDomain](../../models/shared/CreateDomain.md) | :heavy_check_mark:                                                            | The request object to use for the request.                                    |


### Response

**[?\test\BREVO\Models\Operations\CreateDomainResponse](../../models/operations/CreateDomainResponse.md)**


## deleteDomain

Delete a domain

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteDomainRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteDomainRequest();
    $request->domainName = 'quod';

    $response = $sdk->domains->deleteDomain($request);

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
| `$request`                                                                                          | [\test\BREVO\Models\Operations\DeleteDomainRequest](../../models/operations/DeleteDomainRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\DeleteDomainResponse](../../models/operations/DeleteDomainResponse.md)**


## getDomainConfiguration

Validate domain configuration

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetDomainConfigurationRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetDomainConfigurationRequest();
    $request->domainName = 'odio';

    $response = $sdk->domains->getDomainConfiguration($request);

    if ($response->getDomainConfigurationModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\GetDomainConfigurationRequest](../../models/operations/GetDomainConfigurationRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetDomainConfigurationResponse](../../models/operations/GetDomainConfigurationResponse.md)**


## getDomains

Get the list of all your domains

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
    $response = $sdk->domains->getDomains();

    if ($response->getDomainsList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetDomainsResponse](../../models/operations/GetDomainsResponse.md)**

