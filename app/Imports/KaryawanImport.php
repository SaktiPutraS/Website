<?php

namespace App\Imports;

use App\Models\Karyawan as ModelsKaryawan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class KaryawanImport implements ToModel, WithHeadingRow, WithMultipleSheets
{
    /**
    * @param Collection $collection
    */
    public function model(array $row){
        return new ModelsKaryawan([
            'k_nik' => $row['k_nik'],
            'k_nama' => $row['k_nama'],
            'k_divisi' => $row['k_divisi'],
        ]);
    }
    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }
}
