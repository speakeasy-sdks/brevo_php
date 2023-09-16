# PostCrmNotesResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `noteId`                                                                                                     | [?\test\BREVO\Models\Shared\NoteId](../../models/shared/NoteId.md)                                           | :heavy_minus_sign:                                                                                           | Created new note                                                                                             |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `errorModel`                                                                                                 | [?\test\BREVO\Models\Shared\ErrorModel](../../models/shared/ErrorModel.md)                                   | :heavy_minus_sign:                                                                                           | Returned when invalid data posted                                                                            |