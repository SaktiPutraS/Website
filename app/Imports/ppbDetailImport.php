<?php

namespace App\Imports;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ppbDetailImport implements ToModel, WithHeadingRow, WithMultipleSheets
{
    /**
    * @param Collection $collection
    */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function model(array $row)
    {
        // dd($this->data);
            $desk=$row['ppb_deskripsi'];
            $pengajuan=substr($this->data,10);
            $id_barang_detail=''.$pengajuan.''.substr($desk,10).'';
            DB::table('proc_ppb_detail')->insert([
                'id_pengajuan'=>$this->data,
                'id_barang_detail'=>$id_barang_detail,
                'ppb_qty'=>$row['ppb_qty'],
                'ppb_satuan'=>$row['ppb_satuan'],
                'ppb_deskripsi'=>$desk,
                'ppb_tipe_barang'=>$row['ppb_tipe_barang'],
                'ppb_merek'=>$row['ppb_merek'],
                'ppb_pemasok_panel'=>$row['ppb_pemasok_panel'],
                'created_at'=>Carbon::now(),
            ]);
        // }
        // DB::table('po_panel_det')->insert([
        //     'panel_cell'=>$row['cell'],
        //     'panel_spv'=>$row['SPV'],
        //     'panel_wiring'=>$row['Wiring'],
        //     'panel_mekanik'=>$row['Mekanik'],
        //     'panel_FW'=>$row['Jenis_F_W'],
        //     'panel_LM'=>$row['Jenis_L_M'],
        //     'panel_status_komponen'=>$row['Status_Komponen'],
        //     'created_at'=>Carbon::now(),
        //     'updated_at'=>Carbon::now()
        // ]);
    }
    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }
}
