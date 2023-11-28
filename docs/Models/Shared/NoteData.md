# NoteData

Note data to be saved


## Fields

| Field                                                   | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `companyIds`                                            | array<*string*>                                         | :heavy_minus_sign:                                      | Company Ids linked to a note                            | ["61a5ce58c5d4795761045990","61a5ce58c5d4795761045991"] |
| `contactIds`                                            | array<*int*>                                            | :heavy_minus_sign:                                      | Contact Ids linked to a note                            | [247,1,2]                                               |
| `dealIds`                                               | array<*string*>                                         | :heavy_minus_sign:                                      | Deal Ids linked to a note                               | ["61a5ce58c5d4795761045990","61a5ce58c5d4795761045991"] |
| `text`                                                  | *string*                                                | :heavy_check_mark:                                      | Text content of a note                                  | In communication with client for resolution of queries. |