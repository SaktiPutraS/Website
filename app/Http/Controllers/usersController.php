<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    public function index(){
        $this->authorize('isAdmin');
        $list = DB::table('users as u')
        ->join('user_detail as ud', 'u.email','=','ud.email' )
        ->select('u.*','ud.user_nik','ud.user_divisi','ud.user_gender','ud.user_birthday')
        ->get();
        return view('users.index')->with(compact('list'));
    }
    public function edit(Request $request){
        DB::table('user_detail')->where('email', $request->get('email'))->update([
            'user_nik' => $request->get('user_nik'),
            'user_birthday' => $request->get('user_birthday'),
            'user_gender' => $request->get('user_gender'),
            'user_divisi' => $request->get('user_divisi'),
            'updated_at' => Carbon::now()
        ]);
        // if($this->authorize('isAdmin')){
            DB::table('users')->where('email', $request->get('email'))->update([
                'isAdmin' => $request->get('isAdmin'),
                'isRole' => $request->get('isRole'),
                'isCreate' => $request->get('isCreate'),
                'isRead' => $request->get('isRead'),
                'isUpdate' => $request->get('isUpdate'),
                'isDelete' => $request->get('isDelete'),
                'isActive' => $request->get('isActive'),
                'updated_at' => Carbon::now()
            ]);
        // }
        return redirect()->back()->with('status','Data has been updated');
    }

    public function view($id){
        $divisi = DB::table('duta_divisi')->orderBy('id', 'asc')->get();
        $list = DB::table('users as u')
        ->join('user_detail as ud', 'u.email','=','ud.email' )
        ->select('u.*','ud.user_nik','ud.user_divisi','ud.user_gender','ud.user_birthday')
        ->where('u.id','=',$id)
        ->first();

        return view('users.user_view')->with(compact('list','divisi'));
    }
    public function destroy($email){
        $this->authorize('isAdmin');
        DB::table('users')->where('email', '=', $email)->delete();
        DB::table('user_detail')->where('email', '=', $email)->delete();
        return redirect()->back()->with('status','User has been deleted');
    }
    public function search(Request $request)
        {
        if($request->ajax())
        {
            $output="";
            $nama=DB::table('duta_karyawan')
            ->where('k_nama','LIKE','%'.$request->search."%")
            ->limit(5)
            ->get();
        // if($nama)
        // {

        //     foreach ($nama as $key => $nama) {
        //     $output.= $nama->k_nama;
        // }
            return Response($output);
        // }
        }
    }
}
