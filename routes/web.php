<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersPostsController;

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
    return view('auth.login');
});
Route::group(['middleware' => 'auth'], function()
{
//Admin Routes
Route::get('/dashboard',[AdminController::class,'dashboard']);

Route::get('/products',[AdminController::class,'products']);

Route::get('/subscribers',[AdminController::class,'subscribers']);

Route::get('/approve',[AdminController::class,'approve']);

Route::get('/profile',[AdminController::class,'profile']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Users Routes
Route::get('/home-user',[UserController::class,'home']);
Route::get('/products-user',[UserController::class,'product']);
Route::get('/profile-user',[UserController::class,'profile']);
Route::post('/save/product',[UserController::class,'store']);

//Product Crud Routes For Admin
Route::group(['middleware'=>'web'],function(){
 Route::resource('/posts',PostsController::class);
});

//Product Crud Routes For Admin
Route::group(['middleware'=>'web'],function(){
 Route::resource('/posts/product',UsersPostsController::class);
});

});


Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');



