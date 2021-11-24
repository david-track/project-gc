<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionsGroup extends Model
{
    use HasFactory;

    /* OptionsGroup belongs to many GroupName */
    public function groupname()
    {
        return $this->belongsToMany(\App\Models\GroupName::class);
    }

    /* OptionsGroup belongs to many ProductOption */
    public function productoption()
    {
        return $this->belongsToMany(\App\Models\ProductOption::class);
    }

    /* OptionsGroup belongs to ProductOptionsGroup */
    public function productoptionsgroup()
    {
        return $this->belongsTo(\App\Models\ProductOptionsGroup::class);
    }
}
