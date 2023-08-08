# SendSmtpEmailAttachment


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      | Example                                                          |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `content`                                                        | *?string*                                                        | :heavy_minus_sign:                                               | Base64 encoded chunk data of the attachment generated on the fly | b3JkZXIucGRm                                                     |
| `name`                                                           | *?string*                                                        | :heavy_minus_sign:                                               | **Required if content is passed**. Name of the attachment<br/>   | myAttachment.png                                                 |
| `url`                                                            | *?string*                                                        | :heavy_minus_sign:                                               | Absolute url of the attachment (**no local file**).<br/>         | https://attachment.domain.com/myAttachmentFromUrl.jpg            |