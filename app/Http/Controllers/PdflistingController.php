<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdflistingController extends Controller
{
    public function index()
    {
        return view('pdflisting');
    }
}
