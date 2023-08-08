<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


class GetCrmPipelineDetailsAllResponse
{
	
    public string $contentType;
    
    /**
     * Returns list of pipeline and its details
     * 
     * @var ?array<\test\BREVO\Models\Shared\Pipeline> $pipelines
     */
	
    public ?array $pipelines = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Returned when pipeline id is invalid or does not exist
     * 
     * @var ?\test\BREVO\Models\Shared\ErrorModel $errorModel
     */
	
    public ?\test\BREVO\Models\Shared\ErrorModel $errorModel = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->pipelines = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->errorModel = null;
	}
}
