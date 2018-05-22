<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\isi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['isi'] = isi::all();
        return view('home')->with($data);
    }



    public function show($id)
    {
 
        $tab = isi::find($id);
       
 
        
        return view('home', ['tab' => $tab]);
    }



//insert
    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        //validasi
        $this->validate($request,[
            'nama' => 'required|email',
            'keterangan' => 'required|min:10'
            ]);


        // insert biasa
        isi::create($request->all());
 
        return redirect(route('home.index'))->with(["message"=>"berhasil di inputkan"]);
    }



//edit

    public function edit($id)
    {
        $tab = isi::find($id);
 
        return view('edit',['tab' => $tab]);
    }

    public function update(Request $request,$id)
    {
 
        isi::find($id)->update([
            'nama'             => $request->nama,
            'keterangan'       => $request->keterangan,
        ]);

        return redirect(route('home.index'))->with(["message"=>"berhasil di ubah"]);

    }



//hapus
    public function destroy($id)
    {
       
        $isi = isi::find($id);
        $isi->delete();
 
        return redirect()->back()->with(["message"=>"berhasil di hapus"]);
    }
}
