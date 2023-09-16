<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetSmsEventReport
{
    /**
     * $events
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetSmsEventReportEvents> $events
     */
	#[\JMS\Serializer\Annotation\SerializedName('events')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetSmsEventReportEvents>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $events = null;
    
	public function __construct()
	{
		$this->events = null;
	}
}
