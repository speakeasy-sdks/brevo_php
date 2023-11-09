# GetAllExternalFeedsRequest


## Fields

| Field                                                                                                                                                    | Type                                                                                                                                                     | Required                                                                                                                                                 | Description                                                                                                                                              |
| -------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `authType`                                                                                                                                               | [?\test\BREVO\Models\Operations\AuthType](../../Models/Operations/AuthType.md)                                                                           | :heavy_minus_sign:                                                                                                                                       | Filter the records by `authType` of the feed.                                                                                                            |
| `endDate`                                                                                                                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                            | :heavy_minus_sign:                                                                                                                                       | Mandatory if `startDate` is used. Ending date (YYYY-MM-DD) till which you want to fetch the list. Maximum time period that can be selected is one month. |
| `limit`                                                                                                                                                  | *?int*                                                                                                                                                   | :heavy_minus_sign:                                                                                                                                       | Number of documents returned per page.                                                                                                                   |
| `offset`                                                                                                                                                 | *?int*                                                                                                                                                   | :heavy_minus_sign:                                                                                                                                       | Index of the first document on the page.                                                                                                                 |
| `search`                                                                                                                                                 | *?string*                                                                                                                                                | :heavy_minus_sign:                                                                                                                                       | Can be used to filter records by search keyword on feed name                                                                                             |
| `sort`                                                                                                                                                   | [?\test\BREVO\Models\Operations\GetAllExternalFeedsQueryParamSort](../../Models/Operations/GetAllExternalFeedsQueryParamSort.md)                         | :heavy_minus_sign:                                                                                                                                       | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed.                          |
| `startDate`                                                                                                                                              | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                            | :heavy_minus_sign:                                                                                                                                       | Mandatory if `endDate` is used. Starting date (YYYY-MM-DD) from which you want to fetch the list. Can be maximum 30 days older than current date.        |