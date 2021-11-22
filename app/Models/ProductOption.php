<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;

    /* ProductOption belongs to many Product */
    public function product()
    {
        $this->belongsToMany(\App\Models\Product::class);
    }
}
