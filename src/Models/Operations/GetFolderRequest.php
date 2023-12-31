<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetFolderRequest
{
    /**
     * id of the folder
     * 
     * @var int $folderId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=folderId')]
    public int $folderId;
    
	public function __construct()
	{
		$this->folderId = 0;
	}
}
