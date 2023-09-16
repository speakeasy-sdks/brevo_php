<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetCrmFilesRequest
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
     * Filter by file entity type
     * 
     * @var ?\test\BREVO\Models\Operations\GetCrmFilesEntity $entity
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=entity')]
    public ?GetCrmFilesEntity $entity = null;
    
    /**
     * Filter by file entity IDs
     * 
     * @var ?string $entityIds
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=entityIds')]
    public ?string $entityIds = null;
    
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
     * @var ?\test\BREVO\Models\Operations\GetCrmFilesSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetCrmFilesSort $sort = null;
    
	public function __construct()
	{
		$this->dateFrom = null;
		$this->dateTo = null;
		$this->entity = null;
		$this->entityIds = null;
		$this->limit = null;
		$this->offset = null;
		$this->sort = null;
	}
}