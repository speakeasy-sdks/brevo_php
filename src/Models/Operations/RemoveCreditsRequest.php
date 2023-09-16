<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class RemoveCreditsRequest
{
    /**
     * Either auth key or id of reseller's child
     * 
     * @var string $childIdentifier
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=childIdentifier')]
    public string $childIdentifier;
    
    /**
     * Values to post to remove email or SMS credits from a specific child account
     * 
     * @var \test\BREVO\Models\Shared\RemoveCredits $removeCredits
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \test\BREVO\Models\Shared\RemoveCredits $removeCredits;
    
	public function __construct()
	{
		$this->childIdentifier = "";
		$this->removeCredits = new \test\BREVO\Models\Shared\RemoveCredits();
	}
}