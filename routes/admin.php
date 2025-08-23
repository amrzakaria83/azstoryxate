<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\HomeController;

Auth::routes();

Route::get('/lang-change', [HomeController::class ,'changLang'])->name('admin.lang.change');
Route::get('/login', [AdminLoginController::class ,'showAdminLoginForm'])->name('admin.login');
Route::post('/login', [AdminLoginController::class ,'adminLogin'])->name('admin.login.submit');
Route::get('/logout', [AdminLoginController::class ,'logout'])->name('admin.logout');

Route::name('admin.')->middleware(['auth:admin'])->group(function () {
    
    Route::middleware(['emp-access:dash'])->group(function () {

        Route::get('/','HomeController@index')->name('index');   
            //  Route::get('/','HomeController@artical1')->name('artical1');



        Route::name('settings.')->prefix('settings')->group(function(){
            Route::get('/edit/{id}', 'SettingsController@edit')->name('edit');
            Route::post('/update', 'SettingsController@update')->name('update');
        });

        Route::name('employees.')->prefix('employees')->group(function(){
            Route::get('/','EmployeesController@index')->name('index');
            Route::get('/show/{id}','EmployeesController@show')->name('show');
            Route::post('/delete', 'EmployeesController@destroy')->name('delete');
            Route::get('/create','EmployeesController@create')->name('create');
            Route::post('/store','EmployeesController@store')->name('store');
            Route::get('/edit/{id}', 'EmployeesController@edit')->name('edit');
            Route::post('/update', 'EmployeesController@update')->name('update');
        });
        Route::name('video_views.')->prefix('video_views')->group(function(){
            Route::get('/','Video_viewsController@index')->name('index');
            Route::get('/show/{id}','Video_viewsController@show')->name('show');
            Route::post('/delete', 'Video_viewsController@destroy')->name('delete');
            Route::get('/create','Video_viewsController@create')->name('create');
            Route::post('/store','Video_viewsController@store')->name('store');
            Route::get('/edit/{id}', 'Video_viewsController@edit')->name('edit');
            Route::post('/update', 'Video_viewsController@update')->name('update');
        });
        Route::name('reviews.')->prefix('reviews')->group(function(){
            Route::get('/','ReviewsController@index')->name('index');
            Route::get('/show/{id}','ReviewsController@show')->name('show');
            Route::post('/delete', 'ReviewsController@destroy')->name('delete');
            Route::get('/create','ReviewsController@create')->name('create');
            Route::post('/store','ReviewsController@store')->name('store');
            Route::get('/edit/{id}', 'ReviewsController@edit')->name('edit');
            Route::post('/update', 'ReviewsController@update')->name('update');
        });

        Route::name('users.')->prefix('users')->group(function(){
            Route::get('/','UsersController@index')->name('index');
            Route::get('/show/{id}','UsersController@show')->name('show');
            Route::post('/delete', 'UsersController@destroy')->name('delete');
            Route::get('/create','UsersController@create')->name('create');
            Route::post('/store','UsersController@store')->name('store');
            Route::get('/edit/{id}', 'UsersController@edit')->name('edit');
            Route::post('/update', 'UsersController@update')->name('update');
        });
        
        Route::name('contact_requests.')->prefix('contact_requests')->group(function(){
            Route::get('/','Contact_requestsController@index')->name('index');
            Route::get('/show/{id}','Contact_requestsController@show')->name('show');
            Route::post('/delete', 'Contact_requestsController@destroy')->name('delete');
            Route::get('/create','Contact_requestsController@create')->name('create');
            Route::post('/store','Contact_requestsController@store')->name('store');
            Route::get('/edit/{id}', 'Contact_requestsController@edit')->name('edit');
            Route::post('/update', 'Contact_requestsController@update')->name('update');
        });
    });
    
});
