<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/**
 * PatchCompaniesIdRequestBody - Updated company details.
 * 
 * @package test\BREVO\Models\Operations
 * @access public
 */
class PatchCompaniesIdRequestBody
{
    /**
     * Attributes for company update
     * 
     * @var ?\test\BREVO\Models\Operations\PatchCompaniesIdRequestBodyAttributes $attributes
     */
	#[\JMS\Serializer\Annotation\SerializedName('attributes')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Operations\PatchCompaniesIdRequestBodyAttributes')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PatchCompaniesIdRequestBodyAttributes $attributes = null;
    
    /**
     * Country code if phone_number is passed in attributes.
     * 
     * @var ?int $countryCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('countryCode')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $countryCode = null;
    
    /**
     * Name of company
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	public function __construct()
	{
		$this->attributes = null;
		$this->countryCode = null;
		$this->name = null;
	}
}
