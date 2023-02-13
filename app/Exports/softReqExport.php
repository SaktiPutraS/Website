<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class softReqExport implements FromView
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
        $exportData= DB::table('soft_req')
        ->get();
        return view('Form.Software.Permintaan.soft_req_Export')->with(compact('exportData'));
    }
}
