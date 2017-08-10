<?php

namespace App\Http\Controllers;

use App\Model\Team;
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

        $teams=Team::orderBy('order')
            ->orderBy('updated_at','DESC')
            ->get();

        $nav=DB::table('admin_menu')->where('parent_id',15)->get();
        return view('index',compact('slides','name','values','nav','teams'));
    }
}

