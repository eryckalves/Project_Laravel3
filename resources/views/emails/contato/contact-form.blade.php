@component('mail::message')

#Obrigado pela sua mensagem!



<strong>Nome: </strong> {{$data['name']}}
<br>
<strong>Email: </strong> {{$data['email']}}

<strong>Mensagem: 
    
</strong> {{$data['message']}}

@endcomponent
