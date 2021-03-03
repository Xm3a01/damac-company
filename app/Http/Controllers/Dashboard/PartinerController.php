<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use App\Partiner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartinerController extends Controller
{
   
    public function index()
    {
        $partiners =  Partiner::all();
        return view('admins.dashboard.partiners.index' , ['partiners' => $partiners]);
    }

    
    public function create()
    {
        return view('admins.dashboard.partiners.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required'
        ]);

        $company = Company::latest()->first();

        $request['company_id'] = $company->id;

        $partiner = Partiner::create($request->except('logo'));

        if($request->hasFile('logo')) {
            $ex = $request->logo->getClientOriginalExtension();
            $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
            $partiner->addMedia($request->logo)->usingFileName($fileName)->toMediaCollection('partiners');
        }

        \Session::flash('success' , 'Partiner successfully add');
        return redirect()->route('partiners.index');
    }

    
    public function show(Partiner $partiner)
    {
        return view('admins.dashboard.partiners.show' , ['partiner' => $partiner]);
    }

  
    public function edit(Partiner $partiner)
    {
        return view('admins.dashboard.partiners.edit' , ['partiner' => $partiner]);
    }

    
    public function update(Request $request, Partiner $partiner)
    {
        $this->validate($request , [
            'name' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $file = $request->logo;
            $ex = $file->getClientOriginalExtension();
            $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
            $partiner->clearMediaCollection('partiners');
            $partiner->addMedia($file)
            ->usingFileName($fileName)
            ->toMediaCollection('partiners');
        }

        $partiner->update($request->except('logo'));

        \Session::flash('success' , 'Partiner successfully update');
        return redirect()->route('partiners.index');
    }

   
    public function destroy(Partiner $partiner)
    {
        if($partiner->logo) {
            $partiner->clearMediaCollection('partiners');
        }

        $partiner->delete();
        \Session::flash('success' , 'Partiner successfully delete');
        return redirect()->route('partiners.index');

    }
}
