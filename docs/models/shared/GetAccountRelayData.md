# GetAccountRelayData

Data regarding the transactional email account


## Fields

| Field                                           | Type                                            | Required                                        | Description                                     | Example                                         |
| ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- |
| `port`                                          | *int*                                           | :heavy_check_mark:                              | Port used for SMTP Relay                        | 125                                             |
| `relay`                                         | *string*                                        | :heavy_check_mark:                              | URL of the SMTP Relay                           | relay.domain.com                                |
| `userName`                                      | *string*                                        | :heavy_check_mark:                              | Email to use as login on transactional platform | john.smith@example.com                          |