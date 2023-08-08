<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * GetSmsCampaigns - SMS campaigns informations
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class GetSmsCampaigns
{
    /**
     * $campaigns
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetSmsCampaignsCampaigns> $campaigns
     */
	#[\JMS\Serializer\Annotation\SerializedName('campaigns')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetSmsCampaignsCampaigns>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $campaigns = null;
    
    /**
     * Number of SMS campaigns retrieved
     * 
     * @var ?int $count
     */
	#[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $count = null;
    
	public function __construct()
	{
		$this->campaigns = null;
		$this->count = null;
	}
}
