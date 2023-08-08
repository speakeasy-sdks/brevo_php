<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetDomainsListDomains
{
    /**
     * Status of domain authentication (true=authenticated, false=non authenticated)
     * 
     * @var bool $authenticated
     */
	#[\JMS\Serializer\Annotation\SerializedName('authenticated')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $authenticated;
    
    /**
     * Domain name
     * 
     * @var string $domainName
     */
	#[\JMS\Serializer\Annotation\SerializedName('domain_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $domainName;
    
    /**
     * Id of the domain
     * 
     * @var int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
    /**
     * Dedicated IP associated with domain
     * 
     * @var ?string $ip
     */
	#[\JMS\Serializer\Annotation\SerializedName('ip')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ip = null;
    
    /**
     * Status of domain verification (true=verified, false=non verified)
     * 
     * @var bool $verified
     */
	#[\JMS\Serializer\Annotation\SerializedName('verified')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $verified;
    
	public function __construct()
	{
		$this->authenticated = false;
		$this->domainName = "";
		$this->id = 0;
		$this->ip = null;
		$this->verified = false;
	}
}
