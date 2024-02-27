<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = [
        'kode', 'lokasi', 'satuan', 'stok'
    ];

    protected $casts = [
        'stok'  => 'int'
    ];
}
