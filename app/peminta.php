<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminta extends Model
{
    protected $fillable = [
        'nik', 'nama', 'depart'
    ];
}
