<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetIpsFromSender
{
    /**
     * Dedicated IP(s) linked to a sender
     * 
     * @var array<\test\BREVO\Models\Shared\GetIpFromSender> $ips
     */
	#[\JMS\Serializer\Annotation\SerializedName('ips')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetIpFromSender>')]
    public array $ips;
    
	public function __construct()
	{
		$this->ips = [];
	}
}
