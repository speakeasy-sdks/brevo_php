<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class RequestContactImportJsonBody
{
    /**
     * List of attributes to be imported
     * 
     * @var ?array<string, mixed> $attributes
     */
	#[\JMS\Serializer\Annotation\SerializedName('attributes')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $attributes = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
	public function __construct()
	{
		$this->attributes = null;
		$this->email = null;
	}
}
