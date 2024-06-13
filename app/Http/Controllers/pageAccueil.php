<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageAccueil extends Controller
{
    public function index()
    {
        return view('pages.accueil');
    }
}
