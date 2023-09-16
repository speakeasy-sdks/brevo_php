<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


class PostCrmDealsResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Created new Deal
     * 
     * @var ?\test\BREVO\Models\Operations\PostCrmDeals201ApplicationJSON $postCrmDeals201ApplicationJSONObject
     */
	
    public ?PostCrmDeals201ApplicationJSON $postCrmDeals201ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->postCrmDeals201ApplicationJSONObject = null;
	}
}