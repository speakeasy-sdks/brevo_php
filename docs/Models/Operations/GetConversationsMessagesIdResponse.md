# GetConversationsMessagesIdResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | HTTP response content type for this operation                                                                |
| `conversationsMessage`                                                                                       | [?\test\BREVO\Models\Shared\ConversationsMessage](../../Models/Shared/ConversationsMessage.md)               | :heavy_minus_sign:                                                                                           | Requested message is returned as a response                                                                  |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | HTTP response status code for this operation                                                                 |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | Raw HTTP response; suitable for custom response parsing                                                      |
| `errorModel`                                                                                                 | [?\test\BREVO\Models\Shared\ErrorModel](../../Models/Shared/ErrorModel.md)                                   | :heavy_minus_sign:                                                                                           | Returned when invalid data posted                                                                            |