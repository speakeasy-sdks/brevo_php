<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * GetAccountAddress - Address informations
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class GetAccountAddress
{
    /**
     * City information
     * 
     * @var string $city
     */
	#[\JMS\Serializer\Annotation\SerializedName('city')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $city;
    
    /**
     * Country information
     * 
     * @var string $country
     */
	#[\JMS\Serializer\Annotation\SerializedName('country')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $country;
    
    /**
     * Street information
     * 
     * @var string $street
     */
	#[\JMS\Serializer\Annotation\SerializedName('street')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $street;
    
    /**
     * Zip Code information
     * 
     * @var string $zipCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('zipCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $zipCode;
    
	public function __construct()
	{
		$this->city = "";
		$this->country = "";
		$this->street = "";
		$this->zipCode = "";
	}
}
