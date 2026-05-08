<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Agreement;

use App\Models\AgreementLog;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalAgreement = Agreement::count();

        $totalDownload = AgreementLog::where(
            'event',
            'DOWNLOAD_PDF'
        )->count();

        $agreements = Agreement::latest()
            ->take(10)
            ->get();

        return view(
            'admin.dashboard',
            compact(
                'totalAgreement',
                'totalDownload',
                'agreements'
            )
        );
    }

    public function agreements()
    {
        $agreements = Agreement::latest()
            ->paginate(20);

        return view(
            'admin.agreements',
            compact('agreements')
        );
    }
}