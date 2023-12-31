<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetSsoToken
{
    /**
     * Session token, it will remain valid for 15 days.
     * 
     * @var string $token
     */
	#[\JMS\Serializer\Annotation\SerializedName('token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $token;
    
	public function __construct()
	{
		$this->token = "";
	}
}
