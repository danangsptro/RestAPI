<?php

namespace App\Http\Controllers;

use App\divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index(){
        return divisi::all();
    }

    public function create (Request $request){
        $divisi = new divisi();

        $divisi->divisi_karyawan = $request->divisi_karyawan;
        $divisi->save();

        return "Data berhasil di input";
    }
    public function update(Request $request, $id){
        $divisi_karyawan = $request->divisi_karyawan;

        $divisi = divisi::find($id);
        $divisi->divisi_karyawan = $divisi_karyawan;

        $divisi->save();

        return "Data berhasil di Update";
    }

    public function delete($id){
        $divisi = divisi::find($id);
        $divisi->delete();

        return "Data Berhasil di Delete";
    }
}
