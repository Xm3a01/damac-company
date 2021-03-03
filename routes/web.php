<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;


// Route::get('/dashboard', function () {
//     return view('admins.dashboard.index');
// });

Auth::routes();

Route::get('/', 'website\CompanyController@index')->name('home');

Route::prefix('dashboard')->group(function () {
    Route::get('/','Dashboard\IndexController@index')->name('dashboard');
    Route::resource('companies','Dashboard\companyController');
    Route::resource('services','Dashboard\ServiceController');
    Route::resource('teams','Dashboard\TeamController');
    Route::resource('portfolios','Dashboard\PortfolioController');
    Route::resource('statstics','Dashboard\StatsticsController');
    Route::resource('links','Dashboard\LinkController');
    Route::resource('partiners','Dashboard\PartinerController');
});
