<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetSmtpTemplates
{
    /**
     * Count of transactional email templates
     * 
     * @var ?int $count
     */
	#[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $count = null;
    
    /**
     * $templates
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetSmtpTemplateOverview> $templates
     */
	#[\JMS\Serializer\Annotation\SerializedName('templates')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetSmtpTemplateOverview>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $templates = null;
    
	public function __construct()
	{
		$this->count = null;
		$this->templates = null;
	}
}
