<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * GetUserPermission - Check user permission
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class GetUserPermission
{
    /**
     * Email address of the user.
     * 
     * @var string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
    /**
     * Granular feature permissions given to the user.
     * 
     * @var array<\test\BREVO\Models\Shared\Privileges> $privileges
     */
	#[\JMS\Serializer\Annotation\SerializedName('privileges')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\Privileges>')]
    public array $privileges;
    
    /**
     * Status of the invited user.
     * 
     * @var string $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $status;
    
	public function __construct()
	{
		$this->email = "";
		$this->privileges = [];
		$this->status = "";
	}
}
