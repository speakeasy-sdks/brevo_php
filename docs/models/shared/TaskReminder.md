# TaskReminder

Task reminder date/time for a task


## Fields

| Field                                                                  | Type                                                                   | Required                                                               | Description                                                            | Example                                                                |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `types`                                                                | array<[\test\BREVO\Models\Shared\Types](../../models/shared/Types.md)> | :heavy_check_mark:                                                     | Type of task reminder e.g email, push                                  | email                                                                  |
| `unit`                                                                 | [\test\BREVO\Models\Shared\Unit](../../models/shared/Unit.md)          | :heavy_check_mark:                                                     | Unit of time before reminder is to be sent                             |                                                                        |
| `value`                                                                | *int*                                                                  | :heavy_check_mark:                                                     | Value of time unit before reminder is to be sent                       | 10                                                                     |