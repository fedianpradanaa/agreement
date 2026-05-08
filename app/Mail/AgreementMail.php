<?php

namespace App\Mail;

use App\Models\Agreement;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AgreementMail extends Mailable
{
    use Queueable, SerializesModels;

    public $agreement;

    public function __construct($agreement)
    {
        $this->agreement = $agreement;
    }

    public function build()
    {
        return $this
            ->subject(
                'Dokumen Perjanjian Kerja Sama Penerbitan Buku'
            )

            ->view('emails.agreement')

            ->attach(

                public_path(
                    'uploads/' .
                    $this->agreement->pdf_path
                )

            );
    }
}