<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * CompanyAttributes - List of attributes
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class CompanyAttributes
{
    /**
     * $attributeOptions
     * 
     * @var ?array<\test\BREVO\Models\Shared\AttributeOptions> $attributeOptions
     */
	#[\JMS\Serializer\Annotation\SerializedName('attributeOptions')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\AttributeOptions>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $attributeOptions = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('attributeTypeName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $attributeTypeName = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('internalName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $internalName = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('isRequired')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isRequired = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $label = null;
    
	public function __construct()
	{
		$this->attributeOptions = null;
		$this->attributeTypeName = null;
		$this->internalName = null;
		$this->isRequired = null;
		$this->label = null;
	}
}
