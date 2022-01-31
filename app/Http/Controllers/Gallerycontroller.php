<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gallerycontroller extends Controller
{
    public function index()
    {
        return view('gallery');
    }
}
