<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class Users
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
     * Feature accessiblity given to the user.
     * 
     * @var \test\BREVO\Models\Shared\FeatureAccess $featureAccess
     */
	#[\JMS\Serializer\Annotation\SerializedName('feature_access')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\FeatureAccess')]
    public FeatureAccess $featureAccess;
    
    /**
     * Flag for indicating is user owner of the organization.
     * 
     * @var string $isOwner
     */
	#[\JMS\Serializer\Annotation\SerializedName('is_owner')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $isOwner;
    
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
		$this->featureAccess = new \test\BREVO\Models\Shared\FeatureAccess();
		$this->isOwner = "";
		$this->status = "";
	}
}
