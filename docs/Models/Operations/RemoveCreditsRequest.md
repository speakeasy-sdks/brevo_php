# RemoveCreditsRequest


## Fields

| Field                                                                           | Type                                                                            | Required                                                                        | Description                                                                     |
| ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| `childIdentifier`                                                               | *string*                                                                        | :heavy_check_mark:                                                              | Either auth key or id of reseller's child                                       |
| `removeCredits`                                                                 | [\test\BREVO\Models\Shared\RemoveCredits](../../Models/Shared/RemoveCredits.md) | :heavy_check_mark:                                                              | Values to post to remove email or SMS credits from a specific child account     |