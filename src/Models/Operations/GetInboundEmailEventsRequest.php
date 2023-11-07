<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetInboundEmailEventsRequest
{
    /**
     * Mandatory if startDate is used. Ending date (YYYY-MM-DD or YYYY-MM-DDTHH:mm:ss.SSSZ) till which you want to fetch the list. Maximum time period that can be selected is one month.
     * 
     * @var ?string $endDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=endDate')]
    public ?string $endDate = null;
    
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
     * Email address of the sender.
     * 
     * @var ?string $sender
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sender')]
    public ?string $sender = null;
    
    /**
     * Sort the results in the ascending/descending order of record creation
     * 
     * @var ?\test\BREVO\Models\Operations\GetInboundEmailEventsQueryParamSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetInboundEmailEventsQueryParamSort $sort = null;
    
    /**
     * Mandatory if endDate is used. Starting date (YYYY-MM-DD or YYYY-MM-DDTHH:mm:ss.SSSZ) from which you want to fetch the list. Maximum time period that can be selected is one month.
     * 
     * @var ?string $startDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=startDate')]
    public ?string $startDate = null;
    
	public function __construct()
	{
		$this->endDate = null;
		$this->limit = null;
		$this->offset = null;
		$this->sender = null;
		$this->sort = null;
		$this->startDate = null;
	}
}
