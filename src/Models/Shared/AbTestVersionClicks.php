<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class AbTestVersionClicks
{
    /**
     * Percentage of clicks of link with respect to total clicks
     * 
     * @var string $clickRate
     */
	#[\JMS\Serializer\Annotation\SerializedName('clickRate')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $clickRate;
    
    /**
     * Number of times a link is clicked
     * 
     * @var int $clicksCount
     */
	#[\JMS\Serializer\Annotation\SerializedName('clicksCount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $clicksCount;
    
    /**
     * URL of the link
     * 
     * @var string $link
     */
	#[\JMS\Serializer\Annotation\SerializedName('link')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $link;
    
	public function __construct()
	{
		$this->clickRate = "";
		$this->clicksCount = 0;
		$this->link = "";
	}
}
