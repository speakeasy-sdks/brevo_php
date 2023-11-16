<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/**
 * CreateCouponCollectionResponseBody - Coupon collection created
 * 
 * @package test\BREVO\Models\Operations
 * @access public
 */
class CreateCouponCollectionResponseBody
{
    /**
     * The id of the created collection
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
	public function __construct()
	{
		$this->id = "";
	}
}
