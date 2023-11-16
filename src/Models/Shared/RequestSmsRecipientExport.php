<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class RequestSmsRecipientExport
{
    /**
     * URL that will be called once the export process is finished. For reference, https://help.brevo.com/hc/en-us/articles/360007666479
     * 
     * @var ?string $notifyURL
     */
	#[\JMS\Serializer\Annotation\SerializedName('notifyURL')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $notifyURL = null;
    
    /**
     * Filter the recipients based on how they interacted with the campaign
     * 
     * @var \test\BREVO\Models\Shared\RequestSmsRecipientExportRecipientsType $recipientsType
     */
	#[\JMS\Serializer\Annotation\SerializedName('recipientsType')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\RequestSmsRecipientExportRecipientsType>')]
    public RequestSmsRecipientExportRecipientsType $recipientsType;
    
	public function __construct()
	{
		$this->notifyURL = null;
		$this->recipientsType = \test\BREVO\Models\Shared\RequestSmsRecipientExportRecipientsType::All;
	}
}
