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

use App\Http\Controllers\Clientes;

Route::get('/welcone', function () {
    return view('welcome');
});

// Pagina Home
Route::get('/',[Clientes::class,'Clientes']);

// Pagina do Cliente
Route::get('/cliente/{id}',[Clientes::class,'ReadClientes']);

// Pagina para Editar Cadastro
Route::get('/update/{id}',[Clientes::class,'ReadUpdateClientes']);

// Pagina de Cadastro de Cliente
Route::get('/create',[Clientes::class,'create_client']);

//Rota de envio do Formulario de Cadastro de Cliente
Route::post('/createcliente',[Clientes::class,'createcliente']);

//Rota de envio do Formulario de Edição de Cadastro de Cliente
Route::post('/updatecliente',[Clientes::class,'updatecliente']);

//Rota responsavel por Deletar Cadastro
Route::get('/cliente/del/{id}',[Clientes::class,'delcliente']);

