<?php

namespace App\Imports;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;

class pn_00_team implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */

    public function model(array $row)
    {
        DB::table('pn_00_team')->insert([
            'Fullname'=>$row['fullname'],
            'Nickname'=>$row['nickname'],
            'Alias'=>$row['alias'],
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
