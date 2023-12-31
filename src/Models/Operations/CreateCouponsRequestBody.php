<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/**
 * CreateCouponsRequestBody - Values to create coupons
 * 
 * @package test\BREVO\Models\Operations
 * @access public
 */
class CreateCouponsRequestBody
{
    /**
     * The id of the coupon collection for which the coupons will be created
     * 
     * @var string $collectionId
     */
	#[\JMS\Serializer\Annotation\SerializedName('collectionId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $collectionId;
    
    /**
     * $coupons
     * 
     * @var array<string> $coupons
     */
	#[\JMS\Serializer\Annotation\SerializedName('coupons')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $coupons;
    
	public function __construct()
	{
		$this->collectionId = "";
		$this->coupons = [];
	}
}
