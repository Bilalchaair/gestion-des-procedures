<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\InterneController;
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
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

route::get('home',[Homecontroller::class,'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::view('/creer-procedure','userinterne.creer-procedure')->name('creer-procedure');

require __DIR__.'/auth.php';
route::get('users',[AdminController::class,'showusers'])->middleware('auth')->name('users');
route::get('adduser',[AdminController::class,'adduser'])->middleware('auth')->name('adduser');
route::post('add_user',[AdminController::class,'add_user'])->middleware('auth')->name('add_user');
route::get('delete_user/{id}',[AdminController::class,'delete_user'])->middleware('auth')->name('delete_user');
route::get('update_user/{id}',[AdminController::class,'update_user'])->middleware('auth')->name('update_user');
route::post('edit_user/{id}',[AdminController::class,'edit_user'])->middleware('auth')->name('edit_user');


route::get('upload_procedure',[ManagerController::class,'upload_procedure'])->middleware('auth')->name('upload_procedure');
route::post('upload',[ManagerController::class,'upload'])->middleware('auth')->name('upload');


route::get('showprocedure',[InterneController::class,'showprocedure'])->middleware('auth')->name('showprocedure');
route::get('addprocedure',[InterneController::class,'addprocedure'])->middleware('auth')->name('addprocedure');
