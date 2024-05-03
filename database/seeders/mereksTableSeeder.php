<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class mereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mereks = [
            ['nama_merk' => 'Samsung'],
            ['nama_merk' => 'Nestle'],
            ['nama_merk' => 'Roma'],
        ];
        DB::table('mereks')->insert($mereks);

    }
}
