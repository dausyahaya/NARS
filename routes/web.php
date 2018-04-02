<?php

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


Auth::routes();

Route::get('/',  'HomeController@index');
Route::get('membership',  'HomeController@membership');
Route::get('register', 'HomeController@register');
Route::get('promocode', 'HomeController@promocode');
Route::get('spinner', 'HomeController@spinner');
Route::get('summarytable', 'HomeController@summarytable');
Route::get('redemptmethod', 'HomeController@redemptmethod');
Route::get('product', 'HomeController@product');
Route::get('memberregister', 'HomeController@memberregister');
Route::get('memberlogin', 'HomeController@memberlogin');
Route::post('redempt', 'HomeController@redempt');
Route::post('memberregister1', 'HomeController@memberregister1');
Route::get('identityconfirmation', 'HomeController@identityconfirmation');
Route::post('savemethod', 'HomeController@savemethod');
Route::get('redemptgift', 'HomeController@redemptgift');
Route::get('redemptmethodmessage', 'HomeController@redemptmethodmessage');



Route::get('login', 'AdminController@login');
Route::get('setting', 'AdminController@setting');
Route::get('admindashboard', 'AdminController@admindashboard');
Route::get('newstore', 'AdminController@newstore');
Route::post('addstore', 'AdminController@addstore');
Route::post('adduser', 'AdminController@adduser');
Route::get('availablesummary', 'AdminController@availablesummary');
Route::get('newuser', 'AdminController@newuser');
Route::get('addusermessage', 'AdminController@addusermessage');
Route::get('addstoremessage', 'AdminController@addstoremessage');
Route::get('stock',  'AdminController@stock');
Route::post('newstock',  'AdminController@newstock');
Route::get('changewallpaper',  'AdminController@changewallpaper');
Route::post('savewallpaper',  'AdminController@savewallpaper');
Route::get('savewallpapermessage', 'AdminController@savewallpapermessage');
Route::get('import', 'AdminController@import');
Route::get('importedfiles', 'AdminController@importedfiles');

//Route::post('importExcelCustomerList', 'AdminController@importExcelCustomerList');
Route::post('importExcelSalesItemSummary', 'AdminController@importExcelSalesItemSummary');
//Route::post('importExcelStoreList', 'AdminController@importExcelStoreList');
Route::post('importExcelItem', 'AdminController@importExcelItem');
//Route::post('importExcelTotalSalesTransactionRecord','AdminController@importExcelTotalSalesTransactionRecord');
Route::post('importExcelCustomerSales','AdminController@importExcelCustomerSales');
Route::post('importExcelSalesReceiptSummary','AdminController@importExcelSalesReceiptSummary');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');