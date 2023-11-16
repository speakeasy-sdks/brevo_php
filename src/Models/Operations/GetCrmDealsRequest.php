<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetCrmDealsRequest
{
    /**
     * Filter by attributes. If you have filter for owner on your side please send it as `filters[attributes.deal_owner]`.
     * 
     * @var ?string $filtersAttributesDealName
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filters[attributes.deal_name]')]
    public ?string $filtersAttributesDealName = null;
    
    /**
     * Filter by linked companies ids
     * 
     * @var ?string $filtersLinkedCompaniesIds
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filters[linkedCompaniesIds]')]
    public ?string $filtersLinkedCompaniesIds = null;
    
    /**
     * Filter by linked companies ids
     * 
     * @var ?string $filtersLinkedContactsIds
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filters[linkedContactsIds]')]
    public ?string $filtersLinkedContactsIds = null;
    
    /**
     * Number of documents per page
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    /**
     * Index of the first document of the page
     * 
     * @var ?int $offset
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;
    
    /**
     * Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
     * 
     * @var ?\test\BREVO\Models\Operations\GetCrmDealsQueryParamSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetCrmDealsQueryParamSort $sort = null;
    
	public function __construct()
	{
		$this->filtersAttributesDealName = null;
		$this->filtersLinkedCompaniesIds = null;
		$this->filtersLinkedContactsIds = null;
		$this->limit = null;
		$this->offset = null;
		$this->sort = null;
	}
}
