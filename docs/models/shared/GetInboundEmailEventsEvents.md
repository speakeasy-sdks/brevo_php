# GetInboundEmailEventsEvents


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `date`                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Date when email was received on SMTP relay                    |
| `recipient`                                                   | *string*                                                      | :heavy_check_mark:                                            | Recipient’s email address                                     |
| `sender`                                                      | *string*                                                      | :heavy_check_mark:                                            | Sender’s email address                                        |
| `uuid`                                                        | *string*                                                      | :heavy_check_mark:                                            | UUID that can be used to fetch additional data                |