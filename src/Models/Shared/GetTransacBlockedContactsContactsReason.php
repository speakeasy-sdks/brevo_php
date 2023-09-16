<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * GetTransacBlockedContactsContactsReason - Reason for blocking / unsubscribing
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class GetTransacBlockedContactsContactsReason
{
    /**
     * Reason code for blocking / unsubscribing (This code is safe for comparison)
     * 
     * @var ?\test\BREVO\Models\Shared\GetTransacBlockedContactsContactsReasonCode $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\GetTransacBlockedContactsContactsReasonCode>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetTransacBlockedContactsContactsReasonCode $code = null;
    
    /**
     * Reason for blocking / unsubscribing (This string is not safe for comparison)
     * 
     * @var ?string $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
	public function __construct()
	{
		$this->code = null;
		$this->message = null;
	}
}