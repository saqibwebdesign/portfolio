<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio;
use App\Models\portfolioDetail;
use App\Models\categories;
use Auth;

class portfolioController extends Controller
{
    //
    function index()
    {
        $data['portfolio'] = portfolio::orderBy('id')->paginate(15);
        $data['categories'] = categories::orderBy('name')->get();
        return view('admin.portfolio.index')->with($data);
    }
    function portfolioAdd(Request $request){
        $data = $request->all();
        $id = portfolio::addPortfolio($data);
        if ($request->hasFile('logo_img')) {
            $file = $request->file('logo_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/portfolio/'), $filename);

            portfolio::updateImage($id, $filename);
        }

        for ($i=0; $i < count($request->album); $i++) { 
            $image_source = date('dmyHis').'-'.$request->album[$i]->getClientOriginalName();
            $request->album[$i]->move(public_path('/public/storage/portfolio/album/'),$image_source);

            $c = new portfolioDetail;
            $c->portfolio_id = $id;
            $c->image = $image_source;
            $c->save();
        }


        return redirect()->back()->with('success', 'New Portfolio Added.');
    }
    function portfolioEdit($id){
        $id = base64_decode($id);
        $data['data'] = portfolio::find($id);
        $data['categories'] = categories::orderBy('name')->get();

        return view('admin.response.editPortfolio')->with($data);
    }
    function portfolioUpdate(Request $request){
        $data = $request->all();
        $id = base64_decode($data['cid']);
        portfolio::updateCategory($id, $data);
        if ($request->hasFile('logo_img')) {
            $file = $request->file('logo_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/portfolio/'), $filename);

            portfolio::updateImage($id, $filename);
        }

        return redirect()->back()->with('success', 'Portfolio Updated.');
    }
}
