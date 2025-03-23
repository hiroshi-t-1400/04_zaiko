<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ja',
        'name_en',
        'quantity',
        'unit_of_measure',
        'category_id',
        'price',
        'buy_date',
        'reorder_point',
        'safety_stock',
        'description_ja',
        'img_path',
        'like_count',
    ];
}
