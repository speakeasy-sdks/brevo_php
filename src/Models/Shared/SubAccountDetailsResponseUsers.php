<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * SubAccountDetailsResponseUsers - Multi-account details
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class SubAccountDetailsResponseUsers
{
    /**
     * Quantity of multi-account's provided
     * 
     * @var ?int $quantity
     */
	#[\JMS\Serializer\Annotation\SerializedName('quantity')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $quantity = null;
    
    /**
     * Available multi-accounts for use
     * 
     * @var ?int $remaining
     */
	#[\JMS\Serializer\Annotation\SerializedName('remaining')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $remaining = null;
    
	public function __construct()
	{
		$this->quantity = null;
		$this->remaining = null;
	}
}
