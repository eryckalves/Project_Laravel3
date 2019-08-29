<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class GaleriaController extends Controller
{
    public function index(User $user)
    {
        return view('homepage.galeria');
    }
}
