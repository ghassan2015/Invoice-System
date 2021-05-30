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
Route::resource('InvoiceAttachments', \App\Http\Controllers\InvoiceAttachmentController::class);
Route::resource('Invoice', \App\Http\Controllers\Dashborad\InvoicesController::class);

Route::get('/InvoicesDetails/{id}','\App\Http\Controllers\Dashborad\InvoicesDetailsController@edit');
Route::get('download/{invoice_number}/{file_name}', '\App\Http\Controllers\Dashborad\InvoicesDetailsController@get_file');
Route::get('View_file/{invoice_number}/{file_name}', '\App\Http\Controllers\Dashborad\InvoicesDetailsController@open_file');
Route::post('delete_file', '\App\Http\Controllers\Dashborad\InvoicesDetailsController@destroy')->name('delete_file');

Route::get('/Status_show/{id}', '\App\Http\Controllers\Dashborad\InvoicesController@show')->name('Status_show');
Route::post('/Status_Update/{id}', '\App\Http\Controllers\Dashborad\InvoicesController@Status_Update')->name('Status_Update');
Route::get('Invoice_Paid','\App\Http\Controllers\Dashborad\InvoicesController@Invoice_Paid');

Route::get('Invoice_UnPaid','\App\Http\Controllers\Dashborad\InvoicesController@Invoice_UnPaid');

Route::get('Invoice_Partial','\App\Http\Controllers\Dashborad\InvoicesController@Invoice_Partial');
Route::resource('Archive', \App\Http\Controllers\Dashborad\InvoiceAchiveController::class);
Route::get('Print_invoice/{id}','\App\Http\Controllers\Dashborad\InvoicesController@Print_invoice');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{page}', '\App\Http\Controllers\Admin\AdminController@index');
