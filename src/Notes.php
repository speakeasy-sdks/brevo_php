<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO;

class Notes 
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
     * Delete a note
     * 
     * @param \test\BREVO\Models\Operations\DeleteCrmNotesIdRequest $request
     * @return \test\BREVO\Models\Operations\DeleteCrmNotesIdResponse
     */
	public function deleteCrmNotesId(
        ?\test\BREVO\Models\Operations\DeleteCrmNotesIdRequest $request,
    ): \test\BREVO\Models\Operations\DeleteCrmNotesIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/notes/{id}', \test\BREVO\Models\Operations\DeleteCrmNotesIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\DeleteCrmNotesIdResponse();
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
     * Get all notes
     * 
     * @param \test\BREVO\Models\Operations\GetCrmNotesRequest $request
     * @return \test\BREVO\Models\Operations\GetCrmNotesResponse
     */
	public function getCrmNotes(
        ?\test\BREVO\Models\Operations\GetCrmNotesRequest $request,
    ): \test\BREVO\Models\Operations\GetCrmNotesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/notes');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\test\BREVO\Models\Operations\GetCrmNotesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\GetCrmNotesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->noteList = $serializer->deserialize((string)$httpResponse->getBody(), 'array<test\BREVO\Models\Shared\Note>', 'json');
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
     * Get a note
     * 
     * @param \test\BREVO\Models\Operations\GetCrmNotesIdRequest $request
     * @return \test\BREVO\Models\Operations\GetCrmNotesIdResponse
     */
	public function getCrmNotesId(
        ?\test\BREVO\Models\Operations\GetCrmNotesIdRequest $request,
    ): \test\BREVO\Models\Operations\GetCrmNotesIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/notes/{id}', \test\BREVO\Models\Operations\GetCrmNotesIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\GetCrmNotesIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->note = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\Note', 'json');
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
     * Update a note
     * 
     * @param \test\BREVO\Models\Operations\PatchCrmNotesIdRequest $request
     * @return \test\BREVO\Models\Operations\PatchCrmNotesIdResponse
     */
	public function patchCrmNotesId(
        \test\BREVO\Models\Operations\PatchCrmNotesIdRequest $request,
    ): \test\BREVO\Models\Operations\PatchCrmNotesIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/notes/{id}', \test\BREVO\Models\Operations\PatchCrmNotesIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "noteData", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\PatchCrmNotesIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 415) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorModel = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\ErrorModel', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a note
     * 
     * @param \test\BREVO\Models\Shared\NoteData $request
     * @return \test\BREVO\Models\Operations\PostCrmNotesResponse
     */
	public function postCrmNotes(
        \test\BREVO\Models\Shared\NoteData $request,
    ): \test\BREVO\Models\Operations\PostCrmNotesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/notes');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test\BREVO\Models\Operations\PostCrmNotesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->noteId = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\NoteId', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 415) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorModel = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\ErrorModel', 'json');
            }
        }

        return $response;
    }
}