<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetContactsFromListRequest
{
    /**
     * Number of documents per page
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    /**
     * Id of the list
     * 
     * @var int $listId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=listId')]
    public int $listId;
    
    /**
     * Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     * 
     * 
     * 
     * @var ?string $modifiedSince
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=modifiedSince')]
    public ?string $modifiedSince = null;
    
    /**
     * Index of the first document of the page
     * 
     * @var ?int $offset
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;
    
    /**
     * Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     * 
     * @var ?\test\BREVO\Models\Operations\GetContactsFromListSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetContactsFromListSort $sort = null;
    
	public function __construct()
	{
		$this->limit = null;
		$this->listId = 0;
		$this->modifiedSince = null;
		$this->offset = null;
		$this->sort = null;
	}
}