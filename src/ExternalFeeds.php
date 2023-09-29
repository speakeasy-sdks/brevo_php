<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO;

class ExternalFeeds 
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
     * Create an external feed
     * 
     * This endpoint will create an external feed.
     * 
     * @param \test\BREVO\Models\Shared\CreateExternalFeed $request
     * @return \test\BREVO\Models\Operations\CreateExternalFeedResponse
     */
	public function createExternalFeed(
        \test\BREVO\Models\Shared\CreateExternalFeed $request,
    ): \test\BREVO\Models\Operations\CreateExternalFeedResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/feeds');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\CreateExternalFeedResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createExternalFeed201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Operations\CreateExternalFeed201ApplicationJSON', 'json');
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
     * Delete an external feed
     * 
     * This endpoint will delete an external feed.
     * 
     * @param \test\BREVO\Models\Operations\DeleteExternalFeedRequest $request
     * @return \test\BREVO\Models\Operations\DeleteExternalFeedResponse
     */
	public function deleteExternalFeed(
        ?\test\BREVO\Models\Operations\DeleteExternalFeedRequest $request,
    ): \test\BREVO\Models\Operations\DeleteExternalFeedResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/feeds/{uuid}', \test\BREVO\Models\Operations\DeleteExternalFeedRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\DeleteExternalFeedResponse();
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
     * Fetch all external feeds
     * 
     * This endpoint can fetch all created external feeds.
     * 
     * @param \test\BREVO\Models\Operations\GetAllExternalFeedsRequest $request
     * @return \test\BREVO\Models\Operations\GetAllExternalFeedsResponse
     */
	public function getAllExternalFeeds(
        ?\test\BREVO\Models\Operations\GetAllExternalFeedsRequest $request,
    ): \test\BREVO\Models\Operations\GetAllExternalFeedsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/feeds');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\test\BREVO\Models\Operations\GetAllExternalFeedsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\GetAllExternalFeedsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getAllExternalFeeds = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\GetAllExternalFeeds', 'json');
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
     * Get an external feed by UUID
     * 
     * This endpoint will update an external feed.
     * 
     * @param \test\BREVO\Models\Operations\GetExternalFeedByUUIDRequest $request
     * @return \test\BREVO\Models\Operations\GetExternalFeedByUUIDResponse
     */
	public function getExternalFeedByUUID(
        ?\test\BREVO\Models\Operations\GetExternalFeedByUUIDRequest $request,
    ): \test\BREVO\Models\Operations\GetExternalFeedByUUIDResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/feeds/{uuid}', \test\BREVO\Models\Operations\GetExternalFeedByUUIDRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\GetExternalFeedByUUIDResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getExternalFeedByUUID = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\GetExternalFeedByUUID', 'json');
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
     * Update an external feed
     * 
     * This endpoint will update an external feed.
     * 
     * @param \test\BREVO\Models\Operations\UpdateExternalFeedRequest $request
     * @return \test\BREVO\Models\Operations\UpdateExternalFeedResponse
     */
	public function updateExternalFeed(
        \test\BREVO\Models\Operations\UpdateExternalFeedRequest $request,
    ): \test\BREVO\Models\Operations\UpdateExternalFeedResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/feeds/{uuid}', \test\BREVO\Models\Operations\UpdateExternalFeedRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "updateExternalFeed", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\UpdateExternalFeedResponse();
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