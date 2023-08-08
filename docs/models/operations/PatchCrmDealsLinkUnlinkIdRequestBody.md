# PatchCrmDealsLinkUnlinkIdRequestBody

Linked / Unlinked contacts and companies ids.


## Fields

| Field                                             | Type                                              | Required                                          | Description                                       |
| ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- |
| `linkCompanyIds`                                  | array<*string*>                                   | :heavy_minus_sign:                                | Company ids to be linked with deal                |
| `linkContactIds`                                  | array<*int*>                                      | :heavy_minus_sign:                                | Contact ids for contacts to be linked with deal   |
| `unlinkCompanyIds`                                | array<*string*>                                   | :heavy_minus_sign:                                | Company ids to be unlinked from deal              |
| `unlinkContactIds`                                | array<*int*>                                      | :heavy_minus_sign:                                | Contact ids for contacts to be unlinked from deal |