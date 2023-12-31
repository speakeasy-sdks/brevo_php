<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO;

class WhatsAppCampaigns 
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
     * Create and Send a WhatsApp campaign
     * 
     * @param \test\BREVO\Models\Shared\CreateWhatsAppCampaign $request
     * @return \test\BREVO\Models\Operations\CreateWhatsAppCampaignResponse
     */
	public function createWhatsAppCampaign(
        \test\BREVO\Models\Shared\CreateWhatsAppCampaign $request,
    ): \test\BREVO\Models\Operations\CreateWhatsAppCampaignResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/whatsappCampaigns');
        
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

        $statusCode = $httpResponse->getStatusCode();

        $response = new \test\BREVO\Models\Operations\CreateWhatsAppCampaignResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createModel = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\CreateModel', 'json');
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
     * Create a WhatsApp template
     * 
     * @param \test\BREVO\Models\Shared\CreateWhatsAppTemplate $request
     * @return \test\BREVO\Models\Operations\CreateWhatsAppTemplateResponse
     */
	public function createWhatsAppTemplate(
        \test\BREVO\Models\Shared\CreateWhatsAppTemplate $request,
    ): \test\BREVO\Models\Operations\CreateWhatsAppTemplateResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/whatsappCampaigns/template');
        
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

        $statusCode = $httpResponse->getStatusCode();

        $response = new \test\BREVO\Models\Operations\CreateWhatsAppTemplateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createModel = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\CreateModel', 'json');
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
     * Delete a WhatsApp campaign
     * 
     * @param \test\BREVO\Models\Operations\DeleteWhatsAppCampaignRequest $request
     * @return \test\BREVO\Models\Operations\DeleteWhatsAppCampaignResponse
     */
	public function deleteWhatsAppCampaign(
        ?\test\BREVO\Models\Operations\DeleteWhatsAppCampaignRequest $request,
    ): \test\BREVO\Models\Operations\DeleteWhatsAppCampaignResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/whatsappCampaigns/{campaignId}', \test\BREVO\Models\Operations\DeleteWhatsAppCampaignRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \test\BREVO\Models\Operations\DeleteWhatsAppCampaignResponse();
        $response->statusCode = $statusCode;
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
     * Get a WhatsApp campaign
     * 
     * @param \test\BREVO\Models\Operations\GetWhatsAppCampaignRequest $request
     * @return \test\BREVO\Models\Operations\GetWhatsAppCampaignResponse
     */
	public function getWhatsAppCampaign(
        ?\test\BREVO\Models\Operations\GetWhatsAppCampaignRequest $request,
    ): \test\BREVO\Models\Operations\GetWhatsAppCampaignResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/whatsappCampaigns/{campaignId}', \test\BREVO\Models\Operations\GetWhatsAppCampaignRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \test\BREVO\Models\Operations\GetWhatsAppCampaignResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWhatsappCampaignOverview = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\GetWhatsappCampaignOverview', 'json');
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
     * Return all your created WhatsApp campaigns
     * 
     * @param \test\BREVO\Models\Operations\GetWhatsAppCampaignsRequest $request
     * @return \test\BREVO\Models\Operations\GetWhatsAppCampaignsResponse
     */
	public function getWhatsAppCampaigns(
        ?\test\BREVO\Models\Operations\GetWhatsAppCampaignsRequest $request,
    ): \test\BREVO\Models\Operations\GetWhatsAppCampaignsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/whatsappCampaigns');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\test\BREVO\Models\Operations\GetWhatsAppCampaignsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \test\BREVO\Models\Operations\GetWhatsAppCampaignsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWhatsappCampaigns = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\GetWhatsappCampaigns', 'json');
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
     * Get your WhatsApp API account information
     * 
     * @return \test\BREVO\Models\Operations\GetWhatsAppConfigResponse
     */
	public function getWhatsAppConfig(
    ): \test\BREVO\Models\Operations\GetWhatsAppConfigResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/whatsappCampaigns/config');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \test\BREVO\Models\Operations\GetWhatsAppConfigResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWhatsAppConfig = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\GetWhatsAppConfig', 'json');
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
     * Return all your created WhatsApp templates
     * 
     * @param \test\BREVO\Models\Operations\GetWhatsAppTemplatesRequest $request
     * @return \test\BREVO\Models\Operations\GetWhatsAppTemplatesResponse
     */
	public function getWhatsAppTemplates(
        ?\test\BREVO\Models\Operations\GetWhatsAppTemplatesRequest $request,
    ): \test\BREVO\Models\Operations\GetWhatsAppTemplatesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/whatsappCampaigns/template-list');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\test\BREVO\Models\Operations\GetWhatsAppTemplatesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \test\BREVO\Models\Operations\GetWhatsAppTemplatesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getWhatsappTemplates = $serializer->deserialize((string)$httpResponse->getBody(), 'test\BREVO\Models\Shared\GetWhatsappTemplates', 'json');
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
     * Send your WhatsApp template for approval
     * 
     * @param \test\BREVO\Models\Operations\SendWhatsAppTemplateApprovalRequest $request
     * @return \test\BREVO\Models\Operations\SendWhatsAppTemplateApprovalResponse
     */
	public function sendWhatsAppTemplateApproval(
        ?\test\BREVO\Models\Operations\SendWhatsAppTemplateApprovalRequest $request,
    ): \test\BREVO\Models\Operations\SendWhatsAppTemplateApprovalResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/whatsappCampaigns/template/approval/{templateId}', \test\BREVO\Models\Operations\SendWhatsAppTemplateApprovalRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \test\BREVO\Models\Operations\SendWhatsAppTemplateApprovalResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
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
     * Update a WhatsApp campaign
     * 
     * @param \test\BREVO\Models\Operations\UpdateWhatsAppCampaignRequest $request
     * @return \test\BREVO\Models\Operations\UpdateWhatsAppCampaignResponse
     */
	public function updateWhatsAppCampaign(
        \test\BREVO\Models\Operations\UpdateWhatsAppCampaignRequest $request,
    ): \test\BREVO\Models\Operations\UpdateWhatsAppCampaignResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/whatsappCampaigns/{campaignId}', \test\BREVO\Models\Operations\UpdateWhatsAppCampaignRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "updateWhatsAppCampaign", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \test\BREVO\Models\Operations\UpdateWhatsAppCampaignResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
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