<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class maintenanceController extends Controller
{
    public function index(){
        $list=DB::table('maintenance')->orderBy('created_at','desc')->get();

    }
    public function create(){
        $karyawan=DB::table('duta_karyawan')->orderBy('k_nama','asc')->get();
        $lokasi=DB::table('duta_lokasi')->orderBy('loc_name','asc')->get();
        $lokasiprinter=DB::table('duta_lokasi')->orderBy('loc_name','asc')->get();
        $printer=DB::table('inventaris_printer')->orderBy('printer_number','asc')->get();
        $pc=DB::table('inventaris_pc')->orderBy('pc_number')->get();
        $mon=DB::table('inventaris_monitor')->orderBy('monitor_number')->get();
        $pic1=DB::table('duta_karyawan')->where('k_divisi','EDP')->orderBy('k_nama')->get();
        $pic2=DB::table('duta_karyawan')->where('k_divisi','EDP')->orderBy('k_nama')->get();
        return view('Maintenance.create')->with(compact('karyawan','lokasi','lokasiprinter','printer','pc','mon','pic1','pic2'));
    }
    public function store(Request $request){
        switch ($request->get('type')) {
            case 'hardware':
                DB::table('maintenance')->insert([
                    'id_user'=> $request->get('id_user'),
                    'id_pc'=> $request->get('id_pc'),
                    'id_pic'=> $request->get('id_pic'),
                    'id_monitor'=> $request->get('id_monitor'),
                    'id_lokasi'=> $request->get('id_lokasi'),
                    'check_monitor'=> $request->get('check_monitor'),
                    'clean_cpu_monitor'=> $request->get('clean_cpu_monitor'),
                    'check_acc'=> $request->get('check_acc'),
                    'check_mainboard'=> $request->get('check_mainboard'),
                    'check_hdd'=> $request->get('check_hdd'),
                    'check_prosessor'=> $request->get('check_prosessor'),
                    'check_ram'=> $request->get('check_ram'),
                    'check_jaringan'=> $request->get('check_jaringan'),
                    'op_os'=> $request->get('op_os'),
                    'check_antivirus'=> $request->get('check_antivirus'),
                    'os_software'=> $request->get('os_software'),
                    'backup_email'=> $request->get('backup_email'),
                    'tgl_maintenance'=> $request->get('tgl_maintenance'),
                    'note'=> $request->get('note'),
                    'created_at'=>Carbon::now()
                ]);
                break;
                case 'printer':
                    DB::table('maintenance')->insert([
                        'id_user'=> $request->get('id_user'),
                        'id_pic'=> $request->get('id_pic'),
                        'id_printer'=> $request->get('id_printer'),
                        'id_lokasi'=> $request->get('id_lokasi'),
                        'check_printhead'=> $request->get('check_printhead'),
                        'check_tinta'=> $request->get('check_tinta'),
                        'clean_printer'=> $request->get('clean_printer'),
                        'tgl_maintenance'=> $request->get('tgl_maintenance'),
                        'note'=> $request->get('note'),
                        'created_at'=>Carbon::now()
                    ]);
                break;
        }

        return redirect()->back()->with('status','Data has been added');
    }
    public function update(Request $request){
        DB::table('maintenance')->where('id',$request->get('id'))->update([
            'id_user'=> $request->get('id_user'),
            'id_pc'=> $request->get('id_pc'),
            'id_monitor'=> $request->get('id_monitor'),
            'check_monitor'=> $request->get('check_monitor'),
            'check_acc'=> $request->get('check_acc'),
            'check_mainboard'=> $request->get('check_mainboard'),
            'check_hdd'=> $request->get('check_hdd'),
            'check_prosessor'=> $request->get('check_prosessor'),
            'check_ram'=> $request->get('check_ram'),
            'check_jaringan'=> $request->get('check_jaringan'),
            'clean_cpu'=> $request->get('clean_cpu'),
            'op_os'=> $request->get('op_os'),
            'check_antivirus'=> $request->get('check_antivirus'),
            'os_software'=> $request->get('os_software'),
            'backup_email'=> $request->get('backup_email'),
            'tgl_maintenance'=> $request->get('tgl_maintenance'),
            'created_at'=>Carbon::now()
        ]);
        return redirect()->back()->with('status','Data has been updated');
    }
}
