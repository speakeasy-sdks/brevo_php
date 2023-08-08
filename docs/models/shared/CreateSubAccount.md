# CreateSubAccount

Request body with sub-account organization name


## Fields

| Field                                                                        | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `companyName`                                                                | *string*                                                                     | :heavy_check_mark:                                                           | Set the name of the sub-account company                                      |
| `email`                                                                      | *string*                                                                     | :heavy_check_mark:                                                           | Email address for the organization                                           |
| `language`                                                                   | [?CreateSubAccountLanguage](../../models/shared/CreateSubAccountLanguage.md) | :heavy_minus_sign:                                                           | Set the language of the sub-account                                          |
| `timezone`                                                                   | *?string*                                                                    | :heavy_minus_sign:                                                           | Set the timezone of the sub-account                                          |