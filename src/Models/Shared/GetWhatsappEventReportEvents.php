<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetWhatsappEventReportEvents
{
    /**
     * Text of the reply (will be there only in case of `reply` event with text)
     * 
     * @var ?string $body
     */
	#[\JMS\Serializer\Annotation\SerializedName('body')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $body = null;
    
    /**
     * WhatsApp Number with country code. Example, 85264318721
     * 
     * @var string $contactNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('contactNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $contactNumber;
    
    /**
     * UTC date-time on which the event has been generated
     * 
     * @var string $date
     */
	#[\JMS\Serializer\Annotation\SerializedName('date')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $date;
    
    /**
     * Event which occurred
     * 
     * @var \test\BREVO\Models\Shared\GetWhatsappEventReportEventsEvent $event
     */
	#[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\GetWhatsappEventReportEventsEvent>')]
    public GetWhatsappEventReportEventsEvent $event;
    
    /**
     * Url of the media reply (will be there only in case of `reply` event with media)
     * 
     * @var ?string $mediaUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('mediaUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $mediaUrl = null;
    
    /**
     * Message ID which generated the event
     * 
     * @var string $messageId
     */
	#[\JMS\Serializer\Annotation\SerializedName('messageId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $messageId;
    
    /**
     * Reason for the event (will be there in case of `error` and `soft-bounce` events)
     * 
     * @var ?string $reason
     */
	#[\JMS\Serializer\Annotation\SerializedName('reason')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reason = null;
    
    /**
     * WhatsApp Number with country code. Example, 85264318721
     * 
     * @var string $senderNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('senderNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $senderNumber;
    
	public function __construct()
	{
		$this->body = null;
		$this->contactNumber = "";
		$this->date = "";
		$this->event = \test\BREVO\Models\Shared\GetWhatsappEventReportEventsEvent::Sent;
		$this->mediaUrl = null;
		$this->messageId = "";
		$this->reason = null;
		$this->senderNumber = "";
	}
}
