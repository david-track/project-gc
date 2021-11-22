<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /* Image belongs to Category */
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    /* Image belongs to Product */
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }
}
