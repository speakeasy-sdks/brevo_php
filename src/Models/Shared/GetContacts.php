<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetContacts
{
    /**
     * $contacts
     * 
     * @var array<\test\BREVO\Models\Shared\GetContactsContacts> $contacts
     */
	#[\JMS\Serializer\Annotation\SerializedName('contacts')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetContactsContacts>')]
    public array $contacts;
    
    /**
     * Number of contacts
     * 
     * @var int $count
     */
	#[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $count;
    
	public function __construct()
	{
		$this->contacts = [];
		$this->count = 0;
	}
}