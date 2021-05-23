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

Route::get('/', function () {
    return view('auth.login');
});



Auth::routes();
Route::resource('invoice',\App\Http\Controllers\Dashborad\InvoicesController::class);
Route::get('section/{id}','\App\Http\Controllers\Dashborad\InvoicesController@getproduct');
Route::resource('sections',\App\Http\Controllers\Dashborad\SectionController::class);
Route::resource('products',\App\Http\Controllers\Dashborad\ProductController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{page}', '\App\Http\Controllers\Admin\AdminController@index');
