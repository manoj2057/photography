<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberlistingController extends Controller
{
    public function memberlisting()
    {
        return view('memberlisting');
    }
}
