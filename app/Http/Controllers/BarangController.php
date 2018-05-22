<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;

class BarangController extends Controller
{
    public function index()
    {

        $data['isi'] = barang::all();
        return view('barang')->with($data);
    }

}
