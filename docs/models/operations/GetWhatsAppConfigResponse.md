# GetWhatsAppConfigResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `errorModel`                                                                                                 | [?\test\BREVO\Models\Shared\ErrorModel](../../models/shared/ErrorModel.md)                                   | :heavy_minus_sign:                                                                                           | bad request                                                                                                  |
| `getWhatsAppConfig`                                                                                          | [?\test\BREVO\Models\Shared\GetWhatsAppConfig](../../models/shared/GetWhatsAppConfig.md)                     | :heavy_minus_sign:                                                                                           | Get all the information of your WhatsApp API account                                                         |