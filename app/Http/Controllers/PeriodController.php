<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function index(): View
    {
        return view('periods', [
            //
        ]);
    }
}
