<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetInboundEmailEventsByUuid
{
    /**
     * List of attachments of the email. This will be present only after the processing is done.
     * 
     * @var ?array<\test\BREVO\Models\Shared\Attachments> $attachments
     */
	#[\JMS\Serializer\Annotation\SerializedName('attachments')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\Attachments>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $attachments = null;
    
    /**
     * Date when email was delivered successfully to client’s webhook
     * 
     * @var ?\DateTime $deliveredAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('deliveredAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $deliveredAt = null;
    
    /**
     * List of events/logs that describe the lifecycle of the email on SIB platform
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetInboundEmailEventsByUuidLogs> $logs
     */
	#[\JMS\Serializer\Annotation\SerializedName('logs')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetInboundEmailEventsByUuidLogs>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $logs = null;
    
    /**
     * Value of the Message-ID header. This will be present only after the processing is done.
     * 
     * @var ?string $messageId
     */
	#[\JMS\Serializer\Annotation\SerializedName('messageId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $messageId = null;
    
    /**
     * Date when email was received on SMTP relay
     * 
     * @var ?\DateTime $receivedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('receivedAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $receivedAt = null;
    
    /**
     * Recipient’s email address
     * 
     * @var ?string $recipient
     */
	#[\JMS\Serializer\Annotation\SerializedName('recipient')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $recipient = null;
    
    /**
     * Sender’s email address
     * 
     * @var ?string $sender
     */
	#[\JMS\Serializer\Annotation\SerializedName('sender')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $sender = null;
    
    /**
     * Value of the Subject header. This will be present only after the processing is done. 
     * 
     * @var ?string $subject
     */
	#[\JMS\Serializer\Annotation\SerializedName('subject')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subject = null;
    
	public function __construct()
	{
		$this->attachments = null;
		$this->deliveredAt = null;
		$this->logs = null;
		$this->messageId = null;
		$this->receivedAt = null;
		$this->recipient = null;
		$this->sender = null;
		$this->subject = null;
	}
}
