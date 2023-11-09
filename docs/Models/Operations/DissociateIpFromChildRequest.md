# DissociateIpFromChildRequest


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `childIdentifier`                                                     | *string*                                                              | :heavy_check_mark:                                                    | Either auth key or id of reseller's child                             |
| `manageIp`                                                            | [\test\BREVO\Models\Shared\ManageIp](../../Models/Shared/ManageIp.md) | :heavy_check_mark:                                                    | IP to dissociate                                                      |