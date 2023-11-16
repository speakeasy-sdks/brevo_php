<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetExtendedContactDetailsSoftBounces
{
    /**
     * ID of the campaign which generated the event
     * 
     * @var int $campaignId
     */
	#[\JMS\Serializer\Annotation\SerializedName('campaignId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $campaignId;
    
    /**
     * UTC date-time of the event
     * 
     * @var string $eventTime
     */
	#[\JMS\Serializer\Annotation\SerializedName('eventTime')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $eventTime;
    
	public function __construct()
	{
		$this->campaignId = 0;
		$this->eventTime = "";
	}
}
