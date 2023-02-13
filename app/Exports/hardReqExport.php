<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class hardReqExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
    public function view(): View
    {
        $exportData= DB::table('hard_req')
        ->get();
        return view('Form.Hardware.Permintaan.hard_req_Export')->with(compact('exportData'));
    }
}
