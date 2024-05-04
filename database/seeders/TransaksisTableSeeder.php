<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 10, 'tanggal' => '2024/04/04'],
            ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => 12, 'tanggal' => '2024/04/08'],
            ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => 11, 'tanggal' => '2024/04/10'],
            ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 16, 'tanggal' => '2024/04/15'],
            ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => 19, 'tanggal' => '2024/04/18'],
            ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => 21, 'tanggal' => '2024/04/20'],
        ];
        DB::table('transaksis')->insert($transaksi);

    }
}
