<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class DeleteScheduledEmailByIdRequest
{
    /**
     * The `batchId` of scheduled emails batch (Should be a valid UUIDv4) or the `messageId` of scheduled email.
     * 
     * @var string $identifier
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=identifier')]
    public string $identifier;
    
	public function __construct()
	{
		$this->identifier = "";
	}
}
