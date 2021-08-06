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
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return view('auth.login');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function() {
    Route::get('/plans', [App\Http\Controllers\PlanController::class,'index'])->name('plans.index');
    Route::get('/view', [App\Http\Controllers\PlanController::class,'view'])->name('plans.view');
    Route::get('/plan/{plan}', [App\Http\Controllers\PlanController::class,'show'])->name('show');
    Route::get('/billing', [App\Http\Controllers\PlanController::class,'billing'])->name('billing');
    Route::post('/subscription', [App\Http\Controllers\SubscriptionController::class,'create'])->name('subscription');
    Route::post('/addPromocode', [App\Http\Controllers\SubscriptionController::class,'addPromocode'])->name('addPromocode');
    Route::get('/search-influencer', [App\Http\Controllers\UserController::class,'search'])->name('searchInfluencer');
});

Route::group(['middleware' => ['influencer']], function () {
    Route::post('/accept', [App\Http\Controllers\UserController::class, 'acceptCampaign'])->name('accept');
    Route::post('/decline', [App\Http\Controllers\UserController::class, 'declineCampaign'])->name('decline');

});

Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('/infProfile', [App\Http\Controllers\UserController::class, 'inf_profile'])->name('infProfile');
Route::get('/contact', [App\Http\Controllers\UserController::class, 'contact'])->name('contact');
Route::get('/influencer', [App\Http\Controllers\UserController::class, 'influencer'])->name('influencer');
Route::get('/changePassword', [App\Http\Controllers\UserController::class, 'showChangePasswordForm'])->name('showChangePasswordForm');
Route::get('/statistics/{id}', [App\Http\Controllers\CampaignController::class, 'statistics'])->name('statisticsCampaign');
Route::get('/instagramApi', [App\Http\Controllers\UserController::class, 'instagram'])->name('instagramApi');
Route::post('/changePassword', [App\Http\Controllers\UserController::class, 'changePassword'])->name('changePassword');
Route::post('/password', [App\Http\Controllers\UserController::class, 'passwordForget'])->name('passwordForget');
Route::post('/store', [App\Http\Controllers\CampaignController::class, 'store'])->name('store');
Route::post('/storeProfile', [App\Http\Controllers\UserController::class, 'storeProfile'])->name('storeProfile');
Route::post('/saveNet', [App\Http\Controllers\UserController::class, 'network'])->name('saveNet');
Route::post('/registerInf', [App\Http\Controllers\UserController::class, 'registerInf'])->name('registerInf');
Route::post('/storeInfProfile', [App\Http\Controllers\UserController::class, 'storeInfProfile'])->name('storeInfProfile');
Route::post('/updateInfo', [App\Http\Controllers\UserController::class, 'updateInfo'])->name('updateInfo');
Route::post('/updateInfoBilling', [App\Http\Controllers\UserController::class, 'updateInfoBilling'])->name('updateInfoBilling');
Route::get('/create', [App\Http\Controllers\CampaignController::class, 'create'])->name('create');
Route::get('/index', [App\Http\Controllers\CampaignController::class, 'index'])->name('CampaignsLists');
Route::get('/delete/{id}', [App\Http\Controllers\CampaignController::class, 'delete'])->name('delCampaign');
Route::get('/search-influencer', [App\Http\Controllers\UserController::class,'search'])->name('searchInfluencer');
Route::get('/login-influencer', [App\Http\Controllers\UserController::class,'influencer_login'])->name('loginByInfluencer');
Route::get('/register-influencer', [App\Http\Controllers\UserController::class,'influencer_register'])->name('registerByInfluencer');
Route::post('/signup', [App\Http\Controllers\UserController::class, 'store'])->name('signup');
Route::post('/dashboard', [App\Http\Controllers\UserController::class, 'signIn'])->name('dashboard');
Route::post('/remove', [App\Http\Controllers\UserController::class, 'removeCard'])->name('removeCard');


Route::post('/card', [App\Http\Controllers\SubscriptionController::class,'card_create'])->name('stripe.create');

Route::get('/redirect', [App\Http\Controllers\SocialAuthFacebookController::class, 'redirect'])->name('redirect');
Route::get('/callback', [App\Http\Controllers\SocialAuthFacebookController::class, 'callback'])->name('callback');

Route::get('/instagram', [App\Http\Controllers\InstagramAuthController::class, 'redirect']);
Route::post('/callbackInstagram', [App\Http\Controllers\InstagramAuthController::class, 'callback']);

Route::get('/searchCat',[App\Http\Controllers\SearchController::class,'searchCategory']);
Route::get('/searchTag',[App\Http\Controllers\SearchController::class,'searchTag'])->name('searchTag');
Route::get('/searchName',[App\Http\Controllers\SearchController::class,'searchName'])->name('searchNameByInf');
Route::get('/search',[App\Http\Controllers\SearchController::class,'search_campaign'])->name('search');
Route::get('/favorite',[App\Http\Controllers\CampaignController::class,'favorite'])->name('favorite');
Route::get('login/instagram', [App\Http\Controllers\UserController::class,'redirectToInstagramProvider'])->name('instagram.login');

Route::get('login/instagram/callback', [App\Http\Controllers\UserController::class,'instagramProviderCallback'])->name('instagram.login.callback');

Route::get('/home', [App\Http\Controllers\MainController::class, 'index'])->name('home');

