<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use App\Partiner;
use Illuminate\Http\Request;
use App\Traits\AttachmentTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartinerRequest;

class PartinerController extends Controller
{

    use AttachmentTrait;

    public function index()
    {
        $partiners =  Partiner::all();
        return view('admins.dashboard.partiners.index' , ['partiners' => $partiners]);
    }


    public function create()
    {
        return view('admins.dashboard.partiners.create');
    }


    public function store(PartinerRequest $request)
    {

        $company = Company::first();

        if(!is_null($company)){
          $request['company_id'] = $company->id;
        } else {
        \Session::flash('error' , 'Comapnty is not created');
        return back();
        }

        $partiner = Partiner::create($request->except('logo'));

        if($request->hasFile('logo')) {
            $file = $request->logo;

            // $partiner->clearMediaCollection();
            $this->singleFile($file , $partiner , 'partiners');
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


    public function update(PartinerRequest $request, Partiner $partiner)
    {

        if($request->hasFile('logo')) {
            $file = $request->logo;

            $partiner->clearMediaCollection('partiners');
            $this->singleFile($file , $partiner , 'partiners');
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
