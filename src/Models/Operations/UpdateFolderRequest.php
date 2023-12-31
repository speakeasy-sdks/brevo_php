<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class UpdateFolderRequest
{
    /**
     * Name of the folder
     * 
     * @var \test\BREVO\Models\Shared\CreateUpdateFolder $createUpdateFolder
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \test\BREVO\Models\Shared\CreateUpdateFolder $createUpdateFolder;
    
    /**
     * Id of the folder
     * 
     * @var int $folderId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=folderId')]
    public int $folderId;
    
	public function __construct()
	{
		$this->createUpdateFolder = new \test\BREVO\Models\Shared\CreateUpdateFolder();
		$this->folderId = 0;
	}
}
