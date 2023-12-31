<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class CreateWhatsAppTemplate
{
    /**
     * Body of the template. **Maximum allowed characters are 1024**
     * 
     * @var string $bodyText
     */
	#[\JMS\Serializer\Annotation\SerializedName('bodyText')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $bodyText;
    
    /**
     * Category of the template
     * 
     * @var \test\BREVO\Models\Shared\Category $category
     */
	#[\JMS\Serializer\Annotation\SerializedName('category')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\Category>')]
    public Category $category;
    
    /**
     * Text content of the header in the template. **Maximum allowed characters are 45**
     * 
     * **Use this field to add text content in template header and if mediaUrl is empty**
     * 
     * 
     * @var ?string $headerText
     */
	#[\JMS\Serializer\Annotation\SerializedName('headerText')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $headerText = null;
    
    /**
     * Language of the template. For Example :
     * 
     * **en** for English
     * 
     * 
     * @var string $language
     */
	#[\JMS\Serializer\Annotation\SerializedName('language')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $language;
    
    /**
     * Absolute url of the media file **(no local file)** for the header. **Use this field in you want to add media in Template header and headerText is empty**.
     * 
     * Allowed extensions for media files are:
     * #### jpeg | png | mp4 | pdf
     * 
     * 
     * @var ?string $mediaUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('mediaUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $mediaUrl = null;
    
    /**
     * Name of the template
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	public function __construct()
	{
		$this->bodyText = "";
		$this->category = \test\BREVO\Models\Shared\Category::Marketing;
		$this->headerText = null;
		$this->language = "";
		$this->mediaUrl = null;
		$this->name = "";
	}
}
