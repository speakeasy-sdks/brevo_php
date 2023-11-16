<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * FileDownloadableLink - Downloadable file link
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class FileDownloadableLink
{
    /**
     * A unique link to download the requested file.
     * 
     * @var ?string $fileUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('fileUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $fileUrl = null;
    
	public function __construct()
	{
		$this->fileUrl = null;
	}
}
