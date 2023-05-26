<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DarazController extends Controller
{
    public function getHome()
    {
        return view('daraz');
    }
}   
