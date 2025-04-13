<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'quantity',
        'price',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'name'     => 'string',
        'quantity' => 'integer',
        'price'    => 'decimal:2',
    ];
}
