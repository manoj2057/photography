<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberlistingController extends Controller
{
    public function index()
    {
        return view('memberlisting');
    }
}
