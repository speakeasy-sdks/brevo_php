<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class SendTestSms
{
    /**
     * Mobile number of the recipient with the country code. This number **must belong to one of your contacts in Brevo account and must not be blacklisted**
     * 
     * 
     * 
     * @var ?string $phoneNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('phoneNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $phoneNumber = null;
    
	public function __construct()
	{
		$this->phoneNumber = null;
	}
}