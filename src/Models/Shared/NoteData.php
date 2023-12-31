<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * NoteData - Note data to be saved
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class NoteData
{
    /**
     * Company Ids linked to a note
     * 
     * @var ?array<string> $companyIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('companyIds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $companyIds = null;
    
    /**
     * Contact Ids linked to a note
     * 
     * @var ?array<int> $contactIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('contactIds')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $contactIds = null;
    
    /**
     * Deal Ids linked to a note
     * 
     * @var ?array<string> $dealIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('dealIds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $dealIds = null;
    
    /**
     * Text content of a note
     * 
     * @var string $text
     */
	#[\JMS\Serializer\Annotation\SerializedName('text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $text;
    
	public function __construct()
	{
		$this->companyIds = null;
		$this->contactIds = null;
		$this->dealIds = null;
		$this->text = "";
	}
}
