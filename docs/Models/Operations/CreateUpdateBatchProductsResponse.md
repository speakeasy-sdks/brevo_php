# CreateUpdateBatchProductsResponse


## Fields

| Field                                                                                                              | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                      | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | HTTP response content type for this operation                                                                      |
| `statusCode`                                                                                                       | *int*                                                                                                              | :heavy_check_mark:                                                                                                 | HTTP response status code for this operation                                                                       |
| `rawResponse`                                                                                                      | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)       | :heavy_minus_sign:                                                                                                 | Raw HTTP response; suitable for custom response parsing                                                            |
| `createUpdateBatchProductsModel`                                                                                   | [?\test\BREVO\Models\Shared\CreateUpdateBatchProductsModel](../../Models/Shared/CreateUpdateBatchProductsModel.md) | :heavy_minus_sign:                                                                                                 | Products created and updated                                                                                       |
| `errorModel`                                                                                                       | [?\test\BREVO\Models\Shared\ErrorModel](../../Models/Shared/ErrorModel.md)                                         | :heavy_minus_sign:                                                                                                 | bad request                                                                                                        |