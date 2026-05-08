<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgreementLog extends Model
{
    protected $fillable = [

        'agreement_id',

        'event',

        'description',

        'ip_address',

        'user_agent',

    ];
}