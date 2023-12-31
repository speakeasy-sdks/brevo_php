<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/**
 * PatchCrmDealsIdRequestBody - Updated deal details.
 * 
 * @package test\BREVO\Models\Operations
 * @access public
 */
class PatchCrmDealsIdRequestBody
{
    /**
     * Attributes for deal update
     * 
     * 
     * If you wish to update the pipeline of a deal you need to provide the `pipeline` and the `deal_stage`
     * 
     * Pipeline and deal_stage are ids you can fetch using this endpoint `/crm/pipeline/details/{pipelineID}`
     * 
     * 
     * @var ?\test\BREVO\Models\Operations\PatchCrmDealsIdAttributes $attributes
     */
	#[\JMS\Serializer\Annotation\SerializedName('attributes')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Operations\PatchCrmDealsIdAttributes')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PatchCrmDealsIdAttributes $attributes = null;
    
    /**
     * Name of deal
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	public function __construct()
	{
		$this->attributes = null;
		$this->name = null;
	}
}
