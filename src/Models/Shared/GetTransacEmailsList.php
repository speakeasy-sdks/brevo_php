<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetTransacEmailsList
{
    /**
     * Total number of transactional emails available on your account according to the passed filter
     * 
     * @var ?int $count
     */
	#[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $count = null;
    
    /**
     * $transactionalEmails
     * 
     * @var ?array<\test\BREVO\Models\Shared\TransactionalEmails> $transactionalEmails
     */
	#[\JMS\Serializer\Annotation\SerializedName('transactionalEmails')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\TransactionalEmails>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $transactionalEmails = null;
    
	public function __construct()
	{
		$this->count = null;
		$this->transactionalEmails = null;
	}
}
