<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * Task - Task Details
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class Task
{
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
     * Deal ids for deals a task is linked to
     * 
     * @var ?array<string> $dealsIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('dealsIds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $dealsIds = null;
    
    /**
     * Unique task id
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * Name of task
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * Id for type of task e.g Call / Email / Meeting etc.
     * 
     * @var string $taskTypeId
     */
	#[\JMS\Serializer\Annotation\SerializedName('taskTypeId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $taskTypeId;
    
	public function __construct()
	{
		$this->companiesIds = null;
		$this->contactsIds = null;
		$this->dealsIds = null;
		$this->id = null;
		$this->name = "";
		$this->taskTypeId = "";
	}
}