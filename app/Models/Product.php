<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /* Product belongs to Category */
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    /* Product has one ProductOptionsGroup */
    public function productoptionsgroup()
    {
        return $this->hasOne(\App\Models\ProductOptionsGroup::class);
    }

    /* Product has many Image */
    public function image()
    {
        return $this->hasMany(\App\Models\Image::class);
    }
}
