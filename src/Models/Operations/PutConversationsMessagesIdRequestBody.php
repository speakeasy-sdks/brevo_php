<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


class PutConversationsMessagesIdRequestBody
{
    /**
     * edited message text
     * 
     * @var string $text
     */
	#[\JMS\Serializer\Annotation\SerializedName('text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $text;
    
	public function __construct()
	{
		$this->text = "";
	}
}
