<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class hardFixExport implements FromView
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
        $exportData= DB::table('hard_fix_general')
        ->get();
        return view('Form.Hardware.Perbaikan.hard_fix_export')->with(compact('exportData'));
    }
}
