<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeAccountController;
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
    return view('oneuitemplate.layouts.app');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('webfinances/categorias', [CategoryController::class, 'index']);
Route::get('webfinances/tipodeconta', [TypeAccountController::class, 'index']);

Route::get('contas', [AccountController::class, 'index'])->name('account.index');
Route::get('contas/adicionar', [AccountController::class, 'create'])->name('account.create');
Route::post('contas/adicionar', [AccountController::class, 'store'])->name('account.store');
Route::get('conta/editar/{account}', [AccountController::class, 'edit'])->name('account.edit');
Route::put('conta/editar/{account}', [AccountController::class, 'update'])->name('account.update');
Route::get('conta/excluir/{account}', [AccountController::class, 'destroy'])->name('account.destroy');
