<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class CreateUpdateBatchCategory
{
    /**
     * array of categories objects
     * 
     * @var array<\test\BREVO\Models\Shared\CreateUpdateCategories> $categories
     */
	#[\JMS\Serializer\Annotation\SerializedName('categories')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\CreateUpdateCategories>')]
    public array $categories;
    
    /**
     * Facilitate to update the existing categories in the same request (updateEnabled = true)
     * 
     * @var ?bool $updateEnabled
     */
	#[\JMS\Serializer\Annotation\SerializedName('updateEnabled')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $updateEnabled = null;
    
	public function __construct()
	{
		$this->categories = [];
		$this->updateEnabled = null;
	}
}