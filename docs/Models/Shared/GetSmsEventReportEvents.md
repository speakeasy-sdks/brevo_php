# GetSmsEventReportEvents


## Fields

| Field                                                                                                              | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        | Example                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `date`                                                                                                             | *?string*                                                                                                          | :heavy_minus_sign:                                                                                                 | UTC date-time on which the event has been generated                                                                | 2017-03-12T12:30:00Z                                                                                               |
| `event`                                                                                                            | [?\test\BREVO\Models\Shared\GetSmsEventReportEvent](../../Models/Shared/GetSmsEventReportEvent.md)                 | :heavy_minus_sign:                                                                                                 | Event which occurred                                                                                               | accepted                                                                                                           |
| `messageId`                                                                                                        | *?string*                                                                                                          | :heavy_minus_sign:                                                                                                 | Message ID which generated the event                                                                               | 1472640582425378                                                                                                   |
| `phoneNumber`                                                                                                      | *?string*                                                                                                          | :heavy_minus_sign:                                                                                                 | Phone number which has generated the event                                                                         | 00189001094                                                                                                        |
| `reason`                                                                                                           | *?string*                                                                                                          | :heavy_minus_sign:                                                                                                 | Reason of bounce (only available if the event is hardbounce or softbounce)                                         | Message is undeliverable due to an incorrect / invalid / blacklisted / permanently barred MSISDN for this operator |
| `reply`                                                                                                            | *?string*                                                                                                          | :heavy_minus_sign:                                                                                                 | N/A                                                                                                                |                                                                                                                    |
| `tag`                                                                                                              | *?string*                                                                                                          | :heavy_minus_sign:                                                                                                 | Tag of the SMS which generated the event                                                                           | CabWaiting                                                                                                         |