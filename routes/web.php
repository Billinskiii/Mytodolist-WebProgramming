<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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
    return view('login');
});

Route::get('/login', [AuthManager::class, 'login'])->name('login'); 
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); 
//function(){
    //  return view('login');
  //});

route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');

        //function () {
    //return view('register');
//});

Route::get('/dashboard/tasks', function (){
    return view('tasks');
});

Route::get('/dashboard/myaccount', function (){
    return view('myaccount');
});

Route::get('/dashboard/aboutus', function(){
    return view('aboutus');
});



Route::get('/database', function(){
    return view('condatabase');
});