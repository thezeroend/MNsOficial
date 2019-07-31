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

//Rotas Site normal
Route::get('/', 'TemplateController@index')->name('inicio');
Route::get('contato', 'TemplateController@contato')->name('contato');
Route::get('noticia', 'TemplateController@noticia')->name('noticia');
Route::get('meioambiente', 'TemplateController@meioambiente')->name('meioambiente');
Route::get('perfil', 'TemplateController@perfil')->name('perfil');
Route::get('previsao', 'TemplateController@previsao')->name('previsao');
Route::get('clienteteste', 'TemplateController@cliente')->name('clienteteste');
Route::get('servicos', 'TemplateController@servicos')->name('servicos');
Route::get('categoria','TemplateController@categoria')->name('categoria');

//Rotas Painel Admin

Route::group(['prefix' => 'admin'], function(){
    Auth::routes();
});


Route::group(['prefix' => 'admin','middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('adcliente', 'ClienteController');
    Route::resource('usuario', 'UsuarioController');
    Route::resource('noticia', 'NoticiaController');
    Route::resource('slide', 'SlideController');
    Route::resource('pagina', 'PaginaController');
    Route::resource('revista', 'RevistaController');
    Route::resource('categoria', 'CategoriaController');
    Route::resource('configuracao', 'ConfiguracaoController');
    Route::resource('galeria', 'GaleriaController');
});

Route::group(['prefix' => 'cliente'], function() {

// Login Routes...
    Route::get('login', ['as' => 'cliente.login', 'uses' => 'ClienteAuth\LoginController@showLoginForm']);
    Route::post('login', ['uses' => 'ClienteAuth\LoginController@login']);
    Route::post('logout', ['as' => 'cliente.logout', 'uses' => 'ClienteAuth\LoginController@logout']);

// Registration Routes...
    Route::get('register', ['as' => 'cliente.register', 'uses' => 'ClienteAuth\RegisterController@showRegistrationForm']);
    Route::post('register', ['uses' => 'ClienteAuth\RegisterController@register']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'cliente.password.reset', 'uses' => 'ClienteAuth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['uses' => 'ClienteAuth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'cliente.password.reset.token', 'uses' => 'ClienteAuth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['uses' => 'ClienteAuth\ResetPasswordController@reset']);
});

Route::view('cliente/home', 'cliente-home')->middleware('cliente');