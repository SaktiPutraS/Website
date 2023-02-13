<?php

namespace App\Http\Controllers;

use App\Exports\produksiExport;
use App\Imports\panelImport;
use App\Models\User;
use App\Models\UserDet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;

class produksiController extends Controller
{
    //
    public function index(){
        $paneldata = DB::table('pro_panel_det')
        ->join('pro_panel_head','pro_panel_head.panel_seri','=','pro_panel_det.panel_seri')
        ->whereIn('panel_status_pekerjaan', ['Tunda', 'Progress'])
        ->orWhereRaw('date_sub(now(), interval 3 month) < pro_panel_det.created_at')
        ->get();
        $panel = DB::table('pro_panel_det')
        ->join('pro_panel_head','pro_panel_head.panel_seri','=','pro_panel_det.panel_seri')
        ->join('pro_tim','pro_tim.id','=','pro_panel_det.panel_spv')
        ->Where(DB::raw('date_sub(now(), interval 3 month) < pro_panel_det.created_at'))
        ->orWhereIn('panel_status_pekerjaan', ['Tunda', 'Progress'])
        ->get();

        return view('produksi.index')->with(compact('paneldata','panel'));
    }
    public function indexPanel(UserDet $user){
        $Tunda = DB::table('pro_panel_head')
                ->where('panel_status_pekerjaan', 'Tunda')
                ->count();
        $Selesai = DB::table('pro_panel_head')
                ->where('panel_status_pekerjaan', 'Selesai')
                ->count();
        $Progress = DB::table('pro_panel_head')
                ->where('panel_status_pekerjaan', 'Progress')
                ->count();
        $panel = DB::table('pro_panel_det')
        ->join('pro_panel_head','pro_panel_head.panel_seri','=','pro_panel_det.panel_seri')
        ->get();
        // dd($user->user_divisi ='EDP');
        return view('produksi.panel.index')->with(compact('panel','Progress','Selesai','Tunda'));
    }
    public function indexTim(){
        $tim = DB::table('pro_tim')
        ->get();
        return view('produksi.tim.index')->with(compact('tim'));
    }
    public function insertViewPan(){
    $tim=DB::table('pro_tim')->get();
    $tim1=DB::table('pro_tim')->get();
    $tim2=DB::table('pro_tim')->get();
        return view('produksi.panel.insert')->with(compact('tim','tim1','tim2'));
    }

    public function insertPanel(request $request){

        $panel_nomor=1;
        // DB::table('panel_header')->select('panel_nomor')->orderBy('panel_nomor','desc')->take(1)->get();
        $nomor = DB::table('pro_panel_head')->select('panel_nomor')->orderBy('panel_nomor', 'desc')->first();
        // print same nomor if panel_name, pelanggan, & project match with database
        $nomorSub = DB::table('pro_panel_head')
        ->select('panel_nomor')
        ->where('panel_nama',$request->get('panel_nama'))
        ->where('panel_pelanggan',$request->get('panel_pelanggan'))
        ->where('panel_proyek',$request->get('panel_proyek'))
        ->orderBy('panel_nomor','desc')
        ->first();
        if (empty($nomor->panel_nomor)) {
            $panel_nomor = 1;
        } else {
            if (empty($nomorSub->panel_nomor)) {
                $panel_nomor = $nomor->panel_nomor + 1;
            } else {
                $panel_nomor = $nomorSub->panel_nomor;
            }

        }
        $panel_cell=$request->get('panel_cell');
        $panel_FW=$request->get('panel_FW');
        $panel_LM=$request->get('panel_LM');
        $panel_nomor= sprintf('%04d', $panel_nomor); //ubah nomor dengan depan 000
        $panel_cell= sprintf('%02d', $panel_cell); //ubah nomor dengan depan 000
        $panel_seri=substr(date('Y'),2,2) . date('m') . $panel_nomor .$panel_cell. $panel_FW .  $panel_LM;
        $panel_wiring="";
        $panel_mekanik="";
        foreach ($request->get('panel_wiring') as $wiring){
            // $d=DB::table('pro_tim')->select('tim_nama')->where('id',$wiring)->first();
            $panel_wiring=$panel_wiring.$wiring.", ";
        }
        foreach ($request->get('panel_mekanik') as $mekanik){
            // $d=DB::table('pro_tim')->select('tim_nama')->where('id',$mekanik)->first();
            $panel_mekanik=$panel_mekanik.$mekanik.", ";
        }
        $panel_wiring= substr($panel_wiring,0,-2);
        $panel_mekanik= substr($panel_mekanik,0,-2);
        // Add Wiring and Mek
        DB::table('pro_panel_head')->insert([
            'panel_nomor'=>$panel_nomor,
            'panel_seri'=>$panel_seri,
            'panel_nama'=>$request->get('panel_nama'),
            'panel_pelanggan'=>$request->get('panel_pelanggan'),
            'panel_proyek'=>$request->get('panel_proyek'),
            'panel_status_pekerjaan'=>$request->get('panel_status_pekerjaan'),
        ]);

        DB::table('pro_panel_det')->insert([
            'panel_seri'=>$panel_seri,
            'panel_spv'=>$request->get('panel_spv'),
            'panel_wiring'=>$panel_wiring,
            'panel_mekanik'=>$panel_mekanik,
            'panel_deadline'=>$request->get('panel_deadline'),
            'panel_qcpass'=>$request->get('panel_qcpass'),
            'panel_status_komponen'=>$request->get('panel_status_komponen'),
            'panel_cell'=>$request->get('panel_cell'),
            'panel_FW'=>$request->get('panel_FW'),
            'panel_LM'=>$request->get('panel_LM'),
        ]);
        return redirect()->route('pro_index_panel')->with('status','Panel has been added');
    }

    public function editPanel($id){
        $tim=DB::table('pro_tim')->get();
        $tim1=DB::table('pro_tim')->get();
        $tim2=DB::table('pro_tim')->get();
        $panel=DB::table('pro_panel_head')
        ->select('pro_panel_head.*','pro_panel_det.*')
        ->join('pro_panel_det','pro_panel_det.panel_seri','=','pro_panel_head.panel_seri')
        ->where('pro_panel_head.panel_seri',$id)
        ->get();
        return view('produksi.panel.edit')->with(compact('panel','tim','tim1','tim2'));
    }
    public function updatePanel(Request $request){
        // dd($request->get('panel_mekanik'));
        $this->validate($request, [
            'panel_wiring' => 'required',
            'panel_mekanik' => 'required',
        ]);
        $panel_wiring="";
        $panel_mekanik="";
        foreach ($request->get('panel_wiring') as $wiring){
            // $d=DB::table('pro_tim')->select('tim_nama')->where('id',$wiring)->first();
            $panel_wiring=$panel_wiring.$wiring.", ";
        }
        foreach ($request->get('panel_mekanik') as $mekanik){
            // $d=DB::table('pro_tim')->select('tim_nama')->where('id',$mekanik)->first();
            $panel_mekanik=$panel_mekanik.$mekanik.", ";
        }
        $panel_wiring= substr($panel_wiring,0,-2);
        $panel_mekanik= substr($panel_mekanik,0,-2);
        // Check if actual_qc insert then status update to Selesai
        if(empty($request->get('panel_aktual_qc')))
        {
            $status_kerja=$request->get('panel_status_komponen');
        } else
        {
            $status_kerja="Selesai";
        }
        DB::table('pro_panel_head')->where('panel_seri',$request->panel_seri)->update([
            'panel_nama'=>$request->get('panel_nama'),
            'panel_pelanggan'=>$request->get('panel_pelanggan'),
            'panel_proyek'=>$request->get('panel_proyek'),
            'panel_status_pekerjaan'=>$request->get('panel_status_pekerjaan'),
        ]);

        DB::table('pro_panel_det')->where('panel_seri',$request->panel_seri)->update([
            'panel_spv'=>$request->get('panel_spv'),
            'panel_wiring'=>$panel_wiring,
            'panel_mekanik'=>$panel_mekanik,
            'panel_deadline'=>$request->get('panel_deadline'),
            'panel_qcpass'=>$request->get('panel_qcpass'),
            'panel_status_komponen'=>$status_kerja,
            'panel_cell'=>$request->get('panel_cell'),
            'panel_FW'=>$request->get('panel_FW'),
            'panel_LM'=>$request->get('panel_LM'),
            'panel_aktual_produksi'=>$request->get('panel_aktual_produksi'),
            'panel_aktual_qc'=>$request->get('panel_aktual_qc'),
        ]);
        return redirect()->back()->with('status','Data has been updated');
    }
    public function destroyPanel($id){
        DB::table('pro_panel_head')->where('panel_seri', '=', $id)->delete();
        DB::table('pro_panel_det')->where('panel_seri', '=', $id)->delete();
        return redirect()->back()->with('status','Panel has been deleted');

    }
    public function insertViewTim(){
        return view('produksi.tim.insert');
    }

    public function insertTim(Request $request){
        DB::table('pro_tim')->insert([
            'tim_nama'=>$request->get('tim_nama'),
            'tim_alias'=>$request->get('tim_alias'),
        ]);
        return redirect()->route('pro_index_tim')->with('status','Data has been added');
    }
    public function editTim($id){
        // dd($id);
        $view = DB::table('pro_tim')->where('id',$id)->first();
        return view('produksi.tim.view')->with(compact('view'));
    }
    public function updateTim(Request $request){
        $view = DB::table('pro_tim')->where('id',$request->get('id'))->get();
        DB::table('pro_tim')->where('id',$request->id)->update([
            'tim_nama'=>$request->get('tim_nama'),
            'tim_alias'=>$request->get('tim_alias'),
        ]);
        return redirect()->route('pro_index_tim')->with('status','Data has been updated');
    }
    public function destroyTim($id){
        DB::table('pro_tim')->where('id', '=', $id)->delete();
        return redirect()->back()->with('status','Panel has been deleted');

    }
    public function import(){
        // dd(request()->file('your_file'));
        Excel::import(new panelImport, request()->file('your_file'));
        return redirect()->route('pro_index_panel')->with('status','Data has been imported');
    }
    public function export()
    {
        $time=Carbon::now();
        $time=date_format($time,'d-m-y, H.i.s');
        $filename='produksi '.$time.'.xlsx';
        return Excel::download(new produksiExport, $filename);
    }

}
