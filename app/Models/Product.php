<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $casts = [
        'colors' => 'array',
        'sizes' => 'array',
        'styles' => 'array',
        'materials' => 'array',
        'custom_options' => 'array',
        'images' => 'array',
        'quantities_pricing_table' => 'array',
    ];

    use HasFactory;
}
