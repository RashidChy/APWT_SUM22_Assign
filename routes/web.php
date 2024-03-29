<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

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


Route::get('/', [pageController::class, 'home'])->name('home');
Route::get('/team', [pageController::class, 'team'])->name('team');
Route::get('/contactus', [pageController::class, 'contactus'])->name('contactus');
Route::get('/aboutus', [pageController::class, 'aboutus'])->name('aboutus');
Route::get('/product', [pageController::class, 'product'])->name('product');
Route::get('/registration', [pageController::class, 'registration'])->name('register');
Route::post('/registration', [pageController::class, 'createSubmit'])->name('register');
Route::get('/login', [pageController::class, 'login'])->name('login');
Route::get('/dashboard', [pageController::class, 'userInfo'])->name('dashboard');
Route::get('/profile/{id}/{name}/{email}/{created_at}', [pageController::class, 'userProfile'])->name('profile');
Route::post('/login', [pageController::class, 'loginAuth'])->name('login');