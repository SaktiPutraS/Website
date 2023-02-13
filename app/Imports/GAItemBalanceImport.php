<?php
namespace App\Imports;

use Carbon\Carbon;
use GaItem;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class GAItemBalanceImport implements ToModel, WithHeadingRow, WithMultipleSheets
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        // return new GAItem([
        //     $laptop_unique=substr('laptop' . md5($laptop_number),0,25),
        //     'laptop_urut'=> $this->laptop_urut(),
        //     'laptop_unique'=> $laptop_unique,
        //     'laptop_name' => $row['laptop_name'],
        //     'laptop_user' => $row['laptop_user'],
        //     'laptop_old_number' => $row['laptop_old_number'],
        //     'laptop_number' => $laptop_number,
        //     'laptop_serial_number' =>$row['laptop_serial_number'],
        //     'laptop_price' => $row['laptop_price'],
        //     'laptop_status' => $row['laptop_status'],
        //     'laptop_condition' => $row['laptop_condition'],
        //     'laptop_processor' => $row['laptop_processor'],
        //     'laptop_vga' => $row['laptop_vga'],
        //     'laptop_ram' => $row['laptop_ram'],
        //     'laptop_hdd' => $row['laptop_hdd'],
        //     'laptop_ssd' => $row['laptop_ssd'],
        //     'laptop_os' => $row['laptop_os'],
        //     'laptop_buy_date' => $row['laptop_buy_date'],
        // ]);
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
