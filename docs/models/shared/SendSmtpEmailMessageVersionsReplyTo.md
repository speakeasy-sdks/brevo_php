# SendSmtpEmailMessageVersionsReplyTo

Email (**required**), along with name (_optional_), on which transactional mail recipients will be able to reply back. For example,
**{"email":"ann6533@example.com", "name":"Ann"}**



## Fields

| Field                                                     | Type                                                      | Required                                                  | Description                                               | Example                                                   |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `email`                                                   | *string*                                                  | :heavy_check_mark:                                        | Email address in reply to                                 | ann6533@example.com                                       |
| `name`                                                    | *?string*                                                 | :heavy_minus_sign:                                        | Name in reply to. **Maximum allowed characters are 70**.<br/> | Ann                                                       |