<?php

namespace App\Http\Controllers\Dashboard;

use App\Team;
use App\Company;
use App\MediaLink;
use Illuminate\Http\Request;
use App\Traits\AttachmentTrait;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    use AttachmentTrait;
    

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

   
    public function store(TeamRequest $request)
    {
        
        $company = Company::latest()->first();
        if($company){
            $request['company_id'] = $company->id;
        } else {
            \Session::flash('error' , 'You cannot add team without add company');
            return back();
        }

        $team = Team::create($request->except('image'));

        if($request->hasFile('image')) {
            $file = $request->image;
            // $team->clearMediaCollection('teams');
            $this->singleFile($file , $team , 'teams');
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

    
    public function update(TeamRequest $request, Team $team)
    {

        $team->update($request->except('image'));

        
        if($request->hasFile('image')) {
            $file = $request->image;

            $team->clearMediaCollection('teams');
            $this->singleFile($file , $team , 'teams');
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
