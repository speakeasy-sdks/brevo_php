# Contacts


### Available Operations

* [addContactToList](#addcontacttolist) - Add existing contacts to a list
* [createAttribute](#createattribute) - Create contact attribute
* [createContact](#createcontact) - Create a contact
* [createDoiContact](#createdoicontact) - Create Contact via DOI (Double-Opt-In) Flow
* [createFolder](#createfolder) - Create a folder
* [createList](#createlist) - Create a list
* [deleteAttribute](#deleteattribute) - Delete an attribute
* [deleteContact](#deletecontact) - Delete a contact
* [deleteFolder](#deletefolder) - Delete a folder (and all its lists)
* [deleteList](#deletelist) - Delete a list
* [getAttributes](#getattributes) - List all attributes
* [getContactInfo](#getcontactinfo) - Get a contact's details
* [getContactStats](#getcontactstats) - Get email campaigns' statistics for a contact
* [getContacts](#getcontacts) - Get all the contacts
* [getContactsFromList](#getcontactsfromlist) - Get contacts in a list
* [getFolder](#getfolder) - Returns a folder's details
* [getFolderLists](#getfolderlists) - Get lists in a folder
* [getFolders](#getfolders) - Get all folders
* [getList](#getlist) - Get a list's details
* [getLists](#getlists) - Get all the lists
* [getSegments](#getsegments) - Get all the segments
* [importContacts](#importcontacts) - Import contacts
* [removeContactFromList](#removecontactfromlist) - Delete a contact from a list
* [requestContactExport](#requestcontactexport) - Export contacts
* [updateAttribute](#updateattribute) - Update contact attribute
* [updateBatchContacts](#updatebatchcontacts) - Update multiple contacts
* [updateContact](#updatecontact) - Update a contact
* [updateFolder](#updatefolder) - Update a folder
* [updateList](#updatelist) - Update a list

## addContactToList

Add existing contacts to a list

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
        $request = new Operations\AddContactToListRequest();
    $request->requestBody = 'string';
    $request->listId = 77706;;

    $response = $sdk->contacts->addContactToList($request);

    if ($response->postContactInfo !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\AddContactToListRequest](../../Models/Operations/AddContactToListRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\AddContactToListResponse](../../Models/Operations/AddContactToListResponse.md)**


## createAttribute

Create contact attribute

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
        $request = new Operations\CreateAttributeRequest();
    $request->attributeCategory = Operations\AttributeCategory::Calculated;
    $request->attributeName = 'string';
    $request->createAttribute = new Shared\CreateAttribute();
    $request->createAttribute->enumeration = [
        new Shared\Enumeration(),
    ];
    $request->createAttribute->isRecurring = true;
    $request->createAttribute->type = Shared\CreateAttributeType::Text;
    $request->createAttribute->value = 'COUNT[BLACKLISTED,BLACKLISTED,<,NOW()]';;

    $response = $sdk->contacts->createAttribute($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\test\BREVO\Models\Operations\CreateAttributeRequest](../../Models/Operations/CreateAttributeRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\CreateAttributeResponse](../../Models/Operations/CreateAttributeResponse.md)**


## createContact

Create a contact

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
        $request = new Shared\CreateContact();
    $request->attributes = [
        'Mercedes' => 'string',
    ];
    $request->email = 'elly@example.com';
    $request->emailBlacklisted = false;
    $request->extId = 'externalId';
    $request->listIds = [
        36,
    ];
    $request->smsBlacklisted = false;
    $request->smtpBlacklistSender = [
        'Seamus_Kemmer13@yahoo.com',
    ];
    $request->updateEnabled = false;;

    $response = $sdk->contacts->createContact($request);

    if ($response->createUpdateContactModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                       | Type                                                                            | Required                                                                        | Description                                                                     |
| ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| `$request`                                                                      | [\test\BREVO\Models\Shared\CreateContact](../../Models/Shared/CreateContact.md) | :heavy_check_mark:                                                              | The request object to use for the request.                                      |


### Response

**[?\test\BREVO\Models\Operations\CreateContactResponse](../../Models/Operations/CreateContactResponse.md)**


## createDoiContact

Create Contact via DOI (Double-Opt-In) Flow

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
        $request = new Shared\CreateDoiContact();
    $request->attributes = [
        'UDP' => 'string',
    ];
    $request->email = 'elly@example.com';
    $request->excludeListIds = [
        36,
    ];
    $request->includeListIds = [
        36,
    ];
    $request->redirectionUrl = 'http://requestb.in/173lyyx1';
    $request->templateId = 2;;

    $response = $sdk->contacts->createDoiContact($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                             | Type                                                                                  | Required                                                                              | Description                                                                           |
| ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- |
| `$request`                                                                            | [\test\BREVO\Models\Shared\CreateDoiContact](../../Models/Shared/CreateDoiContact.md) | :heavy_check_mark:                                                                    | The request object to use for the request.                                            |


### Response

**[?\test\BREVO\Models\Operations\CreateDoiContactResponse](../../Models/Operations/CreateDoiContactResponse.md)**


## createFolder

Create a folder

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
        $request = new Shared\CreateUpdateFolder();
    $request->name = 'Wordpress Contacts';;

    $response = $sdk->contacts->createFolder($request);

    if ($response->createModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `$request`                                                                                | [\test\BREVO\Models\Shared\CreateUpdateFolder](../../Models/Shared/CreateUpdateFolder.md) | :heavy_check_mark:                                                                        | The request object to use for the request.                                                |


### Response

**[?\test\BREVO\Models\Operations\CreateFolderResponse](../../Models/Operations/CreateFolderResponse.md)**


## createList

Create a list

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
        $request = new Shared\CreateList();
    $request->folderId = 2;
    $request->name = 'Magento Customer - ES';;

    $response = $sdk->contacts->createList($request);

    if ($response->createModel !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                 | Type                                                                      | Required                                                                  | Description                                                               |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `$request`                                                                | [\test\BREVO\Models\Shared\CreateList](../../Models/Shared/CreateList.md) | :heavy_check_mark:                                                        | The request object to use for the request.                                |


### Response

**[?\test\BREVO\Models\Operations\CreateListResponse](../../Models/Operations/CreateListResponse.md)**


## deleteAttribute

Delete an attribute

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
        $request = new Operations\DeleteAttributeRequest();
    $request->attributeCategory = Operations\PathParamAttributeCategory::Normal;
    $request->attributeName = 'string';;

    $response = $sdk->contacts->deleteAttribute($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\test\BREVO\Models\Operations\DeleteAttributeRequest](../../Models/Operations/DeleteAttributeRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\DeleteAttributeResponse](../../Models/Operations/DeleteAttributeResponse.md)**


## deleteContact

Delete a contact

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
        $request = new Operations\DeleteContactRequest();
    $request->identifier = 'string';;

    $response = $sdk->contacts->deleteContact($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\DeleteContactRequest](../../Models/Operations/DeleteContactRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\DeleteContactResponse](../../Models/Operations/DeleteContactResponse.md)**


## deleteFolder

Delete a folder (and all its lists)

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
        $request = new Operations\DeleteFolderRequest();
    $request->folderId = 225818;;

    $response = $sdk->contacts->deleteFolder($request);

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
| `$request`                                                                                          | [\test\BREVO\Models\Operations\DeleteFolderRequest](../../Models/Operations/DeleteFolderRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\DeleteFolderResponse](../../Models/Operations/DeleteFolderResponse.md)**


## deleteList

Delete a list

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
        $request = new Operations\DeleteListRequest();
    $request->listId = 231491;;

    $response = $sdk->contacts->deleteList($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\test\BREVO\Models\Operations\DeleteListRequest](../../Models/Operations/DeleteListRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\DeleteListResponse](../../Models/Operations/DeleteListResponse.md)**


## getAttributes

List all attributes

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
    $response = $sdk->contacts->getAttributes();

    if ($response->getAttributes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetAttributesResponse](../../Models/Operations/GetAttributesResponse.md)**


## getContactInfo

Along with the contact details, this endpoint will show the statistics of contact for the recent 90 days by default. To fetch the earlier statistics, please use Get contact campaign stats ``https://developers.brevo.com/reference/contacts-7#getcontactstats`` endpoint with the appropriate date ranges.

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
        $request = new Operations\GetContactInfoRequest();
    $request->endDate = 'string';
    $request->identifier = 'string';
    $request->startDate = 'string';;

    $response = $sdk->contacts->getContactInfo($request);

    if ($response->getExtendedContactDetails !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\test\BREVO\Models\Operations\GetContactInfoRequest](../../Models/Operations/GetContactInfoRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetContactInfoResponse](../../Models/Operations/GetContactInfoResponse.md)**


## getContactStats

Get email campaigns' statistics for a contact

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
        $request = new Operations\GetContactStatsRequest();
    $request->endDate = 'string';
    $request->identifier = 'string';
    $request->startDate = 'string';;

    $response = $sdk->contacts->getContactStats($request);

    if ($response->getContactCampaignStats !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\test\BREVO\Models\Operations\GetContactStatsRequest](../../Models/Operations/GetContactStatsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetContactStatsResponse](../../Models/Operations/GetContactStatsResponse.md)**


## getContacts

Get all the contacts

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
        $request = new Operations\GetContactsRequest();
    $request->createdSince = 'string';
    $request->limit = 883763;
    $request->modifiedSince = 'string';
    $request->offset = 587699;
    $request->sort = Operations\QueryParamSort::Desc;;

    $response = $sdk->contacts->getContacts($request);

    if ($response->getContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetContactsRequest](../../Models/Operations/GetContactsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetContactsResponse](../../Models/Operations/GetContactsResponse.md)**


## getContactsFromList

Get contacts in a list

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
        $request = new Operations\GetContactsFromListRequest();
    $request->limit = 164358;
    $request->listId = 721707;
    $request->modifiedSince = 'string';
    $request->offset = 221058;
    $request->sort = Operations\GetContactsFromListQueryParamSort::Desc;;

    $response = $sdk->contacts->getContactsFromList($request);

    if ($response->getContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetContactsFromListRequest](../../Models/Operations/GetContactsFromListRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetContactsFromListResponse](../../Models/Operations/GetContactsFromListResponse.md)**


## getFolder

Returns a folder's details

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
        $request = new Operations\GetFolderRequest();
    $request->folderId = 867135;;

    $response = $sdk->contacts->getFolder($request);

    if ($response->getFolder !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\test\BREVO\Models\Operations\GetFolderRequest](../../Models/Operations/GetFolderRequest.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetFolderResponse](../../Models/Operations/GetFolderResponse.md)**


## getFolderLists

Get lists in a folder

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
        $request = new Operations\GetFolderListsRequest();
    $request->folderId = 790110;
    $request->limit = 468056;
    $request->offset = 270959;
    $request->sort = Operations\GetFolderListsQueryParamSort::Asc;;

    $response = $sdk->contacts->getFolderLists($request);

    if ($response->getFolderLists !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\test\BREVO\Models\Operations\GetFolderListsRequest](../../Models/Operations/GetFolderListsRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetFolderListsResponse](../../Models/Operations/GetFolderListsResponse.md)**


## getFolders

Get all folders

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
        $request = new Operations\GetFoldersRequest();
    $request->limit = 846820;
    $request->offset = 320424;
    $request->sort = Operations\GetFoldersQueryParamSort::Asc;;

    $response = $sdk->contacts->getFolders($request);

    if ($response->getFolders !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\test\BREVO\Models\Operations\GetFoldersRequest](../../Models/Operations/GetFoldersRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\GetFoldersResponse](../../Models/Operations/GetFoldersResponse.md)**


## getList

Get a list's details

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
        $request = new Operations\GetListRequest();
    $request->listId = 451512;;

    $response = $sdk->contacts->getList($request);

    if ($response->getExtendedList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `$request`                                                                                | [\test\BREVO\Models\Operations\GetListRequest](../../Models/Operations/GetListRequest.md) | :heavy_check_mark:                                                                        | The request object to use for the request.                                                |


### Response

**[?\test\BREVO\Models\Operations\GetListResponse](../../Models/Operations/GetListResponse.md)**


## getLists

Get all the lists

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
        $request = new Operations\GetListsRequest();
    $request->limit = 919382;
    $request->offset = 383011;
    $request->sort = Operations\GetListsQueryParamSort::Desc;;

    $response = $sdk->contacts->getLists($request);

    if ($response->getLists !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\test\BREVO\Models\Operations\GetListsRequest](../../Models/Operations/GetListsRequest.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetListsResponse](../../Models/Operations/GetListsResponse.md)**


## getSegments

Get all the segments

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
        $request = new Operations\GetSegmentsRequest();
    $request->limit = 904899;
    $request->offset = 703723;
    $request->sort = Operations\GetSegmentsQueryParamSort::Desc;;

    $response = $sdk->contacts->getSegments($request);

    if ($response->getSegments !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetSegmentsRequest](../../Models/Operations/GetSegmentsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetSegmentsResponse](../../Models/Operations/GetSegmentsResponse.md)**


## importContacts

It returns the background process ID which on completion calls the notify URL that you have set in the input.

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
        $request = new Shared\RequestContactImport();
    $request->emailBlacklist = false;
    $request->emptyContactsAttributes = true;
    $request->fileBody = 'NAME;SURNAME;EMAIL
    Smith;John;john.smith@example.com
    Roger;Ellie;ellie36@example.com';
    $request->fileUrl = 'https://importfile.domain.com';
    $request->jsonBody = [
        new Shared\JsonBody(),
    ];
    $request->listIds = [
        76,
    ];
    $request->newList = new Shared\NewList();
    $request->newList->folderId = 2;
    $request->newList->listName = 'ContactImport - 2017-05';
    $request->notifyUrl = 'http://requestb.in/173lyyx1';
    $request->smsBlacklist = false;
    $request->updateExistingContacts = true;;

    $response = $sdk->contacts->importContacts($request);

    if ($response->createdProcessId !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\test\BREVO\Models\Shared\RequestContactImport](../../Models/Shared/RequestContactImport.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\test\BREVO\Models\Operations\ImportContactsResponse](../../Models/Operations/ImportContactsResponse.md)**


## removeContactFromList

Delete a contact from a list

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
        $request = new Operations\RemoveContactFromListRequest();
    $request->requestBody = 'string';
    $request->listId = 85992;;

    $response = $sdk->contacts->removeContactFromList($request);

    if ($response->postContactInfo !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\RemoveContactFromListRequest](../../Models/Operations/RemoveContactFromListRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\RemoveContactFromListResponse](../../Models/Operations/RemoveContactFromListResponse.md)**


## requestContactExport

It returns the background process ID which on completion calls the notify URL that you have set in the input. File will be available in csv.

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
        $request = new Shared\RequestContactExport();
    $request->customContactFilter = new Shared\CustomContactFilter();
    $request->customContactFilter->actionForContacts = Shared\ActionForContacts::Subscribed;
    $request->customContactFilter->actionForEmailCampaigns = Shared\ActionForEmailCampaigns::NonClickers;
    $request->customContactFilter->actionForSmsCampaigns = Shared\ActionForSmsCampaigns::SoftBounces;
    $request->customContactFilter->emailCampaignId = 12;
    $request->customContactFilter->listId = 2;
    $request->customContactFilter->smsCampaignId = 12;
    $request->exportAttributes = [
        'NAME',
    ];
    $request->notifyUrl = 'http://requestb.in/173lyyx1';;

    $response = $sdk->contacts->requestContactExport($request);

    if ($response->createdProcessId !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\test\BREVO\Models\Shared\RequestContactExport](../../Models/Shared/RequestContactExport.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\test\BREVO\Models\Operations\RequestContactExportResponse](../../Models/Operations/RequestContactExportResponse.md)**


## updateAttribute

Update contact attribute

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
        $request = new Operations\UpdateAttributeRequest();
    $request->attributeCategory = Operations\UpdateAttributePathParamAttributeCategory::Calculated;
    $request->attributeName = 'string';
    $request->updateAttribute = new Shared\UpdateAttribute();
    $request->updateAttribute->enumeration = [
        new Shared\UpdateAttributeEnumeration(),
    ];
    $request->updateAttribute->value = 'COUNT[BLACKLISTED,BLACKLISTED,<,NOW()]';;

    $response = $sdk->contacts->updateAttribute($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\test\BREVO\Models\Operations\UpdateAttributeRequest](../../Models/Operations/UpdateAttributeRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\UpdateAttributeResponse](../../Models/Operations/UpdateAttributeResponse.md)**


## updateBatchContacts

Update multiple contacts

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
        $request = new Shared\UpdateBatchContacts();
    $request->contacts = [
        new Shared\UpdateBatchContactsContacts(),
    ];;

    $response = $sdk->contacts->updateBatchContacts($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\test\BREVO\Models\Shared\UpdateBatchContacts](../../Models/Shared/UpdateBatchContacts.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\test\BREVO\Models\Operations\UpdateBatchContactsResponse](../../Models/Operations/UpdateBatchContactsResponse.md)**


## updateContact

Update a contact

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
        $request = new Operations\UpdateContactRequest();
    $request->identifier = 'string';
    $request->updateContact = new Shared\UpdateContact();
    $request->updateContact->attributes = [
        'Jewell' => 'string',
    ];
    $request->updateContact->emailBlacklisted = false;
    $request->updateContact->extId = 'updateExternalId';
    $request->updateContact->listIds = [
        65,
    ];
    $request->updateContact->smsBlacklisted = true;
    $request->updateContact->smtpBlacklistSender = [
        'Domenic_Ullrich@yahoo.com',
    ];
    $request->updateContact->unlinkListIds = [
        36,
    ];;

    $response = $sdk->contacts->updateContact($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\test\BREVO\Models\Operations\UpdateContactRequest](../../Models/Operations/UpdateContactRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\UpdateContactResponse](../../Models/Operations/UpdateContactResponse.md)**


## updateFolder

Update a folder

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
        $request = new Operations\UpdateFolderRequest();
    $request->createUpdateFolder = new Shared\CreateUpdateFolder();
    $request->createUpdateFolder->name = 'Wordpress Contacts';
    $request->folderId = 317879;;

    $response = $sdk->contacts->updateFolder($request);

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
| `$request`                                                                                          | [\test\BREVO\Models\Operations\UpdateFolderRequest](../../Models/Operations/UpdateFolderRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\UpdateFolderResponse](../../Models/Operations/UpdateFolderResponse.md)**


## updateList

Update a list

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
        $request = new Operations\UpdateListRequest();
    $request->listId = 549225;
    $request->updateList = new Shared\UpdateList();
    $request->updateList->folderId = 2;
    $request->updateList->name = 'Magento Customer - ES';;

    $response = $sdk->contacts->updateList($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\test\BREVO\Models\Operations\UpdateListRequest](../../Models/Operations/UpdateListRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\UpdateListResponse](../../Models/Operations/UpdateListResponse.md)**

