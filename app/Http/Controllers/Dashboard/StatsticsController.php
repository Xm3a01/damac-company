<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use App\Statstic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatsticsController extends Controller
{
   
    public function index()
    {
        $skills = Statstic::all();
        // dd($skills);
        return view('admins.dashboard.skills.index' , ['skills' => $skills]);
    }

    
    public function create()
    {
        return view('admins.dashboard.skills.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required',
            'percent' => 'required'
        ]);

        $company = Company::latest()->first();
        $request['company_id'] = $company->id;
        Statstic::create($request->all());

        \Session::flash('success' , 'Skill successsfully add');
        return redirect()->route('statstics.index');
    }

   
    public function show($id)
    {
    }

   
    public function edit($id)
    {
    }

   
    public function update(Request $request, $id)
    {
    }

    
    public function destroy($id)
    {
    }
}
