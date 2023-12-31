<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetProcessesRequest
{
    /**
     * Number limitation for the result returned
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    /**
     * Beginning point in the list to retrieve from.
     * 
     * @var ?int $offset
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;
    
    /**
     * Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     * 
     * @var ?\test\BREVO\Models\Operations\GetProcessesQueryParamSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetProcessesQueryParamSort $sort = null;
    
	public function __construct()
	{
		$this->limit = null;
		$this->offset = null;
		$this->sort = null;
	}
}
