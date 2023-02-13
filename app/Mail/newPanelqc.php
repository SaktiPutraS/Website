<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class newPanelqc extends Mailable
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
        $data=DB::table('pn_03_qc')
        ->select('pn_03_qc.*','pn_01_p3c.nomor_seri_panel','pn_01_p3c.nama_customer','pn_01_p3c.nama_proyek','pn_01_p3c.nama_panel','pn_01_p3c.nomor_wo')
        ->join('pn_01_p3c','pn_01_p3c.id','pn_03_qc.id_panel')
        ->limit(1)->orderByDesc('pn_03_qc.created_at')->first();
        $nama_proyek = $data->nama_proyek;
        $subject=$nama_proyek;

        $link='http://116.197.128.230/panel/p3c/edit-'.$data->id_panel.'';
        return $this->subject($subject)
        ->markdown('emails.sites.newPanelqc', [
            'nomor_seri_panel' => $data->nomor_seri_panel,
            'nama_customer' => $data->nama_customer,
            'nama_proyek' => $data->nama_proyek,
            'nomor_wo' => $data->nomor_wo,
            'nama_panel' => $data->nama_panel,
            'tgl_terima_dr_produksi' => $data->tgl_terima_dr_produksi,
            'actual_qc_pass' => $data->actual_qc_pass,
            'catatan_test' => $data->catatan_test,
            'picTestQc' => $data->picTestQc,
            'created_at' => $data->created_at,
            'admin' => $data->admin,
            'link' => $link,
        ]);
    }
}
