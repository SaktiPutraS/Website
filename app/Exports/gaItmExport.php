<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class gaItmExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $export=DB::table('ga_item')
        ->select('nama_barang','tanggal_barang','updated_at')
        ->orderBy('nama_barang','asc')
        ->get();
        return view('General_Affair.Item.itemExport')->with(compact('export'));
    }
}
