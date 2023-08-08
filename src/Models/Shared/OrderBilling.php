<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * OrderBilling - Billing details of an order.
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class OrderBilling
{
    /**
     * Full billing address.
     * 
     * @var ?string $address
     */
	#[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $address = null;
    
    /**
     * Exact city of the address.
     * 
     * @var ?string $city
     */
	#[\JMS\Serializer\Annotation\SerializedName('city')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $city = null;
    
    /**
     * Billing country 2-letter ISO code.
     * 
     * @var ?string $countryCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('countryCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $countryCode = null;
    
    /**
     * How the visitor will pay for the item(s), e.g. paypal, check, etc.
     * 
     * @var ?string $paymentMethod
     */
	#[\JMS\Serializer\Annotation\SerializedName('paymentMethod')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $paymentMethod = null;
    
    /**
     * Phone number to contact for further details about the order, Mandatory if "email" field is not passed.
     * 
     * @var ?string $phone
     */
	#[\JMS\Serializer\Annotation\SerializedName('phone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $phone = null;
    
    /**
     * Postcode for delivery and billing.
     * 
     * @var ?string $postCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('postCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $postCode = null;
    
    /**
     * Exact region (state/province) for delivery and billing.
     * 
     * @var ?string $region
     */
	#[\JMS\Serializer\Annotation\SerializedName('region')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $region = null;
    
	public function __construct()
	{
		$this->address = null;
		$this->city = null;
		$this->countryCode = null;
		$this->paymentMethod = null;
		$this->phone = null;
		$this->postCode = null;
		$this->region = null;
	}
}
