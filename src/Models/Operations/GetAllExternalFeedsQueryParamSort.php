<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;


/** Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed. */
enum GetAllExternalFeedsQueryParamSort: string
{
    case Asc = 'asc';
    case Desc = 'desc';
}
