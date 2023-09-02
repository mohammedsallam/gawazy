<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterOptionsController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StaticsController;

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

Route::get('/', [HomeController::class, 'index']) -> name('home');

/*
 * Auth Routs don't send any data because it is frontend copy of gawazy site
 * */

//Auth::routes();

/*
 * Register Routes
 * */

Route::group(['namespace' => 'Auth', 'prefix' => 'register'], function() {
    Route::get('signup-options', [RegisterOptionsController::class, 'signupOptions']) -> name('signup-options');
    Route::get('user', [RegisterOptionsController::class, 'userRegister']) -> name('user-register');
    Route::get('vendor', [RegisterOptionsController::class, 'vendorRegister']) -> name('vendor-register');
});

/*
* Dashboard Routes
* */

Route::group(['prefix' => 'user'], function() {
    Route::get('edit_profile', [UsersController::class, 'editProfile']) -> name('editUserProfile');
    Route::get('messages', [UsersController::class, 'messages']) -> name('UserMessages');
    Route::get('my_favorites', [UsersController::class, 'my_favorites']) -> name('userFavorites');
    Route::get('notifications', [UsersController::class, 'notifications']) -> name('userNotifications');
    Route::get('support', [UsersController::class, 'support']) -> name('userSupport');
});

Route::group(['prefix' => 'vendor'], function() {
    Route::get('edit_profile', [VendorsController::class, 'editProfile']) -> name('editVendorProfile');
    Route::get('messages', [VendorsController::class, 'messages']) -> name('vendorMessages');
    Route::get('my_favorites', [VendorsController::class, 'my_favorites']) -> name('vendorFavorites');
    Route::get('notifications', [VendorsController::class, 'notifications']) -> name('vendorNotifications');
    Route::get('support', [VendorsController::class, 'support']) -> name('vendorSupport');
    Route::get('add_new_offer', [VendorsController::class, 'add_new_offer']) -> name('add_new_offer');
    Route::get('add_secondary_service', [VendorsController::class, 'add_secondary_service']) -> name('add_secondary_service');
    Route::get('draft', [VendorsController::class, 'draft']) -> name('draft');
    Route::get('main_service', [VendorsController::class, 'main_service']) -> name('main_service');
    Route::get('latest_work', [VendorsController::class, 'latest_work']) -> name('latest_work');
    Route::get('my_offers', [VendorsController::class, 'my_offers']) -> name('my_offers');
    Route::get('my_secondary_services', [VendorsController::class, 'my_secondary_services']) -> name('my_secondary_services');
});


/*
 * Main Routes
 * */

Route::get('categories', [MainController::class, 'categories']) -> name('categories');
Route::get('services', [MainController::class, 'services']) -> name('services');
Route::get('services/{id}', [MainController::class, 'servicePage']) -> name('servicePage');
Route::get('offers', [MainController::class, 'offers']) -> name('offers');
Route::get('offers/{id}', [MainController::class, 'offerPage']) -> name('offerPage');

/*
 * static pages Routes
 * */

Route::get('help', [StaticsController::class, 'help']) -> name('help');
Route::get('policy', [StaticsController::class, 'policy']) -> name('policy');
Route::get('terms', [StaticsController::class, 'terms']) -> name('terms');
