<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SqlController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;

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
    return view('main');
})->name('main');

Route::get('/frank', function () {
    return view('frank_page');
})->name('frank_page');
Route::get('/cdl', function () {
    return view('cdl_page');
})->name('cdl_page');
Route::get('/stolica', function () {
    return view('stolica_page');
})->name('stolica_page');
Route::get('/whiteside', function () {
    return view('whiteside_page');
})->name('whiteside_page');

Route::get('/kitchen', function () {
    return view('kitchen_page');
})->name('kitchen_page');

Route::get('/calc', function () {
    return view('calc');
})->name('calc');

Route::get('/panotest', function () {
    return view('panotest');
})->name('panotest');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/admin', function() {
    return view('admin');
})->name('admin');

Route::get('/profile', function() {
    return view('profile');
})->name('profile');

// Route::get('/profile.edit', function() {
//     return view('profile.edit');
// })->name('profile.edit');

Route::get('/photo_status', function() {
    return view('photo_status');
})->name('photo_status');

Route::get('/statuszagl', function() {
    return view('statuszagl');
})->name('statuszagl');

Route::get('/review', function() {
    return view('review');
})->name('review');

Route::resource('projects', App\Http\Controllers\ProjectController::class);
Route::get('/projects.index', 'ProjectController@index');

Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::get('/orders.index', 'OrderController@index');

Route::resource('statuses', App\Http\Controllers\StatusController::class);
Route::get('/statuses.index', 'StatusController@index');

Route::get('/profile_edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');

Route::middleware('guest')->group(function(){
    Route::get('/registration', [AuthController::class, 'regForm'])->name('regForm');
    Route::post('/registration', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function(){
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

