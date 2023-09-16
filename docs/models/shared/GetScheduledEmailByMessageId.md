# GetScheduledEmailByMessageId


## Fields

| Field                                                                                           | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `createdAt`                                                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                   | :heavy_check_mark:                                                                              | Datetime on which the email was scheduled                                                       |
| `scheduledAt`                                                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                   | :heavy_check_mark:                                                                              | Datetime for which the email was scheduled                                                      |
| `status`                                                                                        | [GetScheduledEmailByMessageIdStatus](../../models/shared/GetScheduledEmailByMessageIdStatus.md) | :heavy_check_mark:                                                                              | Current status of the scheduled email                                                           |