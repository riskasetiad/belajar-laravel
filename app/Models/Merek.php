<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_merk'];
    public $timestamps = true;

    //relasi ke table produk
    public function Produk()
    {
        return $this->hasMany(Produk::class);
    }
}
