<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class CreateSmtpEmail
{
    /**
     * Message ID of the transactional email sent
     * 
     * @var ?string $messageId
     */
	#[\JMS\Serializer\Annotation\SerializedName('messageId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $messageId = null;
    
    /**
     * $messageIds
     * 
     * @var ?array<string> $messageIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('messageIds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messageIds = null;
    
	public function __construct()
	{
		$this->messageId = null;
		$this->messageIds = null;
	}
}
