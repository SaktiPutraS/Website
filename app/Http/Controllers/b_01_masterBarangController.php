<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class b_01_masterBarangController extends Controller
{
    public function index(){
        $list=DB::table('b_01_masterbarang')->orderBy('nomor_barang','desc')->get();
        return view('barang\item_IT\index')->with(compact('list'));
    }
}
