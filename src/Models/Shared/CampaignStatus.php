<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/** Status of the WhatsApp Campaign */
enum CampaignStatus: string
{
    case Draft = 'draft';
    case Scheduled = 'scheduled';
    case Pending = 'pending';
    case Approved = 'approved';
    case Running = 'running';
    case Suspended = 'suspended';
    case Rejected = 'rejected';
    case Sent = 'sent';
}