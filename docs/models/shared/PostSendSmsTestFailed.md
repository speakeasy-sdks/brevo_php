# PostSendSmsTestFailed


## Fields

| Field                                           | Type                                            | Required                                        | Description                                     | Example                                         |
| ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- |
| `code`                                          | *string*                                        | :heavy_check_mark:                              | Response code                                   | invalid_parameter                               |
| `message`                                       | *string*                                        | :heavy_check_mark:                              | Response message                                | The SMS could not be sent to all recipients     |
| `unexistingSms`                                 | array<*string*>                                 | :heavy_minus_sign:                              | N/A                                             | 337699086644@mailin.com, 41778899954@mailin.com |
| `withoutListSms`                                | array<*string*>                                 | :heavy_minus_sign:                              | N/A                                             | 3542388988@mailin.com, 10976444477@mailin.com   |