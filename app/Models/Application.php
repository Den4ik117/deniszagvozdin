<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'name',
        'email',
        'content',
        'ip',
        'headers',
    ];

    protected $casts = [
        'headers' => 'array',
        'sent' => 'boolean',
    ];
}
