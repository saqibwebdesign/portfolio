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

    function category($id){
        $id = base64_decode($id);
        $data['category'] = categories::find($id);
        $data['portfolio'] = portfolio::where('category_id', $id)->orderBy('is_featured', 'desc')->get();
        $data['testimonials'] = testimonial::where('category_id', $id)->get();
        return view('web.portfolio')->with($data);
    }
}
