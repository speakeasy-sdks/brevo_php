# AbTestCampaignResult


## Fields

| Field                                                                                                                                                                                                                        | Type                                                                                                                                                                                                                         | Required                                                                                                                                                                                                                     | Description                                                                                                                                                                                                                  | Example                                                                                                                                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `clickRate`                                                                                                                                                                                                                  | *?string*                                                                                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                                                           | Click rate for current winning version                                                                                                                                                                                       | 70%                                                                                                                                                                                                                          |
| `clickedLinks`                                                                                                                                                                                                               | [?AbTestCampaignResultClickedLinks](../../models/shared/AbTestCampaignResultClickedLinks.md)                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                                           | N/A                                                                                                                                                                                                                          |                                                                                                                                                                                                                              |
| `openRate`                                                                                                                                                                                                                   | *?string*                                                                                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                                                           | Open rate for current winning version                                                                                                                                                                                        | 70%                                                                                                                                                                                                                          |
| `statistics`                                                                                                                                                                                                                 | [?AbTestCampaignResultStatistics](../../models/shared/AbTestCampaignResultStatistics.md)                                                                                                                                     | :heavy_minus_sign:                                                                                                                                                                                                           | N/A                                                                                                                                                                                                                          |                                                                                                                                                                                                                              |
| `winningCriteria`                                                                                                                                                                                                            | [?AbTestCampaignResultWinningCriteria](../../models/shared/AbTestCampaignResultWinningCriteria.md)                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                                                           | Criteria choosen for winning version (Open/Click)                                                                                                                                                                            | Open                                                                                                                                                                                                                         |
| `winningSubjectLine`                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                                                           | Subject Line of current winning version                                                                                                                                                                                      | Subject Line A                                                                                                                                                                                                               |
| `winningVersion`                                                                                                                                                                                                             | [?AbTestCampaignResultWinningVersion](../../models/shared/AbTestCampaignResultWinningVersion.md)                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                                           | Winning Campaign Info. pending = Campaign has been picked for sending and winning version is yet to be decided, tie = A tie happened between both the versions, notAvailable = Campaign has not yet been picked for sending. | A                                                                                                                                                                                                                            |
| `winningVersionRate`                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                                                           | Open/Click rate for the winner version                                                                                                                                                                                       | 70%                                                                                                                                                                                                                          |