<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactMe;
use App\Http\Controllers\AuthenticationAdmin;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

Route::resource('/portfolio', PortfolioController::class);

Route::resource('/blog', PostsController::class);

Route::get('/contact', [ContactMe::class, 'contact']);
Route::post('/contact', [ContactMe::class, 'contactSend']);

Route::get('/login', [AuthenticationAdmin::class, 'login'])->middleware('alreadyLogin');
Route::post('/loginAdmin', [AuthenticationAdmin::class, 'loginAdmin'])->name('loginAdmin');
Route::get('/logout', [AuthenticationAdmin::class, 'logout']);


Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware('isLoggedIn');