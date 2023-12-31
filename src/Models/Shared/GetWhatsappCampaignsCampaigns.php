<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetWhatsappCampaignsCampaigns
{
    /**
     * Name of the WhatsApp Campaign
     * 
     * @var string $campaignName
     */
	#[\JMS\Serializer\Annotation\SerializedName('campaignName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $campaignName;
    
    /**
     * Status of the WhatsApp Campaign
     * 
     * @var \test\BREVO\Models\Shared\GetWhatsappCampaignsCampaignStatus $campaignStatus
     */
	#[\JMS\Serializer\Annotation\SerializedName('campaignStatus')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\GetWhatsappCampaignsCampaignStatus>')]
    public GetWhatsappCampaignsCampaignStatus $campaignStatus;
    
    /**
     * Creation UTC date-time of the WhatsApp template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
    /**
     * Error Reason associated with the WhatsApp campaign sending
     * 
     * @var ?string $errorReason
     */
	#[\JMS\Serializer\Annotation\SerializedName('errorReason')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $errorReason = null;
    
    /**
     * ID of the WhatsApp Campaign
     * 
     * @var int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
    /**
     * Count of invalidated contacts
     * 
     * @var ?int $invalidatedContacts
     */
	#[\JMS\Serializer\Annotation\SerializedName('invalidatedContacts')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $invalidatedContacts = null;
    
    /**
     * UTC date-time of last modification of the WhatsApp template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $modifiedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('modifiedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $modifiedAt;
    
    /**
     * Read percentage of the the WhatsApp campaign created
     * 
     * @var ?float $readPercentage
     */
	#[\JMS\Serializer\Annotation\SerializedName('readPercentage')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $readPercentage = null;
    
    /**
     * UTC date-time on which WhatsApp campaign is scheduled. Should be in YYYY-MM-DDTHH:mm:ss.SSSZ format
     * 
     * @var string $scheduledAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('scheduledAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $scheduledAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('stats')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\WhatsappCampStats')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?WhatsappCampStats $stats = null;
    
    /**
     * Id of the WhatsApp template
     * 
     * @var string $templateId
     */
	#[\JMS\Serializer\Annotation\SerializedName('templateId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $templateId;
    
	public function __construct()
	{
		$this->campaignName = "";
		$this->campaignStatus = \test\BREVO\Models\Shared\GetWhatsappCampaignsCampaignStatus::Draft;
		$this->createdAt = "";
		$this->errorReason = null;
		$this->id = 0;
		$this->invalidatedContacts = null;
		$this->modifiedAt = "";
		$this->readPercentage = null;
		$this->scheduledAt = "";
		$this->stats = null;
		$this->templateId = "";
	}
}
