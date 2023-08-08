<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * CreateUpdateBatchProducts - Values to create a batch of products
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class CreateUpdateBatchProducts
{
    /**
     * array of products objects
     * 
     * @var array<\test\BREVO\Models\Shared\CreateUpdateProducts> $products
     */
	#[\JMS\Serializer\Annotation\SerializedName('products')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\CreateUpdateProducts>')]
    public array $products;
    
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
		$this->products = [];
		$this->updateEnabled = null;
	}
}
