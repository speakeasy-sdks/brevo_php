<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/** This is the type of the credit, "Send Limit" is one of the possible types of credit of a user. "Send Limit" implies the total number of emails you can send to the subscribers in your account. */
enum GetAccountPlanCreditsType: string
{
    case SendLimit = 'sendLimit';
}
