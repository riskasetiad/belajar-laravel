<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama' => 'riska', 'jenis_kelamin' => 'perempuan', 'alamat' => 'situ tarate', 'agama' => 'islam', 'telepon' => 7948, 'email' => 'rskdeswita@gmail.com'],
            ['nama' => 'silva', 'jenis_kelamin' => 'perempuan', 'alamat' => 'cilisung', 'agama' => 'islam', 'telepon' => 8801, 'email' => 'silvaauliaf@gmail.com'],
            ['nama' => 'kayla', 'jenis_kelamin' => 'perempuan', 'alamat' => 'tci', 'agama' => 'islam', 'telepon' => 7949, 'email' => 'kylsyahwalia@gmail.com'],
            ['nama' => 'nashwa', 'jenis_kelamin' => 'perempuan', 'alamat' => 'tci', 'agama' => 'islam', 'telepon' => 2335, 'email' => 'nshwkyla@gmail.com'],
            ['nama' => 'zahira', 'jenis_kelamin' => 'perempuan', 'alamat' => 'cibaduyut', 'agama' => 'islam', 'telepon' => 6880, 'email' => 'zahirakrn@gmail.com'],
            ['nama' => 'alvin', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => 2123, 'email' => 'alvinpurwo@gmail.com'],
            ['nama' => 'robby', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'cangkuang', 'agama' => 'islam', 'telepon' => 2676, 'email' => 'rbbyapr@gmail.com'],
            ['nama' => 'surya', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'sukamenak', 'agama' => 'islam', 'telepon' => 4252, 'email' => 'suryatri@gmail.com'],
            ['nama' => 'diki', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'cibaduyut', 'agama' => 'islam', 'telepon' => 4647, 'email' => 'dikiini@gmail.com'],
            ['nama' => 'faiz', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => 4411, 'email' => 'faizaja@gmail.com'],
        ];

        DB::table('siswas')->insert($siswas);
    }
}
