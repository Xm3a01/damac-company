<?php

namespace App\Http\Controllers\Website;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $comapny = Company::latest()->first();
        $comapny->load(['services' , 'partiners' , 'portfolioes' , 'teams.links' , 'statstics']);

        // dd($comapny);
        return view('website.index', ['comapny' => $comapny]);
    }
}
