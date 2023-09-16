# GetResellerChildsResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `errorModel`                                                                                                 | [?\test\BREVO\Models\Shared\ErrorModel](../../models/shared/ErrorModel.md)                                   | :heavy_minus_sign:                                                                                           | Current account is not a reseller                                                                            |
| `getChildrenList`                                                                                            | [?\test\BREVO\Models\Shared\GetChildrenList](../../models/shared/GetChildrenList.md)                         | :heavy_minus_sign:                                                                                           | list of children                                                                                             |