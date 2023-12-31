<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetWhatsAppCampaignsRequest
{
    /**
     * **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the WhatsApp campaigns created.
     * 
     * **Prefer to pass your timezone in date-time format for accurate result**
     * 
     * 
     * @var ?string $endDate
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=endDate')]
    public ?string $endDate = null;
    
    /**
     * Number of documents per page
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    /**
     * Index of the first document in the page
     * 
     * @var ?int $offset
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;
    
    /**
     * Sort the results in the ascending/descending order of record modification. Default order is **descending** if `sort` is not passed
     * 
     * @var ?\test\BREVO\Models\Operations\GetWhatsAppCampaignsQueryParamSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetWhatsAppCampaignsQueryParamSort $sort = null;
    
    /**
     * **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the WhatsApp campaigns created.
     * 
     * **Prefer to pass your timezone in date-time format for accurate result**
     * 
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
		$this->sort = null;
		$this->startDate = null;
	}
}
