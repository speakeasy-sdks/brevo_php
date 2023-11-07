<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO;

class Account 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Get your account information, plan and credits details
     * 
     * @return \test\BREVO\Models\Operations\GetAccountResponse
     */
	public function getAccount(
    ): \test\BREVO\Models\Operations\GetAccountResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/account');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \test\BREVO\Models\Operations\GetAccountResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getAccount = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\GetAccount', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get user activity logs
     * 
     * @param \test\BREVO\Models\Operations\GetAccountActivityRequest $request
     * @return \test\BREVO\Models\Operations\GetAccountActivityResponse
     */
	public function getAccountActivity(
        ?\test\BREVO\Models\Operations\GetAccountActivityRequest $request,
    ): \test\BREVO\Models\Operations\GetAccountActivityResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/activities');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\test\BREVO\Models\Operations\GetAccountActivityRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \test\BREVO\Models\Operations\GetAccountActivityResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getAccountActivity = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\GetAccountActivity', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorModel = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\ErrorModel', 'json');
            }
        }

        return $response;
    }
}