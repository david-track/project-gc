<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;

    /* ProductOption belongs to many OptionsGroup */
    public function optionsgroup()
    {
        return $this->belongsToMany(\App\Models\OptionsGroup::class);
    }
}
