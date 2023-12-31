<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/** Filter the records by `authType` of the feed. */
enum AuthType: string
{
    case Basic = 'basic';
    case Token = 'token';
    case NoAuth = 'noAuth';
}
