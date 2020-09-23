<?php

namespace App\Http\Controllers;

use App\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        return karyawan::all();
    }

    public function create(Request $request){
        $karyawan = new karyawan();

        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->alamat_karyawan = $request->alamat_karyawan;
        $karyawan->nomor_telepon = $request->nomor_telepon;

        $karyawan->save();

        return 'Data Berhasil di Input';
    }

    public function update(Request $request, $id){
        $nama_karyawan = $request->nama_karyawan;
        $alamat_karyawan = $request->alamat_karyawan;
        $nomor_telepon = $request->nomor_telepon;

        $karyawan = karyawan::find($id);
        $karyawan->nama_karyawan = $nama_karyawan;
        $karyawan->alamat_karyawan = $alamat_karyawan;

        $karyawan->save();

        return 'Data Berhasil di Update';
    }

    public function delete($id){
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return "Data Berhasil di delete";
    }
}
