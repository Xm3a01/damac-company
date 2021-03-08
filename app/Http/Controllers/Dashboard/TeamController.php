<?php

namespace App\Http\Controllers\Dashboard;

use App\Team;
use App\Company;
use App\MediaLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{

    public  $mediaTypes = [
        '',
        'Twitter',
        'Facebook',
        'Instagram',
        'Linkedin',
    ];
   
    public function index()
    {
        $teams = Team::paginate(100);
        return view('admins.dashboard.teams.index' , ['teams' => $teams]);
    }

    
    public function create()
    {
        return view('admins.dashboard.teams.create' ,  ['mediaTypes' => $this->mediaTypes]);
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'job_title' => 'required',
            'description' => 'required',
        ]);

        $company = Company::latest()->first();
        if($company){
            $request['company_id'] = $company->id;
        } else {
            \Session::flash('error' , 'You cannot add team without add company');
            return back();
        }

        $team = Team::create($request->except('image'));

        if($request->hasFile('image')) {   
               $item = $request->image;
               $ex = $item->getClientOriginalExtension(); 
                $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
                $team->addMedia($item)->usingFileName($fileName)->preservingOriginal()->toMediaCollection('teams');
        }

        if($request->link){
            foreach($request->link as $index => $link) {

                
                if($link != "value" && $link != '') {

                    // dd($request->link);
            
                    MediaLink::create([
                        'name' =>'media_'.$index,
                        'link' => $link,
                        'icon' => $index,
                        'team_id' => $team->id
                    ]);
                }
            }
        }
        
        \Session::flash('success' , 'team successfully add');
        return redirect()->route('teams.index');
    }

    
    public function show(Team $team)
    {
        //
    }

   
    public function edit(Team $team)
    {
        return view('admins.dashboard.teams.edit' , ['team' => $team]);
    }

    
    public function update(Request $request, Team $team)
    {
        $this->validate($request, [
            'name' => 'required',
            'job_title' => 'required',
            'description' => 'required',
        ]);

        $team->update($request->except('image'));

        if($request->hasFile('image')) { 
               $team->clearMediaCollection('teams');
               $item = $request->image;   
                $ex = $item->getClientOriginalExtension();
                $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
                $team->addMedia($item)->usingFileName($fileName)->preservingOriginal()->toMediaCollection('teams');
        }
        
        \Session::flash('success' , 'team successfully update');
        return redirect()->route('teams.index');
    }

   
    public function destroy(Team $team)
    {
        if($team->image){
            $team->clearMediaCollection('teams');
        }
        $team->delete();

        \Session::flash('success' , 'team successfully delete');
        return redirect()->route('teams.index');
    }
}
