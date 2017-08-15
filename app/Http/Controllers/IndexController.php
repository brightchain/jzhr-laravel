<?php

namespace App\Http\Controllers;

use App\Model\Post;
use App\Model\Project;
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
            ->take('6')
            ->get();

        $news=Post::where('columns','j')
            ->where('top','1')
            ->orderBy('order')
            ->orderBy('created_at','DESC')
            ->take('6')
            ->get();

        $trades=Post::where('columns','h')
            ->where('top','1')
            ->orderBy('order')
            ->orderBy('created_at','DESC')
            ->take('6')
            ->get();
        $projects=Project::where('top','1')
            ->orderBy('order')
            ->orderBy('created_at','DESc')
            ->take('6')
            ->get();

        $nav=DB::table('admin_menu')->where('parent_id',15)->get();
        return view('index',compact('slides','name','values','news','teams','trades','projects'));
    }
}

