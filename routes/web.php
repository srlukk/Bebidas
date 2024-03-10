<?php

use App\Http\Controllers\UserController;
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
    return view('index');
});

route::get('/login', function () {
    return view('login');
});

route::get('/registro', function(){
    return view('registro');
});

route::get('/bebidas', function () {
    return view('bebidas');
});

route::post('/register', [UserController::class, 'store'])->name('register');