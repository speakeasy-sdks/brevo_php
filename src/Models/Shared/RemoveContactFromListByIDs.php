<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class RemoveContactFromListByIDs
{
    /**
     * **Required if 'all' is false and 'emails' is empty.** IDs to remove from a list. You can pass a **maximum of 150 IDs** for removal in one request.
     * 
     * 
     * 
     * @var ?array<int> $ids
     */
	#[\JMS\Serializer\Annotation\SerializedName('ids')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $ids = null;
    
	public function __construct()
	{
		$this->ids = null;
	}
}
