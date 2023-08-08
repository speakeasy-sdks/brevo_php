<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/** Category of the attribute */
enum CreateAttributeAttributeCategory: string
{
    case Normal = 'normal';
    case Transactional = 'transactional';
    case Category = 'category';
    case Calculated = 'calculated';
    case Global = 'global';
}
