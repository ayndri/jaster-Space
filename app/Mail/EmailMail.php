<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Request;

class EmailMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emails)
    {
        $this->emails = $emails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $subjek = 'JASTERMEDIA Order #'.$this->emails->noOrder.' telah selesai ';
        return $this->from($address = 'no-reply@jaster.co.id', $name = 'Jasterweb Team')->subject($subjek)->view('adm.email.result')->with('data', $this->emails);

    }
}
