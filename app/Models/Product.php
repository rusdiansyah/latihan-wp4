<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'stock',
        'picture',
        'description',
        'is_active',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
