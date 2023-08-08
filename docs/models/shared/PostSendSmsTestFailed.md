# PostSendSmsTestFailed

Test SMS could not be sent to the following email addresses


## Fields

| Field                                       | Type                                        | Required                                    | Description                                 | Example                                     |
| ------------------------------------------- | ------------------------------------------- | ------------------------------------------- | ------------------------------------------- | ------------------------------------------- |
| `code`                                      | *string*                                    | :heavy_check_mark:                          | Response code                               | invalid_parameter                           |
| `message`                                   | *string*                                    | :heavy_check_mark:                          | Response message                            | The SMS could not be sent to all recipients |
| `unexistingSms`                             | array<*string*>                             | :heavy_minus_sign:                          | N/A                                         |                                             |
| `withoutListSms`                            | array<*string*>                             | :heavy_minus_sign:                          | N/A                                         |                                             |