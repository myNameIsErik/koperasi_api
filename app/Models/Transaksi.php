<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id', 'jumlah', 'total', 'nama_pembeli', 'nama_kasir'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }

    public function pembeli()
    {
        return $this->belongsTo(User::class, 'nama_pembeli', 'id');
    }

    public function kasir()
    {
        return $this->belongsTo(User::class, 'nama_kasir', 'id');
    }
}
