<?php

namespace App\Http\Controllers;

use App\Models\HardFixG;
use App\Models\HardReq;
use App\Models\InkReport;
use App\Models\SoftReq;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequestViewController extends Controller
{

   public function index(){
   $hardReq=HardReq::whereNotIn('hard_req_status',['Selesai'])->get();
   $hardFix=HardFixG::whereNotIn('hard_fix_status',['Selesai'])->get();
   $SoftReq=SoftReq::whereNotIn('soft_req_status',['Selesai'])->get();
//    $ink=InkReport::whereNotIn('ink_status',['Selesai','Batal'])->get();
       return view('Form.Request.index')->with(compact('hardReq','hardFix','SoftReq'));
   }
   public function index_ink(){
   $ink=InkReport::whereNotIn('ink_status',['Selesai','Batal'])->orderby('id','desc')->get();
       return view('Form.Request.indexTinta')->with(compact('ink'));
   }
    public function ink_req($id){
        DB::table('inventaris_ink_report')->where('id', $id)->update([
            'ink_status' => 'Selesai'
        ]);
        return redirect()->route('request_ink')->with('status','Request has been approved');
    }
    public function ink_dec($id,$ink,$qty){
        $qty_now=DB::table('inventaris_ink')->where('ink_code',$ink)->first();
        $qty=$qty_now->ink_qty+$qty;

        DB::table('inventaris_ink_report')->where('id', $id)->update([
            'ink_status' => 'Batal'
        ]);

        DB::table('inventaris_ink')->where('ink_code', $ink)->update([
            'ink_qty' =>$qty
        ]);

        return redirect()->route('request_ink')->with('status','Request has been declined');
    }
    public function soft_req($id){
        DB::table('soft_req')->where('id', $id)->update([
            'soft_req_status' => 'Selesai'
        ]);
        return redirect()->route('request')->with('status','Request has been approved');
    }
    public function hard_fix($id){
        DB::table('hard_fix_general')->where('id', $id)->update([
            'hard_fix_status' => 'Selesai'
        ]);
        return redirect()->route('request')->with('status','Request has been approved');
    }
    public function hard_req($id){
        DB::table('hard_req')->where('id', $id)->update([
            'hard_req_status' => 'Selesai'
        ]);
        return redirect()->route('request')->with('status','Request has been approved');
    }
}
