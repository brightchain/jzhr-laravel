<?php

namespace App\Http\Controllers;

use App\Model\Company;
use App\Model\Product;
use App\Model\Project;
use Illuminate\Http\Request;

class FundController extends Controller
{
    //
    protected $navColumn='基金管理';

    public function stock()
    {
        $funds=Product::where('type','1')
            ->orderBy('order')
            ->orderBy('updated_at')
            ->paginate(4);
        $title='股权投资';
        $navColumn=$this->navColumn;

        return view('fund.product',compact('funds','title','navColumn'));
    }

    public function show($id)
    {
        $funds=Product::findOrFail($id);
        $title=$funds->title;
        $navColumn=$this->navColumn;

        return view('fund.show',compact('funds','title','navColumn'));
    }

    public function real()
    {
        $funds=Product::where('type','2')
            ->orderBy('order')
            ->orderBy('updated_at')
            ->paginate(4);
        $title='房地产投资';
        $navColumn=$this->navColumn;

        return view('fund.product',compact('funds','title','navColumn'));
    }

    public function placement()
    {
        $funds=Product::where('type','3')
            ->orderBy('order')
            ->orderBy('updated_at')
            ->paginate(4);
        $title='定向增发';
        $navColumn=$this->navColumn;

        return view('fund.product',compact('funds','title','navColumn'));
    }

    public function merger()
    {
        $funds=Product::where('type','4')
            ->orderBy('order')
            ->orderBy('updated_at')
            ->paginate(4);
        $title='并购（M&A）';
        $navColumn=$this->navColumn;

        return view('fund.product',compact('funds','title','navColumn'));
    }

    //业务范围
    public function scope()
    {
        $scope=Company::where('name','scope')->first();
        $title=$scope->title;

        return view('fund.scope',compact('scope','title','navColumn'));
    }

    //项目案列
    public function case()
    {
        $title='项目案列';
        $title1='项目案列';
        $pasts=Project::orderBy('order')
            ->orderBy('created_at','DESC')
            ->paginate(5);

        return view('fund.case',compact('title','pasts','title1','navColumn'));
    }

    public function past($id)
    {
        $pasts=Project::findOrFail($id);
        $title=$pasts->title;
        $title1="项目案列";
        $navColumn='项目案例';

        return view('fund.caseshow',compact('title','pasts','title1','navColumn'));
    }
}
