<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('login');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
    Route::get('/plans', [App\Http\Controllers\PlanController::class,'index'])->name('plans.index');
    Route::get('/plan/{plan}', [App\Http\Controllers\PlanController::class,'show'])->name('show');
    Route::get('/billing', [App\Http\Controllers\PlanController::class,'billing'])->name('billing');
    Route::post('/subscription', [App\Http\Controllers\SubscriptionController::class,'create'])->name('subscription');
});
Route::get('/register', [App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::get('/account', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('/contact', [App\Http\Controllers\UserController::class, 'contact'])->name('contact');
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logoutUser');
Route::get('/forgetPassword', [App\Http\Controllers\UserController::class, 'forgetPassword'])->name('forgetPassword');
Route::get('/changePassword', [App\Http\Controllers\UserController::class, 'showChangePasswordForm'])->name('showChangePasswordForm');
Route::get('/statistics', [App\Http\Controllers\CampaignController::class, 'statistics'])->name('statisticsCampaign');
Route::post('/signup', [App\Http\Controllers\UserController::class, 'store'])->name('signup');
Route::post('/dashboard', [App\Http\Controllers\UserController::class, 'signIn'])->name('dashboard');
Route::get('/instagramApi', [App\Http\Controllers\UserController::class, 'instagram'])->name('instagramApi');
Route::post('/changePassword', [App\Http\Controllers\UserController::class, 'changePassword'])->name('changePassword');
Route::post('/password', [App\Http\Controllers\UserController::class, 'passwordForget'])->name('passwordForget');
Route::post('/store', [App\Http\Controllers\CampaignController::class, 'store'])->name('store');
Route::post('/storeProfile', [App\Http\Controllers\UserController::class, 'storeProfile'])->name('storeProfile');
Route::get('/create', [App\Http\Controllers\CampaignController::class, 'create'])->name('create');
Route::get('/index', [App\Http\Controllers\CampaignController::class, 'index'])->name('CampaignsLists');
Route::get('/redirect', [App\Http\Controllers\SocialAuthFacebookController::class, 'redirect'])->name('redirect');
Route::get('/callback', [App\Http\Controllers\SocialAuthFacebookController::class, 'callback'])->name('callback');
Route::get('/instagram', [App\Http\Controllers\InstagramAuthController::class, 'redirect']);
Route::get('/callbackInstagram', [App\Http\Controllers\InstagramAuthController::class, 'callback']);

