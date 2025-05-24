<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    protected $casts = [
        'buy_date' => 'datetime',
    ];

    public function getFormattedBuyDateAttribute(): ?string
    {
        return $this->buy_date?->format('Y-m-d');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
