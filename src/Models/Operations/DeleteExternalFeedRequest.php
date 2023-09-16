<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class DeleteExternalFeedRequest
{
    /**
     * UUID of the feed to delete
     * 
     * @var string $uuid
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=uuid')]
    public string $uuid;
    
	public function __construct()
	{
		$this->uuid = "";
	}
}