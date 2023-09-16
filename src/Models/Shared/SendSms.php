<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class SendSms
{
	#[\JMS\Serializer\Annotation\SerializedName('messageId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $messageId;
    
	#[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $reference;
    
    /**
     * Remaining SMS credits of the user
     * 
     * @var ?float $remainingCredits
     */
	#[\JMS\Serializer\Annotation\SerializedName('remainingCredits')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $remainingCredits = null;
    
    /**
     * Count of SMS's to send multiple text messages
     * 
     * @var ?int $smsCount
     */
	#[\JMS\Serializer\Annotation\SerializedName('smsCount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $smsCount = null;
    
    /**
     * SMS credits used per text message
     * 
     * @var ?float $usedCredits
     */
	#[\JMS\Serializer\Annotation\SerializedName('usedCredits')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $usedCredits = null;
    
	public function __construct()
	{
		$this->messageId = 0;
		$this->reference = "";
		$this->remainingCredits = null;
		$this->smsCount = null;
		$this->usedCredits = null;
	}
}