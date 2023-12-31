<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class UpdateCampaignStatusRequest
{
    /**
     * Id of the campaign
     * 
     * @var int $campaignId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=campaignId')]
    public int $campaignId;
    
    /**
     * Status of the campaign
     * 
     * @var \test\BREVO\Models\Shared\UpdateCampaignStatus $updateCampaignStatus
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \test\BREVO\Models\Shared\UpdateCampaignStatus $updateCampaignStatus;
    
	public function __construct()
	{
		$this->campaignId = 0;
		$this->updateCampaignStatus = new \test\BREVO\Models\Shared\UpdateCampaignStatus();
	}
}
