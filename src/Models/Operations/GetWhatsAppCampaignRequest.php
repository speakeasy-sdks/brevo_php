<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetWhatsAppCampaignRequest
{
    /**
     * Id of the campaign
     * 
     * @var int $campaignId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=campaignId')]
    public int $campaignId;
    
	public function __construct()
	{
		$this->campaignId = 0;
	}
}
