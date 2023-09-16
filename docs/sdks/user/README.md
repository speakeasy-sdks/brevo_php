# User

### Available Operations

* [getInvitedUsersList](#getinviteduserslist) - Get the list of all your users
* [getUserPermission](#getuserpermission) - Check user permission

## getInvitedUsersList

Get the list of all your users

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
    $response = $sdk->user->getInvitedUsersList();

    if ($response->getInvitedUsersList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetInvitedUsersListResponse](../../models/operations/GetInvitedUsersListResponse.md)**


## getUserPermission

Check user permission

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetUserPermissionRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetUserPermissionRequest();
    $request->email = 'Bernie_Skiles@gmail.com';

    $response = $sdk->user->getUserPermission($request);

    if ($response->getUserPermission !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test\BREVO\Models\Operations\GetUserPermissionRequest](../../models/operations/GetUserPermissionRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetUserPermissionResponse](../../models/operations/GetUserPermissionResponse.md)**
