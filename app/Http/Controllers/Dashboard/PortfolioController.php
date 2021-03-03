<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
   
    public function index()
    {
        $portfolios = Portfolio::paginate(100);
        return view('admins.dashboard.portfolios.index' , ['portfolios' => $portfolios]);
    }
   
    public function create()
    {
        return view('admins.dashboard.portfolios.create');
    }
   
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $company = Company::latest()->first();
        $request['company_id'] = $company->id;

        $portfolio = Portfolio::create($request->except('image'));

        if($request->hasFile('image')) {
            foreach ($request->image as $item) {        
                $ex = $item->getClientOriginalExtension();
                $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
                $portfolio->addMedia($item)->usingFileName($fileName)->preservingOriginal()->toMediaCollection('portfolios');
            }
        }
        
        \Session::flash('success' , 'Portfolio successfully add');
        return redirect()->route('portfolios.index');
    }
   
    public function show(Portfolio $portfolio)
    {
        //
    }
   
    public function edit(Portfolio $portfolio)
    {
        return view('admins.dashboard.portfolios.edit', [
            'portfolio' => $portfolio,
        ]);
    }
   
    public function update(Request $request, Portfolio $portfolio)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $portfolio->update($request->excpt('image'));

        if($request->hasFile('image')) {
            $portfolio->clearMediaCollection('portfolios');   
            foreach ($request->image as $item) {     
                $ex = $item->getClientOriginalExtension();
                $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
                $portfolio->addMedia($item)->usingFileName($fileName)->preservingOriginal()->toMediaCollection('portfolios');
            }
        }
        
        \Session::flash('success' , 'Portfolio successfully updated');
        return redirect()->route('portfolios.index');
    }

  
    public function destroy(Portfolio $portfolio)
    {
        if($portfolio->image) {
            $partiner->clearMediaCollection('partiners');
        }
        $portfolio->delete();
        
        \Session::flash('success' , 'Portfolio successfully delete');
        return redirect()->route('portfolios.index');
    }
}
