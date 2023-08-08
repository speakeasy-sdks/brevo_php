<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class PostCrmFilesRequestBody
{
	#[SpeakeasyMetadata('multipartForm:name=companyId')]
    public ?string $companyId = null;
    
	#[SpeakeasyMetadata('multipartForm:name=contactId')]
    public ?int $contactId = null;
    
	#[SpeakeasyMetadata('multipartForm:name=dealId')]
    public ?string $dealId = null;
    
    /**
     * File data to create a file.
     * 
     * @var \test\BREVO\Models\Operations\PostCrmFilesRequestBodyFile $file
     */
	#[SpeakeasyMetadata('multipartForm:file=true')]
    public PostCrmFilesRequestBodyFile $file;
    
	public function __construct()
	{
		$this->companyId = null;
		$this->contactId = null;
		$this->dealId = null;
		$this->file = new \test\BREVO\Models\Operations\PostCrmFilesRequestBodyFile();
	}
}
