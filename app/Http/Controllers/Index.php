<?php

namespace App\Http\Controllers;

use App\barang;
use App\barang_permintaan;
use App\peminta;
use App\permintaan;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function listPermintaan(){
        $list = permintaan::all();

        return view('list', [
            'items' => $list
        ]);
    }

    public function permintaanBaru(){
        return view('input');
    }

    public function prossesPermintaan(Request $request){
        $permintaan = permintaan::create($request->toArray());

        foreach($request->input('barang', []) as $index => $value){
            barang_permintaan::create([
                'id_permintaan'     => $permintaan->id,
                'id_barang'         => $value,
                'qty'               => $qty = $request->input('qty')[$index]
            ]);

            barang::where('id', $value)->decrement('stok', $qty);
        }

        return redirect()->route('home');
    }

    public function apiBarang(Request $req){
        $items = barang::when($req->query('search', null), function($query, $search){
            return $query->where('kode', 'like', '%'.$search.'%');
        })
        ->when($req->query('except', null), function($query, $except){
            return $query->whereNotIn('id', explode(',', $except));
        })
        ->limit(5)->get();
        return [
            'success' => true,
            'results' => $items
        ];
    }

    public function fetchBarang(barang $id){
        return [
            'success'   => true,
            'results'   => $id
        ];
    }

    public function fetchPeminta(Request $request){
        return peminta::where('nik', $request->query('nik', null))->first();
    }
}
