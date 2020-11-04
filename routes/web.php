<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

//pagina login usuário
Route::get('/login', 'LoginController@login');

//Route::post('/logar', 'LoginController@logar');

//cadastro usuario
Route::get('/cadastro', 'LoginController@cadastro');

//cadastro doação
Route::get('/doacao', 'MenuController@doacao');

//acessar menu
Route::post('/acessar', 'LoginController@acessar')->name('acessar');

//salvar usuario
Route::post('/cadastrado', 'LoginController@cadastrado');

//CADASTRAR
Route::post('/botaodoacao', 'MenuController@botaodoacao');

//salvar doações
Route::get('/listarDoacoes', 'MenuController@listarDoacoes');



//Esqueci a senha
Route::get('/esquecisenha', 'LoginController@esquecisenha');

//menu
Route::get('/menu', 'MenuController@menu')->name('menu');

//voltar
Route::post('/voltarlogin', 'LoginController@voltarlogin');

//sair conta
Route::get('/sairconta', 'LoginController@sairconta');

//acessar campos menu
Route::get('/grafico', 'MenuController@grafico');
Route::get('/bairros', 'MenuController@bairros');
