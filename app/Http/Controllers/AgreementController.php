<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\AgreementLog;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

use App\Mail\AgreementMail;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Barryvdh\DomPDF\Facade\Pdf;

class AgreementController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function generate(Request $request)
    {
       /*
        |--------------------------------------------------------------------------
        | RECAPTCHA VALIDATION
        |--------------------------------------------------------------------------
        */

        if (!app()->environment('local')) {

            $response = Http::asForm()->post(

                'https://www.google.com/recaptcha/api/siteverify',

                [

                    'secret' => env('RECAPTCHA_SECRET_KEY'),

                    'response' => $request->input(
                        'g-recaptcha-response'
                    ),

                    'remoteip' => request()->ip(),

                ]

            );

            $captcha = $response->json();

            if (!$captcha['success']) {

                return back()->withErrors([

                    'captcha' =>
                        'Verifikasi reCAPTCHA gagal.'

                ])->withInput();
            }

        }

        /*
        |--------------------------------------------------------------------------
        | FORM VALIDATION
        |--------------------------------------------------------------------------
        */

        $request->validate([

            'author_name' =>
                'required|string|max:255',

            'author_nik' =>
                'required|string|max:50',

            'author_address' =>
                'required|string|max:1000',

            'author_phone' =>
                'required|string|max:30',

            'author_email' =>
                'required|email|max:255',

            'book_title' =>
                'required|string|max:255',

        ]);

        /*
        |--------------------------------------------------------------------------
        | CREATE AGREEMENT
        |--------------------------------------------------------------------------
        */

        $agreement = Agreement::create([

            'agreement_number' =>

                'EML-AGR-' .
                now()->format('Ymd-His'),

            'agreement_date' => now(),

            'author_name' => $request->author_name,

            'author_nik' => $request->author_nik,

            'author_address' => $request->author_address,

            'author_phone' => $request->author_phone,

            'author_email' => $request->author_email,

            'book_title' => $request->book_title,

            'verification_token' => Str::uuid(),

            'publisher_sign_token' => Str::uuid(),

            'author_sign_token' => Str::uuid(),

        ]);

        /*
        |--------------------------------------------------------------------------
        | LOG CREATE AGREEMENT
        |--------------------------------------------------------------------------
        */

        AgreementLog::create([

            'agreement_id' => $agreement->id,

            'event' => 'CREATE_AGREEMENT',

            'description' =>

                'Agreement berhasil dibuat untuk ' .

                $agreement->author_name,

            'ip_address' => request()->ip(),

            'user_agent' => request()->userAgent(),

        ]);

        /*
        |--------------------------------------------------------------------------
        | GENERATE QR CODE
        |--------------------------------------------------------------------------
        */

        $publisherQr = base64_encode(

            QrCode::format('png')

                ->size(200)

                ->generate(

                    url(

                        '/signature/publisher/' .

                        $agreement->publisher_sign_token

                    )

                )

        );

        $authorQr = base64_encode(

            QrCode::format('png')

                ->size(200)

                ->generate(

                    url(

                        '/signature/author/' .

                        $agreement->author_sign_token

                    )

                )

        );

        /*
        |--------------------------------------------------------------------------
        | GENERATE PDF
        |--------------------------------------------------------------------------
        */

        $pdf = Pdf::loadView(

            'pdf.agreement',

            compact(

                'agreement',

                'publisherQr',

                'authorQr'

            )

        );

        $filename =

            $agreement->agreement_number .

            '.pdf';

        /*
        |--------------------------------------------------------------------------
        | SAVE PDF TO PUBLIC STORAGE
        |--------------------------------------------------------------------------
        */

        $path = public_path(

            'uploads/' . $filename

        );

        $pdf->save($path);

        if (!file_exists($path)) {

            abort(500, 'PDF gagal dibuat');

        }

        /*
        |--------------------------------------------------------------------------
        | UPDATE PDF PATH
        |--------------------------------------------------------------------------
        */

        $agreement->update([

            'pdf_path' => $filename

        ]);

        /*
        |--------------------------------------------------------------------------
        | LOG PDF GENERATION
        |--------------------------------------------------------------------------
        */

        AgreementLog::create([

            'agreement_id' => $agreement->id,

            'event' => 'GENERATE_PDF',

            'description' =>

                'PDF berhasil dibuat: ' .

                $filename,

            'ip_address' => request()->ip(),

            'user_agent' => request()->userAgent(),

        ]);

        /*
        |--------------------------------------------------------------------------
        | SEND EMAIL
        |--------------------------------------------------------------------------
        */

        Mail::to(

            $agreement->author_email

        )->send(

            new AgreementMail($agreement)

        );

        /*
        |--------------------------------------------------------------------------
        | LOG EMAIL
        |--------------------------------------------------------------------------
        */

        AgreementLog::create([

            'agreement_id' => $agreement->id,

            'event' => 'SEND_EMAIL',

            'description' =>

                'Email agreement berhasil dikirim ke: ' .

                $agreement->author_email,

            'ip_address' => request()->ip(),

            'user_agent' => request()->userAgent(),

        ]);

        /*
        |--------------------------------------------------------------------------
        | REDIRECT SUCCESS PAGE
        |--------------------------------------------------------------------------
        */

        return redirect(

            '/success/' . $agreement->id

        );
    }

    public function verify($token)
    {
        $agreement = Agreement::where(

            'verification_token',

            $token

        )->firstOrFail();

        return view(

            'verify',

            compact('agreement')

        );
    }

    public function signature($type, $token)
    {
        $agreement = Agreement::where(

            $type . '_sign_token',

            $token

        )->firstOrFail();

        return view(

            'signature',

            compact(

                'agreement',

                'type'

            )

        );
    }

    public function success($id)
    {
        $agreement = Agreement::findOrFail($id);

        return view(

            'success',

            compact('agreement')

        );
    }

    public function download($token)
    {
        $agreement = Agreement::where(

            'verification_token',

            $token

        )->firstOrFail();

        $path = public_path(

            'uploads/' .

            $agreement->pdf_path

        );

        if (!file_exists($path)) {

            abort(404);

        }

        AgreementLog::create([

            'agreement_id' => $agreement->id,

            'event' => 'DOWNLOAD_PDF',

            'description' =>

                'PDF berhasil didownload',

            'ip_address' => request()->ip(),

            'user_agent' => request()->userAgent(),

        ]);

        return response()->download(

            $path,

            $agreement->pdf_path

        );
    }
}