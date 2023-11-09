# GetEmailCampaignRequest


## Fields

| Field                                                                                                                                           | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `campaignId`                                                                                                                                    | *int*                                                                                                                                           | :heavy_check_mark:                                                                                                                              | Id of the campaign                                                                                                                              |
| `statistics`                                                                                                                                    | [?\test\BREVO\Models\Operations\Statistics](../../Models/Operations/Statistics.md)                                                              | :heavy_minus_sign:                                                                                                                              | Filter on the type of statistics required. Example **globalStats** value will only fetch globalStats info of the campaign in returned response. |