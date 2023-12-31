<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class DnsRecords
{
	#[\JMS\Serializer\Annotation\SerializedName('brevo_code')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\BrevoCode')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?BrevoCode $brevoCode = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('dkim_record')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\DkimRecord')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?DkimRecord $dkimRecord = null;
    
	public function __construct()
	{
		$this->brevoCode = null;
		$this->dkimRecord = null;
	}
}
