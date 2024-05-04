<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_barang', 'id_pembeli', 'jumlah', 'tanggal'];
    public $timestamps = true;

    //relasi ke table telepon
    public function Barang2s()
    {
        return $this->BelongsTo(Barang2s::class, 'id_barang');
    }

    public function Pembeli()
    {
        return $this->BelongsTo(Pembeli::class, 'id_pembeli');
    }
}
