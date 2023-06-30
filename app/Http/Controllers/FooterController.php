<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function termCondition()
    {
        return view('termCondition');
    }
}
