<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/** Filter by file entity type */
enum GetCrmFilesEntity: string
{
    case Companies = 'companies';
    case Deals = 'deals';
    case Contacts = 'contacts';
}
