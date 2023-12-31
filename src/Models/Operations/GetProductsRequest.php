<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test\BREVO\Models\Operations;

use \test\BREVO\Utils\SpeakeasyMetadata;
class GetProductsRequest
{
    /**
     * Filter by product categories
     * 
     * @var ?array<string> $categories
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=categories')]
    public ?array $categories = null;
    
    /**
     * Filter by product ids
     * 
     * @var ?array<string> $ids
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=ids')]
    public ?array $ids = null;
    
    /**
     * Number of documents per page
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    /**
     * Filter by product name, minimum 3 characters should be present for search
     * 
     * @var ?string $name
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=name')]
    public ?string $name = null;
    
    /**
     * Index of the first document in the page
     * 
     * @var ?int $offset
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;
    
    /**
     * Price filter for products equals to particular amount
     * 
     * @var ?float $priceEq
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=price[eq]')]
    public ?float $priceEq = null;
    
    /**
     * Price filter for products greater than particular amount
     * 
     * @var ?float $priceGt
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=price[gt]')]
    public ?float $priceGt = null;
    
    /**
     * Price filter for products greater than and equals to particular amount
     * 
     * @var ?float $priceGte
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=price[gte]')]
    public ?float $priceGte = null;
    
    /**
     * Price filter for products less than particular amount
     * 
     * @var ?float $priceLt
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=price[lt]')]
    public ?float $priceLt = null;
    
    /**
     * Price filter for products less than and equals to particular amount
     * 
     * @var ?float $priceLte
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=price[lte]')]
    public ?float $priceLte = null;
    
    /**
     * Price filter for products not equals to particular amount
     * 
     * @var ?float $priceNe
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=price[ne]')]
    public ?float $priceNe = null;
    
    /**
     * Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
     * 
     * @var ?\test\BREVO\Models\Operations\GetProductsQueryParamSort $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?GetProductsQueryParamSort $sort = null;
    
	public function __construct()
	{
		$this->categories = null;
		$this->ids = null;
		$this->limit = null;
		$this->name = null;
		$this->offset = null;
		$this->priceEq = null;
		$this->priceGt = null;
		$this->priceGte = null;
		$this->priceLt = null;
		$this->priceLte = null;
		$this->priceNe = null;
		$this->sort = null;
	}
}
