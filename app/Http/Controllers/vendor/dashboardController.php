<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function Index()
    {
        return view('vendor.vendor-dashboard');
    }
}
