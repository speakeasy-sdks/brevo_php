<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class CreatedProcessId
{
    /**
     * Id of the process created
     * 
     * @var int $processId
     */
	#[\JMS\Serializer\Annotation\SerializedName('processId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $processId;
    
	public function __construct()
	{
		$this->processId = 0;
	}
}