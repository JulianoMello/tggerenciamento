<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaunchController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TypeAccountController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('oneuitemplate.layouts.app');
    });
    Route::get('webfinances/categorias', [CategoryController::class, 'index']);
    Route::get('webfinances/tipodeconta', [TypeAccountController::class, 'index']);

    Route::get('contas', [AccountController::class, 'index'])->name('account.index');
    Route::get('contas/adicionar', [AccountController::class, 'create'])->name('account.create');
    Route::post('contas/adicionar', [AccountController::class, 'store'])->name('account.store');
    Route::get('conta/editar/{account}', [AccountController::class, 'edit'])->name('account.edit');
    Route::put('conta/editar/{account}', [AccountController::class, 'update'])->name('account.update');
    Route::get('conta/excluir/{account}', [AccountController::class, 'destroy'])->name('account.destroy');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('lancamento', [LaunchController::class, 'index'])->name('launch.index');
    Route::get('lancamento/adicionar', [LaunchController::class, 'create'])->name('launch.create');
    Route::get('lancamento/editar', [LaunchController::class, 'edit'])->name('launch.edit');

    Route::get('relatorios', [ReportController::class, 'index'])->name('report.index');
    });


