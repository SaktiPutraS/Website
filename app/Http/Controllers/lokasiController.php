<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lokasiController extends Controller
{
    public function index(){
        $this->authorize('isAdmin');
        $list = DB::table('duta_lokasi')
        ->get();
        return view('users.lokasi.index')->with(compact('list'));
    }
    public function create(Request $request){
        $this->authorize('isAdmin');
        DB::table('duta_lokasi')
        ->insert([
            'loc_unique' => substr(md5($request->get('loc_name')),0,25),
            'loc_name' => $request->get('loc_name'),
            'created_at' => Carbon::now()
        ]);
        return redirect()->back()->with('status','lokasi has been added');
    }
    public function delete($id){
        $this->authorize('isAdmin');
        DB::table('duta_lokasi')->where('loc_unique', '=', $id)->delete();
        return redirect()->back()->with('status','lokasion has been deleted');
    }
}
