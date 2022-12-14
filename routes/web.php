<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


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
Route::get('/signup', [HomeController::class, 'signup']);
Route::get('/view-cat-details{id}',[HomeController::class,'view_cat_details']);
Route::get('/search',[HomeController::class,'search']);
//Cart
// Route::post('/add-to-cart',[CartController::class,'add_to_cart']); working config
Route::get('/add-to-cart/{id}',[CartController::class,'add_to_cart']);
Route::get('/delete-cart/{id}',[CartController::class,'delete']);

//loginRegitstrationLogout
Route::post('/customer-login', [CustomerController::class, 'login']);
Route::post('/customer-registration', [CustomerController::class, 'registration']);
Route::get('/customer-logout', [CustomerController::class, 'logout']);


//Checkout
// Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/login-check', [CheckoutController::class, 'login_check']);
// Route::post('save-shipping-details', [CheckoutController::class, 'save_shipping_address']);
// Route::get('payment', [CheckoutController::class, 'payment']);


//Google Login 
Route::get('/auth/google/redirect', [AuthController::class, 'google_redirect']);
Route::get('/auth/google/callback', [AuthController::class, 'google_callback']);

// SSLCOMMERZ Start
Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END