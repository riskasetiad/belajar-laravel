<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'TV','jumlah' => '4', 'tanggal_produk' => '2024/04/04', 'id_merk' => '1'],
            ['nama_produk' => 'Milo','jumlah' => '192', 'tanggal_produk' => '2024/01/10', 'id_merk' => '2'],
            ['nama_produk' => 'Biskuit Kelapa','jumlah' => '110', 'tanggal_produk' => '2024/02/14', 'id_merk' => '3'],
            ['nama_produk' => 'HP','jumlah' => '2', 'tanggal_produk' => '2024/04/04', 'id_merk' => '1'],
            ['nama_produk' => 'KitKat','jumlah' => '188', 'tanggal_produk' => '2024/01/10', 'id_merk' => '2'],
            ['nama_produk' => 'Roma Arden','jumlah' => '170', 'tanggal_produk' => '2024/02/14', 'id_merk' => '3'],
        ];
        DB::table('produks')->insert($produks);

    }
}
