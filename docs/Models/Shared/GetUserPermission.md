# GetUserPermission

Check user permission


## Fields

| Field                                                                            | Type                                                                             | Required                                                                         | Description                                                                      | Example                                                                          |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `email`                                                                          | *string*                                                                         | :heavy_check_mark:                                                               | Email address of the user.                                                       | invitedUser@company.com                                                          |
| `privileges`                                                                     | array<[\test\BREVO\Models\Shared\Privileges](../../Models/Shared/Privileges.md)> | :heavy_check_mark:                                                               | Granular feature permissions given to the user.                                  |                                                                                  |
| `status`                                                                         | *string*                                                                         | :heavy_check_mark:                                                               | Status of the invited user.                                                      | active                                                                           |