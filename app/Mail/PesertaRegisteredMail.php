<?php

namespace App\Mail;

use App\Models\Peserta;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PesertaRegisteredMail extends Mailable
{
    use Queueable, SerializesModels;

    public $peserta;

    public function __construct(Peserta $peserta)
    {
        $this->peserta = $peserta;
    }

    public function build()
    {
        return $this->subject('Pendaftaran Kegiatan Berhasil')
                    ->markdown('emails.peserta.registered');
    }
}
