<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class PutCorporateSubAccountIdApplicationsToggleRequest
{
    /**
     * Id of the sub-account organization (mandatory)
     * 
     * @var int $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public int $id;
    
    /**
     * List of applications to activate or deactivate on a sub-account
     * 
     * @var \test\BREVO\Models\Shared\SubAccountAppsToggleRequest $subAccountAppsToggleRequest
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \test\BREVO\Models\Shared\SubAccountAppsToggleRequest $subAccountAppsToggleRequest;
    
	public function __construct()
	{
		$this->id = 0;
		$this->subAccountAppsToggleRequest = new \test\BREVO\Models\Shared\SubAccountAppsToggleRequest();
	}
}
