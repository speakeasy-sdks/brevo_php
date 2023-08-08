# PostSendFailed

Test email could not be sent to the following email addresses


## Fields

| Field                                         | Type                                          | Required                                      | Description                                   | Example                                       |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| `blackListedEmails`                           | array<*string*>                               | :heavy_minus_sign:                            | N/A                                           |                                               |
| `code`                                        | *string*                                      | :heavy_check_mark:                            | Response code                                 | invalid_parameter                             |
| `message`                                     | *string*                                      | :heavy_check_mark:                            | Response message                              | The email could not be sent to all recipients |
| `unexistingEmails`                            | array<*string*>                               | :heavy_minus_sign:                            | N/A                                           |                                               |
| `withoutListEmails`                           | array<*string*>                               | :heavy_minus_sign:                            | N/A                                           |                                               |