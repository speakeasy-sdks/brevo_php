<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/** Status of the process */
enum GetProcessStatus: string
{
    case Queued = 'queued';
    case InProcess = 'in_process';
    case Completed = 'completed';
}
