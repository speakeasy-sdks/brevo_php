<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * GetSendersList - list of senders
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class GetSendersList
{
    /**
     * List of the senders available in your account
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetSendersListSenders> $senders
     */
	#[\JMS\Serializer\Annotation\SerializedName('senders')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetSendersListSenders>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $senders = null;
    
	public function __construct()
	{
		$this->senders = null;
	}
}
