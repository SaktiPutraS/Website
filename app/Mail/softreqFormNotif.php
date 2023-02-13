<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class softreqFormNotif extends Mailable
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
        $data=DB::table('soft_req')->limit(1)->orderByDesc('created_at')->first();
        $user=$data->soft_req_user;
        $soft_req_reason=$data->soft_req_reason;
        $number=$data->soft_req_number;
        $subject='New Software Request - '.$number.'';
        $link='http://116.197.128.230/form/software/request-print/'.$data->soft_req_unique.'';
        return $this->subject($subject)
        ->markdown('emails.sites.softReqMail', [
            'user' => $user,
            'soft_req_reason' => $soft_req_reason,
            'number' => $number,
            'link' => $link,
        ]);
    }
}
