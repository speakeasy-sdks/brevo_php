<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/** Reason code for blocking / unsubscribing (This code is safe for comparison) */
enum GetTransacBlockedContactsContactsReasonCode: string
{
    case UnsubscribedViaMA = 'unsubscribedViaMA';
    case UnsubscribedViaEmail = 'unsubscribedViaEmail';
    case AdminBlocked = 'adminBlocked';
    case UnsubscribedViaApi = 'unsubscribedViaApi';
    case HardBounce = 'hardBounce';
    case ContactFlaggedAsSpam = 'contactFlaggedAsSpam';
}
