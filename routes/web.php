<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return Inertia::render('dashboard/Index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/','Website\CompanyController');
Route::resource('services','Website\SeviceController');
Route::resource('teams','Website\TeamController');
Route::resource('protfolios','Website\ProtfolioController');
