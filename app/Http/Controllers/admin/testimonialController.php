<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testimonial;
use App\Models\categories;

class testimonialController extends Controller
{
    function testimonial()
    {
        $data['testimonial'] = testimonial::orderBy('id')->paginate(15);
        $data['categories'] = categories::orderBy('name')->get();
        return view('admin.testimonial.index')->with($data);
    }
    function testimonialAdd(Request $request){
        $data = $request->all();
        $id = testimonial::addTestimonial($data);

        return redirect()->back()->with('success', 'New Testimonial Added.');
    }


    function testimonialUpdate(Request $request){
        $data = $request->all();
        $id = base64_decode($data['cid']);
        testimonial::updateTestimonial($id, $data);

        return redirect()->back()->with('success', 'Testimonial Updated.');
    }

    function testimonialDelete($id){
        $id = base64_decode($id);
        
        testimonial::destroy($id);
        return redirect()->back()->with('success', 'Testimonial Successfully Deleted.');
    }
    function testimonialEdit($id){
        $id = base64_decode($id);
        $data['data'] = testimonial::find($id);
        $data['categories'] = categories::orderBy('name')->get();

        return view('admin.response.editTestimonial')->with($data);
    }
}
