<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetTransacBlockedContactsContacts
{
    /**
     * Date when the contact was blocked or unsubscribed on
     * 
     * @var string $blockedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('blockedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $blockedAt;
    
    /**
     * Email address of the blocked or unsubscribed contact
     * 
     * @var string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
    /**
     * Reason for blocking / unsubscribing
     * 
     * @var \test\BREVO\Models\Shared\Reason $reason
     */
	#[\JMS\Serializer\Annotation\SerializedName('reason')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\Reason')]
    public Reason $reason;
    
    /**
     * Sender email address of the blocked or unsubscribed contact
     * 
     * @var string $senderEmail
     */
	#[\JMS\Serializer\Annotation\SerializedName('senderEmail')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $senderEmail;
    
	public function __construct()
	{
		$this->blockedAt = "";
		$this->email = "";
		$this->reason = new \test\BREVO\Models\Shared\Reason();
		$this->senderEmail = "";
	}
}
