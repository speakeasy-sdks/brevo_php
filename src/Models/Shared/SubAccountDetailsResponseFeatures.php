<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * SubAccountDetailsResponseFeatures - Features available on the sub-account
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class SubAccountDetailsResponseFeatures
{
    /**
     * Inbox details
     * 
     * @var ?\test\BREVO\Models\Shared\Inbox $inbox
     */
	#[\JMS\Serializer\Annotation\SerializedName('inbox')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\Inbox')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Inbox $inbox = null;
    
    /**
     * Landing page details
     * 
     * @var ?\test\BREVO\Models\Shared\LandingPage $landingPage
     */
	#[\JMS\Serializer\Annotation\SerializedName('landingPage')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\LandingPage')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?LandingPage $landingPage = null;
    
    /**
     * Multi-account details
     * 
     * @var ?\test\BREVO\Models\Shared\SubAccountDetailsResponseUsers $users
     */
	#[\JMS\Serializer\Annotation\SerializedName('users')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\SubAccountDetailsResponseUsers')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SubAccountDetailsResponseUsers $users = null;
    
	public function __construct()
	{
		$this->inbox = null;
		$this->landingPage = null;
		$this->users = null;
	}
}