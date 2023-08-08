<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * ConversationsMessageFileImageInfo - image info is passed in case the file is an image
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class ConversationsMessageFileImageInfo
{
    /**
     * height of the image
     * 
     * @var ?int $height
     */
	#[\JMS\Serializer\Annotation\SerializedName('height')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $height = null;
    
    /**
     * URL of the preview
     * 
     * @var ?string $previewUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('previewUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $previewUrl = null;
    
    /**
     * Width of the image
     * 
     * @var ?int $width
     */
	#[\JMS\Serializer\Annotation\SerializedName('width')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $width = null;
    
	public function __construct()
	{
		$this->height = null;
		$this->previewUrl = null;
		$this->width = null;
	}
}
