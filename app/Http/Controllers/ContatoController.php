<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function show()
    {
        return view('homepage.contato');
    }
}
