<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class CreateUpdateProducts
{
    /**
     * Category ID-s of the product
     * 
     * @var ?array<string> $categories
     */
	#[\JMS\Serializer\Annotation\SerializedName('categories')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $categories = null;
    
    /**
     * UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) of the product deleted from the shop's database
     * 
     * @var ?string $deletedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('deletedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $deletedAt = null;
    
    /**
     * Product ID for which you requested the details
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * Absolute URL to the cover image of the product
     * 
     * @var ?string $imageUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('imageUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $imageUrl = null;
    
    /**
     * Meta data of product such as description, vendor, producer, stock level. The size of cumulative metaInfo shall not exceed **1000 KB**. Maximum length of metaInfo object can be 10.
     * 
     * @var ?array<string, mixed> $metaInfo
     */
	#[\JMS\Serializer\Annotation\SerializedName('metaInfo')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metaInfo = null;
    
    /**
     * Mandatory in case of creation**. Name of the product for which you requested the details
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * Parent product id of the product
     * 
     * @var ?string $parentId
     */
	#[\JMS\Serializer\Annotation\SerializedName('parentId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentId = null;
    
    /**
     * Price of the product
     * 
     * @var ?float $price
     */
	#[\JMS\Serializer\Annotation\SerializedName('price')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $price = null;
    
    /**
     * Product identifier from the shop
     * 
     * @var ?string $sku
     */
	#[\JMS\Serializer\Annotation\SerializedName('sku')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $sku = null;
    
    /**
     * URL to the product
     * 
     * @var ?string $url
     */
	#[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $url = null;
    
	public function __construct()
	{
		$this->categories = null;
		$this->deletedAt = null;
		$this->id = "";
		$this->imageUrl = null;
		$this->metaInfo = null;
		$this->name = "";
		$this->parentId = null;
		$this->price = null;
		$this->sku = null;
		$this->url = null;
	}
}