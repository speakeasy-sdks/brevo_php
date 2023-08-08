<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * SendSmtpEmail - Values to send a transactional email
 * 
 * @package test\BREVO\Models\Shared
 * @access public
 */
class SendSmtpEmail
{
    /**
     * Pass the _absolute URL_ (**no local file**) or the _base64 content_ of the attachment along with the attachment name. **Mandatory if attachment content is passed**. For example,
     * 
     * **[{"url":"https://attachment.domain.com/myAttachmentFromUrl.jpg", "name":"myAttachmentFromUrl.jpg"}, {"content":"base64 example content", "name":"myAttachmentFromBase64.jpg"}]**.
     * Allowed extensions for attachment file:
     * #### xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub, eps, odt, mp3, m4a, m4v, wma, ogg, flac, wav, aif, aifc, aiff, mp4, mov, avi, mkv, mpeg, mpg, wmv, pkpass and xlsm.
     * If `templateId` is passed and is in New Template Language format then both attachment url and content are accepted. If template is in Old template Language format, then `attachment` is ignored
     * 
     * 
     * @var ?array<\test\BREVO\Models\Shared\SendSmtpEmailAttachment> $attachment
     */
	#[\JMS\Serializer\Annotation\SerializedName('attachment')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\SendSmtpEmailAttachment>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $attachment = null;
    
    /**
     * Valid UUIDv4 batch id to identify the scheduled batches transactional email. If not passed we will create a valid UUIDv4 batch id at our end.
     * 
     * @var ?string $batchId
     */
	#[\JMS\Serializer\Annotation\SerializedName('batchId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $batchId = null;
    
    /**
     * List of email addresses and names (_optional_) of the recipients in bcc
     * 
     * 
     * 
     * @var ?array<\test\BREVO\Models\Shared\SendSmtpEmailBcc> $bcc
     */
	#[\JMS\Serializer\Annotation\SerializedName('bcc')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\SendSmtpEmailBcc>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $bcc = null;
    
    /**
     * List of email addresses and names (_optional_) of the recipients in cc
     * 
     * 
     * 
     * @var ?array<\test\BREVO\Models\Shared\SendSmtpEmailCc> $cc
     */
	#[\JMS\Serializer\Annotation\SerializedName('cc')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\SendSmtpEmailCc>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $cc = null;
    
    /**
     * Pass the set of custom headers (_not the standard headers_) that shall be sent along the mail headers in the original email. **'sender.ip'** header can be set (**only for dedicated ip users**) to mention the IP to be used for sending transactional emails. Headers are allowed in `This-Case-Only` (i.e. words separated by hyphen with first letter of each word in capital letter), they will be converted to such case styling if not in this format in the request payload. For example,
     * 
     * **{"sender.ip":"1.2.3.4", "X-Mailin-custom":"some_custom_header", "idempotencyKey":"abc-123"}**.
     * 
     * 
     * @var ?array<string, mixed> $headers
     */
	#[\JMS\Serializer\Annotation\SerializedName('headers')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $headers = null;
    
    /**
     * HTML body of the message. **Mandatory if 'templateId' is not passed, ignored if 'templateId' is passed**
     * 
     * 
     * 
     * @var ?string $htmlContent
     */
	#[\JMS\Serializer\Annotation\SerializedName('htmlContent')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $htmlContent = null;
    
    /**
     * You can customize and send out multiple versions of a mail. **templateId** can be customized only if global parameter contains templateId. **htmlContent and textContent** can be customized only if any of the two, htmlContent or textContent, is present in global parameters. Some global parameters such as **to(mandatory), bcc, cc, replyTo, subject** can also be customized specific to each version.
     * 
     * Total number of recipients in one API request must not exceed 2000. However, you can still pass upto 99 recipients maximum in one message version.
     * The size of individual params in all the messageVersions shall not exceed **100 KB** limit and that of cumulative params shall not exceed **1000 KB**.
     * You can follow this **step-by-step guide** on how to use **messageVersions** to batch send emails - **https://developers.brevo.com/docs/batch-send-transactional-emails**
     * 
     * 
     * @var ?array<\test\BREVO\Models\Shared\SendSmtpEmailMessageVersions> $messageVersions
     */
	#[\JMS\Serializer\Annotation\SerializedName('messageVersions')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\SendSmtpEmailMessageVersions>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messageVersions = null;
    
    /**
     * Pass the set of attributes to customize the template. For example, **{"FNAME":"Joe", "LNAME":"Doe"}**. It's **considered only if template is in New Template Language format**.
     * 
     * 
     * 
     * @var ?array<string, mixed> $params
     */
	#[\JMS\Serializer\Annotation\SerializedName('params')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $params = null;
    
    /**
     * Email (**required**), along with name (_optional_), on which transactional mail recipients will be able to reply back. For example,
     * 
     * **{"email":"ann6533@example.com", "name":"Ann"}**
     * 
     * 
     * @var ?\test\BREVO\Models\Shared\SendSmtpEmailReplyTo $replyTo
     */
	#[\JMS\Serializer\Annotation\SerializedName('replyTo')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\SendSmtpEmailReplyTo')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SendSmtpEmailReplyTo $replyTo = null;
    
    /**
     * UTC date-time on which the email has to schedule (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for scheduling. There can be an expected delay of +5 minutes in scheduled email delivery. **Please note this feature is currently a public beta**.
     * 
     * @var ?\DateTime $scheduledAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('scheduledAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $scheduledAt = null;
    
    /**
     * **Mandatory if `templateId` is not passed**. Pass name (_optional_) and email or id of sender from which emails will be sent. **`name` will be ignored if passed along with sender `id`**. For example,
     * 
     * **{"name":"Mary from MyShop", "email":"no-reply@myshop.com"}**
     * **{"id":2}**
     * 
     * 
     * @var ?\test\BREVO\Models\Shared\SendSmtpEmailSender $sender
     */
	#[\JMS\Serializer\Annotation\SerializedName('sender')]
    #[\JMS\Serializer\Annotation\Type('test\BREVO\Models\Shared\SendSmtpEmailSender')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SendSmtpEmailSender $sender = null;
    
    /**
     * Subject of the message. **Mandatory if 'templateId' is not passed**
     * 
     * 
     * 
     * @var ?string $subject
     */
	#[\JMS\Serializer\Annotation\SerializedName('subject')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subject = null;
    
    /**
     * Tag your emails to find them more easily
     * 
     * @var ?array<string> $tags
     */
	#[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tags = null;
    
    /**
     * Id of the template.
     * 
     * @var ?int $templateId
     */
	#[\JMS\Serializer\Annotation\SerializedName('templateId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $templateId = null;
    
    /**
     * Plain Text body of the message. **Ignored if 'templateId' is passed**
     * 
     * 
     * 
     * @var ?string $textContent
     */
	#[\JMS\Serializer\Annotation\SerializedName('textContent')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $textContent = null;
    
    /**
     * **Mandatory if messageVersions are not passed, ignored if messageVersions are passed**
     * 
     * List of email addresses and names (_optional_) of the recipients. For example,
     * **[{"name":"Jimmy", "email":"jimmy98@example.com"}, {"name":"Joe", "email":"joe@example.com"}]**
     * 
     * 
     * @var ?array<\test\BREVO\Models\Shared\SendSmtpEmailTo> $to
     */
	#[\JMS\Serializer\Annotation\SerializedName('to')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\SendSmtpEmailTo>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $to = null;
    
	public function __construct()
	{
		$this->attachment = null;
		$this->batchId = null;
		$this->bcc = null;
		$this->cc = null;
		$this->headers = null;
		$this->htmlContent = null;
		$this->messageVersions = null;
		$this->params = null;
		$this->replyTo = null;
		$this->scheduledAt = null;
		$this->sender = null;
		$this->subject = null;
		$this->tags = null;
		$this->templateId = null;
		$this->textContent = null;
		$this->to = null;
	}
}
