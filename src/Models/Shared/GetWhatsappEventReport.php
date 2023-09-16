<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetWhatsappEventReport
{
    /**
     * $events
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetWhatsappEventReportEvents> $events
     */
	#[\JMS\Serializer\Annotation\SerializedName('events')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetWhatsappEventReportEvents>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $events = null;
    
	public function __construct()
	{
		$this->events = null;
	}
}