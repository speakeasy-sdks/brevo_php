<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * CreateDoiContact - Values to create the Double opt-in (DOI) contact
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class CreateDoiContact
{
    /**
     * Pass the set of attributes and their values. **These attributes must be present in your Brevo account**. For eg. **{'FNAME':'Elly', 'LNAME':'Roger'}**
     * 
     * 
     * 
     * @var ?array<string, mixed> $attributes
     */
	#[\JMS\Serializer\Annotation\SerializedName('attributes')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $attributes = null;
    
    /**
     * Email address where the confirmation email will be sent. This email address will be the identifier for all other contact attributes.
     * 
     * @var string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
    /**
     * Lists under user account where contact should not be added
     * 
     * @var ?array<int> $excludeListIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('excludeListIds')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $excludeListIds = null;
    
    /**
     * Lists under user account where contact should be added
     * 
     * @var array<int> $includeListIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('includeListIds')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    public array $includeListIds;
    
    /**
     * URL of the web page that user will be redirected to after clicking on the double opt in URL. When editing your DOI template you can reference this URL by using the tag **{{ params.DOIurl }}**.
     * 
     * 
     * 
     * @var string $redirectionUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('redirectionUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $redirectionUrl;
    
    /**
     * Id of the Double opt-in (DOI) template
     * 
     * @var int $templateId
     */
	#[\JMS\Serializer\Annotation\SerializedName('templateId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $templateId;
    
	public function __construct()
	{
		$this->attributes = null;
		$this->email = "";
		$this->excludeListIds = null;
		$this->includeListIds = [];
		$this->redirectionUrl = "";
		$this->templateId = 0;
	}
}
