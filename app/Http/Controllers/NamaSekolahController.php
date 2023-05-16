<?php

namespace App\Http\Controllers;

use App\Models\NamaSekolah;
use Illuminate\Http\Request;
use App\Http\Requests\NamaSekolahRequest;

class NamaSekolahController extends Controller
{
    public function index(){
        $NamaSekolah = NamaSekolah::get();
        return view('index', compact('NamaSekolah'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $NamaSekolah =NamaSekolah::where('id',$id)->first();
        return view('edit', compact('NamaSekolah'));
    }

    public function lihat($id){
        $NamaSekolah =NamaSekolah::where('id',$id)->first();
        return view('lihat', compact('NamaSekolah'));
    }


    public function store (NamaSekolahRequest $request)
    {
        $NamaSekolah = new NamaSekolah();

        $NamaSekolah->nama_sekolah = $request->nama_sekolah;
        $NamaSekolah->alamat = $request->alamat;

        $NamaSekolah->save();

        return redirect('/');
    }
    public function update (NamaSekolahRequest $request, $id)
    {
        $NamaSekolah =NamaSekolah::where('id',$id)->first();

        $NamaSekolah->nama_sekolah = $request->nama_sekolah;
        $NamaSekolah->alamat = $request->alamat;

        $NamaSekolah->update();

        return redirect('/');
    }
    public function hapus ($id)
    {
        $NamaSekolah =NamaSekolah::where('id',$id)->first();

        $NamaSekolah->delete();

        return redirect('/');
    }
}
