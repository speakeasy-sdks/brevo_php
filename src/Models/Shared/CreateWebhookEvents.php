<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


enum CreateWebhookEvents: string
{
    case Sent = 'sent';
    case HardBounce = 'hardBounce';
    case SoftBounce = 'softBounce';
    case Blocked = 'blocked';
    case Spam = 'spam';
    case Delivered = 'delivered';
    case Request = 'request';
    case Click = 'click';
    case Invalid = 'invalid';
    case Deferred = 'deferred';
    case Opened = 'opened';
    case UniqueOpened = 'uniqueOpened';
    case Unsubscribed = 'unsubscribed';
    case ListAddition = 'listAddition';
    case ContactUpdated = 'contactUpdated';
    case ContactDeleted = 'contactDeleted';
    case InboundEmailProcessed = 'inboundEmailProcessed';
}
