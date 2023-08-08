<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * GetExtendedContactDetailsStatistics - Campaign statistics of the contact
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class GetExtendedContactDetailsStatistics
{
    /**
     * Listing of the clicks generated by the contact
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsClicked> $clicked
     */
	#[\JMS\Serializer\Annotation\SerializedName('clicked')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsClicked>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $clicked = null;
    
    /**
     * Listing of the complaints generated by the contact
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsComplaints> $complaints
     */
	#[\JMS\Serializer\Annotation\SerializedName('complaints')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsComplaints>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $complaints = null;
    
    /**
     * Listing of the delivered campaign for the contact
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsDelivered> $delivered
     */
	#[\JMS\Serializer\Annotation\SerializedName('delivered')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsDelivered>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $delivered = null;
    
    /**
     * Listing of the hardbounes generated by the contact
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsHardBounces> $hardBounces
     */
	#[\JMS\Serializer\Annotation\SerializedName('hardBounces')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsHardBounces>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $hardBounces = null;
    
    /**
     * Listing of the sent campaign for the contact
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsMessagesSent> $messagesSent
     */
	#[\JMS\Serializer\Annotation\SerializedName('messagesSent')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsMessagesSent>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messagesSent = null;
    
    /**
     * Listing of the openings generated by the contact
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsOpened> $opened
     */
	#[\JMS\Serializer\Annotation\SerializedName('opened')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsOpened>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $opened = null;
    
    /**
     * Listing of the softbounes generated by the contact
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsSoftBounces> $softBounces
     */
	#[\JMS\Serializer\Annotation\SerializedName('softBounces')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsSoftBounces>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $softBounces = null;
    
    /**
     * Listing of the transactional attributes for the contact
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsTransacAttributes> $transacAttributes
     */
	#[\JMS\Serializer\Annotation\SerializedName('transacAttributes')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsTransacAttributes>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $transacAttributes = null;
    
    /**
     * Listing of the unsubscription for the contact
     * 
     * @var ?\test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsUnsubscriptions $unsubscriptions
     */
	#[\JMS\Serializer\Annotation\SerializedName('unsubscriptions')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\GetExtendedContactDetailsStatisticsUnsubscriptions')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetExtendedContactDetailsStatisticsUnsubscriptions $unsubscriptions = null;
    
	public function __construct()
	{
		$this->clicked = null;
		$this->complaints = null;
		$this->delivered = null;
		$this->hardBounces = null;
		$this->messagesSent = null;
		$this->opened = null;
		$this->softBounces = null;
		$this->transacAttributes = null;
		$this->unsubscriptions = null;
	}
}
