<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetAllExternalFeeds
{
    /**
     * Total number of batches
     * 
     * @var ?int $count
     */
	#[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $count = null;
    
    /**
     * $feeds
     * 
     * @var ?array<\test\BREVO\Models\Shared\Feeds> $feeds
     */
	#[\JMS\Serializer\Annotation\SerializedName('feeds')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\Feeds>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $feeds = null;
    
	public function __construct()
	{
		$this->count = null;
		$this->feeds = null;
	}
}
