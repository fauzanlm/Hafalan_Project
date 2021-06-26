<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Setoran;
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
    return redirect('/login');
});
Route::get('/password/reset', function () {
    return redirect('/login');
});
Route::get('/register', function () {
    return redirect('/login');
});

Auth::routes([
    'register'=>false,
    'password.request'=>false,
    'password.reset'=>false,
    'verify'=>false,
    'reset'=>false,
]);
Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::resource('setor', Setoran::class);


