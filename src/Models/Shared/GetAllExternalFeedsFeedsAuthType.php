<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * Auth type of the feed: * `basic` * `token` * `noAuth`
 * 
 * 
 */
enum GetAllExternalFeedsFeedsAuthType: string
{
    case Basic = 'basic';
    case Token = 'token';
    case NoAuth = 'noAuth';
}
