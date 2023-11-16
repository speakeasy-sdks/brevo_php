<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class MasterDetailsResponse
{
    /**
     * Billing details of the master account organization
     * 
     * @var ?\test\BREVO\Models\Shared\BillingInfo $billingInfo
     */
	#[\JMS\Serializer\Annotation\SerializedName('billingInfo')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\BillingInfo')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?BillingInfo $billingInfo = null;
    
    /**
     * Company name of master account organization
     * 
     * @var ?string $companyName
     */
	#[\JMS\Serializer\Annotation\SerializedName('companyName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyName = null;
    
    /**
     * Currency code of the master account organization
     * 
     * @var ?string $currencyCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('currencyCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currencyCode = null;
    
    /**
     * Email id of master account
     * 
     * @var ?string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
    /**
     * Unique identifier of the master account organization
     * 
     * @var ?int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $id = null;
    
    /**
     * Plan details
     * 
     * @var ?\test\BREVO\Models\Shared\PlanInfo $planInfo
     */
	#[\JMS\Serializer\Annotation\SerializedName('planInfo')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\PlanInfo')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PlanInfo $planInfo = null;
    
    /**
     * Timezone of the master account organization
     * 
     * @var ?string $timezone
     */
	#[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $timezone = null;
    
	public function __construct()
	{
		$this->billingInfo = null;
		$this->companyName = null;
		$this->currencyCode = null;
		$this->email = null;
		$this->id = null;
		$this->planInfo = null;
		$this->timezone = null;
	}
}
