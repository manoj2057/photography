<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglepageController extends Controller
{
    public function singlepage()
    {
        return view('singlepage');
    }
}
