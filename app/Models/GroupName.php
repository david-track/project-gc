<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupName extends Model
{
    use HasFactory;

    /* GroupName belongs to many OptionsGroup */
    public function optionsgroup()
    {
        return $this->belongsToMany(\App\Models\OptionsGroup::class);
    }
}
