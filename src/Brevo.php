<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO;

/**
 * Brevo - Brevo API: Brevo provide a RESTFul API that can be used with any languages. With this API, you will be able to :
 * 
 *   - Manage your campaigns and get the statistics
 *   - Manage your contacts
 *   - Send transactional Emails and SMS
 *   - and much more...
 * 
 * You can download our wrappers at https://github.com/orgs/brevo
 * 
 * **Possible responses**
 *   | Code | Message |
 *   | :-------------: | ------------- |
 *   | 200  | OK. Successful Request  |
 *   | 201  | OK. Successful Creation |
 *   | 202  | OK. Request accepted |
 *   | 204  | OK. Successful Update/Deletion  |
 *   | 400  | Error. Bad Request  |
 *   | 401  | Error. Authentication Needed  |
 *   | 402  | Error. Not enough credit, plan upgrade needed  |
 *   | 403  | Error. Permission denied  |
 *   | 404  | Error. Object does not exist |
 *   | 405  | Error. Method not allowed  |
 *   | 406  | Error. Not Acceptable  |
 * 
 * 
 * @package test\BREVO
 * @access public
 */
class Brevo
{
	public const SERVERS = [
		'https://api.brevo.com/v3',
	];
  	
	public Account $account;
	
	public Ecommerce $ecommerce;
	
	public Companies $companies;
	
	public Contacts $contacts;
	
	public Conversations $conversations;
	
	public MasterAccount $masterAccount;
	
	public Coupons $coupons;
	
	public Deals $deals;
	
	public Files $files;
	
	public Notes $notes;
	
	public Tasks $tasks;
	
	public EmailCampaigns $emailCampaigns;
	
	public ExternalFeeds $externalFeeds;
	
	public InboundParsing $inboundParsing;
	
	public User $user;
	
	public Process $process;
	
	public Reseller $reseller;
	
	public Senders $senders;
	
	public Domains $domains;
	
	public SMSCampaigns $smsCampaigns;
	
	public TransactionalEmails $transactionalEmails;
	
	public TransactionalSMS $transactionalSMS;
	
	public Webhooks $webhooks;
	
	public TransactionalWhatsApp $transactionalWhatsApp;
	
	public WhatsAppCampaigns $whatsAppCampaigns;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return BrevoBuilder
	 */
	public static function builder(): BrevoBuilder
	{
		return new BrevoBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->account = new Account($this->sdkConfiguration);
		
		$this->ecommerce = new Ecommerce($this->sdkConfiguration);
		
		$this->companies = new Companies($this->sdkConfiguration);
		
		$this->contacts = new Contacts($this->sdkConfiguration);
		
		$this->conversations = new Conversations($this->sdkConfiguration);
		
		$this->masterAccount = new MasterAccount($this->sdkConfiguration);
		
		$this->coupons = new Coupons($this->sdkConfiguration);
		
		$this->deals = new Deals($this->sdkConfiguration);
		
		$this->files = new Files($this->sdkConfiguration);
		
		$this->notes = new Notes($this->sdkConfiguration);
		
		$this->tasks = new Tasks($this->sdkConfiguration);
		
		$this->emailCampaigns = new EmailCampaigns($this->sdkConfiguration);
		
		$this->externalFeeds = new ExternalFeeds($this->sdkConfiguration);
		
		$this->inboundParsing = new InboundParsing($this->sdkConfiguration);
		
		$this->user = new User($this->sdkConfiguration);
		
		$this->process = new Process($this->sdkConfiguration);
		
		$this->reseller = new Reseller($this->sdkConfiguration);
		
		$this->senders = new Senders($this->sdkConfiguration);
		
		$this->domains = new Domains($this->sdkConfiguration);
		
		$this->smsCampaigns = new SMSCampaigns($this->sdkConfiguration);
		
		$this->transactionalEmails = new TransactionalEmails($this->sdkConfiguration);
		
		$this->transactionalSMS = new TransactionalSMS($this->sdkConfiguration);
		
		$this->webhooks = new Webhooks($this->sdkConfiguration);
		
		$this->transactionalWhatsApp = new TransactionalWhatsApp($this->sdkConfiguration);
		
		$this->whatsAppCampaigns = new WhatsAppCampaigns($this->sdkConfiguration);
	}
}