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

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\CreateCouponCollectionRequestBody;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateCouponCollectionRequestBody();
    $request->defaultCoupon = '10 OFF';
    $request->name = 'SummerPromotions';

    $response = $sdk->coupons->createCouponCollection($request);

    if ($response->createCouponCollection201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\test\BREVO\Models\Operations\CreateCouponCollectionRequestBody](../../models/operations/CreateCouponCollectionRequestBody.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\test\BREVO\Models\Operations\CreateCouponCollectionResponse](../../models/operations/CreateCouponCollectionResponse.md)**


## createCoupons

Create coupons for a coupon collection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\CreateCouponsRequestBody;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateCouponsRequestBody();
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
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\CreateCouponsRequestBody](../../models/operations/CreateCouponsRequestBody.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\CreateCouponsResponse](../../models/operations/CreateCouponsResponse.md)**


## getCouponCollection

Get a coupon collection by id

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCouponCollectionRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCouponCollectionRequest();
    $request->id = 'iusto';

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetCouponCollectionRequest](../../models/operations/GetCouponCollectionRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetCouponCollectionResponse](../../models/operations/GetCouponCollectionResponse.md)**


## getCouponCollections

Get all your coupon collections

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCouponCollectionsRequest;
use \test\BREVO\Models\Operations\GetCouponCollectionsSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCouponCollectionsRequest();
    $request->limit = 453697;
    $request->offset = 677082;
    $request->sort = GetCouponCollectionsSort::Desc;

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
| `$request`                                                                                                          | [\test\BREVO\Models\Operations\GetCouponCollectionsRequest](../../models/operations/GetCouponCollectionsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\test\BREVO\Models\Operations\GetCouponCollectionsResponse](../../models/operations/GetCouponCollectionsResponse.md)**


## updateCouponCollection

Update a coupon collection by id

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateCouponCollectionRequest;
use \test\BREVO\Models\Operations\UpdateCouponCollectionRequestBody;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UpdateCouponCollectionRequest();
    $request->requestBody = new UpdateCouponCollectionRequestBody();
    $request->requestBody->defaultCoupon = '10 OFF';
    $request->id = 'omnis';

    $response = $sdk->coupons->updateCouponCollection($request);

    if ($response->updateCouponCollection200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\test\BREVO\Models\Operations\UpdateCouponCollectionRequest](../../models/operations/UpdateCouponCollectionRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test\BREVO\Models\Operations\UpdateCouponCollectionResponse](../../models/operations/UpdateCouponCollectionResponse.md)**

