<?php

use App\Http\Controllers\Admin\{SuportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//rota para inserir os valores no suport
Route::get('/suport/create', [SuportController::class, 'create'])->name('suport.create');
//rota para poder editar os valores enviado na base de dados de suportes
Route::get('/suport/{id}', [SuportController::class,'show'])->name('suport.show');
//rota que serve para esnviar os valores inseridos na base de dados
Route::post('/suport', [SuportController::class, 'store'])->name('suport.store');
//rota de contactos
Route::get('/contacto', [SiteController::class, 'index']);
//rota de suport
Route::get('/suport', [SuportController::class, 'index'])->name('suport.index');
