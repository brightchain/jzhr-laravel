<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //关于我们栏目页
    protected $title="关于金砖";

    public function about()
    {
        $title="关于金砖";
        return view('about.company',compact('title'));
    }

    //公司简介
    public function company()
    {
        $title="公司简介";
        return view('about.company',compact('title'));
    }

    //投资理念
    public function concept()
    {
        $title="投资理念";
        return view('about.concept',compact('title'));
    }

    //管理团队
    public function team()
    {
        $title="管理团队";
        return view('about.team',compact('title'));
    }

    //合规风控
    public function risk()
    {
        $title="合规风控";
        return view('about.risk',compact('title'));
    }



}
