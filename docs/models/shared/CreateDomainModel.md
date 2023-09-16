# CreateDomainModel


## Fields

| Field                                                                              | Type                                                                               | Required                                                                           | Description                                                                        | Example                                                                            |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `dnsRecords`                                                                       | [?CreateDomainModelDnsRecords](../../models/shared/CreateDomainModelDnsRecords.md) | :heavy_minus_sign:                                                                 | N/A                                                                                |                                                                                    |
| `domainName`                                                                       | *?string*                                                                          | :heavy_minus_sign:                                                                 | Domain                                                                             | true                                                                               |
| `id`                                                                               | *int*                                                                              | :heavy_check_mark:                                                                 | ID of the Domain created                                                           | 5                                                                                  |
| `message`                                                                          | *?string*                                                                          | :heavy_minus_sign:                                                                 | Success message                                                                    | Domain added successfully. To authenticate it, add following DNS records           |