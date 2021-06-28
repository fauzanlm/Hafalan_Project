<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetoranController;
use App\Http\Controllers\AdminController;
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
Route::group(['middleware' => 'prevent-back-history'], function(){

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
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //ini home semua role

        Route::group(['middleware' => 'role:admin'], function(){
            Route::get('/admin/santri', [AdminController::class, 'index'])->name('admin.list');
            Route::get('/admin/add/santri', [AdminController::class, 'create'])->name('admin.create');
            Route::post('/admin/add/santri/store', [AdminController::class, 'store'])->name('admin.store');
            Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
            Route::patch('/admin/{id}/edit/store', [AdminController::class, 'update'])->name('admin.update');
        });

        Route::group(['middleware' => 'role:user'], function(){
            Route::post('/home/store', [SetoranController::class, 'store'])->name('user.store');
            Route::get('/history', [SetoranController::class, 'index'])->name('user.history');
        });
    });

});
