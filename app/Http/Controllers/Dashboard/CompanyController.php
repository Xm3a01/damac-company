<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::first();
        return view('admins.dashboard.companies.index' , ['company' => $company]);
    }

    public function create()
    {
        $company = Company::first();
        return view('admins.dashboard.companies.create' , ['company' => $company]);
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            // 'name' => 'required',
            'about' => 'required',
            'vission' => 'required',
            'goal' => 'required'
        ]);

        $company = Company::first();
        if(is_null($company)) {
           $company = new  Company();
        }

        if($request->has('about')) {
            $company->about = $request->about;
        }
        if($request->has('vission')) {
            $company->vission = $request->vission;
        }
        if($request->has('goal')) {
            $company->goal = $request->goal;
        }

        $company->save();

        \Session::flash('success' , 'This Company Info is update !');
        return redirect()->route('companies.create' , ['comapny' => $company]);
    }

    public function edit(Company $company)
    {
        return view('admins.dashboard.companies.edit' , ['company' => $company]);
    }


    public function update(Request $request, Company $company)
    {
        $this->validate($request , [
            'name' => 'required',
            'about' => 'required',
            'about_section_1' => 'required',
            'about_section_2' => 'required',
            'about_section_3' => 'required',
            'why_us_title' => 'required',
            'why_us' => 'required',
            'why_us_section_1' => 'required',
            'why_us_section_2' => 'required',
            'why_us_section_3' => 'required',
        ]);

        $company->update($request->all());

        \Session::flash('success' , 'This Company Info is up to date !');
        return redirect()->route('companies.index');
    }

}
