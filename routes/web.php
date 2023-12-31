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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pesquisar', [PropertyController::class, 'search'])->name('search');
Route::get('/pesquisar/{property_id}', [PropertyController::class, 'detail'])->name('search.detail');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'loginSubmit'])->name('login.submit');
Route::get('/cadastre-se', [AuthController::class, 'register'])->name('register');
Route::get('/esqueci-minha-senha', [AuthController::class, 'forgot'])->name('forgot');
Route::get('/alterar-senha', [AuthController::class, 'reset'])->name('reset');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
	Route::get('/usuarios', [UserController::class, 'index'])->name('users');
	Route::get('/usuarios/novo', [UserController::class, 'create'])->name('users.create');
	Route::get('/imobiliarias', [RealEstateController::class, 'index'])->name('real-estates');
	Route::get('/imobiliarias/novo', [RealEstateController::class, 'create'])->name('real-estates.create');
	Route::get('/clientes', [CustomerController::class, 'index'])->name('customers');
	Route::get('/clientes/novo', [CustomerController::class, 'create'])->name('customers.create');
	Route::get('/imoveis', [PropertyController::class, 'index'])->name('properties');
	Route::get('/imoveis/novo', [PropertyController::class, 'create'])->name('properties.create');
	Route::get('/propostas', [ProposalController::class, 'index'])->name('proposals');
	Route::get('/propostas/novo', [ProposalController::class, 'create'])->name('proposals.create');
	Route::get('/contratos', [ContractController::class, 'index'])->name('contracts');
	Route::get('/contratos/novo', [ContractController::class, 'create'])->name('contracts.create');
});
