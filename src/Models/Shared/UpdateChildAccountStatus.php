<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class UpdateChildAccountStatus
{
    /**
     * Status of Marketing Automation Platform activation for your account (true=enabled, false=disabled)
     * 
     * @var ?bool $marketingAutomation
     */
	#[\JMS\Serializer\Annotation\SerializedName('marketingAutomation')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $marketingAutomation = null;
    
    /**
     * Status of SMS Campaign Platform activation for your account (true=enabled, false=disabled)
     * 
     * @var ?bool $smsCampaign
     */
	#[\JMS\Serializer\Annotation\SerializedName('smsCampaign')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $smsCampaign = null;
    
    /**
     * Status of Transactional Email Platform activation for your account (true=enabled, false=disabled)
     * 
     * @var ?bool $transactionalEmail
     */
	#[\JMS\Serializer\Annotation\SerializedName('transactionalEmail')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $transactionalEmail = null;
    
    /**
     * Status of Transactional SMS Platform activation for your account (true=enabled, false=disabled)
     * 
     * @var ?bool $transactionalSms
     */
	#[\JMS\Serializer\Annotation\SerializedName('transactionalSms')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $transactionalSms = null;
    
	public function __construct()
	{
		$this->marketingAutomation = null;
		$this->smsCampaign = null;
		$this->transactionalEmail = null;
		$this->transactionalSms = null;
	}
}