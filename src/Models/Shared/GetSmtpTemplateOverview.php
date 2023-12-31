<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetSmtpTemplateOverview
{
    /**
     * Creation UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
    /**
     * It is true if template is a valid Double opt-in (DOI) template, otherwise it is false. This field will be available only in case of single template detail call.
     * 
     * @var ?bool $doiTemplate
     */
	#[\JMS\Serializer\Annotation\SerializedName('doiTemplate')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $doiTemplate = null;
    
    /**
     * HTML content of the template
     * 
     * @var string $htmlContent
     */
	#[\JMS\Serializer\Annotation\SerializedName('htmlContent')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $htmlContent;
    
    /**
     * ID of the template
     * 
     * @var int $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
    /**
     * Status of template (true=active, false=inactive)
     * 
     * @var bool $isActive
     */
	#[\JMS\Serializer\Annotation\SerializedName('isActive')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $isActive;
    
    /**
     * Last modification UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * 
     * @var string $modifiedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('modifiedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $modifiedAt;
    
    /**
     * Name of the template
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * Email defined as the "Reply to" for the template
     * 
     * @var string $replyTo
     */
	#[\JMS\Serializer\Annotation\SerializedName('replyTo')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $replyTo;
    
	#[\JMS\Serializer\Annotation\SerializedName('sender')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\GetSmtpTemplateOverviewSender')]
    public GetSmtpTemplateOverviewSender $sender;
    
    /**
     * Subject of the template
     * 
     * @var string $subject
     */
	#[\JMS\Serializer\Annotation\SerializedName('subject')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $subject;
    
    /**
     * Tag of the template
     * 
     * @var string $tag
     */
	#[\JMS\Serializer\Annotation\SerializedName('tag')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $tag;
    
    /**
     * Status of test sending for the template (true=test email has been sent, false=test email has not been sent)
     * 
     * @var bool $testSent
     */
	#[\JMS\Serializer\Annotation\SerializedName('testSent')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $testSent;
    
    /**
     * Customisation of the "to" field for the template
     * 
     * @var string $toField
     */
	#[\JMS\Serializer\Annotation\SerializedName('toField')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $toField;
    
	public function __construct()
	{
		$this->createdAt = "";
		$this->doiTemplate = null;
		$this->htmlContent = "";
		$this->id = 0;
		$this->isActive = false;
		$this->modifiedAt = "";
		$this->name = "";
		$this->replyTo = "";
		$this->sender = new \test\BREVO\Models\Shared\GetSmtpTemplateOverviewSender();
		$this->subject = "";
		$this->tag = "";
		$this->testSent = false;
		$this->toField = "";
	}
}
