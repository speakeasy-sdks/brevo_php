# test/brevo

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/brevo_php.git"
        }
    ],
    "require": {
        "test/brevo": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use test\BREVO;
use test\BREVO\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = BREVO\Brevo::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->account->getAccount();

    if ($response->getAccount !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [Account](docs/sdks/account/README.md)

* [getAccount](docs/sdks/account/README.md#getaccount) - Get your account information, plan and credits details
* [getAccountActivity](docs/sdks/account/README.md#getaccountactivity) - Get user activity logs

### [Ecommerce](docs/sdks/ecommerce/README.md)

* [createBatchOrder](docs/sdks/ecommerce/README.md#createbatchorder) - Create orders in batch
* [createOrder](docs/sdks/ecommerce/README.md#createorder) - Managing the status of the order
* [createUpdateBatchCategory](docs/sdks/ecommerce/README.md#createupdatebatchcategory) - Create categories in batch
* [createUpdateBatchProducts](docs/sdks/ecommerce/README.md#createupdatebatchproducts) - Create products in batch
* [createUpdateCategory](docs/sdks/ecommerce/README.md#createupdatecategory) - Create/Update a category
* [createUpdateProduct](docs/sdks/ecommerce/README.md#createupdateproduct) - Create/Update a product
* [getCategories](docs/sdks/ecommerce/README.md#getcategories) - Return all your categories
* [getCategoryInfo](docs/sdks/ecommerce/README.md#getcategoryinfo) - Get a category details
* [getProductInfo](docs/sdks/ecommerce/README.md#getproductinfo) - Get a product's details
* [getProducts](docs/sdks/ecommerce/README.md#getproducts) - Return all your products
* [postEcommerceActivate](docs/sdks/ecommerce/README.md#postecommerceactivate) - Activate the eCommerce app

### [Companies](docs/sdks/companies/README.md)

* [deleteCompaniesId](docs/sdks/companies/README.md#deletecompaniesid) - Delete a company
* [getCompanies](docs/sdks/companies/README.md#getcompanies) - Get all Companies
* [getCompaniesAttributes](docs/sdks/companies/README.md#getcompaniesattributes) - Get company attributes
* [getCompaniesId](docs/sdks/companies/README.md#getcompaniesid) - Get a company
* [patchCompaniesLinkUnlinkId](docs/sdks/companies/README.md#patchcompanieslinkunlinkid) - Link and Unlink company with contact and deal
* [patchCompaniesId](docs/sdks/companies/README.md#patchcompaniesid) - Update a company
* [postCompanies](docs/sdks/companies/README.md#postcompanies) - Create a company

### [Contacts](docs/sdks/contacts/README.md)

* [addContactToList](docs/sdks/contacts/README.md#addcontacttolist) - Add existing contacts to a list
* [createAttribute](docs/sdks/contacts/README.md#createattribute) - Create contact attribute
* [createContact](docs/sdks/contacts/README.md#createcontact) - Create a contact
* [createDoiContact](docs/sdks/contacts/README.md#createdoicontact) - Create Contact via DOI (Double-Opt-In) Flow
* [createFolder](docs/sdks/contacts/README.md#createfolder) - Create a folder
* [createList](docs/sdks/contacts/README.md#createlist) - Create a list
* [deleteAttribute](docs/sdks/contacts/README.md#deleteattribute) - Delete an attribute
* [deleteContact](docs/sdks/contacts/README.md#deletecontact) - Delete a contact
* [deleteFolder](docs/sdks/contacts/README.md#deletefolder) - Delete a folder (and all its lists)
* [deleteList](docs/sdks/contacts/README.md#deletelist) - Delete a list
* [getAttributes](docs/sdks/contacts/README.md#getattributes) - List all attributes
* [getContactInfo](docs/sdks/contacts/README.md#getcontactinfo) - Get a contact's details
* [getContactStats](docs/sdks/contacts/README.md#getcontactstats) - Get email campaigns' statistics for a contact
* [getContacts](docs/sdks/contacts/README.md#getcontacts) - Get all the contacts
* [getContactsFromList](docs/sdks/contacts/README.md#getcontactsfromlist) - Get contacts in a list
* [getFolder](docs/sdks/contacts/README.md#getfolder) - Returns a folder's details
* [getFolderLists](docs/sdks/contacts/README.md#getfolderlists) - Get lists in a folder
* [getFolders](docs/sdks/contacts/README.md#getfolders) - Get all folders
* [getList](docs/sdks/contacts/README.md#getlist) - Get a list's details
* [getLists](docs/sdks/contacts/README.md#getlists) - Get all the lists
* [getSegments](docs/sdks/contacts/README.md#getsegments) - Get all the segments
* [importContacts](docs/sdks/contacts/README.md#importcontacts) - Import contacts
* [removeContactFromList](docs/sdks/contacts/README.md#removecontactfromlist) - Delete a contact from a list
* [requestContactExport](docs/sdks/contacts/README.md#requestcontactexport) - Export contacts
* [updateAttribute](docs/sdks/contacts/README.md#updateattribute) - Update contact attribute
* [updateBatchContacts](docs/sdks/contacts/README.md#updatebatchcontacts) - Update multiple contacts
* [updateContact](docs/sdks/contacts/README.md#updatecontact) - Update a contact
* [updateFolder](docs/sdks/contacts/README.md#updatefolder) - Update a folder
* [updateList](docs/sdks/contacts/README.md#updatelist) - Update a list

### [Conversations](docs/sdks/conversations/README.md)

* [deleteConversationsMessagesId](docs/sdks/conversations/README.md#deleteconversationsmessagesid) - Delete a message sent by an agent
* [deleteConversationsPushedMessagesId](docs/sdks/conversations/README.md#deleteconversationspushedmessagesid) - Delete an automated message
* [getConversationsMessagesId](docs/sdks/conversations/README.md#getconversationsmessagesid) - Get a message
* [getConversationsPushedMessagesId](docs/sdks/conversations/README.md#getconversationspushedmessagesid) - Get an automated message
* [postConversationsAgentOnlinePing](docs/sdks/conversations/README.md#postconversationsagentonlineping) - Sets agent’s status to online for 2-3 minutes
* [postConversationsMessages](docs/sdks/conversations/README.md#postconversationsmessages) - Send a message as an agent
* [postConversationsPushedMessages](docs/sdks/conversations/README.md#postconversationspushedmessages) - Send an automated message to a visitor
* [putConversationsMessagesId](docs/sdks/conversations/README.md#putconversationsmessagesid) - Update a message sent by an agent
* [putConversationsPushedMessagesId](docs/sdks/conversations/README.md#putconversationspushedmessagesid) - Update an automated message

### [MasterAccount](docs/sdks/masteraccount/README.md)

* [deleteCorporateSubAccountId](docs/sdks/masteraccount/README.md#deletecorporatesubaccountid) - Delete a sub-account
* [getAccountActivity](docs/sdks/masteraccount/README.md#getaccountactivity) - Get user activity logs
* [getCorporateMasterAccount](docs/sdks/masteraccount/README.md#getcorporatemasteraccount) - Get the details of requested master account
* [getCorporateSubAccount](docs/sdks/masteraccount/README.md#getcorporatesubaccount) - Get the list of all the sub-accounts of the master account.
* [getCorporateSubAccountId](docs/sdks/masteraccount/README.md#getcorporatesubaccountid) - Get sub-account details
* [postCorporateSubAccount](docs/sdks/masteraccount/README.md#postcorporatesubaccount) - Create a new sub-account under a master account.
* [postCorporateSubAccountKey](docs/sdks/masteraccount/README.md#postcorporatesubaccountkey) - Create an API key for a sub-account
* [postCorporateSubAccountSsoToken](docs/sdks/masteraccount/README.md#postcorporatesubaccountssotoken) - Generate SSO token to access Brevo
* [putCorporateSubAccountIdApplicationsToggle](docs/sdks/masteraccount/README.md#putcorporatesubaccountidapplicationstoggle) - Enable/disable sub-account application(s)
* [putCorporateSubAccountIdPlan](docs/sdks/masteraccount/README.md#putcorporatesubaccountidplan) - Update sub-account plan

### [Coupons](docs/sdks/coupons/README.md)

* [createCouponCollection](docs/sdks/coupons/README.md#createcouponcollection) - Create а coupon collection
* [createCoupons](docs/sdks/coupons/README.md#createcoupons) - Create coupons for a coupon collection
* [getCouponCollection](docs/sdks/coupons/README.md#getcouponcollection) - Get a coupon collection by id
* [getCouponCollections](docs/sdks/coupons/README.md#getcouponcollections) - Get all your coupon collections
* [updateCouponCollection](docs/sdks/coupons/README.md#updatecouponcollection) - Update a coupon collection by id

### [Deals](docs/sdks/deals/README.md)

* [deleteCrmDealsId](docs/sdks/deals/README.md#deletecrmdealsid) - Delete a deal
* [getCrmAttributesDeals](docs/sdks/deals/README.md#getcrmattributesdeals) - Get deal attributes
* [getCrmDeals](docs/sdks/deals/README.md#getcrmdeals) - Get all deals
* [getCrmDealsId](docs/sdks/deals/README.md#getcrmdealsid) - Get a deal
* [~~getCrmPipelineDetails~~](docs/sdks/deals/README.md#getcrmpipelinedetails) - Get pipeline stages :warning: **Deprecated**
* [getCrmPipelineDetailsAll](docs/sdks/deals/README.md#getcrmpipelinedetailsall) - Get all pipelines
* [getCrmPipelineDetailsPipelineID](docs/sdks/deals/README.md#getcrmpipelinedetailspipelineid) - Get a pipeline
* [patchCrmDealsLinkUnlinkId](docs/sdks/deals/README.md#patchcrmdealslinkunlinkid) - Link and Unlink a deal with contacts and companies
* [patchCrmDealsId](docs/sdks/deals/README.md#patchcrmdealsid) - Update a deal
* [postCrmDeals](docs/sdks/deals/README.md#postcrmdeals) - Create a deal

### [Files](docs/sdks/files/README.md)

* [deleteCrmFilesId](docs/sdks/files/README.md#deletecrmfilesid) - Delete a file
* [getCrmFiles](docs/sdks/files/README.md#getcrmfiles) - Get all files
* [getCrmFilesId](docs/sdks/files/README.md#getcrmfilesid) - Download a file
* [getCrmFilesIdData](docs/sdks/files/README.md#getcrmfilesiddata) - Get file details
* [postCrmFiles](docs/sdks/files/README.md#postcrmfiles) - Upload a file

### [Notes](docs/sdks/notes/README.md)

* [deleteCrmNotesId](docs/sdks/notes/README.md#deletecrmnotesid) - Delete a note
* [getCrmNotes](docs/sdks/notes/README.md#getcrmnotes) - Get all notes
* [getCrmNotesId](docs/sdks/notes/README.md#getcrmnotesid) - Get a note
* [patchCrmNotesId](docs/sdks/notes/README.md#patchcrmnotesid) - Update a note
* [postCrmNotes](docs/sdks/notes/README.md#postcrmnotes) - Create a note

### [Tasks](docs/sdks/tasks/README.md)

* [deleteCrmTasksId](docs/sdks/tasks/README.md#deletecrmtasksid) - Delete a task
* [getCrmTasks](docs/sdks/tasks/README.md#getcrmtasks) - Get all tasks
* [getCrmTasksId](docs/sdks/tasks/README.md#getcrmtasksid) - Get a task
* [getCrmTasktypes](docs/sdks/tasks/README.md#getcrmtasktypes) - Get all task types
* [patchCrmTasksId](docs/sdks/tasks/README.md#patchcrmtasksid) - Update a task
* [postCrmTasks](docs/sdks/tasks/README.md#postcrmtasks) - Create a task

### [EmailCampaigns](docs/sdks/emailcampaigns/README.md)

* [createEmailCampaign](docs/sdks/emailcampaigns/README.md#createemailcampaign) - Create an email campaign
* [deleteEmailCampaign](docs/sdks/emailcampaigns/README.md#deleteemailcampaign) - Delete an email campaign
* [emailExportRecipients](docs/sdks/emailcampaigns/README.md#emailexportrecipients) - Export the recipients of an email campaign
* [getAbTestCampaignResult](docs/sdks/emailcampaigns/README.md#getabtestcampaignresult) - Get an A/B test email campaign results
* [getEmailCampaign](docs/sdks/emailcampaigns/README.md#getemailcampaign) - Get an email campaign report
* [getEmailCampaigns](docs/sdks/emailcampaigns/README.md#getemailcampaigns) - Return all your created email campaigns
* [getSharedTemplateUrl](docs/sdks/emailcampaigns/README.md#getsharedtemplateurl) - Get a shared template url
* [sendEmailCampaignNow](docs/sdks/emailcampaigns/README.md#sendemailcampaignnow) - Send an email campaign immediately, based on campaignId
* [sendReport](docs/sdks/emailcampaigns/README.md#sendreport) - Send the report of a campaign
* [sendTestEmail](docs/sdks/emailcampaigns/README.md#sendtestemail) - Send an email campaign to your test list
* [updateCampaignStatus](docs/sdks/emailcampaigns/README.md#updatecampaignstatus) - Update an email campaign status
* [updateEmailCampaign](docs/sdks/emailcampaigns/README.md#updateemailcampaign) - Update an email campaign
* [uploadImageToGallery](docs/sdks/emailcampaigns/README.md#uploadimagetogallery) - Upload an image to your account's image gallery

### [ExternalFeeds](docs/sdks/externalfeeds/README.md)

* [createExternalFeed](docs/sdks/externalfeeds/README.md#createexternalfeed) - Create an external feed
* [deleteExternalFeed](docs/sdks/externalfeeds/README.md#deleteexternalfeed) - Delete an external feed
* [getAllExternalFeeds](docs/sdks/externalfeeds/README.md#getallexternalfeeds) - Fetch all external feeds
* [getExternalFeedByUUID](docs/sdks/externalfeeds/README.md#getexternalfeedbyuuid) - Get an external feed by UUID
* [updateExternalFeed](docs/sdks/externalfeeds/README.md#updateexternalfeed) - Update an external feed

### [InboundParsing](docs/sdks/inboundparsing/README.md)

* [getInboundEmailAttachment](docs/sdks/inboundparsing/README.md#getinboundemailattachment) - Retrieve inbound attachment with download token.
* [getInboundEmailEvents](docs/sdks/inboundparsing/README.md#getinboundemailevents) - Get the list of all the events for the received emails.
* [getInboundEmailEventsByUuid](docs/sdks/inboundparsing/README.md#getinboundemaileventsbyuuid) - Fetch all events history for one particular received email.

### [User](docs/sdks/user/README.md)

* [getInvitedUsersList](docs/sdks/user/README.md#getinviteduserslist) - Get the list of all your users
* [getUserPermission](docs/sdks/user/README.md#getuserpermission) - Check user permission

### [Process](docs/sdks/process/README.md)

* [getProcess](docs/sdks/process/README.md#getprocess) - Return the informations for a process
* [getProcesses](docs/sdks/process/README.md#getprocesses) - Return all the processes for your account

### [Reseller](docs/sdks/reseller/README.md)

* [addCredits](docs/sdks/reseller/README.md#addcredits) - Add Email and/or SMS credits to a specific child account
* [associateIpToChild](docs/sdks/reseller/README.md#associateiptochild) - Associate a dedicated IP to the child
* [createChildDomain](docs/sdks/reseller/README.md#createchilddomain) - Create a domain for a child account
* [createResellerChild](docs/sdks/reseller/README.md#createresellerchild) - Creates a reseller child
* [deleteChildDomain](docs/sdks/reseller/README.md#deletechilddomain) - Delete the sender domain of the reseller child based on the childIdentifier and domainName passed
* [deleteResellerChild](docs/sdks/reseller/README.md#deleteresellerchild) - Delete a single reseller child based on the child identifier supplied
* [dissociateIpFromChild](docs/sdks/reseller/README.md#dissociateipfromchild) - Dissociate a dedicated IP to the child
* [getChildAccountCreationStatus](docs/sdks/reseller/README.md#getchildaccountcreationstatus) - Get the status of a reseller's child account creation, whether it is successfully created (exists) or not based on the childIdentifier supplied
* [getChildDomains](docs/sdks/reseller/README.md#getchilddomains) - Get all sender domains for a specific child account
* [getChildInfo](docs/sdks/reseller/README.md#getchildinfo) - Get a child account's details
* [getResellerChilds](docs/sdks/reseller/README.md#getresellerchilds) - Get the list of all children accounts
* [getSsoToken](docs/sdks/reseller/README.md#getssotoken) - Get session token to access Brevo (SSO)
* [removeCredits](docs/sdks/reseller/README.md#removecredits) - Remove Email and/or SMS credits from a specific child account
* [updateChildAccountStatus](docs/sdks/reseller/README.md#updatechildaccountstatus) - Update info of reseller's child account status based on the identifier supplied
* [updateChildDomain](docs/sdks/reseller/README.md#updatechilddomain) - Update the sender domain of reseller's child based on the childIdentifier and domainName passed
* [updateResellerChild](docs/sdks/reseller/README.md#updateresellerchild) - Update info of reseller's child based on the child identifier supplied

### [Senders](docs/sdks/senders/README.md)

* [createSender](docs/sdks/senders/README.md#createsender) - Create a new sender
* [deleteSender](docs/sdks/senders/README.md#deletesender) - Delete a sender
* [getIps](docs/sdks/senders/README.md#getips) - Get all the dedicated IPs for your account
* [getIpsFromSender](docs/sdks/senders/README.md#getipsfromsender) - Get all the dedicated IPs for a sender
* [getSenders](docs/sdks/senders/README.md#getsenders) - Get the list of all your senders
* [updateSender](docs/sdks/senders/README.md#updatesender) - Update a sender
* [validateSenderByOTP](docs/sdks/senders/README.md#validatesenderbyotp) - Validate Sender using OTP

### [Domains](docs/sdks/domains/README.md)

* [authenticateDomain](docs/sdks/domains/README.md#authenticatedomain) - Authenticate a domain
* [createDomain](docs/sdks/domains/README.md#createdomain) - Create a new domain
* [deleteDomain](docs/sdks/domains/README.md#deletedomain) - Delete a domain
* [getDomainConfiguration](docs/sdks/domains/README.md#getdomainconfiguration) - Validate domain configuration
* [getDomains](docs/sdks/domains/README.md#getdomains) - Get the list of all your domains

### [SMSCampaigns](docs/sdks/smscampaigns/README.md)

* [createSmsCampaign](docs/sdks/smscampaigns/README.md#createsmscampaign) - Creates an SMS campaign
* [deleteSmsCampaign](docs/sdks/smscampaigns/README.md#deletesmscampaign) - Delete an SMS campaign
* [getSmsCampaign](docs/sdks/smscampaigns/README.md#getsmscampaign) - Get an SMS campaign
* [getSmsCampaigns](docs/sdks/smscampaigns/README.md#getsmscampaigns) - Returns the information for all your created SMS campaigns
* [requestSmsRecipientExport](docs/sdks/smscampaigns/README.md#requestsmsrecipientexport) - Export an SMS campaign's recipients
* [sendSmsCampaignNow](docs/sdks/smscampaigns/README.md#sendsmscampaignnow) - Send your SMS campaign immediately
* [sendSmsReport](docs/sdks/smscampaigns/README.md#sendsmsreport) - Send an SMS campaign's report
* [sendTestSms](docs/sdks/smscampaigns/README.md#sendtestsms) - Send a test SMS campaign
* [updateSmsCampaign](docs/sdks/smscampaigns/README.md#updatesmscampaign) - Update an SMS campaign
* [updateSmsCampaignStatus](docs/sdks/smscampaigns/README.md#updatesmscampaignstatus) - Update a campaign's status

### [TransactionalEmails](docs/sdks/transactionalemails/README.md)

* [blockNewDomain](docs/sdks/transactionalemails/README.md#blocknewdomain) - Add a new domain to the list of blocked domains
* [createSmtpTemplate](docs/sdks/transactionalemails/README.md#createsmtptemplate) - Create an email template
* [deleteBlockedDomain](docs/sdks/transactionalemails/README.md#deleteblockeddomain) - Unblock an existing domain from the list of blocked domains
* [deleteHardbounces](docs/sdks/transactionalemails/README.md#deletehardbounces) - Delete hardbounces
* [deleteScheduledEmailById](docs/sdks/transactionalemails/README.md#deletescheduledemailbyid) - Delete scheduled emails by batchId or messageId
* [deleteSmtpTemplate](docs/sdks/transactionalemails/README.md#deletesmtptemplate) - Delete an inactive email template
* [deleteSmtpBlockedContactsEmail](docs/sdks/transactionalemails/README.md#deletesmtpblockedcontactsemail) - Unblock or resubscribe a transactional contact
* [deleteSmtpLogMessageId](docs/sdks/transactionalemails/README.md#deletesmtplogmessageid) - Delete an SMTP transactional log
* [getAggregatedSmtpReport](docs/sdks/transactionalemails/README.md#getaggregatedsmtpreport) - Get your transactional email activity aggregated over a period of time
* [getBlockedDomains](docs/sdks/transactionalemails/README.md#getblockeddomains) - Get the list of blocked domains
* [getEmailEventReport](docs/sdks/transactionalemails/README.md#getemaileventreport) - Get all your transactional email activity (unaggregated events)
* [getScheduledEmailById](docs/sdks/transactionalemails/README.md#getscheduledemailbyid) - Fetch scheduled emails by batchId or messageId
* [getSmtpReport](docs/sdks/transactionalemails/README.md#getsmtpreport) - Get your transactional email activity aggregated per day
* [getSmtpTemplate](docs/sdks/transactionalemails/README.md#getsmtptemplate) - Returns the template information
* [getSmtpTemplates](docs/sdks/transactionalemails/README.md#getsmtptemplates) - Get the list of email templates
* [getTransacBlockedContacts](docs/sdks/transactionalemails/README.md#gettransacblockedcontacts) - Get the list of blocked or unsubscribed transactional contacts
* [getTransacEmailContent](docs/sdks/transactionalemails/README.md#gettransacemailcontent) - Get the personalized content of a sent transactional email
* [getTransacEmailsList](docs/sdks/transactionalemails/README.md#gettransacemailslist) - Get the list of transactional emails on the basis of allowed filters
* [sendTestTemplate](docs/sdks/transactionalemails/README.md#sendtesttemplate) - Send a template to your test list
* [sendTransacEmail](docs/sdks/transactionalemails/README.md#sendtransacemail) - Send a transactional email
* [updateSmtpTemplate](docs/sdks/transactionalemails/README.md#updatesmtptemplate) - Update an email template

### [TransactionalSMS](docs/sdks/transactionalsms/README.md)

* [getSmsEvents](docs/sdks/transactionalsms/README.md#getsmsevents) - Get all your SMS activity (unaggregated events)
* [getTransacAggregatedSmsReport](docs/sdks/transactionalsms/README.md#gettransacaggregatedsmsreport) - Get your SMS activity aggregated over a period of time
* [getTransacSmsReport](docs/sdks/transactionalsms/README.md#gettransacsmsreport) - Get your SMS activity aggregated per day
* [sendTransacSms](docs/sdks/transactionalsms/README.md#sendtransacsms) - Send SMS message to a mobile number

### [Webhooks](docs/sdks/webhooks/README.md)

* [createWebhook](docs/sdks/webhooks/README.md#createwebhook) - Create a webhook
* [deleteWebhook](docs/sdks/webhooks/README.md#deletewebhook) - Delete a webhook
* [exportWebhooksHistory](docs/sdks/webhooks/README.md#exportwebhookshistory) - Export all transactional events
* [getWebhook](docs/sdks/webhooks/README.md#getwebhook) - Get a webhook details
* [getWebhooks](docs/sdks/webhooks/README.md#getwebhooks) - Get all webhooks
* [updateWebhook](docs/sdks/webhooks/README.md#updatewebhook) - Update a webhook

### [TransactionalWhatsApp](docs/sdks/transactionalwhatsapp/README.md)

* [getWhatsappEventReport](docs/sdks/transactionalwhatsapp/README.md#getwhatsappeventreport) - Get all your WhatsApp activity (unaggregated events)
* [sendWhatsappMessage](docs/sdks/transactionalwhatsapp/README.md#sendwhatsappmessage) - Send a WhatsApp message

### [WhatsAppCampaigns](docs/sdks/whatsappcampaigns/README.md)

* [createWhatsAppCampaign](docs/sdks/whatsappcampaigns/README.md#createwhatsappcampaign) - Create and Send a WhatsApp campaign
* [createWhatsAppTemplate](docs/sdks/whatsappcampaigns/README.md#createwhatsapptemplate) - Create a WhatsApp template
* [deleteWhatsAppCampaign](docs/sdks/whatsappcampaigns/README.md#deletewhatsappcampaign) - Delete a WhatsApp campaign
* [getWhatsAppCampaign](docs/sdks/whatsappcampaigns/README.md#getwhatsappcampaign) - Get a WhatsApp campaign
* [getWhatsAppCampaigns](docs/sdks/whatsappcampaigns/README.md#getwhatsappcampaigns) - Return all your created WhatsApp campaigns
* [getWhatsAppConfig](docs/sdks/whatsappcampaigns/README.md#getwhatsappconfig) - Get your WhatsApp API account information
* [getWhatsAppTemplates](docs/sdks/whatsappcampaigns/README.md#getwhatsapptemplates) - Return all your created WhatsApp templates
* [sendWhatsAppTemplateApproval](docs/sdks/whatsappcampaigns/README.md#sendwhatsapptemplateapproval) - Send your WhatsApp template for approval
* [updateWhatsAppCampaign](docs/sdks/whatsappcampaigns/README.md#updatewhatsappcampaign) - Update a WhatsApp campaign
<!-- End SDK Available Operations -->



<!-- Start Dev Containers -->

<!-- End Dev Containers -->

<!-- Placeholder for Future Speakeasy SDK Sections -->



### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
