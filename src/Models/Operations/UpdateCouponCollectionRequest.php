<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class UpdateCouponCollectionRequest
{
    /**
     * Values to update the coupon collection
     * 
     * @var \test\BREVO\Models\Operations\UpdateCouponCollectionRequestBody $requestBody
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public UpdateCouponCollectionRequestBody $requestBody;
    
    /**
     * Id of the collection to update
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
	public function __construct()
	{
		$this->requestBody = new \test\BREVO\Models\Operations\UpdateCouponCollectionRequestBody();
		$this->id = "";
	}
}