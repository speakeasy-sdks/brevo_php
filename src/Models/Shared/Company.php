<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * Company - Company Details
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class Company
{
    /**
     * Company attributes with values
     * 
     * @var ?\test\BREVO\Models\Shared\CompanyAttributes $attributes
     */
	#[\JMS\Serializer\Annotation\SerializedName('attributes')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\CompanyAttributes')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CompanyAttributes $attributes = null;
    
    /**
     * Unique comoany id
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * Contact ids for contacts linked to this company
     * 
     * @var ?array<int> $linkedContactsIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('linkedContactsIds')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $linkedContactsIds = null;
    
    /**
     * Deals ids for companies linked to this company
     * 
     * @var ?array<string> $linkedDealsIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('linkedDealsIds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $linkedDealsIds = null;
    
	public function __construct()
	{
		$this->attributes = null;
		$this->id = null;
		$this->linkedContactsIds = null;
		$this->linkedDealsIds = null;
	}
}
