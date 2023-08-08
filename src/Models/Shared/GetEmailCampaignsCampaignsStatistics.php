<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetEmailCampaignsCampaignsStatistics
{
    /**
     * List-wise statistics of the campaign.
     * 
     * @var array<\test\BREVO\Models\Shared\GetEmailCampaignsCampaignsStatisticsCampaignStats> $campaignStats
     */
	#[\JMS\Serializer\Annotation\SerializedName('campaignStats')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetEmailCampaignsCampaignsStatisticsCampaignStats>')]
    public array $campaignStats;
    
    /**
     * Overall statistics of the campaign
     * 
     * @var \test\BREVO\Models\Shared\GetEmailCampaignsCampaignsStatisticsGlobalStats $globalStats
     */
	#[\JMS\Serializer\Annotation\SerializedName('globalStats')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\GetEmailCampaignsCampaignsStatisticsGlobalStats')]
    public GetEmailCampaignsCampaignsStatisticsGlobalStats $globalStats;
    
    /**
     * Statistics about the number of clicks for the links
     * 
     * @var \test\BREVO\Models\Shared\GetEmailCampaignsCampaignsStatisticsLinksStats $linksStats
     */
	#[\JMS\Serializer\Annotation\SerializedName('linksStats')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\GetEmailCampaignsCampaignsStatisticsLinksStats')]
    public GetEmailCampaignsCampaignsStatisticsLinksStats $linksStats;
    
    /**
     * Number of clicks on mirror link
     * 
     * @var int $mirrorClick
     */
	#[\JMS\Serializer\Annotation\SerializedName('mirrorClick')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $mirrorClick;
    
    /**
     * Number of remaning emails to send
     * 
     * @var int $remaining
     */
	#[\JMS\Serializer\Annotation\SerializedName('remaining')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $remaining;
    
    /**
     * $statsByBrowser
     * 
     * @var array<string, \test\BREVO\Models\Shared\GetDeviceBrowserStats> $statsByBrowser
     */
	#[\JMS\Serializer\Annotation\SerializedName('statsByBrowser')]
    #[\JMS\Serializer\Annotation\Type('array<string, test\BREVO\Models\Shared\GetDeviceBrowserStats>')]
    public array $statsByBrowser;
    
	#[\JMS\Serializer\Annotation\SerializedName('statsByDevice')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\GetStatsByDevice')]
    public GetStatsByDevice $statsByDevice;
    
    /**
     * $statsByDomain
     * 
     * @var array<string, \test\BREVO\Models\Shared\GetCampaignStats> $statsByDomain
     */
	#[\JMS\Serializer\Annotation\SerializedName('statsByDomain')]
    #[\JMS\Serializer\Annotation\Type('array<string, test\BREVO\Models\Shared\GetCampaignStats>')]
    public array $statsByDomain;
    
	public function __construct()
	{
		$this->campaignStats = [];
		$this->globalStats = new \test\BREVO\Models\Shared\GetEmailCampaignsCampaignsStatisticsGlobalStats();
		$this->linksStats = new \test\BREVO\Models\Shared\GetEmailCampaignsCampaignsStatisticsLinksStats();
		$this->mirrorClick = 0;
		$this->remaining = 0;
		$this->statsByBrowser = [];
		$this->statsByDevice = new \test\BREVO\Models\Shared\GetStatsByDevice();
		$this->statsByDomain = [];
	}
}
