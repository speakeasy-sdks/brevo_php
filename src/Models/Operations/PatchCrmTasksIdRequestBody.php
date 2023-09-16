<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/**
 * PatchCrmTasksIdRequestBody - Updated task details.
 * 
 * @package test\BREVO\Models\Operations
 * @access public
 */
class PatchCrmTasksIdRequestBody
{
    /**
     * User id to whom task is assigned
     * 
     * @var ?string $assignToId
     */
	#[\JMS\Serializer\Annotation\SerializedName('assignToId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $assignToId = null;
    
    /**
     * Companies ids for companies a task is linked to
     * 
     * @var ?array<string> $companiesIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('companiesIds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $companiesIds = null;
    
    /**
     * Contact ids for contacts linked to this task
     * 
     * @var ?array<int> $contactsIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('contactsIds')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $contactsIds = null;
    
    /**
     * Task date/time
     * 
     * @var ?\DateTime $date
     */
	#[\JMS\Serializer\Annotation\SerializedName('date')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $date = null;
    
    /**
     * Deal ids for deals a task is linked to
     * 
     * @var ?array<string> $dealsIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('dealsIds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $dealsIds = null;
    
    /**
     * Task marked as done
     * 
     * @var ?bool $done
     */
	#[\JMS\Serializer\Annotation\SerializedName('done')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $done = null;
    
    /**
     * Duration of task in milliseconds [1 minute = 60000 ms]
     * 
     * @var ?int $duration
     */
	#[\JMS\Serializer\Annotation\SerializedName('duration')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $duration = null;
    
    /**
     * Name of task
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * Notes added to a task
     * 
     * @var ?string $notes
     */
	#[\JMS\Serializer\Annotation\SerializedName('notes')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $notes = null;
    
    /**
     * Task reminder date/time for a task
     * 
     * @var ?\test\BREVO\Models\Shared\TaskReminder $reminder
     */
	#[\JMS\Serializer\Annotation\SerializedName('reminder')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\TaskReminder')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\test\BREVO\Models\Shared\TaskReminder $reminder = null;
    
    /**
     * Id for type of task e.g Call / Email / Meeting etc.
     * 
     * @var ?string $taskTypeId
     */
	#[\JMS\Serializer\Annotation\SerializedName('taskTypeId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $taskTypeId = null;
    
	public function __construct()
	{
		$this->assignToId = null;
		$this->companiesIds = null;
		$this->contactsIds = null;
		$this->date = null;
		$this->dealsIds = null;
		$this->done = null;
		$this->duration = null;
		$this->name = null;
		$this->notes = null;
		$this->reminder = null;
		$this->taskTypeId = null;
	}
}