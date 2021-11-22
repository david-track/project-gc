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
        $this->belongsTo(\App\Models\Category::class);
    }

    /* Product has many ProductOption */
    public function option()
    {
        $this->hasMany(\App\Models\ProductOption::class);
    }

    /* Product has many Image */
    public function image()
    {
        $this->hasMany(\App\Models\Image::class);
    }
}
