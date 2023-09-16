<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetTransacSmsReportRequest
{
    /**
     * Number of days in the past including today (positive integer). **Not compatible with 'startDate' and 'endDate'**
     * 
     * 
     * 
     * @var ?int $days
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=days')]
    public ?int $days = null;
    
    /**
     * **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report
     * 
     * 
     * 
     * @var ?string $endDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=endDate')]
    public ?string $endDate = null;
    
    /**
     * Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     * 
     * @var ?\test\BREVO\Models\Operations\GetTransacSmsReportSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetTransacSmsReportSort $sort = null;
    
    /**
     * **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report
     * 
     * 
     * 
     * @var ?string $startDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=startDate')]
    public ?string $startDate = null;
    
    /**
     * Filter on a tag
     * 
     * @var ?string $tag
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tag')]
    public ?string $tag = null;
    
	public function __construct()
	{
		$this->days = null;
		$this->endDate = null;
		$this->sort = null;
		$this->startDate = null;
		$this->tag = null;
	}
}