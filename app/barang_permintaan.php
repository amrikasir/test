<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang_permintaan extends Model
{
    protected $fillable = [
        'id_permintaan', 'id_barang', 'qty'
    ];
}
