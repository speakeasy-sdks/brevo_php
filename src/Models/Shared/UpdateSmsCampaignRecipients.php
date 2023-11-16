<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class UpdateSmsCampaignRecipients
{
    /**
     * List ids which have to be excluded from a campaign
     * 
     * @var ?array<int> $exclusionListIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('exclusionListIds')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $exclusionListIds = null;
    
    /**
     * Lists Ids to send the campaign to. **REQUIRED if scheduledAt is not empty**
     * 
     * 
     * 
     * @var array<int> $listIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('listIds')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    public array $listIds;
    
	public function __construct()
	{
		$this->exclusionListIds = null;
		$this->listIds = [];
	}
}
