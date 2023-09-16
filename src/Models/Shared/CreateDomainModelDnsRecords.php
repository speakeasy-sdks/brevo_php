<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class CreateDomainModelDnsRecords
{
	#[\JMS\Serializer\Annotation\SerializedName('brevo_code')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\CreateDomainModelDnsRecordsBrevoCode')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateDomainModelDnsRecordsBrevoCode $brevoCode = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('dkim_record')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\CreateDomainModelDnsRecordsDkimRecord')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateDomainModelDnsRecordsDkimRecord $dkimRecord = null;
    
	public function __construct()
	{
		$this->brevoCode = null;
		$this->dkimRecord = null;
	}
}