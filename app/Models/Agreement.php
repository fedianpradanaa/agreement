<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    protected $fillable = [
        'agreement_number',
        'agreement_date',
        'author_name',
        'author_nik',
        'author_address',
        'author_phone',
        'author_email',
        'book_title',
        'verification_token',
        'publisher_sign_token',
        'author_sign_token',
        'pdf_path',
    ];
}