<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * ManageIp - IP to associate
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class ManageIp
{
    /**
     * Dedicated ID
     * 
     * @var ?string $ip
     */
	#[\JMS\Serializer\Annotation\SerializedName('ip')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ip = null;
    
	public function __construct()
	{
		$this->ip = null;
	}
}
