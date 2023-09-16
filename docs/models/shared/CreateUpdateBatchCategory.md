# CreateUpdateBatchCategory


## Fields

| Field                                                                                   | Type                                                                                    | Required                                                                                | Description                                                                             |
| --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| `categories`                                                                            | array<[CreateUpdateCategories](../../models/shared/CreateUpdateCategories.md)>          | :heavy_check_mark:                                                                      | array of categories objects                                                             |
| `updateEnabled`                                                                         | *?bool*                                                                                 | :heavy_minus_sign:                                                                      | Facilitate to update the existing categories in the same request (updateEnabled = true) |