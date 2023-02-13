<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class divisiController extends Controller
{
    public function index(){
        $this->authorize('isAdmin');
        $list = DB::table('duta_divisi')
        ->get();
        return view('users.divisi.index')->with(compact('list'));
    }
    public function create(Request $request){
        $this->authorize('isAdmin');
        DB::table('duta_divisi')
        ->insert([
            'div_unique' => substr(md5($request->get('div_name')),0,25),
            'div_category' => $request->get('div_category'),
            'div_name' => $request->get('div_name')
        ]);
        return redirect()->back()->with('status','Divisi has been added');
    }
    public function delete($id){
        $this->authorize('isAdmin');
        DB::table('duta_divisi')->where('div_unique', '=', $id)->delete();
        return redirect()->back()->with('status','Division has been deleted');
    }
}
