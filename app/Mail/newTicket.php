<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class newTicket extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data=DB::table('ticketing')->limit(1)->orderByDesc('created_at')->first();
        $user=$data->ticket_user;
        $judul=$data->ticket_judul;
        $type=$data->ticket_type;
        $detail=$data->ticket_detail;
        $ticket_number=$data->ticket_number;
        $subject='New Ticket - '.$ticket_number.'';
        $link='http://116.197.128.230/dashboard/ticket-view-'.$data->id.'';
        return $this->subject($subject)
        ->markdown('emails.sites.tickets', [
            'user' => $user,
            'judul' => $judul,
            'type' => $type,
            'detail' => $detail,
            'ticket_number' => $ticket_number,
            'link' => $link,
        ]);
    }
}
