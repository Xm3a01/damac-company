<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;


Route::get('/test', function () {
    return view('website.service-details');
});

Auth::routes();

Route::get('/', 'website\CompanyController@index')->name('home'); 
Route::get('web/portfolios/{item}', 'website\CompanyController@portfolio')->name('web.portfolios'); 
Route::get('web/services/{item}', 'website\CompanyController@service')->name('web.services'); 
Route::get('web/about/{item}', 'website\CompanyController@about')->name('web.about'); 
// web.portfolios

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/','Dashboard\IndexController@index')->name('dashboard');
    Route::resource('companies','Dashboard\companyController');
    Route::resource('services','Dashboard\ServiceController');
    Route::resource('teams','Dashboard\TeamController');
    Route::resource('portfolios','Dashboard\PortfolioController');
    Route::resource('statstics','Dashboard\StatsticsController');
    Route::resource('links','Dashboard\LinkController');
    Route::resource('partiners','Dashboard\PartinerController');
    Route::get('/profile','Dashboard\IndexController@profile')->name('profile');
    Route::get('/profile/show','Dashboard\IndexController@show')->name('profile.show');
    Route::put('/profile','Dashboard\IndexController@store')->name('profile.store');
});
Route::get('signout', 'Auth\LoginController@logout')->name('signout');


