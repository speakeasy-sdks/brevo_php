<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class Reseller
{
    /**
     * Email Credits remaining for reseller account
     * 
     * @var float $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $email;
    
    /**
     * SMS Credits remaining for reseller account
     * 
     * @var float $sms
     */
	#[\JMS\Serializer\Annotation\SerializedName('sms')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $sms;
    
	public function __construct()
	{
		$this->email = 0;
		$this->sms = 0;
	}
}
