<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetCategories
{
    /**
     * $categories
     * 
     * @var array<\test\BREVO\Models\Shared\GetCategoriesCategories> $categories
     */
	#[\JMS\Serializer\Annotation\SerializedName('categories')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetCategoriesCategories>')]
    public array $categories;
    
    /**
     * Number of categories
     * 
     * @var int $count
     */
	#[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $count;
    
	public function __construct()
	{
		$this->categories = [];
		$this->count = 0;
	}
}
