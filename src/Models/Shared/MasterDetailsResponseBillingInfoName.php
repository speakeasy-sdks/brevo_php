<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * MasterDetailsResponseBillingInfoName - Billing name of master account holder
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class MasterDetailsResponseBillingInfoName
{
    /**
     * Last name for billing
     * 
     * @var ?string $familyName
     */
	#[\JMS\Serializer\Annotation\SerializedName('familyName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $familyName = null;
    
    /**
     * First name for billing
     * 
     * @var ?string $givenName
     */
	#[\JMS\Serializer\Annotation\SerializedName('givenName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $givenName = null;
    
	public function __construct()
	{
		$this->familyName = null;
		$this->givenName = null;
	}
}