<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetSendersRequest
{
    /**
     * Filter your senders for a specific domain
     * 
     * @var ?string $domain
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=domain')]
    public ?string $domain = null;
    
    /**
     * Filter your senders for a specific ip. **Available for dedicated IP usage only**
     * 
     * 
     * 
     * @var ?string $ip
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=ip')]
    public ?string $ip = null;
    
	public function __construct()
	{
		$this->domain = null;
		$this->ip = null;
	}
}
