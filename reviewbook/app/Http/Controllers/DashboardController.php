<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('index'); // resources/views/index.blade.php
    }

    public function biodata()
    {
        return view('biodata'); // resources/views/biodata.blade.php
    }
}
