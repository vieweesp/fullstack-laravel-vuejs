<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('backoffice.dashboard', [
            'json_url' => route('backoffice.dashboard.json'),
        ]);
    }
    //
}
