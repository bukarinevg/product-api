<?php

namespace App\Filters;

use App\Filters\BaseFilter;

class ProductFilter extends BaseFilter
{
    protected $safeParams = [
        'name' => ['like', 'ilike'],
        'quantity' => ['eq', 'neq', 'gt', 'gte', 'lt', 'lte'],
        'price' => ['eq', 'neq', 'gt', 'gte', 'lt', 'lte'],
    ];

}