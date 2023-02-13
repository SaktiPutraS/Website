<?php

namespace App\Http\Controllers;

use App\Imports\KaryawanImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class KaryawanController extends Controller
{
    public function index(){
        $list = DB::table('duta_karyawan')->orderBy('k_nik','asc')->get();
        $divisi = DB::table('duta_divisi')->get();
        return view('users.karyawan.index')->with(compact('list','divisi'));
    }
    public function get(Request $request){
        if ($request->ajax()) {
            $get=DB::table('duta_karyawan')->where('id',$request->id)->get();
            return response(json_encode($get));
        }
    }
    public function store(Request $request){
        DB::table('duta_karyawan')->insert([
            'k_nik'=>$request->get('k_nik'),
            'k_nama'=>$request->get('k_nama'),
            'k_divisi'=>$request->get('k_divisi'),
        ]);
        return redirect()->back()->with('status','Data has been added');
    }
    public function update(Request $request){
        DB::table('duta_karyawan')
        ->where('id',$request->id)
        ->update([
            'k_nik'=>$request->get('k_nik'),
            'k_nama'=>$request->get('k_nama'),
        ]);
        return redirect()->back()->with('status','Data has been updated');
    }
    public function destroy($id){
        DB::table('duta_karyawan')->where('id',$id)->delete();
        return redirect()->back()->with('status','Data has been deleted');
    }
    public function import(){
        Excel::import(new KaryawanImport, request()->file('your_file'));
        return redirect()->route('karyawan_index')->with('status','Data has been imported');
    }
}
