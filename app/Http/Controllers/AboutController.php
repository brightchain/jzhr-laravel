<?php

namespace App\Http\Controllers;

use App\Model\Company;
use App\Model\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    //关于我们栏目页

    //公司简介
    public function company()
    {
        $company=Company::where('name','company')->first();
        $title=$company->title;
        return view('about.company',compact('company','title'));
    }


    //投资理念
    public function concept()
    {
        $concept=Company::where('name','concept')->first();
        $title=$concept->title;
        return view('about.concept',compact('concept','title'));
    }


    //管理团队
    public function team()
    {

        $teams=Team::orderBy('order')->orderBy('updated_at','DESC')->get();
         $title="管理团队";
        return view('about.team',compact('teams','title'));
    }


    //合规风控
    public function risk()
    {
        $risk=Company::where('name','risk')->first();
        $title=$risk->title;
        return view('about.risk',compact('risk','title'));
    }



}
