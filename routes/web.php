<?php

use App\Http\Controllers\PagesController;
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
//     return view('welcome');
// });


Route::get('/', [PagesController::class, 'index']);

Route::get('/shop', [PagesController::class, 'shop']);

Route::get('/cart', [PagesController::class, 'cart']);

Route::get('/checkout', [PagesController::class, 'checkout']);

Route::get('/login', [PagesController::class, 'login']);

Route::get('/sign-up', [PagesController::class, 'signUp']);

Route::get('/product', [PagesController::class, 'product']);

Route::get('/ok', [PagesController::class, 'ok']);

Route::get('/about-us', [PagesController::class, 'aboutUs']);

Route::get('/contact-us', [PagesController::class, 'contactUs']);

//

Route::get('/user-dashboard', [PagesController::class, 'userDashboard']);


Route::get('/acount-home', [PagesController::class, 'accountHome']);

Route::get('/account-my-orders', [PagesController::class, 'accountMyOrders']);

Route::get('/account-profile', [PagesController::class, 'accountProfile']);

Route::get('/account-settings', [PagesController::class, 'accountSettings']);



