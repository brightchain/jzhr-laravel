<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class IndexController extends Controller
{
    //
    public function index()
    {
        $slides=Slide::all();
        return view('index',compact('slides'));
    }
}
