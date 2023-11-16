# UpdateResellerChildRequest


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `childIdentifier`                                                           | *string*                                                                    | :heavy_check_mark:                                                          | Either auth key or id of reseller's child                                   |
| `updateChild`                                                               | [\test\BREVO\Models\Shared\UpdateChild](../../Models/Shared/UpdateChild.md) | :heavy_check_mark:                                                          | values to update in child profile                                           |