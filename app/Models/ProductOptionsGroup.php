<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOptionsGroup extends Model
{
    use HasFactory;

    /* ProductOptionsGroup has many OptionsGroup */
    public function optionsgroup()
    {
        return $this->hasMany(\App\Models\OptionsGroup::class);
    }

    /* ProductOptionsGroup belongs to Product */
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }
}
