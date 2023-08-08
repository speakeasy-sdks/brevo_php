<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/**
 * UpdateCouponCollection200ApplicationJSON - Coupon collection updated
 * 
 * @package test\BREVO\Models\Operations
 * @access public
 */
class UpdateCouponCollection200ApplicationJSON
{
    /**
     * The default coupon of the collection
     * 
     * @var string $defaultCoupon
     */
	#[\JMS\Serializer\Annotation\SerializedName('defaultCoupon')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $defaultCoupon;
    
    /**
     * The id of the collection
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * The name of the collection
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	public function __construct()
	{
		$this->defaultCoupon = "";
		$this->id = "";
		$this->name = "";
	}
}
