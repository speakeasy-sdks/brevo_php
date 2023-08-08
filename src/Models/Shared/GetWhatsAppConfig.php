<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * GetWhatsAppConfig - Get all the information of your WhatsApp API account
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class GetWhatsAppConfig
{
    /**
     * Verification status information of the Business account
     * 
     * @var ?string $businessStatus
     */
	#[\JMS\Serializer\Annotation\SerializedName('businessStatus')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $businessStatus = null;
    
    /**
     * Status of the name associated with WhatsApp Phone number
     * 
     * @var ?\test\BREVO\Models\Shared\GetWhatsAppConfigPhoneNumberNameStatus $phoneNumberNameStatus
     */
	#[\JMS\Serializer\Annotation\SerializedName('phoneNumberNameStatus')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\GetWhatsAppConfigPhoneNumberNameStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetWhatsAppConfigPhoneNumberNameStatus $phoneNumberNameStatus = null;
    
    /**
     * Quality status of phone number associated with WhatsApp account. There are three quality ratings. example - **High (GREEN) , Medium (YELLOW) and Low(RED)**
     * 
     * @var ?\test\BREVO\Models\Shared\GetWhatsAppConfigPhoneNumberQuality $phoneNumberQuality
     */
	#[\JMS\Serializer\Annotation\SerializedName('phoneNumberQuality')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\GetWhatsAppConfigPhoneNumberQuality>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetWhatsAppConfigPhoneNumberQuality $phoneNumberQuality = null;
    
    /**
     * Sending limit Information of the WhatsApp API account
     * 
     * @var ?string $sendingLimit
     */
	#[\JMS\Serializer\Annotation\SerializedName('sendingLimit')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $sendingLimit = null;
    
    /**
     * Id of the WhatsApp business account
     * 
     * @var ?string $whatsappBusinessAccountId
     */
	#[\JMS\Serializer\Annotation\SerializedName('whatsappBusinessAccountId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $whatsappBusinessAccountId = null;
    
    /**
     * Status information related to WhatsApp API account
     * 
     * @var ?\test\BREVO\Models\Shared\GetWhatsAppConfigWhatsappBusinessAccountStatus $whatsappBusinessAccountStatus
     */
	#[\JMS\Serializer\Annotation\SerializedName('whatsappBusinessAccountStatus')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\GetWhatsAppConfigWhatsappBusinessAccountStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetWhatsAppConfigWhatsappBusinessAccountStatus $whatsappBusinessAccountStatus = null;
    
	public function __construct()
	{
		$this->businessStatus = null;
		$this->phoneNumberNameStatus = null;
		$this->phoneNumberQuality = null;
		$this->sendingLimit = null;
		$this->whatsappBusinessAccountId = null;
		$this->whatsappBusinessAccountStatus = null;
	}
}
