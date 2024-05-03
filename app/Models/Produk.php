<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_produk', 'jumlah', 'tanggal_produk', 'id_merk'];
    public $timestamps = true;

    //relasi ke table telepon
    public function Merek()
    {
        return $this->BelongsTo(Merek::class, 'id_merk');
    }
}
