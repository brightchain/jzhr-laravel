<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Webinfo;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index()
    {
        $slides=Slide::orderBy('list')->get();
        $webinfos=Webinfo::all();
        $name = $webinfos->mapWithKeys(function ($item) {
            return [$item['title'] => $item['name']];
        });
        $name->all();
        $values=$webinfos->mapWithKeys(function ($item) {
            return [$item['title'] => $item['values']];
        });
        $values->all();
        return view('index',compact('slides','name','values'));
    }
}
