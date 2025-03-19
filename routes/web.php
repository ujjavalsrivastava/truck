<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index');
Route::get('/sell-my-car', 'App\Http\Controllers\HomeController@sellMyCar')->name('sell-my-car');
Route::get('/category-wise-list/{id}', 'App\Http\Controllers\HomeController@categoryWiseList');
Route::get('/truck-details/{id}', 'App\Http\Controllers\HomeController@truckDetatils')->name('truck-details');
Route::post('/post-sell-my-car', 'App\Http\Controllers\HomeController@PostsellMyCar')->name('post-sell-my-car');
Route::get('login-form/{id}', 'App\Http\Controllers\AuthController@LoginForm');
Route::get('log-out/', 'App\Http\Controllers\AuthController@logOut');
Route::get('/price', 'App\Http\Controllers\Admin\AdminController@price')->name('price');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth.check'])->group(function () {
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\Admin\AdminController@index')->name('dashboard');
    Route::get('/profile', 'App\Http\Controllers\Admin\AdminController@profile')->name('profile');
    Route::get('/truck-type-list', 'App\Http\Controllers\Admin\AdminController@list')->name('list');
    Route::get('/truck-type-list/create', 'App\Http\Controllers\Admin\AdminController@typelistcreate')->name('list');
    Route::get('/truck-list', 'App\Http\Controllers\Admin\AdminController@truckList')->name('truck-list');
    Route::get('/truck-list/create', 'App\Http\Controllers\Admin\AdminController@createTruck');
    Route::get('/quote-list', 'App\Http\Controllers\Admin\AdminController@quoteList')->name('quoteList-list');
    Route::get('/price-list', 'App\Http\Controllers\Admin\AdminController@priceList')->name('price-list');
    Route::get('/price-list/create', 'App\Http\Controllers\Admin\AdminController@priceCreate');
    Route::get('/dealer-list', 'App\Http\Controllers\Admin\AdminController@dealerList')->name('price-list');
    Route::get('/dealer-list/create', 'App\Http\Controllers\Admin\AdminController@createDealer')->name('price-list');
    
    Route::get('/setting', 'App\Http\Controllers\Admin\AdminController@setting');
    Route::get('/store-setting', 'App\Http\Controllers\Admin\AdminController@storeSetting');

    
    Route::get('/customer-list', 'App\Http\Controllers\Admin\AdminController@customerList');
    Route::get('/customer-list/create', 'App\Http\Controllers\Admin\AdminController@customerCreate');
});
});
