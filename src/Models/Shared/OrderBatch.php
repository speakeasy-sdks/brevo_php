<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class OrderBatch
{
    /**
     * Notify Url provided by client to get the status of batch request
     * 
     * @var ?string $notifyUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('notifyUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $notifyUrl = null;
    
    /**
     * array of order objects
     * 
     * @var array<\test\BREVO\Models\Shared\Order> $orders
     */
	#[\JMS\Serializer\Annotation\SerializedName('orders')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\Order>')]
    public array $orders;
    
	public function __construct()
	{
		$this->notifyUrl = null;
		$this->orders = [];
	}
}
