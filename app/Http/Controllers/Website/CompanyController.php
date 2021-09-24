<?php

namespace App\Http\Controllers\Website;

use App\Company;
use App\Service;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::first();
        if(!is_null($company)){
          $company->load(['services' , 'partiners' , 'portfolioes' , 'teams.links' , 'statstics']);
        } else {
            return  "Oops! It's Look like Admin Did't create comapny yet";
        }
        return view('website.index', ['company' => $company]);
    }

    public function portfolio(Portfolio $item)
    {
        return view('website.portfolio-details',['portfolio' => $item]);
    }

    public function service(Service $item)
    {
        // return $item;
        return view('website.service-details',['service' => $item]);
    }

    public function about(Company $item)
    {
        return view('website.about-details', ['about' => $item]);
    }

    public function contact()
    {
        return view('website.contact');
    }
}
