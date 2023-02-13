<?php

namespace App\Imports;

use App\Models\Laptop;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LaptopImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new Laptop([
            // dd($row['laptop_user']),
            $laptop_number=$this->laptop_number(),
            // $laptop_unique = 'laptop' . md5($laptop_number),
            $laptop_unique=substr('laptop' . md5($laptop_number),0,25),
            'laptop_urut'=> $this->laptop_urut(),
            'laptop_unique'=> $laptop_unique,
            // 'laptop_user' => $row['laptop_user'],
            'laptop_user' => $row['laptop_user'],
            'laptop_name' => $row['laptop_name'],
            'laptop_old_number' => $row['laptop_old_number'],
            'laptop_number' => $laptop_number,
            'laptop_serial_number' =>$row['laptop_serial_number'],
            'laptop_price' => $row['laptop_price'],
            'laptop_status' => $row['laptop_status'],
            'laptop_condition' => $row['laptop_condition'],
            'laptop_processor' => $row['laptop_processor'],
            'laptop_vga' => $row['laptop_vga'],
            'laptop_ram' => $row['laptop_ram'],
            'laptop_hdd' => $row['laptop_hdd'],
            'laptop_ssd' => $row['laptop_ssd'],
            'laptop_os' => $row['laptop_os'],
            'laptop_buy_date' => $row['laptop_buy_date']
        ]);
    }
    public function laptop_urut(){
        $laptop_urut = DB::table('inventaris_laptop')->select('laptop_urut')->orderBy('id', 'desc')->first();
        if (empty($laptop_urut->laptop_urut)) {
            $laptop_no_urut = 1;
        } else {
            $laptop_no_urut = $laptop_urut->laptop_urut + 1;
        }
        return $laptop_no_urut;
    }
    public function laptop_number()
    {
        $laptop_no_urut = $this->laptop_urut();
        $tahun = date('Y');
        $laptop_no = substr(str_repeat(0, 3) . $laptop_no_urut, -3);
        $laptop_number = '' . $laptop_no  . '/LPT/' . $tahun . '';
        return $laptop_number;
    }
}
