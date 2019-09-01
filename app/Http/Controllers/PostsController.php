<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //metodo para validar se os campos estao preenchidos.
        $data = request()->validate([
            'image' => ['required','image']
        ]);

                
        // precisa do pacote *  comando composer require intervention/image
        // requer pacote use Intervention\Image\Facades\Image;
        // redimenciona a imagem , metodo fit nao eh igual ao resize
        $ImagePath=request('image')->store('imagens','public');

        $image = Image::make(public_path("storage/{$ImagePath}"))->fit(1200,1200);
        
        $image->save();

        //para obter as informacoes da imagem gravada usar $infoimage
        $infoimage = auth()->user()->posts()->create([
            'image' =>$ImagePath,
        ]);

        return redirect()->route('galeria.index');


    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('galeria.index');
    }
}
