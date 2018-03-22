<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class confirmationController extends Controller
{
    public function index()
    {
        if (! session()->has('success_message')) {
            return redirect('/home');
        }
        return view('thanks');
        
    }
}
