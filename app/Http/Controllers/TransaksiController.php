<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransaksiDetailResource;
use App\Http\Resources\TransaksiResource;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();

        return TransaksiResource::collection($transaksi);
    }

    public function show($id)
    {
        $transaksi = Transaksi::with('barang:id,kategori_id,nama_barang,harga', 'pembeli:id,name', 'kasir:id,name')->findOrFail($id);

        return new TransaksiDetailResource($transaksi);
    }
}
