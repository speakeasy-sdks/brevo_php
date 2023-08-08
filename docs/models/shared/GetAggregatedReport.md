# GetAggregatedReport

Aggregated report informations


## Fields

| Field                                               | Type                                                | Required                                            | Description                                         | Example                                             |
| --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- |
| `blocked`                                           | *?int*                                              | :heavy_minus_sign:                                  | Number of blocked contact emails for the timeframe  | 2                                                   |
| `clicks`                                            | *?int*                                              | :heavy_minus_sign:                                  | Number of clicks for the timeframe                  | 12                                                  |
| `delivered`                                         | *?int*                                              | :heavy_minus_sign:                                  | Number of delivered emails for the timeframe        | 249                                                 |
| `hardBounces`                                       | *?int*                                              | :heavy_minus_sign:                                  | Number of hardbounces for the timeframe             | 1                                                   |
| `invalid`                                           | *?int*                                              | :heavy_minus_sign:                                  | Number of invalid emails for the timeframe          | 0                                                   |
| `opens`                                             | *?int*                                              | :heavy_minus_sign:                                  | Number of openings for the timeframe                | 47                                                  |
| `range`                                             | *?string*                                           | :heavy_minus_sign:                                  | Time frame of the report                            | 2016-09-08\|2017-04-06                              |
| `requests`                                          | *?int*                                              | :heavy_minus_sign:                                  | Number of requests for the timeframe                | 263                                                 |
| `softBounces`                                       | *?int*                                              | :heavy_minus_sign:                                  | Number of softbounces for the timeframe             | 4                                                   |
| `spamReports`                                       | *?int*                                              | :heavy_minus_sign:                                  | Number of complaint (spam report) for the timeframe | 0                                                   |
| `uniqueClicks`                                      | *?int*                                              | :heavy_minus_sign:                                  | Number of unique clicks for the timeframe           | 8                                                   |
| `uniqueOpens`                                       | *?int*                                              | :heavy_minus_sign:                                  | Number of unique openings for the timeframe         | 37                                                  |
| `unsubscribed`                                      | *?int*                                              | :heavy_minus_sign:                                  | Number of unsubscribed emails for the timeframe     | 0                                                   |