<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class CreateSmsCampaign
{
    /**
     * Content of the message. The **maximum characters used per SMS is 160**, if used more than that, it will be counted as more than one SMS
     * 
     * 
     * 
     * @var string $content
     */
	#[\JMS\Serializer\Annotation\SerializedName('content')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $content;
    
    /**
     * Name of the campaign
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * A recognizable prefix will ensure your audience knows who you are. Recommended by U.S. carriers. This will be added as your Brand Name before the message content. **Prefer verifying maximum length of 160 characters including this prefix in message content to avoid multiple sending of same sms.**
     * 
     * @var ?string $organisationPrefix
     */
	#[\JMS\Serializer\Annotation\SerializedName('organisationPrefix')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $organisationPrefix = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('recipients')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\CreateSmsCampaignRecipients')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateSmsCampaignRecipients $recipients = null;
    
    /**
     * UTC date-time on which the campaign has to run (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     * 
     * 
     * 
     * @var ?string $scheduledAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('scheduledAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $scheduledAt = null;
    
    /**
     * Name of the sender. **The number of characters is limited to 11 for alphanumeric characters and 15 for numeric characters**
     * 
     * 
     * 
     * @var string $sender
     */
	#[\JMS\Serializer\Annotation\SerializedName('sender')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $sender;
    
    /**
     * Format of the message. It indicates whether the content should be treated as unicode or not.
     * 
     * 
     * 
     * @var ?bool $unicodeEnabled
     */
	#[\JMS\Serializer\Annotation\SerializedName('unicodeEnabled')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $unicodeEnabled = null;
    
    /**
     * Instructions to unsubscribe from future communications. Recommended by U.S. carriers. Must include **STOP** keyword. This will be added as instructions after the end of message content. **Prefer verifying maximum length of 160 characters including this instructions in message content to avoid multiple sending of same sms.**
     * 
     * @var ?string $unsubscribeInstruction
     */
	#[\JMS\Serializer\Annotation\SerializedName('unsubscribeInstruction')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $unsubscribeInstruction = null;
    
	public function __construct()
	{
		$this->content = "";
		$this->name = "";
		$this->organisationPrefix = null;
		$this->recipients = null;
		$this->scheduledAt = null;
		$this->sender = "";
		$this->unicodeEnabled = null;
		$this->unsubscribeInstruction = null;
	}
}
