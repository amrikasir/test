<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = [
        'kode', 'nama_barang', 'lokasi', 'satuan', 'stok'
    ];

    protected $casts = [
        'stok'  => 'int'
    ];

    public function getKodeAttribute(){
        return $this->attributes['kode'] . ' - ' . $this->attributes['nama_barang'];
    }
}
