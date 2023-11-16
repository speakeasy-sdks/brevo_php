<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class Contacts
{
    /**
     * Set of attributes of the contact
     * 
     * @var \test\BREVO\Models\Shared\GetContactsAttributes $attributes
     */
	#[\JMS\Serializer\Annotation\SerializedName('attributes')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\GetContactsAttributes')]
    public GetContactsAttributes $attributes;
    
    /**
     * Creation UTC date-time of the contact (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
    /**
     * Email address of the contact for which you requested the details
     * 
     * @var string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
    /**
     * Blacklist status for email campaigns (true=blacklisted, false=not blacklisted)
     * 
     * @var bool $emailBlacklisted
     */
	#[\JMS\Serializer\Annotation\SerializedName('emailBlacklisted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $emailBlacklisted;
    
    /**
     * ID of the contact for which you requested the details
     * 
     * @var int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
    /**
     * $listIds
     * 
     * @var array<int> $listIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('listIds')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    public array $listIds;
    
    /**
     * $listUnsubscribed
     * 
     * @var ?array<int> $listUnsubscribed
     */
	#[\JMS\Serializer\Annotation\SerializedName('listUnsubscribed')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $listUnsubscribed = null;
    
    /**
     * Last modification UTC date-time of the contact (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $modifiedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('modifiedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $modifiedAt;
    
    /**
     * Blacklist status for SMS campaigns (true=blacklisted, false=not blacklisted)
     * 
     * @var bool $smsBlacklisted
     */
	#[\JMS\Serializer\Annotation\SerializedName('smsBlacklisted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $smsBlacklisted;
    
	public function __construct()
	{
		$this->attributes = new \test\BREVO\Models\Shared\GetContactsAttributes();
		$this->createdAt = "";
		$this->email = "";
		$this->emailBlacklisted = false;
		$this->id = 0;
		$this->listIds = [];
		$this->listUnsubscribed = null;
		$this->modifiedAt = "";
		$this->smsBlacklisted = false;
	}
}
