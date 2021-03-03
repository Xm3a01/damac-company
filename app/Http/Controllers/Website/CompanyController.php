<?php

namespace App\Http\Controllers\Website;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::latest()->first();
        $company->load(['services' , 'partiners' , 'portfolioes' , 'teams.links' , 'statstics']);
        
        return view('website.index', ['company' => $company]);
    }
}
