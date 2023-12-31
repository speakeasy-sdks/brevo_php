<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class TransactionalEmails
{
    /**
     * Date on which transactional email was sent
     * 
     * @var string $date
     */
	#[\JMS\Serializer\Annotation\SerializedName('date')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $date;
    
    /**
     * Email address to which transactional email has been sent
     * 
     * @var string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
    /**
     * Email address of the sender from which the email was sent
     * 
     * @var ?string $from
     */
	#[\JMS\Serializer\Annotation\SerializedName('from')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $from = null;
    
    /**
     * Message Id of the sent email
     * 
     * @var string $messageId
     */
	#[\JMS\Serializer\Annotation\SerializedName('messageId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $messageId;
    
    /**
     * Subject of the sent email
     * 
     * @var string $subject
     */
	#[\JMS\Serializer\Annotation\SerializedName('subject')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $subject;
    
    /**
     * Tags used for your email
     * 
     * @var ?array<string> $tags
     */
	#[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tags = null;
    
    /**
     * Id of the template
     * 
     * @var ?int $templateId
     */
	#[\JMS\Serializer\Annotation\SerializedName('templateId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $templateId = null;
    
    /**
     * Unique id of the email sent to a particular contact
     * 
     * @var string $uuid
     */
	#[\JMS\Serializer\Annotation\SerializedName('uuid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $uuid;
    
	public function __construct()
	{
		$this->date = "";
		$this->email = "";
		$this->from = null;
		$this->messageId = "";
		$this->subject = "";
		$this->tags = null;
		$this->templateId = null;
		$this->uuid = "";
	}
}
