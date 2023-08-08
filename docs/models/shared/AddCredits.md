# AddCredits

Values to post to add credit to a specific child account


## Fields

| Field                                                                                  | Type                                                                                   | Required                                                                               | Description                                                                            | Example                                                                                |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `email`                                                                                | *?int*                                                                                 | :heavy_minus_sign:                                                                     | **Required if sms credits are empty.** Email credits to be added to the child account<br/> | 1200                                                                                   |
| `sms`                                                                                  | *?int*                                                                                 | :heavy_minus_sign:                                                                     | **Required if email credits are empty.** SMS credits to be added to the child account<br/> | 450                                                                                    |