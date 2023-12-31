<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetExtendedContactDetailsClicked
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
     * Listing of the clicked links for the campaign
     * 
     * @var array<\test\BREVO\Models\Shared\GetExtendedContactDetailsLinks> $links
     */
	#[\JMS\Serializer\Annotation\SerializedName('links')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetExtendedContactDetailsLinks>')]
    public array $links;
    
	public function __construct()
	{
		$this->campaignId = 0;
		$this->links = [];
	}
}
