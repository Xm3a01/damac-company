<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Traits\AttachmentTrait;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{

    use AttachmentTrait;

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

        $company = Company::first();
        if(!is_null($company)){
            $request['company_id'] = $company->id;
          } else {
          \Session::flash('error' , 'Comapnty is not created');
          return back();
          }

        $portfolio = Portfolio::create($request->except('image'));

        if($request->hasFile('images')) {
            $files = $request->images;

            // $portfolio->clearMediaCollection();
            $this->multiFile($files , $portfolio , 'portfolios');
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

        $portfolio->update($request->except('images'));

        if($request->hasFile('images')) {
            $files = $request->images;

            $portfolio->clearMediaCollection('portfolios');
            $this->multiFile($files , $portfolio , 'portfolios');
        }

        \Session::flash('success' , 'Portfolio successfully updated');
        return redirect()->route('portfolios.index');
    }


    public function destroy(Portfolio $portfolio)
    {
        if($portfolio->image) {
            $partiner->clearMediaCollection('portfolios');
        }
        $portfolio->delete();

        \Session::flash('success' , 'Portfolio successfully delete');
        return redirect()->route('portfolios.index');
    }
}
