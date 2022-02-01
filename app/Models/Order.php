<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop',
        'bought_at',
        'products'
    ];

    protected $casts = [
        'bought_at' => 'datetime',
        'products' => 'collection'
    ];
}
