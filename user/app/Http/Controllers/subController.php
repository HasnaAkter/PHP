<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subController extends Controller
{
    public function about()
    {

        return view('About');
    }
}
