# GetCrmAttributesDealsResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | HTTP response content type for this operation                                                                |
| `dealAttributes`                                                                                             | array<[\test\BREVO\Models\Shared\DealAttributes](../../Models/Shared/DealAttributes.md)>                     | :heavy_minus_sign:                                                                                           | Returns list of deal attributes                                                                              |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | HTTP response status code for this operation                                                                 |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | Raw HTTP response; suitable for custom response parsing                                                      |