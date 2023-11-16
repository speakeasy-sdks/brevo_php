# Coupons


### Available Operations

* [createCouponCollection](#createcouponcollection) - Create а coupon collection
* [createCoupons](#createcoupons) - Create coupons for a coupon collection
* [getCouponCollection](#getcouponcollection) - Get a coupon collection by id
* [getCouponCollections](#getcouponcollections) - Get all your coupon collections
* [updateCouponCollection](#updatecouponcollection) - Update a coupon collection by id

## createCouponCollection

Create а coupon collection

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
    $request = new Operations\CreateCouponCollectionRequestBody();
    $request->defaultCoupon = '10 OFF';
    $request->name = 'SummerPromotions';

    $response = $sdk->coupons->createCouponCollection($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\test\BREVO\Models\Operations\CreateCouponCollectionRequestBody](../../Models/Operations/CreateCouponCollectionRequestBody.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\test\BREVO\Models\Operations\CreateCouponCollectionResponse](../../Models/Operations/CreateCouponCollectionResponse.md)**


## createCoupons

Create coupons for a coupon collection

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
    $request = new Operations\CreateCouponsRequestBody();
    $request->collectionId = '23befbae-1505-47a8-bd27-e30ef739f32c';
    $request->coupons = [
        'Uf12AF',
    ];

    $response = $sdk->coupons->createCoupons($request);

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
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\CreateCouponsRequestBody](../../Models/Operations/CreateCouponsRequestBody.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\CreateCouponsResponse](../../Models/Operations/CreateCouponsResponse.md)**


## getCouponCollection

Get a coupon collection by id

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
    $request = new Operations\GetCouponCollectionRequest();
    $request->id = 'string';

    $response = $sdk->coupons->getCouponCollection($request);

    if ($response->getCouponCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetCouponCollectionRequest](../../Models/Operations/GetCouponCollectionRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetCouponCollectionResponse](../../Models/Operations/GetCouponCollectionResponse.md)**


## getCouponCollections

Get all your coupon collections

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
    $request = new Operations\GetCouponCollectionsRequest();
    $request->limit = 928542;
    $request->offset = 507488;
    $request->sort = Operations\GetCouponCollectionsQueryParamSort::Asc;

    $response = $sdk->coupons->getCouponCollections($request);

    if ($response->getCouponCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\GetCouponCollectionsRequest](../../Models/Operations/GetCouponCollectionsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetCouponCollectionsResponse](../../Models/Operations/GetCouponCollectionsResponse.md)**


## updateCouponCollection

Update a coupon collection by id

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
    $request = new Operations\UpdateCouponCollectionRequest();
    $request->requestBody = new Operations\UpdateCouponCollectionRequestBody();
    $request->requestBody->defaultCoupon = '10 OFF';
    $request->id = 'string';

    $response = $sdk->coupons->updateCouponCollection($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\UpdateCouponCollectionRequest](../../Models/Operations/UpdateCouponCollectionRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\UpdateCouponCollectionResponse](../../Models/Operations/UpdateCouponCollectionResponse.md)**

