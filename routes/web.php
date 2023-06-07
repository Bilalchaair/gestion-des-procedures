<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\InterneController;
use App\Http\Controllers\externeController;
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

route::get('hopital',[AdminController::class,'showhopital'])->middleware('auth')->name('hopital');
route::get('addhopital',[AdminController::class,'addhopital'])->middleware('auth')->name('addhopital');
route::post('add_hopital',[AdminController::class,'add_hopital'])->middleware('auth')->name('add_hopital');
route::get('delete_hopital/{id}',[AdminController::class,'delete_hopital'])->middleware('auth')->name('delete_hopital');
route::get('update_hopital/{id}',[AdminController::class,'update_hopital'])->middleware('auth')->name('update_hopital');
route::post('edit_hopital/{id}',[AdminController::class,'edit_hopital'])->middleware('auth')->name('edit_hopital');

route::get('division',[AdminController::class,'showdivision'])->middleware('auth')->name('division');
route::get('adddivision',[AdminController::class,'adddivision'])->middleware('auth')->name('adddivision');
route::post('add_division',[AdminController::class,'add_division'])->middleware('auth')->name('add_division');
route::get('delete_division/{id}',[AdminController::class,'delete_division'])->middleware('auth')->name('delete_division');
route::get('update_division/{id}',[AdminController::class,'update_division'])->middleware('auth')->name('update_division');
route::post('edit_division/{id}',[AdminController::class,'edit_division'])->middleware('auth')->name('edit_division');

route::get('service',[AdminController::class,'showservice'])->middleware('auth')->name('service');
route::get('addservice',[AdminController::class,'addservice'])->middleware('auth')->name('addservice');
route::post('add_service',[AdminController::class,'add_service'])->middleware('auth')->name('add_service');
route::get('delete_service/{id}',[AdminController::class,'delete_service'])->middleware('auth')->name('delete_service');
route::get('update_service/{id}',[AdminController::class,'update_service'])->middleware('auth')->name('update_service');
route::post('edit_service/{id}',[AdminController::class,'edit_service'])->middleware('auth')->name('edit_service');

route::get('unite',[AdminController::class,'showunite'])->middleware('auth')->name('unite');
route::get('addunite',[AdminController::class,'addunite'])->middleware('auth')->name('addunite');
route::post('add_unite',[AdminController::class,'add_unite'])->middleware('auth')->name('add_unite');
route::get('delete_unite/{id}',[AdminController::class,'delete_unite'])->middleware('auth')->name('delete_unite');
route::get('update_unite/{id}',[AdminController::class,'update_unite'])->middleware('auth')->name('update_unite');
route::post('edit_unite/{id}',[AdminController::class,'edit_unite'])->middleware('auth')->name('edit_unite');



route::get('upload_procedure',[ManagerController::class,'upload_procedure'])->middleware('auth')->name('upload_procedure');
route::get('uploadprocedure',[ManagerController::class,'uploadprocedure'])->middleware('auth')->name('uploadprocedure');
route::post('upload',[ManagerController::class,'upload'])->middleware('auth')->name('upload');
route::get('delete_procedure/{id}',[ManagerController::class,'delete_procedure'])->middleware('auth')->name('delete_procedure');
route::get('update_procedure/{id}',[ManagerController::class,'update_procedure'])->middleware('auth')->name('update_procedure');
route::post('edit_procedure/{id}',[ManagerController::class,'edit_procedure'])->middleware('auth')->name('edit_procedure');


route::get('showprocedure',[InterneController::class,'showprocedure'])->middleware('auth')->name('showprocedure');
route::get('addprocedure',[InterneController::class,'addprocedure'])->middleware('auth')->name('addprocedure');
route::get('verifierprocedure/{id}',[InterneController::class,'verifierprocedure'])->middleware('auth')->name('verifierprocedure');
route::post('ajouter_verif/{id}',[InterneController::class,'ajouter_verif'])->middleware('auth')->name('ajouter_verif');
route::get('delete_proc/{id}',[InterneController::class,'delete_proc'])->middleware('auth')->name('delete_proc');
route::get('approuverprocedure/{id}',[InterneController::class,'approuverprocedure'])->middleware('auth')->name('approuverprocedure');
route::post('ajouter_app/{id}',[InterneController::class,'ajouter_app'])->middleware('auth')->name('ajouter_app');
route::get('modifierprocedure/{id}',[InterneController::class,'modifierprocedure'])->middleware('auth')->name('modifierprocedure');
route::post('modifier_proc/{id}',[InterneController::class,'modifier_proc'])->middleware('auth')->name('modifier_proc');
route::get('exporterprocedure/{id}',[InterneController::class,'exporterprocedure'])->middleware('auth')->name('exporterprocedure');

//route::get('page_procedure',[externeController::class,'page_procedure'])->middleware('auth')->name('page_procedure');
route::get('page_procedure',[externeController::class,'page_procedure'])->middleware('auth')->name('page_procedure');
//route::get('download{file}',[externeController::class,'download'])->middleware('auth')->name('download');
Route::get('/download/{file}', [externeController::class, 'download'])->middleware('auth')->name('file.download');
Route::get('/view/{id}', [externeController::class, 'view'])->middleware('auth')->name('view');
