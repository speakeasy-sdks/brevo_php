# RequestContactExportCustomContactFilterActionForSmsCampaigns

**Mandatory if neither actionForContacts nor actionForEmailCampaigns is passed.** This will export the contacts on the basis of provided action applied on sms campaigns.
* **unsubscribed** - Fetch the list of all unsubscribed (blacklisted via any means) contacts for all / particular sms campaigns.
* **hardBounces & softBounces** - Fetch the list of hard bounces / soft bounces for all / particular sms campaigns.



## Values

| Name           | Value          |
| -------------- | -------------- |
| `HardBounces`  | hardBounces    |
| `SoftBounces`  | softBounces    |
| `Unsubscribed` | unsubscribed   |