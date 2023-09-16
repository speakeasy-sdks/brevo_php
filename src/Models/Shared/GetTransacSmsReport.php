<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetTransacSmsReport
{
    /**
     * $reports
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetTransacSmsReportReports> $reports
     */
	#[\JMS\Serializer\Annotation\SerializedName('reports')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetTransacSmsReportReports>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $reports = null;
    
	public function __construct()
	{
		$this->reports = null;
	}
}
