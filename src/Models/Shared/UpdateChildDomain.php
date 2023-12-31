<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class UpdateChildDomain
{
    /**
     * Value for the sender domain that will replace the existing domain
     * 
     * @var ?string $domain
     */
	#[\JMS\Serializer\Annotation\SerializedName('domain')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $domain = null;
    
	public function __construct()
	{
		$this->domain = null;
	}
}
