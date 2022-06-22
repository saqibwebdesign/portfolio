<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class webController extends Controller
{
    function index(){
        $data['categories'] = categories::orderBy('id')->get();
        return view('web.index')->with($data);
    }
}
