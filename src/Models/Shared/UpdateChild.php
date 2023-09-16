<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class UpdateChild
{
    /**
     * New Company name to use to update the child account
     * 
     * @var ?string $companyName
     */
	#[\JMS\Serializer\Annotation\SerializedName('companyName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyName = null;
    
    /**
     * New Email address to update the child account
     * 
     * @var ?string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
    /**
     * New First name to use to update the child account
     * 
     * @var ?string $firstName
     */
	#[\JMS\Serializer\Annotation\SerializedName('firstName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $firstName = null;
    
    /**
     * New Last name to use to update the child account
     * 
     * @var ?string $lastName
     */
	#[\JMS\Serializer\Annotation\SerializedName('lastName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $lastName = null;
    
    /**
     * New password for the child account to login
     * 
     * @var ?string $password
     */
	#[\JMS\Serializer\Annotation\SerializedName('password')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $password = null;
    
	public function __construct()
	{
		$this->companyName = null;
		$this->email = null;
		$this->firstName = null;
		$this->lastName = null;
		$this->password = null;
	}
}