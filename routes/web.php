<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

//route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Selamat datang di webapp saya<br>'
        . 'Laravel, emang keren.';
});

//route basic introduce yourself
Route::get('/biodata', function () {
    return '<h1>Halo!</h1>'
        . 'Nama: Riska Setia Deswita<br>'
        . 'Lahir: Bandung, 21 Desember 2006<br>'
        . 'Jenis Kelamin: Perempuan<br>'
        . 'Agama: Islam<br>'
        . 'Alamat: Jl.Situ Tarate<br>'
        . 'Telepon: 085798027948<br>';
});

//route basic pasing data to view
Route::get('animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetable_page', ['buah' => $fruit]);
});

//route parameter: parameter ditandai dengan {}
Route::get('product/{name}', function ($name) {
    return "produk: $name";
});

//buat sebuah route dengan 3 buah parameter
//nama, berat badan, tinggi badan
Route::get('rincian/{name}/{berat}/{tinggi}', function ($a, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan berat badan";
    } elseif ($bmi > 18.5) {
        $ket = "ideal";
    } elseif ($bmi < 18.5) {
        $ket = "kekurangan berat badan";
    }
    return "nama: $a <br>" .
        "berat badan: $bb <br>" .
        "tinggi badan:$tb <br>" .
        "hasil bmi: $bmi <br>" .
        "keterangan: $ket";
});

//route optional paramater ditandai dengan ?
Route::get('myname/{name?}',function($a = "abdu"){
    return "my name is $a";
});