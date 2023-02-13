<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
public function index(){
    $result = DB::table('pro_panel_det')
    ->join('pro_panel_head','pro_panel_head.panel_seri','=','pro_panel_det.panel_seri')
    ->whereIn('panel_status_pekerjaan', ['Tunda', 'Progress'])
    ->orWhere(DB::raw('date_sub(now(), interval 3 month) < pro_panel_det.created_at'))
    // ->paginate(10);
    ->get();
    // $results = DB::table('table')
    // ->where('column', 'value')

    return view('test_1', [
        'result' => $result,
    ]);
    // return view('test_1');
}
public function chart(){
    // $users = DB::table('users')
    //          ->select(DB::raw('count(*) as user_count, status'))
    //          ->where('status', '<>', 1)
    //          ->groupBy('status')
    //          ->get();
    $arra=DB::table('ticketing')->select(DB::raw('ticket_status,COUNT(*) as jumlah'))
        ->groupBy('ticket_status')
        ->get();
    return view('chart')->with(compact('arra'));
}
public function GL(){

    return view('GL');
}
public function runphp(){

    return view('runphp');
}

public function ex(){
    return view('ex');
}

public function destroy($id){
    DB::table('test')->where('id','=',$id)->delete();
}
public function del(Request $request){
    $reqewe=$request->del;
    for ($i=0; $i <count($reqewe) ; $i++) {
        DB::table('test')->where('id','=',$reqewe[$i])->delete();
    }
    return redirect()->back();
}
}
