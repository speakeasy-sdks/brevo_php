<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class RequestContactExport
{
    /**
     * Set the filter for the contacts to be exported.
     * 
     * 
     * 
     * @var \test\BREVO\Models\Shared\CustomContactFilter $customContactFilter
     */
	#[\JMS\Serializer\Annotation\SerializedName('customContactFilter')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\CustomContactFilter')]
    public CustomContactFilter $customContactFilter;
    
    /**
     * List of all the attributes that you want to export. **These attributes must be present in your contact database.** For example:
     * 
     * **['fname', 'lname', 'email']**
     * 
     * 
     * @var ?array<string> $exportAttributes
     */
	#[\JMS\Serializer\Annotation\SerializedName('exportAttributes')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $exportAttributes = null;
    
    /**
     * Webhook that will be called once the export process is finished. For reference, https://help.brevo.com/hc/en-us/articles/360007666479
     * 
     * @var ?string $notifyUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('notifyUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $notifyUrl = null;
    
	public function __construct()
	{
		$this->customContactFilter = new \test\BREVO\Models\Shared\CustomContactFilter();
		$this->exportAttributes = null;
		$this->notifyUrl = null;
	}
}
