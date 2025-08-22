<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ClientLoginController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ClientLoginController::class ,'showClientLoginForm'])->name('client.login');
Route::get('/login', [ClientLoginController::class ,'showClientLoginForm'])->name('login');
Route::post('/loginpost', [ClientLoginController::class ,'clientLogin'])->name('client.login.submit');
Route::get('/logout', [ClientLoginController::class ,'logout'])->name('client.logout');
Route::get('/about','HomeController@about')->name('about');
Route::get('/homepage','HomeController@homepage')->name('homepage');
Route::get('/reviews','HomeController@reviews')->name('reviews');
Route::get('/reviewall','HomeController@reviewall')->name('reviewall');
Route::get('/exclusive','HomeController@exclusive')->name('exclusive');
Route::post('/store','HomeController@store')->name('store');
Route::post('/storereview','HomeController@storereview')->name('storereview');

Route::name('client.')->middleware(['auth'])->group(function () {
    
    Route::get('/homepage','HomeController@index')->name('index');

    Route::name('users.')->prefix('users')->group(function(){
        Route::get('/show/{id}','UsersController@show')->name('show');
    });

    Route::name('tickets.')->prefix('tickets')->group(function(){
        Route::get('/','TicketController@index')->name('index');
        Route::get('/show/{id}','TicketController@show')->name('show');
        Route::post('/delete', 'TicketController@destroy')->name('delete');
        Route::get('/create','TicketController@create')->name('create');
        Route::post('/store','TicketController@store')->name('store');
        Route::get('/print/{id}', 'TicketController@print')->name('print');
        Route::get('/check-tickets', 'TicketController@checkticket')->name('checkticket');
        Route::get('/itemticket', 'TicketController@itemticket')->name('itemticket');
        Route::get('/deletecart', 'TicketController@DeleteCart');
        Route::get('/alldeletordercart', 'TicketController@alldeletordercart');
        Route::get('/edit/{id}', 'TicketController@edit')->name('edit');
        Route::post('/update', 'TicketController@update')->name('update');
    });
    
});
