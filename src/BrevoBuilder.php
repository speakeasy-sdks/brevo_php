<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */


declare(strict_types=1);

namespace test\BREVO;

/**
 * BrevoBuilder is used to configure and build an instance of the SDK.
 * 
 * @package test\BREVO
 */
class BrevoBuilder
{
    public function __construct(
        private SDKConfiguration $sdkConfig = new SDKConfiguration(),
    ) {}

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param \GuzzleHttp\ClientInterface $client
     * @return BrevoBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): BrevoBuilder
    {
        $this->sdkConfig->defaultClient = $client;

        return $this;
    }
    
    /**
     * setSecurity is used to configure the security required for the SDK.
     *
     * @param Models\Shared\Security $security
     * @return BrevoBuilder
     */
    public function setSecurity(Models\Shared\Security $security): BrevoBuilder
    {
        $this->sdkConfig->security = $security;

        return $this;
    }
    
    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param string $serverUrl
     * @param array<string, string> $params
     * @return BrevoBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): BrevoBuilder
    {
        $this->sdkConfig->serverUrl = Utils\Utils::templateUrl($serverUrl, $params);

        return $this;
    }
    
    /**
     * setServer is used to configure the server for the SDK
     *
     * @param int $serverIdx
     * @return BrevoBuilder
     */
    public function setServerIndex(int $serverIdx): BrevoBuilder
    {
        $this->sdkConfig->serverIndex = $serverIdx;

        return $this;
    }
    
    
    
    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return Brevo
     */
    public function build(): Brevo
    {
		if ($this->sdkConfig->defaultClient === null) {
			$this->sdkConfig->defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}
		if ($this->sdkConfig->security !== null) {
			$this->sdkConfig->securityClient = Utils\Utils::configureSecurityClient($this->sdkConfig->defaultClient, $this->sdkConfig->security);
		}
		
		if ($this->sdkConfig->securityClient === null) {
			$this->sdkConfig->securityClient = $this->sdkConfig->defaultClient;
		}

        return new Brevo($this->sdkConfig);
    }
}