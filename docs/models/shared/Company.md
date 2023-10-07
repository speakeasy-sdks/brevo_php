# Company

Company Details


## Fields

| Field                                                                      | Type                                                                       | Required                                                                   | Description                                                                | Example                                                                    |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `attributes`                                                               | [?CompanyAttributes](../../models/shared/CompanyAttributes.md)             | :heavy_minus_sign:                                                         | Company attributes with values                                             |                                                                            |
| `id`                                                                       | *?string*                                                                  | :heavy_minus_sign:                                                         | Unique comoany id                                                          | 629475917295261d9b1f4403                                                   |
| `linkedContactsIds`                                                        | array<*int*>                                                               | :heavy_minus_sign:                                                         | Contact ids for contacts linked to this company                            | 1,2,3                                                                      |
| `linkedDealsIds`                                                           | array<*string*>                                                            | :heavy_minus_sign:                                                         | Deals ids for companies linked to this company                             | 61a5ce58c5d4795761045990,61a5ce58c5d4795761045991,61a5ce58c5d4795761045992 |