<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * CreateReseller - child created
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class CreateReseller
{
    /**
     * AuthKey of Reseller child created
     * 
     * @var string $authKey
     */
	#[\JMS\Serializer\Annotation\SerializedName('authKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $authKey;
    
    /**
     * Id of Reseller child created
     * 
     * @var ?int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $id = null;
    
	public function __construct()
	{
		$this->authKey = "";
		$this->id = null;
	}
}
