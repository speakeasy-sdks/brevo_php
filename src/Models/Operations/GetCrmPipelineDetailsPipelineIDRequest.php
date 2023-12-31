<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetCrmPipelineDetailsPipelineIDRequest
{
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=pipelineID')]
    public string $pipelineID;
    
	public function __construct()
	{
		$this->pipelineID = "";
	}
}
