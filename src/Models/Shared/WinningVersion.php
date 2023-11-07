<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/** Winning Campaign Info. pending = Campaign has been picked for sending and winning version is yet to be decided, tie = A tie happened between both the versions, notAvailable = Campaign has not yet been picked for sending. */
enum WinningVersion: string
{
    case NotAvailable = 'notAvailable';
    case Pending = 'pending';
    case Tie = 'tie';
    case A = 'A';
    case B = 'B';
}