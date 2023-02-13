<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class p3cExport implements FromView, WithMapping, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $p3c = DB::table('pn_01_p3c as p3c')
            ->get();
        return view('Produksi\admin_01_p3c\export')->with(compact('p3c'));
    }
    public function map($list): array
    {
        return [
            $list->nomor_seri_panel,
            $list->nomor_wo,
            $list->nama_customer,
            $list->nama_panel,
            $list->cell,
            $list->nama_proyek,
            $list->deadline_produksi,
            $list->deadline_qc_pass,
            $list->status_pekerjaan,
            $list->jenis_panel,
            $list->jenis_tegangan,
            $list->tipe_panel,
            $list->mfd,
            $list->panel_status,
            $list->admin,
            $list->det_engineering,
            $list->created_at,
            $list->updated_at

        ];
    }
    public function columnFormats(): array
    {
        return [
            'A' => NumberFormat::FORMAT_NUMBER,
            'B' => NumberFormat::FORMAT_TEXT,
            'C' => NumberFormat::FORMAT_TEXT,
            'D' => NumberFormat::FORMAT_TEXT,
            'E' => NumberFormat::FORMAT_TEXT,
            'F' => NumberFormat::FORMAT_TEXT,
            'G' => NumberFormat::FORMAT_TEXT,
            'H' => NumberFormat::FORMAT_DATE_DATETIME,
            'I' => NumberFormat::FORMAT_DATE_DATETIME,
            'J' => NumberFormat::FORMAT_TEXT,
            'K' => NumberFormat::FORMAT_TEXT,
            'L' => NumberFormat::FORMAT_TEXT,
            'M' => NumberFormat::FORMAT_TEXT,
            'N' => NumberFormat::FORMAT_TEXT,
            'O' => NumberFormat::FORMAT_TEXT,
            'P' => NumberFormat::FORMAT_TEXT,
            'P' => NumberFormat::FORMAT_TEXT,
            'Q' => NumberFormat::FORMAT_DATE_DATETIME,
            'R' => NumberFormat::FORMAT_DATE_DATETIME,
        ];
    }
}
