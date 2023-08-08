<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/** Filter on the status of the campaign */
enum GetEmailCampaignsStatus: string
{
    case Suspended = 'suspended';
    case Archive = 'archive';
    case Sent = 'sent';
    case Queued = 'queued';
    case Draft = 'draft';
    case InProcess = 'inProcess';
}
