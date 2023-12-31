<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class CampaignStats
{
    /**
     * ID of the campaign
     * 
     * @var int $campaignId
     */
	#[\JMS\Serializer\Annotation\SerializedName('campaignId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $campaignId;
    
	#[\JMS\Serializer\Annotation\SerializedName('stats')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\GetCampaignStats')]
    public GetCampaignStats $stats;
    
	public function __construct()
	{
		$this->campaignId = 0;
		$this->stats = new \test\BREVO\Models\Shared\GetCampaignStats();
	}
}
