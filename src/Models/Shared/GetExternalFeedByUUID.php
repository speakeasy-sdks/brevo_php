<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


class GetExternalFeedByUUID
{
    /**
     * Auth type of the feed: * `basic` * `token` * `noAuth`
     * 
     * 
     * 
     * @var \test\BREVO\Models\Shared\GetExternalFeedByUUIDAuthType $authType
     */
	#[\JMS\Serializer\Annotation\SerializedName('authType')]
    #[\JMS\Serializer\Annotation\Type('enum<test\BREVO\Models\Shared\GetExternalFeedByUUIDAuthType>')]
    public GetExternalFeedByUUIDAuthType $authType;
    
    /**
     * Toggle caching of feed url response
     * 
     * @var bool $cache
     */
	#[\JMS\Serializer\Annotation\SerializedName('cache')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $cache;
    
    /**
     * Datetime on which the feed was created
     * 
     * @var \DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    /**
     * Custom headers for the feed
     * 
     * @var array<\test\BREVO\Models\Shared\GetExternalFeedByUUIDHeaders> $headers
     */
	#[\JMS\Serializer\Annotation\SerializedName('headers')]
    #[\JMS\Serializer\Annotation\Type('array<test\BREVO\Models\Shared\GetExternalFeedByUUIDHeaders>')]
    public array $headers;
    
    /**
     * ID of the feed
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * Maximum number of retries on the feed url
     * 
     * @var ?int $maxRetries
     */
	#[\JMS\Serializer\Annotation\SerializedName('maxRetries')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $maxRetries = null;
    
    /**
     * Datetime on which the feed was modified
     * 
     * @var \DateTime $modifiedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('modifiedAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $modifiedAt;
    
    /**
     * Name of the feed
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * Password for authType `basic`
     * 
     * @var ?string $password
     */
	#[\JMS\Serializer\Annotation\SerializedName('password')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $password = null;
    
    /**
     * Token for authType `token`
     * 
     * @var ?string $token
     */
	#[\JMS\Serializer\Annotation\SerializedName('token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $token = null;
    
    /**
     * URL of the feed
     * 
     * @var string $url
     */
	#[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $url;
    
    /**
     * Username for authType `basic`
     * 
     * @var ?string $username
     */
	#[\JMS\Serializer\Annotation\SerializedName('username')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $username = null;
    
	public function __construct()
	{
		$this->authType = \test\BREVO\Models\Shared\GetExternalFeedByUUIDAuthType::Basic;
		$this->cache = false;
		$this->createdAt = new \DateTime();
		$this->headers = [];
		$this->id = "";
		$this->maxRetries = null;
		$this->modifiedAt = new \DateTime();
		$this->name = "";
		$this->password = null;
		$this->token = null;
		$this->url = "";
		$this->username = null;
	}
}
