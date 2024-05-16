<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
   
    protected $fillable = ['id', 'name_brand'];
    public $timestamps = true;

     //relasi ke table product
    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
