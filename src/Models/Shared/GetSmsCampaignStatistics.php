<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetSmsCampaignStatistics
{
    /**
     * Number of replies to the SMS
     * 
     * @var int $answered
     */
	#[\JMS\Serializer\Annotation\SerializedName('answered')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $answered;
    
    /**
     * Number of delivered SMS
     * 
     * @var int $delivered
     */
	#[\JMS\Serializer\Annotation\SerializedName('delivered')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $delivered;
    
    /**
     * Number of hardbounced SMS
     * 
     * @var int $hardBounces
     */
	#[\JMS\Serializer\Annotation\SerializedName('hardBounces')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $hardBounces;
    
    /**
     * Number of processing SMS
     * 
     * @var int $processing
     */
	#[\JMS\Serializer\Annotation\SerializedName('processing')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $processing;
    
    /**
     * Number of sent SMS
     * 
     * @var int $sent
     */
	#[\JMS\Serializer\Annotation\SerializedName('sent')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $sent;
    
    /**
     * Number of softbounced SMS
     * 
     * @var int $softBounces
     */
	#[\JMS\Serializer\Annotation\SerializedName('softBounces')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $softBounces;
    
    /**
     * Number of unsubscription SMS
     * 
     * @var int $unsubscriptions
     */
	#[\JMS\Serializer\Annotation\SerializedName('unsubscriptions')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $unsubscriptions;
    
	public function __construct()
	{
		$this->answered = 0;
		$this->delivered = 0;
		$this->hardBounces = 0;
		$this->processing = 0;
		$this->sent = 0;
		$this->softBounces = 0;
		$this->unsubscriptions = 0;
	}
}
