<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;



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

// Route::get('/', function () {
//     return view('frontend.welcome');
// });


//Backend
Route::get('/admin',[AdminController::class,'index']);
Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::post('/admin-dashboard',[AdminController::class,'show_dashboard']);
//Category.Resource route
Route::resource('/categories',CategoryController::class);
//Product Resource route
Route::resource('/products',ProductController::class);

//Fronend 
Route::get('/',[HomeController::class,'index']);
Route::get('/view-details{id}',[HomeController::class,'view_details']);

//Cart
// Route::post('/add-to-cart',[CartController::class,'add_to_cart']); working config
Route::get('/add-to-cart/{id}',[CartController::class,'add_to_cart']);
Route::get('/delete-cart/{id}',[CartController::class,'delete']);


//Google Login 
Route::get('/auth/google/redirect',[GoogleController::class,], 'google_redirect')->name('google-login');
Route::get('/auth/google/callback',[GoogleController::class,], 'google_callback');