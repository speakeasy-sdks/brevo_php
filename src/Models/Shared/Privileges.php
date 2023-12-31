<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class Privileges
{
	#[\JMS\Serializer\Annotation\SerializedName('feature')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $feature;
    
    /**
     * $permissions
     * 
     * @var array<string> $permissions
     */
	#[\JMS\Serializer\Annotation\SerializedName('permissions')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $permissions;
    
	public function __construct()
	{
		$this->feature = "";
		$this->permissions = [];
	}
}
