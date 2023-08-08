<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


class UpdateCouponCollectionResponse
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
     * Coupon collection updated
     * 
     * @var ?\test\BREVO\Models\Operations\UpdateCouponCollection200ApplicationJSON $updateCouponCollection200ApplicationJSONObject
     */
	
    public ?UpdateCouponCollection200ApplicationJSON $updateCouponCollection200ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->errorModel = null;
		$this->updateCouponCollection200ApplicationJSONObject = null;
	}
}
