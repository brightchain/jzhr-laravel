<?php

namespace App\Http\Controllers;

use App\Model\Company;
use App\Model\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    //关于我们栏目页
    protected $navColumn='关于金砖';
    //公司简介
    public function company()
    {
        $company=Company::where('name','company')->first();
        $title=$company->title;
        $navColumn=$this->navColumn;

        return view('about.company',compact('company','title','navColumn'));
    }


    //投资理念
    public function concept()
    {
        $concept=Company::where('name','concept')->first();
        $title=$concept->title;
        $navColumn=$this->navColumn;

        return view('about.concept',compact('concept','title','navColumn'));
    }


    //管理团队
    public function team()
    {

        $teams=Team::orderBy('order')->orderBy('updated_at','DESC')->get();
         $title="管理团队";
        $navColumn=$this->navColumn;

        return view('about.team',compact('teams','title','navColumn'));
    }


    //合规风控
    public function risk()
    {
        $risk=Company::where('name','risk')->first();
        $title=$risk->title;
        $navColumn=$this->navColumn;

        return view('about.risk',compact('risk','title','navColumn'));
    }



}
