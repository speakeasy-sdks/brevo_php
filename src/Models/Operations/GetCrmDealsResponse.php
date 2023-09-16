<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


class GetCrmDealsResponse
{
	
    public string $contentType;
    
    /**
     * Returns deals list with filters
     * 
     * @var ?\test\BREVO\Models\Shared\DealsList $dealsList
     */
	
    public ?\test\BREVO\Models\Shared\DealsList $dealsList = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Returned when query params are invalid
     * 
     * @var ?\test\BREVO\Models\Shared\ErrorModel $errorModel
     */
	
    public ?\test\BREVO\Models\Shared\ErrorModel $errorModel = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->dealsList = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->errorModel = null;
	}
}