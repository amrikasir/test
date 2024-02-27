<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permintaan extends Model
{
    protected $fillable = [
        'nik', 'req_at'
    ];

    public function person(){
        return $this->hasOne(peminta::class, 'nik', 'nik');
    }

    public function detail(){
        return $this->hasOne(barang_permintaan::class, 'id', 'id_permintaan');
    }
}
