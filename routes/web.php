<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminLoginController;


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
    return view('index'); 
})->name('index');
Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get('/contact', function(){
    return view('contact');
})->name('contact');
Route::get('login', [UserController::class, 'index'])->name('login');
Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::post('post-login', [UserController::class, 'postLogin'])->name('login.post');
Route::post('post-registration', [UserController::class, 'postRegistration'])->name('registration.post');
Route::get('index', [UserController::class, 'index']);
// Route::get('logout', [UserAuthController::class, 'logout'])->name('logout');
//Routes for Admin login and operations
// Route::get('/admin/login',[AdminLoginController::class,'index'])->name('admin.login');
Route::group(['prefix' => 'admin'],function(){

  Route::group(['middleware' => 'admin.guest'],function(){
  }); 

  Route::group(['middleware' => 'admin.auth'],function(){
}); 


});