<?php

namespace App\Exports;

// use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class gaBalanceExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
        //
    // }
    public function view(): View
    {
        $export=db::table('ga_item_balance as gib')
        ->select
        (db::raw('gi.nama_barang, sum(if(gh.nama_gudang = "HO", gib.qty_barang, 0)) as HO'),
        DB::raw('sum(if(gh.nama_gudang = "Legok",gib.qty_barang,0)) as Legok'))
        ->join('ga_item as gi','gi.id_barang','=','gib.id_barang')
        ->join('ga_warehouse as gh','gh.id_gudang','=','gib.id_gudang')
        ->groupBy('gi.nama_barang')
        ->orderBy('gi.nama_barang','asc')
        ->get();
        return view('General_Affair.balance.stockExport')->with(compact('export'));
    }
}
