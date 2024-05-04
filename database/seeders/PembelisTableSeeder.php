<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli' => 'Riska Setia D', 'jenis_kelamin' => 'Perempuan' ], 
            ['nama_pembeli' => 'Silva Aulia F', 'jenis_kelamin' =>'Perempuan' ], 
            ['nama_pembeli' => 'Kayla Syahwalia', 'jenis_kelamin' => 'Perempuan' ], 
        ];
        DB::table('pembelis')->insert($pembelis);

    }
}
