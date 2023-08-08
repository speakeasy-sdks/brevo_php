# ErrorModel

bad request


## Fields

| Field                                                   | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `code`                                                  | [ErrorModelCode](../../models/shared/ErrorModelCode.md) | :heavy_check_mark:                                      | Error code displayed in case of a failure               | method_not_allowed                                      |
| `message`                                               | *string*                                                | :heavy_check_mark:                                      | Readable message associated to the failure              | POST Method is not allowed on this path                 |