<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * UpdateCampaignStatus - Status of the campaign
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class UpdateCampaignStatus
{
    /**
     * Note:- **replicateTemplate** status will be available **only for template type campaigns.**
     * 
     * 
     * 
     * @var ?\test\BREVO\Models\Shared\UpdateCampaignStatusStatus $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\UpdateCampaignStatusStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdateCampaignStatusStatus $status = null;
    
	public function __construct()
	{
		$this->status = null;
	}
}
