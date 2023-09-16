<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/** Filter the recipients based on how they interacted with the campaign */
enum RequestSmsRecipientExportRecipientsType: string
{
    case All = 'all';
    case Delivered = 'delivered';
    case Answered = 'answered';
    case SoftBounces = 'softBounces';
    case HardBounces = 'hardBounces';
    case Unsubscribed = 'unsubscribed';
}