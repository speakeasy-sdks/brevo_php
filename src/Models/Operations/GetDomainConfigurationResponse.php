<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


class GetDomainConfigurationResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * bad request
     * 
     * @var ?\test\BREVO\Models\Shared\ErrorModel $errorModel
     */
	
    public ?\test\BREVO\Models\Shared\ErrorModel $errorModel = null;
    
    /**
     * domain configuration
     * 
     * @var ?\test\BREVO\Models\Shared\GetDomainConfigurationModel $getDomainConfigurationModel
     */
	
    public ?\test\BREVO\Models\Shared\GetDomainConfigurationModel $getDomainConfigurationModel = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->errorModel = null;
		$this->getDomainConfigurationModel = null;
	}
}
