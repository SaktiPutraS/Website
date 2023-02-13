<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class newPanelproduksi extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data=DB::table('pn_02_produksi')
        ->select('pn_02_produksi.*','pn_00_team.Fullname as spv_name','pn_01_p3c.nomor_seri_panel','pn_01_p3c.nama_customer','pn_01_p3c.nama_proyek','pn_01_p3c.nama_panel','pn_01_p3c.nomor_wo')
        ->join('pn_01_p3c','pn_01_p3c.id','pn_02_produksi.id_panel')
        ->join('pn_00_team','pn_00_team.id','=','pn_02_produksi.spv')
        ->limit(1)->orderByDesc('pn_02_produksi.created_at')->first();
        $nama_proyek = $data->nama_proyek;
        $subject=$nama_proyek;

        $link='http://116.197.128.230/panel/qc/create/'.$data->id_panel.'';
        return $this->subject($subject)
        ->markdown('emails.sites.newPanelproduksi', [
            'nomor_seri_panel' => $data->nomor_seri_panel,
            'nama_customer' => $data->nama_customer,
            'nama_proyek' => $data->nama_proyek,
            'nomor_wo' => $data->nomor_wo,
            'nama_panel' => $data->nama_panel,
            'spv' => $data->spv_name,
            'wiring' => $data->wiring,
            'mekanik' => $data->mekanik,
            'status_komponen' => $data->status_komponen,
            'created_at' => $data->created_at,
            'admin' => $data->admin,
            'link' => $link,
        ]);
    }
}
