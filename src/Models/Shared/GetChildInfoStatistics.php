<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * GetChildInfoStatistics - Statistics about your child account activity
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class GetChildInfoStatistics
{
    /**
     * Overall emails sent for current month
     * 
     * @var ?int $currentMonthTotalSent
     */
	#[\JMS\Serializer\Annotation\SerializedName('currentMonthTotalSent')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $currentMonthTotalSent = null;
    
    /**
     * Overall emails sent for the previous month
     * 
     * @var ?int $previousMonthTotalSent
     */
	#[\JMS\Serializer\Annotation\SerializedName('previousMonthTotalSent')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $previousMonthTotalSent = null;
    
    /**
     * Overall emails sent for since the account exists
     * 
     * @var ?int $totalSent
     */
	#[\JMS\Serializer\Annotation\SerializedName('totalSent')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $totalSent = null;
    
	public function __construct()
	{
		$this->currentMonthTotalSent = null;
		$this->previousMonthTotalSent = null;
		$this->totalSent = null;
	}
}
