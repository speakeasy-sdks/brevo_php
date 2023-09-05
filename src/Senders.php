<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO;

class Senders 
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
     * Create a new sender
     * 
     * @param \test\BREVO\Models\Shared\CreateSender $request
     * @return \test\BREVO\Models\Operations\CreateSenderResponse
     */
	public function createSender(
        ?\test\BREVO\Models\Shared\CreateSender $request,
    ): \test\BREVO\Models\Operations\CreateSenderResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/senders');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\CreateSenderResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createSenderModel = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\CreateSenderModel', 'json');
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
	
    /**
     * Delete a sender
     * 
     * @param \test\BREVO\Models\Operations\DeleteSenderRequest $request
     * @return \test\BREVO\Models\Operations\DeleteSenderResponse
     */
	public function deleteSender(
        ?\test\BREVO\Models\Operations\DeleteSenderRequest $request,
    ): \test\BREVO\Models\Operations\DeleteSenderResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/senders/{senderId}', \test\BREVO\Models\Operations\DeleteSenderRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\DeleteSenderResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorModel = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\ErrorModel', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get all the dedicated IPs for your account
     * 
     * @return \test\BREVO\Models\Operations\GetIpsResponse
     */
	public function getIps(
    ): \test\BREVO\Models\Operations\GetIpsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/senders/ips');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\GetIpsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getIps = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\GetIps', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get all the dedicated IPs for a sender
     * 
     * @param \test\BREVO\Models\Operations\GetIpsFromSenderRequest $request
     * @return \test\BREVO\Models\Operations\GetIpsFromSenderResponse
     */
	public function getIpsFromSender(
        ?\test\BREVO\Models\Operations\GetIpsFromSenderRequest $request,
    ): \test\BREVO\Models\Operations\GetIpsFromSenderResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/senders/{senderId}/ips', \test\BREVO\Models\Operations\GetIpsFromSenderRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\GetIpsFromSenderResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getIpsFromSender = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\GetIpsFromSender', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorModel = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\ErrorModel', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get the list of all your senders
     * 
     * @param \test\BREVO\Models\Operations\GetSendersRequest $request
     * @return \test\BREVO\Models\Operations\GetSendersResponse
     */
	public function getSenders(
        ?\test\BREVO\Models\Operations\GetSendersRequest $request,
    ): \test\BREVO\Models\Operations\GetSendersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/senders');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\test\BREVO\Models\Operations\GetSendersRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\GetSendersResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getSendersList = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\GetSendersList', 'json');
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
	
    /**
     * Update a sender
     * 
     * @param \test\BREVO\Models\Operations\UpdateSenderRequest $request
     * @return \test\BREVO\Models\Operations\UpdateSenderResponse
     */
	public function updateSender(
        ?\test\BREVO\Models\Operations\UpdateSenderRequest $request,
    ): \test\BREVO\Models\Operations\UpdateSenderResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/senders/{senderId}', \test\BREVO\Models\Operations\UpdateSenderRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "updateSender", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\UpdateSenderResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorModel = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\ErrorModel', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Validate Sender using OTP
     * 
     * @param \test\BREVO\Models\Operations\ValidateSenderByOTPRequest $request
     * @return \test\BREVO\Models\Operations\ValidateSenderByOTPResponse
     */
	public function validateSenderByOTP(
        ?\test\BREVO\Models\Operations\ValidateSenderByOTPRequest $request,
    ): \test\BREVO\Models\Operations\ValidateSenderByOTPResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/senders/{senderId}/validate', \test\BREVO\Models\Operations\ValidateSenderByOTPRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "otp", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\ValidateSenderByOTPResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorModel = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\ErrorModel', 'json');
            }
        }

        return $response;
    }
}