<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetWebhooksRequest
{
    /**
     * Sort the results in the ascending/descending order of webhook creation
     * 
     * @var ?\test\BREVO\Models\Operations\GetWebhooksQueryParamSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetWebhooksQueryParamSort $sort = null;
    
    /**
     * Filter on webhook type
     * 
     * @var ?\test\BREVO\Models\Operations\QueryParamType $type
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=type')]
    public ?QueryParamType $type = null;
    
	public function __construct()
	{
		$this->sort = null;
		$this->type = null;
	}
}
