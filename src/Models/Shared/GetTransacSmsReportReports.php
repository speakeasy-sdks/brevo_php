<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetTransacSmsReportReports
{
    /**
     * Number of accepted for the date
     * 
     * @var ?int $accepted
     */
	#[\JMS\Serializer\Annotation\SerializedName('accepted')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $accepted = null;
    
    /**
     * Number of blocked contact for the date
     * 
     * @var ?int $blocked
     */
	#[\JMS\Serializer\Annotation\SerializedName('blocked')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $blocked = null;
    
    /**
     * Date for which statistics are retrieved
     * 
     * @var ?\DateTime $date
     */
	#[\JMS\Serializer\Annotation\SerializedName('date')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d', '', '|Y-m-d'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $date = null;
    
    /**
     * Number of delivered SMS for the date
     * 
     * @var ?int $delivered
     */
	#[\JMS\Serializer\Annotation\SerializedName('delivered')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $delivered = null;
    
    /**
     * Number of hardbounces for the date
     * 
     * @var ?int $hardBounces
     */
	#[\JMS\Serializer\Annotation\SerializedName('hardBounces')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $hardBounces = null;
    
    /**
     * Number of rejected for the date
     * 
     * @var ?int $rejected
     */
	#[\JMS\Serializer\Annotation\SerializedName('rejected')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $rejected = null;
    
    /**
     * Number of answered SMS for the date
     * 
     * @var ?int $replied
     */
	#[\JMS\Serializer\Annotation\SerializedName('replied')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $replied = null;
    
    /**
     * Number of requests for the date
     * 
     * @var ?int $requests
     */
	#[\JMS\Serializer\Annotation\SerializedName('requests')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $requests = null;
    
    /**
     * Number of softbounces for the date
     * 
     * @var ?int $softBounces
     */
	#[\JMS\Serializer\Annotation\SerializedName('softBounces')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $softBounces = null;
    
    /**
     * Number of unsubscription for the date
     * 
     * @var ?int $unsubscribed
     */
	#[\JMS\Serializer\Annotation\SerializedName('unsubscribed')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $unsubscribed = null;
    
	public function __construct()
	{
		$this->accepted = null;
		$this->blocked = null;
		$this->date = null;
		$this->delivered = null;
		$this->hardBounces = null;
		$this->rejected = null;
		$this->replied = null;
		$this->requests = null;
		$this->softBounces = null;
		$this->unsubscribed = null;
	}
}
