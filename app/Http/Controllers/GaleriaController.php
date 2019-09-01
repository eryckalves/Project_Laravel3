<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\post;

class GaleriaController extends Controller
{
    public function show(User $user)
    {
        $posts = Post::all();
 
        return view('galeria.index',compact('posts','user'));
    }
}
