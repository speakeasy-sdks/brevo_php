<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * BillingInfo - Billing details of the master account organization
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class BillingInfo
{
    /**
     * Billing address of master account
     * 
     * @var ?\test\BREVO\Models\Shared\MasterDetailsResponseAddress $address
     */
	#[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\MasterDetailsResponseAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?MasterDetailsResponseAddress $address = null;
    
    /**
     * Company name of master account
     * 
     * @var ?string $companyName
     */
	#[\JMS\Serializer\Annotation\SerializedName('companyName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyName = null;
    
    /**
     * Billing email id of master account
     * 
     * @var ?string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
    /**
     * Billing name of master account holder
     * 
     * @var ?\test\BREVO\Models\Shared\Name $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\Name')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Name $name = null;
    
	public function __construct()
	{
		$this->address = null;
		$this->companyName = null;
		$this->email = null;
		$this->name = null;
	}
}