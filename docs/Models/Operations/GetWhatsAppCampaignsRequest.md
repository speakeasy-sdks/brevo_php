# GetWhatsAppCampaignsRequest


## Fields

| Field                                                                                                                                                                                                                | Type                                                                                                                                                                                                                 | Required                                                                                                                                                                                                             | Description                                                                                                                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `endDate`                                                                                                                                                                                                            | *?string*                                                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                                                   | **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the WhatsApp campaigns created.<br/>**Prefer to pass your timezone in date-time format for accurate result**<br/> |
| `limit`                                                                                                                                                                                                              | *?int*                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                   | Number of documents per page                                                                                                                                                                                         |
| `offset`                                                                                                                                                                                                             | *?int*                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                   | Index of the first document in the page                                                                                                                                                                              |
| `sort`                                                                                                                                                                                                               | [?\test\BREVO\Models\Operations\GetWhatsAppCampaignsQueryParamSort](../../Models/Operations/GetWhatsAppCampaignsQueryParamSort.md)                                                                                   | :heavy_minus_sign:                                                                                                                                                                                                   | Sort the results in the ascending/descending order of record modification. Default order is **descending** if `sort` is not passed                                                                                   |
| `startDate`                                                                                                                                                                                                          | *?string*                                                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                                                   | **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the WhatsApp campaigns created.<br/>**Prefer to pass your timezone in date-time format for accurate result**<br/> |