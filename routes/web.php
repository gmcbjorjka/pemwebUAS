<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\WpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SawController;

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
//registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [LoginController::class, 'login'])->name('user.login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('user.logout');

// Home route (after login)
// Route::get('/home', function () {
//     return view('dashboard.home');
// })->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');


//resetpasword
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Stock routes
Route::resource('stocks', StockController::class);

Route::get('/stocks', [StockController::class, 'index'])->name('stocks.index');
Route::get('/stocks/create', [StockController::class, 'create'])->name('stocks.create');
Route::post('/stocks', [StockController::class, 'store'])->name('stocks.store');
Route::get('stocks/{stock}/edit', [StockController::class, 'edit'])->name('stocks.edit');
Route::put('stocks/{stock}', [StockController::class, 'update'])->name('stocks.update');

//wpdss
Route::get('/weights/create', [WeightController::class, 'create'])->name('weights.create');
Route::post('/weights', [WeightController::class, 'store'])->name('weights.store');
Route::get('/weights/normalization', [WeightController::class, 'normalization'])->name('weights.normalization');
Route::get('/wp/preferens', [WpController::class, 'index'])->name('wp.preferens');
Route::get('/wp/hasil', [WpController::class, 'hasil'])->name('wp.hasil');

//sawdss
Route::get('/saw/weights', [SawController::class, 'create'])->name('saw.weights');
Route::post('/weights', [SawController::class, 'store'])->name('saw.store');
Route::get('/sawweights/normalization', [SawController::class, 'normalization'])->name('saw.normalization');
Route::get('/saw/preferens', [SawController::class, 'normal'])->name('saw.preferens');
Route::get('/saw/hasil', [SawController::class, 'hasil'])->name('saw.hasil');


//profil
Route::post('/profile/photo', [ProfileController::class, 'updateProfilePhoto'])->name('profile.photo.update');

//calender
Route::get('/calender', [CalenderController::class, 'index'])->name('calender');



Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/resetpw', function () {
//     return view('auth.password.reset-pasword');
// });
// Route::get('/forgotpw', function () {
//     return view('auth.password.forgot-pasword');
// });
// // Route::get('/register', function () {
// //     return view('auth.register');
// // });
// Route::get('/profile', function () {
//     return view('dashboard.profile');
// });
// Route::get('/listusers', function () {
//     return view('usermanagement.list_users');
// });
// Route::get('/liststock', function () {
//     return view('stock.stocklist');
// });
// Route::get('/addstock', function () {
//     return view('stock.add_stock');
// });
// Route::get('/addweight', function () {
//     return view('dss.weight');
// });
