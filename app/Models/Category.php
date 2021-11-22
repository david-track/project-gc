<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /* Category has many Product */
    public function product()
    {
        return $this->hasMany(\App\Models\Product::class);
    }

    /* Category has many Image */
    public function image()
    {
        return $this->hasMany(\App\Models\Image::class);
    }
}
