<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetEmailEventReportRequest
{
    /**
     * Number of days in the past including today (positive integer). _Not compatible with 'startDate' and 'endDate'_
     * 
     * 
     * 
     * @var ?int $days
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=days')]
    public ?int $days = null;
    
    /**
     * Filter the report for a specific email addresses
     * 
     * @var ?string $email
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=email')]
    public ?string $email = null;
    
    /**
     * **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
     * 
     * 
     * 
     * @var ?string $endDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=endDate')]
    public ?string $endDate = null;
    
    /**
     * Filter the report for a specific event type
     * 
     * @var ?\test\BREVO\Models\Operations\GetEmailEventReportQueryParamEvent $event
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=event')]
    public ?GetEmailEventReportQueryParamEvent $event = null;
    
    /**
     * Number limitation for the result returned
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    /**
     * Filter on a specific message id
     * 
     * @var ?string $messageId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=messageId')]
    public ?string $messageId = null;
    
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
     * @var ?\test\BREVO\Models\Operations\GetEmailEventReportQueryParamSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetEmailEventReportQueryParamSort $sort = null;
    
    /**
     * **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
     * 
     * 
     * 
     * @var ?string $startDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=startDate')]
    public ?string $startDate = null;
    
    /**
     * Filter the report for tags (serialized and urlencoded array)
     * 
     * @var ?string $tags
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tags')]
    public ?string $tags = null;
    
    /**
     * Filter on a specific template id
     * 
     * @var ?int $templateId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=templateId')]
    public ?int $templateId = null;
    
	public function __construct()
	{
		$this->days = null;
		$this->email = null;
		$this->endDate = null;
		$this->event = null;
		$this->limit = null;
		$this->messageId = null;
		$this->offset = null;
		$this->sort = null;
		$this->startDate = null;
		$this->tags = null;
		$this->templateId = null;
	}
}
