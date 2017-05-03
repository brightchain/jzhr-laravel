<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //关于我们栏目页
    protected $title="关于金砖";

    public function company()
    {
        $url=url('about');
        $title=$this->title;
        return view('about.company',compact('title','url'));

    }

}
