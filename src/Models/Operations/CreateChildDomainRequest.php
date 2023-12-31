<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class CreateChildDomainRequest
{
    /**
     * Sender domain to add for a specific child account. This will not be displayed to the parent account.
     * 
     * @var \test\BREVO\Models\Shared\AddChildDomain $addChildDomain
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \test\BREVO\Models\Shared\AddChildDomain $addChildDomain;
    
    /**
     * Either auth key or id of reseller's child
     * 
     * @var string $childIdentifier
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=childIdentifier')]
    public string $childIdentifier;
    
	public function __construct()
	{
		$this->addChildDomain = new \test\BREVO\Models\Shared\AddChildDomain();
		$this->childIdentifier = "";
	}
}
