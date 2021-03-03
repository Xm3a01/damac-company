<?php

namespace App\Http\Controllers\Dashboard;

use App\Service;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
   
    public function index()
    {
        $services = Service::paginate(100);
        return view('admins.dashboard.services.index' , ['services' => $services]);
    }

  
    public function create()
    {
        return view('admins.dashboard.services.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);

        $company = Company::latest()->first();

        $request['company_id'] = $company->id;

        Service::create($request->all());
        
        \Session::flash('success' , 'Service successfully add');
        return redirect()->route('services.index');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit(Service $service)
    {
        return view('admins.dashboard.services.edit', [
            'service' => $service,
        ]);
    }

    
    public function update(Request $request, Service $service)
    {

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);

        $service->update($request->all());
        
        \Session::flash('success' , 'Service successfully updated');
        return redirect()->route('services.index');
    }

   
    public function destroy(Service $service)
    {
        $service->delete();
        
        \Session::flash('success' , 'Service successfully delete');
        return redirect()->route('services.index');
    }
}
