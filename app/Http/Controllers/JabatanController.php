<?php

namespace App\Http\Controllers;

use App\jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index(){
        return jabatan::all();
    }
    public function create(Request $request){
        $jabatan = new jabatan();

        $jabatan->jabatan_karyawan = $request->jabatan_karyawan;
        $jabatan->save();

        return "Data berhasil di input";
    }

    public function update(Request $request, $id){
        $jabatan_karyawan = $request->jabatan_karyawan;

        $jabatan = jabatan::find($id);
        $jabatan->jabatan_karyawan = $jabatan_karyawan;
        $jabatan->save();
        
        return "Data berhasil di Update";
    }
    public function delete($id){
        $jabatan = jabatan::find($id);
        $jabatan->delete();

        return "Data berhasil di delete";
    }
}
