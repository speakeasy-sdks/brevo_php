# ActionForContacts

**Mandatory if neither actionForEmailCampaigns nor actionForSmsCampaigns is passed.** This will export the contacts on the basis of provided action applied on contacts as per the list id.
* **allContacts** - Fetch the list of all contacts for a particular list.
* **subscribed & unsubscribed** - Fetch the list of subscribed / unsubscribed (blacklisted via any means) contacts for a particular list.
* **unsubscribedPerList** - Fetch the list of contacts that are unsubscribed from a particular list only.



## Values

| Name                  | Value                 |
| --------------------- | --------------------- |
| `AllContacts`         | allContacts           |
| `Subscribed`          | subscribed            |
| `Unsubscribed`        | unsubscribed          |
| `UnsubscribedPerList` | unsubscribedPerList   |