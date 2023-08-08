# FileData

File data that is uploaded


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `authorId`                                                    | *?string*                                                     | :heavy_minus_sign:                                            | Account id of user which created the file                     | 61a5ce58y5d4795761045991                                      |
| `companyId`                                                   | *?string*                                                     | :heavy_minus_sign:                                            | Company id linked to a file                                   | 61a5ce58c5d4795761045991                                      |
| `contactId`                                                   | *?int*                                                        | :heavy_minus_sign:                                            | Contact id of contact on which file is uploaded               | 1                                                             |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | File created date/time                                        | 2017-05-01T17:05:03.000Z                                      |
| `dealId`                                                      | *?string*                                                     | :heavy_minus_sign:                                            | Deal id linked to a file                                      | 61a5ce58c5d4795761045991                                      |
| `name`                                                        | *?string*                                                     | :heavy_minus_sign:                                            | Name of uploaded file                                         | example.png                                                   |
| `size`                                                        | *?int*                                                        | :heavy_minus_sign:                                            | Size of file in bytes                                         | 10                                                            |