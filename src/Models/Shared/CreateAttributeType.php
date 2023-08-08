<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Shared;


/**
 * Type of the attribute. **Use only if the attribute's category is 'normal', 'category' or 'transactional'**
 * 
 * Type **boolean** is only available if the category is **normal** attribute
 * Type **id** is only available if the category is **transactional** attribute
 * Type **category** is only available if the category is **category** attribute
 * 
 */
enum CreateAttributeType: string
{
    case Text = 'text';
    case Date = 'date';
    case Float = 'float';
    case Boolean = 'boolean';
    case Id = 'id';
    case Category = 'category';
}
