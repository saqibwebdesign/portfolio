<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    function index(){
        $data['categories'] = categories::orderBy('id')->get();
        return view('web.index')->with($data);
    }
}
