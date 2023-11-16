<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * Relay - Information about your transactional email account
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class Relay
{
    /**
     * Data regarding the transactional email account
     * 
     * @var \test\BREVO\Models\Shared\Data $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\Data')]
    public Data $data;
    
    /**
     * Status of your transactional email Account (true=Enabled, false=Disabled)
     * 
     * @var bool $enabled
     */
	#[\JMS\Serializer\Annotation\SerializedName('enabled')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $enabled;
    
	public function __construct()
	{
		$this->data = new \test\BREVO\Models\Shared\Data();
		$this->enabled = false;
	}
}
