<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetSmsCampaignsRecipients
{
    /**
     * $exclusionLists
     * 
     * @var array<int> $exclusionLists
     */
	#[\JMS\Serializer\Annotation\SerializedName('exclusionLists')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    public array $exclusionLists;
    
    /**
     * $lists
     * 
     * @var array<int> $lists
     */
	#[\JMS\Serializer\Annotation\SerializedName('lists')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    public array $lists;
    
	public function __construct()
	{
		$this->exclusionLists = [];
		$this->lists = [];
	}
}
