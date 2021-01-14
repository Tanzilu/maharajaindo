<?php

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

Route::get('/', 'Frontpage\HomeController@index')->name('home');
Route::get('/coffee', 'Frontpage\CoffeeController@index')->name('coffee');
Route::get('/team', 'Frontpage\TeamController@index')->name('team');
Route::get('/about', 'Frontpage\AboutController@index')->name('about');
Route::get('/products', 'Frontpage\ProductsController@index')->name('products');
Route::get('/contact', 'Frontpage\ContactController@index')->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard', 'Backoffice\DashboardController@index')->name('admin/dashboard');
Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum', 'verified']], function () {
    Route::resource('product', 'Backoffice\ProductController');
});
