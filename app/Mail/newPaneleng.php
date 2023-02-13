<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Offset;

class newPaneleng extends Mailable
{
    public $id;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        //
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (!empty($this->id)) {
            $data=DB::table('pn_04_eng')
            ->select('pn_04_eng.*', 'pn_01_p3c.nomor_seri_panel', 'pn_01_p3c.nama_customer', 'pn_01_p3c.nama_proyek', 'pn_01_p3c.nama_panel', 'pn_01_p3c.nomor_wo', 'pn_01_p3c.mfd', 'pn_01_p3c.tipe_panel')
            ->join('pn_01_p3c','pn_01_p3c.id','pn_04_eng.id_panel')
            ->where('pn_04_eng.id',$this->id)
            ->limit(1)->orderByDesc('pn_04_eng.created_at')->first();
        } else {
            $data=DB::table('pn_04_eng')
            ->select('pn_04_eng.*', 'pn_01_p3c.nomor_seri_panel', 'pn_01_p3c.nama_customer', 'pn_01_p3c.nama_proyek', 'pn_01_p3c.nama_panel', 'pn_01_p3c.nomor_wo', 'pn_01_p3c.mfd', 'pn_01_p3c.tipe_panel')
            ->join('pn_01_p3c','pn_01_p3c.id','pn_04_eng.id_panel')
            ->limit(1)->orderByDesc('pn_04_eng.created_at')->first();
        }
        $nama_proyek = $data->nama_proyek;
        $subject=$nama_proyek;

        return $this->subject($subject)
        ->markdown('emails.sites.newPaneleng', [
            'nomor_seri_panel' => $data->nomor_seri_panel,
            'nama_customer' => $data->nama_customer,
            'nama_proyek' => $data->nama_proyek,
            'nomor_wo' => $data->nomor_wo,
            'nama_panel' => $data->nama_panel,
            'capacity' => $data->capacity,
            'voltage' => $data->voltage,
            'ampere' => $data->ampere,
            'phasa_3' => $data->phasa_3,
            'ip' => $data->ip,
            'frekuensi' => $data->frekuensi,
            'name_plate' => $data->name_plate,
            'mfd' => $data->mfd,
            'tipe_panel' => $data->tipe_panel,
            'created_at' => $data->created_at,
            'admin' => $data->admin,
        ]);
    }
}
