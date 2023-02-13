<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class panelExport implements FromView, WithMapping, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $collection = DB::table('pn_01_p3c as p3c')
            ->select('p3c.*','tm.Fullname as spv_name','pd.*','qc.*','eng.*','log.*')
            ->leftJoin('pn_02_produksi as pd','pd.id_panel','p3c.id')
            ->leftJoin('pn_03_qc as qc','qc.id_panel','p3c.id')
            ->leftJoin('pn_04_eng as eng','eng.id_panel','p3c.id')
            ->leftJoin('pn_04_logistik as log','log.id_panel','p3c.id')
            ->leftJoin('pn_00_team as tm','tm.id','pd.spv')
            ->get();
        return view('procurement.export')->with(compact('collection'));
    }
    public function map($data): array
    {
        return [
            $data->ppb_no,
            $data->ppb_tgl_pengajuan,
            $data->bulan,
            $data->ppb_tgl_deadline,
            $data->ppb_pengaju,
            $data->barang,
            $data->ppb_tipe,
            $data->ppb_alasan,
            $data->ppb_divisi,
            $data->ppb_proyek,
            $data->ppb_nrp,
            $data->ppb_npp,
            $data->ppb_tgl_terima,
            $data->ppb_tgl_selesai,
            $data->ppb_status,
            $data->ppb_tgl_coa,
            $data->ppb_coa,
        ];
    }
    public function columnFormats(): array
    {
        return [
            'A' => NumberFormat::FORMAT_NUMBER,
            'B' => NumberFormat::FORMAT_TEXT,
            'C' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'D' => NumberFormat::FORMAT_NUMBER_00,
            'E' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'F' => NumberFormat::FORMAT_TEXT,
            'G' => NumberFormat::FORMAT_TEXT,
            'H' => NumberFormat::FORMAT_TEXT,
            'I' => NumberFormat::FORMAT_TEXT,
            'J' => NumberFormat::FORMAT_TEXT,
            'K' => NumberFormat::FORMAT_TEXT,
            'L' => NumberFormat::FORMAT_TEXT,
            'M' => NumberFormat::FORMAT_TEXT,
            'N' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'O' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'P' => NumberFormat::FORMAT_TEXT,
            'Q' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'R' => NumberFormat::FORMAT_TEXT,
        ];
    }
}
