# PatchCompaniesLinkUnlinkIdRequestBody

Linked / Unlinked contacts and deals ids.


## Fields

| Field                                                | Type                                                 | Required                                             | Description                                          |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `linkContactIds`                                     | array<*int*>                                         | :heavy_minus_sign:                                   | Contact ids for contacts to be linked with company   |
| `linkDealsIds`                                       | array<*string*>                                      | :heavy_minus_sign:                                   | Deal ids for deals to be linked with company         |
| `unlinkContactIds`                                   | array<*int*>                                         | :heavy_minus_sign:                                   | Contact ids for contacts to be unlinked from company |
| `unlinkDealsIds`                                     | array<*string*>                                      | :heavy_minus_sign:                                   | Deal ids for deals to be unlinked from company       |