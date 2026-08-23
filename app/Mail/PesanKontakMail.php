<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PesanKontakMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $namaPengirim,
        public string $emailPengirim,
        public string $isiPesan,
    ) {
    }

    public function build()
    {
        return $this
            ->subject('Pesan Baru dari Website Desa — ' . $this->namaPengirim)
            ->replyTo($this->emailPengirim, $this->namaPengirim)
            ->view('emails.pesan-kontak');
    }
}
