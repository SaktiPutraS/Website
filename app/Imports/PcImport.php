<?php

namespace App\Imports;

use App\Models\PC;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
class PcImport implements ToModel, WithHeadingRow, WithMultipleSheets
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PC([
            $pc_number=$this->pc_number($row['pc_location']),
            $pc_unique = 'pc' . md5($pc_number),
            $pc_unique=substr($pc_unique,0,25),
           'pc_urut'=> $this->pc_urut(),
              'pc_unique'=> $pc_unique,
              'pc_user' => $row['pc_user'],
              'pc_old_number' => $row['pc_old_number'],
              'pc_number' => $pc_number,
              'pc_price' => $row['pc_price'],
              'pc_location' => $row['pc_location'],
              'pc_condition' => $row['pc_condition'],
              'pc_mainboard' => $row['pc_mainboard'],
              'pc_processor' => $row['pc_processor'],
              'pc_vga' => $row['pc_vga'],
              'pc_ram' => $row['pc_ram'],
              'pc_hdd' => $row['pc_hdd'],
              'pc_ssd' => $row['pc_ssd'],
              'pc_os' => $row['pc_os'],
              'pc_buy_date' => $row['pc_buy_date'],
        ]);
    }
    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }
    public function pc_urut(){
        $pc_urut = DB::table('inventaris_pc')->select('pc_urut')->orderBy('id', 'desc')->first();
        if (empty($pc_urut->pc_urut)) {
            $pc_no_urut = 1;
        } else {
            $pc_no_urut = $pc_urut->pc_urut + 1;
        }
        return $pc_no_urut;
    }
    public function pc_number($location)
    {
        $pc_no_urut = $this->pc_urut();
        $lokasi = $location;
        $lokasisub = substr($lokasi, 0, 2);
        if ($lokasisub == "HO") {
            $lokasisub = "HO";
        } else {
            $lokasisub = "LGK";
        }
        $tahun = date('Y');
        $pc_no = substr(str_repeat(0, 3) . $pc_no_urut, -3);
        $pc_number = '' . $pc_no . '/' . $lokasisub . '/PC/' . $tahun . '';
        return $pc_number;
    }
}
