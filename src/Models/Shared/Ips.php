<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class Ips
{
    /**
     * Domain of the IP
     * 
     * @var string $domain
     */
	#[\JMS\Serializer\Annotation\SerializedName('domain')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $domain;
    
    /**
     * Dedicated IP available in your account
     * 
     * @var string $ip
     */
	#[\JMS\Serializer\Annotation\SerializedName('ip')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $ip;
    
    /**
     * Weight to apply to the IP. Sum of all IP weights must be 100. Should be passed for either ALL or NONE of the IPs. If it's not passed, the sending will be equally balanced on all IPs.
     * 
     * @var ?int $weight
     */
	#[\JMS\Serializer\Annotation\SerializedName('weight')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $weight = null;
    
	public function __construct()
	{
		$this->domain = "";
		$this->ip = "";
		$this->weight = null;
	}
}
