<?php

namespace App\Imports;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

    class panelImport implements ToModel, WithHeadingRow, WithMultipleSheets
    {
        /**
        * @param Collection $collection
        */
        public function model(array $row)
        {

            $panel_nomor=1;
            // DB::table('panel_header')->select('panel_nomor')->orderBy('panel_nomor','desc')->take(1)->get();
            $nomor = DB::table('pro_panel_head')->select('panel_nomor')->orderBy('panel_nomor', 'desc')->first();
            // print same nomor if panel_name, pelanggan, & project match with database
            $nomorSub = DB::table('pro_panel_head')
            ->select('panel_nomor')
            ->where('panel_nama',$row['Nama_Panel'])
            ->where('panel_pelanggan',$row['Nama_Pelanggan'])
            ->where('panel_proyek',$row['Nama_Proyek'])
            ->orderBy('panel_nomor','desc')
            ->first();
            if (empty($nomor->panel_nomor)) {
                $panel_nomor = 1;
            } else {
                if (empty($nomorSub->panel_nomor)) {
                    $panel_nomor = $nomor->panel_nomor + 1;
                } else {
                    $panel_nomor = $nomorSub->panel_nomor;
                }

            }
            $panel_cell=$row['cell'];
            $panel_FW=$row['Jenis_F_W'];
            $panel_LM=$row['Jenis_L_M'];
            $panel_nomor= sprintf('%04d', $panel_nomor); //ubah nomor dengan depan 000
            $panel_cell= sprintf('%02d', $panel_cell); //ubah nomor dengan depan 000
            $panel_seri=substr(date('Y'),2,2) . date('m') . $panel_nomor .$panel_cell. $panel_FW .  $panel_LM;
        DB::table('po_panel_head')->insert([
            'panel_nomor'=>$panel_nomor,
            'panel_seri'=>$panel_seri,
            'panel_nama'=>$row['Nama_Panel'],
            'panel_pelanggan'=>$row['Nama_Pelanggan'],
            'panel_proyek'=>$row['Nama_Proyek'],
            'panel_status_pekerjaan'=>$row['Status_Pekerjaan'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('po_panel_det')->insert([
            'panel_seri'=>$panel_seri,
            'panel_cell'=>$row['cell'],
            'panel_spv'=>$row['SPV'],
            'panel_wiring'=>$row['Wiring'],
            'panel_mekanik'=>$row['Mekanik'],
            'panel_FW'=>$row['Jenis_F_W'],
            'panel_LM'=>$row['Jenis_L_M'],
            'panel_status_komponen'=>$row['Status_Komponen'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }
}
