# Task

Task Details


## Fields

| Field                                               | Type                                                | Required                                            | Description                                         | Example                                             |
| --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- |
| `companiesIds`                                      | array<*string*>                                     | :heavy_minus_sign:                                  | Companies ids for companies a task is linked to     |                                                     |
| `contactsIds`                                       | array<*int*>                                        | :heavy_minus_sign:                                  | Contact ids for contacts linked to this task        |                                                     |
| `dealsIds`                                          | array<*string*>                                     | :heavy_minus_sign:                                  | Deal ids for deals a task is linked to              |                                                     |
| `id`                                                | *?string*                                           | :heavy_minus_sign:                                  | Unique task id                                      | 61a5cd07ca1347c82306ad06                            |
| `name`                                              | *string*                                            | :heavy_check_mark:                                  | Name of task                                        | Task: Connect with client                           |
| `taskTypeId`                                        | *string*                                            | :heavy_check_mark:                                  | Id for type of task e.g Call / Email / Meeting etc. | 61a5cd07ca1347c82306ad09                            |