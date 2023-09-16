<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/**
 * PostCrmDeals201ApplicationJSON - Created deal id
 * 
 * @package test\BREVO\Models\Operations
 * @access public
 */
class PostCrmDeals201ApplicationJSON
{
    /**
     * Unique deal id
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
	public function __construct()
	{
		$this->id = "";
	}
}