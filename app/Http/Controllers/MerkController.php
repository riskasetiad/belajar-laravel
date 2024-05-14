<?php

namespace App\Http\Controllers;
use App\Models\Merek;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    public function menampilkan()
    {
        $merek = Merek::all();
        return view('merk/index', compact('merek'));
    }
     public function show($id)
    {
        $merek = Merek::FindOrFail($id);
        return view('merk/show', compact('merek'));
    }
}
