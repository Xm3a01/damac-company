<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   
    public function index()
    {
        return view('admins.dashboard.index');
    }

    public function profile()
    {
        $user = \Auth::user();
        return view('admins.dashboard.profile.index' , ['user' => $user]);
    }
    public function show()
    {
        $user = \Auth::user();
        return view('admins.dashboard.profile.edit' , ['user' => $user]);
    }

    public function store(Request $request)
    {
        $user = \Auth::user();
        $requestp['password'] = \Hash::make($request->password);

        $user->update($request->all());

        \Session::flash('success' , 'Profile Update successully');
        return redirect()->route('profile');

    }
}
