<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetDomainConfigurationModelDnsRecords
{
	#[\JMS\Serializer\Annotation\SerializedName('brevo_code')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\GetDomainConfigurationModelBrevoCode')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetDomainConfigurationModelBrevoCode $brevoCode = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('dkim_record')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\GetDomainConfigurationModelDkimRecord')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetDomainConfigurationModelDkimRecord $dkimRecord = null;
    
	public function __construct()
	{
		$this->brevoCode = null;
		$this->dkimRecord = null;
	}
}
