<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetExtendedContactDetailsAdminUnsubscription
{
    /**
     * UTC date-time of the event
     * 
     * @var string $eventTime
     */
	#[\JMS\Serializer\Annotation\SerializedName('eventTime')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $eventTime;
    
    /**
     * IP from which the user has been unsubscribed
     * 
     * @var ?string $ip
     */
	#[\JMS\Serializer\Annotation\SerializedName('ip')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ip = null;
    
	public function __construct()
	{
		$this->eventTime = "";
		$this->ip = null;
	}
}
