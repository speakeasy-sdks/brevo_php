# Ecommerce

### Available Operations

* [createBatchOrder](#createbatchorder) - Create orders in batch
* [createOrder](#createorder) - Managing the status of the order
* [createUpdateBatchCategory](#createupdatebatchcategory) - Create categories in batch
* [createUpdateBatchProducts](#createupdatebatchproducts) - Create products in batch
* [createUpdateCategory](#createupdatecategory) - Create/Update a category
* [createUpdateProduct](#createupdateproduct) - Create/Update a product
* [getCategories](#getcategories) - Return all your categories
* [getCategoryInfo](#getcategoryinfo) - Get a category details
* [getProductInfo](#getproductinfo) - Get a product's details
* [getProducts](#getproducts) - Return all your products
* [postEcommerceActivate](#postecommerceactivate) - Activate the eCommerce app

## createBatchOrder

Create multiple orders at one time instead of one order at a time

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\OrderBatch;
use \test\BREVO\Models\Shared\Order;
use \test\BREVO\Models\Shared\OrderBilling;
use \test\BREVO\Models\Shared\OrderProducts;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new OrderBatch();
    $request->notifyUrl = 'https://en.wikipedia.org/wiki/Webhook';
    $request->orders = [
        new Order(),
    ];

    $response = $sdk->ecommerce->createBatchOrder($request);

    if ($response->createdBatchId !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                 | Type                                                                      | Required                                                                  | Description                                                               |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `$request`                                                                | [\test\BREVO\Models\Shared\OrderBatch](../../models/shared/OrderBatch.md) | :heavy_check_mark:                                                        | The request object to use for the request.                                |


### Response

**[?\test\BREVO\Models\Operations\CreateBatchOrderResponse](../../models/operations/CreateBatchOrderResponse.md)**


## createOrder

Manages the transactional status of the order

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\Order;
use \test\BREVO\Models\Shared\OrderBilling;
use \test\BREVO\Models\Shared\OrderProducts;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new Order();
    $request->amount = 308.42;
    $request->billing = new OrderBilling();
    $request->billing->address = '15 Somewhere Road, Brynmenyn';
    $request->billing->city = 'Basel';
    $request->billing->countryCode = 'CA';
    $request->billing->paymentMethod = 'PayPal';
    $request->billing->phone = '01559 032133';
    $request->billing->postCode = '4052';
    $request->billing->region = 'Northwestern Switzerland';
    $request->coupons = [
        'similique',
    ];
    $request->createdAt = '2021-07-29T20:59:23.383Z';
    $request->email = 'example@brevo.com';
    $request->id = '14';
    $request->products = [
        new OrderProducts(),
    ];
    $request->status = 'completed';
    $request->updatedAt = '2021-07-30T10:59:23.383Z';

    $response = $sdk->ecommerce->createOrder($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                       | Type                                                            | Required                                                        | Description                                                     |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `$request`                                                      | [\test\BREVO\Models\Shared\Order](../../models/shared/Order.md) | :heavy_check_mark:                                              | The request object to use for the request.                      |


### Response

**[?\test\BREVO\Models\Operations\CreateOrderResponse](../../models/operations/CreateOrderResponse.md)**


## createUpdateBatchCategory

Create categories in batch

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateUpdateBatchCategory;
use \test\BREVO\Models\Shared\CreateUpdateCategories;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateUpdateBatchCategory();
    $request->categories = [
        new CreateUpdateCategories(),
    ];
    $request->updateEnabled = false;

    $response = $sdk->ecommerce->createUpdateBatchCategory($request);

    if ($response->createUpdateBatchCategoryModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\test\BREVO\Models\Shared\CreateUpdateBatchCategory](../../models/shared/CreateUpdateBatchCategory.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\test\BREVO\Models\Operations\CreateUpdateBatchCategoryResponse](../../models/operations/CreateUpdateBatchCategoryResponse.md)**


## createUpdateBatchProducts

Create products in batch

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateUpdateBatchProducts;
use \test\BREVO\Models\Shared\CreateUpdateProducts;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateUpdateBatchProducts();
    $request->products = [
        new CreateUpdateProducts(),
    ];
    $request->updateEnabled = false;

    $response = $sdk->ecommerce->createUpdateBatchProducts($request);

    if ($response->createUpdateBatchProductsModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\test\BREVO\Models\Shared\CreateUpdateBatchProducts](../../models/shared/CreateUpdateBatchProducts.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\test\BREVO\Models\Operations\CreateUpdateBatchProductsResponse](../../models/operations/CreateUpdateBatchProductsResponse.md)**


## createUpdateCategory

Create/Update a category

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateUpdateCategory;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateUpdateCategory();
    $request->deletedAt = '2017-05-12T12:30:00Z';
    $request->id = 'CAT123';
    $request->name = 'Electronics';
    $request->updateEnabled = false;
    $request->url = 'http://mydomain.com/category/electronics';

    $response = $sdk->ecommerce->createUpdateCategory($request);

    if ($response->createCategoryModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\test\BREVO\Models\Shared\CreateUpdateCategory](../../models/shared/CreateUpdateCategory.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\test\BREVO\Models\Operations\CreateUpdateCategoryResponse](../../models/operations/CreateUpdateCategoryResponse.md)**


## createUpdateProduct

Create/Update a product

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateUpdateProduct;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateUpdateProduct();
    $request->categories = [
        'facilis',
    ];
    $request->deletedAt = 'vero';
    $request->id = 'P11';
    $request->imageUrl = 'http://mydomain.com/product-absoulte-url/img.jpeg';
    $request->metaInfo = [
        'ducimus' => 'dolore',
    ];
    $request->name = 'Iphone 11';
    $request->parentId = 'quibusdam';
    $request->price = 8489.44;
    $request->sku = 'sequi';
    $request->updateEnabled = false;
    $request->url = 'http://mydomain.com/product/electronics/product1';

    $response = $sdk->ecommerce->createUpdateProduct($request);

    if ($response->createProductModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\test\BREVO\Models\Shared\CreateUpdateProduct](../../models/shared/CreateUpdateProduct.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\test\BREVO\Models\Operations\CreateUpdateProductResponse](../../models/operations/CreateUpdateProductResponse.md)**


## getCategories

Return all your categories

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCategoriesRequest;
use \test\BREVO\Models\Operations\GetCategoriesSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCategoriesRequest();
    $request->ids = [
        'natus',
    ];
    $request->limit = 773326;
    $request->name = 'Camille Heidenreich';
    $request->offset = 780427;
    $request->sort = GetCategoriesSort::Desc;

    $response = $sdk->ecommerce->getCategories($request);

    if ($response->getCategories !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\GetCategoriesRequest](../../models/operations/GetCategoriesRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\GetCategoriesResponse](../../models/operations/GetCategoriesResponse.md)**


## getCategoryInfo

Get a category details

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetCategoryInfoRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetCategoryInfoRequest();
    $request->id = 'f7c70a45-626d-4436-813f-16d9f5fce6c5';

    $response = $sdk->ecommerce->getCategoryInfo($request);

    if ($response->getCategoryDetails !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\test\BREVO\Models\Operations\GetCategoryInfoRequest](../../models/operations/GetCategoryInfoRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetCategoryInfoResponse](../../models/operations/GetCategoryInfoResponse.md)**


## getProductInfo

Get a product's details

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetProductInfoRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetProductInfoRequest();
    $request->id = '56146c3e-250f-4b00-8c42-e141aac366c8';

    $response = $sdk->ecommerce->getProductInfo($request);

    if ($response->getProductDetails !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\test\BREVO\Models\Operations\GetProductInfoRequest](../../models/operations/GetProductInfoRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetProductInfoResponse](../../models/operations/GetProductInfoResponse.md)**


## getProducts

Return all your products

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetProductsRequest;
use \test\BREVO\Models\Operations\GetProductsSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetProductsRequest();
    $request->categories = [
        'assumenda',
    ];
    $request->ids = [
        'nulla',
    ];
    $request->limit = 379034;
    $request->name = 'Ryan Glover';
    $request->offset = 591935;
    $request->priceEq = 553.74;
    $request->priceGt = 4764.77;
    $request->priceGte = 3015.98;
    $request->priceLt = 4879.35;
    $request->priceLte = 2621.18;
    $request->priceNe = 4585.15;
    $request->sort = GetProductsSort::Asc;

    $response = $sdk->ecommerce->getProducts($request);

    if ($response->getProducts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetProductsRequest](../../models/operations/GetProductsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetProductsResponse](../../models/operations/GetProductsResponse.md)**


## postEcommerceActivate

Getting access to Brevo eCommerce.

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
    $response = $sdk->ecommerce->postEcommerceActivate();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\PostEcommerceActivateResponse](../../models/operations/PostEcommerceActivateResponse.md)**
