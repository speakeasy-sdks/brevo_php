<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetWhatsappTemplatesTemplates
{
    /**
     * category of the template
     * 
     * @var string $category
     */
	#[\JMS\Serializer\Annotation\SerializedName('category')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $category;
    
    /**
     * Creation UTC date-time of the WhatsApp template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
    /**
     * Error reason in the template creation
     * 
     * @var ?string $errorReason
     */
	#[\JMS\Serializer\Annotation\SerializedName('errorReason')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $errorReason = null;
    
    /**
     * ID of the WhatsApp template
     * 
     * @var int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
    /**
     * Language in which template exists
     * 
     * @var string $language
     */
	#[\JMS\Serializer\Annotation\SerializedName('language')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $language;
    
    /**
     * UTC date-time of last modification of the WhatsApp template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $modifiedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('modifiedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $modifiedAt;
    
    /**
     * Name of the WhatsApp template
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * Status of the WhatsApp template
     * 
     * @var string $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $status;
    
	public function __construct()
	{
		$this->category = "";
		$this->createdAt = "";
		$this->errorReason = null;
		$this->id = 0;
		$this->language = "";
		$this->modifiedAt = "";
		$this->name = "";
		$this->status = "";
	}
}
