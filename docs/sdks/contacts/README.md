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

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\AddContactToListRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new AddContactToListRequest();
    $request->requestBody = new AddContactToListByIDs();
    $request->requestBody->ids = [
        10,
    ];
    $request->listId = 976460;

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
| `$request`                                                                                                  | [\test\BREVO\Models\Operations\AddContactToListRequest](../../models/operations/AddContactToListRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\test\BREVO\Models\Operations\AddContactToListResponse](../../models/operations/AddContactToListResponse.md)**


## createAttribute

Create contact attribute

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\CreateAttributeRequest;
use \test\BREVO\Models\Operations\CreateAttributeAttributeCategory;
use \test\BREVO\Models\Shared\CreateAttribute;
use \test\BREVO\Models\Shared\CreateAttributeEnumeration;
use \test\BREVO\Models\Shared\CreateAttributeType;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateAttributeRequest();
    $request->attributeCategory = CreateAttributeAttributeCategory::Global;
    $request->attributeName = 'nihil';
    $request->createAttribute = new CreateAttribute();
    $request->createAttribute->enumeration = [
        new CreateAttributeEnumeration(),
    ];
    $request->createAttribute->isRecurring = true;
    $request->createAttribute->type = CreateAttributeType::Text;
    $request->createAttribute->value = 'COUNT[BLACKLISTED,BLACKLISTED,<,NOW()]';

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
| `$request`                                                                                                | [\test\BREVO\Models\Operations\CreateAttributeRequest](../../models/operations/CreateAttributeRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\CreateAttributeResponse](../../models/operations/CreateAttributeResponse.md)**


## createContact

Create a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateContact;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateContact();
    $request->attributes = [
        'praesentium' => 'voluptatibus',
    ];
    $request->email = 'elly@example.com';
    $request->emailBlacklisted = false;
    $request->extId = 'externalId';
    $request->listIds = [
        36,
    ];
    $request->smsBlacklisted = false;
    $request->smtpBlacklistSender = [
        'Lelah.Klein3@gmail.com',
    ];
    $request->updateEnabled = false;

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
| `$request`                                                                      | [\test\BREVO\Models\Shared\CreateContact](../../models/shared/CreateContact.md) | :heavy_check_mark:                                                              | The request object to use for the request.                                      |


### Response

**[?\test\BREVO\Models\Operations\CreateContactResponse](../../models/operations/CreateContactResponse.md)**


## createDoiContact

Create Contact via DOI (Double-Opt-In) Flow

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateDoiContact;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateDoiContact();
    $request->attributes = [
        'reprehenderit' => 'ut',
    ];
    $request->email = 'elly@example.com';
    $request->excludeListIds = [
        36,
    ];
    $request->includeListIds = [
        36,
    ];
    $request->redirectionUrl = 'http://requestb.in/173lyyx1';
    $request->templateId = 2;

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
| `$request`                                                                            | [\test\BREVO\Models\Shared\CreateDoiContact](../../models/shared/CreateDoiContact.md) | :heavy_check_mark:                                                                    | The request object to use for the request.                                            |


### Response

**[?\test\BREVO\Models\Operations\CreateDoiContactResponse](../../models/operations/CreateDoiContactResponse.md)**


## createFolder

Create a folder

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateUpdateFolder;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateUpdateFolder();
    $request->name = 'Wordpress Contacts';

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
| `$request`                                                                                | [\test\BREVO\Models\Shared\CreateUpdateFolder](../../models/shared/CreateUpdateFolder.md) | :heavy_check_mark:                                                                        | The request object to use for the request.                                                |


### Response

**[?\test\BREVO\Models\Operations\CreateFolderResponse](../../models/operations/CreateFolderResponse.md)**


## createList

Create a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\CreateList;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new CreateList();
    $request->folderId = 2;
    $request->name = 'Magento Customer - ES';

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
| `$request`                                                                | [\test\BREVO\Models\Shared\CreateList](../../models/shared/CreateList.md) | :heavy_check_mark:                                                        | The request object to use for the request.                                |


### Response

**[?\test\BREVO\Models\Operations\CreateListResponse](../../models/operations/CreateListResponse.md)**


## deleteAttribute

Delete an attribute

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteAttributeRequest;
use \test\BREVO\Models\Operations\DeleteAttributeAttributeCategory;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteAttributeRequest();
    $request->attributeCategory = DeleteAttributeAttributeCategory::Global;
    $request->attributeName = 'dicta';

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
| `$request`                                                                                                | [\test\BREVO\Models\Operations\DeleteAttributeRequest](../../models/operations/DeleteAttributeRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\DeleteAttributeResponse](../../models/operations/DeleteAttributeResponse.md)**


## deleteContact

Delete a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteContactRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteContactRequest();
    $request->identifier = 'dolore';

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
| `$request`                                                                                            | [\test\BREVO\Models\Operations\DeleteContactRequest](../../models/operations/DeleteContactRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\DeleteContactResponse](../../models/operations/DeleteContactResponse.md)**


## deleteFolder

Delete a folder (and all its lists)

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteFolderRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteFolderRequest();
    $request->folderId = 480894;

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
| `$request`                                                                                          | [\test\BREVO\Models\Operations\DeleteFolderRequest](../../models/operations/DeleteFolderRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\DeleteFolderResponse](../../models/operations/DeleteFolderResponse.md)**


## deleteList

Delete a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\DeleteListRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new DeleteListRequest();
    $request->listId = 118727;

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
| `$request`                                                                                      | [\test\BREVO\Models\Operations\DeleteListRequest](../../models/operations/DeleteListRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\DeleteListResponse](../../models/operations/DeleteListResponse.md)**


## getAttributes

List all attributes

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
    $response = $sdk->contacts->getAttributes();

    if ($response->getAttributes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\test\BREVO\Models\Operations\GetAttributesResponse](../../models/operations/GetAttributesResponse.md)**


## getContactInfo

Along with the contact details, this endpoint will show the statistics of contact for the recent 90 days by default. To fetch the earlier statistics, please use Get contact campaign stats ``https://developers.brevo.com/reference/contacts-7#getcontactstats`` endpoint with the appropriate date ranges.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetContactInfoRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetContactInfoRequest();
    $request->endDate = 'harum';
    $request->identifier = 'accusamus';
    $request->startDate = 'commodi';

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
| `$request`                                                                                              | [\test\BREVO\Models\Operations\GetContactInfoRequest](../../models/operations/GetContactInfoRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetContactInfoResponse](../../models/operations/GetContactInfoResponse.md)**


## getContactStats

Get email campaigns' statistics for a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetContactStatsRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetContactStatsRequest();
    $request->endDate = 'repudiandae';
    $request->identifier = 'ipsum';
    $request->startDate = 'quidem';

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
| `$request`                                                                                                | [\test\BREVO\Models\Operations\GetContactStatsRequest](../../models/operations/GetContactStatsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\GetContactStatsResponse](../../models/operations/GetContactStatsResponse.md)**


## getContacts

Get all the contacts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetContactsRequest;
use \test\BREVO\Models\Operations\GetContactsSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetContactsRequest();
    $request->createdSince = 'molestias';
    $request->limit = 566602;
    $request->modifiedSince = 'pariatur';
    $request->offset = 265389;
    $request->sort = GetContactsSort::Desc;

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
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetContactsRequest](../../models/operations/GetContactsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetContactsResponse](../../models/operations/GetContactsResponse.md)**


## getContactsFromList

Get contacts in a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetContactsFromListRequest;
use \test\BREVO\Models\Operations\GetContactsFromListSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetContactsFromListRequest();
    $request->limit = 523248;
    $request->listId = 916723;
    $request->modifiedSince = 'quasi';
    $request->offset = 921158;
    $request->sort = GetContactsFromListSort::Desc;

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
| `$request`                                                                                                        | [\test\BREVO\Models\Operations\GetContactsFromListRequest](../../models/operations/GetContactsFromListRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetContactsFromListResponse](../../models/operations/GetContactsFromListResponse.md)**


## getFolder

Returns a folder's details

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetFolderRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetFolderRequest();
    $request->folderId = 83112;

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
| `$request`                                                                                    | [\test\BREVO\Models\Operations\GetFolderRequest](../../models/operations/GetFolderRequest.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\test\BREVO\Models\Operations\GetFolderResponse](../../models/operations/GetFolderResponse.md)**


## getFolderLists

Get lists in a folder

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetFolderListsRequest;
use \test\BREVO\Models\Operations\GetFolderListsSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetFolderListsRequest();
    $request->folderId = 929297;
    $request->limit = 277718;
    $request->offset = 318569;
    $request->sort = GetFolderListsSort::Asc;

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
| `$request`                                                                                              | [\test\BREVO\Models\Operations\GetFolderListsRequest](../../models/operations/GetFolderListsRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\test\BREVO\Models\Operations\GetFolderListsResponse](../../models/operations/GetFolderListsResponse.md)**


## getFolders

Get all folders

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetFoldersRequest;
use \test\BREVO\Models\Operations\GetFoldersSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetFoldersRequest();
    $request->limit = 667411;
    $request->offset = 842342;
    $request->sort = GetFoldersSort::Asc;

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
| `$request`                                                                                      | [\test\BREVO\Models\Operations\GetFoldersRequest](../../models/operations/GetFoldersRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\GetFoldersResponse](../../models/operations/GetFoldersResponse.md)**


## getList

Get a list's details

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetListRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetListRequest();
    $request->listId = 647174;

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
| `$request`                                                                                | [\test\BREVO\Models\Operations\GetListRequest](../../models/operations/GetListRequest.md) | :heavy_check_mark:                                                                        | The request object to use for the request.                                                |


### Response

**[?\test\BREVO\Models\Operations\GetListResponse](../../models/operations/GetListResponse.md)**


## getLists

Get all the lists

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetListsRequest;
use \test\BREVO\Models\Operations\GetListsSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetListsRequest();
    $request->limit = 716327;
    $request->offset = 841386;
    $request->sort = GetListsSort::Asc;

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
| `$request`                                                                                  | [\test\BREVO\Models\Operations\GetListsRequest](../../models/operations/GetListsRequest.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\test\BREVO\Models\Operations\GetListsResponse](../../models/operations/GetListsResponse.md)**


## getSegments

Get all the segments

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\GetSegmentsRequest;
use \test\BREVO\Models\Operations\GetSegmentsSort;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new GetSegmentsRequest();
    $request->limit = 264730;
    $request->offset = 183191;
    $request->sort = GetSegmentsSort::Asc;

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
| `$request`                                                                                        | [\test\BREVO\Models\Operations\GetSegmentsRequest](../../models/operations/GetSegmentsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\test\BREVO\Models\Operations\GetSegmentsResponse](../../models/operations/GetSegmentsResponse.md)**


## importContacts

It returns the background process ID which on completion calls the notify URL that you have set in the input.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\RequestContactImport;
use \test\BREVO\Models\Shared\RequestContactImportJsonBody;
use \test\BREVO\Models\Shared\RequestContactImportNewList;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new RequestContactImport();
    $request->emailBlacklist = false;
    $request->emptyContactsAttributes = true;
    $request->fileBody = 'NAME;SURNAME;EMAIL
    Smith;John;john.smith@example.com
    Roger;Ellie;ellie36@example.com';
    $request->fileUrl = 'https://importfile.domain.com';
    $request->jsonBody = [
        new RequestContactImportJsonBody(),
    ];
    $request->listIds = [
        76,
    ];
    $request->newList = new RequestContactImportNewList();
    $request->newList->folderId = 2;
    $request->newList->listName = 'ContactImport - 2017-05';
    $request->notifyUrl = 'http://requestb.in/173lyyx1';
    $request->smsBlacklist = false;
    $request->updateExistingContacts = true;

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
| `$request`                                                                                    | [\test\BREVO\Models\Shared\RequestContactImport](../../models/shared/RequestContactImport.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\test\BREVO\Models\Operations\ImportContactsResponse](../../models/operations/ImportContactsResponse.md)**


## removeContactFromList

Delete a contact from a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\RemoveContactFromListRequest;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new RemoveContactFromListRequest();
    $request->requestBody = new RemoveContactFromListByIDs();
    $request->requestBody->ids = [
        10,
    ];
    $request->listId = 552822;

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
| `$request`                                                                                                            | [\test\BREVO\Models\Operations\RemoveContactFromListRequest](../../models/operations/RemoveContactFromListRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\test\BREVO\Models\Operations\RemoveContactFromListResponse](../../models/operations/RemoveContactFromListResponse.md)**


## requestContactExport

It returns the background process ID which on completion calls the notify URL that you have set in the input. File will be available in csv.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\RequestContactExport;
use \test\BREVO\Models\Shared\RequestContactExportCustomContactFilter;
use \test\BREVO\Models\Shared\RequestContactExportCustomContactFilterActionForContacts;
use \test\BREVO\Models\Shared\RequestContactExportCustomContactFilterActionForEmailCampaigns;
use \test\BREVO\Models\Shared\RequestContactExportCustomContactFilterActionForSmsCampaigns;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new RequestContactExport();
    $request->customContactFilter = new RequestContactExportCustomContactFilter();
    $request->customContactFilter->actionForContacts = RequestContactExportCustomContactFilterActionForContacts::AllContacts;
    $request->customContactFilter->actionForEmailCampaigns = RequestContactExportCustomContactFilterActionForEmailCampaigns::NonOpeners;
    $request->customContactFilter->actionForSmsCampaigns = RequestContactExportCustomContactFilterActionForSmsCampaigns::Unsubscribed;
    $request->customContactFilter->emailCampaignId = 12;
    $request->customContactFilter->listId = 2;
    $request->customContactFilter->smsCampaignId = 12;
    $request->exportAttributes = [
        'NAME',
    ];
    $request->notifyUrl = 'http://requestb.in/173lyyx1';

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
| `$request`                                                                                    | [\test\BREVO\Models\Shared\RequestContactExport](../../models/shared/RequestContactExport.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\test\BREVO\Models\Operations\RequestContactExportResponse](../../models/operations/RequestContactExportResponse.md)**


## updateAttribute

Update contact attribute

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateAttributeRequest;
use \test\BREVO\Models\Operations\UpdateAttributeAttributeCategory;
use \test\BREVO\Models\Shared\UpdateAttribute;
use \test\BREVO\Models\Shared\UpdateAttributeEnumeration;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UpdateAttributeRequest();
    $request->attributeCategory = UpdateAttributeAttributeCategory::Calculated;
    $request->attributeName = 'alias';
    $request->updateAttribute = new UpdateAttribute();
    $request->updateAttribute->enumeration = [
        new UpdateAttributeEnumeration(),
    ];
    $request->updateAttribute->value = 'COUNT[BLACKLISTED,BLACKLISTED,<,NOW()]';

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
| `$request`                                                                                                | [\test\BREVO\Models\Operations\UpdateAttributeRequest](../../models/operations/UpdateAttributeRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\test\BREVO\Models\Operations\UpdateAttributeResponse](../../models/operations/UpdateAttributeResponse.md)**


## updateBatchContacts

Update multiple contacts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Shared\UpdateBatchContacts;
use \test\BREVO\Models\Shared\UpdateBatchContactsContacts;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UpdateBatchContacts();
    $request->contacts = [
        new UpdateBatchContactsContacts(),
    ];

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
| `$request`                                                                                  | [\test\BREVO\Models\Shared\UpdateBatchContacts](../../models/shared/UpdateBatchContacts.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\test\BREVO\Models\Operations\UpdateBatchContactsResponse](../../models/operations/UpdateBatchContactsResponse.md)**


## updateContact

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateContactRequest;
use \test\BREVO\Models\Shared\UpdateContact;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UpdateContactRequest();
    $request->identifier = 'dolorum';
    $request->updateContact = new UpdateContact();
    $request->updateContact->attributes = [
        'excepturi' => 'tempora',
    ];
    $request->updateContact->emailBlacklisted = false;
    $request->updateContact->extId = 'updateExternalId';
    $request->updateContact->listIds = [
        65,
    ];
    $request->updateContact->smsBlacklisted = true;
    $request->updateContact->smtpBlacklistSender = [
        'Mustafa.Green24@hotmail.com',
    ];
    $request->updateContact->unlinkListIds = [
        36,
    ];

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
| `$request`                                                                                            | [\test\BREVO\Models\Operations\UpdateContactRequest](../../models/operations/UpdateContactRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\test\BREVO\Models\Operations\UpdateContactResponse](../../models/operations/UpdateContactResponse.md)**


## updateFolder

Update a folder

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateFolderRequest;
use \test\BREVO\Models\Shared\CreateUpdateFolder;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UpdateFolderRequest();
    $request->createUpdateFolder = new CreateUpdateFolder();
    $request->createUpdateFolder->name = 'Wordpress Contacts';
    $request->folderId = 756107;

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
| `$request`                                                                                          | [\test\BREVO\Models\Operations\UpdateFolderRequest](../../models/operations/UpdateFolderRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\test\BREVO\Models\Operations\UpdateFolderResponse](../../models/operations/UpdateFolderResponse.md)**


## updateList

Update a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test\BREVO\Brevo;
use \test\BREVO\Models\Shared\Security;
use \test\BREVO\Models\Operations\UpdateListRequest;
use \test\BREVO\Models\Shared\UpdateList;

$sdk = Brevo::builder()
    ->build();

try {
    $request = new UpdateListRequest();
    $request->listId = 576157;
    $request->updateList = new UpdateList();
    $request->updateList->folderId = 2;
    $request->updateList->name = 'Magento Customer - ES';

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
| `$request`                                                                                      | [\test\BREVO\Models\Operations\UpdateListRequest](../../models/operations/UpdateListRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\test\BREVO\Models\Operations\UpdateListResponse](../../models/operations/UpdateListResponse.md)**

