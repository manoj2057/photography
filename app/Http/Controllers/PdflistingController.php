<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdflistingController extends Controller
{
    public function pdflisting()
    {
        return view('pdflisting');
    }
}
