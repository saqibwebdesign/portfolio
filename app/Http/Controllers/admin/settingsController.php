<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;

class settingsController extends Controller
{
    //
    function catagories()
    {
        $data['categories'] = categories::orderBy('id')->paginate(15);
        return view('admin.categories.index')->with($data);
    }
    function catagoriesAdd(Request $request){
        $data = $request->all();
        $id = categories::addCategory($data);
        if ($request->hasFile('logo_img')) {
            $file = $request->file('logo_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/category/'), $filename);

            categories::updateImage($id, $filename);
        }

        return redirect()->back()->with('success', 'New Category Added.');
    }


    function catagoriesUpdate(Request $request){
        $data = $request->all();
        $id = base64_decode($data['cid']);
        categories::updateCategory($id, $data['name']);
        if ($request->hasFile('logo_img')) {
            $file = $request->file('logo_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/category/'), $filename);

            categories::updateImage($id, $filename);
        }

        return redirect()->back()->with('success', 'Category Updated.');
    }

    function catagoriesDelete($id){
        $id = base64_decode($id);
        $c = categories::find($id);
        
            categories::destroy($id);
            return redirect()->back()->with('success', 'Category Successfully Deleted.');
    }
    function catagoriesEdit($id){
        $id = base64_decode($id);
        $data = categories::find($id);

        return view('admin.response.editCategory', ['data' => $data]);
    }



    function general()
    {
        $data = marketplace::first();
        return view('admin.settings.general', ['data' => $data]);
    }  
    function generalUpdate(Request $request){
        $data = $request->all();

        $g = marketplace::first();
        $g->commission = $data['commission'];
        $g->vat = $data['vat'];
        $g->save();

        return redirect()->back()->with('success', 'General Settings Updated.');
    } 
}
