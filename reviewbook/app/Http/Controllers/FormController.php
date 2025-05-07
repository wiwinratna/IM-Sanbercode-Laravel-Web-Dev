<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function biodata()
    {
        return view('biodata');
    }

    public function submit(Request $request)
    {
        $fullname = $request->input('fname') . ' ' . $request->input('lname');
        session(['fullname' => $fullname]);
        return redirect()->route('welcome');
    }
    
    public function welcome()
    {
        $fullname = session('fullname', 'Tamu');
        return view('welcome', ['fullname' => $fullname]);
    }
}    

