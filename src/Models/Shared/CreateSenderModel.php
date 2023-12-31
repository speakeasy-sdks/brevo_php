<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class CreateSenderModel
{
    /**
     * Status of DKIM configuration for the sender (true = DKIM not well configured, false = DKIM well configured)
     * 
     * @var ?bool $dkimError
     */
	#[\JMS\Serializer\Annotation\SerializedName('dkimError')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $dkimError = null;
    
    /**
     * ID of the Sender created
     * 
     * @var int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
    /**
     * Status of SPF configuration for the sender (true = SPF not well configured, false = SPF well configured)
     * 
     * @var ?bool $spfError
     */
	#[\JMS\Serializer\Annotation\SerializedName('spfError')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $spfError = null;
    
	public function __construct()
	{
		$this->dkimError = null;
		$this->id = 0;
		$this->spfError = null;
	}
}
