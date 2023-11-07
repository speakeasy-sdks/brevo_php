<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class Webhooks
{
    /**
     * Creation UTC date-time of the webhook (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
    /**
     * Description of the webhook
     * 
     * @var string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    /**
     * $events
     * 
     * @var array<string> $events
     */
	#[\JMS\Serializer\Annotation\SerializedName('events')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $events;
    
    /**
     * ID of the webhook
     * 
     * @var int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
    /**
     * Last modification UTC date-time of the webhook (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $modifiedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('modifiedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $modifiedAt;
    
    /**
     * Type of webhook (marketing or transactional)
     * 
     * @var \test\BREVO\Models\Shared\GetWebhooksType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\GetWebhooksType>')]
    public GetWebhooksType $type;
    
    /**
     * URL of the webhook
     * 
     * @var string $url
     */
	#[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $url;
    
	public function __construct()
	{
		$this->createdAt = "";
		$this->description = "";
		$this->events = [];
		$this->id = 0;
		$this->modifiedAt = "";
		$this->type = \test\BREVO\Models\Shared\GetWebhooksType::Marketing;
		$this->url = "";
	}
}