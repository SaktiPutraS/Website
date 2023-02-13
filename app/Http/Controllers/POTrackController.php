<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class POTrackController extends Controller
{
    public function index(){
        $list=DB::table('po_track_01')->orderBy('created_at','desc')->get();
        return view('Procurement.lokal_track.index')->with(compact('list'));
    }
    public function procurement_track_01(){
        return view('Procurement.lokal_track.step-1');
    }

    public function procurement_track_01_store(Request $request){
        switch ($request->get('tipe')) {
            case 'create':
                $db=$request->get('database');
                $nomor_urut=$this->ppb_urut($db);
                $bulan=date("m", strtotime($request->get('tanggal_input')));
                $tahun=date("Y", strtotime($request->get('tanggal_input')));
                $nomor = substr(str_repeat(0, 5) . $nomor_urut, -5);
                $nomor_ptf = '' . $nomor . '/PTF-'.$db.'/'. $bulan.'/'. $tahun . '';
                $id_nomor=substr(md5($nomor_ptf),10);
                // dd($nomor_ptf);
                DB::table('po_track_01')->insert([
                    'database'=>$db,
                    'id_nomor'=>$id_nomor,
                    'nomor_ptf'=>$nomor_ptf,
                    'nomor_urut'=>$nomor_urut,
                    'nomor_po'=>$request->get('nomor_po'),
                    'nama_vendor'=>$request->get('nama_vendor'),
                    'nomor_ri'=>$request->get('nomor_ri'),
                    'tanggal_ri'=>$request->get('tanggal_ri'),
                    'tanggal_input'=>$request->get('tanggal_input'),
                    'nama_input'=>$request->get('nama_input'),
                    'nomor_invoice'=>$request->get('nomor_invoice'),
                    'nilai_invoice'=>$request->get('nilai_invoice'),
                    'tanggal_batas_bayar'=>$request->get('tanggal_batas_bayar'),
                    'nama_pengaju_invoice'=>$request->get('nama_pengaju_invoice'),
                    'catatan_procurement'=>$request->get('catatan_procurement'),
                    'tanggal_serah_pi'=>$request->get('tanggal_serah_pi'),
                    'status_ptf'=>"step-1-done",
                    'created_at'=>Carbon::now()
                ]);
                return redirect()->route('lokal_procurement_index')->with('status','Data has been added');
                break;

            default:
                # code...
                break;
        }
    }
    public function procurement_track_02(){
        $list=DB::table('po_track_01')
        ->select('id_nomor','nomor_ptf','nama_vendor','nomor_po')
        ->where('status_ptf','step-1-done')
        ->orderBy('created_at','desc')->get();
        return view('Procurement.lokal_track.step-2')->with(compact('list'));
    }
    public function procurement_track_02_store(Request $request){
        switch ($request->get('tipe')) {
            case 'create':
                // dd($nomor_ptf);
                DB::table('po_track_02')->insert([
                    'id_nomor'=>$request->get('id_nomor'),
                    'tanggal_terima_procurement'=>$request->get('tanggal_terima_procurement'),
                    'tanggal_serah_finance'=>$request->get('tanggal_serah_finance'),
                    'tanggal_input'=>$request->get('tanggal_input'),
                    'nama_input'=>$request->get('nama_input'),
                    'tanggal_proses_pi'=>$request->get('tanggal_proses_pi'),
                    'nomor_faktur'=>$request->get('nomor_faktur'),
                    'catatan_pi'=>$request->get('catatan_pi'),
                    'created_at'=>Carbon::now()
                ]);
                DB::table('po_track_01')
                ->where('id_nomor',$request->get('id_nomor'))
                ->update([
                    'status_ptf'=>"step-2-done"
                ]);

                return redirect()->route('lokal_procurement_index')->with('status','Data has been added');
                break;

            default:
                # code...
                break;
        }
    }
    public function procurement_track_03(){
        $list=DB::table('po_track_01')
        ->select('id_nomor','nomor_ptf','nama_vendor','nomor_po')
        ->where('status_ptf','step-2-done')
        ->orderBy('created_at','desc')->get();
        return view('Procurement.lokal_track.step-3')->with(compact('list'));
    }
    public function procurement_track_03_store(Request $request){
        switch ($request->get('tipe')) {
            case 'create':
                // dd($nomor_ptf);
                DB::table('po_track_03')->insert([
                    'id_nomor'=>$request->get('id_nomor'),
                    'tanggal_terima_pi'=>$request->get('tanggal_terima_pi'),
                    'tanggal_serah_gl'=>$request->get('tanggal_serah_gl'),
                    'tanggal_input'=>$request->get('tanggal_input'),
                    'nama_input'=>$request->get('nama_input'),
                    'tanggal_pembayaran'=>$request->get('tanggal_pembayaran'),
                    'catatan_finance'=>$request->get('catatan_finance'),
                    'created_at'=>Carbon::now()
                ]);
                DB::table('po_track_01')
                ->where('id_nomor',$request->get('id_nomor'))
                ->update([
                    'status_ptf'=>"step-3-done"
                ]);

                return redirect()->route('lokal_procurement_index')->with('status','Data has been added');
                break;

            default:
                # code...
                break;
        }
    }
    public function procurement_track_04(){
        $list=DB::table('po_track_01')
        ->select('id_nomor','nomor_ptf','nama_vendor','nomor_po')
        ->where('status_ptf','step-3-done')
        ->orderBy('created_at','desc')->get();
        return view('Procurement.lokal_track.step-4')->with(compact('list'));
    }
    public function procurement_track_04_store(Request $request){
        switch ($request->get('tipe')) {
            case 'create':
                // dd($nomor_ptf);
                DB::table('po_track_04')->insert([
                    'id_nomor'=>$request->get('id_nomor'),
                    'tanggal_terima_finance'=>$request->get('tanggal_terima_finance'),
                    'tanggal_input'=>$request->get('tanggal_input'),
                    'nama_input'=>$request->get('nama_input'),
                    'tanggal_proses_gl'=>$request->get('tanggal_proses_gl'),
                    'nomor_voucher_gl'=>$request->get('nomor_voucher_gl'),
                    'catatan_gl'=>$request->get('catatan_gl'),
                    'created_at'=>Carbon::now()
                ]);
                DB::table('po_track_01')
                ->where('id_nomor',$request->get('id_nomor'))
                ->update([
                    'status_ptf'=>"step-4-done"
                ]);

                return redirect()->route('lokal_procurement_index')->with('status','Data has been added');
                break;

            default:
                # code...
                break;
        }
    }

    public function ppb_urut($db)
    {
        $nomor_urut = DB::table('po_track_01')->select('nomor_urut')->where('database',$db)->orderBy('id', 'desc')->first();
        if (empty($nomor_urut->nomor_urut)) {
            $nomor_urut = 1;
        } else {
            $nomor_urut = $nomor_urut->nomor_urut + 1;
        }
        return $nomor_urut;
    }
    public function getData(request $request){
        if ($request->ajax()) {
            $connectors = DB::table('po_track_01 as p1')
            ->select('p1.nomor_po','p1.nama_vendor','p1.tanggal_serah_pi','p2.tanggal_serah_finance','p3.tanggal_serah_gl')
            ->leftjoin('po_track_02 as p2', 'p2.id_nomor','=','p1.id_nomor')
            ->leftJoin('po_track_03 as p3','p3.id_nomor','=','p1.id_nomor')
            ->where('p1.id_nomor', '=', $request->passdata)
            ->get();
            return response(json_encode($connectors));
        }
    }
}
