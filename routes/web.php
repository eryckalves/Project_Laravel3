<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage.index');
});

//remove novos registros
//Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//rota para a pagina galeria
Route::get('/p/galeria','GaleriaController@show')->name('galeria.index');
//rota para a pagina Sobre nos
Route::get('/p/sobre','SobreController@show')->name('sobre.index');
//rota para a pagina contato
Route::get('/p/contato','ContatoController@show')->name('contato.index');
//rota para a pagina de criar imagem (imagem + caption) metodo controller -> @create - /photo/create
Route::get('/p/create','PostsController@create')->name('posts.create');

//rota para gravar no banco a imagem com o texto caption metodo controller -> @store - /photo
Route::post('/p/galeria','PostsController@store');

//rota para gravar no banco a imagem com o texto caption metodo controller -> @store - /photo
Route::post('/p/{galeria}','PostsController@store');
//rota para dar deletar foto
Route::get('/p/delete/{post}', 'PostsController@delete');