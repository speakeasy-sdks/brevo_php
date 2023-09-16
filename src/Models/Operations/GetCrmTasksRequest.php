<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetCrmTasksRequest
{
    /**
     * dateFrom to date range filter type (timestamp in milliseconds)
     * 
     * @var ?int $dateFrom
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=dateFrom')]
    public ?int $dateFrom = null;
    
    /**
     * dateTo to date range filter type (timestamp in milliseconds)
     * 
     * @var ?int $dateTo
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=dateTo')]
    public ?int $dateTo = null;
    
    /**
     * Filter by assignTo id
     * 
     * @var ?string $filterAssignTo
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter[assignTo]')]
    public ?string $filterAssignTo = null;
    
    /**
     * Filter by companies ids
     * 
     * @var ?string $filterCompanies
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter[companies]')]
    public ?string $filterCompanies = null;
    
    /**
     * Filter by contact ids
     * 
     * @var ?string $filterContacts
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter[contacts]')]
    public ?string $filterContacts = null;
    
    /**
     * Filter by date
     * 
     * @var ?\test\BREVO\Models\Operations\GetCrmTasksFilterDate $filterDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter[date]')]
    public ?GetCrmTasksFilterDate $filterDate = null;
    
    /**
     * Filter by deals ids
     * 
     * @var ?string $filterDeals
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter[deals]')]
    public ?string $filterDeals = null;
    
    /**
     * Filter by task status
     * 
     * @var ?\test\BREVO\Models\Operations\GetCrmTasksFilterStatus $filterStatus
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter[status]')]
    public ?GetCrmTasksFilterStatus $filterStatus = null;
    
    /**
     * Filter by task type (ID)
     * 
     * @var ?string $filterType
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter[type]')]
    public ?string $filterType = null;
    
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
     * @var ?\test\BREVO\Models\Operations\GetCrmTasksSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetCrmTasksSort $sort = null;
    
    /**
     * The field used to sort field names.
     * 
     * @var ?string $sortBy
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sortBy')]
    public ?string $sortBy = null;
    
	public function __construct()
	{
		$this->dateFrom = null;
		$this->dateTo = null;
		$this->filterAssignTo = null;
		$this->filterCompanies = null;
		$this->filterContacts = null;
		$this->filterDate = null;
		$this->filterDeals = null;
		$this->filterStatus = null;
		$this->filterType = null;
		$this->limit = null;
		$this->offset = null;
		$this->sort = null;
		$this->sortBy = null;
	}
}