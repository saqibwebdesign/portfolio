<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\portfolio;
use App\Models\testimonial;

class webController extends Controller
{
    function index(){
        $data['categories'] = categories::orderBy('id')->get();
        return view('web.index')->with($data);
    }

    function category($category){
        $cat = urldecode($category);
        $data['category'] = categories::where('name', $cat)->first();
        if(empty($data['category'])){
            return redirect('/');
        }else{
            $data['portfolio'] = portfolio::where('category_id', $data['category']->id)->orderBy('is_featured', 'desc')->paginate(9);
            $data['testimonials'] = testimonial::where('category_id', $data['category']->id)->get();
            return view('web.portfolio')->with($data);
        }
    }

    function categoryLoadMore($id){
        $id = base64_decode($id);
        
        $portfolio = portfolio::where('category_id', $id)->orderBy('is_featured', 'desc')->paginate(9);
        if(count($portfolio) !== 0){
            $html = view('web.response.portfolio', ['portfolio' => $portfolio])->render();
            return response()->json(['status' => 1, 'count' => count($portfolio), 'html' => $html]);
        }else{
            return response()->json(['status' => 0, 'message' => 'No More Portfolio Available.']);
        }
    }
}
