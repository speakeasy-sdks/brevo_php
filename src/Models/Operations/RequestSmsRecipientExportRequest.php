<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class RequestSmsRecipientExportRequest
{
    /**
     * id of the campaign
     * 
     * @var int $campaignId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=campaignId')]
    public int $campaignId;
    
    /**
     * Values to send for a recipient export request
     * 
     * @var ?\test\BREVO\Models\Shared\RequestSmsRecipientExport $requestSmsRecipientExport
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\test\BREVO\Models\Shared\RequestSmsRecipientExport $requestSmsRecipientExport = null;
    
	public function __construct()
	{
		$this->campaignId = 0;
		$this->requestSmsRecipientExport = null;
	}
}
