<?php

namespace App\Http\Controllers;

use App\Exports\gaBalanceExport;
use App\Exports\gaBalanceReportExport;
use App\Exports\gaItmExport;
use App\Imports\GAItemImport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Expr\AssignOp\Concat;

class generalAffair extends Controller
{
    public function create_infra(){
        return view('General_Affair.Perbaikan_Infra.create');
    }
    public function atk_index(){
        return view('General_Affair.Permintaan_ATK.create');
    }

    public function item(){
        $list = DB::table('ga_item')->orderBy('nama_barang','asc')->get();
        return view('General_Affair.item.index')->with(compact('list'));
    }
    public function itm_create(){
        return view('General_Affair.item.itm_create');
    }
    public function itm_store(Request $request){
        DB::table('ga_item')->insert([
            'nama_barang'=>$request->get('nama_barang'),
            'tanggal_barang'=>$request->get('tanggal_barang'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        // return redirect()->route('ticket')->with('status','Data has been submitted');
        return redirect()->route('itm')->with('status','Data telah dibuat');
        // return view('General_Affair.item.itm_create');
    }
    public function itm_export()
    {
        $time=Carbon::now();
        $time=date_format($time,'d-m-y, H.i.s');
        $filename='List Barang'.$time.'.xlsx';
        return Excel::download(new gaItmExport, $filename);
    }
    public function itm_del($id){
        DB::table('ga_item')->where('id_barang', '=', $id)->delete();
        return redirect()->back()->with('status','Barang telah di hapus');

    }

    public function warehouse(){
        $list=DB::table('ga_warehouse')->orderBy('nama_gudang','asc')->get();
        return view('General_Affair.wh.index')->with(compact('list'));
    }
    public function wh_create(){
        return view('General_Affair.wh.create');
    }
    public function wh_store(Request $request){
        DB::table('ga_warehouse')->insert([
            'nama_gudang'=>$request->get('nama_gudang'),
            'tanggal_gudang'=>$request->get('tanggal_gudang'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        return redirect()->route('wh')->with('status','Gudang telah dibuat');
        // return view('General_Affair.wh.wh_create');
    }
    public function wh_del($id){
        DB::table('ga_warehouse')->where('id_gudang', '=', $id)->delete();
        return redirect()->back()->with('status','Gudang telah di hapus');
    }
    public function itm_balance_index(){


        $list=db::table('ga_item_balance as gib')->select(db::raw('gi.nama_barang, sum(if(gh.nama_gudang = "HO", gib.qty_barang,0)) as HO'),
        DB::raw('sum(if(gh.nama_gudang = "Legok",gib.qty_barang,0)) as Legok'))
        ->join('ga_item as gi','gi.id_barang','=','gib.id_barang')
        ->join('ga_warehouse as gh','gh.id_gudang','=','gib.id_gudang')
        ->groupBy('gi.nama_barang')
        ->orderBy('gi.nama_barang','asc')
        ->get();
        $gudang=DB::table('ga_warehouse')->orderBy('nama_gudang','asc')->get();
        $barang=DB::table('ga_item')->orderBy('nama_barang','asc')->get();

        return view('General_Affair.balance.Index',compact('list','gudang','barang'));
    }
    public function itm_balance_insert(){
        $gudang=DB::table('ga_warehouse')->orderBy('nama_gudang','asc')->get();
        $barang=DB::table('ga_item')->orderBy('nama_barang','asc')->get();
        return view('General_Affair.balance.create',compact('gudang','barang'));
    }

    public function itm_balance_store(Request $request){
        $check=DB::table('ga_item_balance')
        ->where('id_barang',$request->get('id_barang'))
        ->where('id_gudang',$request->get('id_gudang'))
        ->first();
        if(empty($check)){
            DB::table('ga_item_balance')->insert([
                'id_gudang'=>$request->get('id_gudang'),
                'id_barang'=>$request->get('id_barang'),
                'qty_barang'=>$request->get('qty_barang'),
                'created_at'=>Carbon::now(),
            ]);
        }else{
            $qty=$check->qty_barang;
            $qty=$qty+$request->get('qty_barang');
            DB::table('ga_item_balance')
            ->where('id_barang',$request->get('id_barang'))
            ->where('id_gudang',$request->get('id_gudang'))
            ->update([
                'qty_barang'=>$qty,
                'updated_at'=>Carbon::now(),
            ]);
        }
        return redirect()->route('ga_balance_index')->with('status','Data telah ditambah');
    }
    public function itm_balance_export()
    {
        $time=Carbon::now();
        $time=date_format($time,'d-m-y, H.i.s');
        $filename='Item Stock '.$time.'.xlsx';
        return Excel::download(new gaBalanceExport, $filename);
    }
    public function reqloc(Request $request){
        if ($request->ajax()) {
            // $output="";
            $data = $request->data;
        $barang=DB::table('ga_item_balance as gib')
        // ->distinct('gi.id_barang','gi.nama_barang')
        ->select('gi.id_barang','gi.nama_barang','gib.qty_barang','gh.nama_gudang')
        ->join('ga_item as gi','gi.id_barang','=','gib.id_barang')
        ->join('ga_warehouse as gh','gh.id_gudang','=','gib.id_gudang')
        // ->where('gib.qty_barang','>',0)
        ->where('gib.id_gudang',$data)
        ->get();
        }
        return response($barang);
    }
    public function reqitem_create(){
        $divisi = DB::table('duta_divisi')->select('div_unique','div_name')->get();
        $karyawan = DB::table('duta_karyawan')->select('k_nik','k_nama')->get();
        $gudang = DB::table('ga_warehouse')->get();

        return view('General_Affair.Permintaan_ATK.create')
        ->with(compact('divisi','karyawan','gudang'));
    }
    public function reqitem_store(Request $request){

            $pengajuan=$request->get('tgl_pengajuan')."".$request->get('id_user')."".count($request->id_barang);
            $pengajuan=md5($pengajuan);
            $pengajuan=substr($pengajuan,0,10);
        for ($i = 0; $i < count($request->id_barang); $i++) {
            DB::table('ga_balance_logs')->insert([
                'id_pengajuan'=>$pengajuan,
                'id_gudang'=>$request->get('id_gudang'),
                'id_user'=>$request->get('id_user'),
                'id_divisi'=>$request->get('id_divisi'),
                'id_barang'=>$request->id_barang[$i],
                'qty'=>$request->qty[$i],
                'tgl_pengajuan'=>$request->get('tgl_pengajuan'),
                'alasan_pengajuan'=>$request->get('alasan_pengajuan'),
                'status_pengajuan'=>'Request',
                'created_at'=>Carbon::now(),
                ]);
                $qty=DB::table('ga_item_balance')
                ->select('qty_barang')
                ->where('id_barang',$request->get('id_barang'))
                ->where('id_gudang',$request->get('id_gudang'))
                ->first();
                // dd($qty->qty_barang);
                $qty=($qty->qty_barang)-($request->qty[$i]);

                DB::table('ga_item_balance')
                ->where('id_barang',$request->get('id_barang'))
                ->where('id_gudang',$request->get('id_gudang'))
                ->update([
                    'qty_barang'=>$qty
                ]);

        }
        // dd($data);
        return redirect()->route('ga_balance_index')->with('status','Data has been requested');
    }
    public function reqitem_update(Request $request){
        DB::table('ga_balance_logs as gbl')
        ->where('gbl.id_pengajuan', '=', $request->get('id_pengajuan'))
        ->update([
            'gbl.status_pengajuan' => $request->get('status'),
            'gbl.updated_at' =>Carbon::now()
        ]);
        // cek data log/report
        if ($request->get('status')=='Tolak') {
            # code...
            $check=DB::table('ga_balance_logs')->select('id_barang','id_gudang','qty')
            ->where('id_pengajuan', '=', $request->get('id_pengajuan'))
            ->orderBy('id_barang','asc')
            ->get();
            // dd($check);
            // cek ambil data qty dari gudang terkain
            foreach ($check as $check) {
                $barang=DB::table('ga_item_balance')->select('qty_barang')
                // ->select('id_barang','qty_barang')
                ->where('id_gudang',$check->id_gudang)
                ->where('id_barang',$check->id_barang)
                ->orderBy('id_barang','asc')
                ->first();
                $curQty=($check->qty)+($barang->qty_barang);
                // dd($curQty);
                DB::table('ga_item_balance')
                ->where('id_gudang',$check->id_gudang)
                ->where('id_barang',$check->id_barang)
                ->update([
                    'qty_barang'=>$curQty,
                ]);
            }
        }
        return redirect()->back()->with('status','Data has been updated');
    }
    public function report(){
        $rep = DB::table('ga_balance_logs as gbl')
        ->select(DB::raw('DISTINCT gbl.id_pengajuan, dk.k_nama, dd.div_name, gbl.tgl_pengajuan, gbl.alasan_pengajuan, gbl.status_pengajuan, gh.nama_gudang'))
        ->join('duta_karyawan as dk','dk.k_nik','=','gbl.id_user')
        ->join('duta_divisi as dd','dd.div_unique', '=', 'gbl.id_divisi')
        ->join('ga_warehouse as gh','gh.id_gudang','gbl.id_gudang')
        ->orderBy('gbl.tgl_pengajuan','desc')
        ->get();
        // dd($rep);
        return view('General_Affair.report')->with(compact('rep'));
    }
    public function ga_balance_export()
    {
        $time=Carbon::now();
        $time=date_format($time,'d-m-y, H.i.s');
        $filename='Pengajuan Report '.$time.'.xlsx';
        return Excel::download(new gaBalanceReportExport, $filename);
    }
    public function getData(request $request){
        if ($request->ajax()) {
            // $output="";
            $connectors = DB::table('ga_balance_logs as gbl')
        ->select(DB::raw('gbl.id_pengajuan, gi.nama_barang, gbl.qty'))
        ->join('ga_item as gi','gi.id_barang', '=', 'gbl.id_barang')
        ->where('gbl.id_pengajuan', '=', $request->passdata)
        ->get();

            return response(json_encode($connectors));
        }
    }
    public function itm_import(){
        Excel::import(new GAItemImport, request()->file('your_file'));
        return redirect()->route('ga_balance_index')->with('status','Data has been imported');
    }
}
