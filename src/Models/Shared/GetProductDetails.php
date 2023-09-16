<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetProductDetails
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
     * Creation UTC date-time of the product (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
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
     * product deleted from the shop's database
     * 
     * @var ?bool $isDeleted
     */
	#[\JMS\Serializer\Annotation\SerializedName('isDeleted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isDeleted = null;
    
    /**
     * Meta data of product such as description, vendor, producer, stock level, etc.
     * 
     * @var ?\test\BREVO\Models\Shared\GetProductDetailsMetaInfo $metaInfo
     */
	#[\JMS\Serializer\Annotation\SerializedName('metaInfo')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\GetProductDetailsMetaInfo')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetProductDetailsMetaInfo $metaInfo = null;
    
    /**
     * Last modification UTC date-time of the product (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $modifiedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('modifiedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $modifiedAt;
    
    /**
     * Name of the product for which you requested the details
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
     * S3 url of original image
     * 
     * @var ?string $s3Original
     */
	#[\JMS\Serializer\Annotation\SerializedName('s3Original')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $s3Original = null;
    
    /**
     * S3 thumbnail url of original image in 120x120 dimension for analytics section
     * 
     * @var string $s3ThumbAnalytics
     */
	#[\JMS\Serializer\Annotation\SerializedName('s3ThumbAnalytics')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $s3ThumbAnalytics;
    
    /**
     * S3 thumbnail url of original image in 600x400 dimension for editor section
     * 
     * @var string $s3ThumbEditor
     */
	#[\JMS\Serializer\Annotation\SerializedName('s3ThumbEditor')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $s3ThumbEditor;
    
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
		$this->createdAt = "";
		$this->id = "";
		$this->imageUrl = null;
		$this->isDeleted = null;
		$this->metaInfo = null;
		$this->modifiedAt = "";
		$this->name = "";
		$this->parentId = null;
		$this->price = null;
		$this->s3Original = null;
		$this->s3ThumbAnalytics = "";
		$this->s3ThumbEditor = "";
		$this->sku = null;
		$this->url = null;
	}
}
