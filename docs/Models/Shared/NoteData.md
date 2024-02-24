# NoteData

Note data to be saved


## Fields

| Field                                                      | Type                                                       | Required                                                   | Description                                                | Example                                                    |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `companyIds`                                               | array<*string*>                                            | :heavy_minus_sign:                                         | Company Ids linked to a note                               | [<br/>"61a5ce58c5d4795761045990",<br/>"61a5ce58c5d4795761045991"<br/>] |
| `contactIds`                                               | array<*int*>                                               | :heavy_minus_sign:                                         | Contact Ids linked to a note                               | [<br/>247,<br/>1,<br/>2<br/>]                              |
| `dealIds`                                                  | array<*string*>                                            | :heavy_minus_sign:                                         | Deal Ids linked to a note                                  | [<br/>"61a5ce58c5d4795761045990",<br/>"61a5ce58c5d4795761045991"<br/>] |
| `text`                                                     | *string*                                                   | :heavy_check_mark:                                         | Text content of a note                                     | In communication with client for resolution of queries.    |