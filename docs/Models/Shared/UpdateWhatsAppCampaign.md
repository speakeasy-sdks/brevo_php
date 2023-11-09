# UpdateWhatsAppCampaign


## Fields

| Field                                                                                                                                                                                                                                                                                          | Type                                                                                                                                                                                                                                                                                           | Required                                                                                                                                                                                                                                                                                       | Description                                                                                                                                                                                                                                                                                    | Example                                                                                                                                                                                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `campaignName`                                                                                                                                                                                                                                                                                 | *?string*                                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                                             | Name of the campaign                                                                                                                                                                                                                                                                           | Test WhatsApp                                                                                                                                                                                                                                                                                  |
| `campaignStatus`                                                                                                                                                                                                                                                                               | [?\test\BREVO\Models\Shared\UpdateWhatsAppCampaignCampaignStatus](../../Models/Shared/UpdateWhatsAppCampaignCampaignStatus.md)                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                                                                                                             | Status of the campaign                                                                                                                                                                                                                                                                         | scheduled                                                                                                                                                                                                                                                                                      |
| `recipients`                                                                                                                                                                                                                                                                                   | [?\test\BREVO\Models\Shared\UpdateWhatsAppCampaignRecipients](../../Models/Shared/UpdateWhatsAppCampaignRecipients.md)                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                             | Segment ids and List ids to include/exclude from campaign                                                                                                                                                                                                                                      |                                                                                                                                                                                                                                                                                                |
| `rescheduleFor`                                                                                                                                                                                                                                                                                | *?string*                                                                                                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                                                                                                             | Reschedule the sending UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) of campaign. **Prefer to pass your timezone in date-time format for accurate result.For example: **2017-06-01T12:30:00+02:00**<br/>Use this field to update the scheduledAt of any existing draft or scheduled WhatsApp campaign.<br/> | 2017-06-01T12:30:00+02:00                                                                                                                                                                                                                                                                      |