# RequestContactExportCustomContactFilterActionForEmailCampaigns

**Mandatory if neither actionForContacts nor actionForSmsCampaigns is passed.** This will export the contacts on the basis of provided action applied on email campaigns.
* **openers & nonOpeners** - emailCampaignId is mandatory. Fetch the list of readers / non-readers for a particular email campaign.
* **clickers & nonClickers** - emailCampaignId is mandatory. Fetch the list of clickers / non-clickers for a particular email campaign.
* **unsubscribed** - emailCampaignId is mandatory. Fetch the list of all unsubscribed (blacklisted via any means) contacts for a particular email campaign.
* **hardBounces & softBounces** - emailCampaignId is optional. Fetch the list of hard bounces / soft bounces for a particular / all email campaign(s).



## Values

| Name           | Value          |
| -------------- | -------------- |
| `Openers`      | openers        |
| `NonOpeners`   | nonOpeners     |
| `Clickers`     | clickers       |
| `NonClickers`  | nonClickers    |
| `Unsubscribed` | unsubscribed   |
| `HardBounces`  | hardBounces    |
| `SoftBounces`  | softBounces    |