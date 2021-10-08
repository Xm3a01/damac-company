<?php

namespace App\Providers;

use App\Company;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CompanyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $company = Company::first();
        $company->load(['services' , 'partiners' , 'portfolioes' , 'teams.links' , 'statstics']);
        // dd($company->services);
        View::share('company' , $company);
    }
}
