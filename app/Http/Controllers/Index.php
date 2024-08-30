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
		$request->validate([
			'nik'       => 'required|exists:pemintas,nik',
			'barang'    => 'required',
			'req_at'	=> 'required'
		],[
			'nik.required'		=> 'NIK peminta barang tidak boleh kosong !',
			'barang.required'	=> 'Barang yang di minta tidak boleh kosong !',
			'req_at.required'	=> 'Kami perlu tau kapan barang ini di minta !!!',
			'nik.exists'		=> 'NIK peminta tidak terdaftar !',
		]);

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
			return $query->where('kode', 'like', '%'.$search.'%')
				->orWhere('nama_barang', 'like', '%'.$search.'%');
		})
		->when($req->query('except', null), function($query, $except){
			return $query->whereNotIn('id', explode(',', $except));
		})
		->limit(10)->get();
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
		try {
			return peminta::where('nik', $request->query('nik', null))->firstOrFail();
		} catch (\Exception $th) {
			return [
				'message' => 'NIK tidak terdaftar'
			];
		}
	}

	public function ListBarang(){
		return view('barang', [
			'items'	=> barang::get()
		]);
	}

	public function ListPeminta(){
		return view('member', [
			'items'	=> peminta::get()
		]);
	}
}
