<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

// Necessario para o envio de Email
use Illuminate\Support\Facades\Mail;

//Necessario para envio de Email e foi criado a classe model com o comando :
//php artisan make:mail ContactFormMail --markdown=emails.contato.contact-form

use App\Mail\ContactFormMail;

class ContatoController extends Controller
{
    public function create()
    {

        return view('contato.create');
    }

    public function store()
    {
        //pede todas as informações do <form></form> : request()->all();
        $data = request()->validate(
            [
                'name' => 'required',
                // outro modo 'email' => ['required' , 'email']
                'email' => 'required|email',
                'message' => 'required',
            ],
            
            //Customizar a mensagem de erro
            [
                'name.required' => 'Informe o nome',
                'email.required' => 'Informe o Email',
                'message.required' => 'Escreva a mensagem',
            ],
        
        );

        // *** EMAIL SECTION *****

        //comando para criar php artisan make:mail ContactFormMail --markdown=emails.contato.contact-form
        // class model : ContactFormMail , folder : view/emails/contato/contact-form.blade.php

        
        //envia o mail para alguem , class ContactFormMail criada na pasta Http/Mail/ContactFormMail.php
        //$data tem q ser chamado tbm no model ContactFormMail()
        Mail::to('teste@teste.com')->send(new ContactFormMail($data));
        
        if( count(Mail::failures()) > 0 ) {
            $mensagem = 'Ocorreu um problema no envio do email';
        }
        else {
            $mensagem = 'Email Enviado com Sucesso';
        }
        return redirect()->route('contato.create')->with('mensagem', $mensagem);
        
    }
}
