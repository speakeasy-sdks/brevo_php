<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/** Filter on the type of the campaigns */
enum Type: string
{
    case Classic = 'classic';
    case Trigger = 'trigger';
}