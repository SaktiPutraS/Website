<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class monitorExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     //
    // }
    public function view(): View
    {
        // $exportData = DB::table('pro_panel_head as hd')
        // ->select('hd.panel_seri','hd.panel_nama','hd.panel_pelanggan','hd.panel_proyek','hd.panel_status_pekerjaan')
        $exportData=DB::table('inventaris_monitor')->orderBy('id','asc')
        ->get();
        return view('Inventaris.Monitor.monitor_export')->with(compact('exportData'));
    }
}
