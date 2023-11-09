# PostCorporateSubAccountResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | HTTP response content type for this operation                                                                |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | HTTP response status code for this operation                                                                 |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | Raw HTTP response; suitable for custom response parsing                                                      |
| `createSubAccountResponse`                                                                                   | [?\test\BREVO\Models\Shared\CreateSubAccountResponse](../../Models/Shared/CreateSubAccountResponse.md)       | :heavy_minus_sign:                                                                                           | Created sub-account ID                                                                                       |
| `errorModel`                                                                                                 | [?\test\BREVO\Models\Shared\ErrorModel](../../Models/Shared/ErrorModel.md)                                   | :heavy_minus_sign:                                                                                           | Bad request                                                                                                  |