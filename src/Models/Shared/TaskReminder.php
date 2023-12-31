<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * TaskReminder - Task reminder date/time for a task
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class TaskReminder
{
    /**
     * Type of task reminder e.g email, push
     * 
     * @var array<\test\BREVO\Models\Shared\Types> $types
     */
	#[\JMS\Serializer\Annotation\SerializedName('types')]
    #[\JMS\Serializer\Annotation\Type('array<enum<test\BREVO\Models\Shared\Types>>')]
    public array $types;
    
    /**
     * Unit of time before reminder is to be sent
     * 
     * @var \test\BREVO\Models\Shared\Unit $unit
     */
	#[\JMS\Serializer\Annotation\SerializedName('unit')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\Unit>')]
    public Unit $unit;
    
    /**
     * Value of time unit before reminder is to be sent
     * 
     * @var int $value
     */
	#[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $value;
    
	public function __construct()
	{
		$this->types = [];
		$this->unit = \test\BREVO\Models\Shared\Unit::Minutes;
		$this->value = 0;
	}
}
