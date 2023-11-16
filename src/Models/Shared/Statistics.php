<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class Statistics
{
    /**
     * Percentage of a particular event for both versions
     * 
     * @var \test\BREVO\Models\Shared\AbTestVersionStats $clicks
     */
	#[\JMS\Serializer\Annotation\SerializedName('clicks')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\AbTestVersionStats')]
    public AbTestVersionStats $clicks;
    
    /**
     * Percentage of a particular event for both versions
     * 
     * @var \test\BREVO\Models\Shared\AbTestVersionStats $complaints
     */
	#[\JMS\Serializer\Annotation\SerializedName('complaints')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\AbTestVersionStats')]
    public AbTestVersionStats $complaints;
    
    /**
     * Percentage of a particular event for both versions
     * 
     * @var \test\BREVO\Models\Shared\AbTestVersionStats $hardBounces
     */
	#[\JMS\Serializer\Annotation\SerializedName('hardBounces')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\AbTestVersionStats')]
    public AbTestVersionStats $hardBounces;
    
    /**
     * Percentage of a particular event for both versions
     * 
     * @var \test\BREVO\Models\Shared\AbTestVersionStats $openers
     */
	#[\JMS\Serializer\Annotation\SerializedName('openers')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\AbTestVersionStats')]
    public AbTestVersionStats $openers;
    
    /**
     * Percentage of a particular event for both versions
     * 
     * @var \test\BREVO\Models\Shared\AbTestVersionStats $softBounces
     */
	#[\JMS\Serializer\Annotation\SerializedName('softBounces')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\AbTestVersionStats')]
    public AbTestVersionStats $softBounces;
    
    /**
     * Percentage of a particular event for both versions
     * 
     * @var \test\BREVO\Models\Shared\AbTestVersionStats $unsubscribed
     */
	#[\JMS\Serializer\Annotation\SerializedName('unsubscribed')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\AbTestVersionStats')]
    public AbTestVersionStats $unsubscribed;
    
	public function __construct()
	{
		$this->clicks = new \test\BREVO\Models\Shared\AbTestVersionStats();
		$this->complaints = new \test\BREVO\Models\Shared\AbTestVersionStats();
		$this->hardBounces = new \test\BREVO\Models\Shared\AbTestVersionStats();
		$this->openers = new \test\BREVO\Models\Shared\AbTestVersionStats();
		$this->softBounces = new \test\BREVO\Models\Shared\AbTestVersionStats();
		$this->unsubscribed = new \test\BREVO\Models\Shared\AbTestVersionStats();
	}
}
