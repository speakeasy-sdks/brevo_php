<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * Child - Credits remaining for child account
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class Child
{
    /**
     * Email Credits remaining for child account
     * 
     * @var float $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $email;
    
    /**
     * SMS Credits remaining for child account
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
