<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * GetCategoryDetails - Category informations
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class GetCategoryDetails
{
    /**
     * Creation UTC date-time of the category (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
    /**
     * Category ID for which you requested the details
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * category deleted from the shop's database
     * 
     * @var ?bool $isDeleted
     */
	#[\JMS\Serializer\Annotation\SerializedName('isDeleted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isDeleted = null;
    
    /**
     * Last modification UTC date-time of the category (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $modifiedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('modifiedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $modifiedAt;
    
    /**
     * Name of the category for which you requested the details
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * URL to the category
     * 
     * @var ?string $url
     */
	#[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $url = null;
    
	public function __construct()
	{
		$this->createdAt = "";
		$this->id = "";
		$this->isDeleted = null;
		$this->modifiedAt = "";
		$this->name = "";
		$this->url = null;
	}
}
