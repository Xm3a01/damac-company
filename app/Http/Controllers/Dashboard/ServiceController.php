<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use App\Service;
use Illuminate\Http\Request;
use App\Traits\AttachmentTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{

    use AttachmentTrait;


    public $serviceType = [
        'Icons',
        'Others Service',
        'Report service',
        'Quick service',
        'Multi Service',
        'Build Service'
    ];

    public function index()
    {
        $services = Service::paginate(100);
        return view('admins.dashboard.services.index' , ['services' => $services]);
    }


    public function create()
    {
        return view('admins.dashboard.services.create' , ['serviceType' => $this->serviceType]);
    }


    public function store(ServiceRequest $request)
    {

        $company = Company::latest()->first();

        if(!is_null($company)){
            $request['company_id'] = $company->id;
          } else {
          \Session::flash('error' , 'Comapnty is not created');
          return back();
          }

        $service = Service::create($request->except('images'));

        if($request->hasFile('images')) {
            $files = $request->images;

            $this->multiFile($files , $service , 'services');
        }

        \Session::flash('success' , 'Service successfully add');
        return redirect()->route('services.index');
    }

    public function edit(Service $service)
    {
        return view('admins.dashboard.services.edit', [
            'service' => $service,
            'serviceType' => $this->serviceType
        ]);
    }


    public function update($request, Service $service)
    {

        $service->update($request->except('images'));

        if($request->hasFile('images')) {
            $files = $request->images;

            $service->clearMediaCollection('services');
            $this->multiFile($files , $service , 'services');
        }

        \Session::flash('success' , 'Service successfully updated');
        return redirect()->route('services.index');
    }


    public function destroy(Service $service)
    {
        if($service->images) {
            $service->clearMediaCollection('services');
        }
        $service->delete();

        \Session::flash('success' , 'Service successfully delete');
        return redirect()->route('services.index');
    }
}
