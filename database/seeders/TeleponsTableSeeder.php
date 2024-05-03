<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
            ['nomor_telepon' => '088765352221', 'pengguna_id' => 1],
            ['nomor_telepon' => '083456432234', 'pengguna_id' => 2],
            ['nomor_telepon' => '088765544423', 'pengguna_id' => 3],
        ];
        DB::table('telepons')->insert($telepons);

    }
}
