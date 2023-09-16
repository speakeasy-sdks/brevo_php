# GetAbTestCampaignResultResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `abTestCampaignResult`                                                                                       | [?\test\BREVO\Models\Shared\AbTestCampaignResult](../../models/shared/AbTestCampaignResult.md)               | :heavy_minus_sign:                                                                                           | A/B test email campaign Result                                                                               |
| `errorModel`                                                                                                 | [?\test\BREVO\Models\Shared\ErrorModel](../../models/shared/ErrorModel.md)                                   | :heavy_minus_sign:                                                                                           | bad request                                                                                                  |