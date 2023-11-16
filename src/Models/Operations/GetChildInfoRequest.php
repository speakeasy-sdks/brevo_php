<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetChildInfoRequest
{
    /**
     * Either auth key or id of reseller's child
     * 
     * @var string $childIdentifier
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=childIdentifier')]
    public string $childIdentifier;
    
	public function __construct()
	{
		$this->childIdentifier = "";
	}
}
