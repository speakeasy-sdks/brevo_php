<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class CreateDomainModel
{
	#[\JMS\Serializer\Annotation\SerializedName('dns_records')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\DnsRecords')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?DnsRecords $dnsRecords = null;
    
    /**
     * Domain
     * 
     * @var ?string $domainName
     */
	#[\JMS\Serializer\Annotation\SerializedName('domain_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $domainName = null;
    
    /**
     * ID of the Domain created
     * 
     * @var int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
    /**
     * Success message
     * 
     * @var ?string $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
	public function __construct()
	{
		$this->dnsRecords = null;
		$this->domainName = null;
		$this->id = 0;
		$this->message = null;
	}
}
