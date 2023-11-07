<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class MasterDetailsResponseFeatures
{
    /**
     * Name of the feature
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * Quantity provided in the plan
     * 
     * @var ?int $quantity
     */
	#[\JMS\Serializer\Annotation\SerializedName('quantity')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $quantity = null;
    
    /**
     * Quantity remaining in the plan
     * 
     * @var ?int $remaining
     */
	#[\JMS\Serializer\Annotation\SerializedName('remaining')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $remaining = null;
    
    /**
     * Unit value of the feature
     * 
     * @var ?string $unitValue
     */
	#[\JMS\Serializer\Annotation\SerializedName('unitValue')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $unitValue = null;
    
    /**
     * Quantity consumed by master
     * 
     * @var ?int $used
     */
	#[\JMS\Serializer\Annotation\SerializedName('used')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $used = null;
    
	public function __construct()
	{
		$this->name = null;
		$this->quantity = null;
		$this->remaining = null;
		$this->unitValue = null;
		$this->used = null;
	}
}