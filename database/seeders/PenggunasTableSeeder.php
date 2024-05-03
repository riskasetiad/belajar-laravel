<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['nama' => 'Riska'],
            ['nama' => 'Silva'],
            ['nama' => 'Kayla'],
        ];
        DB::table('penggunas')->insert($penggunas);
    }
}
