<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetCouponCollectionsRequest
{
    /**
     * Number of documents returned per page
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    /**
     * Index of the first document on the page
     * 
     * @var ?int $offset
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;
    
    /**
     * Sort the results by creation time in ascending/descending order
     * 
     * @var ?\test\BREVO\Models\Operations\GetCouponCollectionsQueryParamSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetCouponCollectionsQueryParamSort $sort = null;
    
	public function __construct()
	{
		$this->limit = null;
		$this->offset = null;
		$this->sort = null;
	}
}
