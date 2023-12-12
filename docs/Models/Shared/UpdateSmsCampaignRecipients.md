# UpdateSmsCampaignRecipients


## Fields

| Field                                                                        | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `exclusionListIds`                                                           | array<*int*>                                                                 | :heavy_minus_sign:                                                           | List ids which have to be excluded from a campaign                           |
| `listIds`                                                                    | array<*int*>                                                                 | :heavy_check_mark:                                                           | Lists Ids to send the campaign to. **REQUIRED if scheduledAt is not empty**<br/> |