<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\RealEstateController;
use App\Http\Controllers\UserController;

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

Route::group(['middleware' => 'guest'], function () {
	Route::get('/', [HomeController::class, 'index'])->name('home');
	Route::get('/pesquisar', [PropertyController::class, 'search'])->name('search');
	Route::get('/pesquisar/{property_id}', [PropertyController::class, 'detail'])->name('search.detail');
	Route::get('/login', [AuthController::class, 'login'])->name('login');
	Route::get('/cadastre-se', [AuthController::class, 'register'])->name('register');
	Route::get('/esqueci-minha-senha', [AuthController::class, 'forgot'])->name('forgot');
	Route::get('/alterar-senha', [AuthController::class, 'reset'])->name('reset');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
	Route::get('/usuarios', [UserController::class, 'index'])->name('users');
	Route::get('/imobiliarias', [RealEstateController::class, 'index'])->name('real-estates');
	Route::get('/clientes', [CustomerController::class, 'index'])->name('customers');
	Route::get('/imoveis', [PropertyController::class, 'index'])->name('properties');
	Route::get('/propostas', [ProposalController::class, 'index'])->name('proposals');
	Route::get('/contratos', [ContractController::class, 'index'])->name('contracts');
});
