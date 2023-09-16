<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetFolders
{
    /**
     * Number of folders available in your account
     * 
     * @var ?int $count
     */
	#[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $count = null;
    
    /**
     * $folders
     * 
     * @var ?array<\test\BREVO\Models\Shared\GetFoldersFolders> $folders
     */
	#[\JMS\Serializer\Annotation\SerializedName('folders')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetFoldersFolders>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $folders = null;
    
	public function __construct()
	{
		$this->count = null;
		$this->folders = null;
	}
}
