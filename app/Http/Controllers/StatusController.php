<?php

namespace App\Http\Controllers;

use App\status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
        return status::all();
    }
    public function create(Request $request){
        $status = new status();

        $status->status_karyawan = $request->status_karyawan;
        $status->save();

        return "Data berhasil di Input";
    }
    public function update(Request $request, $id){
        $status_karyawan = $request->status_karyawan;

        $status = status::find($id);
        $status->status_karyawan = $status_karyawan;
        
        $status->save();

        return "Data berhasil di Update";
    }
    public function delete($id){
        $status = status::find($id);
        $status->delete();

        return "Data berhasil di Delete";
    }
}
