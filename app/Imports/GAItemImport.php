<?php

namespace App\Imports;

use Carbon\Carbon;
use GaItem;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class GAItemImport implements ToModel, WithHeadingRow, WithMultipleSheets
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {

        DB::table('ga_item')->insert([
            'nama_barang'=>$row['nama_barang'],
            'tanggal_barang'=>$row['tanggal_barang'],
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
