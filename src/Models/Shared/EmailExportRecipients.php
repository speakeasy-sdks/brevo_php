<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class EmailExportRecipients
{
    /**
     * Webhook called once the export process is finished. For reference, https://help.brevo.com/hc/en-us/articles/360007666479
     * 
     * @var ?string $notifyURL
     */
	#[\JMS\Serializer\Annotation\SerializedName('notifyURL')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $notifyURL = null;
    
    /**
     * Type of recipients to export for a campaign
     * 
     * @var \test\BREVO\Models\Shared\RecipientsType $recipientsType
     */
	#[\JMS\Serializer\Annotation\SerializedName('recipientsType')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\RecipientsType>')]
    public RecipientsType $recipientsType;
    
	public function __construct()
	{
		$this->notifyURL = null;
		$this->recipientsType = \test\BREVO\Models\Shared\RecipientsType::All;
	}
}
