<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * SendSmtpEmailSender - **Mandatory if `templateId` is not passed**. Pass name (_optional_) and email or id of sender from which emails will be sent. **`name` will be ignored if passed along with sender `id`**. For example,
 * 
 * **{"name":"Mary from MyShop", "email":"no-reply@myshop.com"}**
 * **{"id":2}**
 * 
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class SendSmtpEmailSender
{
    /**
     * Email of the sender from which the emails will be sent. Mandatory if sender id is not passed.
     * 
     * @var ?string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
    /**
     * Id of the sender from which the emails will be sent. In order to select a sender with specific pool of IP’s, dedicated ip users shall pass id (instead of email). Mandatory if email is not passed.
     * 
     * @var ?int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $id = null;
    
    /**
     * description: Name of the sender from which the emails will be sent. **Maximum allowed characters are 70**. Applicable only when email is passed.
     * 
     * 
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	public function __construct()
	{
		$this->email = null;
		$this->id = null;
		$this->name = null;
	}
}
