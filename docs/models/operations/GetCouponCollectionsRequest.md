# GetCouponCollectionsRequest


## Fields

| Field                                                                            | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `limit`                                                                          | *?int*                                                                           | :heavy_minus_sign:                                                               | Number of documents returned per page                                            |
| `offset`                                                                         | *?int*                                                                           | :heavy_minus_sign:                                                               | Index of the first document on the page                                          |
| `sort`                                                                           | [?GetCouponCollectionsSort](../../models/operations/GetCouponCollectionsSort.md) | :heavy_minus_sign:                                                               | Sort the results by creation time in ascending/descending order                  |