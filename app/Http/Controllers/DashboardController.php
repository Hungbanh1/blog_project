<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['module_active' => 'dashboard']);
            return $next($request);
        });
    }
    function show()
    {
        // echo "ok";
        // return view('layouts.admin.403');

        return view('layouts.admin.dashboard');
    }
}
