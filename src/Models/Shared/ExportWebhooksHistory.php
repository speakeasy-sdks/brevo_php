<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class ExportWebhooksHistory
{
    /**
     * Number of days in the past including today (positive integer). _Not compatible with 'startDate' and 'endDate'_
     * 
     * @var ?int $days
     */
	#[\JMS\Serializer\Annotation\SerializedName('days')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $days = null;
    
    /**
     * Filter the history for a specific email
     * 
     * @var ?string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
    /**
     * Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
     * 
     * @var ?string $endDate
     */
	#[\JMS\Serializer\Annotation\SerializedName('endDate')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $endDate = null;
    
    /**
     * Filter the history for a specific event type
     * 
     * @var \test\BREVO\Models\Shared\ExportWebhooksHistoryEvent $event
     */
	#[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\ExportWebhooksHistoryEvent>')]
    public ExportWebhooksHistoryEvent $event;
    
    /**
     * Filter the history for a specific message id
     * 
     * @var ?int $messageId
     */
	#[\JMS\Serializer\Annotation\SerializedName('messageId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $messageId = null;
    
    /**
     * Webhook URL to receive CSV file link
     * 
     * @var string $notifyURL
     */
	#[\JMS\Serializer\Annotation\SerializedName('notifyURL')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $notifyURL;
    
    /**
     * Sorting order of records (asc or desc)
     * 
     * @var ?string $sort
     */
	#[\JMS\Serializer\Annotation\SerializedName('sort')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $sort = null;
    
    /**
     * Mandatory if endDate is used. Starting date of the history (YYYY-MM-DD). Must be lower than equal to endDate
     * 
     * @var ?string $startDate
     */
	#[\JMS\Serializer\Annotation\SerializedName('startDate')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $startDate = null;
    
    /**
     * Filter the history for a specific webhook id
     * 
     * @var ?int $webhookId
     */
	#[\JMS\Serializer\Annotation\SerializedName('webhookId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $webhookId = null;
    
	public function __construct()
	{
		$this->days = null;
		$this->email = null;
		$this->endDate = null;
		$this->event = \test\BREVO\Models\Shared\ExportWebhooksHistoryEvent::InvalidParameter;
		$this->messageId = null;
		$this->notifyURL = "";
		$this->sort = null;
		$this->startDate = null;
		$this->webhookId = null;
	}
}