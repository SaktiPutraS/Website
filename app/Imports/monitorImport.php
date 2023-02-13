<?php

namespace App\Imports;

use App\Models\monitor;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class monitorImport implements ToModel, WithHeadingRow, WithMultipleSheets
{
    /**
    * @param Collection $collection
    */
    public function model(array $row){

        return new monitor(
            [
                $monitor_number = $this->monitor_number(),
                $monitor_no_urut = $this->monitor_urut(),
                $monitor_unique = 'lap' . md5($monitor_number),
                $monitor_unique=substr($monitor_unique,0,25),
                    'monitor_unique'=> $monitor_unique,
                    'monitor_old_number'=>$row['monitor_old_number'],
                    'monitor_number'=> $monitor_number,
                    'monitor_urut'=> $monitor_no_urut,
                    'monitor_name'=> $row['monitor_name'],
                    'monitor_user'=> $row['monitor_user'],
                    'monitor_location'=> $row['monitor_location'],
                    // 'monitor_ty  pe'=> $row['monitor_type'],
                    'monitor_size'=> $row['monitor_size'],
                    'monitor_energy'=> $row['monitor_energy'],
                    'monitor_price'=> $row['monitor_price'],
                    'monitor_condition'=> $row['monitor_condition'],
                    'monitor_buy_date'=> $row['monitor_buy_date'],
                    'created_at'=>Carbon::now(),
            ]
                );

    }
    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }
    public function monitor_urut()
    {
        $monitor_urut = DB::table('inventaris_monitor')->select('monitor_urut')->orderBy('id', 'desc')->first();
        if (empty($monitor_urut->monitor_urut)) {
            $monitor_no_urut = 1;
        } else {
            $monitor_no_urut = $monitor_urut->monitor_urut + 1;
        }
        return $monitor_no_urut;
    }
    public function monitor_number()
    {
        $monitor_no_urut = $this->monitor_urut();
        $tahun = date('Y');
        $monitor_no = substr(str_repeat(0, 3) . $monitor_no_urut, -3);
        $monitor_number = '' . $monitor_no  . '/MON/' . $tahun . '';
        return $monitor_number;
    }
}
