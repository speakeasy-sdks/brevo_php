<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetIps
{
    /**
     * Dedicated IP(s) available on your account
     * 
     * @var array<\test\BREVO\Models\Shared\GetIp> $ips
     */
	#[\JMS\Serializer\Annotation\SerializedName('ips')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetIp>')]
    public array $ips;
    
	public function __construct()
	{
		$this->ips = [];
	}
}
