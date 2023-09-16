<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetAllExternalFeedsRequest
{
    /**
     * Filter the records by `authType` of the feed.
     * 
     * @var ?\test\BREVO\Models\Operations\GetAllExternalFeedsAuthType $authType
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=authType')]
    public ?GetAllExternalFeedsAuthType $authType = null;
    
    /**
     * Mandatory if `startDate` is used. Ending date (YYYY-MM-DD) till which you want to fetch the list. Maximum time period that can be selected is one month.
     * 
     * @var ?\DateTime $endDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=endDate,dateTimeFormat=Y-m-d')]
    public ?\DateTime $endDate = null;
    
    /**
     * Number of documents returned per page.
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    /**
     * Index of the first document on the page.
     * 
     * @var ?int $offset
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;
    
    /**
     * Can be used to filter records by search keyword on feed name
     * 
     * @var ?string $search
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=search')]
    public ?string $search = null;
    
    /**
     * Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed.
     * 
     * @var ?\test\BREVO\Models\Operations\GetAllExternalFeedsSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetAllExternalFeedsSort $sort = null;
    
    /**
     * Mandatory if `endDate` is used. Starting date (YYYY-MM-DD) from which you want to fetch the list. Can be maximum 30 days older than current date.
     * 
     * @var ?\DateTime $startDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=startDate,dateTimeFormat=Y-m-d')]
    public ?\DateTime $startDate = null;
    
	public function __construct()
	{
		$this->authType = null;
		$this->endDate = null;
		$this->limit = null;
		$this->offset = null;
		$this->search = null;
		$this->sort = null;
		$this->startDate = null;
	}
}