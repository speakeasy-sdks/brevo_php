# PostSendFailed


## Fields

| Field                                              | Type                                               | Required                                           | Description                                        | Example                                            |
| -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------- |
| `blackListedEmails`                                | array<*string*>                                    | :heavy_minus_sign:                                 | N/A                                                | jeff.dean@example.com, jim.sue@example.com         |
| `code`                                             | *string*                                           | :heavy_check_mark:                                 | Response code                                      | invalid_parameter                                  |
| `message`                                          | *string*                                           | :heavy_check_mark:                                 | Response message                                   | The email could not be sent to all recipients      |
| `unexistingEmails`                                 | array<*string*>                                    | :heavy_minus_sign:                                 | N/A                                                | matthew.dow@example.com, elisa.carrely@example.com |
| `withoutListEmails`                                | array<*string*>                                    | :heavy_minus_sign:                                 | N/A                                                | jeff.dean@example.com, jim.sue@example.com         |