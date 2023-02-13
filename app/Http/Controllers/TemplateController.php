<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    public function index(){
        $list = DB::table('pc_template')->get();
        return view('Form.Hardware.Permintaan.template_index',compact('list'));
    }
    public function create(){
        return view('Form.Hardware.Permintaan.template_create');
    }
    public function update(request $request)
    {
        switch ($request->get('type')) {
            case 'create':

                DB::table('pc_template')->insert([
                    'template_name' => $request->get('template_name'),
                    'template_mainboard' => $request->get('template_mainboard'),
                    'template_processor' => $request->get('template_processor'),
                    'template_memory' => $request->get('template_memory'),
                    'template_hdd' => $request->get('template_hdd'),
                    'template_ssd' => $request->get('template_ssd'),
                    'template_vga' => $request->get('template_vga'),
                    'template_casing' => $request->get('template_casing'),
                    'template_keyboard' => $request->get('template_keyboard'),
                    'template_mouse' => $request->get('template_mouse')
                ]);
                return redirect()->route('template_index')->with('status','Template has been added');
                break;
            default:
                # code...
                break;
        }
    }
    public function template_data(request $request){
        if ($request->ajax()) {
            // $output="";
            $connectors = DB::table('pc_template')
            ->where('id', '=', $request->id)
            ->get();
            return response(json_encode($connectors));
        }
    }
}
