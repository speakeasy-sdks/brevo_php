<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


class GetCrmPipelineDetailsPipelineIDResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * Returns pipeline and its details
     * 
     * @var ?array<\test\BREVO\Models\Shared\Pipeline> $pipelines
     */
	
    public ?array $pipelines = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
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
