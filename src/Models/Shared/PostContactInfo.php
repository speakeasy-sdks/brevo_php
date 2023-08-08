<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * PostContactInfo - All contacts have been added successfully to the list with details of failed ones
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class PostContactInfo
{
	#[\JMS\Serializer\Annotation\SerializedName('contacts')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\PostContactInfoContacts')]
    public PostContactInfoContacts $contacts;
    
	public function __construct()
	{
		$this->contacts = new \test\BREVO\Models\Shared\PostContactInfoContacts();
	}
}
