<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class pcExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        $exportData=DB::table('inventaris_pc')->orderBy('id','asc')
        ->get();
        return view('Inventaris.PC.pc_Export')->with(compact('exportData'));
    }
}
