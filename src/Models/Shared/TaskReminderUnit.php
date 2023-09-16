<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/** Unit of time before reminder is to be sent */
enum TaskReminderUnit: string
{
    case Minutes = 'minutes';
    case Hours = 'hours';
    case Weeks = 'weeks';
    case Days = 'days';
}