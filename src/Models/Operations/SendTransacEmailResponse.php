<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


class SendTransacEmailResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * transactional email sent
     * 
     * @var ?\test\BREVO\Models\Shared\CreateSmtpEmail $createSmtpEmail
     */
	
    public ?\test\BREVO\Models\Shared\CreateSmtpEmail $createSmtpEmail = null;
    
    /**
     * bad request
     * 
     * @var ?\test\BREVO\Models\Shared\ErrorModel $errorModel
     */
	
    public ?\test\BREVO\Models\Shared\ErrorModel $errorModel = null;
    
    /**
     * transactional email scheduled
     * 
     * @var ?\test\BREVO\Models\Shared\ScheduleSmtpEmail $scheduleSmtpEmail
     */
	
    public ?\test\BREVO\Models\Shared\ScheduleSmtpEmail $scheduleSmtpEmail = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->createSmtpEmail = null;
		$this->errorModel = null;
		$this->scheduleSmtpEmail = null;
	}
}
