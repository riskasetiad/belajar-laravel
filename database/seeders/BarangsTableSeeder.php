<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama' => 'Buku', 'jumlah' => 100],
            ['nama' => 'Pensil', 'jumlah' => 100],
            ['nama' => 'Penghapus', 'jumlah' => 100],
        ];
//masukkan data ke database
        DB::table('barangs')->insert($barangs);

    }
}
