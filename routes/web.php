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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\Admin\AdminController@index')->name('dashboard');
    Route::get('/profile', 'App\Http\Controllers\Admin\AdminController@profile')->name('profile');
    Route::get('/truck-list', 'App\Http\Controllers\Admin\AdminController@list')->name('list');
    Route::get('/price', 'App\Http\Controllers\Admin\AdminController@price')->name('price');
});
