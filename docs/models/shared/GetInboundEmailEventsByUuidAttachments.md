# GetInboundEmailEventsByUuidAttachments


## Fields

| Field                                                                  | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `contentId`                                                            | *?string*                                                              | :heavy_minus_sign:                                                     | value of the Content-ID header of the attachment.                      |
| `contentLength`                                                        | *?int*                                                                 | :heavy_minus_sign:                                                     | size of the attachment in bytes                                        |
| `contentType`                                                          | *?string*                                                              | :heavy_minus_sign:                                                     | value of the Content-Type header of the attachment                     |
| `name`                                                                 | *?string*                                                              | :heavy_minus_sign:                                                     | filename specified in the Content-Disposition header of the attachment |