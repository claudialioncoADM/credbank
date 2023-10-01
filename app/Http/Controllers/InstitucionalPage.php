<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitucionalPage extends Controller
{
    //
    public function index()
    {
        return view('page.institucional');
    }
}
