<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class Lists
{
    /**
     * ID of the list
     * 
     * @var int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
    /**
     * Name of the list
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * Number of blacklisted contacts in the list
     * 
     * @var int $totalBlacklisted
     */
	#[\JMS\Serializer\Annotation\SerializedName('totalBlacklisted')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalBlacklisted;
    
    /**
     * Number of contacts in the list
     * 
     * @var int $totalSubscribers
     */
	#[\JMS\Serializer\Annotation\SerializedName('totalSubscribers')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalSubscribers;
    
    /**
     * Number of unique contacts in the list
     * 
     * @var int $uniqueSubscribers
     */
	#[\JMS\Serializer\Annotation\SerializedName('uniqueSubscribers')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $uniqueSubscribers;
    
	public function __construct()
	{
		$this->id = 0;
		$this->name = "";
		$this->totalBlacklisted = 0;
		$this->totalSubscribers = 0;
		$this->uniqueSubscribers = 0;
	}
}
