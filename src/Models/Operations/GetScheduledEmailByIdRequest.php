<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetScheduledEmailByIdRequest
{
    /**
     * Mandatory if `startDate` is used. Ending date (YYYY-MM-DD) till which you want to fetch the list. Maximum time period that can be selected is one month.
     * 
     * @var ?\DateTime $endDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=endDate,dateTimeFormat=Y-m-d')]
    public ?\DateTime $endDate = null;
    
    /**
     * The `batchId` of scheduled emails batch (Should be a valid UUIDv4) or the `messageId` of scheduled email.
     * 
     * @var string $identifier
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=identifier')]
    public string $identifier;
    
    /**
     * Number of documents returned per page. Not valid when identifier is `messageId`.
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    /**
     * Index of the first document on the page.  Not valid when identifier is `messageId`.
     * 
     * @var ?int $offset
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;
    
    /**
     * Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed. Not valid when identifier is `messageId`.
     * 
     * @var ?\test\BREVO\Models\Operations\GetScheduledEmailByIdQueryParamSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetScheduledEmailByIdQueryParamSort $sort = null;
    
    /**
     * Mandatory if `endDate` is used. Starting date (YYYY-MM-DD) from which you want to fetch the list. Can be maximum 30 days older tha current date.
     * 
     * @var ?\DateTime $startDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=startDate,dateTimeFormat=Y-m-d')]
    public ?\DateTime $startDate = null;
    
    /**
     * Filter the records by `status` of the scheduled email batch or message. Not valid when identifier is `messageId`.
     * 
     * @var ?\test\BREVO\Models\Operations\GetScheduledEmailByIdQueryParamStatus $status
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=status')]
    public ?GetScheduledEmailByIdQueryParamStatus $status = null;
    
	public function __construct()
	{
		$this->endDate = null;
		$this->identifier = "";
		$this->limit = null;
		$this->offset = null;
		$this->sort = null;
		$this->startDate = null;
		$this->status = null;
	}
}
