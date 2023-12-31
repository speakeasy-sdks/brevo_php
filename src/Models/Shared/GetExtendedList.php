<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetExtendedList
{
    /**
     * $campaignStats
     * 
     * @var ?array<\test\BREVO\Models\Shared\CampaignStats> $campaignStats
     */
	#[\JMS\Serializer\Annotation\SerializedName('campaignStats')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\CampaignStats>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $campaignStats = null;
    
    /**
     * Creation UTC date-time of the list (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
    /**
     * Status telling if the list is dynamic or not (true=dynamic, false=not dynamic)
     * 
     * @var ?bool $dynamicList
     */
	#[\JMS\Serializer\Annotation\SerializedName('dynamicList')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $dynamicList = null;
    
    /**
     * ID of the folder
     * 
     * @var int $folderId
     */
	#[\JMS\Serializer\Annotation\SerializedName('folderId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $folderId;
    
    /**
     * ID of the list
     * 
     * @var int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
    /**
     * Name of the list
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * Number of blacklisted contacts in the list
     * 
     * @var int $totalBlacklisted
     */
	#[\JMS\Serializer\Annotation\SerializedName('totalBlacklisted')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalBlacklisted;
    
    /**
     * Number of contacts in the list
     * 
     * @var int $totalSubscribers
     */
	#[\JMS\Serializer\Annotation\SerializedName('totalSubscribers')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalSubscribers;
    
    /**
     * Number of unique contacts in the list
     * 
     * @var int $uniqueSubscribers
     */
	#[\JMS\Serializer\Annotation\SerializedName('uniqueSubscribers')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $uniqueSubscribers;
    
	public function __construct()
	{
		$this->campaignStats = null;
		$this->createdAt = "";
		$this->dynamicList = null;
		$this->folderId = 0;
		$this->id = 0;
		$this->name = "";
		$this->totalBlacklisted = 0;
		$this->totalSubscribers = 0;
		$this->uniqueSubscribers = 0;
	}
}
