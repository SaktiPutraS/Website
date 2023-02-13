<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class gaBalanceReportExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $export=db::table('ga_balance_logs as gbl')
        ->select('dk.k_nama','dd.div_name','gh.nama_gudang','gi.nama_barang','gbl.qty','gbl.alasan_pengajuan','gbl.status_pengajuan','gbl.tgl_pengajuan','gbl.updated_at')
        ->join('ga_item as gi','gi.id_barang','=','gbl.id_barang')
        ->join('ga_warehouse as gh','gh.id_gudang','=','gbl.id_gudang')
        ->join('duta_divisi as dd','dd.div_unique','=','gbl.id_divisi')
        ->join('duta_karyawan as dk','dk.k_nik','=','gbl.id_user')
        ->orderBy('gbl.created_at','desc')
        ->get();
        return view('General_Affair.balance.balanceReportExport')->with(compact('export'));
    }
}
